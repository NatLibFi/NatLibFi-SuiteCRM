{* Copied from modules/Leads/tpls/ConvertLead.tpl, did some NLF-specific changes: if there are two options, radio buttons are used instead of checkbox, and the select existing record option is displayed first *}

{{assign var="selectRelation" value=$selectFields[$module]}}
<span class="color">{$ERROR}</span>
{{foreach name=section from=$sectionPanels key=label item=panel}}
{{counter name="panelCount" print=false}}
<h4>
<style>
 input[disabled] {ldelim}
    background-color:lightgray;
 {rdelim}
</style>
<table>
{{if !empty($selectRelation)}}
{if !empty($def.select)}
<tr><td>
  <input class="checkbox" type="radio" name="new{{$module}}" id="useExisting{{$module}}" value="no" onclick="if (document.getElementById('create{{$module}}').style.display === 'none') {ldelim} return;{rdelim} toggleDisplay('create{{$module}}');if (typeof(addRemoveDropdownElement) == 'function') addRemoveDropdownElement('{{$module}}');{if !empty($def.select)}toggle{{$module}}Select();{/if}" {if empty($def.default_action) || $def.default_action != "create"} checked="checked"{/if}>
</td><td>
    {sugar_translate label='LNK_SELECT_{{$module|strtoupper}}' module='Leads'}
    {if $def.required }
        <span class="required">{{$APP.LBL_REQUIRED_SYMBOL}}</span>
    {/if}
</td><td id ="select{{$module}}">
{{sugar_field parentFieldArray='contact_def' vardef=$contact_def[$selectRelation] displayType='EditView' displayParams=$displayParams formName=$form_name call_back_function='set_return_lead_conv'}}
<script>
if (typeof(sqs_objects) == "undefined") sqs_objects = [];
sqs_objects['{{$form_name}}_{$selectFields.{{$module}}}'] = {ldelim}
    form          : '{{$form_name}}',
    method        : 'query',
    modules       : ['{{$module}}'],
    group         : 'or',
    field_list    : ['name', 'id'],
    populate_list : ['{$selectFields.{{$module}}}', '{$contact_def[$selectFields.{{$module}}].id_name}'],
    conditions    : [{ldelim}'name':'name','op':'like','end':'%','value':''{rdelim}],
    required_list : ['{$contact_def[$selectFields.{{$module}}].id_name}'],
    order         : 'name',
    limit         : '10'
{rdelim}
</script>
</td></tr>
{/if}
{{/if}}
<tr><td>
<input type="hidden" name="convert_create_{{$module}}" id="convert_create_{{$module}}" 
    {if ($def.required && empty($def.select)) || (!empty($def.default_action) && $def.default_action == "create")} value="true" {/if}/>

{{if isset($def.templateMeta.form.hidden)}}
{{foreach from=$def.templateMeta.form.hidden item=field}}
{{$field}}   
{{/foreach}}
{{/if}}
{if $def.required }
<script type="text/javascript">
mod_array.push('{{$module}}');//Bug#50590 add all required modules to mod_array
</script>
{/if}
{if !$def.required || !empty($def.select)}
{if !empty($def.select)}
<input class="checkbox" type="radio" name="new{{$module}}" id="new{{$module}}" value="yes" onclick="if (document.getElementById('create{{$module}}').style.display !== 'none') {ldelim} return;{rdelim} toggleDisplay('create{{$module}}');if (typeof(addRemoveDropdownElement) == 'function') addRemoveDropdownElement('{{$module}}');{if !empty($def.select)}toggle{{$module}}Select();{/if}">
{else}
<input class="checkbox" type="checkbox" name="new{{$module}}" id="new{{$module}}" onclick="toggleDisplay('create{{$module}}');if (typeof(addRemoveDropdownElement) == 'function') addRemoveDropdownElement('{{$module}}');{if !empty($def.select)}toggle{{$module}}Select();{/if}">
{/if}
<script type="text/javascript">
{{if !empty($selectRelation)}}
{if !empty($def.select)}
 toggle{{$module}}Select = function(){ldelim} 
    var inputs = document.getElementById('select{{$module}}').getElementsByTagName('input');
	for(var i in inputs) {ldelim}inputs[i].disabled = !inputs[i].disabled;{rdelim}
	var buttons = document.getElementById('select{{$module}}').getElementsByTagName('button');
    for(var i in buttons) {ldelim}buttons[i].disabled = !buttons[i].disabled;{rdelim}
 {rdelim}
{/if}
{{/if}}
 {if !empty($def.default_action) && $def.default_action == "create"}
     {if $lead_conv_activity_opt == 'move' || $lead_conv_activity_opt == 'copy' || $lead_conv_activity_opt == ''}
        YAHOO.util.Event.onContentReady('lead_conv_ac_op_sel', function(){ldelim}
     {else}
        YAHOO.util.Event.onContentReady('create{{$module}}', function(){ldelim}
     {/if}
		toggleDisplay('create{{$module}}');
		document.getElementById('new{{$module}}').checked = true;
                if (typeof(addRemoveDropdownElement) == 'function')
                    addRemoveDropdownElement('{{$module}}');
        {{if !empty($selectRelation)}}
        {if !empty($def.select)}
		toggle{{$module}}Select();
        {/if}
        {{/if}}
	{rdelim});
 {/if}
{/if}
</script>
</td><td>
{sugar_translate label='{{$label}}' module='Leads'}
</td><td>&nbsp;</td></tr>
</table>
</h4>
<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="{$def.templateMeta.panelClass|default:'edit view'}" id ="create{{$module}}" {if !$def.required || !empty($def.select)}style="display:none"{/if}>
{{assign var='rowCount' value=0}}
{{foreach name=rowIteration from=$panel key=row item=rowData}}
    <tr>
    {{assign var='columnsInRow' value=$rowData|@count}}
    {{assign var='columnsUsed' value=0}}

    {{* Loop through each column and display *}}
    {{counter name="colCount" start=0 print=false assign="colCount"}}

    {{foreach name=colIteration from=$rowData key=col item=colData}}
	    {{counter name="colCount" print=false}}
	    {{if count($rowData) == $colCount}}
	        {{assign var="colCount" value=0}}
	    {{/if}}
        {{if empty($def.templateMeta.labelsOnTop) && empty($colData.field.hideLabel)}}
        <td valign="top" id='{{$colData.field.name}}_label' width='{{$def.templateMeta.widths[$smarty.foreach.colIteration.index].label}}%' scope="row">
            {{if isset($colData.field.customLabel)}}
               {{$colData.field.customLabel}}
            {{elseif isset($colData.field.label)}}
               {capture name="label" assign="label"}
               {sugar_translate label='{{$colData.field.label}}' module='{{$module}}'}
               {/capture}
               {$label|strip_semicolon}:
            {{elseif isset($fields[$colData.field.name])}}
               {capture name="label" assign="label"}
               {sugar_translate label='{{$fields[$colData.field.name].vname}}' module='{{$module}}'}
               {/capture}
               {$label|strip_semicolon}:
            {{/if}}
            {{* Show the required symbol if field is required, but override not set.  Or show if override is set *}}
            {{if ($fields[$colData.field.name].required && !isset($colData.field.displayParams.required)) || 
                 (isset($colData.field.displayParams.required) && $colData.field.displayParams.required)}}
                <span class="required">{{$APP.LBL_REQUIRED_SYMBOL}}</span>
            {{/if}}
        </td>
        {{/if}}
        <td valign="top" width='{{$def.templateMeta.widths[$smarty.foreach.colIteration.index].field}}%' {{if $colData.colspan}}colspan='{{$colData.colspan}}'{{/if}}>
        {{if $fields[$colData.field.name] && !empty($colData.field.fields) }}
            {{foreach from=$colData.field.fields item=subField}}
                {{if $fields[$subField.name]}}
                    {counter name="panelFieldCount" print=false}
                    {{sugar_field parentFieldArray='fields' tabindex=$colData.field.tabindex vardef=$fields[$subField.name] displayType='EditView' displayParams=$subField.displayParams formName=$form_name}}&nbsp;
                {{/if}}
            {{/foreach}}
        {{elseif !empty($colData.field.customCode)}}
            {counter name="panelFieldCount" print=false}
            {{php}}$this->_tpl_vars['colData']['field']['displayParams']['idName'] = $this->_tpl_vars['module'] . $this->_tpl_vars['colData']['field']['name'];{{/php}}
            {{sugar_evalcolumn var=$colData.field.customCode colData=$colData tabindex=$colData.field.tabindex}}
        {{elseif $fields[$colData.field.name]}}
            {counter name="panelFieldCount" print=false}
            {{$colData.displayParams}}
            {{php}}$this->_tpl_vars['colData']['field']['displayParams']['idName'] = $this->_tpl_vars['module'] . $this->_tpl_vars['colData']['field']['name'];{{/php}}
            {{sugar_field parentFieldArray='fields' tabindex=$colData.field.tabindex vardef=$fields[$colData.field.name] displayType='EditView' displayParams=$colData.field.displayParams typeOverride=$colData.field.type formName=$form_name}}
        {{/if}}
        </td>
    {{/foreach}}
    </tr>
{{/foreach}}
</table>
{{/foreach}}
