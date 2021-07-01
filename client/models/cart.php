<?php
class  Cart
{
  public $Id;
  public $SanPhamId;
  public $SoLuong;
  public $GiaBan;
  function __construct($Id, $SoLuong, $SanPhamId, $GiaBan)
  {
    $this->Id = $Id;
    $this->SoLuong = $SoLuong;
    $this->SanPhamId = $SanPhamId;
    $this->GiaBan = $GiaBan;
  }

  static function all()
  {
    $list = [];
    $db = DB::getInstance();
    $req = $db->query('SELECT * FROM  Cart');

    foreach ($req->fetchAll() as $item) {
      $list[] = new  Cart($item['Id'], $item['Quantity'], $item['ProductId'], $item['Price']);
    }

    return $list;
  }
  static function getBySessionId($SessionId)
  {
    // echo $SessionId;
    // exit;
    $list = [];
    $db = DB::getInstance();
    $req = $db->prepare('SELECT * FROM  Cart WHERE SessionId = :SessionId');
    $req->execute(array('SessionId' => $SessionId));
    foreach ($req->fetchAll() as $item) {
      $list[] = new  Cart($item['SessionId'], $item['SoLuong'], $item['SanPhamId'], $item['GiaBan'], $item['AnhSanPham'], $item['TenSanPham']);
    }
    return $list;
  }
  static function getById($Id)
  {
    $list = [];
    $db = DB::getInstance();
    $req = $db->prepare('SELECT * FROM  Cart WHERE Id = :Id');
    $req->execute(array('SessionId' => $Id));
    foreach ($req->fetchAll() as $item) {
      $list[] = new  Cart($item['Id'], $item['Quantity'], $item['ProductId'], $item['Price']);
    }
    return $list;
  }
  static function findByProductId($id)
  {
    $db = DB::getInstance();
    $req = $db->prepare('SELECT * FROM  Cart WHERE ProductId = :id');
    $req->execute(array('id' => $id));
    $item = $req->fetch();
    if (isset($item['SessionId'])) {
      return new  Cart($item['Id'], $item['Quantity'], $item['ProductId'], $item['Price']);
    }
    return null;
  }

  static function add($data)
  {
    try {
      $db = DB::getInstance();
      $sql = 'INSERT INTO  Cart(Quantity, Price, ProductId) VALUES ("' . $data->SoLuong . '", "' . $data->GiaBan . '", "' . $data->SanPhamId . '")';
      // echo $sql;
      // exit;
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
      $sql = 'UPDATE  Cart SET  Quantity="' . $data->SoLuong . '",  Price="' . $data->GiaBan . '" WHERE Id=' . $data->Id;
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
      $sql = "DELETE FROM  Cart WHERE SessionId = '$id'";
      $db->exec($sql);
      return true;
    } catch (PDOException $e) {
      return false;
    }
  }
}