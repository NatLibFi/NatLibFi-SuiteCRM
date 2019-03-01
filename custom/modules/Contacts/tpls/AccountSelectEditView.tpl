{* Copied from include/SugarFields/Fields/Relate/EditView.tpl *}

<input type="text" name="{$nameField}" class={if empty($class) }"sqsEnabled"{else} "{$class}" {/if} tabindex="{$tabindex}" id="{$nameField}" value="{$nameValue}"  autocomplete="off">
<input type="hidden" name="{$idField}" id="{$idField}" value="{$idValue}">
<span class="id-ff multiple">
<button type="button" name="btn_{$nameField}" id="btn_{$nameField}" tabindex="{$tabindex}" title="{$selectLabel}" class="button firstChild" value="{$selectLabel}"
onclick="open_popup(
    &#039;{$module}&#039;,
	600,
	400,
	&#039;&#039;, 
	true, 
	false, 
	{$popupData}, 
	&#039;single&#039;, 
	true
);"><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><button type="button" name="btn_clr_{$nameField}" id="btn_clr_{$nameField}" tabindex="{$tabindex}" title="{$clearLabel}"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, &#039;{$nameField}&#039;, &#039;{$idField}&#039;);"  value="{$clearLabel}"><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
</span>
