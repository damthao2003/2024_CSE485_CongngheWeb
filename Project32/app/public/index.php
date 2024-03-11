<?php
require_once ('../config/config.php');
require_once APP_ROOT.('/app/config/DBConnection.php');

//echo APP_ROOT;
//$controller = isset($_GET['controller']) ? $_GET['controller'] : 'user';
//$action = isset($_GET['action']) ? $_GET['action'] : 'index';
//
//if($controller == 'home'){
//    require_once APP_ROOT.'/app/controllers/DepartmentController.php';
//
//
//}else if($controller == '')
//

require_once APP_ROOT.'/app/controllers/DepartmentController.php';
$departmentController = new DepartmentController();
$departmentController->index();


require_once APP_ROOT.'/app/controllers/EmployeeController.php';
$employeeController = new EmployeeController();
$employeeController->index();


require_once APP_ROOT.'/app/controllers/UserController.php';
$userController = new UserController();
$userController->index();
