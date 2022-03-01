<?php
include_once('./models/Auth.php');
include_once('./models/Language.php');
class languageController
{

    public function index()
    {
        if(Auth::isadmin())
        {
            $data=Language::index();
            include_once('./views/language/index.php');
        }
    }

    public function add()
    {
        if(Auth::isadmin())
        {
            include_once('./views/language/add.php');
        }
    }

    public function insert()
    {
        if(Auth::isadmin() && $_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $language = new Language();

            foreach($language->fill as $prop)
            {
                if(isset($_POST[$prop]))
                {
                    $language->$prop = $_POST[$prop];
                }
            }
            if($language->save())
                $result = 'true';
            else
                $result = 'false';
            header('location:index.php?controller=language&action=add&result='.$result);
        }
    }

    public function edit()
    {
        if(Auth::isadmin() && isset($_GET['MaNgonNgu']))
        {
            $data = Language::show($_GET['MaNgonNgu']);
            include_once('./views/language/edit.php');
        }
    }

    public function update()
    {
        if(Auth::isadmin() && $_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $language = new Language();

            foreach($language->fill as $prop)
            {
                if(isset($_POST[$prop]))
                {
                    $language->$prop = $_POST[$prop];
                }
            }
            if($language->update())
                $result = 'true';
            else
                $result = 'false';
            header('location:index.php?controller=language&action=edit&result='.$result.'&MaNgonNgu='.$_POST['MaNgonNgu']);
        }
    }

    public function delete()
    {
        if(isset($_GET['MaNgonNgu']) && Auth::isadmin())
        {
            $language = new Language();
            $language->MaNgonNgu = $_GET['MaNgonNgu'];
            $language->delete();
            header('location:index.php?controller=language');
        }
        else
        {
            header('location:index.php');
        }
    }
}
?>