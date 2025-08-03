<?php

require "Database.php";

class User extends Database
{
    public function register($first_name, $last_name, $username, $password){
        $sql = "INSERT INTO users (first_name, last_name, username, password)
                VALUES ('$first_name', '$last_name', '$username', '$password')";
        if($this->conn->query($sql)){
            header("location: ../views");
            exit;
        }else{
            die("Error in Registering: ".$this->conn->error);
        }
    }

}

   
?>