
<?php
class ManHinh
{
  public $Id;
  public $KichThuocManHinh;

  function __construct($Id, $KichThuocManHinh)
  {
    $this->Id = $Id;
    $this->KichThuocManHinh = $KichThuocManHinh;
  }

  static function all()
  {
    $list = [];
    $db = DB::getInstance();
    $req = $db->query('SELECT * FROM ManHinh');

    foreach ($req->fetchAll() as $item) {
      $list[] = new ManHinh($item['Id'], $item['KichThuocManHinh']);
    }

    return $list;
  }
  static function find($id)
  {
    $db = DB::getInstance();
    $req = $db->prepare('SELECT * FROM ManHinh WHERE Id = :id');
    $req->execute(array('id' => $id));
    //$req = $db->query('SELECT * FROM ManHinh WHERE Id = '.$id);
    $item = $req->fetch();
    if (isset($item['Id'])) {
      return new ManHinh($item['Id'], $item['KichThuocManHinh']);
    }
    return null;
  }
  static function add($data)
  {
    try {
      $db = DB::getInstance();
      $sql = 'INSERT INTO ManHinh(Id, KichThuocManHinh) VALUES (NULL, "'.$data->KichThuocManHinh.'")';
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
      $sql = 'UPDATE ManHinh SET  KichThuocManHinh="'.$data->KichThuocManHinh.'" WHERE Id='.$data->Id;
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
      $sql = "DELETE FROM ManHinh WHERE Id = '$id'";
      $db->exec($sql);
      return true;
    } catch (PDOException $e) {
      return false;
    }
  }
}
?>