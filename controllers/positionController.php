<?php
include_once('./models/Auth.php');
include_once('./models/Position.php');
class PositionController
{

    public function index()
    {
        if(Auth::isadmin())
        {
            $data=Position::index();
            include_once('./views/position/index.php');
        }
    }

    public function add()
    {
        if(Auth::isadmin())
        {
            include_once('./views/position/add.php');
        }
    }

    public function insert()
    {
        if(Auth::isadmin() && $_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $Position = new Position();

            foreach($Position->fill as $prop)
            {
                if(isset($_POST[$prop]))
                {
                    $Position->$prop = $_POST[$prop];
                    if(ctype_space($_POST[$prop]) || empty($_POST[$prop]))
                    {
                        header('location:index.php?controller=position&action=add&result=false');
                        return;
                    }
                }
            }
            if($Position->save())
                $result = 'true';
            else
                $result = 'false';
            header('location:index.php?controller=position&action=add&result='.$result);
        }
    }

    public function edit()
    {
        if(Auth::isadmin() && isset($_GET['MaVT']))
        {
            $data = Position::show($_GET['MaVT']);
            include_once('./views/position/edit.php');
        }
    }

    public function update()
    {
        if(Auth::isadmin() && $_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $Position = new Position();

            foreach($Position->fill as $prop)
            {
                if(isset($_POST[$prop]))
                {
                    $Position->$prop = $_POST[$prop];
                    if(ctype_space($_POST[$prop]) || empty($_POST[$prop]))
                    {
                        $result = 'false';
                        header('location:index.php?controller=position&action=edit&result='.$result.'&MaVT='.$_POST['MaVT']);
                        return;
                    }
                }
            }
            if($Position->update())
                $result = 'true';
            else
                $result = 'false';
            header('location:index.php?controller=position&action=edit&result='.$result.'&MaVT='.$_POST['MaVT']);
        }
    }

    public function delete()
    {
        if(isset($_GET['MaVT']) && Auth::isadmin())
        {
            $Position = new Position();
            $Position->MaVT = $_GET['MaVT'];
            $Position->delete();
            header('location:index.php?controller=position');
        }
        else
        {
            header('location:index.php');
        }
    }
}
?>