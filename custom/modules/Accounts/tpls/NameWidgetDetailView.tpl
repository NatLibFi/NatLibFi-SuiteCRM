<table cellpadding="0" cellspacing="0" border="0" width="100%" style="border:none;">
    <tr>
        <td></td>
        <td>{$mod_strings.LBL_NAME_LANG_HEADER}</td>
        <td>{$mod_strings.LBL_NAME_DEFAULT_LANG_HEADER}</td>
    </tr>

    <tr>
        <td>{$name_fin}</td>
        <td>{$mod_strings.LBL_LANG_FIN}</td>
        <td><input type="radio" name="default_name_lang" disabled="disabled"{if $name_default_lang == '' || $name_default_lang=='fin'} checked="checked"{/if}></td>
    </tr>

    <tr>
        <td>{$name_swe}</td>
        <td>{$mod_strings.LBL_LANG_SWE}</td>
        <td><input type="radio" name="default_name_lang" disabled="disabled"{if $name_default_lang=='swe'} checked="checked"{/if}></td>
    </tr>

    <tr>
        <td>{$name_eng}</td>
        <td>{$mod_strings.LBL_LANG_ENG}</td>
        <td><input type="radio" name="default_name_lang" disabled="disabled"{if $name_default_lang=='eng'} checked="checked"{/if}></td>
    </tr>

    <tr>
        <td>{$name_other}</td>
        <td>{$name_other_lang}</td>
        <td><input type="radio" name="default_name_lang" disabled="disabled"{if $name_default_lang=='other'} checked="checked"{/if}></td>
    </tr>
</table>
