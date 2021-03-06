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
                    $auditRecord['before_value_string'] = $this->formatEnumValue($fieldName, $auditRecord['before_value_string'], $focus);
                    $auditRecord['after_value_string'] = $this->formatEnumValue($fieldName, $auditRecord['after_value_string'], $focus);
                }
            }
        }

        return $auditList;
    }

    protected function formatEnumValue($fieldName, $value, $bean) {
        if (!isset($bean->field_defs[$fieldName]['function'])) {
            return parent::formatEnumValue($fieldName, $value, $bean);
        }
        $keys = unencodeMultienum($value);
        $functionName = $bean->field_defs[$fieldName]['function'];
        if (isset($bean->field_defs[$fieldName]['function']['name'])) {
            $functionName = $bean->field_defs[$fieldName]['function']['name'];
        }
        $list = array();
        if (function_exists($functionName)) {
            $list = $functionName($bean);
        }
        $values = array();
        foreach ($keys as $key) {
            if (isset($list[$key])) {
                $values[] = $list[$key];
            }
        }
        if (!empty($values)) {
            return implode(', ', $values);
        }
        return $value;
    }
}
