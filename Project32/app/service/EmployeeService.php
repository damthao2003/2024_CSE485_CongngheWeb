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

}
