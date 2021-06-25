
<div class="card">
                                <h6 class="card-header">
                                    Danh sách nhà sản xuất
                                </h6>
                                <div class="">
                                    <table class="">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Tên nhà sản xuất</th>
                                                <th>Mô tả</th>
                                                <th>Điện thoại</th>
                                                <th>Địa chỉ</th>
                                                <th>Email</th>
                                                <th>Website</th>
                                                <th class="text-center" style="width: 100px;">Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php
                                            foreach ($items as $item) {   ?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $item->Id ?></td>
                                                <td><?php echo $item->TenNhaSanXuat ?></td>
                                                <td><?php echo $item->MoTa ?></td>
                                                <td><?php echo $item->DienThoai ?></td>
                                                <td><?php echo $item->DiaChi ?></td>
                                                <td><?php echo $item->Email ?></td>
                                                <td><?php echo $item->Website ?></td>
                                                <td class="text-center" style="width: 100px;">
                                                    <div class="btn-group btn-group-sm">
                                                        <button data-toggle="modal" data-title="Cập nhật" data-target="#globalModalIframe" data-src="index.php?controller=nhasanxuat&action=edit&Id=<?php echo $item->Id ?>" type="button" class="btn btn-secondary">Edit</button>
                                                        <a onclick="return confirm('Bạn có muốn xóa?')" href="index.php?controller=nhasanxuat&action=delete&Id=<?php echo $item->Id ?>" type="button" class="btn btn-danger">Delete</a>
                                                    </div></td>
                                            </tr>
                                            <?php } ?>  
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            