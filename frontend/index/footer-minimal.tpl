{extends file="parent:frontend/index/footer-minimal.tpl"}

{block name="frontend_index_minimal_footer"}
    {$smarty.block.parent}    
    {* hide Service menu *}
    {block name="frontend_index_minimal_footer_menu"}{/block}
{/block}