<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "mr_rasmus";
$connection = mysqli_connect($server, $username, $password, $database);

if(!$connection){
    die("Your Connection Not Connect in Database".mysqli_connect_error());
}else{
    echo "Your Connection is Successfully Connect";
}

$email = $_POST['email'];
$password = $_POST['password'];

$query = "INSERT INTO users(email, password) VALUES('$email', '$password')";

if(mysqli_query($connection, $query)){
    echo "Your Data Submit Successfully";
}else{
    echo "Data Store Fail";
}






















?>