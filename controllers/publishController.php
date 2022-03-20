<?php
include_once('./models/Auth.php');
include_once('./models/Publish.php');
class publishController
{

    public function index()
    {
        if(Auth::isadmin() || Auth::isKyThuat())
        {
            $data=Publish::index();
            include_once('./views/publish/index.php');
        }
    }

    public function add()
    {
        if(Auth::isadmin() || Auth::isKyThuat())
        {
            include_once('./views/publish/add.php');
        }
    }

    public function insert()
    {
        if((Auth::isadmin() || Auth::isKyThuat()) && $_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $publish = new Publish();

            foreach($publish->fill as $prop)
            {
                if(isset($_POST[$prop]))
                {
                    $publish->$prop = $_POST[$prop];
                    if(ctype_space($_POST[$prop]) || empty($_POST[$prop]))
                    {
                        $result = 'false';
                        header('location:index.php?controller=publish&action=add&result='.$result);
                        return;
                    }
                }
            }
            if($publish->save())
                $result = 'true';
            else
                $result = 'false';
            header('location:index.php?controller=publish&action=add&result='.$result);
        }
    }

    public function edit()
    {
        if((Auth::isadmin() || Auth::isKyThuat()) && isset($_GET['MaNXB']))
        {
            $data = Publish::show($_GET['MaNXB']);
            include_once('./views/publish/edit.php');
        }
    }

    public function update()
    {
        if((Auth::isadmin() || Auth::isKyThuat()) && $_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $publish = new Publish();

            foreach($publish->fill as $prop)
            {
                if(isset($_POST[$prop]))
                {
                    $publish->$prop = $_POST[$prop];
                    if(ctype_space($_POST[$prop]) || empty($_POST[$prop]))
                    {
                        $result = 'false';
                        header('location:index.php?controller=publish&action=edit&result='.$result.'&MaNXB='.$_POST['MaNXB']);
                        return;
                    }
                }
            }
            if($publish->update())
                $result = 'true';
            else
                $result = 'false';
            header('location:index.php?controller=publish&action=edit&result='.$result.'&MaNXB='.$_POST['MaNXB']);
        }
    }

    public function delete()
    {
        if(isset($_GET['MaNXB']) && (Auth::isadmin() || Auth::isKyThuat()))
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