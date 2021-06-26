<?php
$controllers = array(
    'nhasanxuat' =>['index','add'],
    'nguoidung' => ['index','add','add_post','delete','edit','edit_post', 'login','logout'], 
);
include_once('controllers/' .$controller . '.php');
$klass = str_replace('', '', ucwords($controller, '')) . 'Controller';
$controller = new $klass;
$controller ->$action();
?>