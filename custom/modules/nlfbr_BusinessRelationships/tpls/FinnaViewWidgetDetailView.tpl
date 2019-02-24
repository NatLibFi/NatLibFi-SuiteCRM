
<table cellpadding="0" cellspacing="0" border="0" width="100%" style="border:none;">

    {counter start=0 name="rowCounter" print=false assign="rowCounter"}
    {foreach from=$views item=view}
        {if $rowCounter % 2 == 0}
            {assign var="rowClass" value="multirow-odd"}
        {else}
            {assign var="rowClass" value="multirow-even"}
        {/if}
        <tr class="{$rowClass}">
            <td>
                {$mod_strings.LBL_FINNA_VIEW_STATUS_TITLE}
                {$view.view_status}
            </td>
            <td>
                {$mod_strings.LBL_FINNA_VIEW_URL_TITLE}
                <a href="{$view.view_url|to_url}" target="_blank">{$view.view_url}</a>
            </td>
        </tr>
        <tr class="{$rowClass}">
            <td>
                {$mod_strings.LBL_FINNA_VIEW_PRODUCTION_DATE_TITLE}
                {$view.production_date}
            </td>
            <td> </td>
        </tr>
        <tr class="{$rowClass}">
            <td>
                {$mod_strings.LBL_FINNA_VIEW_PIWIK_ID_TITLE}
                {$view.piwik_id}
            </td>
            <td></td>
        </tr>
        <tr class="multirow-last {$rowClass}">
            <td>
                {$mod_strings.LBL_FINNA_VIEW_DESCRIPTION_TITLE}
                {$view.description}
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
