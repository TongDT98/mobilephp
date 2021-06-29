<!-- Layout content -->
<div class="layout-content">

    <!-- Content -->
    <div class="container-fluid flex-grow-1 container-p-y">
        <script type="text/javascript">
            $(document).ready(function() {
                $("#fileUpload").change(function() {
                    readURL(this);
                });
                var a = new AutoNumeric('#Gia', {
                    currencySymbol: "đ ",
                    decimalCharacter: ",",
                    digitGroupSeparator: ".",
                    unformatOnSubmit: true

                });

            });

            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#img').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                } else {
                    $('#img').attr('src', "");
                }

            }
        </script>
        <div class="card row " style="padding-top:20px">

            <div class="card-header col-md-11">
                <h2 class="" style="padding-left:40px;">Cập nhật sản phẩm</h2>

            </div>

            <div class="col-md-12">
                <a style="float:right; font-size: 20px;" class="btn btn-outline-dark btn-sm" href="index.php?controller=sanpham&action=index">
                    <i class="fas fa-arrow-alt-circle-left d-block"></i>
                </a>
            </div>
        </div>


        <form action="index.php?controller=sanpham&action=edit_post" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="Id" value="<?= $item->Id ?>">  
            <input type="hidden" name="DaDuyet">   
            <input type="hidden" name="DaXoa">   
            <input type="hidden" name="NguoiDungId">  
            <input type="hidden" name="AnhSanPham">      
            <div class="form-horizontal">
                <hr />

                <div class="content mt-3">
                    <div class="animated fadeIn">
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">Thông tin chung</strong>
                                    </div>
                                    <div class="card-body">
                                        <!-- Credit Card -->
                                        <div id="pay-invoice">
                                            <div class="card-body">



                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label mb-1 text-required">Tên sản phẩm</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="TenSanPham" id="TenSanPham" value="<?= $item->TenSanPham ?>" class="form-control">

                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label mb-1 text-required">Mã sản phẩm</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="MaSanPham" id="MaSanPham" value="<?= $item->MaSanPham ?>" class="form-control">

                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label mb-1">Giá</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="Gia" id="Gia" value="<?= $item->Gia ?>" class="form-control">

                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label mb-1">Màu săc</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="MauSac" value="<?= $item->MauSac ?>" id="MauSac" class="form-control">

                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label mb-1">Số lượng</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="number" name="SoLuong" value="<?= $item->SoLuong ?>" id="SoLuong" class="form-control">

                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label mb-1">Phân loại</label>
                                                    </div>

                                                    <div class="col-md-9">
                                                        <select class="form-control" name="PhanLoaiId" value="<?= $item->PhanLoaiId ?>" id="PhanLoaiId">
                                                                                <option value="">--Chọn loại sản phẩm--</option>

                                                                               <?php
                                                                                foreach ($ddlLSP as $lsp) {   ?>
                                                                                    
                                                                                <option value="<?= $lsp->Id ?>"><?= $lsp->TenLoaiSanPham ?></option>
                                                                                <?php } ?>  
                                                                                
                                                                                
                                                                            </select>

                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label mb-1">Thứ tự ưu tiên</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="number" name="OrderNumber" value="<?= $item->OrderNumber ?>" id="OrderNumber" class="form-control">

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- .card -->


                            <div class="col-lg-6">

                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">Xuất xứ</strong>
                                    </div>
                                    <div class="card-body">
                                        <!-- Credit Card -->
                                        <div id="pay-invoice">
                                            <div class="card-body">




                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label mb-1">Nhà sản xuất</label>
                                                    </div>
                                                    <div class="col-md-9">

                                                        <select class="form-control" value="<?= $item->NhaSanXuatId ?>" name="NhaSanXuatId" id="NhaSanXuatId">
                                                                                <option value="">--Chọn nhà sản xuất--</option>
                                                                                <?php
                                                                                foreach ($ddlNSX as $nsx) {   ?>

                                                                                <option value="<?= $nsx->Id ?>"><?= $nsx->TenNhaSanXuat ?></option>
                                                                                <?php } ?>  
                                                                            <select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                   <div class="card mt-3">
                                                        <div class="card-header">
                                                            <strong class="card-title">Thao tác</strong>
                                                        </div>
                                                    <div class="card-body">
                                                                                            <!-- Credit Card -->
                                                     <div id="pay-invoice">
                                                                <div class="card-body">


                                        <div class="row form-group">
                                                                        <div class="col-md-3">
                                                                            <label class="control-label mb-1">Ảnh</label>
                                                                        </div>
                                                                        <div class="col-md-9">
                                                                            <input type="file" id="fileUpload" name="fileUpload"
                                                                                   style="height: 45px" 
                                                                                   class="form-control"><span id="error" style="color:red;"></span>
                                                                            <img style="width:100%" id="img" /><span id="error" style="color:red;"></span>

                                            </div>
                                                                    </div>

                                    </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div> <!-- .card -->

                        </div>
  <!--/.col-->
  </div>
  </div>
  <div class="content mt-3">
      <div class="animated fadeIn">
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-header">
                          <strong class="card-title">Mô tả</strong>
                      </div>
                      <div class="card-body">
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                              <div class="card-body">
                                  <div class="row form-group">
                                      <div class="col-md-12">
                                          <textarea text='value="<?= $item->MoTa ?>"' name="MoTa" id="MoTa" rows="4" class="form-control
                                                    ckeditor">
                                          </textarea>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="content mt-3">
      <div class="animated fadeIn">
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-header">
                          <strong class="card-title">Thông số kỹ thuật</strong>
                      </div>
                      <div class="card-body">
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                              <div class="card-body">
                                  <div class="row form-group">
                                      <div class="col-md-2">
                                          <label class="control-label mb-1">Camera</label>
                                      </div>
                                      <div class="col-md-4">
                                          <input type="text" name="Camera" value="<?= $item->Camera ?>" id="Camera" class="form-control">
                                      </div>
                                      <div class="col-md-2">
                                          <label class="control-label mb-1">Ram</label>
                                      </div>
                                      <div class="col-md-4">
                                          <input type="number" name="RAM" id="RAM"  value="<?= $item->RAM ?>"class="form-control">
                                      </div>
                                  </div>
                                  <div class="row form-group">
                                      <div class="col-md-2">
                                          <label class="control-label mb-1">Hỗ trợ thẻ nhớ</label>
                                      </div>
                                      <div class="col-md-4">
                                          <select class="form-control" name="HoTroTheNho" value="<?= $item->HoTroTheNho ?>" id="HoTroTheNho">
                                              <option value="0">Hỗ trợ</option>
                                              <option value="1">Không hỗ trợ</option>
                                              <select>
                                                  </div>
                                                  <div class="col-md-2">
                                                      <label class="control-label mb-1">Thẻ nhớ</label>
                                                  </div>
                                                  <div class="col-md-4">
                                                      <input type="number" name="TheNho" id="TheNho" value="<?= $item->TheNho ?>" class="form-control">
                                                  </div>
                                                  </div>
                                                  <div class="row form-group">
                                                      <div class="col-md-2">
                                                          <label class="control-label mb-1">Kết nối</label>
                                                      </div>
                                                      <div class="col-md-4">
                                                          <input type="text" name="KetNoi" id="KetNoi" value="<?= $item->KetNoi ?>" class="form-control">
                                                      </div>
                                                      <div class="col-md-2">
                                                          <label class="control-label mb-1">Hệ điều hành</label>
                                                      </div>
                                                      <div class="col-md-4">
                                                          <select class="form-control" name="HeDieuHanhId" value="<?= $item->HeDieuHanhId ?>" id="HeDieuHanhId">
                                                                <?php
                                                                                foreach ($ddlHDH as $hdh) {   ?>
                                                                                    
                                                                                <option value="<?= $hdh->Id ?>"><?= $hdh->TenHeDieuHanh ?></option>
                                                                                <?php } ?>  
                                                              
                                                              <select>
                                                                  </div>
                                                                  </div>
                                                                  <div class="row form-group">
                                                                      <div class="col-md-2">
                                                                          <label class="control-label mb-1">Màn hình</label>
                                                                      </div>
                                                                      <div class="col-md-4">
                                                                          <select class="form-control" value="<?= $item->ManHinhId ?>" name="ManHinhId" id="ManHinhId">
                                                                              <?php
                                                                                foreach ($ddlMH as $mh) {   ?>
                                                                                    
                                                                                <option value="<?= $mh->Id ?>"><?= $mh->KichThuocManHinh ?></option>
                                                                                <?php } ?>  
                                                                              
                                                                              <select>                                                                                                                         </div>
                                                                                  <div class="col-md-2">
                                                                                      <label class="control-label mb-1">Kích thước</label>
                                                                                  </div>
                                                                                  <div class="col-md-4">
                                                                                      <input type="text" name="KichThuoc" value="<?= $item->KichThuoc ?>" id="KichThuoc" class="form-control">
                                                                                  </div>
                                                                                  </div>
                                                                                  <div class="row form-group">
                                                                                      <div class="col-md-2">
                                                                                          <label class="control-label mb-1">Trọng lượng</label>
                                                                                      </div>
                                                                                      <div class="col-md-4">
                                                                                          <input type="text" value="<?= $item->TrongLuong ?>" name="TrongLuong" id="TrongLuong"
                                                                                                 class="form-control">
                                                                                      </div>
                                                                                      <div class="col-md-2">
                                                                                          <label class="control-label mb-1">Giải trí ứng dụng</label>
                                                                                      </div>
                                                                                      <div class="col-md-4">
                                                                                          <input type="text" value="<?= $item->GiaiTriUngDung ?>" name="GiaiTriUngDung" id="GiaiTriUngDung"
                                                                                                 class="form-control">
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="row form-group">
                                                                                      <div class="col-md-2">
                                                                                          <label class="control-label mb-1">Thông tin pin</label>
                                                                                      </div>
                                                                                      <div class="col-md-4">
                                                                                          <input type="text" name="ThongTinPin" value="<?= $item->ThongTinPin ?>" id="ThongTinPin"
                                                                                                 class="form-control">
                                                                                      </div>
                                                                                      <div class="col-md-2">
                                                                                          <label class="control-label mb-1">Công nghệ màn hình</label>
                                                                                      </div>
                                                                                      <div class="col-md-4">
                                                                                          <input type="text" value="<?= $item->CongNgheManHinh ?>" name="CongNgheManHinh" id="CongNgheManHinh"
                                                                                                 class="form-control">
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="row form-group">
                                                                                      <div class="col-md-2">
                                                                                          <label class="control-label mb-1">Tốc độ CPU</label>
                                                                                      </div>
                                                                                      <div class="col-md-4">
                                                                                          <input type="text" value="<?= $item->TocDoCPU ?>" name="TocDoCPU" id="TocDoCPU" class="form-control">
                                                                                      </div>
                                                                                      <div class="col-md-2">
                                                                                          <label class="control-label mb-1">Chip xử lý</label>
                                                                                      </div>
                                                                                      <div class="col-md-4">
                                                                                          <input type="text" value="<?= $item->ChipXuLy ?>" name="ChipXuLy" id="ChipXuLy" class="form-control">
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="row form-group">
                                                                                      <div class="col-md-2">
                                                                                          <label class="control-label mb-1">Độ phân giải</label>
                                                                                      </div>
                                                                                      <div class="col-md-4">
                                                                                          <input type="text" name="DoPhanGiai" value="<?= $item->DoPhanGiai ?>" id="DoPhanGiai"
                                                                                                 class="form-control">
                                                                                      </div>
                                                                                      <div class="col-md-2">
                                                                                          <label class="control-label mb-1">Độ rộng</label>
                                                                                      </div>
                                                                                      <div class="col-md-4">
                                                                                          <input type="text" name="DoRong" value="<?= $item->DoRong ?>" id="DoRong" class="form-control">
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="row form-group">
                                                                                      <div class="col-md-2">
                                                                                          <label class="control-label mb-1">Bảo hành</label>
                                                                                      </div>
                                                                                      <div class="col-md-4">
                                                                                          <input type="number" value="<?= $item->BaoHanh ?>" name="BaoHanh" id="BaoHanh" class="form-control">
                                                                                      </div>
                                                                                  </div>
                                                                                  </div>
                                                                                  </div>
                                                                                  <div class="form-group">
                                                                                      <div class="col-md-offset-2 col-md-12" style="text-align:right;">
                                                                                          <input type="submit" value="Cập nhật" id="Add" class="btn btn-dark" />
                                                                                      </div>
                                                                                  </div>
                                                                                  </div>
                                                                                  </div>
                                                                                  </div> <!-- .card -->
                                                                                  </div>
                                                                                  </div>
                                                                                  <div class="col-md-12">
                                                                                      <a style="float:right; font-size: 20px;" class="btn btn-outline-dark btn-sm" href="index.php?controller=sanpham&action=index">
                                                                                          <i class="fas fa-arrow-alt-circle-left d-block"></i>
                                                                                      </a>
                                                                                  </div>
                                                                                  </div>
                                                                                  </div>
                                                                                  <!-- Scroll to Top Button-->
                                                                                  </div>
   
                                                                             </form>
 <script type="text/javascript">
     $(function(){
      $('#PhanLoaiId').val(<?= $item->PhanLoaiId ?>);
      $('#NhaSanXuatId').val(<?= $item->NhaSanXuatId ?>);
      $('#ManHinhId').val(<?= $item->ManHinhId ?>);
      $('#HeDieuHanhId').val(<?= $item->HeDieuHanhId ?>);
    })
   </script>    