<?php
include_once('./config.php');
include_once('DocumentDetail.php');
class Enter
{
    public $IDNhap = null;
    public $MaTL = null;
    public $MaNCC = null;
    public $NguoiNhap = null;
    public $NgayNhap = null;
    public $Soluong = null;

    public $fill = ['IDNhap','MaTL','MaNCC','NguoiNhap','NgayNhap','Soluong'];

    public static function index()
    {
        $query = "select * from phieunhap  where status = '1'";
        $data = getalldata($query);
        return $data;
    }

    public static function show($IDNhap)
    {
        $query = "select * from phieunhap where IDNhap = $IDNhap";
        $data = getonedata($query);
        return $data;
    }

    public function save()
    {
        $Ngay = date("Y/m/d");
        $user = Auth::$Username;
        $query = "INSERT INTO `phieunhap` (`IDNhap`, `MaTL`, `MaNCC`,`NguoiNhap`, `NgayNhap`, `Soluong`, `status`) VALUES (NULL, '$this->MaTL', '$this->MaNCC', '$user' , '$Ngay', '$this->Soluong','1');";
        for ($i=0;$i<(int)$this->Soluong;$i++)
        {
            $documentdetail = new DocumentDetail();
            $documentdetail->MaTL = $this->MaTL;
            $documentdetail->IDNhap = null;
            $documentdetail->AnhBarcode=null;
            $documentdetail->save();
        }
        return query($query);
    }

    public function update()
    {
        $query = "UPDATE `phieunhap` SET  MaTL = '$this->MaTL', MaNCC = '$this->MaNCC'  WHERE IDNhap = $this->IDNhap";
        return query($query);
    }

    public function delete()
    {
        $query = "update phieunhap set status = 0 where IDNhap = '$this->IDNhap'";
        return query($query);
    }

    
}
