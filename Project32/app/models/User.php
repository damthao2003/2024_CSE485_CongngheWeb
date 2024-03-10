<?php
class User
{
    private $userName;
    private $password;
    private  $role;
    private $employeeId;

    public function __construct($userName, $password, $role, $employeeId){
        $this->userName = $userName;
        $this->password = $password;
        $this->role = $role;
        $this->employeeId = $employeeId;
    }

    public function getUserName()
    {
        return $this->userName;
    }

    public function setUserName($userName)
    {
        $this->userName = $userName;
        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;
        return $this;
    }

    public function getEmployeeId()
    {
        return $this->employeeId;
    }

    public function setEmployeeId($employeeId)
    {
        $this->employeeId = $employeeId;
        return $this;
    }


}
