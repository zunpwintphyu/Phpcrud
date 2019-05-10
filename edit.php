<?php 
include "conf/config.php";
$id= $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM crud ORDER BY id=$id");

while($res = mysqli_fetch_array($result)){
$name = $res['name']; 
$rollno =$res['rollno'];
$address =$res['address'];
$email=$res['email'];
$phoneno=$res['phoneno']; 

}

// echo $name;
// echo "<br>";

// echo $rollno;
// echo "<br>";

// echo $address;
// echo "<br>";

// echo $email;
// echo "<br>";

// echo $phoneno;
// echo "<br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Linn Internship Program</title>
    <style>
        .header {
               padding: 60px;
               text-align: center;
               background: #1abc9c;
               color: white;
               font-size: 30px;
               }
        table {
                border: 1px solid black;
                height:auto;
                width:100%;
                }
        .footer{
            background: #1abc00;
            color: white;
            padding: 10px;
            text-align: center;
            font-size: 30px;
            position:fixed;
            bottom:0;
            width:100%;
            height:50px;
        
        }
       
        
        }
        #b{
            
            margin-left:500px;
        }
        
    </style>
</head>
<body>
    <!--<div class="header">
        <b>Linn Internship Program</b>
    </div>
    <br>-->
   <?php include("common/header.html");?>

    <br><br>
    <div style="margin-left:600px;">
        <form action="update.php" method="POST">
            <label class="a">Name:</label><br>
            <input type="text" name="name" value="<?php echo $name ?>"><br>

            <label class="a">Roll_No:</label><br>
            <input type="text" name="roll_no" value="<?php echo $rollno ?>"><br>

            <label class="a">Address:</label><br>
            <textarea  name="address" ><?php echo $address ?></textarea><br>

            <label class="a">Email:</label><br>
            <input type="text" name="email" value="<?php echo $email ?>"> <br>
        
            <label class="a">Phone_No:</label><br>
            <input type="text" name="phone_no"value="<?php echo $phoneno ?>">
            <br><br>

            <input type="hidden" name="id" value="<?php echo $id?>">
            <input type="submit" name="update"  value="Submit">
            
        </form>
        
    </div>
       
       <?php include("common/footer.html");?>
       <!--<div class="footer">
       <b>footer</b>
       </div>-->
</body>
</html>
