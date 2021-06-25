 <?php
require_once "../models/home_model.php"; 
class home {
     function __construct()   {
        $this->model = new home_model();
        $act = "home";
        if(isset($_GET["act"])==true) $act=$_GET["act"];
        switch ($act) {    
	     case "home": $this->home(); break;
             case "detail": $this->detail(); break;
             case "cat": $this->cat(); break;
             case "cartprocess": $this->cart(); break;
             case "cartview": $this->cartview(); break;        }
           
     }
     function home(){
   $listSPMoi = $this->model->sanphamMoi();          
     $viewFile = "site/views/home.php";     
     require_once "layouts.php"; 
     }
 ?>