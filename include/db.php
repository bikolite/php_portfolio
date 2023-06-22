<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$database_name = "mr_rasmus";

$check = mysqli_connect($server_name, $user_name,$password,$database_name);
if($check){
    echo "Your Database has been successfully connect";
}else{
    echo "Somthing Wrong";
}
?>

