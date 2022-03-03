<?php
include_once('./config.php');
class Document
{
    public $MaTL = null;
    public $TenTL = null;
    public $MaTheLoai = null;
    public $MaDV = null;
    public $MaTG = null;
    public $MaNXB = null;
    public $NamXB = null;
    public $MaNgonNgu = null;
    public $NoiDung = null;
    public $SoTrang = null;
    public $KhoGiay = null;
    public $LanTB = null;
    public $GiaBia = null;
    public $SoPH = null;
    public $NgayPH = null;
    public $TongSo = null;
    public $MaVT = null;
    public $NgayCN = null;

    public $fill = ['MaTL','TenTL','MaTheLoai','MaDV','MaTG','MaNXB','NamXB','MaNgonNgu','NoiDung','SoTrang','KhoGiay','LanTB','GiaBia','SoPH','NgayPH','TongSo','MaVT','NgayCN'];

    public static function index()
    {
        $query = "select * from tailieu  where status = '1'";
        $data = getalldata($query);
        return $data;
    }

    public static function show($MaTL)
    {
        $query = "select * from tailieu where MaTL = $MaTL";
        $data = getonedata($query);
        return $data;
    }

    public static function search($keyword)
    {
        $query = "select MaTL,TenTL,MaTheLoai,MaVT from tailieu where TenTL like '%$keyword%'";
        $data = getalldata($query);
        return $data;
    }

    public function save()
    {
        $NgayCN = date("Y/m/d");
        $query = "INSERT INTO `tailieu` (`MaTL`, `TenTL`, `MaTheLoai`, `MaDV`, `MaTG`, `MaNXB`, `NamXB`, `MaNgonNgu`, `NoiDung`, `SoTrang`, `KhoGiay`, `LanTB`, `GiaBia`, `SoPH`, `NgayPH`, `TongSo`, `MaVT`, `NgayCN`) VALUES (NULL, '$this->TenTL', '$this->MaTheLoai' , '$this->MaDV', '$this->MaTG', '$this->MaNXB', '$this->NamXB', '$this->MaNgonNgu', '$this->NoiDung', '$this->SoTrang', '$this->KhoGiay', '$this->LanTB', '$this->GiaBia', '$this->SoPH', '$this->NgayPH', '$this->TongSo', '$this->MaVT', '$NgayCN');";
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
