<!-- Layout content -->
<div class="layout-content">

    <!-- Content -->
    <div class="container-fluid flex-grow-1 container-p-y">
        <div class="card row mt-3">
            <div class="card-header col-md-12">
                <div class="col-md-10" style="line-height: 30px;">
                    <h2 class="" style="padding-left:40px; line-height: 27px; ">Cập nhật sản phẩm</h2>
                </div>
            </div>
        </div>


        <form action="index.php?controller=sanpham&action=do_edit" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="Id" value="<?= $item->Id ?>">
            <div class="form-horizontal">
                <hr />

                <div class="content mt-3">
                    <div class="animated fadeIn">
                        <div class="row">
                            <div class="col-lg-12">
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
                                                            value="<?= $item->TenSanPham ?>" class="form-control">

                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label mb-1 text-required">Mã sản
                                                            phẩm</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="MaSanPham" id="MaSanPham"
                                                            value="<?= $item->MaSanPham ?>" class="form-control">

                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label mb-1 text-required">Giá</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="Gia" id="Gia"
                                                        value="<?= $item->Gia ?>" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label mb-1 text-required">Số Lượng</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="SoLuong" id="SoLuong"
                                                        value="<?= $item->SoLuong ?>" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label mb-1 text-required">MÔ Tả</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="MoTa" id="MoTa"
                                                        value="<?= $item->MoTa ?>" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label mb-1 text-required">Ảnh Sản phẩm</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="AnhSanPham" id="AnhSanPham"
                                                        value="<?= $item->AnhSanPham ?>" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label mb-1 text-required">Màu sắc</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="MauSac" id="MauSac"
                                                        value="<?= $item->MauSac ?>" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label mb-1 text-required">Ram</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="RAM" id="RAM"
                                                        value="<?= $item->RAM ?>" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label mb-1 text-required">CPU</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="CPU" id="CPU"
                                                        value="<?= $item->CPU ?>" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label mb-1 text-required">Camera Trước</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="CameraTruoc" id="CameraTruoc"
                                                        value="<?= $item->CameraTruoc ?>" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label mb-1 text-required">Camera Sau</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="CameraSau" id="CameraSau"
                                                        value="<?= $item->CameraSau ?>" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label mb-1 text-required">Thẻ Nhớ</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="TheNho" id="TheNho"
                                                        value="<?= $item->TheNho ?>" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label mb-1 text-required">Hệ Điều Hành</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="HeDieuHanh" id="HeDieuHanh"
                                                        value="<?= $item->HeDieuHanh ?>" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label mb-1 text-required">Màn Hình</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="MamHinh" id="ManHinh"
                                                        value="<?= $item->ManHinh ?>" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label mb-1 text-required">Độ Phân giải</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="DoPhanGiai" id="DoPhanGiai"
                                                        value="<?= $item->DoPhanGiai ?>" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label mb-1 text-required">Pin</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="Pin" id="Pin"
                                                        value="<?= $item->Pin ?>" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label mb-1 text-required">Bảo Hành</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="BaoHanh" id="BaoHanh"
                                                        value="<?= $item->BaoHanh ?>" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label mb-1 text-required"> Nhà Sản Xuất</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="NhaSanXuatId" id="NhaSanXuatId"
                                                        value="<?= $item->NhaSanXuatId ?>" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label mb-1 text-required">Loại Sản Phẩm</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="LoaiSanPhamId" id="LoaiSanPhamId"
                                                        value="<?= $item->LoaiSanPhamId ?>" class="form-control">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- .card -->
                        </div>
                        <!--/.col-->
                    </div>
                </div>
                <div class="form-group" style="text-align: center;">
                    <div class="col-md-offset-2 col-md-12">
                        <input type="submit" value="Cập nhật" id="Add" class="btn btn-primary" />
                    </div>
                </div>
            </div>
            <!-- Scroll to Top Button-->
    </div>

    </form>