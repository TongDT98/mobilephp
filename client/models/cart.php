
<?php
class  Cart
{
  public $SanPhamId;
  public $SoLuong;
  public $GiaBan;
  function __construct($SanPhamId, $SoLuong, $GiaBan)
  {
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
      $list[] = new  Cart( $item['SoLuong'],$item['SanPhamId'],$item['GiaBan']);
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
      $list[] = new  Cart($item['SessionId'], $item['SoLuong'],$item['SanPhamId'],$item['GiaBan'],$item['AnhSanPham'],$item['TenSanPham']);
    }
    return $list;
  }
  static function find($id)
  {
    $db = DB::getInstance();
    $req = $db->prepare('SELECT * FROM  Cart WHERE SessionId = :id');
    $req->execute(array('id' => $id));
    $item = $req->fetch();
    if (isset($item['SessionId'])) {
      return new  Cart($item['SessionId'], $item['SoLuong'],$item['SanPhamId'],$item['GiaBan'],$item['AnhSanPham'],$item['TenSanPham']);
    }
    return null;
  }
  static function add($data)
  {
    try {
      $db = DB::getInstance();
      $sql = 'INSERT INTO  Cart(SessionId, SoLuong, GiaBan, SanPhamId, AnhSanPham, TenSanPham) VALUES ("'.$data->SessionId.'", "'.$data->SoLuong.'", "'.$data->GiaBan.'", "'.$data->SanPhamId.'", "'.$data->AnhSanPham.'", "'.$data->TenSanPham.'")';
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
      $sql = 'UPDATE  Cart SET  SoLuong="'.$data->SoLuong.'",  GiaBan="'.$data->GiaBan.'" WHERE SessionId='.$data->SessionId;
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
?>