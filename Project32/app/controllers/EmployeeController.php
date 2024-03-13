<?php
require_once ('../config/config.php');
require_once APP_ROOT.'/app/service/EmployeeService.php';
class EmployeeController
{
    public function index(){
        // gọi dữ liệu từ DepartmentService
        $employeeService = new EmployeeService();
        $employees = $employeeService->getALLEmployees();
        include APP_ROOT . '/app/views/user-views/employee/index.blades.php';
        // check thu data dc lay ra chua
//        echo '<pre>';
//        print_r($employees);
//        echo '</pre>';
    }

}