<?php 
include "conf/config.php";
//$result=mysqli_query($conn,"UPDATE `crud` SET `id`=[value-1],`name`=[value-2],`rollno`=[value-3],`address`=[value-4],`email`=[value-5],`phoneno`=[value-6] WHERE 1");
$result = mysqli_query($conn,"SELECT * FROM crud ORDER BY id ASC");
//$res=mysqli_fetch_array($result);
//var_dump($res);
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
    </style>
</head>
<body>
    <!--<div class="header">
        <b>Linn Internship Program</b>
    </div>
    <br>-->
   <?php include("common/header.html");?>
    <a href="create.php" ><input type="button" value="Add New Student"></a>
    <br><br>
    
    <table class="table" border="1px solid">
    
           <tr>
               <th>Id</th>
               <th>Name</th>
               <th>Roll_No</th>
               <th>Address</th>
               <th>Email</th>
               <th>Phone_NO</th>
               <th>Action</th>
           </tr>
           
           <?php
           while($res = mysqli_fetch_array($result)){
               echo "<tr>";
               echo "<td>".$res['id']."</td>";
               echo "<td>".$res['name']."</td>";
               echo "<td>".$res['rollno']."</td>";
               echo "<td>".$res['address']."</td>";
               echo "<td>".$res['email']."</td>";
               echo "<td>".$res['phoneno']."</td>";
               echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a>|<a href=\"query/delete.php?id=$res[id]\" onclick=\"return confirm('Are you sure want to delete?')\">DELETE</a></td>";
               echo "</tr>";
           }
           ?>
           
       
    </table>
   

       <?php include("common/footer.html");?>
       <!--<div class="footer">
       <b>footer</b>
       </div>-->
</body>
</html>
