<?php

use App\Libs\Database;

class UserModel extends Database
{
    public function createUser($data)
    {
        //check exist email
        $firstname = $data['firstname'];
        $lastname = $data['lastname'];
        $email = $data['email'];
        $password = password_hash($data['password'], PASSWORD_DEFAULT);

        $sql = "SELECT * from users WHERE email = '$email'";
        $exist_user = $this->select($sql);
        if ($exist_user) {
            return false;
        } else {
            $sql = "INSERT INTO users (firstname, lastname, email, password) 
        VALUES ('$firstname', '$lastname', '$email', '$password')";

            // Execute the query
            $result = $this->insert($sql);

            // Check if the insertion was successful
            if ($result) {
                return true; // User created successfully
            } else {
                return false; // Failed to create user
            }
            //create user
        }
    }
    public function login($data)
    {
        //check exist email

        $email = $data['email'];
        $password = $data['password'] ;

        $sql = "SELECT * from users WHERE email = '$email'";
        $exist_user = $this->select($sql);
        if ($exist_user) {
            $exist_user = $exist_user->fetch_assoc();
        }else {
            return false;
        }
       
        if ($exist_user) {
            //check pass
            if (password_verify($password,$exist_user['password'] )  ) {
                return $exist_user;
            } else {

                return false;
            }
        } else {

            return false;
            //create user
        }
    }
}
