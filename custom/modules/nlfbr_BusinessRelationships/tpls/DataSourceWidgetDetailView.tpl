
<table cellpadding="0" cellspacing="0" border="0" width="100%" style="border:none;">

    {counter start=0 name="rowCounter" print=false assign="rowCounter"}
    {foreach from=$sources item=source}
        {if $rowCounter % 2 == 0}
            {assign var="rowClass" value="multirow-odd"}
        {else}
            {assign var="rowClass" value="multirow-even"}
        {/if}
        <tr class="{$rowClass}">
            <td class="data-source-name">
                {$mod_strings.LBL_DATA_SOURCE_NAME_TITLE}
                {$source.source_name}
            </td>
            <td></td>
        </tr>
        <tr class="{$rowClass}">
            <td>
                {$mod_strings.LBL_DATA_SOURCE_DATABASE_ID_TITLE}
                {$source.database_id}
            </td>
            <td></td>
        </tr>
        <tr class="{$rowClass}">
            <td>
                {$mod_strings.LBL_DATA_SOURCE_BACKEND_SYSTEM_TITLE}
                {foreach from=$source.backend_system item=system}
                    <li>{$systems.$system}</li>
                {/foreach}
            </td>
            <td>
                {$mod_strings.LBL_DATA_SOURCE_HARVESTING_FORMAT_TITLE}
                {foreach from=$source.harvesting_format item=format}
                    <li>{$formats.$format}</li>
                {/foreach}
            </td>
        </tr>
        <tr class="{$rowClass}">
            <td>
                {$mod_strings.LBL_DATA_SOURCE_CONTACT_EMAIL_TITLE}
                {$source.contact_email}
            </td>
            <td>
                {$mod_strings.LBL_DATA_SOURCE_RESTRICTED_METADATA_TITLE}
                <input type="checkbox" disabled="disabled" {if $source.restricted_metadata} checked="checked"{/if}/>
            </td>
        </tr>
        <tr class="multirow-last {$rowClass}">
            <td>
                {$mod_strings.LBL_DATA_SOURCE_DESCRIPTION_TITLE}
                {$source.description}
            </td>
            <td></td>
        </tr>
        {counter name="rowCounter" print=false}
    {foreachelse}
        <tr>
            <td>
                <i>{$app_strings.LBL_NONE}</i>
            </td>
        </tr>
    {/foreach}
</table>
