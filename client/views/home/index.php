<div class="home pt-5" style="height: auto; background-color: #f3f6ff;">
    <?php include 'views/layouts/shared/mainsliderstart.php'; ?>
</div>
<?php include 'views/layouts/shared/featurestart.php'; ?>
<?php include 'views/layouts/shared/category.php'; ?>
<?php include 'views/layouts/shared/calltoaction.php'; ?>
<!-- Featured Product Start -->
<div class="featured-product product w-100 mb-0">
    <div class="container-fluid">
        <div class="section-header">
            <h1>Featured Product</h1>
        </div>


        <div class="row align-items-center product-slider product-slider-4">
            <?php
            foreach ($items as $item) {   ?>
            <div class="col-lg-3">
                <div class="product-item">
                    <div class="product-title">
                        <a href="#"><?php echo $item->TenSanPham ?></a>
                        <div class="ratting">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                    <div class="product-image">
                        <a href="product-detail.html">
                            <img src="/mobilephp/client/assets/img/product-11.jpg" alt="Product Image">
                        </a>
                        <div class="product-action">
                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                            <a href="#"><i class="fa fa-heart"></i></a>
                            <a href="#"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="product-price">
                        <h3><span>$</span>99</h3>
                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="col-md-12 mt-5 text-center">
            <button type="button" class="btn btn-secondary"> <a class="btn btn-primary btn-round d-block"
                    href="index.php?controller=product&action=index"><span class="ion ion-md-add"></span>&nbsp;
                    Xem
                    thêm</a></button>
        </div>
    </div>
</div>
<!-- Featured Product End -->