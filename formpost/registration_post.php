<?php
require_once("../include/db.php");



if (isset($_POST['btn'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];


    if($username == ""){
        header("Location: ../registration.php");
        exit();
    }elseif(empty($email)){
        header("Location: ../registration.php");
        exit();
    }elseif(empty($password)){
        header("Location: ../registration.php");
        exit();
    }elseif($password !== $confirm_password){
        header("Location: ../registration.php");
        exit();
    }else{


        
        // $sql = "SELECT * FROM `users` WHERE username = '$username'";
        $sql = "SELECT * FROM `users` WHERE username = '$username' And email= '$email'";
        $result = mysqli_query($check, $sql);

        if($result->num_rows > 0){
            header("Location: ../login.php");
            exit();
        }else{

            $hash = md5($password);

            $sql_two = "INSERT INTO `users`(`username`, `email`, `password`) VALUES ('$username','$email','$hash')";
            $result_two = mysqli_query($check, $sql_two);

            header("Location: ../login.php");
            exit();
        }

    }
} else {
    header("Location: ../registration.php");
    exit();
}
