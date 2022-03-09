<?php
session_start();
// include_once('./assets/layouts/header.php');
include_once('models/Auth.php');

//Lấy controller
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'auth';

//Lấy action


$pathcontroller= 'controllers/'.$controller.'Controller.php';
if (!file_exists($pathcontroller)) {
    die("Trang bạn tìm không tồn tại");
}
include_once($pathcontroller);

$action = isset($_GET['action']) ? $_GET['action'] : 'index';
// if($action != 'login' && $action != 'logout'&& $action != 'delete'&& $action != 'return')
//     include_once('./assets/layouts/siderbar.php');


//Kiểm tra có tồn tại action không
$classController = $controller."Controller";
$object = new $classController();
if (!method_exists($object, $action)) {
    die("Phương thức $action không tồn tại trong class $classController");
}
$object->$action();


// include_once('./assets/layouts/footer.php');
?>