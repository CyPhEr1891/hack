<?php
session_start();
require_once("DBConnection.php");

// Login Check for all user 
class login
{
    public $email;
    public $password;
    public function DBlogin()
    {
        $conn = dbconnection();
        $sql = "SELECT `name`, `email`, `password`, `role` FROM `user` WHERE  email='$this->email' and password='$this->password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if ($row['role'] == 0) {
                    if($row['name']!=NULL){
                        $_SESSION['Admin'] = $row['name'];
                    }
                    else{
                        $_SESSION['Admin'] = 'Admin';
                    }
                } 
                elseif ($row['role'] == 1) {
                    if($row['name']!=NULL){
                        $_SESSION['Authority'] = $row['name'];
                    }
                    else{
                        $_SESSION['Authority'] = 'Authority';
                    }
                    
                } 
                elseif ($row['role'] == 2) {
                    if($row['name']!=NULL){
                        $_SESSION['user'] = $row['name'];
                    }
                    else{
                        $_SESSION['user'] = 'User';
                    }
                    
                }    
            }
            return true;
        } else {
           // $_SESSION['Invalid'] = 'Invalid User Id or Password';
            return false;
        }
    }
}

?>