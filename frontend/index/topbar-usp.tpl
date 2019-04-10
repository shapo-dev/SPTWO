{if $theme.topbar_active != false  }
<div class="usp--container">

{if $theme.topbar_feat_link_1 != ''}
<a class="usp" href="{$theme.topbar_feat_link_1}">
<i class="{$theme.topbar_feat_icon_1}"></i>{$theme.topbar_feat_text_1} </a>
{else}
<i class="{$theme.topbar_feat_icon_1}"></i>{$theme.topbar_feat_text_1}
{/if}

</div>
{/if}
