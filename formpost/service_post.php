<?php
require_once('../include/db.php');


if(isset($_POST['btn'])){

    $set_icon = $_POST['set_icon'];
    $service_heading = $_POST['service_heading'];
    $description = $_POST['description'];


    if(empty($set_icon)){
        header("location: ../service.php");
    }elseif(empty($service_heading)){
        header("location: ../service.php");
    }elseif(empty($description)){
        header("location: ../service.php");
    }else{

        $sql = "INSERT INTO `services`(`set_icon`, `service_heading`, `description`) VALUES ('$set_icon','$service_heading','$description')";

        $result = mysqli_query($check, $sql);

        header("location: ../service.php");
    }
}