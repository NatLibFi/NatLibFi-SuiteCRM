
<table cellpadding="0" cellspacing="0" border="0" width="100%" style="border:none;">

    {counter start=0 name="rowCounter" print=false assign="rowCounter"}
    {foreach from=$contracts item=contract}
        {if $rowCounter % 2 == 0}
            {assign var="rowClass" value="multirow-odd"}
        {else}
            {assign var="rowClass" value="multirow-even"}
        {/if}
        <tr class="{$rowClass}">
            <td class="contract-name">
                {$contract.contract_name}
            </td>
            <td>
                {if $contract.active}{$mod_strings.LBL_CONTRACT_ACTIVE}{else}{$mod_strings.LBL_CONTRACT_FORMER}{/if}
            </td>
        </tr>
        <tr class="{$rowClass}">
            <td>
                {$mod_strings.LBL_KRONODOC_ID_TITLE}
                {$contract.kronodoc_id}
            </td>
            <td></td>
        </tr>
        <tr class="{$rowClass}">
            <td>
                {$mod_strings.LBL_BIND_YEAR_TITLE}
                {$contract.bind_year}
            </td>
            <td>
                {$mod_strings.LBL_END_DATE_TITLE}
                {$contract.end_date}
            </td>
        </tr>
        <tr class="multirow-last {$rowClass}">
            <td>
                {$mod_strings.LBL_DESCRIPTION_TITLE}
                {$contract.description}
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
