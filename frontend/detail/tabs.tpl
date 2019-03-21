{extends file="parent:frontend/detail/tabs.tpl"}

{* New tab *}
{block name="frontend_detail_tabs_description" append}
        <a class="tab--link" title="{s namespace="frontend/detail" name='NewTabsDescription'}{/s}" href="#">{s namespace="frontend/detail" name='NewTabsDescription'}{/s}</a>
{/block}

{* New Tab container *}
{block name="frontend_detail_tabs_content_description" append}
        <div class="tab--container">
            <div class="tab--header"><a class="tab--title" title="{s namespace="frontend/detail" name='NewTabsDescription'}{/s}" href="#">{s namespace="frontend/detail" name='NewTabsDescription'}{/s}</a></div>
            <div class="tab--preview">{$sArticle.attr4|strip_tags|truncate:100: '...'}<a href="#" class="tab--link" title="{s name="PreviewTextMore"}{/s}">{s name="PreviewTextMore"}{/s}</a></div>
            <div class="tab--content">{include file="frontend/detail/tabs/custom_tabs.tpl"}</div>
        </div>
{/block}