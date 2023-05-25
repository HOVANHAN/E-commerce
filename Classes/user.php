<?php
class User
{
    private $id;
    private $name;
    private $password;
    private $phoneNum;
    private $address;
    private $username;
    private $email;

    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getPhoneNum()
    {
        return $this->phoneNum;
    }
    public function getPassword()
    {
        return $this->password;
    }

    public function getAddress()
    {
        return $this->address;
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function __construct($id, $name, $phoneNum, $password, $address, $username,$email)
    {
        $this->id = $id;
        $this->password = $password;
        $this->address = $address;
        $this->username = $username;
        $this->name = $name;
        $this->phoneNum = $phoneNum;
        $this->email=$email;
    }
}
