{if $theme.banner_ads_active == true}
<!-- OFFERS -->
{block name='index_flash_sales'}
<section class="falsh--sale">
	<div class="container sale--offer">
	
	<span class="falsh--sale-content">
	<a id="offers" href="{$theme.banner_ads_link}"> 
	<span class="falsh--sale-header">{$theme.banner_ads_header} {s name="frontend/index/offers/offers_content"}{/s} </span>
	</a>
	</span>
	
	<span class="falsh--sale-timer">
	<div id="clock"></div>
	</span>

	</div>


</section>	
{/block}
<!-- /OFFERS -->
{/if}