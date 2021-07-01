<?php
class KhachHang
{
  public $Id;
  public $HoTen;
  public $SoDienThoai;
  public $Email;
  public $DiaChi;

  function __construct($Id, $SoDienThoai, $HoTen, $Email,$DiaChi)
  {
    $this->Id = $Id;
    $this->SoDienThoai = $SoDienThoai;
    $this->HoTen = $HoTen;
    $this->Email = $Email;
    $this->DiaChi = $DiaChi;
  }

  static function all()
  {
    $list = [];
    $db = DB::getInstance();
    $req = $db->query('SELECT * FROM KhachHang');

    foreach ($req->fetchAll() as $item) {
      $list[] = new KhachHang($item['Id'], $item['SoDienThoai'],$item['HoTen'],$item['Email'],$item['DiaChi']);
    }

    return $list;
  }
  static function getLatestId()
  {
    $db = DB::getInstance();
    $req = $db->query('SELECT Id FROM `khachhang` WHERE 1  ORDER by ID DESC limit 1');
    $item = $req->fetch();
    if (isset($item['Id'])) {
      return $item['Id'];
    }
    return 0;
  }
  static function find($id)
  {
    $db = DB::getInstance();
    $req = $db->prepare('SELECT * FROM KhachHang WHERE Id = :id');
    $req->execute(array('id' => $id));
    $item = $req->fetch();
    if (isset($item['Id'])) {
      return new KhachHang($item['Id'], $item['SoDienThoai'],$item['HoTen'],$item['Email'],$item['DiaChi']);
    }
    return null;
  }
  static function add($data)
  {
    try {
      $db = DB::getInstance();
      $sql = 'INSERT INTO KhachHang(Id,HoTen,DiaChi, SoDienThoai, Email) VALUES (NULL, "'.$data->HoTen.'", "'.$data->DiaChi.'", "'.$data->SoDienThoai.'", "'.$data->Email.'")';
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
      $sql = 'UPDATE KhachHang SET HoTen="'.$data->HoTen.'",DiaChi="'.$data->DiaChi.'",  SoDienThoai="'.$data->SoDienThoai.'",  Email="'.$data->Email.'" WHERE Id='.$data->Id;
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
      $sql = "DELETE FROM KhachHang WHERE Id = '$id'";
      $db->exec($sql);
      return true;
    } catch (PDOException $e) {
      return false;
    }
  }
}
?>