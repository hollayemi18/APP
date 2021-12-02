<?php
session_start();
require 'db.php';
if(isset($_POST['username'])&& isset($_POST['password']) && isset($_POST['role'])){
    function check($data){
        $data = htmlspecialchars($data);
        $data = trim($data);
        return $data;
    }
        $username = check($_POST['username']);
        $password = check($_POST['password']);
        $role = check($_POST['role']);
    if(empty($username)){
        header('location: ../index.php?error=username is required');
    }else if(empty($password)){
        header('location: ../index.php?error=password is required');
    }else{
        $password = md5($password);
        $sql = mysqli_query($dbname,"select * from user where password = '$password' and
        username = '$username'");
        if(mysqli_num_rows($sql) === 1){
            $rows = mysqli_fetch_assoc($sql);
        if($rows['password']===$password && $rows['role'] === $role){

            $_SESSION['username'] = $rows['username'];
            $_SESSION['password'] = $rows['password'];
            $_SESSION['role'] = $rows['role'];
            $_SESSION['id'] = $rows['id'];
            header('location:../view/home.php');

        }else{
             header('location:../index.php?error="incorrect password or username"');

        }
        }else{
          header('location:../index.php?error="incorrect password or username"');

        }
        
    }
}else{
    header('location:../index.php');

}

?>