
<table cellpadding="0" cellspacing="0" border="0" width="100%" style="border:none;">
    {counter start=0 name="rowCounter" print=false assign="rowCounter"}
    {foreach from=$accounts item=account}
        {if $rowCounter % 2 == 0}
            {assign var="rowClass" value="multirow-odd"}
        {else}
            {assign var="rowClass" value="multirow-even"}
        {/if}
        <tr class="{$rowClass}">
            <td>
                {capture assign="detail_url"}index.php?module=Accounts&action=DetailView&record={$account.account_id}{/capture}
                <a href="{sugar_ajax_url url=$detail_url}">{$account.account_name}</a>
            </td>
        </tr>
        <tr class="{$rowClass}">
            <td>
                {$mod_strings.LBL_CONTACT_ACCOUNT_DEPT_TITLE}
                {$account.account_department}
            </td>
        </tr>
        <tr class="{$rowClass}">
            <td>
                {$mod_strings.LBL_CONTACT_ACCOUNT_ADDRESS_TITLE}
                {$account.account_address}
            </td>
        </tr>
        <tr class="multirow-last {$rowClass}">
            <td>
                {$mod_strings.LBL_CONTACT_ACCOUNT_DESC_TITLE}
                {$account.account_description}
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
