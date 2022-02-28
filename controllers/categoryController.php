<?php
include_once('./models/Auth.php');
include_once('./models/Category.php');
class categoryController
{

    public function index()
    {
        if(Auth::isadmin())
        {
            $data=Category::index();
            include_once('./views/category/index.php');
        }
    }

    public function add()
    {
        if(Auth::isadmin())
        {
            include_once('./views/category/add.php');
        }
    }

    public function insert()
    {
        if(Auth::isadmin() && $_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $category = new Category();

            foreach($category->fill as $prop)
            {
                if(isset($_POST[$prop]))
                {
                    $category->$prop = $_POST[$prop];
                }
            }
            $category->save();
            header('location:index.php?controller=category&action=add&result=true');
        }
    }

    public function edit()
    {
        if(Auth::isadmin() && isset($_GET['MaTheLoai']))
        {
            $data = Category::show($_GET['MaTheLoai']);
            include_once('./views/category/edit.php');
        }
    }

    public function update()
    {
        if(Auth::isadmin() && $_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $category = new Category();

            foreach($category->fill as $prop)
            {
                if(isset($_POST[$prop]))
                {
                    $category->$prop = $_POST[$prop];
                }
            }
            $category->update();
            header('location:index.php?controller=category&action=edit&result=true&MaTheLoai='.$_POST['MaTheLoai']);
        }
    }

    public function delete()
    {
        if(isset($_GET['MaTheLoai']) && Auth::isadmin())
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