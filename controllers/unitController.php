<?php
include_once('./models/Auth.php');
include_once('./models/Unit.php');
class unitController
{

    public function index()
    {
        if((Auth::isadmin() || Auth::isKyThuat()))
        {
            $data=Unit::index();
            include_once('./views/unit/index.php');
        }
    }

    public function add()
    {
        if((Auth::isadmin() || Auth::isKyThuat()))
        {
            include_once('./views/unit/add.php');
        }
    }

    public function insert()
    {
        if((Auth::isadmin() || Auth::isKyThuat()) && $_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $unit = new Unit();

            foreach($unit->fill as $prop)
            {
                if(isset($_POST[$prop]))
                {
                    $unit->$prop = $_POST[$prop];
                    if(ctype_space($_POST[$prop]) || empty($_POST[$prop]))
                    {
                        $result = 'false';
                        header('location:index.php?controller=unit&action=add&result='.$result);
                        return;
                    }
                }
            }
            if($unit->save())
                $result = 'true';
            else
                $result = 'false';
            header('location:index.php?controller=unit&action=add&result='.$result);
        }
    }

    public function edit()
    {
        if((Auth::isadmin() || Auth::isKyThuat()) && isset($_GET['MaDV']))
        {
            $data = Unit::show($_GET['MaDV']);
            include_once('./views/Unit/edit.php');
        }
    }

    public function update()
    {
        if((Auth::isadmin() || Auth::isKyThuat()) && $_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $unit = new Unit();

            foreach($unit->fill as $prop)
            {
                if(isset($_POST[$prop]))
                {
                    $unit->$prop = $_POST[$prop];
                    if(ctype_space($_POST[$prop]) || empty($_POST[$prop]))
                    {
                        $result = 'false';
                        header('location:index.php?controller=unit&action=edit&result='.$result.'&MaDV='.$_POST['MaDV']);
                        return;
                    }
                }
            }
            if($unit->update())
                $result = 'true';
            else
                $result = 'false';
            header('location:index.php?controller=unit&action=edit&result='.$result.'&MaDV='.$_POST['MaDV']);
        }
    }

    public function delete()
    {
        if(isset($_GET['MaDV']) && (Auth::isadmin() || Auth::isKyThuat()))
        {
            $unit = new Unit();
            $unit->MaDV = $_GET['MaDV'];
            $unit->delete();
            header('location:index.php?controller=unit');
        }
        else
        {
            header('location:index.php');
        }
    }
}
?>