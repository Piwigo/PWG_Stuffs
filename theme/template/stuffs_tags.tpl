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
<div id="flashcontent">This will be shown to users with no Flash or Javascript.</div>

  <script type="text/javascript">
    var so = new SWFObject("{$PWG_CUMULUS_SWF}/tagcloud.swf", "tagcloud", "100%", "{$PWG_CUMULUS_HEIGHT}", "7", "#FFFFFF");
    so.addParam("wmode", "transparent");
    so.addVariable("tcolor", "{$PWG_CUMULUS_COLOR1}");
    so.addVariable("tcolor2", "{$PWG_CUMULUS_COLOR2}");
    so.addVariable("hicolor", "{$PWG_CUMULUS_HICOLOR}");
    so.addVariable("mode", "tags");
    so.addVariable("distr", "true");
    so.addVariable("tspeed", "100");
    so.addVariable("tagcloud", 
    "<tags>{foreach from=$tags item=tag}<a href='{$tag.URL}' style='{$tag.size}pt'>{$tag.display_name}</a>{/foreach}</tags>");
    so.write("flashcontent");
  </script>
{/if}
