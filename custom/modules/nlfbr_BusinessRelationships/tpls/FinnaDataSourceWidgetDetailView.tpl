
<table cellpadding="0" cellspacing="0" border="0" width="100%" style="border:none;">

    {foreach from=$sources item=source}
        <tr>
            <td>
                {$mod_strings.LBL_FINNA_SOURCE_NAME_TITLE}
                {$source.source_name}
            </td>
            <td></td>
        </tr>
        <tr>
            <td>
                {$mod_strings.LBL_FINNA_SOURCE_BACKEND_SYSTEM_TITLE}
                {$source.backend_system}
                {foreach from=$source.backend_system item=system}
                    <li>{$systems.$system}</li>
                {/foreach}
            </td>
            <td>
                {$mod_strings.LBL_FINNA_SOURCE_HARVESTING_FORMAT_TITLE}
                {foreach from=$source.harvesting_format item=format}
                    <li>{$formats.$format}</li>
                {/foreach}
            </td>
        </tr>
        <tr>
            <td>
                {$mod_strings.LBL_FINNA_SOURCE_CONTACT_EMAIL_TITLE}
                {$source.contact_email}
            </td>
            <td>
                {$mod_strings.LBL_FINNA_SOURCE_RESTRICTED_METADATA_TITLE}
                <input type="checkbox" disabled="disabled" {if $source.restricted_metadata} checked="checked"{/if}/>
            </td>
        </tr>
        <tr>
            <td>
                {$mod_strings.LBL_FINNA_SOURCE_DESCRIPTION_TITLE}
                {$source.description}
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
