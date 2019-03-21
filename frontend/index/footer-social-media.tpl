{if $theme.social_icons == true || $theme.social_icons == 1 }
{block name='frontend_index_footer_social_media'}
	<div class="social-media-footer">
	
		<ul class="social-media-links">
			{if $theme.SocialMediaFacebook != ''}
			<li class="facebook"><a href="https://www.facebook.com/{$theme.SocialMediaFacebook}" target="_blank"><i class="ti-facebook"></i></a></li>
			{/if}
			{if $theme.SocialMediaTwitter != ''}
			<li class="twitter"><a href="https://www.twitter.com/{$theme.SocialMediaTwitter}" target="_blank"><i class="ti-twitter"></i></a></li>
			{/if}			
			{if $theme.SocialMediaInstagram != ''}
			<li class="instagram"><a href="https://www.instagram.com/{$theme.SocialMediaInstagram}" target="_blank"><i class="ti-instagram"></i></a></li>
			{/if}			
			{if $theme.SocialMediaPinterest != ''}
			<li class="pinterest"><a href="https://www.pinterest.de/{$theme.SocialMediaPinterest}" target="_blank"><i class="ti-pinterest"></i></a></li>
			{/if}			
			{if $SocialMediaGoogleplus != ''}
			<li class="google"><a href="https://plus.google.com/{$theme.SocialMediaGoogleplus}" target="_blank"><i class="ti-google"></i></a></li>
			{/if}			
			{if $SocialMediaYoutube != ''}
			<li class="youtube"><a href="https://youtube.de/channel/{$theme.SocialMediaYoutube}/featured?view_as=subscriber" target="_blank"><i class="ti-youtube"></i></a></li>
			{/if}	

		</ul>
	</div>
{/block}
{/if}
