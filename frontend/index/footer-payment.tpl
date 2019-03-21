<div class="footer--column column--payment is--last block">
{block name="frontend_index_footer_column_payment_headline"}
<div class="column--headline">{s name="sFooterPaymentHead"}{/s}</div>
{/block}

{block name="frontend_index_footer_column_payment_content"}
<div class="column--content">
<p class="column--desc">
<ul class="payment_providers">
	<li><img src="https://cdn.klarna.com/1.0/shared/image/generic/logo/de_de/basic/logo_white.svg"></li>
	<!-- LOAD VIA CDN -->
	<li class="payment_provider klarna paynow">
	<a href="{url controller=custom sCustom=6}#klarna" title="Direkt bezahlen. Schnell und sicher.">
    <img src="https://cdn.klarna.com/1.0/shared/image/generic/badge/de_de/pay_now/descriptive/pink.svg" alt="Direkt bezahlen. Schnell und sicher." />
	</a>
	</li>

	<li class="payment_provider klarna paylater">
	<a href="{url controller=custom sCustom=6}#klarna" title="Einfach kaufen, dann bezahlen">
    <img src="https://cdn.klarna.com/1.0/shared/image/generic/badge/de_de/pay_later/descriptive/pink.svg" alt="Einfach kaufen, dann bezahlen" />
	</a>
	</li>

	<li class="payment_provider paypal"><a href="{url controller=custom sCustom=6}#paypal" title="paypal"><img src="{link file='frontend/_public/src/img/svg/paypal-white.svg'}"></a></li>
	<li class="payment_provider mastercard"><a href="{url controller=custom sCustom=6}#creditcard" title="mastercard"><img src="{link file='frontend/_public/src/img/svg/mc_hrz_rev.svg'}"></a></li>
	<li class="payment_provider visa"><a href="{url controller=custom sCustom=6}#creditcard" title="visa"><img src="{link file='frontend/_public/src/img/svg/visa-pay-logo.svg'}"></a></li>	
	
	<li class="payment_provider dhl"><a href="{url controller=custom sCustom=6}#dhl" title="DHL"><img src="{link file='frontend/_public/src/img/svg/dhl-logo-white.svg'}"></a></li>

</ul>
</p>    
</div>
{/block}