<div class="titrePage">
	<h2>PWG Stuffs - {'Configuration'|@translate}</h2>
</div>

<form name="stuffsform" method="post" action="" class="properties"  ENCTYPE="multipart/form-data">
<fieldset id="indexDisplayConf">
  <legend>{'stuffs_perm'|@translate}</legend>
  <ul>
      <li>
      <label>
        <span class="property">{'stuffs_level_perm'|@translate}</span>
        <input type="checkbox" name="level_perm" id="level_perm" value="on" {if $stuffs_conf.level_perm}checked="checked"{/if}/>
      </label>
    </li>

    <li>
      <label>
        <span class="property">{'stuffs_user_perm'|@translate}</span>
        <input type="checkbox" name="user_perm" id="user_perm" value="on" {if $stuffs_conf.user_perm}checked="checked"{/if}/>
      </label>
    </li>

    <li>
      <label>
        <span class="property">{'stuffs_group_perm'|@translate}</span>
        <input type="checkbox" name="group_perm" id="group_perm" value="on" {if $stuffs_conf.group_perm}checked="checked"{/if}/>
      </label>
    </li>
  </ul>
</fieldset>

<p><input class="submit" type="submit" value="{'Submit'|@translate}" name="submit"/></p>
</form>
