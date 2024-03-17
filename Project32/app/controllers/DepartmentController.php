<?php
require_once APP_ROOT.'/app/service/DepartmentService.php';
class DepartmentController
{

    public function index(){
        // gọi dữ liệu từ DepartmentService
        $departmentService = new DepartmentService();
        $departments = $departmentService->getALLDepartments();
        $i = 1;

        include APP_ROOT.'/app/views/admin-views/department/index.blade.php';
    }
    public function indexAdd(){
        $departmentService = new DepartmentService();
        $departmentsNames = $departmentService->getAllDepartmentName();
//        print_r($departmentsNames);

        include APP_ROOT.'/app/views/admin-views/department/add.blade.php';
    }

    public function add(){
        $errorMessage = '';
        $successMessage = '';

        //kiểm tra xem một form đã được gửi đi thông qua phương thức HTTP POST hay chưa
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $name = $_POST['name'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $website = $_POST['website'];
            $parentID = 1;

            echo $name, $address, $email, $phone, $website, $parentID;
            while(true){
                if(empty($name) ||empty($address) ||empty($email) ||empty($phone)){
                    $errorMessage = "Trường này là bắt buộc!";
                    break;
                }
                // add new department to db

                $departmentService = new DepartmentService();
                $departmentService->addDepartment($name, $address, $email, $phone, Logo, $website, $parentID);

                // xóa trắng input
//                $name = '';
//                $address = '';
//                $email = '';
//                $phone = '';
//                $website = '';
//                $parentID = '';

                $successMessage = "Đã thêm thành công";
            }
        }
        include APP_ROOT.'/app/views/admin-views/department/index.blade.php';

    }
    public function edit($id){
        $id = isset($_GET['id']);
        echo $id;
        $departmentService = new DepartmentService();
        $departmentsNames = $departmentService->getAllDepartmentName();
        $departmentService = new DepartmentService();
        $departmentID = $departmentService->getDepartmentById($id);
        echo $departmentID;
        include APP_ROOT.'/app/views/admin-views/department/edit.blade.php';

    }

    public function delete($id){
    $departmentService = new DepartmentService();
    $departmentService->deleteDepartment($id);
        $departmentService = new DepartmentService();
        $departments = $departmentService->getALLDepartments();

    include APP_ROOT.'/app/views/admin-views/department/index.blade.php';
    }
}