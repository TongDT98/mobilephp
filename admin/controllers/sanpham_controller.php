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

    public function add_post()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $item = new SanPham(0, $_POST["MaSanPham"], $_POST["TenSanPham"]);
            SanPham::add_post($item);
            header("Location: http://localhost:8080/mobilephp/admin/index.php?controller=sanpham&action=index");
            exit;
        }
        header('Content-Type: application/json');
        echo json_encode('Thất bại');
        exit;
    }
}