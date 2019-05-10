<?php 
include "../conf/config.php";
$id= $_GET['id'];
$result = mysqli_query($conn,"DELETE FROM crud WHERE id=$id");
header("location:http://localhost/phpcrud/");
?>
