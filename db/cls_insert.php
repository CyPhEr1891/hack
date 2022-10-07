<?php
require_once("DBConnection.php");

// Complaint Registration
class regiUser
{
    public $email;
    public $phone;
    public $password;
    public $role;
    public function userRegi()
    {
        $conn = dbconnection();
        $sql = "INSERT INTO `user` (`email`, `phone`, `password`, `role`) VALUES ('$this->email','$this->phone','$this->password','$this->role')";

        $result = $conn->query($sql);


        if ($result === TRUE) {
            return true;
        } else {
            return false;
        }
    }
}

?>