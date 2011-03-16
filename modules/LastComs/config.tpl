<table>
	<tr>
		<td align="right"><br>{'lastcoms_nb_comments'|@translate} &nbsp;&nbsp;</td>
		<td><br>
		<input type="text" size="3" maxlength="2" value="{$NB_COMMENTS}" name="nb_comments"/></td>
	</tr>
	<tr>
		<td align="right"><br>{'lastcoms_show_buttons'|@translate} &nbsp;&nbsp;</td>
		<td><br>
		<input type="checkbox" name="show_admin_buttons" value="on" {$SHOW_ADMIN_BUTTONS}/></td>
	</tr>
  <tr>
		<td align="right"><br>{'lastcoms_nb_cadres'|@translate} &nbsp;&nbsp;</td>
		<td><br>
    {html_options name=nb_cadres options=$nb_cadres.OPTIONS selected=$nb_cadres.SELECTED}
    </td>
	</tr>
  <tr>
		<td align="right"><br>{'lastcoms_dim'|@translate} : &nbsp;&nbsp; {'lastcoms_width'|@translate} &nbsp;&nbsp;</td>
		<td><br>
		<input type="text" size="3" maxlength="3" value="{$WIDTH}" name="width"/>&nbsp;px</td>
	</tr>
	<tr>
		<td align="right">{'lastcoms_height'|@translate} &nbsp;&nbsp;</td>
		<td>
		<input type="text" size="3" maxlength="3" value="{$HEIGHT}" name="height"/>&nbsp;px</td>
	</tr>
</table>
<br>
