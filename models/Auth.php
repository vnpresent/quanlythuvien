<?php
include_once('./config.php');
include_once('User.php');

class Auth
{
    public static $Username = null;
    private static $ChucDanh = null;
    private static $token = null;


    public static function isAdmin()
    {
        if(self::isLogin())
        {
            if (self::$ChucDanh == 'admin')
                return true;
            else
                return false;
        }
        else
        {
            return false;
        }
    }

    public static function isKyThuat()
    {
        if(self::isLogin())
        {
            if (self::$ChucDanh == 'kythuat')
                return true;
            else
                return false;
        }
        else
        {
            return false;
        }
    }

    public static function isKeHoach()
    {
        if(self::isLogin())
        {
            if (self::$ChucDanh == 'kehoach')
                return true;
            else
                return false;
        }
        else
        {
            return false;
        }
    }

    public static function isThuThu()
    {
        if(self::isLogin())
        {
            if (self::$ChucDanh == 'thuthu')
                return true;
            else
                return false;
        }
        else
        {
            return false;
        }
    }

    public static function isLogin()
    {
        if (isset($_SESSION['token']) && isset($_SESSION['Username'])) {
            $data = User::show($_SESSION['Username']);
            
            if($data)
            {
                if($data['token'] == $_SESSION['token'])
                {
                    self::$Username = $data['Username'];
                    self::$ChucDanh = $data['ChucDanh'];
                    self::$token = $data['token'];
                    return true;
                }
            }
            else
            {
                return false;
            }
        } else
            return false;
    }

    public static function login($username, $password)
    {
        $query = "select * from nguoidung where Username='$username' and Password ='$password'";
        $data = getonedata($query);
        var_dump($data);
        if ($data) {
            $_SESSION['token'] = $data['token'];
            $_SESSION['Username'] = $data['Username'];

            self::$Username = $data['Username'];
            self::$ChucDanh = $data['ChucDanh'];
            self::$token = $data['token'];
            return true;
        } else {
            return false;
        }
    }

    public static function logout()
    {
        session_destroy();
    }
}
