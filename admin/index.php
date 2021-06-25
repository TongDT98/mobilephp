<?php

    session_start();

require_once('../system/connection.php');
// if (!isset($_SESSION['LoginAdmin']) && $_GET['action']!= 'login') {
// 	header("Location: login.php");
// }


if (isset($_GET['controller'])) {
	
  $controller = $_GET['controller'];
  if(isset($_Get['action'])){
    $action =$_Get['action'];
  }
   else {
    $action = 'index';
  }
} 

require_once('/routes.php');
?>