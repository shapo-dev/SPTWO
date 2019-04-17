{if $theme.banner_ads_active == true}
<!-- OFFERS -->
{block name='index_flash_sales'}
<section class="flash--sale">
	<div class="container sale--offer">
	
	<span class="falsh--sale-content">
	<a id="offers" href="{$theme.banner_ads_link}"> 
	<span class="flash--sale-header">{$theme.banner_ads_header} {s name="frontend/index/offers/offers_content"}{/s} </span>
	</a>
	</span>
	
	<span class="flash--sale-timer">
	<div id="clock"></div>
	</span>

	</div>


</section>	
{/block}
<!-- /OFFERS -->
{/if}