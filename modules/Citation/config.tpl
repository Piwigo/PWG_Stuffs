{known_script id="jquery" src=$ROOT_URL|@cat:"themes/default/js/jquery.packed.js"}
{known_script id="jquery.ui" src=$ROOT_URL|@cat:"themes/default/js/ui/packed/ui.core.packed.js"}
{known_script id="jquery.ui.resizable" src=$ROOT_URL|@cat:"themes/default/js/ui/packed/ui.resizable.packed.js"}
<table>
    <tr>
        <td align="center" colspan="2"><b>{'module_Citation_lang'|@translate}</b></td>
        <td align="center"><b>{'module_Citation_code'|@translate}</b></td>
    </tr>
{foreach from=$MODULE_QUOTE_LANGUAGES item=language key=language_key}
    <tr>
        <td align="right">{$language}</td>
        <td>&nbsp;</td>
        <td><textarea cols="50" rows="2" name="quote_config_{$language_key}" id="quote_config_{$language_key}" class="description" style="height: 2em">{$MODULE_QUOTE_DATA[$language_key]}</textarea></td>
    </tr>
{/foreach}
</table>
<br>