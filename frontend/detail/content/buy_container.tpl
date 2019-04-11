{extends file="parent:frontend/detail/content/buy_container.tpl"}

{block name="frontend_detail_index_configurator"}
    {$smarty.block.parent}
    {if $sArticle.instock < 2}
    <p class="red">Nur noch <b>{$sArticle.instock}</b> in Deiner Größe verfügbar</p>
    {/if}
{/block}    