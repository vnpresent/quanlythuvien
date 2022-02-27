<?php
include_once('./models/Auth.php');
class authController
{
    public  $username;
    public  $ChucDanh;
    public  $token;

    public function login()
    {
        // không là hiện form login
        include_once('./views/auth/login.php');
    }

    public function log()
    {
        // kiểm tra tồn tại việc post username và password lên không,có là chức năng login
        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['username']) && isset($_POST['password']))
        {
            print($_POST['username']);
            $result = Auth::login($_POST['username'],$_POST['password']);
            var_dump($result);
            if($result)
                header('location:index.php');
            else
                $error ='Sai tài khoản hoặc mật khẩu';
        }
    }

    public function logout()
    {
        Auth::logout();
        header('location:index.php?controller=auth&action=login');
    }
}
?>