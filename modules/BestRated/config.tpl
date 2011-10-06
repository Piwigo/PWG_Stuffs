{combine_script id="jquery.ui.resizable"}

<table>
	<tr>
		<td align="right"><br>{'stuffs_mv_nb_images'|@translate} &nbsp;&nbsp;</td>
		<td><br><input type="text" name="nb_images" size="3" maxlength="2" value="{$NB_IMAGES}"></td>
	</tr>
	<tr class="cat_options" style="display: none;">
		<td align="right"><br>{'stuffs_mv_category_display'|@translate} &nbsp;&nbsp;</td>
		<td><br>
      <select name="cat_display">
        <option label="{'stuffs_mv_all_cats'|@translate}" value="all" {if $cat_display == 'all'}selected="selected"{/if} onClick="javascript: hide_cat_list();">{'stuffs_mv_all_cats'|@translate}</option>
        <option label="{'stuffs_mv_wo_thumb'|@translate}" value="wo_thumb" {if $cat_display == 'wo_thumb'}selected="selected"{/if} onClick="javascript: hide_cat_list();">{'stuffs_mv_wo_thumb'|@translate}</option>
        <option label="{'stuffs_mv_w_thumb'|@translate}" value="w_thumb" {if $cat_display == 'w_thumb'}selected="selected"{/if} onClick="javascript: hide_cat_list();">{'stuffs_mv_w_thumb'|@translate}</option>
        <option label="{'stuffs_mv_selected_cats'|@translate}" value="selected_cats" {if $cat_display == 'selected_cats'}selected="selected"{/if} onClick="javascript: show_cat_list();">{'stuffs_mv_selected_cats'|@translate}</option>
      </select>
    </td>
	</tr>
	<tr class="cat_selection" style="display: none;">
		<td align="right">
      <br>{'stuffs_mv_cat_selection'|@translate} &nbsp;&nbsp;
      <br>({'stuffs_mv_hold_ctrl'|@translate}) &nbsp;&nbsp;</td>
		<td><br>
		  <select class="categoryList" name="cat_selection[]" multiple="multiple" size="30">
        {html_options options=$category_selection selected=$category_selected}
      </select></td>
	</tr>
</table>
<br>

{literal}
<script type="text/javascript">
resize = false;
function show_cat_list()
{
  jQuery('.cat_selection').show();
  if (!resize)
  {
    resize = true;
    jQuery('.categoryList').resizable({
      handles: "all",
      animate: true,
      animateDuration: "slow",
      animateEasing: "swing",
      preventDefault: true,
      preserveCursor: true,
      autoHide: true,
      ghost: true
    });
  }
}

function hide_cat_list()
{
  jQuery('.cat_selection').hide();
}

jQuery().ready( function () {
  jQuery("input[name='on_cats']").click( function() {
    if (this.checked)
    {
      jQuery('.cat_options').show();
      if (jQuery("select[name='cat_display']").val() == 'selected_cats')
        show_cat_list();
    }
    else
    {
      jQuery('.cat_options').hide();
      hide_cat_list();
    }
  });
});

if (document.getElementsByName("on_cats")[0].checked)
{
  jQuery('.cat_options').show();
  if (jQuery("select[name='cat_display']").val() == 'selected_cats')
  {
    show_cat_list();
  }
}
</script>
{/literal}

