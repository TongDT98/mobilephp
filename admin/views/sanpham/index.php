 <div class="container-fluid flex-grow-1 container-p-y">
     <h4 class="d-flex justify-content-between align-items-center w-100 font-weight-bold p-0 mt-3">
         <div style="font-size: 30px;">Sản phẩm</div>
         <a class="btn btn-primary btn-round d-block" href="index.php?controller=sanpham&action=add"><span
                 class="ion ion-md-add"></span>&nbsp; Thêm mới</a>
     </h4>
     <div class="card">
         <h6 class="card-header">
             Danh sách sản phẩm
         </h6>
         <div class="card-datatable table-responsive">
             <table class="mytable table table-striped table-bordered">
                 <thead>
                     <tr>
                         <th>Id</th>
                         <th>Mã</th>
                         <th>Tên sản phẩm</th>
                         <th class="text-center" style="width: 100px;">Thao tác</th>
                     </tr>
                 </thead>
                 <tbody>
                     <?php
                        foreach ($items as $item) {   ?>
                     <tr class="odd gradeX">
                         <td><?php echo $item->Id ?></td>
                         <td><?php echo $item->MaSanPham ?></td>
                         <td><?php echo $item->TenSanPham ?></td>
                         <td class="text-center" style="width: 100px;">
                             <div class="btn-group btn-group-sm">
                                 <a class="btn btn-primary"
                                     href="index.php?controller=sanpham&action=edit&Id=<?php echo $item->Id ?>">Edit</a>

                                 <a onclick="return confirm('Bạn có muốn xóa?')"
                                     href="index.php?controller=sanpham&action=do_delete&Id=<?php echo $item->Id ?>"
                                     type="button" class="btn btn-danger">Delete</a>
                             </div>
                         </td>
                     </tr>
                     <?php } ?>
                 </tbody>
             </table>
         </div>
     </div>
 </div>