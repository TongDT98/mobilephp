
<?php
$controllers = array(
//   'categories' => ['index','showCat'], 
//   'loaisanpham' => ['index','showCat','add','add_post','delete','edit','edit_post'], 
//   'hedieuhanh' => ['index','showCat','add','add_post','delete','edit','edit_post'], 
//   'manhinh' => ['index','showCat','add','add_post','delete','edit','edit_post'], 
//   'nhasanxuat' => ['index','showCat','add','add_post','delete','edit','edit_post'], 
//   'hoadon' => ['index','showCat','add','add_post','delete','edit','edit_post'], 
//   'sanpham' => ['index','showCat','add','add_post','delete','edit','edit_post'], 
//   'nguoidung' => ['index','showCat','add','add_post','delete','edit','edit_post', 'login','logout'], 
//   'hoadonchitiet' => ['index'], 
'nhasanxuat' =>['index','add']
); 
include_once('admin/controllers/' . $controller . 'php');

$control = $controller . 'Controller';
$controller = new $control;
$controller->$action();
?>