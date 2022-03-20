<?php
include_once('./models/Auth.php');
include_once('./models/Grade.php');
include_once('./models/Unit.php');
class gradeController
{

    public function index()
    {
        if(Auth::isadmin())
        {
            $data=Grade::index();
            include_once('./views/grade/index.php');
        }
    }

    public function add()
    {
        if(Auth::isadmin())
        {
            $units = Unit::index();
            include_once('./views/grade/add.php');
        }
    }

    public function insert()
    {
        if(Auth::isadmin() && $_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $grade = new Grade();

            foreach($grade->fill as $prop)
            {
                if(isset($_POST[$prop]))
                {
                    $grade->$prop = $_POST[$prop];
                    if(ctype_space($_POST[$prop]) || empty($_POST[$prop]))
                    {
                        header('location:index.php?controller=grade&action=add&result=false');
                        return;
                    }
                }
            }
            if($grade->save())
                $result = 'true';
            else
                $result = 'false';
            header('location:index.php?controller=grade&action=add&result='.$result);
        }
    }

    public function edit()
    {
        if(Auth::isadmin() && isset($_GET['MaLop']))
        {
            $data = Grade::show($_GET['MaLop']);
            $units = Unit::index();
            include_once('./views/grade/edit.php');
        }
    }

    public function update()
    {
        if(Auth::isadmin() && $_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $grade = new Grade();

            foreach($grade->fill as $prop)
            {
                if(isset($_POST[$prop]))
                {
                    $grade->$prop = $_POST[$prop];
                    if(ctype_space($_POST[$prop]) || empty($_POST[$prop]))
                    {
                        header('location:index.php?controller=grade&action=edit&result=false&MaLop='.$_POST['MaLop']);
                        return;
                    }
                }
            }
            if($grade->update())
                $result = 'true';
            else
                $result = 'false';
            header('location:index.php?controller=grade&action=edit&result='.$result.'&MaLop='.$_POST['MaLop']);
        }
    }

    public function delete()
    {
        if(isset($_GET['MaLop']) && Auth::isadmin())
        {
            $grade = new Grade();
            $grade->MaLop = $_GET['MaLop'];
            $grade->delete();
            header('location:index.php?controller=grade');
        }
        else
        {
            header('location:index.php');
        }
    }
}
?>