<?php
include_once('./config.php');
include_once('./models/CreateCard.php');
class CreateCard
{
    public $MaDK = null;
    public $HoTen = null;
    public $NamSinh = null;
    public $GioiTinh = null;
    public $ChucDanh = null;
    public $MaDV = null;
    public $MaLop = null;
    public $KhoaHoc = null;
    public $DienThoai = null;
    public $Email = null;
    public $AnhThe = null;
    public $HinhThucDK = null;
    public $LoaiDK = null;
    public $NgayDK = null;
    public $KTLePhi = null;
    public $XuLy = null;

    public $fill = ['MaDK','HoTen','NamSinh','GioiTinh','ChucDanh','MaDV','MaLop','KhoaHoc','DienThoai','Email','AnhThe','HinhThucDK','LoaiDK','NgayDK','KTLePhi','XuLy'];

    public static function index()
    {
        $query = "select * from dsdktaothe where XuLy = 'no' and status = '1'";
        $data = getalldata($query);
        return $data;
    }

    public static function show($MaDK)
    {
        $query = "select * from dsdktaothe where MaDK = $MaDK";
        $data = getonedata($query);
        return $data;
    }

    public static function search($keyword)
    {
        $query = "select MaDK,HoTen,NamSinh,GioiTinh from dsdktaothe where HoTen like '%$keyword%' and XuLy = 'yes'";
        $data = getalldata($query);
        return $data;
    }

    public function save()
    {
        $now = date("Y/m/d");
        $query = "INSERT INTO `dsdktaothe` (`MaDK`, `HoTen`, `NamSinh`, `GioiTinh`, `ChucDanh`, `MaDV`, `MaLop`, `KhoaHoc`, `DienThoai`, `Email`, `AnhThe`, `HinhThucDK`, `LoaiDK`, `NgayDK`, `KTLePhi`, `XuLy`, `status`) VALUES (NULL, '$this->HoTen', '$this->NamSinh', '$this->GioiTinh', '$this->ChucDanh', '$this->MaDV', '$this->MaLop', '$this->KhoaHoc', '$this->DienThoai', '$this->Email', '$this->AnhThe', '$this->HinhThucDK', '$this->LoaiDK', '$now', '$this->KTLePhi', 'no', '1');";
        return query($query);
    }

    function update()
    {
        $query = "UPDATE `dsdktaothe` SET  HoTen = '$this->HoTen', NamSinh = '$this->NamSinh', GioiTinh = '$this->GioiTinh', ChucDanh = '$this->ChucDanh', MaDV = '$this->MaDV', MaLop = '$this->MaLop', KhoaHoc = '$this->KhoaHoc', DienThoai = '$this->DienThoai', Email = '$this->Email', AnhThe = '$this->AnhThe', HinhThucDK = '$this->HinhThucDK', LoaiDK = '$this->LoaiDK', NgayDK = '$this->NgayDK', KTLePhi = '$this->KTLePhi' WHERE MaDK = $this->MaDK";
        return query($query);
    }

    function delete()
    {
        $query = "update dsdktaothe set status = 0 where MaDK = '$this->MaDK'";
        return query($query);
    }

    function solved()
    {
        $query = "update dsdktaothe set XuLy = 'yes' where MaDK = '$this->MaDK'";
        return query($query);
    }

    
}
