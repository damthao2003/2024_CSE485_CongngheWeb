<?php

class Patients
{
    private $id;
    private $fullname;
    private $gender;
    private $dateOfBirth;
    private $address;
    private $mobile;

    public function __construct($id, $fullname, $gender, $dateOfBirth, $address, $mobile)
    {
        $this->id = $id;
        $this->fullname = $fullname;
        $this->gender = $gender;
        $this->dateOfBirth = $dateOfBirth;
        $this->address = $address;
        $this->mobile = $mobile;
    }
    public function getId()
    {
        return $this->id;
    }


    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getFullName()
    {
        return $this->fullname;
    }

    public function setFullName($fullname)
    {
        $this->fullname = $fullname;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function setGender($gender): void
    {
        $this->gender = $gender;
    }


    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }


    public function setDateOfBirth($dateOfBirth): void
    {
        $this->dateOfBirth = $dateOfBirth;
    }


    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address): void
    {
        $this->address = $address;
    }

    public function getMobile()
    {
        return $this->mobile;
    }

    public function setMobile($mobile): void
    {
        $this->mobile = $mobile;
    }


}

?>