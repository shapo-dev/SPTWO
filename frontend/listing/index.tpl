{extends file="parent:frontend/listing/index.tpl"}
{block name='frontend_index_content_left'}

    {block name='frontend_index_controller_url'}
        {* Controller url for the found products counter *}
        {$countCtrlUrl = "{url module="widgets" controller="listing" action="listingCount" params=$ajaxCountUrlParams fullPath}"}
    {/block}
    {if !$hasEmotion}
        {include file='frontend/listing/text.tpl'}
    {/if}
    {include file='frontend/listing/sidebar.tpl'}
{/block}
{block name="frontend_listing_index_text"}

{/block}
