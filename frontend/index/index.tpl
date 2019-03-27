{extends file="parent:frontend/index/index.tpl"}


{block name='frontend_index_content_wrapper'}
{* Flashsale *}	
{if {controllerName|lower} eq 'index' && $theme.ads_active !== false}
{include file="frontend/index/offers.tpl"}
{/if}
{$smarty.block.parent}    
{/block}


{block name="frontend_index_footer"}
{$smarty.block.parent}
{if {controllerName|lower} eq 'index' && $theme.newsletter_active !== false}
{include file="frontend/newsletter/newsletter.tpl"}
{/if}
{/block}
