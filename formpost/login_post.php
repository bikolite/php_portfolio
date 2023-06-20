<?php
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
        $sql = "SELECT * FROM `users` WHERE username = '$user_name'";
        $result = mysqli_query($connection, $sql);

        // Return Obj
        if($result->num_rows > 0){
            header("Location: ../dashboard.php");
            exit();
        }else{
            header("Location: ../login.php");
            exit();
        }
    }
}