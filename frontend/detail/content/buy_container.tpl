{extends file="parent:frontend/detail/content/buy_container.tpl"}

{block name="frontend_detail_index_configurator"}
    {$smarty.block.parent}
    {if $sArticle.instock < 3}
    <p class="yellow" style="color: yellow">Nur noch <b>{$sArticle.instock} X</b> in Deiner Größe verfügbar</p>
    {/if}
    {if $sArticle.instock < 2}
    <p class="red" style="color: red">Nur noch <b>{$sArticle.instock} X</b> in Deiner Größe verfügbar</p>
    {/if}
{/block}    