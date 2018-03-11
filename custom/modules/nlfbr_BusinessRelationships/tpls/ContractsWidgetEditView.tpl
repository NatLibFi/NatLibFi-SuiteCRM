<script type="text/javascript" language="javascript">
var brContractWidgetLoaded = false;
</script>
<script type="text/javascript" src="custom/modules/nlfbr_BusinessRelationships/BusinessRelationshipContractWidget.js"></script>
<script type="text/javascript">
    var module = '{$module}';
</script>

<table style="border-spacing: 0pt;">
    <tr>
        <td valign="top" NOWRAP>
            <table id="{$module}ContractsTable" class="contractstable">
                <tbody id="targetBody"></tbody>
                    <tr>
                        <td scope="row" NOWRAP>
                            {$mod_strings.LBL_CONTRACT_ACTIVE_TITLE}
                        </td>
                        <td scope="row" NOWRAP>
                            &nbsp;
                        </td>
                        <td scope="row" NOWRAP>
                            <input type=hidden id="{$module}_contract_widget_id" name="{$module}_contract_widget_id" value="">
                            <input type=hidden id='brContractWidget' name='brContractWidget' value='1'>
                            {capture assign="other_attributes"}id="{$module}_contract_widget_add" onclick="javascript:SUGAR.BusinessRelationshipContractWidget.instances.{$module}.addContract('{$module}ContractsTable', '', '', true, '', '', '', '');"{/capture}
                            <button type="button" {$other_attributes}>{sugar_getimage name="id-ff-add" alt="$app_strings.LBL_ID_FF_ADD" ext=".png"}</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </td>
    </tr>
</table>

<script type="text/javascript" language="javascript">
SUGAR_callsInProgress++;
function init{$module}Contract(){ldelim}
	if(brContractWidgetLoaded || SUGAR.BusinessRelationshipContractWidget){ldelim}
		var table = YAHOO.util.Dom.get("{$module}ContractsTable");
	    var brcw = SUGAR.BusinessRelationshipContractWidget.instances.{$module} = new SUGAR.BusinessRelationshipContractWidget("{$module}");
		brcw.contractView = '{$contractView}';
	    brcw.contractIsRequired = "{$required}";
	    brcw.tabIndex = '{$tabindex}';
	    var addDefaultContract = '{$addDefaultContract}';
	    var prefillContractData = '{$prefillContractData}';
	    var contractData = {$contractData};
        brcw.allContracts = {$allContractData};
        brcw.calendarIcon = '{sugar_getimagepath file="jscalendar.gif"}';
        brcw.calendarFormat =' {$calendarFormat}';
        brcw.calendarFdow =' {$calendarFdow}';
	    if(prefillContractData == 'true') {ldelim}
	        brcw.prefillContractData('{$module}ContractsTable', contractData);
		{rdelim} else if(addDefaultContract == 'true') {ldelim}
	        brcw.addContract('{$module}ContractsTable', '', '', true, '', '', '', '');
		{rdelim}
		if('{$module}_contract_widget_id') {ldelim}
		   document.getElementById('{$module}_contract_widget_id').value = brcw.count;
		{rdelim}
		SUGAR_callsInProgress--;
	{rdelim}else{ldelim}
		setTimeout("init{$module}Contract();", 500);
	{rdelim}
{rdelim}

YAHOO.util.Event.onDOMReady(init{$module}Contract);
</script>
