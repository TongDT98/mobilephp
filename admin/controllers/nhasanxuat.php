
<?php
require_once('/controllers/base.php');
require_once('../models/model_nhasanxuat.php');

class NhaSanXuatController extends BaseController
{
     
  function __construct()
  {
     $this->folder = 'nhasanxuat';
  }

  public function index()
  {
    $items = NhaSanXuat::all();
    $data = array('items' => $items);
    $this->render('index', $data);
  }
  public function add()
  {
    $data = array();
    $this->render('add',$data,true);
  }
 
?>