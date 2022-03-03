<?php
include_once('./config.php');
class Language
{
    public $MaNgonNgu = null;
    public $TenNgonNgu = null;
    public $GhiChu = null;

    public $fill = ['MaNgonNgu','TenNgonNgu','GhiChu'];

    public static function index()
    {
        $query = "select * from ngonngu  where status = '1'";
        $data = getalldata($query);
        return $data;
    }

    public static function show($MaNgonNgu)
    {
        $query = "select * from ngonngu where MaNgonNgu = $MaNgonNgu";
        $data = getonedata($query);
        return $data;
    }

    public function save()
    {
        $query = "INSERT INTO `ngonngu` (`MaNgonNgu`, `TenNgonNgu`, `GhiChu`, `status`) VALUES (NULL, '$this->TenNgonNgu', '$this->GhiChu' ,'1');";
        return query($query);
    }

    function update()
    {
        $query = "UPDATE `ngonngu` SET  TenNgonNgu = '$this->TenNgonNgu', GhiChu = '$this->GhiChu'  WHERE MaNgonNgu = $this->MaNgonNgu";
        return query($query);
    }

    function delete()
    {
        $query = "update ngonngu set status = 0 where MaNgonNgu = '$this->MaNgonNgu'";
        return query($query);
    }

    
}
