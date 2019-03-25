{extends file="parent:frontend/index/cart.tpl"}

{block name='frontend_basket_basket_is_empty'}
{include file="frontend/index/topbar-usp.tpl"}

<div class="container basket-sad">
<i class="ti ti-face-sad icon-4x"></i>
</div>
                
<div class="basket--info-messages">
{s name="CartInfoEmpty" assign="snippetCartInfoEmpty"}{/s}
{include file="frontend/_includes/messages.tpl" type="warning" content=$snippetCartInfoEmpty}
 </div>

{/block}

