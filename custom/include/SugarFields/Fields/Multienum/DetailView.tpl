{*
Based on include/SugarFields/Fields/Relate/DetailView.tpl. Allows making item link to a particular module,
assuming item value is the ID of the relevant module's record.
This option is turned on by specifying linkModule key in variable definition.
*}
{if !empty({{sugarvar key='value' string=true}}) && ({{sugarvar key='value' string=true}} != '^^')}
<input type="hidden" class="sugar_field" id="{{sugarvar key='name'}}" value="{{sugarvar key='value'}}">
{multienum_to_array string={{sugarvar key='value' string=true}} assign="vals"}
{foreach from=$vals item=item}
<li style="margin-left:10px;">
{if !empty({{sugarvar key='linkModule' string=true}})}
{capture assign="detail_url"}index.php?module={{$vardef.linkModule}}&action=DetailView&record={$item}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
{ {{sugarvar key='options' string=true}}.$item }
{if !empty({{sugarvar key='linkModule' string=true}})}</a>{/if}
</li>
{/foreach}
{{if !empty($displayParams.enableConnectors)}}
{{sugarvar_connector view='DetailView'}}
{{/if}}
{/if}
