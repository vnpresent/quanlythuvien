<?php
include_once('./models/Auth.php');
include_once('./models/Author.php');
class authorController
{

    public function index()
    {
        if(Auth::isadmin())
        {
            $data=Author::index();
            include_once('./views/author/index.php');
        }
    }

    public function add()
    {
        if(Auth::isadmin())
        {
            include_once('./views/author/add.php');
        }
    }

    public function insert()
    {
        if(Auth::isadmin() && $_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $author = new Author();

            foreach($author->fill as $prop)
            {
                if(isset($_POST[$prop]))
                {
                    $author->$prop = $_POST[$prop];
                }
            }
            $author->save();
            header('location:index.php?controller=author&action=add&result=true');
        }
    }

    public function edit()
    {
        if(Auth::isadmin() && isset($_GET['MaTG']))
        {
            $data = Author::show($_GET['MaTG']);
            include_once('./views/author/edit.php');
        }
    }

    public function update()
    {
        if(Auth::isadmin() && $_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $author = new Author();

            foreach($author->fill as $prop)
            {
                if(isset($_POST[$prop]))
                {
                    $author->$prop = $_POST[$prop];
                }
            }
            $author->update();
            header('location:index.php?controller=author&action=edit&result=true&MaTG='.$_POST['MaTG']);
        }
    }

    public function delete()
    {
        if(isset($_GET['MaTG']) && Auth::isadmin())
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