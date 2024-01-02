<?php

include '../connection.php';

$ids = $_GET['id'];

$sqlquery = "DELETE FROM `stud` WHERE `stud`.`id` = '$ids'";

$query = mysqli_query($con,$sqlquery);


if(!$query){

    
}else{

    echo "<script>alert('Something Error')</script>";
}
header("Location:info.php");

?>