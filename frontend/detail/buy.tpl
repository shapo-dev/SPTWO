{extends file="parent:frontend/detail/buy.tpl"}


{block name="frontend_detail_buy"}
  {$smarty.block.parent}
  <div class="detail--usp-content">
    <div class="usp--panels">
      <div class="usp--panel">
        <span>
         <i class="icon--check"></i>
         {s name='DetailUspText1' namespace="frontend/detail/buy_under"}Detail_usp1{/s}
        </span>
      </div>
      <div class="usp--panel">
        <span>
         <i class="icon--check"></i>
         {s name='DetailUspText2' namespace="frontend/detail/buy_under"}Detail_usp2{/s}
        </span>
      </div>
      <div class="usp--panel">
        <span>
         <i class="icon--check"></i>
         {s name='DetailUspText3' namespace="frontend/detail/buy_under"}Detail_usp3{/s}
        </span>
      </div>
      <div class="usp--panel">
        <span>
         <i class="icon--check"></i>
         {s name='DetailUspText4' namespace="frontend/detail/buy_under"}Detail_usp4{/s}
        </span>
      </div>
    </div>
  </div>

{/block}
