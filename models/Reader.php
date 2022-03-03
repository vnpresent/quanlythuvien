<?php
include_once('./config.php');
include_once('CreateCard.php');
class Reader
{
    public $SoThe = null;
    public $MaDK = null;
    public $AnhBarcode = null;
    public $NgayCap = null;
    public $HSD = null;
    public $TinhTrang = null;
    public $NguoiCN = null;
    public $NgayCN = null;

    public $fill = ['SoThe','MaDK','AnhBarcode','NgayCap','HSD','TinhTrang','NguoiCN','NgayCN'];

    public static function index()
    {
        $query = "select * from docgia  where status = '1'";
        $data = getalldata($query);
        return $data;
    }

    public static function show($SoThe)
    {
        $query = "select * from docgia where SoThe = $SoThe";
        $data = getonedata($query);
        return $data;
    }

    public function save()
    {
        $Ngay= date("Y/m/d");
        $user = Auth::$Username;
        $createcard = new CreateCard();
        $createcard->MaDK = $this->MaDK;
        if($createcard->solved())
        {
            $query = "INSERT INTO `docgia` (`SoThe`,`MaDK`, `AnhBarcode`, `NgayCap`, `HSD`, `TinhTrang`, `NguoiCN`, `NgayCN`) VALUES (NULL, '$this->MaDK','$this->AnhBarcode', '$Ngay' , '$this->HSD', '$this->TinhTrang', '$user', '$Ngay');";
            return query($query);
        }
        else
            return false;
    }

    function update()
    {
        $NgayCN = date("Y/m/d");
        $user = Auth::$Username;
        $query = "UPDATE `docgia` SET  AnhBarcode = '$this->AnhBarcode', HSD = '$this->HSD', TinhTrang = '$this->TinhTrang', NguoiCN = '$user', NgayCN = '$NgayCN'  WHERE SoThe = $this->SoThe";
        return query($query);
    }

    function delete()
    {
        $query = "update docgia set status = 0 where SoThe = '$this->SoThe'";
        return query($query);
    }

    
}
