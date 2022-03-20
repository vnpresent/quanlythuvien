<?php
include_once('./models/User.php');
include_once('./models/Auth.php');
class userController
{
    // action yêu cầu danh sách người dùng
    public function index()
    {
        if(Auth::isadmin())
        {
            $data=User::index();
            include_once('./views/user/index.php');
        }
        else
        {
            header('location:index.php');
        }
    }

    // action thêm người dùng
    public function add()
    {
        if(Auth::isadmin())
        {
            include_once('./views/user/add.php');
        }
        else
        {
            header('location:index.php');
        }
    }

    public function insert()
    {
        if(Auth::isadmin() && $_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $user = new User();

            foreach($user->fill as $prop)
            {
                if(isset($_POST[$prop]))
                {
                    $user->$prop = trim($_POST[$prop]);
                    if(ctype_space($_POST[$prop]) || empty($_POST[$prop]))
                    {
                        $result = 'false';
                        header('location:index.php?controller=user&action=add&result='.$result);
                        return;
                    }
                }
            }
            if($user->save())
                $result = 'true';
            else
                $result = 'false';
            header('location:index.php?controller=user&action=add&result='.$result);
        }
        else
        {
            header('location:index.php');
        }
    }

    public function edit()
    {
        if(isset($_GET['id']) && Auth::isadmin())
        {
            $data = User::show($_GET['id']);
            include_once('./views/user/update.php');
        }
        else
        {
            header('location:index.php');
        }
    }

    
    // action update thông tin người dùng
    public function update()
    {
        if(Auth::isadmin() && $_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $user = new User();

            foreach($user->fill as $prop)
            {
                if(isset($_POST[$prop]))
                {
                    $user->$prop = $_POST[$prop];
                    if(ctype_space($_POST[$prop]) || empty($_POST[$prop]))
                    {
                        $result = 'false';
                        header('location:index.php?controller=user&action=edit&result='.$result.'&id='.$_POST['id']);
                        return;
                    }
                }
            }
            if($user->update())
                $result = 'true';
            else
                $result = 'false';
            header('location:index.php?controller=user&action=edit&result='.$result.'&id='.$_POST['id']);
        }
        else
        {
            header('location:index.php');
        }
    }

    public function editper()
    {
        if(isset($_GET['id']) && Auth::isadmin())
        {
            $data = User::show($_GET['id']);
            include_once('./views/user/editper.php');
        }
        else
        {
            header('location:index.php');
        }
    }

    public function per()
    {
        if(Auth::isadmin() && $_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $user = new User();

            foreach($user->fill as $prop)
            {
                if(isset($_POST[$prop]))
                {
                    $user->$prop = $_POST[$prop];
                }
            }
            $user->per();
            header('location:index.php?controller=user&action=editper&result=true&id='.$_POST['id']);
        }
        else
        {
            header('location:index.php');
        }
    }

    public function editpass()
    {
        if(isset($_GET['id']) && Auth::isadmin())
        {
            $data = User::show($_GET['id']);
            include_once('./views/user/editpass.php');
        }
        else
        {
            header('location:index.php');
        }
    }

    public function pass()
    {
        if(Auth::isadmin() && $_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $user = new User();
            $pass = $_POST['password1'];
            $pass2 = $_POST['password2'];

            print($pass.":::".$pass2);
            if($pass!=$pass2)
            {
                header('location:index.php?controller=user&action=editpass&result=false&id='.$_POST['id']);
            }         
            else
            {
                $user->id = $_POST['id'];
                $user->changepass($pass);
                header('location:index.php?controller=user&action=editpass&result=true&id='.$_POST['id']);
            }     
        }
        else
        {
            // header('location:index.php');
        }
    }

    // action xóa
    public function delete()
    {
        if(isset($_GET['id']) && Auth::isadmin())
        {
            $user = new User();
            $user->id = $_GET['id'];
            $user->delete();
            header('location:index.php?controller=user');
        }
        else
        {
            header('location:index.php');
        }
    }

    // action đổi mật khẩu
    // public function password()
    // {
    //     if(isset($_GET['id']) && Auth::isadmin())
    //     {
    //         if(isset($_POST['password1']) && isset($_POST['password2']) )
    //         {
    //             if($_POST['password1']==$_POST['password2'] && $_POST['password1']!="")
    //             {
    //                 User::password($_GET['id'],$_POST['password1']);
    //                 header('location:index.php?controller=user&action=password&id='.$_GET['id'].'&result=true');
    //             }
    //             else
    //             {
    //                 header('location:index.php?controller=user&action=password&id='.$_GET['id'].'&result=false');
    //             }        
    //         }
    //         $data=User::show($_GET['id']);
    //         include_once('./views/user/password.php');
    //     }
    //     else
    //     {
    //         header('location:index.php');
    //     }
    // }
}
?>