<?php
require_once("user.php");
require_once("contractor.php");
require_once("Register.php");

class Admin extends User
{
    public $db;

    // Proper constructor name
    function __construct($db)
    {
        $this->db = $db;
    }

    // Fixed Register function
    function Register($user)
    {
        $sql = "INSERT INTO user(PhoneNum, Email, UserName, Age, Pass, ConfirmPass, Sex) VALUES 
        ('$user->phoneNumber', '$user->Email', '$user->username', '19', '$user->password', '$user->confirmPassword', 'male')";
        
        echo "<br>" . $sql;

        // Ensure $this->db has a query() method
        return $this->db->query($sql);
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

    function rejectproduct($product_detail)
    {
        // implement logic
    }

    function approveproduct($product_detail)
    {
        // implement logic
    }

    function RemoveUser($userID)
    {
        // implement logic
    }

    function ViewContactors($contractor)
    {
        // implement logic
    }

    function ViewWarehouses($warehouses)
    {
        // implement logic
    }
}
?>