<?php
class NhaSanXuat
{
  public $Id;
  public $DiaChi;
  public $DienThoai;
  public $Email;
  public $MoTa;
  public $TenNhaSanXuat;
  public $Website;

  function __construct($Id, $DiaChi,$DienThoai,$Email,$MoTa,$TenNhaSanXuat,$Website)
  {
    $this->Id = $Id;
    $this->DiaChi = $DiaChi;
    $this->DienThoai = $DienThoai;
    $this->Email = $Email;
    $this->MoTa = $MoTa;
    $this->TenNhaSanXuat = $TenNhaSanXuat;
    $this->Website = $Website;
  }

  static function all()
  {
    $list = [];
    $db = DB::getInstance();
    $req = $db->query('SELECT * FROM NhaSanXuat');

    foreach ($req->fetchAll() as $item) {
      $list[] = new NhaSanXuat($item['Id'], $item['DiaChi'], $item['DienThoai'], $item['Email'], $item['MoTa'], $item['TenNhaSanXuat'], $item['Website']);
    }

    return $list;
  }
  static function find($id)
  {
    $db = DB::getInstance();
    $req = $db->prepare('SELECT * FROM NhaSanXuat WHERE Id = :id');
    $req->execute(array('id' => $id));
    //$req = $db->query('SELECT * FROM NhaSanXuat WHERE Id = '.$id);
    $item = $req->fetch();
    if (isset($item['Id'])) {
      return new NhaSanXuat($item['Id'], $item['DiaChi'], $item['DienThoai'], $item['Email'], $item['MoTa'], $item['TenNhaSanXuat'], $item['Website']);
    }
    return null;
  }
  static function add($data)
  {
    try {
      $db = DB::getInstance();
      $sql = 'INSERT INTO NhaSanXuat(Id, DiaChi, DienThoai, Email, MoTa, TenNhaSanXuat, Website) VALUES (NULL, "'.$data->DiaChi.'", "'.$data->DienThoai.'", "'.$data->Email.'", "'.$data->MoTa.'", "'.$data->TenNhaSanXuat.'", "'.$data->Website.'")';
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
      $sql = 'UPDATE NhaSanXuat SET  DiaChi="'.$data->DiaChi.'", DienThoai="'.$data->DienThoai.'", Email="'.$data->Email.'", MoTa="'.$data->MoTa.'", TenNhaSanXuat="'.$data->TenNhaSanXuat.'", Website="'.$data->Website.'" WHERE Id='.$data->Id;
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
      $sql = "DELETE FROM NhaSanXuat WHERE Id = '$id'";
      $db->exec($sql);
      return true;
    } catch (PDOException $e) {
      return false;
    }
  }
}