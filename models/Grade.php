<?php
include_once('./config.php');
class Grade
{
    public $MaLop = null;
    public $TenLop = null;
    public $MaDV = null;

    public $fill = ['MaLop','TenLop','MaDV'];

    public static function index()
    {
        $query = "select * from lop  where status = '1'";
        $data = getalldata($query);
        return $data;
    }

    public static function show($MaLop)
    {
        $query = "select * from lop where MaLop = $MaLop";
        $data = getonedata($query);
        return $data;
    }

    public function save()
    {
        $query = "INSERT INTO `lop` (`MaLop`, `TenLop`, `MaDV`, `status`) VALUES (NULL, '$this->TenLop', '$this->MaDV' ,'1');";
        return query($query);
    }

    function update()
    {
        $query = "UPDATE `lop` SET  TenLop = '$this->TenLop', MaDV = '$this->MaDV'  WHERE MaLop = $this->MaLop";
        return query($query);
    }

    function delete()
    {
        $query = "update lop set status = 0 where MaLop = '$this->MaLop'";
        return query($query);
    }

    
}
