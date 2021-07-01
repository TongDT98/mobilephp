<?php
require_once('controllers/base_controller.php');
require_once('models/model_sanpham.php');

class CartController extends BaseController
{
    function __construct()
    {
        $this->folder = 'cart';
    }
    public function addToCart()
    {
        $id = $_POST["SanPhamId"];
        $sp = SanPham::find($id);
        $item = new Cart(0, 1, $sp->Id, $sp->Gia);
        Cart::add($item);
        header('Content-Type: application/json');
        echo json_encode('Thành công');
        exit;
    }
    public function index()
    {
        $this->render('index');
    }
}