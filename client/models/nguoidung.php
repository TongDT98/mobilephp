<?php
class NguoiDung
{
  public $Id;
  public $HoTen;
  public $TenDangNhap;
  public $Email;
  public $DiaChi;
  public $MatKhau;
  public $VaiTro;

  function __construct($Id, $TenDangNhap, $HoTen, $Email,$DiaChi,$MatKhau,$VaiTro)
  {
    $this->Id = $Id;
    $this->TenDangNhap = $TenDangNhap;
    $this->HoTen = $HoTen;
    $this->Email = $Email;
    $this->DiaChi = $DiaChi;
    $this->MatKhau = $MatKhau;
    $this->VaiTro = $VaiTro;
  }

  static function all()
  {
    $list = [];
    $db = DB::getInstance();
    $req = $db->query('SELECT * FROM NguoiDung');

    foreach ($req->fetchAll() as $item) {
      $list[] = new NguoiDung($item['Id'], $item['TenDangNhap'],$item['HoTen'],$item['Email'],$item['DiaChi'],$item['MatKhau'],$item['VaiTro']);
    }

    return $list;
  }
  static function login($tenDangNhap , $matKhau){
     $db = DB::getInstance();
    $req = $db->prepare('SELECT * FROM NguoiDung WHERE TenDangNhap = :TenDangNhap and MatKhau= MD5( :MatKhau )');
    $req->execute(array('TenDangNhap' => $tenDangNhap,'MatKhau' => $matKhau));

    $item = $req->fetch();
    if (isset($item['Id'])) {
      return new NguoiDung($item['Id'], $item['TenDangNhap'],$item['HoTen'],$item['Email'],$item['DiaChi'],$item['MatKhau'],$item['VaiTro']);
    }
    return null;
  }
  static function find($id)
  {
    $db = DB::getInstance();
    $req = $db->prepare('SELECT * FROM NguoiDung WHERE Id = :id');
    $req->execute(array('id' => $id));
    $item = $req->fetch();
    if (isset($item['Id'])) {
      return new NguoiDung($item['Id'], $item['TenDangNhap'],$item['HoTen'],$item['Email'],$item['DiaChi'],$item['MatKhau'],$item['VaiTro']);
    }
    return null;
  }
  static function add($data)
  {
    try {
      $db = DB::getInstance();
      $sql = 'INSERT INTO NguoiDung(Id,HoTen,DiaChi, TenDangNhap, Email, MatKhau,VaiTro) VALUES (NULL, "'.$data->HoTen.'", "'.$data->DiaChi.'", "'.$data->TenDangNhap.'", "'.$data->Email.'", MD5("'.$data->MatKhau.'"), "'.$data->VaiTro.'")';
      $db->exec($sql);
      
      return true;
    } catch (PDOException $e) {
      return false;
    }
    
  }
  static function edit($data)
  {
    try {
      $db = DB::getInstance();
      $sql = 'UPDATE NguoiDung SET HoTen="'.$data->HoTen.'",DiaChi="'.$data->DiaChi.'",  TenDangNhap="'.$data->TenDangNhap.'",  Email="'.$data->Email.'",  VaiTro="'.$data->VaiTro.'" WHERE Id='.$data->Id;
      $db->exec($sql);
      return true;
    } catch (PDOException $e) {
      return false;
    }
    
  }
  static function delete($id)
  {
    try {
      $db = DB::getInstance();
      $sql = "DELETE FROM NguoiDung WHERE Id = '$id'";
      $db->exec($sql);
      return true;
    } catch (PDOException $e) {
      return false;
    }
  }
}
?>