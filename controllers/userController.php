<?php
include_once('./models/User.php');
class userController
{
    // action login
    public function login()
    {
        // kiểm tra tồn tại việc post username và password lên không,có là chức năng login
        if(isset($_POST['username']) && isset($_POST['password']))
        {
            $result = User::login($_POST['username'],$_POST['password']);
            if($result)
                header('location:index.php');
            else
                $error ='Sai tài khoản hoặc mật khẩu';
        }
        // không là hiện form login
        include_once('./views/user/login.php');
    }


    // logout
    public function logout()
    {
        User::logout();
        header('location:index.php?controller=user&action=login');
    }

    // action yêu cầu danh sách người dùng
    public function index()
    {
        if(User::isadmin())
        {
            $data=User::index();
            include_once('./views/user/index.php');
        }
    }

    // action thêm người dùng
    public function add()
    {
        // chỉ có admin có quyền thêm
        if(User::isadmin())
        {
            // nếu có việc post username,password và name thì thêm người dùng
            if(isset($_POST['username']) && isset($_POST['password'])&& isset($_POST['name']) )
            {
                $result=User::insert($_POST['username'],$_POST['password'],$_POST['name']);
                if($result)
                    header('location:index.php?controller=user&action=add&result=true');
                else
                    header('location:index.php?controller=user&action=add&result=false');               
            }
            // không thì hiện form thêm người dùng
            include_once('./views/user/add.php');
        }
    }

    // action update thông tin người dùng
    public function update()
    {
        if(isset($_GET['id']) && User::isadmin())
        {
            if(isset($_POST['name']) )
            {
                User::update($_GET['id'],$_POST['name']);
                header('location:index.php?controller=user&action=update&id='.$_GET['id'].'&result=true');
            }
            $data=User::getuser($_GET['id']);
            include_once('./views/user/update.php');
        }
        else
        {
            header('location:index.php');
        }
    }

    // action xóa
    public function delete()
    {
        if(isset($_GET['id']) && User::isadmin())
        {
            User::delete($_GET['id']);
            header('location:index.php?controller=user');
        }
        else
        {
            header('location:index.php');
        }
    }

    // action đổi mật khẩu
    public function password()
    {
        if(isset($_GET['id']) && User::isadmin())
        {
            if(isset($_POST['password1']) && isset($_POST['password2']) )
            {
                if($_POST['password1']==$_POST['password2'] && $_POST['password1']!="")
                {
                    User::password($_GET['id'],$_POST['password1']);
                    header('location:index.php?controller=user&action=password&id='.$_GET['id'].'&result=true');
                }
                else
                {
                    header('location:index.php?controller=user&action=password&id='.$_GET['id'].'&result=false');
                }        
            }
            $data=User::getuser($_GET['id']);
            include_once('./views/user/password.php');
        }
        else
        {
            header('location:index.php');
        }
    }
}
?>