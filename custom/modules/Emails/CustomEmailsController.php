<?php

require_once 'modules/Emails/EmailsController.php';
require_once 'custom/include/GroupEmailHelper.php';

class CustomEmailsController extends EmailsController
{
    public function action_ComposeView()
    {
        global $locale;

        $this->view = 'compose';
        // For viewing the Compose as modal from other modules we need to load the Emails language strings
        if (isset($_REQUEST['in_popup']) && $_REQUEST['in_popup']) {
            if (!is_file('cache/jsLanguage/Emails/' . $GLOBALS['current_language'] . '.js')) {
                require_once('include/language/jsLanguage.php');
                jsLanguage::createModuleStringsCache('Emails', $GLOBALS['current_language']);
            }
            echo '<script src="cache/jsLanguage/Emails/'. $GLOBALS['current_language'] . '.js"></script>';
        }
        if (isset($_REQUEST['ids']) && isset($_REQUEST['targetModule'])) {
            if ($_REQUEST['targetModule'] === 'Contacts') {
                $toAddressIds = explode(',', rtrim($_REQUEST['ids'], ','));

                if (isset($_REQUEST['current_post']) && !empty($_REQUEST['current_post'])) { 
                    $query = json_decode(html_entity_decode($_REQUEST['current_post']), true); 

                    require_once('include/ListView/ListViewData.php'); 
                    require_once('custom/include/RecordIdListLoader.php'); 

                    $listViewData = new ListViewData(); 
                    $listLoader = new RecordIdListLoader($listViewData); 
                    $toAddressIds = $listLoader->loadRecordIdsMatchingQuery($_REQUEST['targetModule'], $query); 
                }

                foreach ($toAddressIds as $id) {
                    $contact = BeanFactory::getBean('Contacts', $id);
                    if (!$contact) {
                        continue;
                    }

                    $idLine = '<input type="hidden" class="email-compose-view-to-list" ';
                    $idLine .= 'data-record-module="Contacts" ';
                    $idLine .= 'data-record-id="' . htmlspecialchars($id) . '" ';
                    $idLine .= 'data-record-name="' . htmlspecialchars($contact->name) . '" ';
                    $idLine .= 'data-record-email="' . $contact->email1 . '">';
                    echo $idLine;
                }
            } else {
                $recipientProvider = new GroupEmailHelper();

                $toAddressIds = explode(',', rtrim($_REQUEST['ids'], ','));

                if (isset($_REQUEST['current_post']) && !empty($_REQUEST['current_post'])) { 
                    $query = json_decode(html_entity_decode($_REQUEST['current_post']), true); 

                    require_once('include/ListView/ListViewData.php'); 
                    require_once('custom/include/RecordIdListLoader.php'); 

                    $listViewData = new ListViewData(); 
                    $listLoader = new RecordIdListLoader($listViewData); 
                    $toAddressIds = $listLoader->loadRecordIdsMatchingQuery($_REQUEST['targetModule'], $query); 
                }

                foreach ($toAddressIds as $id) {
                    $recipientData = $recipientProvider->getRecipientNamesAndAddresses($_REQUEST['targetModule'], $id);

                    foreach ($recipientData as $recipient) {
                        $formattedName = $locale->getLocaleFormattedName($recipient['first_name'], $recipient['last_name'], $recipient['salutation'], $recipient['title']);

                        $idLine = '<input type="hidden" class="email-compose-view-to-list" ';
                        $idLine .= 'data-record-module="Contacts" ';
                        $idLine .= 'data-record-id="' . htmlspecialchars($recipient['id']) . '" ';
                        $idLine .= 'data-record-name="' . htmlspecialchars($formattedName) . '" ';
                        $idLine .= 'data-record-email="' . $recipient['email_address'] . '">';
                        echo $idLine;
                    }
                }
            }
        }
        if (isset($_REQUEST['relatedModule']) && isset($_REQUEST['relatedId'])) {
            $relateBean = BeanFactory::getBean($_REQUEST['relatedModule'], $_REQUEST['relatedId']);
            $relateLine = '<input type="hidden" class="email-relate-target" ';
            $relateLine .= 'data-relate-module="' . $_REQUEST['relatedModule'] . '" ';
            $relateLine .= 'data-relate-id="' . $_REQUEST['relatedId'] . '" ';
            $relateLine .= 'data-relate-name="' . $relateBean->name . '">';
            echo $relateLine;
        }

    }
}
