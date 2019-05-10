<?php
include "../conf/config.php";

$name = $_POST['name']; 
$rollno = $_POST['roll_no'];
$address = $_POST['address'];
$email=$_POST['email'];
$phoneno=$_POST['phone_no']; 

echo $rollno;
echo "<br>";

echo $name;
echo "<br>";

echo $email;
echo "<br>";

echo $address;
echo "<br>";
echo $phoneno;
echo "<br>";

//$res=mysqli_query($conn,"UPDATE crud SET 'id`=[1],`name`=[hsu hsu],`rollno`=[9],`address`=[Bago],`email`=[hsu@gmail.com],`phoneno`=[0978542344560] WHERE $id=1");

$res = mysqli_query($conn, "INSERT INTO crud(name,rollno,address,email,phoneno) VALUES ('$name','$rollno','$address','$email','$phoneno')");
header("location:http://localhost/phpcrud/");
?>

