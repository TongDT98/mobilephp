
<?php
class Category
{
  public $id;
  public $catName;

  function __construct($id, $catName)
  {
    $this->id = $id;
    $this->catName = $catName;
  }

  static function all()
  {
    $list = [];
    $db = DB::getInstance();
    $req = $db->query('SELECT * FROM category');

    foreach ($req->fetchAll() as $item) {
      $list[] = new Category($item['id'], $item['catName']);
    }

    return $list;
  }
  static function find($id)
  {
    $db = DB::getInstance();
    $req = $db->prepare('SELECT * FROM category WHERE id = :id');
    $req->execute(array('id' => $id));

    $item = $req->fetch();
    if (isset($item['id'])) {
      return new Category($item['id'], $item['catName']);
    }
    return null;
  }
}
?>