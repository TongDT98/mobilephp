<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once('controllers/base_controller.php');
require_once('models/model_sanpham.php');

class SanPhamController extends BaseController
{
    function __construct()
    {
        $this->folder = 'sanpham';
    }

    public function index()
    {
        $items = SanPham::all();
        $data = array('items' => $items);
        $this->render('index', $data);
    }

    public function add()
    {
        $this->render('add');
    }

    public function do_add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $item = new SanPham(0, $_POST["MaSanPham"], $_POST["TenSanPham"]);
            SanPham::do_add($item);
            header('Content-Type: application/json');
            echo json_encode('Thành công');
            exit;
        }
        header('Content-Type: application/json');
        echo json_encode('Thất bại');
        exit;
    }
}