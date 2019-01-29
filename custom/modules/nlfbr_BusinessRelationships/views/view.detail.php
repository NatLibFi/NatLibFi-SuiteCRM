<?php

require_once 'include/MVC/View/views/view.detail.php';
require_once 'custom/modules/nlfbr_BusinessRelationships/BusinessRelationshipDetailView.php';
class nlfbr_BusinessRelationshipsViewDetail extends ViewDetail
{
    public function preDisplay()
    {
        $metadataFile = $this->getMetaDataFile();
        $this->dv = new BusinessRelationshipDetailView();
        $this->dv->ss =&  $this->ss;
        $this->dv->setup($this->module, $this->bean, $metadataFile, get_custom_file_if_exists('include/DetailView/DetailView.tpl'));
    }
}
