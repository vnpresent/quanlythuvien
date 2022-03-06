<?php
include_once('./config.php');
class User
{
    //biến lưu username,name,level
    public $id = null;
    public $Username = null;
    public $Password = null;
    public $HoTen = null;
    public $NamSinh = null;
    public $GioiTinh = null;
    public $ChucDanh = null;
    public $Email = null;
    public $DienThoai = null;

    public $fill = ['id','Username','Password','HoTen','NamSinh','GioiTinh','ChucDanh','Email','DienThoai'];

    public static function index()
    {
        $query = "select * from nguoidung  where status = '1'";
        $data = getalldata($query);
        return $data;
    }

    public static function show($idoruser)
    {
        $query = "select * from nguoidung where id = '$idoruser' or Username = '$idoruser'";
        $data = getonedata($query);
        return $data;
    }

    public function save()
    {
        $token = rand_string(18);
        $query = "INSERT INTO `nguoidung` (`id`, `username`, `password`, `HoTen`, `NamSinh`, `GioiTinh`, `ChucDanh`, `Email`, `DienThoai`, `token`, `status`) VALUES (NULL, '$this->Username', '$this->Password', '$this->HoTen', '$this->NamSinh', '$this->GioiTinh', '', '$this->Email', '$this->DienThoai', '$token', '1');";
        return query($query);
    }

    function update()
    {
        $query = "UPDATE `nguoidung` SET  HoTen = '$this->HoTen', NamSinh = '$this->NamSinh', GioiTinh = '$this->GioiTinh', Email = '$this->Email', DienThoai = '$this->DienThoai'  WHERE id = $this->id";
        return query($query);
    }

    function per()
    {
        $query = "UPDATE `nguoidung` SET  ChucDanh = '$this->ChucDanh' WHERE id = $this->id";
        return query($query);
    }

    function changepass($pass)
    {
        $query = "UPDATE `nguoidung` SET  Password = '$pass' WHERE id = $this->id";
        print($query);
        return query($query);
    }

    function delete()
    {
        $query = "update nguoidung set status = 0 where id = $this->id";
        return query($query);
    }
}
