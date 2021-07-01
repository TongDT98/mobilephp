<?php require_once('sanpham.php'); ?>

<?php
class HoaDonChiTiet
{
  public $HoaDonID;
  public $SanPhamId;
  public $SoLuong;
  public $GiaBan;
  //
  public $TenSanPham;
  function __construct($HoaDonID, $SoLuong, $SanPhamId, $GiaBan)
  {
    $this->HoaDonID = $HoaDonID;
    $this->SoLuong = $SoLuong;
    $this->SanPhamId = $SanPhamId;
    $this->GiaBan = $GiaBan;
    if ($SanPhamId>0) {
      $kh =  SanPham::find($SanPhamId);
      if ($kh!= null) {
        $this->TenSanPham = $kh->TenSanPham;
      }
     } 
  }

  static function all()
  {
    $list = [];
    $db = DB::getInstance();
    $req = $db->query('SELECT * FROM HoaDonChiTiet');

    foreach ($req->fetchAll() as $item) {
      $list[] = new HoaDonChiTiet($item['HoaDonID'], $item['SoLuong'],$item['SanPhamId'],$item['GiaBan']);
    }

    return $list;
  }
  static function getByHoaDonId($HoaDonid)
  {
     $list = [];
    $db = DB::getInstance();
    $req = $db->prepare('SELECT * FROM HoaDonChiTiet WHERE HoaDonID = :HoaDonid');
    $req->execute(array('HoaDonid' => $HoaDonid));
    foreach ($req->fetchAll() as $item) {
      $list[] = new HoaDonChiTiet($item['HoaDonID'], $item['SoLuong'],$item['SanPhamId'],$item['GiaBan']);
    }
    return $list;
  }
  static function find($id)
  {
    $db = DB::getInstance();
    $req = $db->prepare('SELECT * FROM HoaDonChiTiet WHERE HoaDonID = :id');
    $req->execute(array('id' => $id));
    $item = $req->fetch();
    if (isset($item['HoaDonID'])) {
      return new HoaDonChiTiet($item['HoaDonID'], $item['SoLuong'],$item['SanPhamId'],$item['GiaBan']);
    }
    return null;
  }
  static function add($data)
  {
    try {
      $db = DB::getInstance();
      $sql = 'INSERT INTO HoaDonChiTiet(HoaDonID,SanPhamId, SoLuong, GiaBan) VALUES ("'.$data->HoaDonID.'","'.$data->SanPhamId.'", "'.$data->SoLuong.'", "'.$data->GiaBan.'")';
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
      $sql = 'UPDATE HoaDonChiTiet SET  SoLuong="'.$data->SoLuong.'",  GiaBan="'.$data->GiaBan.'" WHERE HoaDonID='.$data->HoaDonID;
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
      $sql = "DELETE FROM HoaDonChiTiet WHERE HoaDonID = '$id'";
      $db->exec($sql);
      return true;
    } catch (PDOException $e) {
      return false;
    }
  }
}
?>