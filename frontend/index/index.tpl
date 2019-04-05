{extends file="parent:frontend/index/index.tpl"}


{block name='frontend_index_content_wrapper'}
{* Flashsale *}	
{if {controllerName|lower} eq 'index' && $theme.ads_active !== false}
{include file="frontend/index/offers.tpl"}
{/if}
{$smarty.block.parent}    

{* USP SLIDER *}
{include file='frontend/detail/content/usp.tpl'}

{/block}





{* Footer Newsletter + backtop + stick *}
{block name="frontend_index_footer"}
{if {controllerName|lower} eq 'index' && $theme.newsletter_active !== false}
{include file="frontend/newsletter/newsletter.tpl"}
{/if}
{$smarty.block.parent}




{* back to top *}
{block name="frontend_index_backtop_footer"}
{include file='frontend/index/backtop.tpl'}
{/block}
{* stick to me *}
{block name="frontend_index_stick_footer"}
{include file='frontend/index/stick.tpl'}
{/block}

{/block}
