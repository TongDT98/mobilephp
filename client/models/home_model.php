<?php
 require_once '../system/system.php';
 class home_model extends model_system {

function sanphamMoi(){ 
   $sql = "SELECT * FROM sanpham";
   $kq= $this->query($sql);
   return $kq;
}
 }