<?php
require_once APP_ROOT.'/app/service/EmployeeService.php';
class EmployeeController
{
    public function index(){
        // gọi dữ liệu từ DepartmentService
        $employeeService = new EmployeeService();
        $employees = $employeeService->getALLEmployees();

        // check thu data dc lay ra chua

        include APP_ROOT . '/app/views/employee/setting-profile.blade.php';

    }

}