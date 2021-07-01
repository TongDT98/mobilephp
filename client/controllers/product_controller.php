<?php
require_once('controllers/base_controller.php');
require_once('models/model_sanpham.php');

class ProductController extends BaseController
{
    function __construct()
    {
        $this->folder = 'product';
    }

    public function index()
    {
        $items = SanPham::all();
        $data = array('items' => $items);
        $this->render('index', $data);
    }
}