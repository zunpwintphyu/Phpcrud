<?php 
include "conf/config.php";

if(isset($_POST['update']))
{
    $id= $_POST['id'];
    $name = $_POST['name']; 
    $rollno = $_POST['roll_no'];
    $address = $_POST['address'];
    $email=$_POST['email'];
    $phoneno=$_POST['phone_no']; 

    // echo $id;
    // echo "<br>";

    // echo $rollno;
    // echo "<br>";

    // echo $name;
    // echo "<br>";

    // echo $email;
    // echo "<br>";

    // echo $address;
    // echo "<br>";

    // echo $phoneno;
    // echo "<br>";

    // exit;

    $result = mysqli_query($conn,"UPDATE crud SET name='$name',rollno='$rollno',address='$address',email='$email',phoneno='$phoneno' WHERE id=$id");

     header("location:http://localhost/phpcrud/");
}
?>



