<?php
include_once('./models/Auth.php');
include_once('./models/CreateCard.php');
include_once('./models/Unit.php');
include_once('./models/Grade.php');
class createcardController
{

    public function index()
    {
        if((Auth::isadmin() || Auth::isKyThuat()))
        {
            $data=CreateCard::index();
            include_once('./views/createcard/index.php');
        }
    }

    public function add()
    {
        if((Auth::isadmin() || Auth::isKyThuat()))
        {
            $units = Unit::index();
            $grades = Grade::index();
            include_once('./views/createcard/add.php');
        }
    }

    public function insert()
    {
        if((Auth::isadmin() || Auth::isKyThuat()) && $_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $createcard = new CreateCard();

            foreach($createcard->fill as $prop)
            {
                if(isset($_POST[$prop]))
                {
                    $createcard->$prop = $_POST[$prop];
                    if(ctype_space($_POST[$prop]) || empty($_POST[$prop]))
                    {
                        header('location:index.php?controller=createcard&action=add&result=false');
                        return;
                    }
                }
            }
            if($createcard->save())
                $result = 'true';
            else
                $result = 'false';
            header('location:index.php?controller=createcard&action=add&result='.$result);
        }
    }

    public function edit()
    {
        if((Auth::isadmin() || Auth::isKyThuat()) && isset($_GET['MaDK']))
        {
            $data = CreateCard::show($_GET['MaDK']);
            $units = Unit::index();
            $grades = Grade::index();
            include_once('./views/createcard/edit.php');
        }
    }

    public function update()
    {
        if((Auth::isadmin() || Auth::isKyThuat()) && $_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $createcard = new CreateCard();

            foreach($createcard->fill as $prop)
            {
                if(isset($_POST[$prop]))
                {
                    $createcard->$prop = $_POST[$prop];
                    if(ctype_space($_POST[$prop]) || empty($_POST[$prop]))
                    {
                        header('location:index.php?controller=createcard&action=edit&result=false&MaDK='.$_POST['MaDK']);
                        return;
                    }
                }
            }
            if($createcard->update())
                $result = 'true';
            else
                $result = 'false';
            header('location:index.php?controller=createcard&action=edit&result='.$result.'&MaDK='.$_POST['MaDK']);
        }
    }

    public function delete()
    {
        if(isset($_GET['MaDK']) && (Auth::isadmin() || Auth::isKyThuat()))
        {
            $createcard = new CreateCard();
            $createcard->MaDK = $_GET['MaDK'];
            $createcard->delete();
            header('location:index.php?controller=createcard');
        }
        else
        {
            header('location:index.php');
        }
    }
} 
?>