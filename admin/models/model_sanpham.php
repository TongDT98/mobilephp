
 <?php
class SanPham
{
    public $Id;
    public $MaSanPham;
    public $TenSanPham;
    public $Gia;
    public $SoLuong;
    public $MoTa;
    public $AnhSanPham;
    public $MauSac;
    public $RAM;
    public $CPU;
    public $CameraTruoc;
    public $CameraSau;
    public $TheNho;
    public $HeDieuHanh;
    public $ManHinh;
    public $DoPhanGiai;
    public $Pin;
    public $BaoHanh;
    public $NhaSanXuatId;
    public $LoaiSanPhamId;
   


    function __construct($Id, $MaSanPham, $TenSanPham,$Gia,$SoLuong,$MoTa,$AnhSanPham,$MauSac,$RAM,$CPU,
                            $CameraTruoc,$CameraSau,$TheNho,$HeDieuHanh,$ManHinh,$DoPhanGiai,$Pin,$BaoHanh,
                                $NhaSanXuatId,$LoaiSanPhamId)
    {
        $this->Id = $Id;
        $this->MaSanPham = $MaSanPham;
        $this->TenSanPham = $TenSanPham;
        $this->Gia = $Gia;
        $this->SoLuong = $SoLuong;
        $this->MoTa =$MoTa;
        $this ->AnhSanPham = $AnhSanPham;
        $this->MauSac =$MauSac;
        $this->RAM= $RAM;
        $this->CPU = $CPU;
        $this->CameraTruoc = $CameraTruoc;
        $this->CameraSau =$CameraSau;
        $this->TheNho =$TheNho;
        $this->HeDieuHanh =$HeDieuHanh;
        $this->ManHinh =$ManHinh;
        $this->DoPhanGiai =$DoPhanGiai;
        $this->Pin = $Pin;
        $this->BaoHanh =$BaoHanh;
        $this->NhaSanXuatId =$NhaSanXuatId;
        $this->LoaiSanPhamId =$LoaiSanPhamId;
      
    }

    static function all()
    {
        $list = [];
        $db = DB::getInstance();
        $req = $db->query('SELECT * FROM SanPham ORDER BY Id DESC');

        foreach ($req->fetchAll() as $item) {
            $list[] = new SanPham($item['Id'], $item['MaSanPham'], $item['TenSanPham'],$item['Gia'],
            $item['SoLuong'],$item['MoTa'],$item['AnhSanPham'],$item['MauSac'],$item['RAM'],
            $item['CPU'],$item['CameraTruoc'],$item['CameraSau'],$item['TheNho'],$item['HeDieuHanh'],$item['ManHinh'],
            $item['DoPhanGiai'],$item['Pin'],$item['BaoHanh'],$item['NhaSanXuatId'],$item['LoaiSanPhamId'],
            );
        }

        return $list;
    }

    static function add($data)
    {
        try {
            $db = DB::getInstance();
            $sql = 'INSERT INTO SanPham(Id, MaSanPham, TenSanPham, Gia, SoLuong,
             MoTa, AnhSanPham, MauSac, RAM, CPU
            , CameraTruoc, CameraSau, TheNho, HeDieuHanh, ManHinh, DoPhanGiai,
             Pin, BaoHanh, NhaSanXuatId, LoaiSanPhamId) 
            VALUES (NULL,"' .$data->MaSanPham. '", "' . $data->TenSanPham . '","' .$data->Gia. '","' . $data->SoLuong . '","' . $data->MoTa . '",
            "' . $data->AnhSanPham . '","' . $data->MauSac . '","' . $data->RAM . '","' . $data->CPU . '","' . $data->CameraTruoc . '",
            "' . $data->CameraSau . '","' . $data->TheNho . '","' . $data->HeDieuHanh . '","' . $data->ManHinh . '","' . $data->DoPhanGiai . '",
            "' . $data->Pin . '","' . $data->BaoHanh . '","' . $data->NhaSanXuatId . '","' . $data->LoaiSanPhamId . '")';
    
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
            $sql = 'UPDATE SanPham SET MaSanPham="' . $data->MaSanPham . '", TenSanPham="' . $data->TenSanPham . '" , Gia="' . $data->Gia . '" ,
            SoLuong="' . $data->SoLuong . '" , AnhSanPham="' . $data->AnhSanPham . '" , MauSac="' . $data->MauSac . '" , RAM="' . $data->RAM . '" ,
            CPU="' . $data->CPU . '" , CameraTruoc="' . $data->CameraTruoc . '" , CameraSau="' . $data->CameraSau . '" , TheNho="' . $data->TheNho . '" ,
            HeDieuHanh="' . $data->HeDieuHanh . '" , ManHinh="' . $data->ManHinh . '" ,  DoPhanGiai="' . $data->DoPhanGiai . '" , Pin="' . $data->Pin . '" ,
            BaoHanh="' . $data->BaoHanh . '" , NhaSanXuatId="' . $data->NhaSanXuatId . '" , LoaiSanPhamId="' . $data->LoaiSanPhamId . '" 
            WHERE Id=' . $data->Id;
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
            return new SanPham($item['Id'], $item['MaSanPham'], $item['TenSanPham'],$item['Gia'],
            $item['SoLuong'],$item['MoTa'],$item['AnhSanPham'],$item['MauSac'],$item['RAM'],
            $item['CPU'],$item['CameraTruoc'],$item['CameraSau'],$item['TheNho'],$item['HeDieuHanh'],$item['ManHinh'],
            $item['DoPhanGiai'],$item['Pin'],$item['BaoHanh'],$item['NhaSanXuatId'],$item['LoaiSanPhamId']
           );
        }
        return null;
    }
}