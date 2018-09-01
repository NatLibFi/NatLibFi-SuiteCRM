
<table cellpadding="0" cellspacing="0" border="0" width="100%" style="border:none;">

    {foreach from=$views item=view}
        <tr>
            <td>
                {$mod_strings.LBL_FINNA_VIEW_STATUS_TITLE}
                {$view.view_status}
            </td>
            <td>
                {$mod_strings.LBL_FINNA_VIEW_URL_TITLE}
                <a href="{$view.view_url|to_url}" target="_blank">{$view.view_url}</a>
            </td>
        </tr>
        <tr>
            <td>
                {$mod_strings.LBL_FINNA_VIEW_PRODUCTION_DATE_TITLE}
                {$view.production_date}
            </td>
            <td></td>
        </tr>
        <tr class="multirow-last">
            <td>
                {$mod_strings.LBL_FINNA_VIEW_DESCRIPTION_TITLE}
                {$view.description}
            </td>
            <td></td>
        </tr>
    {foreachelse}
        <tr>
            <td>
                <i>{$app_strings.LBL_NONE}</i>
            </td>
        </tr>
    {/foreach}
</table>
