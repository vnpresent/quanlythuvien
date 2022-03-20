<?php
include_once('./models/Auth.php');
class authController
{
    public  $username;
    public  $ChucDanh;
    public  $token;

    public function index()
    {
        //
        include_once('./views/auth/dashboard.php');
    }

    public function login()
    {
        //hiện form login
        include_once('./views/auth/login.php');
    }

    public function log()
    {
        // kiểm tra tồn tại việc post username và password lên không,có là chức năng login
        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['username']) && isset($_POST['password']))
        {
            $result = Auth::login($_POST['username'],$_POST['password']);
            if($result)
                header('location:index.php');
            else
                header('location:index.php?controller=auth&action=login&error=Sai tài khoản hoặc mật khẩu');
        }
        else
            header('location:index.php');
    }

    public function logout()
    {
        Auth::logout();
        header('location:index.php?controller=auth');
    }
}
?>