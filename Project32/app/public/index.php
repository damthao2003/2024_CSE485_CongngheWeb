<?php
require_once ('../config/config.php');
require_once APP_ROOT.('/app/config/DBConnection.php');

//echo APP_ROOT;
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'department';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
//
if($controller == 'department'){
    require_once APP_ROOT.'/app/controllers/DepartmentController.php';
    $departmentController = new DepartmentController();
    $departmentController->index();
}else{
    echo 'khong ton tai';
}

