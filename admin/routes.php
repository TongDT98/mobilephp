<?php
$controllers = array(
  'pages' => ['home', 'error'],
  'sanpham' => ['index', 'add', 'do_add', 'do_delete', 'edit', 'do_edit'],
  'nguoidung' => ['index', 'add', 'do_add', 'do_delete', 'edit', 'do_edit', 'login', 'logout'],
  'loaisanpham' =>['index','add','do_add','do_delete','edit','do_edit'],
  'nhasanxuat' =>['index','add','do_add','do_delete','edit','do_edit']
); 



include_once('controllers/' . $controller . '_controller.php');

$klass = str_replace('_', '', ucwords($controller, '_')) . 'Controller';
$controller = new $klass;
$controller->$action();