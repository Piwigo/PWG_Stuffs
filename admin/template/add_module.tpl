{include file='include/autosize.inc.tpl'}
{html_head}{literal}
<style type="text/css">
.groups { margin-top:15px; }
.groups input { margin-right:5px; }
.groups label { margin-right:10px; display: inline-block; overflow: hidden; white-space: nowrap; line-height:1.3em;}
.groups div { float:right; width:74%; line-height:1.3em;}
</style>
{/literal}{/html_head}

<div class="titrePage">
  <h2>PWG Stuffs - {$STUFFS_TITLE}</h2>
</div>

<form method="post" action="" class="properties" ENCTYPE="multipart/form-data">
<fieldset id="mainConf" >
  <legend>{'stuffs_module_config'|@translate}</legend>
	<ul>
    <li>
      <span class="property">
        <label for="module_name">{'stuffs_module_title'|@translate}</label>
      </span>
      <textarea rows="2" name="module_name" id="module_name" class="description" style="height:2em; width:500px;">{$MODULE_NAME}</textarea>
    </li>
    <li>
      <span class="property">
        <label for="module_desc">{'stuffs_desc'|@translate}<br>&nbsp;</label>
      </span>
      <input type="text" maxlength="255" value="{$DESC_VALUE}" name="module_desc" id="module_desc" style="width:500px;"/><br><i>{'stuffs_only_for_admin'|@translate}</i>
    </li>
    <li>
      <span class="property">
        <label for="show_title">{'stuffs_show_title'|@translate}</label>
      </span>
      <input type="checkbox" name="show_title" id="show_title" value="1" {if $show_title_CHECKED}checked="checked"{/if}>
    </li>

    {if isset($level_perm)}
    <li style="margin-top:15px;">
      <span class="property">
        <label for="level">{'Privacy level'|@translate}</label>
      </span>
      <select name="level" id="level" size="1">{html_options options=$level_perm selected=$level_selected id=privacy}</select>
    </li>
    {/if}

    
    {if isset($users)}
    <li class="groups" style="margin-top:15px;">
      <span class="property">
        <label for="users">{'stuffs_authorized_users'|@translate}</label>
      </span>
      {html_checkboxes options=$users selected=$selected_users name=users}
    </li>
    {/if}

    {if isset($groups)}
    <li class="groups" style="margin-top:15px;">
      <span class="property">
        <label for="groups">{'stuffs_authorized_group'|@translate}</label>
      </span>
      <div>{html_checkboxes options=$groups selected=$selected_groups name=groups}</div>
    </li>
    <li class="groups">
      <div>
        <a href="#" onClick="jQuery('input[name^=\'groups\']').attr('checked', 'checked');return false;">{'stuffs_select_all'|@translate}</a> /
        <a href="#" onClick="jQuery('input[name^=\'groups\']').attr('checked', '');return false;">{'stuffs_unselect_all'|@translate}</a> &nbsp; 
        <i>{'stuffs_guest'|@translate}</i>
      </div>
    </li>
    {/if}
  </ul>
</fieldset>

<fieldset id="indexDisplayConf">
	<legend>{'stuffs_show_module_on'|@translate}</legend>
  <ul>
    {foreach from=$display_options key=option item=value}
    {if $value}
    <li>
      <label>
        <span class="property">{'stuffs_show_'|@cat:$option|@translate}</span>
        <input type="checkbox" name="{$option}" value="1" {if $selected_options[$option]}checked="checked"{/if}>
      </label>
    </li>
    {/if}
    {/foreach}
  </ul>
</fieldset>

{if not empty($MODULE_OPTIONS)}
<fieldset>
	<legend>{'stuffs_module_options'|@translate}</legend>
	{$MODULE_OPTIONS}
</fieldset>
{/if}
<p><input class="submit" type="submit" value="{'Submit'|@translate}" name="submit"/></p>
</form>