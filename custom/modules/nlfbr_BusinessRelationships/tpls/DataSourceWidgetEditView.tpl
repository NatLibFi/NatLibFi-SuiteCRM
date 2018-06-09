<script type="text/javascript" language="javascript">
var brDataSourceWidgetLoaded = false;
</script>
<script type="text/javascript" src="custom/modules/nlfbr_BusinessRelationships/BusinessRelationshipDataSourceWidget.js"></script>
<script type="text/javascript">
    var module = '{$module}';
</script>

<table style="border-spacing: 0pt;">
    <tr>
        <td valign="top" NOWRAP>
            <table id="{$module}DataSourcesTable" class="datasourcestable">
                <tbody id="targetBody"></tbody>
                    <tr>
                        <td scope="row" NOWRAP>
                            &nbsp;
                        </td>
                        <td scope="row" NOWRAP>
                            <input type=hidden id="{$module}_data_source_widget_id" name="{$module}_data_source_widget_id" value="">
                            <input type=hidden id='brDataSourceWidget' name='brDataSourceWidget' value='1'>
                            {capture assign="other_attributes"}id="{$module}_data_source_widget_add" onclick="javascript:SUGAR.BusinessRelationshipDataSourceWidget.instances.{$module}.addDataSource('{$module}DataSourcesTable', '', '', '', '', '', '', false, '');"{/capture}
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
function init{$module}DataSource(){ldelim}
	if(brDataSourceWidgetLoaded || SUGAR.BusinessRelationshipDataSourceWidget){ldelim}
		var table = YAHOO.util.Dom.get("{$module}DataSourcesTable");
	    var brdsw = SUGAR.BusinessRelationshipDataSourceWidget.instances.{$module} = new SUGAR.BusinessRelationshipDataSourceWidget("{$module}");
		brdsw.view = '{$dataSourceView}';
	    brdsw.dataSourceIsRequired = "{$required}";
	    brdsw.tabIndex = '{$tabindex}';
	    var addDefaultSource = '{$addDefaultDataSource}';
	    var prefillSourceData = '{$prefillSourceData}';
	    var sourceData = {$sourceData};
        brdsw.backendSystemList = {$backendSystemList};
        brdsw.harvestingFormatList = {$harvestingFormatList};
	    if(prefillSourceData == 'true') {ldelim}
	        brdsw.prefillSourceData('{$module}DataSourcesTable', sourceData);
		{rdelim} else if(addDefaultSource == 'true') {ldelim}
	        brdsw.addDataSource('{$module}DataSourcesTable', '', '', '', '', '', '', false, '');
		{rdelim}
		if('{$module}_data_source_widget_id') {ldelim}
		   document.getElementById('{$module}_data_source_widget_id').value = brdsw.count;
		{rdelim}
		SUGAR_callsInProgress--;
	{rdelim}else{ldelim}
		setTimeout("init{$module}DataSource();", 500);
	{rdelim}
{rdelim}

YAHOO.util.Event.onDOMReady(init{$module}DataSource);
</script>
