<?php
include_once('./models/Auth.php');
include_once('./models/Statis.php');
class statisController
{
    public function index()
    {
        if(Auth::isadmin())
        {
            
            include_once('./views/statis/index.php');
        }
        else
        {
            header('location:index.php');
        }
    }
}