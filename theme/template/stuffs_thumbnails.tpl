{assign var='thumbnails' value=$block.thumbnails}
<ul class="thumbnails" id="thumbnails">
{include file='thumbnails.tpl'|@get_extent:'index_thumbnails'}
</ul>