{extends file="parent:frontend/detail/data.tpl"}

{* Percentage discount *}
{block name='frontend_detail_data_pseudo_price_discount_content_percentage'}
    {if $sArticle.pseudopricePercent.float}
        <span class="price--discount-percentage">-{$sArticle.pseudopricePercent.float|number}% </span>
    {/if}
{/block}
