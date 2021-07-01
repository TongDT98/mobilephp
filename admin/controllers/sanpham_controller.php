<?php

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
            $item = new SanPham(0, $_POST["MaSanPham"], $_POST["TenSanPham"],$_POST["Gia"],
            $_POST['SoLuong'],$_POST['MoTa'],$_POST['AnhSanPham'],$_POST['MauSac'],$_POST['RAM'],
            $_POST['CPU'],$_POST['CameraTruoc'],$_POST['CameraSau'],$_POST['TheNho'],$_POST['HeDieuHanh'],$_POST['ManHinh'],
            $_POST['DoPhanGiai'],$_POST['Pin'],$_POST['BaoHanh'],$_POST['NhaSanXuatId'],$_POST['LoaiSanPhamId'] );
            SanPham::add($item);
            header("Location: http://localhost:8080/mobilephp/admin/index.php?controller=sanpham&action=index");
            exit;
        }
        header("Location: http://localhost:8080/mobilephp/admin/index.php?controller=sanpham&action=index");
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
            $item = new SanPham($_POST["Id"], $_POST["MaSanPham"], $_POST["TenSanPham"],$_POST['Gia'],
            $_POST['SoLuong'],$_POST['MoTa'],$_POST['AnhSanPham'],$_POST['MauSac'],$_POST['RAM'],
            $_POST['CPU'],$_POST['CameraTruoc'],$_POST['CameraSau'],$_POST['TheNho'],$_POST['HeDieuHanh'],$_POST['ManHinh'],
            $_POST['DoPhanGiai'],$_POST['Pin'],$_POST['BaoHanh'],$_POST['NhaSanXuatId'],$_POST['LoaiSanPhamId'],
            );

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