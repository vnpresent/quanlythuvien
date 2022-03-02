<?php
include_once('./models/Auth.php');
include_once('./models/Rent.php');
class rentController
{

    public function index()
    {
        if(Auth::isadmin())
        {
            $data=Rent::index();
            include_once('./views/rent/index.php');
        }
    }

    public function add()
    {
        if(Auth::isadmin())
        {
            include_once('./views/rent/add.php');
        }
    }

    public function insert()
    {
        if(Auth::isadmin() && $_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $rent = new Rent();

            foreach($rent->fill as $prop)
            {
                if(isset($_POST[$prop]))
                {
                    $rent->$prop = $_POST[$prop];
                }
            }

            $arr = explode("\r\n", trim($_POST['MaCaBiet']));
            foreach($arr as $ma)
            {
                $rent->MaCaBiet = $ma;
                $rent->save();
            }
            // if($rent->save())
            //     $result = 'true';
            // else
            //     $result = 'false';
            header('location:index.php?controller=rent&action=add&result=true');
        }
    }

    public function edit()
    {
        if(Auth::isadmin() && isset($_GET['ID_MuonTra']))
        {
            $data = Rent::show($_GET['ID_MuonTra']);
            include_once('./views/rent/edit.php');
        }
    }

    public function update()
    {
        if(Auth::isadmin() && $_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $rent = new Rent();

            foreach($rent->fill as $prop)
            {
                if(isset($_POST[$prop]))
                {
                    $rent->$prop = $_POST[$prop];
                }
            }
            if($rent->update())
                $result = 'true';
            else
                $result = 'false';
            header('location:index.php?controller=rent&action=edit&result='.$result.'&ID_MuonTra='.$_POST['ID_MuonTra']);
        }
    }

    public function back()
    {
        if(Auth::isadmin())
        {
            include_once('./views/rent/back.php');
        }
    }

    public function rentinfo()
    {
        if(Auth::isadmin() && isset($_POST['MaCaBiet']) && isset($_POST['SoThe']))
        {
            $data = array();
            $arr = explode("\r\n", trim($_POST['MaCaBiet']));
            foreach($arr as $ma)
            {
                array_push($data,Rent::find($_POST['SoThe'],$ma));
            }
            include_once('./views/rent/rentinfo.php');
        }
    }

    public function return()
    {
        if(Auth::isadmin() && isset($_POST['SoThe']))
        {
            $arr =$_POST['MaCaBiet'];
            $sothe = $_POST['SoThe'];
            foreach($arr as $ma)
            {
                $rent = new Rent();
                $rent->MaCaBiet = $ma;
                $rent->SoThe = $sothe;
                $rent->return();
            }
            header('location:index.php?controller=rent');
        }
    }

    // public function delete()
    // {
    //     if(isset($_GET['ID_MuonTra']) && Auth::isadmin())
    //     {
    //         $rent = new Rent();
    //         $rent->ID_MuonTra = $_GET['ID_MuonTra'];
    //         $rent->delete();
    //         header('location:index.php?controller=rent');
    //     }
    //     else
    //     {
    //         header('location:index.php');
    //     }
    // }
}
?>