{extends file="parent:frontend/detail/content.tpl"}



{block name="frontend_detail_index_detail"}
<div class="product--detail-lower">
{* include file='frontend/index/topbar-usp.tpl' *}
{include file='frontend/detail/content/usp.tpl'}

</div>
{$smarty.block.parent}
{/block}



{block name='frontend_detail_index_image_container'}
  {$smarty.block.parent}
  <div class="from--mobile">
    {include file="frontend/detail/content/header.tpl"}
    {include file="frontend/detail/data.tpl"}
  </div>
{/block}
