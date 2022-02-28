<?php
include_once('./models/Auth.php');
include_once('./models/Provided.php');
class providedController
{

    public function index()
    {
        if(Auth::isadmin())
        {
            $data=Provided::index();
            include_once('./views/provided/index.php');
        }
    }

    public function add()
    {
        if(Auth::isadmin())
        {
            include_once('./views/provided/add.php');
        }
    }

    public function insert()
    {
        if(Auth::isadmin() && $_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $provided = new Provided();

            foreach($provided->fill as $prop)
            {
                if(isset($_POST[$prop]))
                {
                    $provided->$prop = $_POST[$prop];
                }
            }
            $provided->save();
            header('location:index.php?controller=provided&action=add&result=true');
        }
    }

    public function edit()
    {
        if(Auth::isadmin() && isset($_GET['MaNCC']))
        {
            $data = Provided::show($_GET['MaNCC']);
            include_once('./views/provided/edit.php');
        }
    }

    public function update()
    {
        if(Auth::isadmin() && $_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $provided = new Provided();

            foreach($provided->fill as $prop)
            {
                if(isset($_POST[$prop]))
                {
                    $provided->$prop = $_POST[$prop];
                }
            }
            $provided->update();
            header('location:index.php?controller=provided&action=edit&result=true&MaNCC='.$_POST['MaNCC']);
        }
    }

    public function delete()
    {
        if(isset($_GET['MaTL']) && Auth::isadmin())
        {
            $provided = new Provided();
            $provided->MaTL = $_GET['MaNCC'];
            $provided->delete();
            header('location:index.php?controller=provided');
        }
        else
        {
            header('location:index.php');
        }
    }
}
?>