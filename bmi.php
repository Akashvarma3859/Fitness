<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Calculate your BMI</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="stylebmi.css">
</head>

<?php require "include/navbar.php"?>
<body class=box>
  <header class="mt-3 text-center row">
  
    <div class="col-sm-10 align-right">
      <div class=image>
        
	<hr>
      <h1 class="text-secondary">Calculate Body Mass Index</h1>
	  <hr>
    </div>
	
  </header>

  <div class="container mt-3">
    <form method="POST">
      <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="weight" style="color:white">Weight in kg.</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="weight" name="weight" placeholder="Enter your weight in kilograms.">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="height" style="color:white" >Height in cm.</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="height" name="height" placeholder="Enter your height in centimeters.">
        </div>
      </div>
      <div class="form-group mt-3 row">
        <div class="col-sm-2"></div>
        <div class="col-sm-10 align-right">
          <button type="submit" class="btn btn-primary btn-block" name="calculate">Calculate</button>
        </div>
      </div>
    </form>
    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-10 align-right">
      
      <?php

      

        function calculateBMI($weight, $height){
          $bmi = ($weight / $height / $height) * 10000;
          $bmiRounded = round($bmi, 1);
          
            if($bmiRounded <= 18.4){
              echo $BMIcolor = "blue";
            }
            if($bmiRounded >= 18.5 && $bmiRounded <= 24.9){
              echo $BMIcolor = "UNDER WEIGHT";
            }
            if($bmiRounded >= 25 && $bmiRounded <= 29.9){
              echo $BMIcolor = "NORMAL WEIGHT";
            }
            if($bmiRounded >= 30 && $bmiRounded <= 39.9){
              echo $BMIcolor = "OBESE I";
            }
            else {
              echo $BMIcolor = "";
            }

          echo "<h2 style='color:" . $BMIcolor . "'>Your BMI is ${bmiRounded}</h2>";
        }


        if(isset($_POST['calculate'])){
          if (!isset($_POST['weight'])) {
            return 'Please enter your weight';
            exit();
          }
          if (!isset($_POST['height'])) {
            return 'Please enter your height';
            exit();
          }
          $weight = filter_var(htmlentities(floatval($_POST['weight'])),FILTER_SANITIZE_NUMBER_FLOAT);

          $height = filter_var(htmlentities(floatval($_POST['height'])),FILTER_SANITIZE_NUMBER_FLOAT);

          calculateBMI($weight, $height);
        }
        
    ?>
    <div class=table>
    <img src="image/chart2.png" alt="Pineapple" style="width: 900px;px;height: 300px;margin-left:15px;">
    
    </div>
  <div class=wrapper>
<p class=color>BMI and health</p>
<p>• Body fat is relevant, not body mass</P>
<p class=line>As far as health is concerned, excess body fat is negative. In contrast, an above-average muscle mass is more likely to be positive.

The BMI does not distinguish between body fat and fat-free mass. Yet statistics show that the body mass index of about 73 percent of the people is quite a significant indicator of the body fat percentage.

Thus, in three out of four cases, the BMI seems to have a significant relevance to health and in one out of four cases it does not seem to have any.</p>

<br><p class=edit>Body fat percentage vs. BMI </p>
<p class=space>Despite its high relevance to health, the body fat percentage has its shortcomings. Scales for measuring body fat are simple to use but imprecise: the more accurate methods are very complicated and require skilled personnel.

The BML in contrast, can be calculated from two simple measurements which are reliable in most cases.

This seems to be the main reason why the BMI is still the most widely used value for estimating the body fat.</p>
<br><p class=font>Limitations of BMI</p>

<p class=class>Although BMI is a widely used and useful indicator of healthy body weight, it does have its limitations. BMI is only an estimate that cannot take body composition into account. Due to a wide variety of body types as well as distribution of muscle, bone mass, and fat. BMI should be considered along with other measurements rather than being used as the sole method for determining a person's healthy body weight.

<p class=risk>Risks associated with being overweight</p>
<p>Below is a list of said risks, according to the Centers for Disease Control and Prevention (CDC):</p>

<p class=white> Higher levels of LDL cholesterol, which is widely considered "bad cholesterol" lower levels of HDL cholesterol considered to be good cholesterol in

moderation and high levels of triglycerides

 Certain cancers (endometrial breast colon, kidney, gallbladder, liver)

 Mental illnesses such as clinical depression, anxiety, and others

 Body pains and difficulty with certain physical functions

 Low quality of life

<p>Generally, a person should try to maintain a BMI below 25 kg/m2. but ideally should consult their doctor to determine whether or not they need to

make any changes to their lifestyle in order to be healthier.

    </div>
  </div>
</body>
</html>