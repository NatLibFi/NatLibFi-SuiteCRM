<?php
$viewdefs['Accounts']['ConvertLead'] = array(
    'copyData' => true,
    'required' => true,
    'select' => "account_name",
	'default_action' => '',
    'relationship' => 'accounts_contacts',
    'templateMeta' => array(
        'form'=>array(
            'hidden'=>array(
                '<input type="hidden" name="opportunity_id" value="{$smarty.request.opportunity_id}">',
                '<input type="hidden" name="case_id" value="{$smarty.request.case_id}">',
                '<input type="hidden" name="bug_id" value="{$smarty.request.bug_id}">',
                '<input type="hidden" name="email_id" value="{$smarty.request.email_id}">',
                '<input type="hidden" name="inbound_email_id" value="{$smarty.request.inbound_email_id}">'
            )
        ),
        'maxColumns' => '2', 
        'widths' => array(
            array('label' => '10', 'field' => '30'), 
            array('label' => '10', 'field' => '30'),
        ),
    ),
    'panels' =>array (
        'LNK_NEW_ACCOUNT' => array (
            array(
                array(
                    'customCode' => '<span><b>Uuden organisaation tiedot</b></span>', // TODO: i18n this
                ),
            ),
            array (
                'name',
            ),
            array(
                'parent_name',
            ),
            array(
                array(
                   'name' => 'industry',
                   'label' => 'LBL_INDUSTRY',
                ),
                array(
                    'name' => 'hallinnonala_c',
                    'label' => 'LBL_HALLINNONALA',
                ),
            ),
            array(
                array(
                    'name' => 'sic_code',
                    'label' => 'LBL_SIC_CODE'
                ),
                array(
                    'name' => 'isil_c',
                    'label' => 'LBL_ISIL'
                ),
            ),
            array(
                array(
                    'name' => 'phone_office',
                    'label' => 'LBL_PHONE_OFFICE',    
                ),
                array(
                    'name' => 'phone_alternate',
                    'label' => 'LBL_PHONE_ALTERNATE',
                ),
            ),
            array(
                'lead_email_address',
            ),
            array (
                'website',
            ),
            array(
                array(
                    'name' => 'account_backend_systems_c',
                    'label' => 'LBL_LEAD_BACKEND_SYSTEMS',
                ),
            ),
            array(
                'description'
            ),
            array(
                array(
                    'customCode' => '<hr>'
                ),
            ),
            array(
                array(
                    'customCode' => '<span><b>Asiakassuhteen tiedot</b></span>', // TODO: i18n this
                ),
            ),
            array(
                array (
                    'label' => 'LBL_NLFSE_SERVICES_LEADS_1_FROM_NLFSE_SERVICES_TITLE_SINGULAR',
                    'customCode' => '<span>{$nlf_service_name}</span>',
                ),

            ),
            array (
                array (
                    'name' => 'alliances_c',
                    'label' => 'LBL_LEAD_ALLIANCES',
                ),
            ),
            array(
                'lead_commercial',
            ),
            array(
                'lead_commercial_description',
            ),
            array(
                'lead_description',
            ),
            array(
                array(
                    'customCode' => '<hr>'
                ),
            ),
        )
    ),
);
$viewdefs['Contacts']['ConvertLead'] = array(
    'copyData' => true,
    'required' => true,
    'select' => "report_to_name",
    'default_action' => '',
    'templateMeta' => array(
        'form'=>array(
            'hidden'=>array(
                '<input type="hidden" name="opportunity_id" value="{$smarty.request.opportunity_id}">',
    			'<input type="hidden" name="case_id" value="{$smarty.request.case_id}">',
    			'<input type="hidden" name="bug_id" value="{$smarty.request.bug_id}">',
    			'<input type="hidden" name="email_id" value="{$smarty.request.email_id}">',
    			'<input type="hidden" name="inbound_email_id" value="{$smarty.request.inbound_email_id}">'
            )
        ),
		'maxColumns' => '2', 
        'widths' => array(
            array('label' => '10', 'field' => '30'), 
            array('label' => '10', 'field' => '30'),
        ),
    ),
    'panels' =>array (
        'LNK_NEW_CONTACT' => array (
            array (
                array (
                    'name' => 'first_name',
                    'customCode' => '{html_options name="Contactssalutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="Contactsfirst_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">',
                ),
                'title',
            ), 
            array (
                'last_name',
            ),
            array (
                'department',
            ),
            array (
                'lead_address',
            ),
            array (
                'phone_work',
            ),
            array (
                'phone_other',
            ),
            array (
                'email1',

            ),
            array(
                array(
                    'name' => 'contact_account_role_c',
                    'label' => 'LBL_CONTACT_ACCOUNT_ROLE',
                    //'customCode' => '{php}echo var_export($this->_tpl_vars["bean"], true);{/php}<span>test</span>',
                ),
            ),
            array(
                'lead_contact_br_role',
            ),
        )
    ),
);

$viewdefs['nlfbr_BusinessRelationships']['ConvertLead'] = array(
    'copyData' => true,
    'required' => true,
    'default_action' => 'create',
    'relationship' => 'nlfbr_businessrelationships_leads_1',
    'templateMeta' => array(
        'form'=>array(
            'hidden'=>array(
                '<input type="hidden" name="opportunity_id" value="{$smarty.request.opportunity_id}">',
                '<input type="hidden" name="case_id" value="{$smarty.request.case_id}">',
                '<input type="hidden" name="bug_id" value="{$smarty.request.bug_id}">',
                '<input type="hidden" name="email_id" value="{$smarty.request.email_id}">',
                '<input type="hidden" name="inbound_email_id" value="{$smarty.request.inbound_email_id}">'
            )
        ),
        'maxColumns' => '2', 
        'widths' => array(
            array('label' => '10', 'field' => '30'), 
            array('label' => '10', 'field' => '30'),    
        ),
    ),
    'panels' =>array (
        'LNK_NEW_BUSINESS_RELATIONSHIP' => array (
            array(
                array (
                    'label' => 'LBL_NLFSE_SERVICES_LEADS_1_FROM_NLFSE_SERVICES_TITLE_SINGULAR',
                    'customCode' => '<span>{$nlf_service_name}</span>',
                ),

            ),
            array (
                array (
                    'name' => 'nlfbr_businessrelationships_account_alliances',
                    'label' => 'LBL_LEAD_ALLIANCES',
                ),
            ),
            array(
                'lead_description',
            ),
            array(
                'lead_commercial',
            ),
            array(
                'lead_commercial_description',
            ),
        )
    ),
);
