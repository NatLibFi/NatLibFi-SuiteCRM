
<table cellpadding="0" cellspacing="0" border="0" width="100%" style="border:none;">

    {counter start=0 name="rowCounter" print=false assign="rowCounter"}
    {foreach from=$links item=link}
        {if $rowCounter % 2 == 0}
            {assign var="rowClass" value="multirow-odd"}
        {else}
            {assign var="rowClass" value="multirow-even"}
        {/if}
        <tr class="{$rowClass}">
            <td>
                {$mod_strings.LBL_SERVICE_MAIL_LINK_URL_TITLE}
                <a href="{$link.link_url|to_url}" target="_blank">{$link.link_url}</a>
            </td>
        </tr>
        <tr class="multirow-last {$rowClass}">
            <td>
                {$mod_strings.LBL_SERVICE_MAIL_LINK_DESCRIPTION_TITLE}
                {$link.description}
            </td>
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
