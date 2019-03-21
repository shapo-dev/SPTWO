{extends file="parent:frontend/index/sites-navigation.tpl"}
{block name="frontend_index_left_menu_container"}
    {if $Controller != 'custom'}
    <div class="shop-sites--container is--rounded">
        {block name='frontend_index_left_menu_headline'}
            <div class="shop-sites--headline navigation--headline">
                {s namespace='frontend/index/menu_left' name="MenuLeftHeadingInformation"}{/s}
            </div>
        {/block}

        {call name=customPages customPages=$sMenu.left}
    </div>
    {/if}
{/block}
