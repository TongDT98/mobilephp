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
            SanPham::add($item);
            header("Location: http://localhost:8080/mobilephp/admin/index.php?controller=sanpham&action=index");
            exit;
        }
        header("Location: http://localhost:8080/mobilephp/admin/index.php?controller=page&action=error");
        exit;
    }

    public function edit()
    {
        $item = SanPham::find($_GET['Id']);
        $data = array('item' => $item);
        $this->render('edit', $data, false);
    }

    public function do_edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $item = new SanPham($_POST["Id"], $_POST["MaSanPham"], $_POST["TenSanPham"]);

            SanPham::edit($item);
            header("Location: http://localhost:8080/mobilephp/admin/index.php?controller=sanpham&action=index");
            exit;
        }
        header("Location: http://localhost:8080/mobilephp/admin/index.php?controller=page&action=error");
        exit;
    }

    public function do_delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET["Id"];
            SanPham::delete($id);

            header("Location: http://localhost:8080/mobilephp/admin/index.php?controller=sanpham&action=index");
        }
        header("Location: http://localhost:8080/mobilephp/admin/index.php?controller=sanpham&action=index");
        exit;
    }
}