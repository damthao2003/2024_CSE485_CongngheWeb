<?php
class DepartmentService
{
    // hàm lấy danh sách bộ phận
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
                $department = new Department($row['departmentID'], $row['departmentName'], $row['address'],
                $row['email'], $row['phone'], $row['logo'], $row['website'], $row['parentDepartmentID']);
                $departments[] = $department;
            }
            if($department){
                return $departments;
            }else{
                echo "Chưa có bản ghi nào";
            }
        }
    }
   public function getAllDepartmentName()
   {
       $dbConnection = new DBConnection();
       $pdo = $dbConnection->getConnection();

       if($pdo != null){
           $sql = "SELECT departmentName from departments";
           $stmt = $pdo->query($sql);
           $departmentNames = [];
           while($row = $stmt->fetch()){
               $department = new Department('',$row['departmentName'],'','','','','','');
               $name = $department->getDepartmentName();
               $departmentNames[] = $name;
           }
           if($departmentNames){
               return $departmentNames;
           }else{
               return null;
           }
       }
   }

    // lấy thông tin bộ phận theo id
    public function getDepartmentById($departmentID){
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();

        if($conn != null){
            $sql = "SELECT * FROM departments WHERE departmentID = '$departmentID' ";
            echo $sql;
            $stmt = $conn->prepare($sql);
            $result = $stmt->fetch();
            if($result){
                return new Department($result['departmentID'], $result['departmentName'], $result['address'],
                    $result['email'], $result['phone'], $result['logo'], $result['website'], $result['parentDepartmentID']);
            }
            else{
                return null;
            }

        }

    }
    public function addDepartment($name, $address, $email, $phone, $logo, $website, $parentID){
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();

        if($conn != null){
            $sql = "INSERT INTO departments(departmentName, address, email, phone, logo, website, parentDepartmentID) VALUES('$name', '$address', '$email', '$phone', '$logo', '$website', $parentID)";
//            echo $sql;
            $conn->prepare($sql);

            // Handle successful insertion (optional)
//            echo "Department added successfully!"; // Or perform other actions
        }
    }

    public function updateDepartment($departmentName, $address, $email, $phone, $logo, $website, $parentDepartmentID){
        $dbConnection = new DBConnection();
        $pdo = $dbConnection->getConnection();

        if($pdo != null){
            $sql = "UPDATE departments SET departmentName = '$departmentName', address = '$address', email = '$email', phone = '$phone',
                       logo= '$logo', website = '$website', parentDepartmentID = '$parentDepartmentID' WHERE departmentID = 'departmentID' ";
            $stmt = $pdo->prepare($sql);
            $stmt->execute( ['departmentName'=>$departmentName, 'address'=>$address, 'email'=>$email,
                'phone'=>$phone, 'logo'=>$logo, 'website'=>$website, 'parentDepartmentID'=>$parentDepartmentID, 'departmentID'=> $departmentID]);
        }

    }

    public function deleteDepartment($departmentID){
        $dbConnection = new DBConnection();
        $pdo = $dbConnection->getConnection();

        if($pdo != null){
            $sql = "DELETE FROM departments WHERE departmentID = '$departmentID' ";
            echo $sql;
            $pdo->prepare($sql);

        }
    }

}