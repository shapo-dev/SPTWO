{extends file="parent:frontend/listing/product-box/box-minimal.tpl"}

{block name='frontend_listing_box_article_rating'}
{/block}

{block name='frontend_listing_box_article_unit'}
{/block}

{block name='frontend_listing_box_article_price'}
    <div class="product--price-outer">
        <div class="product--price">

            {* Discount price *}
            {block name='frontend_listing_box_article_price_discount'}
                {if $sArticle.has_pseudoprice}
                    <span class="price--pseudo">

                        {block name='frontend_listing_box_article_price_discount_before'}
                            {s name="priceDiscountLabel" namespace="frontend/detail/data"}{/s}
                        {/block}

                        <span class="price--discount is--nowrap">
                            {$sArticle.pseudoprice|currency}
                            {s name="Star"}{/s}
                        </span>

                        {block name='frontend_listing_box_article_price_discount_after'}
                            {s name="priceDiscountInfo" namespace="frontend/detail/data"}{/s}
                        {/block}
                    </span>
                {/if}
            {/block}

            {* Default price *}
            {block name='frontend_listing_box_article_price_default'}
                <span class="price--default is--nowrap{if $sArticle.has_pseudoprice} is--discount{/if}">
                    {if $sArticle.priceStartingFrom}{s name='ListingBoxArticleStartsAt'}{/s} {/if}
                    {$sArticle.price|currency}
                    {s name="Star"}{/s}
                </span>
            {/block}
        </div>
    </div>
{/block}
