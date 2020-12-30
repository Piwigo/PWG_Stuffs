{combine_css path="plugins/PWG_Stuffs/admin/stuffs_admin.css"}

{html_style}{literal}
#categoryOrdering li {
  height: 60px;
}
#categoryOrdering p {
  margin-bottom: 0 !important;
  margin-top: 0.5em !important;
}
.MainBlock {
  color: #ff3363;
}
.categoryActions {
  float:right;
  margin:10px 10px 0 0 !important;
}
.categoryActions li {
  display:inline-block;
  padding:0 5px;
  vertical-align:top;
}
.moduleDesc {
  margin-left:30px;
}
  .moduleDesc.error {
    color:red;
  }
.albumTitle {
  margin-left:10px !important;
}
{/literal}{/html_style}

{footer_script require="jquery.ui.sortable"}

{literal}
jQuery().ready(function(){
  jQuery(".catPos").hide();
  jQuery(".drag_button").show();
  jQuery(".categoryLi").css("cursor","move");
  jQuery(".categoryUl").sortable({
    axis: "y",
    opacity: 0.8
  });
  jQuery("#categoryOrdering").submit(function(){
    ar = jQuery(".categoryUl").sortable("toArray");
    for(i=0;i<ar.length;i++) {
      module = ar[i].split("module_");
      document.getElementsByName("position[" + module[1] + "]")[0].value = i;
    }
  });
});
{/literal}

{/footer_script}

<div class="titrePage">
  <h2>PWG Stuffs</h2>
</div>

<form id="categoryOrdering" method="post" action="">

	<ul class="categoryUl">
  {foreach from=$modules item=module}

    <li class="categoryLi virtual_cat" id="module_{$module.ID}">
      {if !empty($module.PATH)}
      <ul class="categoryActions">
        <li>
          {"stuffs_id_ligne"|@translate}&nbsp;
          <select name="id_line[{$module.ID}]">
          {html_options options=$module.ID_LINE_OPTIONS selected=$module.ID_LINE_SELECTED}
          </select>
        </li>
        <li>
          {"stuffs_width"|@translate}&nbsp;
          <input type="text" size="2" maxlength="2" value="{$module.WIDTH}" name="width[{$module.ID}]" > %
        </li>
        {if empty($module.MISSING)}
        <li><a href="{$module.U_EDIT}" title="{"stuffs_edit"|@translate}"><img src="{$themeconf.admin_icon_dir}/category_edit.png" class="button" alt="{"stuffs_edit"|@translate}"/></a></li>
        {/if}
        {if !empty($module.U_DELETE)}
        <li><a href="{$module.U_DELETE}" title="{"stuffs_delete"|@translate}" onclick="return confirm("{"Are you sure?"|@translate|@escape:javascript}");"><img src="{$themeconf.admin_icon_dir}/category_delete.png" class="button" alt="{"stuffs_delete"|@translate}" /></a></li>
        {/if}
      </ul>
      {/if}

      <p class="albumTitle">
        <img src="{$themeconf.admin_icon_dir}/cat_move.png" class="button drag_button" style="display:none;" alt="{"Drag to re-order"|@translate}" title="{"Drag to re-order"|@translate}">
        <strong>{if empty($module.PATH)}<span class="MainBlock">{$module.NAME}</span>{else}<a href="{$module.U_EDIT}">{$module.NAME}</a>{/if}</strong>
        {if !empty($module.TYPE_NAME)}&nbsp;-&nbsp;{$module.TYPE_NAME}{/if}
      </p>
      
      {if !empty($module.MISSING)}
        <p class="moduleDesc error">{$module.MISSING}</p> 
      {elseif !empty($module.DESC)}
        <p class="moduleDesc"><i>{$module.DESC}</i></p>
      {elseif empty($module.PATH)}
        <p class="moduleDesc"><input name="hidemb" type="checkbox" {if $HIDEMB}checked="checked"{/if}> &nbsp;{"Hide on home page"|@translate}</p>
      {/if}

      <p class="catPos">
        <label>
          {"Position"|@translate} :
          <input type="text" size="4" name="position[{$module.ID}]" maxlength="4" value="{$module.POS}">
        </label>
      </p>
    </li>
    {/foreach}
  </ul>

  <p style="text-align: center;">
  <br />
    <input class="submit" name="submitOrder" type="submit" value="{"Save order"|@translate}" />
  </p>
</form>
