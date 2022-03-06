<?php
include_once('./config.php');
class DocumentDetail
{
    public $MaCaBiet = null;
    public $MaTL = null;	
    public $IDNhap = null;
    public $AnhBarcode = null;
    public $NgayCN = null;
    public $NguoiCN = null;
    public $TinhTrang = null;
    public $XuLy = null;

    public $fill = ['MaCaBiet','MaTL','AnhBarcode','NgayCN','NguoiCN','TinhTrang','XuLy'];

    public static function index()
    {
        $query = "select * from tlchitiet";
        $data = getalldata($query);
        return $data;
    }

    public static function find($MaTL)
    {
        $query = "select * from tlchitiet where MaTL = '$MaTL'";
        $data = getalldata($query);
        return $data;
    }

    public function save()
    {
        $Ngay = date("Y/m/d");
        $user = Auth::$Username;
        $query = "INSERT INTO `tlchitiet` (`MaCaBiet`, `MaTL`, `IDNhap`, `AnhBarcode`,`NgayCN`, `NguoiCN`, `TinhTrang`, `XuLy`) VALUES (NULL, '$this->MaTL','$this->IDNhap', '$this->AnhBarcode', '$Ngay','$user','moi','yes');";
        return query($query);
    }
}
