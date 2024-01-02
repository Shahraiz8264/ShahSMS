<?php   

include 'connection.php';
$id = $_GET['id'];
$deletequery = "DELETE FROM `login` WHERE `login`.`id`=$id";

$query = mysqli_query($con,$deletequery);

if($query){

echo "<script>alert('DATA DELETED')</script>";

}else{

    echo "<script>alert('SOME THING ERROR')</script>";
}
header("location:display.php");


?>
