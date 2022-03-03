<?php
include_once('./config.php');
class Position
{
    public $MaVT = null;
    public $TenVT = null;
    public $MoTa = null;

    public $fill = ['MaVT','TenVT','MoTa'];

    public static function index()
    {
        $query = "select * from vitri  where status = '1'";
        $data = getalldata($query);
        return $data;
    }

    public static function show($MaVT)
    {
        $query = "select * from vitri where MaVT = $MaVT";
        $data = getonedata($query);
        return $data;
    }

    public function save()
    {
        $query = "INSERT INTO `vitri` (`MaVT`, `TenVT`, `MoTa`, `status`) VALUES (NULL, '$this->TenVT', '$this->MoTa' ,'1');";
        return query($query);
    }

    function update()
    {
        $query = "UPDATE `vitri` SET  TenVT = '$this->TenVT', MoTa = '$this->MoTa'  WHERE MaVT = $this->MaVT";
        return query($query);
    }

    function delete()
    {
        $query = "update vitri set status = 0 where MaVT = '$this->MaVT'";
        return query($query);
    }

    
}
