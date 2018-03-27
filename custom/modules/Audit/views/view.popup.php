<?php

require_once 'include/MVC/View/views/view.popup.php';

class AuditViewPopup extends ViewPopup {

    public function display() {
        if(($this->bean instanceOf SugarBean) && !$this->bean->ACLAccess('list')){
            ACLController::displayNoAccess();
            sugar_cleanup(true);
        }

        $pickerClassName = 'Popup_Picker';
        if(file_exists('custom/modules/' . $this->module . '/Popup_picker.php')){
            require_once('custom/modules/' . $this->module . '/Popup_picker.php');
            $pickerClassName = 'Custom' . $this->module . 'Popup_Picker';
        } elseif (file_exists('modules/' . $this->module . '/Popup_picker.php')){
            require_once('modules/' . $this->module . '/Popup_picker.php');
        }else{
            require_once('include/Popups/Popup_picker.php');
        }

        $popup = new $pickerClassName();
        $popup->_hide_clear_button = true;
        echo $popup->process_page();
    }

}
