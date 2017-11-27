<table style="border-spacing: 0pt;">
    <tr>
        <td></td>
        <td>{$mod_strings.LBL_NAME_LANG_HEADER}</td>
        <td>{$mod_strings.LBL_NAME_DEFAULT_LANG_HEADER}</td>
    </tr>

    <tr>
        <td><input type="text" name="name_fin_c" value="{$name_fin}"/></td>
        <td>{$mod_strings.LBL_LANG_FIN}</td>
        <td><input type="radio" name="name_default_lang_c" value="fin"{if $name_default_lang=='' || $name_default_lang=='fin'} checked="checked"{/if}></td>
    </tr>

    <tr>
        <td><input type="text" name="name_swe_c" value="{$name_swe}"/></td>
        <td>{$mod_strings.LBL_LANG_SWE}</td>
        <td><input type="radio" name="name_default_lang_c" value="swe"{if $name_default_lang=='swe'} checked="checked"{/if}></td>
    </tr>

    <tr>
        <td><input type="text" name="name_eng_c" value="{$name_eng}"/></td>
        <td>{$mod_strings.LBL_LANG_ENG}</td>
        <td><input type="radio" name="name_default_lang_c" value="eng"{if $name_default_lang=='eng'} checked="checked"{/if}></td>
    </tr>

    <tr>
        <td><input type="text" name="name_other_c" value="{$name_other}"/></td>
        <td><input type="text" name="name_other_lang_c" value="{$name_other_lang}"/></td>
        <td><input type="radio" name="name_default_lang_c" value="other"{if $name_default_lang=='other'} checked="checked"{/if}></td>
    </tr>
</table>
