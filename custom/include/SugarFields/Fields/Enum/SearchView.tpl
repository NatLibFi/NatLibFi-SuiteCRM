{* Only show single selection in display/filter views *}
{{capture name=display_size assign=size}}{{$displayParams.size|default:6}}{{/capture}}
{html_options id='{{$vardef.name}}' name='{{$vardef.name}}[]' options={{sugarvar key='options' string=true}} size="4" class="templateGroupChooser" {{if $size > 1}}multiple="1"{{/if}} selected={{sugarvar key='value' string=true}}}
