<div class="cart_info">
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- Column Titles -->
                <div class="cart_info_columns clearfix">
                    <div class="cart_info_col cart_info_col_product">Product</div>
                    <div class="cart_info_col cart_info_col_price">Price</div>
                    <div class="cart_info_col cart_info_col_quantity">Quantity</div>
                    <div class="cart_info_col cart_info_col_total">Total</div>
                </div>
            </div>
        </div>
        <div class="row cart_items_row">
            <div class="col">
                <?php foreach ($items as $item) {   ?>
                <div
                    class="cart_item d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
                    <!-- Name -->
                    <div class="cart_item_product d-flex flex-row align-items-center justify-content-start">
                        <div class="cart_item_image">
                            <div><img src="uploads/<?= $item->AnhSanPham ?>" alt=""></div>
                        </div>
                        <div class="cart_item_name_container">
                            <div class="cart_item_name"><a href="#"><?php echo $item->TenSanPham ?></a></div>
                            <div class="cart_item_edit"><a href="#">Edit Product</a></div>
                        </div>
                    </div>
                    <!-- Price -->
                    <div class="cart_item_price"><?php echo $item->GiaBan ?></div>
                    <!-- Quantity -->
                    <div class="cart_item_quantity">
                        <div class="product_quantity_container">
                            <div class="product_quantity clearfix">
                                <span>Qty</span>
                                <input id="quantity_input" type="text" pattern="[0-9]*"
                                    value="<?php echo $item->SoLuong ?>">
                                <div class="quantity_buttons">
                                    <div id="quantity_inc_button" class="quantity_inc quantity_control"><i
                                            class="fa fa-chevron-up" aria-hidden="true"></i></div>
                                    <div id="quantity_dec_button" class="quantity_dec quantity_control"><i
                                            class="fa fa-chevron-down" aria-hidden="true"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Total -->
                    <div class="cart_item_total"><?php echo ($item->GiaBan * $item->SoLuong) ?></div>
                </div>
                <?php } ?>
                <!-- Cart Item -->


            </div>
        </div>
        <div class="row row_cart_buttons">
            <div class="col">
                <div class="cart_buttons d-flex flex-lg-row flex-column align-items-start justify-content-start">
                    <div class="button continue_shopping_button"><a href="#">Continue shopping</a></div>
                    <div class="cart_buttons_right ml-lg-auto">
                        <div class="button clear_cart_button"><a href="index.php?controller=home&action=clearcart">Clear
                                cart</a></div>
                        <div class="button update_cart_button"><a href="#">Update cart</a></div>
                        <script>
                        function clearCart() {
                            $.ajax({
                                url: '/phpfinal/ClearCart',
                                type: 'POST',
                                success: function(data) {
                                    location.reload();
                                    //CountGioHang();
                                },
                                error: function(error) {
                                    location.reload();
                                }

                            });
                        }
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row_extra">
            <div class="col-lg-4">

                <!-- Delivery -->
                <div class="delivery">
                    <div class="section_title">Shipping method</div>
                    <div class="section_subtitle">Select the one you want</div>
                    <div class="delivery_options">
                        <label class="delivery_option clearfix">Next day delivery
                            <input type="radio" name="radio">
                            <span class="checkmark"></span>
                            <span class="delivery_price">$4.99</span>
                        </label>
                        <label class="delivery_option clearfix">Standard delivery
                            <input type="radio" name="radio">
                            <span class="checkmark"></span>
                            <span class="delivery_price">$1.99</span>
                        </label>
                        <label class="delivery_option clearfix">Personal pickup
                            <input type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                            <span class="delivery_price">Free</span>
                        </label>
                    </div>
                </div>

                <!-- Coupon Code -->
                <div class="coupon">
                    <div class="section_title">Coupon code</div>
                    <div class="section_subtitle">Enter your coupon code</div>
                    <div class="coupon_form_container">
                        <form action="#" id="coupon_form" class="coupon_form">
                            <input type="text" class="coupon_input" required="required">
                            <button class="button coupon_button"><span>Apply</span></button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 offset-lg-2">
                <div class="cart_total">
                    <div class="section_title">Cart total</div>
                    <div class="section_subtitle">Final info</div>
                    <div class="cart_total_container">
                        <ul>
                            <li class="d-flex flex-row align-items-center justify-content-start">
                                <div class="cart_total_title">Subtotal</div>
                                <div class="cart_total_value ml-auto"><%=total ?>?</div>
                                    </li>
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <div class="cart_total_title">Shipping</div>
                                        <div class="cart_total_value ml-auto">Free</div>
                                    </li>
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <div class="cart_total_title">Total</div>
                                        <div class="cart_total_value ml-auto"><%=total ?>?</div>
                                    </li>
                                </ul>
                            </div>
                            <div class="button checkout_button"><a href="javascript:void(0)" data-toggle="modal" data-target="#globalModalIframe">Proceed to checkout</a></div>
                        </div>
                    </div>
                </div>
            </div>		
        </div>
        <div class="modal fade" id="globalModalIframe">
        <div class="modal-dialog modal-lg">
            <form class="modal-content" action="index.php?controller=home&action=checkout" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title">
                        Customer
                        <span class="font-weight-light">Information</span>
                        <br>
                        <small class="text-muted">We need payment information to process your order.</small>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
                </div>
                <div class="modal-body">

                    <div class="form-row">
                        <div class="form-group col">
                            <label class="form-label">Name</label>
                            <input type="text" id="HoTen" name="HoTen" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label class="form-label">Address</label>
                            <input type="text" id="DiaChi" name="DiaChi" class="form-control" placeholder="Address">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col mb-0">
                            <label class="form-label">Phone Number</label>
                            <input type="text" id="SoDienThoai" name="SoDienThoai" class="form-control" placeholder="Phone Number">
                        </div>
                        <div class="form-group col mb-0">
                            <label class="form-label">Email</label>
                            <input type="email" id="Email" name="Email" class="form-control" placeholder="Email">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Check Out</button>
                </div>
            </form>
        </div>
    </div>