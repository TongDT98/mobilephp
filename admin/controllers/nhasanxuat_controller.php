
<?php
require_once('controllers/base_controller.php');
require_once('models/model_nhasanxuat.php');

class NhaSanXuatController extends BaseController
{
    function __construct()
    {
        $this->folder = 'nhasanxuat';
    }

    public function index()
    {
        $items = NhaSanXuat::all();
        $data = array('items' => $items);
        $this->render('index', $data);
    }

    public function add()
    {
        $this->render('add');
    }

    public function do_add()

    {
       
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $item = new NhaSanXuat(0, $_POST["DiaChi"],$_POST["DienThoai"],$_POST["Email"],$_POST["MoTa"],$_POST["TenNhaSanXuat"],$_POST["Website"]
                      );
            NhaSanXuat::add($item);
            header("Location: http://localhost:8080/mobilephp/admin/index.php?controller=nhasanxuat&action=index");
            exit;
        }
        header("Location: http://localhost:8080/mobilephp/admin/index.php?controller=pages&action=error");
        exit;
    }

    public function edit()
    {
        $item = NhaSanXuat::find($_GET['Id']);
        $data = array('item' => $item);
        $this->render('edit', $data, false);
    }

    public function do_edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $item = new NhaSanXuat($_POST["Id"],  $_POST["DiaChi"],$_POST["DienThoai"],$_POST["Email"],$_POST["MoTa"],$_POST["TenNhaSanXuat"],$_POST["Website"]           
            );

            NhaSanXuat::edit($item);
            header("Location: http://localhost:8080/mobilephp/admin/index.php?controller=nhasanxuat&action=index");
            exit;
        }
        header("Location: http://localhost:8080/mobilephp/admin/index.php?controller=pages&action=error");
        exit;
    }

    public function do_delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET["Id"];
            NhaSanXuat::delete($id);

            header("Location: http://localhost:8080/mobilephp/admin/index.php?controller=nhasanxuat&action=index");
        }
        header("Location: http://localhost:8080/mobilephp/admin/index.php?controller=pages&action=error");
        exit;
    }
}
?>