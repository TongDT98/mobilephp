
<?php
require_once('controllers/base_controller.php');
require_once('models/category.php');

class CategoriesController extends BaseController
{
  function __construct()
  {
    $this->folder = 'categories';
  }

  public function index()
  {
    $cat = Category::all();
    $data = array('categories' => $cat);
    $this->render('index', $data);
  }
  public function showCat()
  {
    $cat = Category::find($_GET['id']);
    $data = array('category' => $cat);
    $this->render('show', $data);
  }
}
?>