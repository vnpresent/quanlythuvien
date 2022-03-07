<?php
include_once('./config.php');
class Rent
{
    public $ID_MuonTra = null;
    public $SoThe = null;
    public $MaCaBiet = null;
    public $KieuMuon = null;
    public $NgayMuon = null;
    public $NguoiChoMuon = null;
    public $HanTra = null;
    public $Loai = null;
    public $NgayTra = null;
    public $NguoiNhan = null;

    public $fill = ['ID_MuonTra','SoThe','MaCaBiet','KieuMuon','NgayMuon','NguoiChoMuon','HanTra','Loai','NgayTra','NguoiNhan'];

    public static function index()
    {
        $query = "select * from muontra ";
        $data = getalldata($query);
        return $data;
    }

    public static function show($ID_MuonTra)
    {
        $query = "select * from muontra where ID_MuonTra = $ID_MuonTra";
        $data = getonedata($query);
        return $data;
    }

    public static function find($SoThe,$MaCaBiet)
    {
        $query = "select * from muontra where SoThe = '$SoThe' and MaCaBiet = '$MaCaBiet'";
        $data = getonedata($query);
        return $data;
    }

    public static function search($keyword)
    {
        $query = "SELECT dsdktaothe.HoTen,muontra.MaCaBiet,muontra.NgayMuon,muontra.HanTra FROM muontra,docgia,dsdktaothe WHERE dsdktaothe.HoTen like '%$keyword%' AND dsdktaothe.MaDK = docgia.MaDK AND docgia.SoThe = muontra.SoThe AND muontra.Loai = 'muon';";
        $data = getalldata($query);
        return $data;
    }

    public static function statisdocument()
    {
        $query = "SELECT MaCaBiet FROM muontra WHERE Loai = 'Muon'";
        $data = getalldata($query);
        return $data;
    }

    public static function statisreader()
    {
        $query = "SELECT DISTINCT SoThe FROM muontra WHERE Loai = 'Muon'";
        $data = getalldata($query);
        return $data;
    }

    public static function statisdocumentremain()
    {
        $query = "SELECT MaCaBiet FROM tlchitiet WHERE MaCaBiet NOT IN (SELECT MaCaBiet FROM muontra WHERE Loai = 'Muon');";
        $data = getalldata($query);
        return $data;
    }

    public function save()
    {
        $Ngay= date("Y/m/d");
        $user = Auth::$Username;
        $query = "INSERT INTO `muontra` (`ID_MuonTra`,`SoThe`, `MaCaBiet`, `KieuMuon`, `NgayMuon`, `NguoiChoMuon`, `HanTra`, `Loai`,`NgayTra`,`NguoiNhan`) VALUES (NULL, '$this->SoThe','$this->MaCaBiet', '$this->KieuMuon' , '$Ngay', '$user', '$this->HanTra','Muon','','');";
        return query($query);
    }

    function update()
    {
        // $Loai = date("Y/m/d");
        // $user = Auth::$Username;
        $query = "UPDATE `muontra` SET HanTra = '$this->HanTra', KieuMuon = '$this->KieuMuon'  WHERE ID_MuonTra = $this->ID_MuonTra";
        return query($query);
    }

    function delete()
    {
        $Ngay= date("Y/m/d");
        $user = Auth::$Username;
        $query = "UPDATE `muontra` SET NgayTra = '$Ngay', NguoiNhan = '$user', Loai = 'tra'  WHERE ID_MuonTra = '$this->ID_MuonTra'";
        return query($query);
    }

    // function delete()
    // {
    //     $query = "update muontra set status = 0 where ID_MuonTra = '$this->ID_MuonTra'";
    //     return query($query);
    // }

    
}
