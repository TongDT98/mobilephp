
<?php
class HeDieuHanh
{
  public $Id;
  public $TenHeDieuHanh;

  function __construct($Id, $TenHeDieuHanh)
  {
    $this->Id = $Id;
    $this->TenHeDieuHanh = $TenHeDieuHanh;
  }

  static function all()
  {
    $list = [];
    $db = DB::getInstance();
    $req = $db->query('SELECT * FROM HeDieuHanh');

    foreach ($req->fetchAll() as $item) {
      $list[] = new HeDieuHanh($item['Id'], $item['TenHeDieuHanh']);
    }

    return $list;
  }
  static function find($id)
  {
    $db = DB::getInstance();
    $req = $db->prepare('SELECT * FROM HeDieuHanh WHERE Id = :id');
    $req->execute(array('id' => $id));
    //$req = $db->query('SELECT * FROM HeDieuHanh WHERE Id = '.$id);
    $item = $req->fetch();
    if (isset($item['Id'])) {
      return new HeDieuHanh($item['Id'], $item['TenHeDieuHanh']);
    }
    return null;
  }
  static function add($data)
  {
    try {
      $db = DB::getInstance();
      $sql = 'INSERT INTO HeDieuHanh(Id, TenHeDieuHanh) VALUES (NULL, "'.$data->TenHeDieuHanh.'")';
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
      $sql = 'UPDATE HeDieuHanh SET  TenHeDieuHanh="'.$data->TenHeDieuHanh.'" WHERE Id='.$data->Id;
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
      $sql = "DELETE FROM HeDieuHanh WHERE Id = '$id'";
      $db->exec($sql);
      return true;
    } catch (PDOException $e) {
      return false;
    }
  }
}
?>