{* Top bar main *}
{block name="frontend_index_top_bar_main"}
    <div class="top-bar">

        {* Top bar main container *}
        {block name="frontend_index_top_bar_main_container"}
            <div class="container block-group">

                {if $theme.topbar_active !== false}
                {* Top bar usps *}
                {block name="frontend_index_top_bar_usps"}
                {include file='frontend/index/topbar-usp.tpl'}
                {/block}
                {/if}

                {* Top bar navigation *}
                
                {block name="frontend_index_top_bar_nav"}
                    <nav class="top-bar--navigation block" role="menubar">

                        {action module=widgets controller=index action=shopMenu}

                        {* Article Compare *}
                        {block name='frontend_index_navigation_inline'}
                            {if {config name="compareShow"}}
                                <div class="navigation--entry entry--compare is--hidden" role="menuitem" aria-haspopup="true" data-drop-down-menu="true">
                                    {block name='frontend_index_navigation_compare'}
                                        {action module=widgets controller=compare}
                                    {/block}
                                </div>
                            {/if}
                        {/block}

                        {* Service / Support drop down *}
                    
                        {block name="frontend_index_checkout_actions_service_menu"}
                            
                        {/block}
                    

                    </nav>
                {/block}


            </div>
        {/block}
    </div>
{/block}