<?php

require_once 'include/ListView/ListViewData.php';
require_once 'include/ListView/ListViewSmarty.php';
require_once 'custom/include/SearchForm/ContactRoleAwareSearchForm.php';

class RecordIdListLoader {
    private $listViewData;

    public function __construct(ListViewData $listViewData) {
        $this->listViewData = $listViewData;
    }

    public function loadRecordIdsMatchingQuery($module, array $query) {
        $listSeed = SugarModule::get($module)->loadBean();

        if (file_exists('custom/modules/'.$module.'/metadata/searchdefs.php')) {
            require_once('custom/modules/'.$module.'/metadata/searchdefs.php');
        } elseif (file_exists('modules/'.$module.'/metadata/searchdefs.php')) {
            require_once('modules/'.$module.'/metadata/searchdefs.php');
        }

        if(file_exists('custom/modules/'.$module.'/metadata/SearchFields.php')) {
            require_once('custom/modules/'.$module.'/metadata/SearchFields.php');
        } elseif (file_exists('modules/'.$module.'/metadata/SearchFields.php')) {
            require_once('modules/'.$module.'/metadata/SearchFields.php');
        }

        $searchForm = new ContactRoleAwareSearchForm($listSeed, $module);
        $searchForm->setup($searchdefs, $searchFields, 'SearchFormGeneric.tpl');

        $searchForm->populateFromArray($query);
        $where_clauses = $searchForm->generateSearchWhere(true, $module);
        $whereString = '';
        if (!empty($where_clauses)) {
            $whereString = '(' . implode(' ) AND ( ', $where_clauses) . ')';
        }

        $noOffset = -1;
        $limitToAllRecords = -2;

        $data = $this->listViewData->getListViewData($listSeed, $whereString, $noOffset, $limitToAllRecords, array('distinct' => true));

        return array_map(function($x) { return $x['ID']; }, $data['data']);
    }
}
