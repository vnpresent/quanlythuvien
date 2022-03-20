<?php
include_once('./models/Auth.php');
include_once('./models/Document.php');
include_once('./models/Category.php');
include_once('./models/Publish.php');
include_once('./models/Language.php');
include_once('./models/Author.php');
include_once('./models/Position.php');
include_once('./models/Unit.php');
include_once('./models/DocumentDetail.php');


class documentController
{

    public function index()
    {
        if(Auth::isadmin() || Auth::isKyThuat())
        {
            $data=Document::index();
            include_once('./views/document/index.php');
        }
    }

    public function add()
    {
        if(Auth::isadmin() || Auth::isKyThuat())
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
        if((Auth::isadmin() || Auth::isKyThuat()) && $_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $document = new Document();

            foreach($document->fill as $prop)
            {
                if(isset($_POST[$prop]))
                {
                    $document->$prop = $_POST[$prop];
                    if(ctype_space($_POST[$prop]) || empty($_POST[$prop]))
                    {
                        header('location:index.php?controller=document&action=add&result=false');
                        return;
                    }
                }
            }
            $document->MaTG = json_encode($_POST['MaTG']);
            if($document->save())
                $result = 'true';
            else
                $result = 'false';
            header('location:index.php?controller=document&action=add&result='.$result);
        }
    }

    public function edit()
    {
        if((Auth::isadmin()  || Auth::isKyThuat()) && isset($_GET['MaTL']))
        {
            $data = Document::show($_GET['MaTL']);
            $categorys = Category::index();
            
            $publishs = Publish::index();
            $languages = Language::index();
            $authors = Author::index();
            $positions = Position::index();
            $units = Unit::index();
            include_once('./views/document/edit.php');
        }
    }

    public function update()
    {
        if((Auth::isadmin() || Auth::isKyThuat()) && $_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $document = new Document();

            foreach($document->fill as $prop)
            {
                if(isset($_POST[$prop]))
                {
                    $document->$prop = $_POST[$prop];
                    if(ctype_space($_POST[$prop]) || empty($_POST[$prop]))
                    {
                        header('location:index.php?controller=document&action=edit&result=false&MaTL='.$_POST['MaTL']);
                        return;
                    }
                }
            }
            $document->MaTG = json_encode($_POST['MaTG']);
            if($document->update())
                $result = 'true';
            else
                $result = 'false';
            header('location:index.php?controller=document&action=edit&result='.$result.'&MaTL='.$_POST['MaTL']);
        }
    }

    public function view()
    {
        if((Auth::isadmin()  || Auth::isKyThuat()) && isset($_GET['MaTL']))
        {
            $data = Document::show($_GET['MaTL']);
            $categorys = Category::index();
            $documentdetails=DocumentDetail::find($_GET['MaTL']);
            $publishs = Publish::index();
            $languages = Language::index();
            $authors = Author::index();
            $positions = Position::index();
            $units = Unit::index();
            include_once('./views/document/view.php');
        }
    }

    public function delete()
    {
        if((isset($_GET['MaTL'])  || Auth::isKyThuat()) && Auth::isadmin())
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