<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   <?php include 'link.php' ?>
    
</head>
<body>
<div class="container">
<h1 class="text-center bg-info">DATA INFORMATION</h1>
<table class="table">

<tr>
    <th>ID</th>
    <th>EMAIL</th>
    <th>PASSWORD</th>
    <th>OPERATIONS</th>
    
   
</tr>

<tr>

</tr>


<?php

include "connection.php";
$sql = "select * from login";

$query = mysqli_query($con,$sql);

$res = mysqli_num_rows($query);

while($res = mysqli_fetch_array($query)){

?>
<tr>
    <td><?php echo $res['id'];?></td>
    <td><?php echo $res['email'];?></td>
    <td><?php echo $res['password'];?></td>
    <td><a href="edit.php?id=<?php echo $res['id'];?>"><i class="fa fa-edit" id="red" aria-hidden="true" style="padding:0 20px" ></i></a>
    <a href="delete.php?id=<?php echo $res['id'];?>"><i class="fa fa-trash red" id="green" aria-hidden="true" style="padding:0 20px"></i></a>
    </td>

</tr>
<?php
}

?>

</table>
</div>
    
</body>
</html>