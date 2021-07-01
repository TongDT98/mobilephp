<?php
require_once('controllers/base_controller.php');

class ProductController extends BaseController
{
    function __construct()
    {
        $this->folder = 'product';
    }

    public function productList()
    {
        $this->render('product_list');
    }
}