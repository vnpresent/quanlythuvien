<?php
include_once('./models/Auth.php');
include_once('./models/Category.php');

class categoryController
{

    public function permission()
    {
        if( (Auth::isadmin() || Auth::isKyThuat()) )
            return true;
        else
            return false;
    }

    public function index()
    {
        if((Auth::isadmin() || Auth::isKyThuat()))
        {
            $data=Category::index();
            include_once('./views/category/index.php');
        }
    }

    public function add()
    {
        if((Auth::isadmin() || Auth::isKyThuat()))
        {
            include_once('./views/category/add.php');
        }
    }

    public function insert()
    {
        if((Auth::isadmin() || Auth::isKyThuat()) && $_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $category = new Category();

            foreach($category->fill as $prop)
            {
                if(isset($_POST[$prop]))
                {
                    $category->$prop = $_POST[$prop];
                    if(ctype_space($_POST[$prop]) || empty($_POST[$prop]))
                    {
                        header('location:index.php?controller=category&action=add&result=false');
                        return;
                    }
                }
            }
            if($category->save())
                $result = 'true';
            else
                $result = 'false';
            header('location:index.php?controller=category&action=add&result='.$result);
        }
    }

    public function edit()
    {
        if((Auth::isadmin() || Auth::isKyThuat()) && isset($_GET['MaTheLoai']))
        {
            $data = Category::show($_GET['MaTheLoai']);
            include_once('./views/category/edit.php');
        }
    }

    public function update()
    {
        if((Auth::isadmin() || Auth::isKyThuat()) && $_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $category = new Category();

            foreach($category->fill as $prop)
            {
                if(isset($_POST[$prop]))
                {
                    $category->$prop = $_POST[$prop];
                    if(ctype_space($_POST[$prop]) || empty($_POST[$prop]))
                    {
                        return;
                        header('location:index.php?controller=category&action=edit&result=false&MaTheLoai='.$_POST['MaTheLoai']);
                    }
                }
            }
            if($category->update())
                $result = 'true';
            else
                $result = 'false';
            header('location:index.php?controller=category&action=edit&result='.$result.'&MaTheLoai='.$_POST['MaTheLoai']);
        }
    }

    public function delete()
    {
        if(isset($_GET['MaTheLoai']) && (Auth::isadmin() || Auth::isKyThuat()))
        {
            $category = new Category();
            $category->MaTheLoai = $_GET['MaTheLoai'];
            $category->delete();
            header('location:index.php?controller=category');
        }
        else
        {
            header('location:index.php');
        }
    }
}
?>