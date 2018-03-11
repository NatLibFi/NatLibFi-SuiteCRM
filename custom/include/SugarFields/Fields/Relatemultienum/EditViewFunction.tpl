{* Based on include/SugarFields/Fields/Multienum/EditView.tpl and include/SugarFields/Fields/Relate/EditView.tpl *}

<input type="hidden" id="{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}_multiselect"
name="{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}_multiselect" value="true">
<select id="{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}"
name="{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}[]"
multiple="true" size="6" style="width:150" tabindex="{{$tabindex}}">
{{sugarvar key='value'}}
</select>
