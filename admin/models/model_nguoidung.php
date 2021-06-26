<?php
class Nguoidung
{
  public $Id;
  public $TenDayDu;
  public $TenDangNhap;
  public $Email;
  public $MatKhau;
  public $VaiTro;

  function __construct($Id, $TenDangNhap, $TenDayDu, $Email,$MatKhau,$VaiTro)
  {
    $this->Id = $Id;
    $this->TenDangNhap = $TenDangNhap;
    $this->TenDayDu = $TenDayDu;
    $this->Email = $Email;
    $this->MatKhau = $MatKhau;
    $this->VaiTro = $VaiTro;
  }

  static function all()
  {
    $list = [];
    $db = DB::getInstance();
    $req = $db->query('SELECT * FROM Nguoidung');

    foreach ($req->fetchAll() as $item) {
      $list[] = new Nguoidung($item['Id'], $item['TenDangNhap'],$item['TenDayDu'],$item['Email'],$item['MatKhau'],$item['VaiTro']);
    }

    return $list;
  }
  static function login($tenDangNhap , $matKhau){
     $db = DB::getInstance();
    $req = $db->prepare('SELECT * FROM Nguoidung WHERE TenDangNhap = :TenDangNhap and MatKhau= :MatKhau ');
    $req->execute(array('TenDangNhap' => $tenDangNhap,'MatKhau' => $matKhau));

    $item = $req->fetch();
    if (isset($item['Id'])) {
      return new Nguoidung($item['Id'], $item['TenDangNhap'],$item['TenDayDu'],$item['Email'],$item['MatKhau'],$item['VaiTro']);
    }
    return null;
  }
  static function find($id)
  {
    $db = DB::getInstance();
    $req = $db->prepare('SELECT * FROM Nguoidung WHERE Id = :id');
    $req->execute(array('id' => $id));
    $item = $req->fetch();
    if (isset($item['Id'])) {
      return new Nguoidung($item['Id'], $item['TenDangNhap'],$item['TenDayDu'],$item['Email'],$item['MatKhau'],$item['VaiTro']);
    }
    return null;
  }
  static function add($data)
  {
    try {
      $db = DB::getInstance();
      $sql = 'INSERT INTO Nguoidung(Id,TenDayDu, TenDangNhap, Email, MatKhau,VaiTro) VALUES (NULL, "'.$data->TenDayDu.'", "'.$data->TenDangNhap.'", "'.$data->Email.'", "'.$data->MatKhau.'", "'.$data->VaiTro.'")';
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
      $sql = 'UPDATE Nguoidung SET TenDayDu="'.$data->TenDayDu.'", TenDangNhap="'.$data->TenDangNhap.'",  Email="'.$data->Email.'",  VaiTro="'.$data->VaiTro.'" WHERE Id='.$data->Id;
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
      $sql = "DELETE FROM Nguoidung WHERE Id = '$id'";
      $db->exec($sql);
      return true;
    } catch (PDOException $e) {
      return false;
    }
  }
}
?>