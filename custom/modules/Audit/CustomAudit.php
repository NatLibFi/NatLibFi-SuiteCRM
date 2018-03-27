<?php

require_once 'include/utils.php';
require_once 'modules/Audit/Audit.php';

class CustomAudit extends Audit {

    const COMPOSITE_FIELD_PREFIX = 'refers_';

    public function get_audit_list() {
        global $focus;

        $auditList = parent::get_audit_list();

        foreach ($auditList as &$auditRecord) {
            if (substr($auditRecord['field_name'], 0, strlen(self::COMPOSITE_FIELD_PREFIX)) === self::COMPOSITE_FIELD_PREFIX) {
                list($referedField, $referedId, $fieldName) = explode('|', substr($auditRecord['field_name'], strlen(self::COMPOSITE_FIELD_PREFIX)), 3);
                if (!$referedId || !$fieldName) {
                    continue;
                }

                $referedName = parent::getAssociatedFieldName($referedField, $referedId);
                if(isset($focus->field_defs[$fieldName]['vname'])) {
                    $label = $focus->field_defs[$fieldName]['vname'];
                    $fieldLabel = translate($label, $focus->module_dir);
                    $auditRecord['field_name'] = $fieldLabel . ' (' . $referedName . ')'; // TODO: i18n!
                }

                if ($auditRecord['data_type'] === 'enum' || $auditRecord['data_type'] === 'multienum') {
                    global $app_list_strings;
                    $beforeKeys = unencodeMultienum($auditRecord['before_value_string']);
                    $beforeValues = array();
                    $afterKeys = unencodeMultienum($auditRecord['after_value_string']);
                    $afterValues = array();

                    $list = array();
                    if (isset($focus->field_defs[$fieldName]['options'])) {
                        $listName = $focus->field_defs[$fieldName]['options'];
                        $list = $app_list_strings[$listName];
                    } elseif (isset($focus->field_defs[$fieldName]['function'])) {
                        $functionName = $focus->field_defs[$fieldName]['function']['name'];
                        if (function_exists($functionName)) {
                            $list = $functionName();
                        }
                    }

                    foreach ($beforeKeys as $key) {
                        if (isset($list[$key])) {
                            $beforeValues[] = $list[$key];
                        }
                    }
                    foreach ($afterKeys as $key) {
                        if (isset($list[$key])) {
                            $afterValues[] = $list[$key];
                        }
                    }

                    if (!empty($beforeValues)) {
                        $auditRecord['before_value_string'] = implode(', ', $beforeValues);
                    }
                    if (!empty($afterValues)) {
                        $auditRecord['after_value_string'] = implode(', ', $afterValues);
                    }
                }
            }
        }

        return $auditList;
    }

}
