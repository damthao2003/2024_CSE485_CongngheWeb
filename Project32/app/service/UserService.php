<?php

use lib\DBConnection;

require_once APP_ROOT.'/app/models/User.php';

class UserService
{
    // viet cac ham function vao day
    public function getALLUsers()
    {
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();

        if($conn != null){
            $sql = 'select * from users';
            $stmt = $conn->query($sql);
            $users = [];
            while ($row = $stmt->fetch()){
                $user = new User($row['username'],$row['password'],$row['role'],$row['employeeID']);
                $users[] = $user;
            }
            return $users;
        }
    }

}
