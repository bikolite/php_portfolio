<?php
session_start();
require_once("../include/db.php");

if(isset($_POST['btn'])){

    $user_name = $_POST['username'];
    $password = $_POST['password'];


    if(empty($user_name)){
        header("Location: ../login.php");
        exit();
    }elseif(empty($password)){
        header("Location: ../login.php");
        exit();
    }else{
        $hash = md5($password);
        $sql = "SELECT * FROM `users` WHERE username = '$user_name' and password='$hash'";
        $result = mysqli_query($check, $sql);

        // Return Obj
        if($result->num_rows > 0){
            $_SESSION['login'] = "Login Successfully";
            $_SESSION['username'] = $user_name;
            header("Location: ../dashboard.php");
            exit();
        }else{
            $_SESSION['error'] = "Your Username or Password is Wrong!";
            header("Location: ../login.php");
            exit();
        }
    }
}