<?php
require_once APP_ROOT.'/app/service/EmployeeService.php';
class EmployeeController
{
    public function index()
    {
        // gọi dữ liệu từ DepartmentService
        $employeeService = new EmployeeService();
        $employees = $employeeService->getALLEmployees();

        // check thu data dc lay ra chua
//        echo '<pre>';
//        print_r($employees);
//        echo '</pre>';

        include APP_ROOT . '/app/views/user-views/user/setting_profile.php';

    }

    public function getEmployeeById($employeeId)
    {
        $employeeService = new EmployeeService();
        $employee = $employeeService->getEmployeeById($employeeId);
        include APP_ROOT . '/app/views/user-views/user/setting_profile.php';

    }
}