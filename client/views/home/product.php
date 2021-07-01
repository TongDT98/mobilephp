<?php include 'views/layouts/shared/ads1.php'; ?>
<div class="product_details">
    <div class="container">
        <div class="row details_row">

            <!-- Product Image -->
            <div class="col-lg-6">
                <div class="details_image">
                    <div class="details_image_large"><img src=" uploads/<?= $SanPham->AnhSanPham ?>" alt=""><div class="product_extra product_new"><a href="categories.html">New</a></div></div>
                    <div class="details_image_thumbnails d-flex flex-row align-items-start justify-content-between">
                        <div class="details_image_thumbnail active" data-image=" uploads/<?= $SanPham->AnhSanPham ?>"><img src=" uploads/<?= $SanPham->AnhSanPham ?>" alt=""></div>
                        <div class="details_image_thumbnail" data-image=" uploads/details_2.jpg"><img src=" uploads/details_2.jpg" alt=""></div>
                        <div class="details_image_thumbnail" data-image=" uploads/details_3.jpg"><img src=" uploads/details_3.jpg" alt=""></div>
                        <div class="details_image_thumbnail" data-image=" uploads/details_4.jpg"><img src=" uploads/details_4.jpg" alt=""></div>
                    </div>
                </div>
            </div>
            <!-- Product Content -->
            <div class="col-lg-6">
                <div class="details_content">
                    <div class="details_name"><?= $SanPham->TenSanPham ?></div>
                    <div class="details_discount"><?= $SanPham->Gia ?>đ</div>
                    <div class="details_price"><?= $SanPham->Gia ?>đ</div>

                    <!-- In Stock -->
                    <div class="in_stock_container">
                        <div class="availability">Availability:</div>
                        <span>In Stock</span>
                    </div>
                    <div class="details_text">
                        <p><?= $SanPham->MoTa ?>.</p>
                    </div>

                    <!-- Product Quantity -->
                    <div class="product_quantity_container">
                        <div class="product_quantity clearfix">
                            <span>Qty</span>
                            <input id="quantity_input" type="text" pattern="[0-9]*" value="1">
                            <div class="quantity_buttons">
                                <div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
                                <div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
                            </div>
                        </div>
                        <div class="button cart_button"><a onclick="AddToCart(<?= $SanPham->Id ?>);" href="javascript:void(0);">Add to cart</a></div>
                    </div>
                    <script>
                        function AddToCart(id) {
                            let _data = {
                                Id: id,
                                Quantity: $("#quantity_input").val()
                            }
                            $.ajax({
                                url: 'index.php?controller=home&action=addtocart',
                                data: _data,
                                type: 'POST',
                                success: function (data) {
                                    alert(data);
                                                //CountGioHang();
                                            },
                                            error: function (error) {
                                                alert("có lỗi xảy ra");
                                            }

                                        });
                        }

                    </script>
                    <!-- Share -->
                    <div class="details_share">
                        <span>Share:</span>
                        <ul>
                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row description_row">
            <div class="col">
                <div class="description_title_container">
                    <div class="description_title">Description</div>
                    <div class="reviews_title"><a href="#">Reviews <span>(1)</span></a></div>
                </div>
                <div class="description_text">
                    <p><?= $SanPham->MoTa ?>.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'views/layouts/shared/ads2.php'; ?>