<?php

require_once 'custom/include/MVC/View/views/view.list.php';
require_once 'custom/modules/nlfal_Alliances/CustomAlliancesListViewSmarty.php';

class nlfal_AlliancesViewList extends CustomViewList {

    public function preDisplay() {
        parent::preDisplay();

        $this->lv = new CustomAlliancesListViewSmarty();
    }

    /*public */function prepareSearchForm()
    {
        // Below part is simply copied over from the parent class
        $view = 'basic_search';
        if(!empty($_REQUEST['search_form_view']) && $_REQUEST['search_form_view'] == 'advanced_search')
            $view = $_REQUEST['search_form_view'];
        $this->headers = true;

        if(!empty($_REQUEST['search_form_only']) && $_REQUEST['search_form_only'])
            $this->headers = false;
        elseif(!isset($_REQUEST['search_form']) || $_REQUEST['search_form'] != 'false')
        {
            if(isset($_REQUEST['searchFormTab']) && $_REQUEST['searchFormTab'] == 'advanced_search')
            {
                $view = 'advanced_search';
            }
            else
            {
                $view = 'basic_search';
            }
        }

        $this->use_old_search = false;
        //require_once('include/SearchForm/SearchForm2.php');
        require_once 'custom/include/SearchForm/ContactRoleAwareSearchForm.php';

        $searchMetaData = SearchForm::retrieveSearchDefs($this->module);

        $this->searchForm = new ContactRoleAwareSearchForm($this->seed, $this->module, $this->action);
        $this->searchForm->setup($searchMetaData['searchdefs'], $searchMetaData['searchFields'], 'SearchFormGeneric.tpl', $view, $this->listViewDefs);
        $this->searchForm->lv = $this->lv;
    }
}
