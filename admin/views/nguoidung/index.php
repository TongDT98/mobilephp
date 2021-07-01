<div class="container-fluid flex-grow-1 container-p-y">
     <h4 class="d-flex justify-content-between align-items-center w-100 font-weight-bold p-0 mt-3">
         <div style="font-size: 30px;"> Người Dùng</div>
         <a class="btn btn-primary btn-round d-block" href="index.php?controller=nguoidung&action=add"><span
                 class="ion ion-md-add"></span>&nbsp; Thêm mới</a>
     </h4>
     <div class="card">
         <h6 class="card-header">
             Danh sách sản phẩm
         </h6>
         <div class="card-datatable table-responsive">
             <table class="table table-striped table-bordered">
                 <thead>
                     <tr>
                     <th>ID</th>
                                                <th>Tên đăng nhập</th>
                                                <th>Tên Đầy Đủ</th>
                                                <th>Email</th>
                                                <th>Vai Trò </th>

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
                                                <td><?php echo $item->VaiTro ?></td>

                        
                         <td class="text-center" style="width: 100px;">
                             <div class="btn-group btn-group-sm">
                                 <a class="btn btn-primary"
                                     href="index.php?controller=nguoidung&action=edit&Id=<?php echo $item->Id ?>">Sửa</a>

                                 <a onclick="return confirm('Bạn có muốn xóa?')"
                                     href="index.php?controller=nguoidung&action=do_delete&Id=<?php echo $item->Id ?>"
                                     type="button" class="btn btn-danger">Xóa</a>
                             </div>
                         </td>
                     </tr>
                     <?php } ?>
                 </tbody>
             </table>
         </div>
     </div>
 </div>