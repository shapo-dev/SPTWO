{extends file="parent:frontend/index/shop-navigation.tpl"}
{* Menu (Off canvas left) trigger *}
{block name='frontend_index_offcanvas_left_trigger'}
    <li class="navigation--entry entry--menu-left" role="menuitem">
        <a class="entry--link entry--trigger btn is--icon-left" href="#offcanvas--left" data-offcanvas="true" data-offCanvasSelector=".sidebar-main">
            <i class="ti ti-layout-line-solid"></i>
            <i class="ti ti-layout-line-solid"></i>
            <span class="menu--text">{s namespace='frontend/index/menu_left' name="IndexLinkMenu"}{/s}</span>
        </a>
    </li>
{/block}
{block name='frontend_index_search'}
    <li class="navigation--entry entry--search" role="menuitem" data-search="true" aria-haspopup="true"{if $theme.focusSearch && {controllerName|lower} == 'index'} data-activeOnStart="true"{/if} data-minLength="{config name="MinSearchLenght"}">
        {s namespace="frontend/index/search" name="IndexTitleSearchToggle" assign="snippetIndexTitleSearchToggle"}{/s}
        <a class="btn entry--link entry--trigger" href="#show-hide--search" title="{$snippetIndexTitleSearchToggle|escape}">
            <i class="ti ti-search"></i>

            {block name='frontend_index_search_display'}
                <span class="search--display">{s namespace='frontend/index/search' name="IndexSearchFieldSubmit"}{/s}</span>
            {/block}
        </a>

        {* Include of the search form *}
        {block name='frontend_index_search_include'}
            {include file="frontend/index/search.tpl"}
        {/block}
    </li>
{/block}
