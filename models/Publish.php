<?php
include_once('./config.php');
class Publish
{
    public $MaNXB = null;
    public $TenNXB = null;
    public $GhiChu = null;

    public $fill = ['MaNXB','TenNXB','GhiChu'];

    public static function index()
    {
        $query = "select * from nhaxuatban";
        $data = getalldata($query);
        return $data;
    }

    public static function show($MaNXB)
    {
        $query = "select * from nhaxuatban where MaNXB = $MaNXB";
        $data = getonedata($query);
        return $data;
    }

    function save()
    {
        $query = "INSERT INTO `nhaxuatban` (`MaNXB`, `TenNXB`, `GhiChu`, `status`) VALUES (NULL, '$this->TenNXB', '$this->GhiChu' ,'1');";
        query($query);
    }

    function update()
    {
        $query = "UPDATE `nhaxuatban` SET  TenNXB = '$this->TenNXB', GhiChu = '$this->GhiChu'  WHERE MaNXB = $this->MaNXB";
        query($query);
    }

    function delete()
    {
        $query = "update nhaxuatban set status = 0 where MaNXB = '$this->MaNXB'";
        query($query);
    }

    
}
