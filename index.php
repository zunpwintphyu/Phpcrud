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
       <thead>
           <tr>
               <th>Name</th>
               <th>Roll_No</th>
               <th>Address</th>
               <th>Email</th>
               <th>Phone_NO</th>
           </tr>
       </thead>
       <tbody>
           <tr>
               <td >Mg Mg</td>
               <td>3</td>
               <td>Yangon</td>
               <td>mgmg@gmail.com</td>
               <td>0978546321</td>
           </tr>
           <tr>
               <td>Ma Ma</td>
               <td>4</td>
               <td>Mandalay</td>
               <td>mama@gmail.com</td>
               <td>09788865432</td>
           </tr>
       </tbody>
       </table>
       
       <?php include("common/footer.html");?>
       <!--<div class="footer">
       <b>footer</b>
       </div>-->
</body>
</html>
