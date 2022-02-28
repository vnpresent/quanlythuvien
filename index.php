<?php
session_start();
include_once('./assets/layouts/header.php');
include_once('models/Auth.php');
// <<<<<<< HEAD
// include_once('./assets/layouts/navbar.php');
// include_once('./assets/layouts/siderbar.php');

//Lấy controller
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'auth';

//Lấy action
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
if($action != 'login')
    include_once('./assets/layouts/siderbar.php');
//Kiểm tra có phải ở trang đăng nhập hoặc đã login chưa
// if (!Auth::isLogin() && $action!='login')
//     header('location:index.php?controller=auth&action=login');
// if (!Auth::isLogin())

//Kiểm tra có tồn tại controller không
$pathcontroller= 'controllers/'.$controller.'Controller.php';
if (!file_exists($pathcontroller)) {
    die("Trang bạn tìm không tồn tại");
}
require_once($pathcontroller);


//Kiểm tra có tồn tại action không
$classController = $controller."Controller";
$object = new $classController();
if (!method_exists($object, $action)) {
    die("Phương thức $action không tồn tại trong class $classController");
}
$object->$action();
include_once('./assets/layouts/footer.php');
?>