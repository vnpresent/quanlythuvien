<?php
include_once('./models/Auth.php');
include_once('./models/Author.php');
class authorController
{

    public function index()
    {
        if((Auth::isadmin() || Auth::isKyThuat()))
        {
            $data=Author::index();
            include_once('./views/author/index.php');
        }
    }

    public function add()
    {
        if((Auth::isadmin() || Auth::isKyThuat()))
        {
            include_once('./views/author/add.php');
        }
    }

    public function insert()
    {
        if((Auth::isadmin() || Auth::isKyThuat()) && $_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $author = new Author();

            foreach($author->fill as $prop)
            {
                if(isset($_POST[$prop]))
                {
                    $author->$prop = $_POST[$prop];
                }
            }
            if($author->save())
                $result = 'true';
            else
                $result = 'false';
            header('location:index.php?controller=author&action=add&result='.$result);
        }
    }

    public function edit()
    {
        if((Auth::isadmin() || Auth::isKyThuat()) && isset($_GET['MaTG']))
        {
            $data = Author::show($_GET['MaTG']);
            include_once('./views/author/edit.php');
        }
    }

    public function update()
    {
        if((Auth::isadmin() || Auth::isKyThuat()) && $_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $author = new Author();

            foreach($author->fill as $prop)
            {
                if(isset($_POST[$prop]))
                {
                    $author->$prop = $_POST[$prop];
                }
            }
            if($author->update())
                $result = 'true';
            else
                $result = 'false';
            header('location:index.php?controller=author&action=edit&result='.$result.'&MaTG='.$_POST['MaTG']);
        }
    }

    public function delete()
    {
        if(isset($_GET['MaTG']) && (Auth::isadmin() || Auth::isKyThuat()))
        {
            $author = new Author();
            $author->MaTG = $_GET['MaTG'];
            $author->delete();
            header('location:index.php?controller=author');
        }
        else
        {
            header('location:index.php');
        }
    }
}
?>