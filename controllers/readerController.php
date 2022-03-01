<?php
include_once('./models/Auth.php');
include_once('./models/Reader.php');
class readerController
{

    public function index()
    {
        if(Auth::isadmin())
        {
            $data=Reader::index();
            include_once('./views/reader/index.php');
        }
    }

    public function add()
    {
        if(Auth::isadmin())
        {
            include_once('./views/reader/add.php');
        }
    }

    public function insert()
    {
        if(Auth::isadmin() && $_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $Reader = new Reader();

            foreach($Reader->fill as $prop)
            {
                if(isset($_POST[$prop]))
                {
                    $Reader->$prop = $_POST[$prop];
                }
            }
            if($Reader->save())
                $result = 'true';
            else
                $result = 'false';
            header('location:index.php?controller=reader&action=add&result='.$result);
        }
    }

    public function edit()
    {
        if(Auth::isadmin() && isset($_GET['MaTL']))
        {
            $data = Reader::show($_GET['MaTL']);
            include_once('./views/reader/edit.php');
        }
    }

    public function update()
    {
        if(Auth::isadmin() && $_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $reader = new Reader();

            foreach($reader->fill as $prop)
            {
                if(isset($_POST[$prop]))
                {
                    $reader->$prop = $_POST[$prop];
                }
            }
            if($reader->update())
                $result = 'true';
            else
                $result = 'false';
            header('location:index.php?controller=reader&action=edit&result='.$result.'&MaTL='.$_POST['MaTL']);
        }
    }

    public function delete()
    {
        if(isset($_GET['MaTL']) && Auth::isadmin())
        {
            $reader = new Reader();
            $reader->MaTL = $_GET['MaTL'];
            $reader->delete();
            header('location:index.php?controller=reader');
        }
        else
        {
            header('location:index.php');
        }
    }
}
?>