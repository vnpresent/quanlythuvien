<?php
include_once('./models/Auth.php');
include_once('./models/Enter.php');
include_once('./models/Document.php');
include_once('./models/Provided.php');
class enterController
{

    public function index()
    {
        if((Auth::isadmin() || Auth::isThuThu()))
        {
            $data=Enter::index();
            include_once('./views/enter/index.php');
        }
    }

    public function add()
    {
        if((Auth::isadmin() || Auth::isThuThu()))
        {
            $documents = Document::index();
            $provideds = Provided::index();
            include_once('./views/enter/add.php');
        }
    }

    public function insert()
    {
        if((Auth::isadmin() || Auth::isThuThu()) && $_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $enter = new Enter();

            foreach($enter->fill as $prop)
            {
                if(isset($_POST[$prop]))
                {
                    $enter->$prop = $_POST[$prop];
                    if(ctype_space($_POST[$prop]) || empty($_POST[$prop]))
                    {
                        header('location:index.php?controller=enter&action=add&result=false');
                        return;
                    }
                }
            }
            if($enter->save())
                $result = 'true';
            else
                $result = 'false';
            header('location:index.php?controller=enter&action=add&result='.$result);
        }
    }

    public function edit()
    {
        if((Auth::isadmin() || Auth::isThuThu()) && isset($_GET['IDNhap']))
        {
            $data = Enter::show($_GET['IDNhap']);
            $documents = Document::index();
            $provideds = Provided::index();
            include_once('./views/enter/edit.php');
        }
    }

    public function update()
    {
        if((Auth::isadmin() || Auth::isThuThu()) && $_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $enter = new Enter();

            foreach($enter->fill as $prop)
            {
                if(isset($_POST[$prop]))
                {
                    $enter->$prop = $_POST[$prop];
                    if(ctype_space($_POST[$prop]) || empty($_POST[$prop]))
                    {
                        header('location:index.php?controller=enter&action=edit&result=false&IDNhap='.$_POST['IDNhap']);
                        return;
                    }
                }
            }
            if($enter->update())
                $result = 'true';
            else
                $result = 'false';
            header('location:index.php?controller=enter&action=edit&result='.$result.'&IDNhap='.$_POST['IDNhap']);
        }
    }

    public function delete()
    {
        if(isset($_GET['IDNhap']) && (Auth::isadmin() || Auth::isThuThu()))
        {
            $enter = new Enter();
            $enter->IDNhap = $_GET['IDNhap'];
            $enter->delete();
            header('location:index.php?controller=enter');
        }
        else
        {
            header('location:index.php');
        }
    }
}
?>