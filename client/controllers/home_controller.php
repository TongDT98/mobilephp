<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
require_once('controllers/base_controller.php');
require_once('models/sanpham.php');
require_once('models/cart.php');
require_once('models/khachhang.php');
require_once('models/hoadon.php');
require_once('models/hoadonchitiet.php');
class HomeController extends BaseController
{
  function __construct()
  {
    $this->folder = 'home';
  }

  public function loaitaisan()
  {
    $loaitaisanid =$_GET["Id"];
    $items = SanPham::getByLTS($loaitaisanid);
    $data = array('SanPhams' => $items);
    $this->render('loaitaisan', $data);
  }
  public function product()
  {
    $id =$_GET["Id"];
    $item = SanPham::find($id);
    $data = array('SanPham' => $item);
    $this->render('product', $data);
  }
  public function addtocart()
  {
    $id =$_POST["Id"];
    $Quantity =$_POST["Quantity"];
    if (!isset($_SESSION['cart_id'])) {
      $_SESSION['cart_id'] =  rand(1,1000000000);
      $sp = SanPham::find($id);
      $item = new cart($_SESSION['cart_id'],$Quantity,$id,$sp->Gia,$sp->AnhSanPham,$sp->TenSanPham);
      Cart::add($item);
    }
    else{

       $items = Cart::getBySessionId($_SESSION['cart_id']);
       
       if (count($items)>0) {
         foreach ($items as $item){
         
        if ($item->Id == $id) {

          $item->SoLuong = $item->SoLuong+$Quantity;
          Cart::edit($item);
          header('Content-Type: application/json');
          echo json_encode('Thành công');
          exit;
        }
      }
      }
      
      $sp = SanPham::find($id);
      $item = new cart($_SESSION['cart_id'],$Quantity,$id,$sp->Gia,$sp->AnhSanPham,$sp->TenSanPham);

      Cart::add($item);
    }
    header('Content-Type: application/json');
    echo json_encode('Thành công');
    exit;
  }
  public function cart()
  {

    if (isset($_SESSION['cart_id'])) {
      $items = Cart::getBySessionId($_SESSION['cart_id']);
      $data = array('items' => $items);
      $this->render('cart', $data);
      exit;
    }
    $data = array('items'=> []);
    $this->render('cart', $data);
  }
  public function checkout()
  {
    if (isset($_SESSION['cart_id'])) {
      $items = Cart::getBySessionId($_SESSION['cart_id']);
      $HoTen =$_POST["HoTen"];
      $DiaChi =$_POST["DiaChi"];
      $Email =$_POST["Email"];
      $SoDienThoai =$_POST["SoDienThoai"];
      $kh = new KhachHang(0, $SoDienThoai, $HoTen, $Email,$DiaChi);
      KhachHang::add($kh);
      $khId = KhachHang::getLatestId();
      // hóa đơn
      if (count($items)>0) {
        $soTien = 0;
        foreach ($items as $item){
          $soTien =$soTien+ ($item->SoLuong * $item->GiaBan);
          $hoadonchitiet = new HoaDonChiTiet($hdId, $item->SoLuong, $item->SanPhamId, $item->GiaBan);
          HoaDonChiTiet::add($hoadonchitiet);
        }
        $hd = new HoaDon(0,$soTien,null,$khId);
        HoaDon::add($hd);
        $hdId = HoaDon::getLatestId();
        foreach ($items as $item){
          $hoadonchitiet = new HoaDonChiTiet($hdId, $item->SoLuong, $item->SanPhamId, $item->GiaBan);
          HoaDonChiTiet::add($hoadonchitiet);
        }
      }
      
      
    }
    session_destroy();
    header("Location: index.php");
  }
  public function clearcart()
  {
    session_destroy();
    header("Location: index.php");
  }
  public function search()
  {
     $q =$_POST["q"];
    $items = SanPham::getByq($q);
    $data = array('SanPhams' => $items);
    $this->render('search', $data);
  }
}
?>