<?php
include_once('./config.php');
class Breach
{
    public $IDPhat = null;
    public $SoThe = null;
    public $LyDoVP = null;
    public $HTXuLy = null;
    public $NgayXL = null;
    public $NguoiXL = null;
    public $NgayMoThe = null;

    public $fill = ['IDPhat','SoThe','LyDoVP','HTXuLy','NgayXL','NguoiXL','NgayMoThe'];

    public static function index()
    {
        $query = "select * from xulyvp  where status = '1'";
        $data = getalldata($query);
        return $data;
    }

    public static function show($IDPhat)
    {
        $query = "select * from xulyvp where IDPhat = $IDPhat";
        $data = getonedata($query);
        return $data;
    }

    public function save()
    {
        $user = Auth::$Username;
        $date = date('Y/m/d');
        $query = "INSERT INTO `xulyvp` (`IDPhat`, `SoThe`, `LyDoVP`,`HTXuLy`, `NgayXL`, `NguoiXL`, `NgayMoThe`, `status`) VALUES (NULL, '$this->SoThe', '$this->LyDoVP', '$this->HTXuLy', '$date', '$user', '$this->NgayMoThe' ,'1');";
        return query($query);
    }

    function update()
    {
        $query = "UPDATE `xulyvp` SET  SoThe = '$this->SoThe', LyDoVP = '$this->LyDoVP', HTXuLy = '$this->HTXuLy', NgayMoThe = '$this->NgayMoThe'  WHERE IDPhat = $this->IDPhat";
        return query($query);
    }

    function delete()
    {
        $query = "update xulyvp set status = 0 where IDPhat = '$this->IDPhat'";
        return query($query);
    }

    
}
