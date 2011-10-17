{if $display_mode == 'cloud'}
<div id="fullTagCloud">
	{foreach from=$tags item=tag}
	<span><a href="{$tag.URL}" class="tagLevel{$tag.level}" title="{$tag.counter}">{$tag.name}</a></span>
	{/foreach}
</div>

{elseif $display_mode == 'letters'}
<table>
  <tr>
    <td valign="top">
  {foreach from=$letters item=letter}
<fieldset class="tagLetter">
  <legend class="tagLetterLegend">{$letter.TITLE}</legend>
  <table class="tagLetterContent">
    {foreach from=$letter.tags item=tag}
    <tr class="tagLine">
      <td><a href="{$tag.URL}">{$tag.name}</a></td>
      <td class="nbEntries">{$pwg->l10n_dec('%d element', '%d elements', $tag.counter)}</td>
    </tr>
    {/foreach}
  </table>
</fieldset>
    {if isset($letter.CHANGE_COLUMN) }
    </td>
    <td valign="top">
    {/if}
  {/foreach}
    </td>
  </tr>
</table>

{elseif $display_mode == 'cumulus'}
<div style="text-align:center;">
<object data="{$PWG_CUMULUS_SWF}/tagcloud.swf" width="{$PWG_CUMULUS_WIDTH}" height="{$PWG_CUMULUS_HEIGHT}" type="application/x-shockwave-flash">
    <param name="movie" value="{$PWG_CUMULUS_SWF}/tagcloud.swf">
    <param name="allowScriptAccess" value="sameDomain">
    <param name="quality" value="high">
    {if ($PWG_CUMULUS_MODE_TRANSPARENT)}
    <param name="wmode" value="transparent">
    {else}
    <param name="bgcolor" value="#{$PWG_CUMULUS_BGCOLOR}">
    {/if}
    <param name="flashvars" value="mode=tags&tcolor={$PWG_CUMULUS_COLOR1}&tcolor2={$PWG_CUMULUS_COLOR2}&hicolor={$PWG_CUMULUS_HICOLOR}&tspeed=100&distr=true&tagcloud=<tags>{foreach from=$tags item=tag}<a href='{$tag.URL}' style='{$tag.size}pt'>{$tag.display_name}</a>{/foreach}</tags>">
  </object>
</div>
{/if}
