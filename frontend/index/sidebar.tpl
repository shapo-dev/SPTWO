{extends file="parent:frontend/index/sidebar.tpl"}
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
