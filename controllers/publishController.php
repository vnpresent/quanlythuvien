<?php
include_once('./models/Auth.php');
include_once('./models/Publish.php');
class publishController
{

    public function index()
    {
        if(Auth::isadmin())
        {
            $data=Publish::index();
            include_once('./views/publish/index.php');
        }
    }

    public function add()
    {
        if(Auth::isadmin())
        {
            include_once('./views/publish/add.php');
        }
    }

    public function insert()
    {
        if(Auth::isadmin() && $_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $publish = new Publish();

            foreach($publish->fill as $prop)
            {
                if(isset($_POST[$prop]))
                {
                    $publish->$prop = $_POST[$prop];
                }
            }
            $publish->save();
            header('location:index.php?controller=publish&action=add&result=true');
        }
    }

    public function edit()
    {
        if(Auth::isadmin() && isset($_GET['MaNXB']))
        {
            $data = Publish::show($_GET['MaNXB']);
            include_once('./views/publish/edit.php');
        }
    }

    public function update()
    {
        if(Auth::isadmin() && $_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $publish = new Publish();

            foreach($publish->fill as $prop)
            {
                if(isset($_POST[$prop]))
                {
                    $publish->$prop = $_POST[$prop];
                }
            }
            $publish->update();
            header('location:index.php?controller=publish&action=edit&result=true&MaNXB='.$_POST['MaNXB']);
        }
    }

    public function delete()
    {
        if(isset($_GET['MaNXB']) && Auth::isadmin())
        {
            $publish = new Publish();
            $publish->MaNXB = $_GET['MaNXB'];
            $publish->delete();
            header('location:index.php?controller=publish');
        }
        else
        {
            header('location:index.php');
        }
    }
}
?>