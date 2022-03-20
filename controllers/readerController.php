<?php
include_once('./models/Auth.php');
include_once('./models/Reader.php');
include_once('./models/CreateCard.php');

class readerController
{

    public function index()
    {
        if(Auth::isadmin() || Auth::isKyThuat())
        {
            $data=Reader::index();
            include_once('./views/reader/index.php');
        }
    }

    public function add()
    {
        if(Auth::isadmin() || Auth::isKyThuat())
        {
            $createcards = CreateCard::index();
            include_once('./views/reader/add.php');
        }
    }

    public function insert()
    {
        if((Auth::isadmin() || Auth::isKyThuat()) && $_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $Reader = new Reader();

            foreach($Reader->fill as $prop)
            {
                if(isset($_POST[$prop]))
                {
                    $Reader->$prop = $_POST[$prop];
                    if(ctype_space($_POST[$prop]) || empty($_POST[$prop]))
                    {
                        $result = 'false';
                        header('location:index.php?controller=reader&action=add&result='.$result);
                        return;
                    }
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
        if((Auth::isadmin() || Auth::isKyThuat()) && isset($_GET['SoThe']))
        {
            $data = Reader::show($_GET['SoThe']);
            include_once('./views/reader/edit.php');
        }
    }

    public function update()
    {
        if((Auth::isadmin() || Auth::isKyThuat()) && $_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $reader = new Reader();

            foreach($reader->fill as $prop)
            {
                if(isset($_POST[$prop]))
                {
                    $reader->$prop = $_POST[$prop];
                    if(ctype_space($_POST[$prop]) || empty($_POST[$prop]))
                    {
                        $result = 'false';
                        header('location:index.php?controller=reader&action=edit&result='.$result.'&SoThe='.$_POST['SoThe']);
                        return;
                    }
                }
            }
            if($reader->update())
                $result = 'true';
            else
                $result = 'false';
            header('location:index.php?controller=reader&action=edit&result='.$result.'&SoThe='.$_POST['SoThe']);
        }
    }

    public function delete()
    {
        if(isset($_GET['SoThe']) && (Auth::isadmin() || Auth::isKyThuat()))
        {
            $reader = new Reader();
            $reader->SoThe = $_GET['SoThe'];
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