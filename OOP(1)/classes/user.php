<?php
require_once("admin.php");
require_once("DB.php");
class user
{
    public $phone_number;
    public $email;
    public $password;
    public $confirm_password;
    public $sex;
    public $age;
    public $username;
    public $db;
    function __construct($db)
    {
        $this->db=$db;
    }
    public function Register($username,$email,$password,$phonenumber)
    {
    }
    public function Login($username , $password)
    {
        $sql="select * from user where username='$username'and password='$password'";
        echo $sql;
        $res=$this->db->query($sql);
        if($res->num_row>0) //el mfrod nrg3 object mn no3 user
        {
            //$u=..... , then return u , 3lshan e7na msh 3yzen n3rf hwa mwgod wala laa e7na 3yzen el data
            return true;
        }
        else{
            return false;
        }
    }
    public  function Logout()
    {
        echo "logging out from $this->username";
    }
    public  function Updateprofile($username,$email)
    {

    }
    public  function Reset_Password($password)
    {

    }
    public  function switch_language()
    {

    }

    public function setphone_number($phone_number) {
        $this->phone_number = $phone_number;
    }

    public function setemail($email) {
        $this->email = $email;
    }

    public function setpassword($password) {
        $this->password = $password;
    }

    public function setconfirm_password($confirm_password) {
        $this->confirm_password = $confirm_password;
    }

    public function setsex($sex) {
        $this->sex = $sex;
    }

    public function setage($age) {
        $this->age = $age;
    }

    public function setusername($username) {
        $this->username = $username;
    }


    public function getphone_number() {
        return $this->phone_number;
    }

    public function getemail() {
        return $this->email;
    }

    public function getpassword() {
        return $this->password;
    }

    public function getconfirm_password() {
        return $this->confirm_password;
    }

    public function getsex() {
        return $this->sex;
    }

    public function getage() {
        return $this->age;
    }

    public function getusername() {
        return $this->username;
    }
}
?>