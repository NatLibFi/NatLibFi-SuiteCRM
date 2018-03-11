<script type="text/javascript" language="javascript">
var brFinnaViewWidgetLoaded = false;
</script>
<script type="text/javascript" src="custom/modules/nlfbr_BusinessRelationships/BusinessRelationshipFinnaViewWidget.js"></script>
<script type="text/javascript">
    var module = '{$module}';
</script>

<table style="border-spacing: 0pt;">
    <tr>
        <td valign="top" NOWRAP>
            <table id="{$module}FinnaViewsTable" class="finnaviewstable">
                <tbody id="targetBody"></tbody>
                    <tr>
                        <td scope="row" NOWRAP>
                            &nbsp;
                        </td>
                        <td scope="row" NOWRAP>
                            <input type=hidden id="{$module}_finna_view_widget_id" name="{$module}_finna_view_widget_id" value="">
                            <input type=hidden id='brFinnaViewWidget' name='brFinnaViewWidget' value='1'>
                            {capture assign="other_attributes"}id="{$module}_finna_view_widget_add" onclick="javascript:SUGAR.BusinessRelationshipFinnaViewWidget.instances.{$module}.addFinnaView('{$module}FinnaViewsTable', '', 'eitietoa', '', false, '');"{/capture}
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
function init{$module}FinnaView(){ldelim}
	if(brFinnaViewWidgetLoaded || SUGAR.BusinessRelationshipFinnaViewWidget){ldelim}
		var table = YAHOO.util.Dom.get("{$module}FinnaViewsTable");
	    var brfvw = SUGAR.BusinessRelationshipFinnaViewWidget.instances.{$module} = new SUGAR.BusinessRelationshipFinnaViewWidget("{$module}");
		brfvw.view = '{$finnaViewView}';
	    brfvw.finnaViewIsRequired = "{$required}";
	    brfvw.tabIndex = '{$tabindex}';
	    var addDefaultView = '{$addDefaultFinnaView}';
	    var prefillViewData = '{$prefillViewData}';
	    var viewData = {$viewData};
        brfvw.viewStatusList = {$allViewStatusList};
	    if(prefillViewData == 'true') {ldelim}
	        brfvw.prefillViewData('{$module}FinnaViewsTable', viewData);
		{rdelim} else if(addDefaultView == 'true') {ldelim}
	        brfvw.addFinnaView('{$module}FinnaViewsTable', 'eitietoa', '','', false, '');
		{rdelim}
		if('{$module}_finna_view_widget_id') {ldelim}
		   document.getElementById('{$module}_finna_view_widget_id').value = brfvw.count;
		{rdelim}
		SUGAR_callsInProgress--;
	{rdelim}else{ldelim}
		setTimeout("init{$module}FinnaView();", 500);
	{rdelim}
{rdelim}

YAHOO.util.Event.onDOMReady(init{$module}FinnaView);
</script>
