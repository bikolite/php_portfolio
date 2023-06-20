<?php
require_once("../include/db.php");
if (isset($_POST['btn'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];


    if(empty($username)){
        header("Location: registration.php");
        exit();
    }elseif(empty($email)){
        header("Location: registration.php");
        exit();
    }elseif(empty($password)){
        header("Location: registration.php");
        exit();
    }elseif($password !== $confirm_password){
        header("Location: registration.php");
        exit();
    }else{
        $sql = "SELECT * FROM `users` WHERE username = '$username'";
        $result = mysqli_query($connection, $sql);

        if($result->num_rows > 0){
            header("Location: registration.php");
            exit();
        }else{
            $sql_two = "INSERT INTO `users`(`username`, `email`, `password`) VALUES ('$username','$email','$password')";
            $result_two = mysqli_query($connection, $sql_two);

            header("Location: ../login.php");
            exit();
        }

    }
} else {
    header("Location: registration.php");
    exit();
}
