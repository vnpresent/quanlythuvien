<?php
include_once('./config.php');
class RentDetail
{
    public $id = null;
    public $ID_MuonTra = null;
    public $MaCaBiet = null;
    public $KieuMuon = null;
    public $HanTra = null;
    public $Loai = null;
    public $NgayTra = null;
    public $NguoiNhan = null;

    public $fill = ['id','ID_MuonTra','MaCaBiet','KieuMuon','HanTra','Loai','NgayTra','$NguoiNhan'];

    // public static function index()
    // {
    //     $query = "select * from lop  where status = '1'";
    //     $data = getalldata($query);
    //     return $data;
    // }

    public static function find($ID_MuonTra)
    {
        $query = "select * from chitietmt where ID_MuonTra = $ID_MuonTra";
        $data = getalldata($query);
        return $data;
    }

    public function update()
    {
        $query = "UPDATE chitietmt SET chitietmt.KieuMuon = '$this->KieuMuon',chitietmt.HanTra = '$this->HanTra' WHERE chitietmt.id = '$this->id';";
        return query($query);
    }

    public function return()
    {
        $day = date('Y/m/d');
        $user = Auth::$Username;
        $query = "UPDATE chitietmt SET chitietmt.Loai = 'tra',chitietmt.NgayTra = '$day' ,chitietmt.NguoiNhan =  '$user' WHERE chitietmt.id = '$this->id';";
        print($query);
        return query($query);
    }

    public static function returnpost($sothe,$macabiet)
    {
        $day = date('Y/m/d');
        $user = Auth::$Username;
        $query = " UPDATE chitietmt,muontra SET chitietmt.Loai = 'tra',chitietmt.NgayTra = '$day' ,chitietmt.NguoiNhan =  '$user' WHERE muontra.SoThe = '$sothe' AND muontra.ID_MuonTra = chitietmt.ID_MuonTra AND chitietmt.MaCaBiet = '$macabiet';";
        return query($query);
    }
    
    public static function show($id)
    {
        $query = "select * from chitietmt where id = '$id'";
        $data = getonedata($query);
        return $data;
    }
    public function save()
    {
        $query = "INSERT INTO `chitietmt` (`id`, `ID_MuonTra`, `MaCaBiet`, `KieuMuon`, `HanTra`, `Loai`, `NgayTra`, `NguoiNhan`) VALUES (NULL, '$this->ID_MuonTra', '$this->MaCaBiet', '$this->KieuMuon', '$this->HanTra', 'muon', '', '');";
        return query($query);
    }
}
