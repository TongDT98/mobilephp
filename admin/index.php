<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once('../appconfig/connection.php');
if (!isset($_SESSION['LoginAdmin']) && $_GET['action']!= 'login') {
	header("Location: login.php");
}


if (isset($_GET['controller'])) {
	
  $controller = $_GET['controller'];
  if (isset($_GET['action'])) {
    $action = $_GET['action'];
  } else {
    $action = 'index';
  }
} else {
  $controller = 'sanpham';
  $action = 'index';
}
require_once('routes.php');
?>