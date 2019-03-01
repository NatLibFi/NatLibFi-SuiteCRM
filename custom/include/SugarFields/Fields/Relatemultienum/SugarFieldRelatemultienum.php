<?php

require_once('include/SugarFields/Fields/Multienum/SugarFieldMultienum.php');

class SugarFieldRelatemultienum extends SugarFieldMultienum
{
    public function save(&$bean, $params, $field, $properties, $prefix = '') {
        if (!isset($properties['id_name'])) {
            if (isset($GLOBALS['log'])) {
                $GLOBALS['log']->debug("No 'id_name' key in the definition of field: '$field'");
            }
            return;
        }

        $idField = $properties['id_name'];
        if (!isset($params[$prefix . $idField . '_multiselect'])) {
            if (isset($GLOBALS['log'])) {
                $GLOBALS['log']->debug("Not present in parameter list: '{$idField}_multiselect'");
            }
            return;
        }

        $values = array();
        if (isset($params[$prefix . $idField])) {
            $values = $params[$prefix . $idField];
        }
        if (is_string($values)) {
            $values = array($values);
        }

        if (!is_array($values)) {
            if (isset($GLOBALS['log'])) {
                $GLOBALS['log']->debug("Values of '$idField' not given as an array");
            }
            return;
        }

        $linkedObjects = array();
        // Load related beans
        require('include/modules.php');
        require_once('data/Link.php');
        $class = load_link_class($bean->field_defs[$field]);
   
        $link_obj = new $class($bean->field_defs[$field]['relationship'], $bean, $bean->field_defs[$field]);
        $module = $link_obj->getRelatedModuleName();
        $beanName = $beanList[$module];
        require_once($beanFiles[$beanName]);
        foreach ($values as $id) {
            $obj = new $beanName();
            $obj->retrieve($id);
            $linkedObjects[] = $obj;
        }

        if (!$bean->load_relationship($idField)) {
            return;
        }

        $audited = isset($bean->field_defs[$field]['audited']) && $bean->field_defs[$field]['audited'];
        $auditData = array();

        $oldValues = $bean->$idField->get(true);
        $roleField = null;
        if (get_class($bean->idField) === 'Link') {
            $roleField = $bean->$idField->_get_link_table_role_field($bean->$idField->_relationship_name);
        }
        foreach ($linkedObjects as $obj) {
            $roleArg = array();
            if (!empty($roleField)) {
                $roleArg = array($roleField => 'NULL');
            }
            $bean->$idField->add($obj, $roleArg);
            if ($audited && !in_array($obj->id, $oldValues)) {
                $auditData[] = array(
                    'field_name' => 'backend_system_id',
                    'data_type' => 'relate',
                    'before' => '',
                    'after' => $obj->id,
                );
            }
        }

        // Remove ids no longer related
        foreach ($oldValues as $id) {
            if (!in_array($id, $values)) {
                $bean->$idField->delete($bean->id, $id);
                if ($audited) {
                    $auditData[] = array(
                        'field_name' => 'backend_system_id',
                        'data_type' => 'relate',
                        'before' => $id,
                        'after' => '',
                    );
                }
            }
        }

        if ($audited && !empty($auditData)) {
            foreach ($auditData as $auditRow) {
                $bean->db->save_audit_records($bean, $auditRow);
            }
        }
    }
}
