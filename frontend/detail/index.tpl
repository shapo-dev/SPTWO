{extends file="parent:frontend/detail/index.tpl"}

{* Append Article SKU with link to size chart *}
{block name='frontend_detail_data_ordernumber'}
	{$smarty.block.parent}
    {if $sArticle.ordernumber == true}
        <li class="base-info--entry entry--sku">
 
            {* Size chart - Label *}
            {block name='frontend_detail_data_sizechart_label'}
                <strong class="entry--label">
                    {s name="SizeChartLabel" namespace="frontend/detail/data"}{/s}
                </strong>
            {/block}
 
            {* Size chart - Link *}
            {block name='frontend_detail_data_sizechart_link'}
                <span class="entry--content">
                	<p class="product--sizechart" data-content="" data-modalbox="true" data-targetselector="a" data-mode="ajax">
                    <a href="/groessentabelle">{s name="SizeChartLink" namespace="frontend/detail/data"}{/s}</a>
                	</p>
                </span>
            {/block}
        </li>
    {/if}


{* Adde Social Media Links to Article *}
{include file="frontend/detail/social-media-share.tpl"}


{/block}