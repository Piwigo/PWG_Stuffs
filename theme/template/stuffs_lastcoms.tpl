<div id="comments">
<ul class="thumbnailCategories">
{foreach from=$block.comments item=comment}
<li {if isset($comment.CLASS)}class="{$comment.CLASS}"{/if}>
	<div class="thumbnailCategory">
    {if isset($comment.TN_SRC)}
    <div class="illustration">
      <a href="{$comment.U_PICTURE}">
        <img src="{$comment.TN_SRC}" alt="{$comment.ALT}"
          style="{if !empty($comment.WIDTH)}max-width: {$comment.WIDTH}px; {/if}{if !empty($comment.HEIGHT)}max-height: {$comment.HEIGHT}px; {/if}"/>
      </a>
    </div>
    {/if}
    <div class="description">
      {if isset($comment.U_DELETE) or isset($comment.U_VALIDATE) }
      <div class="actions" style="float:right">
        {if !empty($comment.U_DELETE)}
          <a href="{$comment.U_DELETE}" title="{'delete this comment'|@translate}" onClick="return confirm('{'Are you sure?'|@translate|@escape:'javascript'}');">
            <img src="{$ROOT_URL}{$themeconf.icon_dir}/delete.png" class="button" alt="[delete]" />
          </a>
        {/if}
        {if !empty($comment.U_VALIDATE)}
          <a href="{$comment.U_VALIDATE}" title="validate this comment">
            <img src="{$ROOT_URL}{$themeconf.icon_dir}/validate_s.png" class="button" alt="[validate]" />
          </a>
        {/if}
      </div>
      {/if}
      <span class="author">{$comment.AUTHOR}</span> - <span class="date">{$comment.DATE}</span>
      {if !empty($comment.U_EDIT)}- <a href="{$comment.U_EDIT}">{'ce_edit_tool'|@translate}</a>{/if}
      <blockquote>{$comment.CONTENT}</blockquote>
    </div>
  </div>
</li>
{if isset($comment_separator)}
<hr/>
{/if}
{/foreach}
</ul>
</div>
