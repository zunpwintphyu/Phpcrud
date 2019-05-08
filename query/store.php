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


// $result =mysqli_query($conn, "INSERT INTO crud (name, rollno, address,email,phoneno) VALUES ('$name','$rollno','$address','$email','$phoneno')");

$res = mysqli_query($conn, "INSERT INTO crud(name, rollno, address, email, phoneno) VALUES ('$name','$rollno','$address','$email','$phoneno')");


var_dump($res);

