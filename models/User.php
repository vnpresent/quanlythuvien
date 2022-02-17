<?php
include_once('./config.php');
class User
{
    //biến lưu username,name,level
    public static $username;
    public static $name;
    public static $level;

    //fuction check xem người dùng đã login chưa bằng cách lấy token từ session và check,sau đó lấy thông tin người dùng
    public static function isLogin()
    {
        if (!isset($_SESSION['token']) || $_SESSION['token'] == '' || !isset($_SESSION['username']) || $_SESSION['username'] == '') {
            self::$username = '';
            self::$name = '';
            self::$level = '';
            return false;
        }
        $username = $_SESSION['username'];
        $token = $_SESSION['token'];
        $query = "select * from user where username = '$username' and token ='$token'";
        $data = getonedata($query);
        if ($data) {
            self::$username = $data['username'];
            self::$name = $data['name'];
            self::$level = $data['level'];
            return true;
        } else {
            self::$username = '';
            self::$name = '';
            self::$level = '';
            return false;
        }
    }

    //fuction login lưu username,token của người dùng vào session và trả về kết quả đăng nhập
    public static function login($username, $password)
    {
        $query = "select * from user where username='$username' and password ='$password'";
        $data = getonedata($query);
        if ($data) {
            $_SESSION['token'] = $data['token'];
            $_SESSION['username'] = $data['username'];
            return true;
        } else {
            return false;
        }
    }

    // logout xóa hết session
    public static function logout()
    {
        session_destroy();
    }

    // kiểm tra có phải quản lý khôngs
    public static function isadmin()
    {
        if (self::$level == '2')
            return true;
        else
            return false;
    }

    // Kiểm tra có phải nhân viên không
    public static function iscustomer()
    {
        if (self::$level == '1')
            return true;
        else
            return false;
    }

    //Lấy list user
    public static function index()
    {
        $query = "select * from user";
        $data = getalldata($query);
        return $data;
    }

    // hàm getuser lấy thông tin của 1 người dùng
    public static function getuser($id)
    {
        $query = "select * from user where id =$id";
        $data = getonedata($query);
        return $data;
    }

    // hàm insert thêm người dùng
    public static function insert($username, $password,$name)
    {
        $token = rand_string(18);
        $query = "insert into user (username,password,name,token) values('$username','$password','$name','$token')";
        $result = query($query);
        return $result;
    }

    // hàm update đổi tên người dùng
    public static function update($id,$name)
    {
        $query = "update user set name='$name' where id =$id";
        $result=query($query);
        return $result;
    }

    // hàm xóa,đổi status của người dùng thành 0 để không hiển thị trên index
    public static function delete($id)
    {
        $username = self::$username;
        $query = "update user set status = 0 where id = $id and username !='$username'";
        $result = query($query);
        return $result;
    }

    // hàm password đổi pass người dùng
    public static function password($id, $password)
    {
        $query = "update user set password='$password' where id=$id";
        $result = query($query);
        return $result;
    }
}
