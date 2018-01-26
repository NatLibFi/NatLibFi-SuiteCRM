
<table cellpadding="0" cellspacing="0" border="0" width="100%" style="border:none;">

    {foreach from=$contracts item=contract}
        <tr>
            <td>
                {$contract.contract_name}
            </td>
            <td>
                {if $contract.active}{$mod_strings.LBL_CONTRACT_ACTIVE}{else}{$mod_strings.LBL_CONTRACT_FORMER}{/if}
            </td>
        </tr>
        <tr>
            <td>
                {$mod_strings.LBL_KRONODOC_ID_TITLE}
                {$contract.kronodoc_id}
            </td>
            <td></td>
        </tr>
        <tr>
            <td>
                {$mod_strings.LBL_BIND_YEAR_TITLE}
                {$contract.bind_year}
            </td>
            <td>
                {$mod_strings.LBL_END_DATE_TITLE}
                {$contract.end_date}
            </td>
        </tr>
        <tr class="multirow-last">
            <td>
                {$mod_strings.LBL_DESCRIPTION_TITLE}
                {$contract.description}
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
