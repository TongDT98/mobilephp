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
        $id = $_POST["Id"];
        if (!isset($_SESSION['cart_id'])) {
            $_SESSION['cart_id'] =  rand(1, 1000000000);
            $sp = SanPham::find($id);
            $item = new cart($_SESSION['cart_id'], $id, $sp->Gia, $sp->AnhSanPham, $sp->TenSanPham);
            Cart::add($item);
        } else {

            $items = Cart::getBySessionId($_SESSION['cart_id']);

            if (count($items) > 0) {
                foreach ($items as $item) {

                    if ($item->Id == $id) {

                        $item->SoLuong = $item->SoLuong + $Quantity;
                        Cart::edit($item);
                        header('Content-Type: application/json');
                        echo json_encode('Thành công');
                        exit;
                    }
                }
            }

            $sp = SanPham::find($id);
            $item = new cart($_SESSION['cart_id'], $Quantity, $id, $sp->Gia, $sp->AnhSanPham, $sp->TenSanPham);

            Cart::add($item);
        }
        header('Content-Type: application/json');
        echo json_encode('Thành công');
        exit;
    }
    public function index()
    {
        $this->render('index');
    }
}