<?php

require_once 'modules/Leads/controller.php';
require_once 'custom/modules/Leads/CustomLead.php';

class CustomLeadsController extends LeadsController
{
    /*protected function action_listview() {
        $this->bean = new CustomLead();
        parent::action_listview();
    }*/

    /*protected function action_detailview() {
      $GLOBALS['log']->fatal('detail view');
      //  $this->bean = new CustomLead();
        $this->view = 'detail';
        //parent::action_detailview();
    }*/
    //protected function pre_detailview() {
        //$GLOBALS['log']->fatal('pre detail: ' . $this->bean->name);
        //parent::pre_detailview();
    //}

    /*protected function handle_action() {
        parent::handle_action();
       // $GLOBALS['log']->fatal('before: ' .$this->bean->name);
       // $this->setLeadName($this->bean);
       // $GLOBALS['log']->fatal('after: ' .$this->bean->name);
 //       $GLOBALS['log']->fatal('action: ' . $this->bean->name);
  //      $GLOBALS['log']->fatal('action: ' . $this->action);
    }

    private function setLeadName(&$lead) {
        if (isset($lead->accounts_leads_1_name) && $lead->accounts_leads_1_name) {
            $lead->name = $lead->accounts_leads_1_name;
            $lead->full_name = $lead->accounts_leads_1_name;
        } elseif ($lead->account_name) {
            $lead->name = $lead->account_name;
            $lead->full_name = $lead->account_name;
        }
    }*/

}
