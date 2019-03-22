{extends file="parent:frontend/listing/text.tpl"}

{* Headline *}
 {block name="frontend_listing_text_headline"}
    {if $sCategoryContent.media}
        <div class="shapo--category-hero-image">
          <img src="{$sCategoryContent.media.path}" alt="{$sCategoryContent.media.description}">
        </div>
    {/if}
 {/block}
 {block name="frontend_listing_text_content"}
 <div class="shapo--hero-text">
     {if $sCategoryContent.cmsheadline}
         <h1 class="hero--headline panel--title">{$sCategoryContent.cmsheadline}</h1>
     {/if}
     {$smarty.block.parent}
 </div>
{/block}
