{extends file="parent:frontend/index/logo-container.tpl"}
    {block name='frontend_index_logo'}
    {$smarty.block.parent}
   

   {* Added Tagline / Claim *}
   <div class="logo--tagline">{s name='Tagline' namespace='frontend/index/index'}{/s}</div>


{/block}