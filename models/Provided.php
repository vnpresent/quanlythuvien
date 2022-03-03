<?php
include_once('./config.php');
class Provided
{
    public $MaNCC = null;
    public $TenNCC = null;
    public $DiaChi = null;
    public $DienThoai = null;

    public $fill = ['MaNCC','TenNCC','DiaChi','DienThoai'];

    public static function index()
    {
        $query = "select * from nhacungcap  where status = '1'";
        $data = getalldata($query);
        return $data;
    }

    public static function show($MaNCC)
    {
        $query = "select * from nhacungcap where MaNCC = $MaNCC";
        $data = getonedata($query);
        return $data;
    }

    public function save()
    {
        $query = "INSERT INTO `nhacungcap` (`MaNCC`, `TenNCC`, `DiaChi`, `DienThoai`, `status`) VALUES (NULL, '$this->TenNCC', '$this->DiaChi' , '$this->DienThoai','1');";
        return query($query);
    }

    function update()
    {
        $query = "UPDATE `nhacungcap` SET  TenNCC = '$this->TenNCC', DiaChi = '$this->DiaChi', DienThoai = '$this->DienThoai'  WHERE MaNCC = $this->MaNCC";
        return query($query);
    }

    function delete()
    {
        $query = "update nhacungcap set status = 0 where MaNCC = '$this->MaNCC'";
        return query($query);
    }

    
}
