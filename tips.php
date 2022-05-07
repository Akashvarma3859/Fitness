<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>tips</title>
    <style>
        h1{
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            background-color: grey;
            text-shadow: 2px 2px 5px red;
        }

        .image{
            background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(image/bmr1.jpg);
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            border: 5px solid black;
            height: 200px;
            color:black;
            font-size: 40px;
            
            
        }
        .weight{
            background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(image/gain.jpg);
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            border: 5px solid black;
            height: 200px;
            color:black;
            font-size: 40px;
            text-shadow: 2px 2px 5px red;
            
        }
        .gain{
            background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(image/loss.jpg);
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            border: 5px solid black;
            height: 200px;
            color:black;
            font-size: 40px;
            text-shadow: 2px 2px 5px red;
        }
    .nav-link {
     color: black;
     font-family: 'Times New Roman', Times, serif;
     text-shadow: 2px 2px 5px red;
        }
    </style>
</head>
<body>
<?php require "include/navbar.php"?>
<h1>Tips</h1>
<div class=image>
    
    <a class="nav-link " href="weight.php">Weight Loss</a>
    </div>
    <br>
    <div class=weight>
    <a class="nav-link " href="weightgain.php">Weight Gain</a>
    </div>
    <br>
    <div class=gain>
    <a class="nav-link " href="musclegain.php">Muscle Gain</a>
    </div>

</div>

    
</body>
</html>