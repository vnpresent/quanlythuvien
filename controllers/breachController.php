<?php
include_once('./models/Auth.php');
include_once('./models/breach.php');
class breachController
{

    public function index()
    {
        if(Auth::isadmin())
        {
            $data=breach::index();
            include_once('./views/breach/index.php');
        }
    }

    public function add()
    {
        if(Auth::isadmin())
        {
            include_once('./views/breach/add.php');
        }
    }

    public function insert()
    {
        if(Auth::isadmin() && $_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $breach = new breach();

            foreach($breach->fill as $prop)
            {
                if(isset($_POST[$prop]))
                {
                    $breach->$prop = $_POST[$prop];
                }
            }
            if($breach->save())
                $result = 'true';
            else
                $result = 'false';
            header('location:index.php?controller=breach&action=add&result='.$result);
        }
    }

    public function edit()
    {
        if(Auth::isadmin() && isset($_GET['IDPhat']))
        {
            $data = breach::show($_GET['IDPhat']);
            include_once('./views/breach/edit.php');
        }
    }

    public function update()
    {
        if(Auth::isadmin() && $_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $breach = new breach();

            foreach($breach->fill as $prop)
            {
                if(isset($_POST[$prop]))
                {
                    $breach->$prop = $_POST[$prop];
                }
            }
            if($breach->update())
                $result = 'true';
            else
                $result = 'false';
            header('location:index.php?controller=breach&action=edit&result='.$result.'&IDPhat='.$_POST['IDPhat']);
        }
    }

    public function delete()
    {
        if(isset($_GET['IDPhat']) && Auth::isadmin())
        {
            $breach = new breach();
            $breach->IDPhat = $_GET['IDPhat'];
            $breach->delete();
            header('location:index.php?controller=breach');
        }
        else
        {
            header('location:index.php');
        }
    }
}
?>