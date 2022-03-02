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
            include_once('./views/documentdetail/index.php');
        }
    }
}