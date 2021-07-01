<?php require_once('loaisanpham.php'); ?>
<?php require_once('nhasanxuat.php'); ?>

<?php
class SanPham
{
  public $Id;
  public $MaSanPham;
  public $TenSanPham;
  public $MoTa;

  public $Gia ;
  public $SoLuong;
  public $AnhSanPham;
  public $MauSac;
  public $Camera;
  public $RAM;
  public $HoTroTheNho;
  public $TheNho;
  public $KetNoi;
  public $HeDieuHanhId;
  public $ManHinhId;
  public $KichThuoc;
  public $TrongLuong;
  public $GiaiTriUngDung;
  public $ThongTinPin;
  public $BaoHanh;
  public $DaDuyet;
  public $NhaSanXuatId;
  public $PhanLoaiId;
  public $NguoiDungId;
  public $DaXoa;
  public $OrderNumber;
  public $TocDoCPU;
  public $ChipXuLy;
  public $DoPhanGiai;
  public $DoRong;
  public $CongNgheManHinh;
//
  public $TenNhaSX;
  public $TenLSP;
  function __construct($Id, $TenSanPham, $MaSanPham, $MoTa,
                      $Gia, $SoLuong, $AnhSanPham, $MauSac,
                      $Camera, $RAM , $HoTroTheNho, $TheNho,
                      $KetNoi, $HeDieuHanhId, $ManHinhId, $KichThuoc,
                      $TrongLuong, $GiaiTriUngDung, $ThongTinPin, $BaoHanh,
                      $DaDuyet, $NhaSanXuatId, $PhanLoaiId, $NguoiDungId,
                      $DaXoa, $OrderNumber, $TocDoCPU, $ChipXuLy,
                      $DoPhanGiai, $DoRong, $CongNgheManHinh)
  {
    $this->Id = $Id;
    $this->TenSanPham = $TenSanPham;
    $this->MaSanPham = $MaSanPham;
    $this->MoTa = $MoTa;

    $this->Gia = $Gia;
    $this->SoLuong = $SoLuong;
    $this->AnhSanPham = $AnhSanPham;
    $this->MauSac = $MauSac;
    $this->Camera = $Camera;
    $this->RAM = $RAM;
    $this->HoTroTheNho = $HoTroTheNho;
    $this->TheNho = $TheNho;
    $this->KetNoi = $KetNoi;
    $this->HeDieuHanhId = $HeDieuHanhId;
    $this->ManHinhId = $ManHinhId;
    $this->KichThuoc = $KichThuoc;
    $this->TrongLuong = $TrongLuong;
    $this->GiaiTriUngDung = $GiaiTriUngDung;
    $this->ThongTinPin = $ThongTinPin;
    $this->BaoHanh = $BaoHanh;
    $this->DaDuyet = $DaDuyet;
    $this->NhaSanXuatId = $NhaSanXuatId;
    $this->PhanLoaiId = $PhanLoaiId;
    $this->NguoiDungId = $NguoiDungId;
    $this->DaXoa = $DaXoa;
    $this->OrderNumber = $OrderNumber;
    $this->TocDoCPU = $TocDoCPU;
    $this->ChipXuLy = $ChipXuLy;
    $this->DoPhanGiai = $DoPhanGiai;
    $this->DoRong = $DoRong;
    $this->CongNgheManHinh = $CongNgheManHinh;

    if ($PhanLoaiId>0) {
      $kh =  LoaiSanPham::find($PhanLoaiId);
      if ($kh!= null) {
        $this->TenLSP = $kh->TenLoaiSanPham;
      }
     } 
     if ($NhaSanXuatId>0) {
      $kh =  NhaSanXuat::find($NhaSanXuatId);
      if ($kh!= null) {
        $this->TenNhaSX = $kh->TenNhaSanXuat;
      }
     } 
  }

  static function all()
  {
    $list = [];
    $db = DB::getInstance();
    $req = $db->query('SELECT * FROM SanPham');

    foreach ($req->fetchAll() as $item) {
      $list[] = new SanPham($item['Id'], $item['TenSanPham'],$item['MaSanPham'],$item['MoTa'],
      $item['Gia'], $item['SoLuong'],$item['AnhSanPham'],$item['MauSac'],
      $item['Camera'], $item['RAM'],$item['HoTroTheNho'],$item['TheNho'],
      $item['KetNoi'], $item['HeDieuHanhId'],$item['ManHinhId'],$item['KichThuoc'],
      $item['TrongLuong'], $item['GiaiTriUngDung'],$item['ThongTinPin'],$item['BaoHanh'],
      $item['DaDuyet'], $item['NhaSanXuatId'],$item['PhanLoaiId'],$item['NguoiDungId'],
      $item['DaXoa'], $item['OrderNumber'],$item['TocDoCPU'],$item['ChipXuLy'],
      $item['DoPhanGiai'], $item['DoRong'],$item['CongNgheManHinh']);
    }

    return $list;
  }
  static function find($id)
  {
    $db = DB::getInstance();
    $req = $db->prepare('SELECT * FROM SanPham WHERE Id = :id');
    $req->execute(array('id' => $id));
    $item = $req->fetch();
    if (isset($item['Id'])) {
      return new SanPham($item['Id'], $item['TenSanPham'],$item['MaSanPham'],$item['MoTa'],
      $item['Gia'], $item['SoLuong'],$item['AnhSanPham'],$item['MauSac'],
      $item['Camera'], $item['RAM'],$item['HoTroTheNho'],$item['TheNho'],
      $item['KetNoi'], $item['HeDieuHanhId'],$item['ManHinhId'],$item['KichThuoc'],
      $item['TrongLuong'], $item['GiaiTriUngDung'],$item['ThongTinPin'],$item['BaoHanh'],
      $item['DaDuyet'], $item['NhaSanXuatId'],$item['PhanLoaiId'],$item['NguoiDungId'],
      $item['DaXoa'], $item['OrderNumber'],$item['TocDoCPU'],$item['ChipXuLy'],
      $item['DoPhanGiai'], $item['DoRong'],$item['CongNgheManHinh']);
    }
    return null;
  }
  static function getByLTS($ltsid)
  {
    $list = [];
    $db = DB::getInstance();
    
    $req = $db->prepare('SELECT * FROM SanPham WHERE PhanLoaiId = :ltsid');
    $req->execute(array('ltsid' => $ltsid));
    foreach ($req->fetchAll() as $item) {
      $list[] = new SanPham($item['Id'], $item['TenSanPham'],$item['MaSanPham'],$item['MoTa'],
      $item['Gia'], $item['SoLuong'],$item['AnhSanPham'],$item['MauSac'],
      $item['Camera'], $item['RAM'],$item['HoTroTheNho'],$item['TheNho'],
      $item['KetNoi'], $item['HeDieuHanhId'],$item['ManHinhId'],$item['KichThuoc'],
      $item['TrongLuong'], $item['GiaiTriUngDung'],$item['ThongTinPin'],$item['BaoHanh'],
      $item['DaDuyet'], $item['NhaSanXuatId'],$item['PhanLoaiId'],$item['NguoiDungId'],
      $item['DaXoa'], $item['OrderNumber'],$item['TocDoCPU'],$item['ChipXuLy'],
      $item['DoPhanGiai'], $item['DoRong'],$item['CongNgheManHinh']);
    }
    return $list;
  }
  static function getByq($q)
  {
    $list = [];
    $db = DB::getInstance();
    
    $req = $db->prepare('SELECT * FROM SanPham WHERE TenSanPham like :q');
    $req->execute(array('q' => '%'.$q.'%'));
    foreach ($req->fetchAll() as $item) {
      $list[] = new SanPham($item['Id'], $item['TenSanPham'],$item['MaSanPham'],$item['MoTa'],
      $item['Gia'], $item['SoLuong'],$item['AnhSanPham'],$item['MauSac'],
      $item['Camera'], $item['RAM'],$item['HoTroTheNho'],$item['TheNho'],
      $item['KetNoi'], $item['HeDieuHanhId'],$item['ManHinhId'],$item['KichThuoc'],
      $item['TrongLuong'], $item['GiaiTriUngDung'],$item['ThongTinPin'],$item['BaoHanh'],
      $item['DaDuyet'], $item['NhaSanXuatId'],$item['PhanLoaiId'],$item['NguoiDungId'],
      $item['DaXoa'], $item['OrderNumber'],$item['TocDoCPU'],$item['ChipXuLy'],
      $item['DoPhanGiai'], $item['DoRong'],$item['CongNgheManHinh']);
    }
    return $list;
  }
  static function add($data)
  {
    try {
      $db = DB::getInstance();
      $sql = 'INSERT INTO SanPham(`Id`, `MaSanPham`, `TenSanPham`, `MoTa`, `Gia`, `SoLuong`, `AnhSanPham`, `MauSac`, `Camera`, `RAM`, `HoTroTheNho`, `TheNho`, `KetNoi`, `HeDieuHanhId`, `ManHinhId`, `KichThuoc`, `TrongLuong`, `GiaiTriUngDung`, `ThongTinPin`, `BaoHanh`, `DaDuyet`, `NhaSanXuatId`, `PhanLoaiId`, `NguoiDungId`, `DaXoa`, `OrderNumber`, `TocDoCPU`, `ChipXuLy`, `DoPhanGiai`, `DoRong`, `CongNgheManHinh`) 
        VALUES 
        (NULL, "'.$data->MaSanPham.'", "'.$data->TenSanPham.'", "'.$data->MoTa.'", "'.$data->Gia.'", "'.$data->SoLuong.'", "'.$data->AnhSanPham.'", "'.$data->MauSac.'", "'.$data->Camera.'", "'.$data->RAM.'", "'.$data->HoTroTheNho.'", "'.$data->TheNho.'", "'.$data->KetNoi.'", "'.$data->HeDieuHanhId.'", "'.$data->ManHinhId.'", "'.$data->KichThuoc.'", "'.$data->TrongLuong.'", "'.$data->GiaiTriUngDung.'", "'.$data->ThongTinPin.'", "'.$data->BaoHanh.'", "'.$data->DaDuyet.'", "'.$data->NhaSanXuatId.'", "'.$data->PhanLoaiId.'", "'.$data->NguoiDungId.'", "'.$data->DaXoa.'", "'.$data->OrderNumber.'", "'.$data->TocDoCPU.'", "'.$data->ChipXuLy.'", "'.$data->DoPhanGiai.'", "'.$data->DoRong.'", "'.$data->CongNgheManHinh.'")';
        //echo $sql;
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
      $sql = 'UPDATE SanPham SET  `MaSanPham`="'.$data->MaSanPham.'",`TenSanPham`="'.$data->TenSanPham.'",`MoTa`="'.$data->MoTa.'",`Gia`="'.$data->Gia.'",`SoLuong`="'.$data->SoLuong.'",`AnhSanPham`="'.$data->AnhSanPham.'",`MauSac`="'.$data->MauSac.'",`Camera`="'.$data->Camera.'",`RAM`="'.$data->RAM.'",`HoTroTheNho`="'.$data->HoTroTheNho.'",`TheNho`="'.$data->TheNho.'",`KetNoi`="'.$data->KetNoi.'",`HeDieuHanhId`="'.$data->HeDieuHanhId.'",`ManHinhId`="'.$data->ManHinhId.'",`KichThuoc`="'.$data->KichThuoc.'",`TrongLuong`="'.$data->TrongLuong.'",`GiaiTriUngDung`="'.$data->GiaiTriUngDung.'",`ThongTinPin`="'.$data->ThongTinPin.'",`BaoHanh`="'.$data->BaoHanh.'",`DaDuyet`="'.$data->DaDuyet.'",`NhaSanXuatId`="'.$data->NhaSanXuatId.'",`PhanLoaiId`="'.$data->PhanLoaiId.'",`NguoiDungId`="'.$data->NguoiDungId.'",`DaXoa`="'.$data->DaXoa.'",`OrderNumber`="'.$data->OrderNumber.'",`TocDoCPU`="'.$data->TocDoCPU.'",`ChipXuLy`="'.$data->ChipXuLy.'",`DoPhanGiai`="'.$data->DoPhanGiai.'",`DoRong`="'.$data->DoRong.'",`CongNgheManHinh`="'.$data->CongNgheManHinh.'" WHERE Id='.$data->Id;
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
}
?>