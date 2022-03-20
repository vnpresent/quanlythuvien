<?php
include_once('./models/Auth.php');
include_once('./models/Language.php');
class languageController
{

    public function index()
    {
        if((Auth::isadmin() || Auth::isKyThuat()))
        {
            $data=Language::index();
            include_once('./views/language/index.php');
        }
    }

    public function add()
    {
        if((Auth::isadmin() || Auth::isKyThuat()))
        {
            include_once('./views/language/add.php');
        }
    }

    public function insert()
    {
        if((Auth::isadmin() || Auth::isKyThuat()) && $_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $language = new Language();

            foreach($language->fill as $prop)
            {
                if(isset($_POST[$prop]))
                {
                    $language->$prop = $_POST[$prop];
                    if(ctype_space($_POST[$prop]) || empty($_POST[$prop]))
                    {
                        header('location:index.php?controller=language&action=add&result=false');
                        return;
                    }
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
        if((Auth::isadmin() || Auth::isKyThuat()) && isset($_GET['MaNgonNgu']))
        {
            $data = Language::show($_GET['MaNgonNgu']);
            include_once('./views/language/edit.php');
        }
    }

    public function update()
    {
        if((Auth::isadmin() || Auth::isKyThuat()) && $_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $language = new Language();

            foreach($language->fill as $prop)
            {
                if(isset($_POST[$prop]))
                {
                    $language->$prop = $_POST[$prop];
                    if(ctype_space($_POST[$prop]) || empty($_POST[$prop]))
                    {
                        header('location:index.php?controller=language&action=edit&result=false&MaNgonNgu='.$_POST['MaNgonNgu']);
                        return;
                    }
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
        if(isset($_GET['MaNgonNgu']) && (Auth::isadmin() || Auth::isKyThuat()))
        {
            echo $_GET['MaNgonNgu'];
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