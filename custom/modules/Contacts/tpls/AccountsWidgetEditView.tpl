<script type="text/javascript" language="javascript">
var contactAccountWidgetLoaded = false;
</script>
<script type="text/javascript" src="custom/modules/Contacts/ContactAccountWidget.js"></script>
<script type="text/javascript">
    var module = '{$module}';
</script>

<table style="border-spacing: 0pt;">
    <tr>
        <td valign="top" NOWRAP>
            <table id="{$module}AccountsTable">
                <tbody id="targetBody"></tbody>
                    <tr>
                        <td scope="row" NOWRAP>
                            <input type=hidden id="{$module}_account_widget_id" name="{$module}_account_widget_id" value="">
                            <input type=hidden id='contactAccountWidget' name='contactAccountWidget' value='1'>
                            {capture assign="other_attributes"}id="{$module}_account_widget_add" onclick="javascript:SUGAR.ContactAccountWidget.instances.{$module}.addAccount('{$module}AccountsTable', '', '', '', '', '', '{$newRowData}');"{/capture}
                            <button type="button" {$other_attributes}>{sugar_getimage name="id-ff-add" alt="$app_strings.LBL_ID_FF_ADD" ext=".png"}</button>
                        </td>
                        <td scope="row" NOWRAP>
                            &nbsp;
                        </td>
                    </tr>
                </tbody>
            </table>
        </td>
    </tr>
</table>

<script type="text/javascript" language="javascript">
SUGAR_callsInProgress++;
function init{$module}Account(){ldelim}
	if(contactAccountWidgetLoaded || SUGAR.ContactAccountWidget){ldelim}
		var table = YAHOO.util.Dom.get("{$module}AccountsTable");
	    var caw = SUGAR.ContactAccountWidget.instances.{$module} = new SUGAR.ContactAccountWidget("{$module}");
		caw.accountView = '{$accountView}';
	    caw.accountIsRequired = "{$required}";
	    caw.tabIndex = '{$tabindex}';
	    var addDefaultAccount = '{$addDefaultAccount}';
	    var prefillAccountData = '{$prefillAccountData}';
	    var accountData = {$accountData};
	    var newAccountData = '{$newRowData}';
	    if(prefillAccountData == 'true') {ldelim}
	        caw.prefillAccountData('{$module}AccountsTable', accountData);
		{rdelim} else if(addDefaultAccount == 'true') {ldelim}
	        caw.addAccount('{$module}AccountsTable', '', '', '', '', '', newAccountData);
		{rdelim}
		if('{$module}_account_widget_id') {ldelim}
		   document.getElementById('{$module}_account_widget_id').value = caw.count;
		{rdelim}
 //       caw.initQuickSearch();
		SUGAR_callsInProgress--;
	{rdelim}else{ldelim}
		setTimeout("init{$module}Account();", 500);
	{rdelim}
{rdelim}

YAHOO.util.Event.onDOMReady(init{$module}Account);
</script>
