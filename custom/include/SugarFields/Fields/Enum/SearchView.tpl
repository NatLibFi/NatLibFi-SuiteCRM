{* Only show single selection in display/filter views *}
{{capture name=display_size assign=size}}{{$displayParams.size|default:6}}{{/capture}}
{html_options id='{{$vardef.name}}' name='{{$vardef.name}}[]' options={{sugarvar key='options' string=true}} class="templateGroupChooser" selected={{sugarvar key='value' string=true}}}
