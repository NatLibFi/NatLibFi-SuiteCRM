<script type="text/javascript" language="javascript">
var brFinnaLinkWidgetLoaded = false;
</script>
<script type="text/javascript" src="custom/modules/nlfbr_BusinessRelationships/BusinessRelationshipFinnaLinkWidget.js"></script>
<script type="text/javascript">
    var module = '{$module}';
</script>

<table style="border-spacing: 0pt;">
    <tr>
        <td valign="top" NOWRAP>
            <table id="{$module}FinnaLinksTable" class="finnalinkstable">
                <tbody id="targetBody"></tbody>
                    <tr>
                        <td scope="row" NOWRAP>
                            &nbsp;
                        </td>
                        <td scope="row" NOWRAP>
                            <input type=hidden id="{$module}_finna_link_widget_id" name="{$module}_finna_link_widget_id" value="">
                            <input type=hidden id='brFinnaLinkWidget' name='brFinnaLinkWidget' value='1'>
                            {capture assign="other_attributes"}id="{$module}_finna_link_widget_add" onclick="javascript:SUGAR.BusinessRelationshipFinnaLinkWidget.instances.{$module}.addFinnaLink('{$module}FinnaLinksTable', '', '', '');"{/capture}
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
function init{$module}FinnaLink(){ldelim}
	if(brFinnaLinkWidgetLoaded || SUGAR.BusinessRelationshipFinnaLinkWidget){ldelim}
		var table = YAHOO.util.Dom.get("{$module}FinnaLinksTable");
	    var brflw = SUGAR.BusinessRelationshipFinnaLinkWidget.instances.{$module} = new SUGAR.BusinessRelationshipFinnaLinkWidget("{$module}");
		brflw.view = '{$finnaLinkView}';
	    brflw.finnaLinkIsRequired = "{$required}";
	    brflw.tabIndex = '{$tabindex}';
	    var addDefaultLink  = '{$addDefaultFinnaLink}';
	    var prefillLinkData = '{$prefillLinkData}';
	    var linkData = {$linkData};
	    if(prefillLinkData == 'true') {ldelim}
	        brflw.prefillLinkData('{$module}FinnaLinksTable', linkData);
		{rdelim} else if(addDefaultLink == 'true') {ldelim}
	        brflw.addFinnaLink('{$module}FinnaLinksTable', '', '', '');
		{rdelim}
		if('{$module}_finna_link_widget_id') {ldelim}
		   document.getElementById('{$module}_finna_link_widget_id').value = brflw.count;
		{rdelim}
		SUGAR_callsInProgress--;
	{rdelim}else{ldelim}
		setTimeout("init{$module}FinnaLink();", 500);
	{rdelim}
{rdelim}

YAHOO.util.Event.onDOMReady(init{$module}FinnaLink);
</script>
