<?php
require_once ('../config/config.php');
require_once APP_ROOT.('/app/config/DBConnection.php');

//echo APP_ROOT;
//$controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';
//$action = isset($_GET['action']) ? $_GET['action'] : 'index';

//if($controller == 'home'){
//
//
//}
require_once APP_ROOT.'/app/controllers/DepartmentController.php';
$departmentService = new DepartmentService();
$departments = $departmentService->getALLDepartments();
echo "<pre>";
print_r($departments);
echo '</pre>';


require_once APP_ROOT.'/app/controllers/EmployeeController.php';
$employeeService = new EmployeeService();
$employees = $employeeService->getALLEmployees();
//echo "<pre>";
//print_r($employees);
//echo '</pre>';

require_once APP_ROOT.'/app/controllers/UserController.php';
$userService = new UserService();
$user = $userService->getALLUsers();
//echo "<pre>";
//print_r($user);
//echo '</pre>';
