<div class="row row-cols-1 row-cols-md-2 g-4">
<echo> dit con me may </echo>
  <?php foreach($ListSpMoi as $sp) { 
   ?>
  <div class="card">
    <img src ="<? =ROOT_URL."/".$sp['AnhSanPham']?>" class="card-img-top" alt="<? =$sp['TenSanPham']?>">
    <div class="card-body">
      <h5 class="card-title"> <? $sp[TenSanPham]>? </h5>
    <button class = "btn btn-waning" MaDienThoai="<? =$sp['MaSanPham']?>">Chon </button>
    </div>
    <div class="card-footer">
      <small class="text-muted" > <?=$sp['Gia']?></small>
    </div>
  </div>
  <?php
}

   ?>
</div>