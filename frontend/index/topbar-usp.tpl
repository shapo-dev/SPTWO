{if $theme.topbar_active != false  }
<div class="usp--container">

	{if $theme.topbar_feat_link_1 != ''}
	<a class="usp" href="{$theme.topbar_feat_link_1}">
	<i class="{$theme.topbar_feat_icon_1}"></i>{$theme.topbar_feat_text_1} </a>
	{else}
	<i class="{$theme.topbar_feat_icon_1}"></i>{$theme.topbar_feat_text_1}
	{/if}

	{if $theme.topbar_feat_link_2 != ''}
	<a class="usp" href="{$theme.topbar_feat_link_2}">
	<i class="{$theme.topbar_feat_icon_2}"></i>{$theme.topbar_feat_text_2} </a>
	{else}
	<i class="{$theme.topbar_feat_icon_2}"></i>{$theme.topbar_feat_text_2}
	{/if}

	{if $theme.topbar_feat_link_3 != ''}
	<a class="usp" href="{$theme.topbar_feat_link_3}">
	<i class="{$theme.topbar_feat_icon_3}"></i>{$theme.topbar_feat_text_3} </a>
	{else}
	<i class="{$theme.topbar_feat_icon_3}"></i>{$theme.topbar_feat_text_3}
	{/if}

	{if $theme.topbar_feat_link_4 != ''}
	<a class="usp" href="{$theme.topbar_feat_link_4}">
	<i class="{$theme.topbar_feat_icon_4}"></i>{$theme.topbar_feat_text_4} </a>
	{else}
	<i class="{$theme.topbar_feat_icon_4}"></i>{$theme.topbar_feat_text_4}
	{/if}


</div>
{/if}
