<?php
$username = "root";
$password = "";
$server = "localhost";
$database = "sms";


$con = mysqli_connect($server,$username,$password,$database);

if($con){

// echo "<script>alert('Connection Successful')</script>";

}else{

    echo "<script>alert('Connection Successful')</script>";
}
?>