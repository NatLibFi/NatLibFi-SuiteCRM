{* Copy of themes/Suite7/tpls/_globalLinks.tpl except quick-nav DIV *}
<div id="globalLinks">
    {* <ul>
    {foreach from=$GCLS item=GCL name=gcl key=gcl_key}
    <li>
    {if !$smarty.foreach.gcl.first}<span>|</span>{/if}
    <a id="{$gcl_key}_link" href="{$GCL.URL}"{if !empty($GCL.ONCLICK)} onclick="{$GCL.ONCLICK}"{/if}>{$GCL.LABEL}</a>
    {foreach from=$GCL.SUBMENU item=GCL_SUBMENU name=gcl_submenu key=gcl_submenu_key}
    {if $smarty.foreach.gcl_submenu.first}
    {sugar_getimage name="menuarrow" ext=".gif" alt="" other_attributes=''}<br />
    <ul class="cssmenu">
    {/if}
    <li><a id="{$gcl_submenu_key}_link" href="{$GCL_SUBMENU.URL}"{if !empty($GCL_SUBMENU.ONCLICK)} onclick="{$GCL_SUBMENU.ONCLICK}"{/if}>{$GCL_SUBMENU.LABEL}</a></li>
    {if $smarty.foreach.gcl_submenu.last}
    </ul>
    {/if}
    {/foreach}
    </li>
    {/foreach}
    </ul> *}
    <ul id="drop-nav">
        <li> <a href="index.php?module=Users&action=EditView&record={$CURRENT_USER_ID}"><img src="index.php?entryPoint=getImage&imageName=cog.png" class="iconed"> {$CURRENT_USER}</a>
            <ul>
                {foreach from=$GCLS item=GCL name=gcl key=gcl_key}
                    <li>
                        <a id="{$gcl_key}_link" href="{$GCL.URL}"{if !empty($GCL.ONCLICK)} onclick="{$GCL.ONCLICK}"{/if}>{$GCL.LABEL}</a>
                    </li>
                {/foreach}
                <li><a id="logout_link" href='{$LOGOUT_LINK}' class='utilsLink'>{$LOGOUT_LABEL}</a></li>
            </ul>

        </li>
    </ul>

    <ul id="quick-nav">
        <li> <a href="#"><img src="themes/Suite7/images/quickcreate.png" class="quick_create"></a>
            <ul>
                {foreach from=$quickCreateTopMenu item=linkLabel key=module}
                    <li><a href="index.php?module={$module}&action=EditView&return_module={$module}&return_action=DetailView">{$linkLabel}</a/></li>
                {/foreach}
            </ul>

        </li>
    </ul>
</div>
