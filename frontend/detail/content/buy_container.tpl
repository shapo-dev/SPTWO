{extends file="parent:frontend/detail/content/buy_container.tpl"}

{block name="frontend_detail_index_configurator"}
    {$smarty.block.parent}
    <div class="product--delivery">

    {if $sArticle.instock < 3}
    <i class="delivery--status-icon delivery--status-more-is-coming"></i>
    <p class="delivery--information">Nur noch <b>{$sArticle.instock}X</b> in Deiner Größe verfügbar</p>
    {/if}
    {if $sArticle.instock < 2}
    <i class="delivery--status-icon delivery--status-not-available"></i>
    <p class="delivery--information">Nur noch <b>{$sArticle.instock}X</b> in Deiner Größe verfügbar</p>
    {/if}
	</div>
{/block}    