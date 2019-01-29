
<table cellpadding="0" cellspacing="0" border="0" width="100%" style="border:none;">
    {foreach from=$accounts item=account}
        <tr>
            <td>
                {capture assign="detail_url"}index.php?module=Accounts&action=DetailView&record={$account.account_id}{/capture}
                <a href="{sugar_ajax_url url=$detail_url}">{$account.account_name}</a>
            </td>
        </tr>
        <tr>
            <td>
                {$mod_strings.LBL_CONTACT_ACCOUNT_DEPT_TITLE}
                {$account.account_department}
            </td>
        </tr>
        <tr>
            <td>
                {$mod_strings.LBL_CONTACT_ACCOUNT_ADDRESS_TITLE}
                {$account.account_address}
            </td>
        </tr>
        <tr class="multirow-last">
            <td>
                {$mod_strings.LBL_CONTACT_ACCOUNT_DESC_TITLE}
                {$account.account_description}
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
