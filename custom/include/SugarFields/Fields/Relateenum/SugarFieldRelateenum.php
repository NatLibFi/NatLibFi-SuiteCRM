<?php

require_once('include/SugarFields/Fields/Enum/SugarFieldEnum.php');

class SugarFieldRelateenum extends SugarFieldEnum
{
    public function save(&$bean, $params, $field, $properties, $prefix = '') {
$GLOBALS['log']->fatal('params:');
$GLOBALS['log']->fatal(print_r($params, true));
$GLOBALS['log']->fatal('field:');
$GLOBALS['log']->fatal(print_r($field, true));
$GLOBALS['log']->fatal('props');
$GLOBALS['log']->fatal(print_r($properties, true));

return;
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

        $oldValues = $bean->$idField->get(true);
        $roleField = $bean->$idField->_get_link_table_role_field($bean->$idField->_relationship_name);
        foreach ($linkedObjects as $obj) {
            $roleArg = array();
            if (!empty($roleField)) {
                $roleArg = array($roleField => 'NULL');
            }
            $bean->$idField->add($obj, $roleArg);
        }

        // Remove ids no longer related
        foreach ($oldValues as $id) {
            if (!in_array($id, $values)) {
                $bean->$idField->delete($bean->id, $id);
            }
        }
    }
}
