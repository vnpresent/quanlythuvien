<?php
include_once('./config.php');
class Unit
{
    public $MaDV = null;
    public $TenDV = null;
    public $GhiChu = null;

    public $fill = ['MaDV','TenDV','GhiChu'];

    public static function index()
    {
        $query = "select * from donvi";
        $data = getalldata($query);
        return $data;
    }

    public static function show($MaDV)
    {
        $query = "select * from donvi where MaDV = $MaDV";
        $data = getonedata($query);
        return $data;
    }

    function save()
    {
        $query = "INSERT INTO `donvi` (`MaDV`, `TenDV`, `GhiChu`, `status`) VALUES (NULL, '$this->TenDV', '$this->GhiChu' ,'1');";
        query($query);
    }

    function update()
    {
        $query = "UPDATE `donvi` SET  TenDV = '$this->TenDV', GhiChu = '$this->GhiChu'  WHERE MaDV = $this->MaDV";
        query($query);
    }

    function delete()
    {
        $query = "update donvi set status = 0 where MaDV = '$this->MaDV'";
        query($query);
    }

    
}