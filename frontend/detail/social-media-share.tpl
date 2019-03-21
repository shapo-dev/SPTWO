{block name='frontend_detail_social_media_share_bar'}
<ul class="share-icons">
<li><a href="http://www.facebook.com/share.php?u={$smarty.server.HTTP_HOST}{$smarty.server.REQUEST_URI}" target="_blank" rel="nofollow"><i class="ti-facebook"></i></a></li>
<li><a href="https://twitter.com/share"  data-size="large"  data-url="{$smarty.server.HTTP_HOST}{$smarty.server.REQUEST_URI}" target="_blank" rel="nofollow"><i class="ti-twitter"></i></a></li>
<li><a href="http://pinterest.com/pin/create/button?media={$sArticle.image.source}&url={$smarty.server.HTTP_HOST}{$smarty.server.REQUEST_URI}&description={$sArticle.articleName|escape}" target="_blank" rel="nofollow"><i class="ti-pinterest"></i></a></li>
<li><a href="https://plus.google.com/share?url={$smarty.server.HTTP_HOST}{$smarty.server.REQUEST_URI}" target="_blank" rel="nofollow"><i class="ti-google"></i></a></li>
<li><a href="mailto:?subject=Meine%20Produktempfehlung:%20{$sArticle.articleName|escape}&amp;body=Hallo,%20ich%20habe%20gerade%20dieses%20Produkt%20in%20einem%20Webshop%20gefunden:%20{$smarty.server.HTTP_HOST}{$smarty.server.REQUEST_URI}" rel="nofollow"><i class="ti-email"></i></a></li>
</ul>
{/block}
