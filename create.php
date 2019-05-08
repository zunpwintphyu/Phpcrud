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
        <form action="query/store.php" method="POST">
            <label class="a">Name:</label><br>
            <input type="text" name="name" ><br>

            <label class="a">Roll_No:</label><br>
            <input type="text" name="roll_no" ><br>

            <label class="a">Address:</label><br>
            <textarea rows="4" cols="50" name="address"></textarea><br>

            <label class="a">Email:</label><br>
            <input type="text" name="email" ><br>
        
            <label class="a">Phone_No:</label><br>
            <input type="text" name="phone_no">
            <br><br>

            <button>
            <a href="index.php">Back</a>
            </button>
            <input type="submit" value="Save">
            
        </form>
        
    </div>

       <?php include("common/footer.html");?>
       <!--<div class="footer">
       <b>footer</b>
       </div>-->
</body>
</html>
