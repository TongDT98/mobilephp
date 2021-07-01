<?php
require_once('controllers/base_controller.php');

class ErrorController extends BaseController
{
  function __construct()
  {
    $this->folder = 'error';
  }

  public function index()
  {
    $this->render('error');
  }
}