<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once('controllers/base_controller.php');
require_once('models/model_Nguoidung.php');

class NguoidungController extends BaseController
{
  function __construct()
  {
    $this->folder = 'Nguoidung';
  }

  public function index()
  {
    $items = Nguoidung::all();
    $data = array('items' => $items);
    $this->render('index', $data);
  }
  public function login()
  {
    $tenDangNhap = $_POST["username"];
    $MatKhau = $_POST["password"];
    $res = Nguoidung::login($tenDangNhap,$MatKhau);
    if ($res!== null) {
      $_SESSION['LoginAdmin'] = $tenDangNhap;
      header("Location: index.php");
    }
    else
      header("Location: login.php");
  }
  public function logOut()
  {
    session_destroy();
    header("Location: login.php");
  }
  public function add()
  {
    $data = array();
    $this->render('add',$data,true);
  }
  public function do_add()
  {
    if ($_SERVER['REQUEST_METHOD']=== 'POST') {
        $item = new Nguoidung(0,$_POST["TenDangNhap"], $_POST["TenDayDu"], $_POST["Email"],$_POST["MatKhau"],$_POST["VaiTro"] );
        Nguoidung::add($item);
        header("Location: http://localhost:8080/mobilephp/admin/index.php?controller=nguoidung&action=index");
        exit;
    }
    header("Location: http://localhost:8080/mobilephp/admin/index.php?controller=nguoidung&action=index");
    exit;
  }
  public function do_delete()
  {
    if ($_SERVER['REQUEST_METHOD']=== 'GET') {
        $id =$_GET["Id"];
        Nguoidung::delete($id);
        
        header("Location: http://localhost:8080/mobilephp/admin/index.php?controller=nguoidung&action=index");
        exit;
    }
    header("Location: http://localhost:8080/mobilephp/admin/index.php?controller=nguoidung&action=index");
    exit;
  }
  public function edit()
  {
    $item = Nguoidung::find($_GET['Id']);
    $data = array('item' => $item);
    $this->render('edit', $data,true);
  }
  public function do_edit()
  {
    if ($_SERVER['REQUEST_METHOD']=== 'POST') {
        $item = new Nguoidung($_POST["Id"],$_POST["TenDangNhap"], $_POST["TenDayDu"], $_POST["Email"],$_POST["DiaChi"],$_POST["MatKhau"],$_POST["VaiTro"] );

        Nguoidung::edit($item);
        header("Location: http://localhost:8080/mobilephp/admin/index.php?controller=nguoidung&action=index");
        exit;
    }
    header("Location: http://localhost:8080/mobilephp/admin/index.php?controller=nguoidung&action=index");
    exit;
  }
}
?>