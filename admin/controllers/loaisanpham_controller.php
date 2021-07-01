<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once('controllers/base_controller.php');
require_once('models/model_loaisanpham.php');

class LoaiSanPhamController extends BaseController
{
    function __construct()
    {
        $this->folder = 'loaisanpham';
    }

    public function index()
    {
        $items = LoaiSanPham::all();
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
            $item = new LoaiSanPham(0, $_POST["TenLoaiSanPham"]
                      );
            LoaiSanPham::add($item);
            header("Location: http://localhost:8080/mobilephp/admin/index.php?controller=loaisanpham&action=index");
            exit;
        }
        header("Location: http://localhost:8080/mobilephp/admin/index.php?controller=loaisanpham&action=index");
        exit;
    }

    public function edit()
    {
        $item = LoaiSanPham::find($_GET['Id']);
        $data = array('item' => $item);
        $this->render('edit', $data, false);
    }

    public function do_edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $item = new LoaiSanPham($_POST["Id"],  $_POST["TenLoaiSanPham"]           
            );

            LoaiSanPham::edit($item);
            header("Location: http://localhost:8080/mobilephp/admin/index.php?controller=loaisanpham&action=index");
            exit;
        }
        header("Location: http://localhost:8080/mobilephp/admin/index.php?controller=loaisanpham&action=index");
        exit;
    }

    public function do_delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET["Id"];
            LoaiSanPham::delete($id);

            header("Location: http://localhost:8080/mobilephp/admin/index.php?controller=loaisanpham&action=index");
        }
        header("Location: http://localhost:8080/mobilephp/admin/index.php?controller=loaisanpham&action=index");
        exit;
    }
}