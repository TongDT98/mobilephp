
<?php
class LoaiSanPham
{
  public $Id;
  public $TenLoaiSanPham;

  function __construct($Id, $TenLoaiSanPham)
  {
    $this->Id = $Id;
    $this->TenLoaiSanPham = $TenLoaiSanPham;
  }

  static function all()
  {
    $list = [];
    $db = DB::getInstance();
    $req = $db->query('SELECT * FROM loaisanpham');

    foreach ($req->fetchAll() as $item) {
      $list[] = new LoaiSanPham($item['Id'], $item['TenLoaiSanPham']);
    }

    return $list;
  }
  static function find($id)
  {
    $db = DB::getInstance();
    $req = $db->prepare('SELECT * FROM loaisanpham WHERE Id = :id');
    $req->execute(array('id' => $id));
    //$req = $db->query('SELECT * FROM loaisanpham WHERE Id = '.$id);
    $item = $req->fetch();
    if (isset($item['Id'])) {
      return new LoaiSanPham($item['Id'], $item['TenLoaiSanPham']);
    }
    return null;
  }
  static function add($data)
  {
    try {
      $db = DB::getInstance();
      $sql = 'INSERT INTO loaisanpham(Id, TenLoaiSanPham) VALUES (NULL, "'.$data->TenLoaiSanPham.'")';
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
      $sql = 'UPDATE loaisanpham SET  TenLoaiSanPham="'.$data->TenLoaiSanPham.'" WHERE Id='.$data->Id;
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
      $sql = "DELETE FROM loaisanpham WHERE Id = '$id'";
      $db->exec($sql);
      return true;
    } catch (PDOException $e) {
      return false;
    }
  }
}
?>