<?php
include_once('./models/Auth.php');
include_once('./models/Rent.php');
include_once('./models/Breach.php');
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