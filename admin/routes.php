<?php
$controllers = array(
    'nhasanxuat' =>['index','add'],
);
include_once('controllers/' .$controller . '.php');
$con = $controller . 'Controller';
$controller = new $con;
$controller ->$action;
?>