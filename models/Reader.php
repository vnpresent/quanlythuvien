<?php
include_once('./config.php');
class Reader
{
    public $SoThe = null;
    public $MaDK = null;
    public $AnhBarcode = null;
    public $NgayCap = null;
    public $HSD = null;
    public $TinhTrang = null;
    public $NguoiCN = null;
    public $NgayCN = null;

    public $fill = ['SoThe','MaDK','AnhBarcode','NgayCap','HSD','TinhTrang','NguoiCN','NgayCN'];

    public static function index()
    {
        $query = "select * from docgia";
        $data = getalldata($query);
        return $data;
    }

    public static function show($SoThe)
    {
        $query = "select * from docgia where MaTL = $SoThe";
        $data = getonedata($query);
        return $data;
    }

    function save()
    {
        $NgayCN = date("Y/m/d");
        $query = "INSERT INTO `docgia` (`SoThe`, `MaDK`, `AnhBarcode`, `NgayCap`, `HSD`, `TinhTrang`, `NguoiCN`, `NgayCN`) VALUES (NULL, '$this->TenTL', '$this->MaTheLoai' , '$this->MaDV', '$this->MaTG', '$this->MaNXB', '$this->NamXB', '$this->MaNgonNgu', '$this->NoiDung', '$this->SoTrang', '$this->KhoGiay', '$this->LanTB', '$this->GiaBia', '$this->SoPH', '$this->NgayPH', '$this->TongSo', '$this->MaVT', '$NgayCN');";
        return query($query);
    }

    function update()
    {
        $NgayCN = date("Y/m/d");
        $query = "UPDATE `tailieu` SET  TenTL = '$this->TenTL', MaTheLoai = '$this->MaTheLoai', MaDV = '$this->MaDV', MaTG = '$this->MaTG', MaNXB = '$this->MaNXB', NamXB = '$this->NamXB', MaNgonNgu = '$this->MaNgonNgu', NoiDung = '$this->NoiDung', SoTrang = '$this->SoTrang', KhoGiay = '$this->KhoGiay', LanTB = '$this->LanTB', GiaBia = '$this->GiaBia', SoPH = '$this->SoPH', NgayPH = '$this->NgayPH', TongSo = '$this->TongSo', MaVT = '$this->MaVT', NgayCN = '$NgayCN'  WHERE MaTL = $this->MaTL";
        return query($query);
    }

    function delete()
    {
        $query = "update tailieu set status = 0 where MaTL = '$this->MaTL'";
        return query($query);
    }

    
}
