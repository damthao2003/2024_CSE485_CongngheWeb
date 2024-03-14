<?php
require_once APP_ROOT.'/app/service/DepartmentService.php';
class DepartmentController
{
    public function index(){
        // gọi dữ liệu từ DepartmentService
        $departmentService = new DepartmentService();
        $departments = $departmentService->getALLDepartments();
        include APP_ROOT . '/app/views/user-views/department/index.blades.php';
//        // check thu data dc lay ra chua
//        echo "<pre>";
//        print_r($departments);
//        echo '</pre>';


    }

}