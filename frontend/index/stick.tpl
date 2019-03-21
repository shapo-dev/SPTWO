{if $theme.newsletter_active !== false}

	<div id="stickLayer" style="display:none;" class="stick_popup">
	  <a class="stick_close" onclick="$.stick_close()"><i class="ti ti-close"></i></a>
		<div class="stick_content">
        
		
            <div class="col2 image-content" style="background-image: url({$theme.newsletter_image});">
             <div class="newsletter_value"><span>{$theme.newsletter_value}</span></div>
            </div>
            
            <div class="col2 text-content">
	
			<form class="newsletter--form" action="{url controller='newsletter'}" method="post">
		    <input type="hidden" value="1" name="subscribeToNewsletter" />
		    <input type="hidden" value="ms" name="salutation" />

            <div class="newsletter--footer-headline">
            	<h2 class="newsletter--title">{$theme.newsletter_header}</h2>
            	<p>{$theme.newsletter_content}</p>
            </div>
       
			{if $theme.newsletter_benefits !== false}
            <div class="newsletter--footer-benefits">
            	<span><i class="ti ti-check"></i> {s name="sFooterNewsletterBenefit1"}{/s}</span>
            	<span><i class="ti ti-check"></i> {s name="sFooterNewsletterBenefit2"}{/s}</span>
            	<span><i class="ti ti-check"></i> {s name="sFooterNewsletterBenefit3"}{/s}</span>
            </div>
            {/if}

		    <div class="newsletter--main-content">
		    <input type="email" name="newsletter" class="newsletter--field" placeholder="{s name="IndexFooterNewsletterValue"}{/s}" />
	        {if {config name="newsletterCaptcha"} !== "nocaptcha"}
	            <input type="hidden" name="redirect">
	        {/if}
	    	<button type="submit" class="newsletter--button btn">
		    <span class="button--text"><i class="ti ti-email"></i>{s name='IndexFooterNewsletterSubmit'}{/s}</span>
			</button>
			</div>
		   	
			<div class="newsletter--cookies">
		
                            {* Data protection information *}
                            {block name="frontend_newsletter_form_privacy"}
                                {if {config name=ACTDPRTEXT} || {config name=ACTDPRCHECK}}
                                    {include file="frontend/_includes/privacy.tpl"}
                                {/if}
                            {/block}

			</div>
		
			</form>
			</div><!--nl_content-->

		</div>

	</div>

	{/if}