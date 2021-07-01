<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
require_once('controllers/base_controller.php');
require_once('models/model_sanpham.php');
class HomeController extends BaseController
{
  function __construct()
  {
    $this->folder = 'home';
  }

  public function index()
  {
    $items = SanPham::all();
    $data = array('items' => $items);
    $this->render('index', $data);
  }
}