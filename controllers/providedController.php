<?php
include_once('./models/Auth.php');
include_once('./models/Provided.php');
class providedController
{

    public function index()
    {
        if(Auth::isadmin())
        {
            $data=Provided::index();
            include_once('./views/provided/index.php');
        }
    }

    public function add()
    {
        if(Auth::isadmin() || Auth::isKyThuat())
        {
            include_once('./views/provided/add.php');
        }
    }

    public function insert()
    {
        if((Auth::isadmin() || Auth::isKyThuat()) && $_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $provided = new Provided();

            foreach($provided->fill as $prop)
            {
                if(isset($_POST[$prop]))
                {
                    $provided->$prop = $_POST[$prop];
                    if(ctype_space($_POST[$prop]) || empty($_POST[$prop]))
                    {
                        $result = 'false';
                        header('location:index.php?controller=provided&action=add&result='.$result);
                        return;
                    }
                }
            }
            if($provided->save())
                $result = 'true';
            else
                $result = 'false';
            header('location:index.php?controller=provided&action=add&result='.$result);
        }
    }

    public function edit()
    {
        if((Auth::isadmin() || Auth::isKyThuat()) && isset($_GET['MaNCC']))
        {
            $data = Provided::show($_GET['MaNCC']);
            include_once('./views/provided/edit.php');
        }
    }

    public function update()
    {
        if((Auth::isadmin() || Auth::isKyThuat()) && $_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $provided = new Provided();

            foreach($provided->fill as $prop)
            {
                if(isset($_POST[$prop]))
                {
                    $provided->$prop = $_POST[$prop];
                    if(ctype_space($_POST[$prop]) || empty($_POST[$prop]))
                    {
                        $result = 'false';
                        header('location:index.php?controller=provided&action=edit&result='.$result.'&MaNCC='.$_POST['MaNCC']);
                        return;
                    }
                }
            }
            if($provided->update())
                $result = 'true';
            else
                $result = 'false';
            header('location:index.php?controller=provided&action=edit&result='.$result.'&MaNCC='.$_POST['MaNCC']);
        }
    }

    public function delete()
    {
        if(isset($_GET['MaNCC']) && (Auth::isadmin() || Auth::isKyThuat()))
        {
            $provided = new Provided();
            $provided->MaNCC = $_GET['MaNCC'];
            $provided->delete();
            header('location:index.php?controller=provided');
        }
        else
        {
            header('location:index.php');
        }
    }
}
?>