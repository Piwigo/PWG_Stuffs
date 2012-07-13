{assign var='thumbnails' value=$block.thumbnails}
{assign var='derivative_params' value=$block.derivative_params}

{html_style}
{*Set some sizes according to maximum thumbnail width and height*}
.stuffs_block_{$block.ID} SPAN,
.stuffs_block_{$block.ID} .wrap2 A,
.stuffs_block_{$block.ID} LABEL{ldelim}
	width: {$derivative_params->max_width()+2}px !important;
}

.stuffs_block_{$block.ID} .wrap2{ldelim}
	height: {$derivative_params->max_height()+3}px !important;
}
{if $derivative_params->max_width() > 600}
.stuffs_block_{$block.ID} .thumbLegend {ldelim}font-size: 130% !important}
{else}
{if $derivative_params->max_width() > 400}
.stuffs_block_{$block.ID} .thumbLegend {ldelim}font-size: 110% !important}
{else}
.stuffs_block_{$block.ID} .thumbLegend {ldelim}font-size: 90% !important}
{/if}
{/if}
{/html_style}

<ul class="thumbnails stuffs_block_{$block.ID}" id="thumbnails">
{include file='thumbnails.tpl'|@get_extent:'index_thumbnails'}
</ul>