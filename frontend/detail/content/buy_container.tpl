{extends file="parent:frontend/detail/content/buy_container.tpl"}

{block name="frontend_detail_index_configurator"}
    {$smarty.block.parent}
    <p>Nur noch <b>{$sArticle.instock}</b> in Deiner Größe verfügbar</p>

{/block}    