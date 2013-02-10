<div class="titrePage">
  <h2>PWG Stuffs</h2>
</div>

<form method="post" action="" class="properties">

<fieldset id="indexDisplayConf" style="padding-top:25px;">
  <legend>{'stuffs_add_mod'|@translate}</legend>
  <ul>
    {foreach from=$add_module item=module}
    <li>
      <label>
        <span class="property">{$module.NAME}</span>
        <input type="radio" value="{$module.MODULE_PATH}" name="module"/>
        <span style="font-weight:normal;">{$module.DESC}</span>
      </label>
    </li>
    {/foreach}
  </ul>
</fieldset>
<p><input class="submit" name="addModule" type="submit" value="{'stuffs_add_mod'|@translate}"/></p>
</form>