<?php
include_once('./config.php');
class Category
{
    public $MaTheLoai = null;
    public $TenTheLoai = null;
    public $GhiChu = null;

    public $fill = ['MaTheLoai','TenTheLoai','GhiChu'];

    public static function index()
    {
        $query = "select * from theloai  where status = '1'";
        $data = getalldata($query);
        return $data;
    }

    public static function show($MaTheLoai)
    {
        $query = "select * from theloai where MaTheLoai = $MaTheLoai";
        $data = getonedata($query);
        return $data;
    }

    public function save()
    {
        $query = "INSERT INTO `theloai` (`MaTheLoai`, `TenTheLoai`, `GhiChu`, `status`) VALUES (NULL, '$this->TenTheLoai', '$this->GhiChu' ,'1');";
        return query($query);
    }

    function update()
    {
        $query = "UPDATE `theloai` SET  TenTheLoai = '$this->TenTheLoai', GhiChu = '$this->GhiChu'  WHERE MaTheLoai = $this->MaTheLoai";
        return query($query);
    }

    function delete()
    {
        $query = "update theloai set status = 0 where MaTheLoai = '$this->MaTheLoai'";
        return query($query);
    }

    
}
