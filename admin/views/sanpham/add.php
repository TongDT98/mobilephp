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
        <div class="card row mt-3">
            <div class="card-header col-md-12">
                <div class="col-md-10" style="line-height: 30px;">
                    <h2 class="" style="padding-left:40px; line-height: 27px; ">Thêm mới sản phẩm</h2>
                </div>
            </div>
        </div>


        <form action="index.php?controller=sanpham&action=do_add" method="POST" enctype="multipart/form-data">
            <div class="form-horizontal">
                <hr />
                <div class="content mt-3">
                    <div class="animated fadeIn">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">Quản lý sản phẩm</strong>
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
                                                        <label class="control-label mb-1 text-required">Mã sản phẩm</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="MaSanPham" id="MaSanPhamm"
                                                            class="form-control">
                                                    </div>
                                                </div>
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

                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label mb-1 text-required">Giá</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="Gia" id="Gia"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label mb-1 ">Số Lượng</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="SoLuong" id="SoLuong"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label mb-1">Mô Tả</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="MoTa" id="MoTa"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                              
                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label mb-1 ">Màu sắc</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="MauSac" id="MauSac"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label mb-1">Ram</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="Ram" id="Ram"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label mb-1 ">CPU</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="CPU" id="CPU"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label mb-1 ">Camera Trước</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="CameraTruoc" id="CameraTruoc"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label mb-1 ">Camera Sau</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="CameraSau" id="CameraSau"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label mb-1 ">Thẻ Nhớ</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="TheNho" id="TheNho"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label mb-1">Hệ Điều Hành</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="HeDieuHanh" id="HeDieuHanh"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label mb-1 ">Màn Hình</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="MamHinh" id="ManHinh"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label mb-1 ">Độ Phân giải</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="DoPhanGiai" id="DoPhanGiai"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label mb-1 ">Pin</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="Pin" id="Pin"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label mb-1 ">Bảo Hành</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="BaoHanh" id="BaoHanh"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label mb-1 "> Nhà Sản Xuất</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="NhaSanXuatId" id="NhaSanXuatId"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label mb-1 ">Loại Sản Phẩm</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="LoaiSanPhamId" id="LoaiSanPhamId"
                                                            class="form-control">
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
                        <input type="submit" value="Thêm mới" id="Add" class="btn btn-primary" />
                    </div>
                </div>
            </div>
            <!-- Scroll to Top Button-->
        </form>
    </div>
</div>