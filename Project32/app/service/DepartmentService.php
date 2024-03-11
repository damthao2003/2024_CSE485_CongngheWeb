<?php
require_once APP_ROOT.'/app/models/Department.php';

class DepartmentService
{
    // viết các hàm funtion vào đây
    public function getALLDepartments(){
        // B1: kết nối DB
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();

        //B2: truy vấn dữ liệu
        if($conn != null){
            $sql = 'select * from departments';
            $stmt = $conn->query($sql); // stmt la 1 object

            //B3: xử lý data dc lấy ra
            $departments = [];
            // lấy ra các bản ghi từ ối tượng stmt sau mỗi lần lặp
            while ($row = $stmt->fetch()){
                $department = new Department($row['departmentID'], $row['departmentName'], $row['address'], $row['email'], $row['phone'], $row['logo'], $row['website'], $row['parentDepartmentID']);
                $departments[] = $department;
            }
            return $departments;
        }
    }

}