<div class="container-fluid flex-grow-1 container-p-y">

                            <h4 class="d-flex justify-content-between align-items-center w-100 font-weight-bold py-3 mb-4">
                                <div>Người dùng</div>
                                <button data-toggle="modal" data-title="Thêm mới" data-target="#globalModalIframe" data-src="/phpfinal/admin/index.php?controller=nguoidung&action=add"  type="button" class="btn btn-dark btn-round d-block">
                                    <span class="ion ion-md-add"></span>&nbsp; Thêm mới</button>
                            </h4>
                            <div class="card">
                                <h6 class="card-header">
                                    Danh sách Người dùng
                                </h6>
                                <div class="card-datatable table-responsive">
                                    <table class="mytable table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Tên đăng nhập</th>
                                                <th>Ten Day Du</th>
                                                <th>Email</th>
                                                <th class="text-center" style="width: 100px;">Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($items as $item) {   ?>
                                            <tr class="odd gradeX">

                                                <td><?php echo $item->Id; ?></td>
                                                <td><?php echo $item->TenDangNhap ?></td>
                                                <td><?php echo $item->TenDayDu ?></td>
                                                <td><?php echo $item->Email ?></td>
                                                <td class="text-center" style="width: 100px;">
                                                    <div class="btn-group btn-group-sm">
                                                        <button data-toggle="modal" data-title="Chi tiết hóa đơn" data-target="#globalModalIframe" data-src="index.php?controller=nguoidung&action=index&Id=<?php echo $item->Id; ?>" type="button" class="btn btn-secondary">Edit</button>
                                                        <a onclick="return confirm('Bạn có muốn xóa?')" href="index.php?controller=nguoidung&action=delete&Id=<?php echo $item->Id; ?>" type="button" class="btn btn-danger">Delete</a>
                                                    </div>
                                                   </td>
                                            </tr>
                                            <?php } ?>  
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>