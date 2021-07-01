<!-- Layout content -->
<div class="layout-content">

    <!-- Content -->
    <div class="container-fluid flex-grow-1 container-p-y">
        <div class="card row mt-3">
            <div class="card-header col-md-12">
                <div class="col-md-10" style="line-height: 30px;">
                    <h2 class="" style="padding-left:40px; line-height: 27px; ">Cập nhật Người dùng</h2>
                </div>
            </div>
        </div>


        <form action="index.php?controller=nguoidung&action=do_edit" method="POST" enctype="multipart/form-data">
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
                                                        <label class="control-label mb-1 text-required"> Tên Đăng Nhâp
                                                    </label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="TenDangNhap" id="TenDangNhap"
                                                            value="<?= $item->TenDangNhap ?>" class="form-control">

                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label mb-1 text-required"> Mat Khau
                                                    </label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="MatKhau" id="MatKhau"
                                                            value="<?= $item->MatKhau ?>" class="form-control">

                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label mb-1 text-required"> Tên Đầy Đủ
                                                    </label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="TenDayDu" id="TenDayDu"
                                                            value="<?= $item->TenDayDu ?>" class="form-control">

                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label mb-1 text-required"> Email
                                                    </label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="Email" id="Email"
                                                            value="<?= $item->Email ?>" class="form-control">

                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-3">
                                                        <label class="control-label mb-1 text-required"> VaiTro
                                                    </label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="VaiTro" id="VaiTro"
                                                            value="<?= $item->TenDangNhap ?>" class="form-control">

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