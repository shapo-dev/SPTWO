{extends file="parent:frontend/detail/content/buy_container.tpl"}

{block name="frontend_detail_index_configurator"}
    {$smarty.block.parent}
    <div class="product--delivery">
    {if $sArticle.instock <= 2}
	<p class="delivery--information">
	<span class="delivery--text delivery--text-not-available">
	<i class="delivery--status-icon delivery--status-not-available"></i>
	Nur noch <b>{$sArticle.instock}X</b> in Deiner Größe verfügbar
	</span>
	</p>
    {/if}
    
</div>
{/block}    