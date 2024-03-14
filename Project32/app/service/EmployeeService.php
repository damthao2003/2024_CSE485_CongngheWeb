<?php
require_once APP_ROOT.'/app/models/Employee.php';
class EmployeeService
{
  public function getALLEmployees(){
      $dbConnection = new DBConnection();
      $conn = $dbConnection->getConnection();

      if($conn != null){
          $sql = 'select * from employees';
          $stmt = $conn->query($sql);
          $employees = [];
          while($row = $stmt->fetch()){
              $employee = new Employee($row['employeeID'],$row['fullName'],$row['address'],$row['email'],$row['mobilePhone'],$row['position'],$row['avatar'],$row['departmentID']);
              $employees[] = $employee;
          }
          return $employees;
      }
  }
    public function getEmployeeById($employeeId)
    {
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();

        if ($conn != null)
            // Chuẩn bị truy vấn SQL với tham số :id
            $sql = 'SELECT * FROM employees WHERE employeeID = :id';
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $employeeId);
            $stmt->execute();

            // Khởi tạo biến $employee bên ngoài vòng lặp
            $employee = null;

            // Lặp qua kết quả trả về từ truy vấn
            while ($row = $stmt->fetch()) {
                // Tạo đối tượng Employee từ dữ liệu
                $employee = new Employee($row['employeeID'], $row['fullName'], $row['address'], $row['email'], $row['mobilePhone'], $row['position'], $row['avatar'], $row['departmentID']);
            }

            // Trả về nhân viên hoặc null nếu không tìm thấy
            return $employee;
    }


}
