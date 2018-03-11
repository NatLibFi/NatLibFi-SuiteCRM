<script type="text/javascript" language="javascript">
var brFinnaDataSourceWidgetLoaded = false;
</script>
<script type="text/javascript" src="custom/modules/nlfbr_BusinessRelationships/BusinessRelationshipFinnaDataSourceWidget.js"></script>
<script type="text/javascript">
    var module = '{$module}';
</script>

<table style="border-spacing: 0pt;">
    <tr>
        <td valign="top" NOWRAP>
            <table id="{$module}FinnaSourcesTable" class="finnasourcestable">
                <tbody id="targetBody"></tbody>
                    <tr>
                        <td scope="row" NOWRAP>
                            &nbsp;
                        </td>
                        <td scope="row" NOWRAP>
                            <input type=hidden id="{$module}_finna_data_source_widget_id" name="{$module}_finna_data_source_widget_id" value="">
                            <input type=hidden id='brFinnaDataSourceWidget' name='brFinnaDataSourceWidget' value='1'>
                            {capture assign="other_attributes"}id="{$module}_finna_data_source_widget_add" onclick="javascript:SUGAR.BusinessRelationshipFinnaDataSourceWidget.instances.{$module}.addFinnaDataSource('{$module}FinnaSourcesTable', '', '', '', '', '', false, '');"{/capture}
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
function init{$module}FinnaDataSource(){ldelim}
	if(brFinnaDataSourceWidgetLoaded || SUGAR.BusinessRelationshipFinnaDataSourceWidget){ldelim}
		var table = YAHOO.util.Dom.get("{$module}FinnaSourcesTable");
	    var brfdsw = SUGAR.BusinessRelationshipFinnaDataSourceWidget.instances.{$module} = new SUGAR.BusinessRelationshipFinnaDataSourceWidget("{$module}");
		brfdsw.view = '{$finnaDataSourceView}';
	    brfdsw.finnaDataSourceIsRequired = "{$required}";
	    brfdsw.tabIndex = '{$tabindex}';
	    var addDefaultSource = '{$addDefaultFinnaDataSource}';
	    var prefillSourceData = '{$prefillSourceData}';
	    var sourceData = {$sourceData};
        brfdsw.backendSystemList = {$backendSystemList};
        brfdsw.harvestingFormatList = {$harvestingFormatList};
	    if(prefillSourceData == 'true') {ldelim}
	        brfdsw.prefillSourceData('{$module}FinnaSourcesTable', sourceData);
		{rdelim} else if(addDefaultSource == 'true') {ldelim}
	        brfdsw.addFinnaDataSource('{$module}FinnaSourcesTable', '', '', '', '', '', false, '');
		{rdelim}
		if('{$module}_finna_data_source_widget_id') {ldelim}
		   document.getElementById('{$module}_finna_data_source_widget_id').value = brfdsw.count;
		{rdelim}
		SUGAR_callsInProgress--;
	{rdelim}else{ldelim}
		setTimeout("init{$module}FinnaDataSource();", 500);
	{rdelim}
{rdelim}

YAHOO.util.Event.onDOMReady(init{$module}FinnaDataSource);
</script>
