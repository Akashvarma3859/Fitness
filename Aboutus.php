
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styleabout.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>About Us</title>
</head>
<body>
<?php require "include/navbar.php"?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <style>

    
    .about_column {
      float: left;
      width: 33.3%;
      border: 2px solid whitesmoke;
      margin-top: 2.5em;
      margin-left: 10em;
      margin-bottom: 16px;
      padding: 0 8px;
    }
     
    .about_hr_text{
      text-align: center;
    }

    .about_hr_text_title{

    font-size: 30px;
    font-weight: 600;
    margin-top: 20px;
    font-family: auto;
    margin-bottom: -15px;
    }

    .about_hr_text hr{
         border-width: 1px;
      height: 1px;
      color:gray;
      width: 74%;
    }

    .about_card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      margin: 8px;
    }

    .about-section {
      padding: 50px;
      text-align: center;
      background-color: darkslategrey;
      color: white;
    }
    .about-section p {
      color: bisque;
      font-size: 20px;
      font-family: serif;
    }
    .container_about {
      text-align: center;
      padding: 0 16px;
      background-color: white;
    }

    .container_about::after, .about_row::after {
      content: "";
      clear: both;
      display: table;
    }

    .container_about .title {
      color: grey;
    }

    .container_about p{
      font-size: 17px;
    }

    @media screen and (max-width: 650px) {
      .about_column {
        width: 100%;
        display: block;
      }
    }
  </style>
</head>
<body>

  <div class="about-section">
    <h1>About Us Page</h1>
    <p>"HealthOn" is a website intended for online fitness. The main objective of this application is to make it interactive and easy to use. In this website you can calculate your bmr and bmi and you can also keep track on your daily consumption. This website help you to keep track on your goals.</p>
    <p>The page helps you for tracking your daily routines. </p>
  </div>

  <div class="about_hr_text">
    <div class="about_hr_text_title">Managed By</div>
    <hr>


      <div class="about_card">
        <div class="container_about">
          <h2>Akash varma</h2>
          <p class="title">Php Connectivity , Database Manage</p>
          <p class="title">  And UI Manage</p>
          <p><span>Email: </span><a href="">Akashvarma3859@gmail.com</a></p>
        </div>
      </div>
    </div>


  </body>
  </html>

</div>
</form>
</div>
</div>
</body>
</html>
