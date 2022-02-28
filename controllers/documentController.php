<?php
include_once('./models/Auth.php');
include_once('./models/Document.php');
include_once('./models/Category.php');
include_once('./models/Publish.php');
include_once('./models/Language.php');
include_once('./models/Author.php');
include_once('./models/Position.php');
include_once('./models/Unit.php');
class documentController
{

    public function index()
    {
        if(Auth::isadmin())
        {
            $data=Document::index();
            include_once('./views/document/index.php');
        }
    }

    public function add()
    {
        if(Auth::isadmin())
        {
            $categorys = Category::index();
            $publishs = Publish::index();
            $languages = Language::index();
            $authors = Author::index();
            $positions = Position::index();
            $units = Unit::index();
            include_once('./views/document/add.php');
        }
    }

    public function insert()
    {
        if(Auth::isadmin() && $_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $document = new Document();

            foreach($document->fill as $prop)
            {
                if(isset($_POST[$prop]))
                {
                    $document->$prop = $_POST[$prop];
                }
            }
            $document->save();
            header('location:index.php?controller=document&action=add&result=true');
        }
    }

    public function edit()
    {
        if(Auth::isadmin() && isset($_GET['MaTL']))
        {
            $data = Document::show($_GET['MaTL']);
            include_once('./views/document/edit.php');
        }
    }

    public function update()
    {
        if(Auth::isadmin() && $_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $document = new Document();

            foreach($document->fill as $prop)
            {
                if(isset($_POST[$prop]))
                {
                    $document->$prop = $_POST[$prop];
                }
            }
            $document->update();
            header('location:index.php?controller=document&action=edit&result=true&MaTL='.$_POST['MaTL']);
        }
    }

    public function delete()
    {
        if(isset($_GET['MaTL']) && Auth::isadmin())
        {
            $document = new Document();
            $document->MaTL = $_GET['MaTL'];
            $document->delete();
            header('location:index.php?controller=document');
        }
        else
        {
            header('location:index.php');
        }
    }
}
?>