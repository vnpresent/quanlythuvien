<?php
include_once('./models/Auth.php');
include_once('./models/DocumentDetail.php');
class documentdetailController
{
    public function index()
    {
        if(Auth::isadmin())
        {
            $data=DocumentDetail::index();
            if (isset($_GET['MaTL']))
                $data=DocumentDetail::find($_GET['MaTL']);
            include_once('./views/documentdetail/index.php');
        }
    }
}