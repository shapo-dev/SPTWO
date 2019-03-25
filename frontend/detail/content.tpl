{extends file="parent:frontend/detail/content.tpl"}



{block name="frontend_detail_index_detail"}
{include file="frontend/detail/content/usp.tpl"}
{$smarty.block.parent}
{/block}



{block name='frontend_detail_index_image_container'}
  {$smarty.block.parent}
  <div class="from--mobile">
    {include file="frontend/detail/content/header.tpl"}
    {include file="frontend/detail/data.tpl"}
  </div>
{/block}
