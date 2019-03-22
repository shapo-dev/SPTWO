{extends file="parent:frontend/listing/product-box/box-basic.tpl"}
{* Product box badges - highlight, newcomer, ESD product and discount *}
{block name='frontend_listing_box_article_info_container'}
  <div class="product--info">
    {* note action *}
    <div class="shapo--note-action">
      <form action="{url controller='note' action='add' ordernumber=$sArticle.ordernumber}" method="post" class="action--form">
          {s name="DetailLinkNotepad" assign="snippetDetailLinkNotepad"}{/s}
          <button type="submit"
             class="action--link link--notepad btn"
             title="{$snippetDetailLinkNotepad|escape}"
             data-ajaxUrl="{url controller='note' action='ajaxAdd' ordernumber=$sArticle.ordernumber}"
             data-text="{s name="DetailNotepadMarked"}{/s}">
              <i class="ti ti-heart"></i> <span class="action--text">{s name="DetailLinkNotepadShort"}{/s}</span>
          </button>
      </form>
    </div>
      {* Product image *}
      {block name='frontend_listing_box_article_picture'}
          {include file="frontend/listing/product-box/product-image.tpl"}
      {/block}

      {* Customer rating for the product *}
      {block name='frontend_listing_box_article_rating'}
          {if !{config name=VoteDisable}}
              <div class="product--rating-container">
                  {if $sArticle.sVoteAverage.average}
                      {include file='frontend/_includes/rating.tpl' points=$sArticle.sVoteAverage.average type="aggregated" label=false microData=false}
                  {/if}
              </div>
          {/if}
      {/block}

      {* Product name *}
      {block name='frontend_listing_box_article_name'}
          <a href="{$sArticle.linkDetails}"
             class="product--title"
             title="{$sArticle.articleName|escapeHtml}">
              {$sArticle.articleName|truncate:50|escapeHtml}
          </a>
      {/block}

      {* Variant description *}
      {block name='frontend_listing_box_variant_description'}
          {if $sArticle.attributes.swagVariantConfiguration}
              <div class="variant--description">
                  <span title="
                      {foreach $sArticle.attributes.swagVariantConfiguration->get('value') as $group}
                              {$group.groupName}: {$group.optionName}
                      {/foreach}
                      ">
                      {foreach $sArticle.attributes.swagVariantConfiguration->get('value') as $group}
                          <span class="variant--description--line">
                              <span class="variant--groupName">{$group.groupName}:</span> {$group.optionName} {if !$group@last}|{/if}
                          </span>
                      {/foreach}
                  </span>
              </div>
          {/if}
      {/block}

      {* Product description *}
      {block name='frontend_listing_box_article_description'}
          <div class="product--description">
              {$sArticle.description_long|strip_tags|truncate:240}
          </div>
      {/block}
      <div class="shapo--price-info">
        {block name='frontend_listing_box_article_price_info'}
            <div class="product--price-info">

                {* Product price - Unit price *}
                {block name='frontend_listing_box_article_unit'}
                    {include file="frontend/listing/product-box/product-price-unit.tpl"}
                {/block}

                {* Product price - Default and discount price *}
                {block name='frontend_listing_box_article_price'}
                    {include file="frontend/listing/product-box/product-price.tpl"}
                {/block}
            </div>
        {/block}
      </div>


      {block name="frontend_listing_box_article_buy"}
          {if {config name="displayListingBuyButton"}}
              <div class="product--btn-container">
                  {if $sArticle.allowBuyInListing}
                      {include file="frontend/listing/product-box/button-buy.tpl"}
                  {else}
                      {include file="frontend/listing/product-box/button-detail.tpl"}
                  {/if}
              </div>
          {/if}
      {/block}

      {* Product actions - Compare product, more information *}
      {block name='frontend_listing_box_article_actions'}
          {include file="frontend/listing/product-box/product-actions.tpl"}
      {/block}
  </div>
  {/block}
