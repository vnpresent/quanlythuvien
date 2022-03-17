<?php
include_once('./config.php');
include_once('Auth.php');
class Statis
{
    public static function statisdocument()
    {
        $query = "SELECT * FROM `chitietmt` WHERE Loai = 'muon';";
        $data = getalldata($query);
        return is_array($data)?count($data):0;
    }

    public static function statisreader()
    {
        $query = "SELECT DISTINCT muontra.SoThe FROM muontra,chitietmt WHERE muontra.ID_MuonTra = chitietmt.ID_MuonTra AND chitietmt.Loai = 'muon';";
        $data = getalldata($query);
        return is_array($data)?count($data):0;
    }

    public static function statisdocumentremain()
    {
        $query = "SELECT tlchitiet.MaCaBiet FROM tlchitiet WHERE tlchitiet.MaCaBiet NOT IN (SELECT chitietmt.MaCaBiet FROM chitietmt WHERE chitietmt.Loai = 'muon');";
        $data = getalldata($query);
        return is_array($data)?count($data):0;
    }
    
    public static function violatingreaders()
    {
        $query = "SELECT DISTINCT SoThe FROM xulyvp;";
        $data = getalldata($query);
        return is_array($data)?count($data):0;
    }
    
    public static function statisdocumentrent()
    {
        $me = Auth::$Username;
        $query = "SELECT chitietmt.id FROM chitietmt,muontra WHERE muontra.NguoiChoMuon = '$me' AND muontra.ID_MuonTra = chitietmt.ID_MuonTra;";
        $data = getalldata($query);
        return is_array($data)?count($data):0;
    }

    public static function statisenter()
    {
        $me = Auth::$Username;
        $day = date('0-m-Y');
        $query = "SELECT SUM(phieunhap.Soluong) AS SL FROM phieunhap WHERE phieunhap.NgayNhap >= '$day';";
        $data = getonedata($query);
        return $data?$data['SL']:0;
    }
}
