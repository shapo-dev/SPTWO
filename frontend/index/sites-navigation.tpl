{* Static sites *}
{function name=customPages level=0}
    <ul class="shop-sites--navigation sidebar--navigation navigation--list{if !$level} is--drop-down{/if} is--level{$level}" role="menu">
        {block name='frontend_index_left_menu_before'}{/block}

        {block name='frontend_index_left_menu_entries'}
            {foreach $customPages as $page}
                {block name='frontend_index_left_menu_entry'}
                    <li class="navigation--entry{if $page.active} is--active{/if}" role="menuitem">
                        <a class="navigation--link{if $page.active} is--active{/if}{if $page.childrenCount} link--go-forward{/if}"
                           href="{if $page.link}{$page.link}{else}{url controller='custom' sCustom=$page.id title=$page.description}{/if}"
                           title="{$page.description|escape}"
                           data-categoryId="{$page.id}"
                           data-fetchUrl="{url module=widgets controller=listing action=getCustomPage pageId={$page.id}}"
                           {if $page.target}target="{$page.target}"{/if}>
                            {$page.description}

                            {if $page.childrenCount}
                                <span class="is--icon-right">
                                <i class="icon--arrow-right"></i>
                            </span>
                            {/if}
                        </a>

                        {if $page.active && $page.subPages}
                            {call name=customPages customPages=$page.subPages level=$level+1}
                        {/if}
                    </li>
                {/block}
            {/foreach}
        {/block}

        {block name='frontend_index_left_menu_after'}{/block}
    </ul>
{/function}

{if $sMenu.left}
    {block name="frontend_index_left_menu_container"}
        <div class="shop-sites--container is--rounded">
            {block name='frontend_index_left_menu_headline'}
                <div class="shop-sites--headline navigation--headline">
                    {s namespace='frontend/index/menu_left' name="MenuLeftHeadingInformation"}{/s}
                </div>
            {/block}

            {call name=customPages customPages=$sMenu.left}
        </div>
    {/block}
{/if}

{block name="frontend_index_left_switches"}
{if !$sUserLoggedIn}
    <div class="mobile--switches">
        {action module=widgets controller=index action=shopMenu}
        <a href="{url module=frontend controller=account action=index}" class="btn is--full is--center is--holo">
          <i class="ti ti-user"></i>
          <span class="account--title">{s name="AccountTitleBefore" namespace="frontend/account/sidebar"}{/s}</span>
        </a>
    </div>
{else}
<div id="logout_button">
    <a href="{url controller='account' action='logout'}" class="logout btn is--full is--center is--primary">
    <i class="ti ti-lock"></i>
    {s name="AccountLogout" namespace="frontend/account/sidebar"}{/s}</a>
</div>
{/if}
{/block}