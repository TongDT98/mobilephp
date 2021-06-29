<?php
class SanPham
{
    public $Id;
    public $MaSanPham;
    public $TenSanPham;

    function __construct($Id, $MaSanPham, $TenSanPham)
    {
        $this->Id = $Id;
        $this->MaSanPham = $MaSanPham;
        $this->TenSanPham = $TenSanPham;
    }

    static function all()
    {
        $list = [];
        $db = DB::getInstance();
        $req = $db->query('SELECT * FROM SanPham');

        foreach ($req->fetchAll() as $item) {
            $list[] = new SanPham($item['Id'], $item['MaSanPham'], $item['TenSanPham']);
        }

        return $list;
    }

    static function add($data)
    {
        try {
            $db = DB::getInstance();
            $sql = 'INSERT INTO SanPham(Id, MaSanPham, TenSanPham) VALUES (SELECT MAX(Id) + 1 FROM SanPham, "' . $data->MaSanPham . '", "' . $data->TenSanPham . '")';
            $db->exec($sql);

            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    static function edit($data)
    {
        try {
            $db = DB::getInstance();
            $sql = 'UPDATE Nguoidung SET TenDayDu="' . $data->TenDayDu . '", TenDangNhap="' . $data->TenDangNhap . '",  Email="' . $data->Email . '",  VaiTro="' . $data->VaiTro . '" WHERE Id=' . $data->Id;
            $db->exec($sql);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    static function delete($id)
    {
        try {
            $db = DB::getInstance();
            $sql = "DELETE FROM Nguoidung WHERE Id = '$id'";
            $db->exec($sql);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
}