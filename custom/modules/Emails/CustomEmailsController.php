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
            $recipientProvider = new GroupEmailHelper();

            $toAddressIds = explode(',', rtrim($_REQUEST['ids'], ','));
            foreach ($toAddressIds as $id) {
                $recipientData = $recipientProvider->getRecipientNamesAndAddresses($_REQUEST['targetModule'], $id);

                foreach ($recipientData as $recipient) {
                    $formattedName = $locale->getLocaleFormattedName($recipient['first_name'], $recipient['last_name'], $recipient['salutation'], $recipient['title']);

                    $idLine = '<input type="hidden" class="email-compose-view-to-list" ';
                    $idLine .= 'data-record-module="Contacts" ';
                    $idLine .= 'data-record-id="' . 'TODO' . '" ';
                    $idLine .= 'data-record-name="' . htmlspecialchars($formattedName) . '" ';
                    $idLine .= 'data-record-email="' . $recipient['email_address'] . '">';
                    echo $idLine;
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
