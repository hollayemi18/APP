<?php
require 'db.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $pass =md5($_POST['pass']);
    $role = $_POST['role'];
       function check($data){
        $data = htmlspecialchars($data);
        $data = trim($data);
        return $data;
    }
    if(!empty($name)&& !empty($pass)&& !empty($role)){
        $query = "select* from user";
        $salt = mysqli_query($dbname,$query);
        $row  = mysqli_fetch_assoc($salt);
        $data =$row['username'];

        if($data = $name){
            header('location:../view/sign.php?error= username is already exist');
        }else{
                $mysqli = "insert into user(username,password,role) 
                values('$name','$pass','$role')";
               $result = mysqli_query($dbname,$mysqli);
               header('location:../index.php');
            }
    }else{
        header('location:../view/sign.php?wrong=all fields are required');
    }
}