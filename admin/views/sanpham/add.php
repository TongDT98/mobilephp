<!-- Layout content -->
<div class="layout-content">

    <!-- Content -->
    <div class="container-fluid flex-grow-1 container-p-y">
        <div class="card row " style="padding-top:20px">

            <div class="card-header col-md-11">
                <h2 class="" style="padding-left:40px;">Thêm mới sản phẩm</h2>

            </div>

            <div class="col-md-12">
                <a style="float:right; font-size: 20px;" class="btn btn-outline-dark btn-sm"
                    href="index.php?controller=sanpham&action=index">
                    <i class="fas fa-arrow-alt-circle-left d-block"></i>
                </a>
            </div>
        </div>


        <form action="index.php?controller=sanpham&action=add_post" method="POST" enctype="multipart/form-data">


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
                                                        <label class="control-label mb-1 text-required">Tên sản
                                                            phẩm</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="TenSanPham" id="TenSanPham"
                                                            class="form-control">

                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label mb-1 text-required">Mã sản
                                                            phẩm</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="MaSanPham" id="MaSanPham"
                                                            class="form-control">

                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label mb-1">Giá</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="Gia" id="Gia" class="form-control">

                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label mb-1">Màu săc</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="MauSac" id="MauSac"
                                                            class="form-control">

                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label mb-1">Số lượng</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="number" name="SoLuong" id="SoLuong"
                                                            class="form-control">

                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label mb-1">Phân loại</label>
                                                    </div>

                                                    <div class="col-md-9">
                                                        <select class="form-control" name="PhanLoaiId" id="PhanLoaiId">
                                                            <option value="">--Chọn loại sản phẩm--</option>

                                                            <?php
                                                            foreach ($ddlLSP as $item) {   ?>

                                                            <option value="<?= $item->Id ?>">
                                                                <?= $item->TenLoaiSanPham ?></option>
                                                            <?php } ?>


                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label mb-1">Thứ tự ưu tiên</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="number" name="OrderNumber" id="OrderNumber"
                                                            class="form-control">

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

                                                        <select class="form-control" name="NhaSanXuatId"
                                                            id="NhaSanXuatId">
                                                            <option value="">--Chọn nhà sản xuất--</option>
                                                            <?php
                                                            foreach ($ddlNSX as $item) {   ?>

                                                            <option value="<?= $item->Id ?>"><?= $item->TenNhaSanXuat ?>
                                                            </option>
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
                                                            style="height: 45px" class="form-control"><span id="error"
                                                            style="color:red;"></span>
                                                        <img style="width:100%" id="img" /><span id="error"
                                                            style="color:red;"></span>

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
                                                        <textarea name="MoTa" id="MoTa" rows="4" class="form-control
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
                                                        <input type="text" name="Camera" id="Camera"
                                                            class="form-control">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label class="control-label mb-1">Ram</label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="number" name="RAM" id="RAM" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-2">
                                                        <label class="control-label mb-1">Hỗ trợ thẻ nhớ</label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select class="form-control" name="HoTroTheNho"
                                                            id="HoTroTheNho">
                                                            <option value="0">Hỗ trợ</option>
                                                            <option value="1">Không hỗ trợ</option>
                                                            <select>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label class="control-label mb-1">Thẻ nhớ</label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="number" name="TheNho" id="TheNho"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-2">
                                                        <label class="control-label mb-1">Kết nối</label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="text" name="KetNoi" id="KetNoi"
                                                            class="form-control">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label class="control-label mb-1">Hệ điều hành</label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select class="form-control" name="HeDieuHanhId"
                                                            id="HeDieuHanhId">
                                                            <?php
                                                            foreach ($ddlHDH as $item) {   ?>

                                                            <option value="<?= $item->Id ?>"><?= $item->TenHeDieuHanh ?>
                                                            </option>
                                                            <?php } ?>

                                                            <select>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-2">
                                                        <label class="control-label mb-1">Màn hình</label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select class="form-control" name="ManHinhId" id="ManHinhId">
                                                            <?php
                                                            foreach ($ddlMH as $item) {   ?>

                                                            <option value="<?= $item->Id ?>">
                                                                <?= $item->KichThuocManHinh ?></option>
                                                            <?php } ?>

                                                            <select>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label class="control-label mb-1">Kích thước</label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="text" name="KichThuoc" id="KichThuoc"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-2">
                                                        <label class="control-label mb-1">Trọng lượng</label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="text" name="TrongLuong" id="TrongLuong"
                                                            class="form-control">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label class="control-label mb-1">Giải trí ứng dụng</label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="text" name="GiaiTriUngDung" id="GiaiTriUngDung"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-2">
                                                        <label class="control-label mb-1">Thông tin pin</label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="text" name="ThongTinPin" id="ThongTinPin"
                                                            class="form-control">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label class="control-label mb-1">Công nghệ màn hình</label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="text" name="CongNgheManHinh" id="CongNgheManHinh"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-2">
                                                        <label class="control-label mb-1">Tốc độ CPU</label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="text" name="TocDoCPU" id="TocDoCPU"
                                                            class="form-control">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label class="control-label mb-1">Chip xử lý</label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="text" name="ChipXuLy" id="ChipXuLy"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-2">
                                                        <label class="control-label mb-1">Độ phân giải</label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="text" name="DoPhanGiai" id="DoPhanGiai"
                                                            class="form-control">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label class="control-label mb-1">Độ rộng</label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="text" name="DoRong" id="DoRong"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-2">
                                                        <label class="control-label mb-1">Bảo hành</label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="number" name="BaoHanh" id="BaoHanh"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-offset-2 col-md-12" style="text-align:right;">
                                                <input type="submit" value="Thêm mới" id="Add" class="btn btn-dark" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- .card -->
                        </div>
                    </div>
                    <div class="col-md-12">
                        <a style="float:right; font-size: 20px;" class="btn btn-outline-dark btn-sm"
                            href="index.php?controller=sanpham&action=index">
                            <i class="fas fa-arrow-alt-circle-left d-block"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Scroll to Top Button-->
    </div>
    </form>