<?php require_once('khachhang.php'); ?>
<?php
class HoaDon
{
  public $Id;
  public $NgayBan;
  public $SoTien;
  public $KhachHangId;
  public $TenKhachHang;

  function __construct($Id, $SoTien, $NgayBan, $KhachHangId)
  {
    $this->Id = $Id;
    $this->SoTien = $SoTien;
    $this->NgayBan = $NgayBan;
    $this->KhachHangId = $KhachHangId;

    if ($KhachHangId>0) {
      $kh =  KhachHang::find($KhachHangId);
      if ($kh!= null) {
        $this->TenKhachHang = $kh->HoTen;
      }
     } 

  }
 static function getLatestId()
  {
    $db = DB::getInstance();
    $req = $db->query('SELECT Id FROM `hoadon` WHERE 1  ORDER by ID DESC limit 1');
    $item = $req->fetch();
    if (isset($item['Id'])) {
      return $item['Id'];
    }
    return 0;
  }
  static function all()
  {
    $list = [];
    $db = DB::getInstance();
    $req = $db->query('SELECT * FROM HoaDon');

    foreach ($req->fetchAll() as $item) {
      $list[] = new HoaDon($item['Id'], $item['SoTien'],$item['NgayBan'],$item['KhachHangId']);
    }

    return $list;
  }
  static function find($id)
  {
    $db = DB::getInstance();
    $req = $db->prepare('SELECT * FROM HoaDon WHERE Id = :id');
    $req->execute(array('id' => $id));
    $item = $req->fetch();
    if (isset($item['Id'])) {
      return new HoaDon($item['Id'], $item['SoTien'],$item['NgayBan'],$item['KhachHangId']);
    }
    return null;
  }
  static function add($data)
  {
    try {
      $db = DB::getInstance();
      $sql = 'INSERT INTO HoaDon(Id, SoTien, KhachHangId) VALUES (NULL, "'.$data->SoTien.'", "'.$data->KhachHangId.'")';
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
      $sql = 'UPDATE HoaDon SET  SoTien="'.$data->SoTien.'",  KhachHangId="'.$data->KhachHangId.'" WHERE Id='.$data->Id;
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
      $sql = "DELETE FROM HoaDon WHERE Id = '$id'";
      $db->exec($sql);
      return true;
    } catch (PDOException $e) {
      return false;
    }
  }
}
?>