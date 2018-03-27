<?php

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
            }
        }

        return $auditList;
    }

}
