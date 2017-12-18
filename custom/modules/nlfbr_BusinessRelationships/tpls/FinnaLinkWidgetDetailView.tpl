
<table cellpadding="0" cellspacing="0" border="0" width="100%" style="border:none;">

    {foreach from=$links item=link}
        <tr>
            <td>
                {$mod_strings.LBL_FINNA_LINK_URL_TITLE}
                <a href="{$link.link_url|to_url}">{$link.link_url}</a>
            </td>
        </tr>
        <tr>
            <td>
                {$mod_strings.LBL_FINNA_LINK_DESCRIPTION_TITLE}
                {$link.description}
            </td>
        </tr>
    {foreachelse}
        <tr>
            <td>
                <i>{$app_strings.LBL_NONE}</i>
            </td>
        </tr>
    {/foreach}
</table>