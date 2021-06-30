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
        $req = $db->query('SELECT * FROM SanPham ORDER BY Id DESC');

        foreach ($req->fetchAll() as $item) {
            $list[] = new SanPham($item['Id'], $item['MaSanPham'], $item['TenSanPham']);
        }

        return $list;
    }

    static function add($data)
    {
        try {
            $db = DB::getInstance();
            $sql = 'INSERT INTO SanPham(MaSanPham, TenSanPham) VALUES ("' . $data->MaSanPham . '", "' . $data->TenSanPham . '")';
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
            $sql = 'UPDATE SanPham SET MaSanPham="' . $data->MaSanPham . '", TenSanPham="' . $data->TenSanPham . '" WHERE Id=' . $data->Id;
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
            $sql = "DELETE FROM SanPham WHERE Id = '$id'";
            $db->exec($sql);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    static function find($id)
    {
        $db = DB::getInstance();
        $req = $db->prepare('SELECT * FROM SanPham WHERE Id = :id');
        $req->execute(array('id' => $id));
        $item = $req->fetch();
        if (isset($item['Id'])) {
            return new SanPham($item['Id'], $item['MaSanPham'], $item['TenSanPham']);
        }
        return null;
    }
}