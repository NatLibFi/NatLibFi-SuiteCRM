<script type="text/javascript" language="javascript">
var serviceMailLinkWidgetLoaded = false;
</script>
<script type="text/javascript" src="custom/modules/Leads/ServiceMailLinkWidget.js"></script>
<script type="text/javascript">
    var module = '{$module}';
</script>

<table style="border-spacing: 0pt;">
    <tr>
        <td valign="top" NOWRAP>
            <table id="{$module}ServiceMailLinksTable" class="servicemaillinkstable">
                <tbody id="targetBody"></tbody>
                    <tr>
                        <td scope="row" NOWRAP>
                            &nbsp;
                        </td>
                        <td scope="row" NOWRAP>
                            <input type=hidden id="{$module}_service_mail_link_widget_id" name="{$module}_service_mail_link_widget_id" value="">
                            <input type=hidden id='serviceMailLinkWidget' name='serviceMailLinkWidget' value='1'>
                            {capture assign="other_attributes"}id="{$module}_service_mail_link_widget_add" onclick="javascript:SUGAR.ServiceMailLinkWidget.instances.{$module}.addServiceMailLink('{$module}ServiceMailLinksTable', '', '', '');"{/capture}
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
function init{$module}ServiceMailLink(){ldelim}
	if(serviceMailLinkWidgetLoaded || SUGAR.ServiceMailLinkWidget){ldelim}
		var table = YAHOO.util.Dom.get("{$module}ServiceMailLinksTable");
	    var smlw = SUGAR.ServiceMailLinkWidget.instances.{$module} = new SUGAR.ServiceMailLinkWidget("{$module}");
		smlw.view = '{$serviceMailLinkView}';
	    smlw.serviceMailLinkIsRequired = "{$required}";
	    smlw.tabIndex = '{$tabindex}';
	    var addDefaultLink  = '{$addDefaultServiceMailLink}';
	    var prefillLinkData = '{$prefillLinkData}';
	    var linkData = {$linkData};
	    if(prefillLinkData == 'true') {ldelim}
	        smlw.prefillLinkData('{$module}ServiceMailLinksTable', linkData);
		{rdelim} else if(addDefaultLink == 'true') {ldelim}
	        smlw.addServiceMailLink('{$module}ServiceMailLinksTable', '', '', '');
		{rdelim}
		if('{$module}_service_mail_link_widget_id') {ldelim}
		   document.getElementById('{$module}_service_mail_link_widget_id').value = smlw.count;
		{rdelim}
		SUGAR_callsInProgress--;
	{rdelim}else{ldelim}
		setTimeout("init{$module}ServiceMailLink();", 500);
	{rdelim}
{rdelim}

YAHOO.util.Event.onDOMReady(init{$module}ServiceMailLink);
</script>
