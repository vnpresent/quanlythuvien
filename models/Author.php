<?php
include_once('./config.php');
class Author
{
    public $MaTG = null;
    public $TenTG = null;
    public $GhiChu = null;

    public $fill = ['MaTG','TenTG','GhiChu'];

    public static function index()
    {
        $query = "select * from tacgia where status = '1'";
        $data = getalldata($query);
        return $data;
    }

    public static function show($MaTG)
    {
        $query = "select * from tacgia where MaTG = $MaTG";
        $data = getonedata($query);
        return $data;
    }

    public static function search($TenTG)
    {
        $query = "select * from tacgia where TenTG like '%$TenTG%';";
        $data = getalldata($query);
        return $data;
    }

    public function save()
    {
        $query = "INSERT INTO `tacgia` (`MaTG`, `TenTG`, `GhiChu`, `status`) VALUES (NULL, '$this->TenTG', '$this->GhiChu' ,'1');";
        return query($query);
    }

    function update()
    {
        $query = "UPDATE `tacgia` SET  TenTG = '$this->TenTG', GhiChu = '$this->GhiChu'  WHERE MaTG = $this->MaTG";
        return query($query);
    }

    function delete()
    {
        $query = "update tacgia set status = 0 where MaTG = '$this->MaTG'";
        return query($query);
    }

    
}
