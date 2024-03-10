<?php

require_once APP_ROOT . '/app/models/patients.php';

class PatientService
{
    public function getAllPatients()
    {
        //b1 ket noi db
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();
         // neu conn # null thi thuc thi lay du lieu
       if ($conn !== null) {
            //b2: try van du lieu
            $sql = 'select * from patients order by id desc'; // hien thi cac du lieu moi them len tren
            $stmt = $conn->query($sql); // stmt : la 1 object

            //b3: xu ly ket qua tra ve
            $patients = [];
            while ($row = $stmt->fetch()) { // lay ra cac ban ghi tu doi tuong stmt moi lan lap
                $patient = new Patients($row['id'], $row['fullname'], $row['gender'], $row['dateOfBirth'], $row['address'], $row['mobile']);
                $patients[] = $patient;
            }
            return $patients;
      }
    }
}

?>
