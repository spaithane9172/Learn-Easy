<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="./CSS/profile.css">
  <link rel="stylesheet" href="CSS/navbar.css">
  <script src="https://kit.fontawesome.com/0f60051df1.js" crossorigin="anonymous"></script>

  <?php
  $id = isset($_GET['userId']) ? $_GET['userId'] : "";
  $con = mysqli_connect("localhost", "root", "", "learneasy");

  if (!$con) {
    die("Error : " . mysqli_connect_error());
  }
  $result = $con->query("SELECT * FROM userinfo");
  $tdata = $result->num_rows;
  $userName;
  $email;
  $upassword;
  $SecurityQuestion;
  $sqAnswer;
  for ($i = 0; $i < $result->num_rows; $i++) {
    $row = $result->fetch_assoc();
    if ($id == $row['ID']) {
      $userName = $row['UserName'];
      $email = $row['Email'];
      $upassword = $row['UPassword'];
      $SecurityQuestion = $row['SecurityQuestion'];
      $sqAnswer = $row['sqAnswer'];
    }
  }
  $dec="";
  $j=1;
  for($i=6;$i<(strlen($upassword)-6); $i++){
    $dec=$dec.chr(ord($upassword[$i])-$j);
    $j++;
  }
  $upassword=$dec;
  ?>

</head>

<body>
<script>
    if(localStorage.getItem('Status')!="Successful"){
      window.location.href="index.php";
    }
  </script>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-fixed">
    <div class="container-fluid">
      <a class="navbar-brand logo-container" href="./index.php?userId=<?php echo isset($_GET['userId']) ? $_GET['userId'] : ""; ?>">
        <img class="logo" src="img/light-logo.png">
        <p>Learn Easy</p>
      </a>

      <div class="rounded-circle" id="user" onclick="userinfo()"><i class="fa-solid fa-user"></i></div>
    </div>
  </nav>
  <div style="padding: 0;" class="container-fluid">
    <div class="userinfo-box float-end p-3">
      <a href="./profile.php?userId=<?php echo isset($_GET['userId']) ? $_GET['userId'] : ""; ?>">
        <p class="mt-3" id='UserName'></p>
        <script>document.getElementById("UserName").innerHTML=localStorage.getItem("UN");</script>
      </a>
      <a href="./start-learning.php?userId=<?php echo isset($_GET['userId']) ? $_GET['userId'] : ""; ?>">
        <p>Start Learning</p>
      </a>
      <p onclick="signout()">Sign Out</p>
    </div>
  </div>
  <div class="container-fluid d-flex justify-content-center align-items-center">
    <div class="form-box mb-4">
      <div class="row">
        <div class="col-12 d-flex justify-content-center align-items-center">
          <form method="post" class="d-flex justify-content-center align-items-center flex-column">
            <div class="errorbox mb-2">
              <p id="error"></p>
            </div>
            <div class="email-in mb-3 mb-md-4">
              <i class="fa-solid fa-user"></i>
              <input placeholder="Enter Your Name" value="<?php echo $userName; ?>" name="Uname" id="Uname" type="text">
            </div>
            <div class="email-in mb-3 mb-md-4">
              <i class="fa-solid fa-envelope"></i>
              <input placeholder="Enter Email" value="<?php echo $email; ?>" name="Email" id="Email" type="email">
            </div>
            <div class="password-in mb-3 mb-md-4">
              <i class="fa-solid fa-key"></i>
              <input id="password" name="Passw" value="<?php echo $upassword; ?>" placeholder="Enter Password" type="password">
              <label><i id="eye" onclick="show_hide()" class="fa-solid fa-eye"></i>
                <i id="eye-slash" onclick="show_hide()" class="fa-solid fa-eye-slash"></i></label>
            </div>
            <div class="password-in mb-3 mb-md-4">
              <i class="fa-solid fa-key"></i>
              <input id="cpassword" name="Cpass" value="<?php echo $upassword; ?>" placeholder="Enter Confirm Password" type="password">
              <label><i id="cpeye" onclick="cpshow_hide()" class="fa-solid fa-eye"></i>
                <i id="cpeye-slash" onclick="cpshow_hide()" class="fa-solid fa-eye-slash"></i></label>
            </div>
            <div class="dropdown pb-2 mb-3 mb-md-4 d-flex justify-content-between">
              <i class="fa-solid fa-circle-question"></i>
              <select name="SecurityQ" id="question">
                <option value="question1">Select Verificatiion Question</option>
                <option value="question2">What is the name of your first pet?</option>
                <option value="question3">What was your first car?</option>
                <option value="question4">What elementary school did you attend?</option>
                <option value="question5">What is the name of the town where you were born?</option>
                <option value="question6">What is your mother's maiden name?</option>
              </select>
            </div>
            <div class="email-in mb-3 mb-md-4">
              <input placeholder="Enter Answer" value="<?php echo $sqAnswer; ?>" id="answer" name="sqanswer" type="text">
            </div>
            <button class="mt-4 mb-4" onclick="profileUpdate()">Update</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="./JS/profileUpdate.js"></script>
  <script>
    if ("<?php echo $SecurityQuestion; ?>" == "question1") {
      document.getElementById("question").selectedIndex = "0";
    } else if ("<?php echo $SecurityQuestion; ?>" == "question2") {
      document.getElementById("question").selectedIndex = "1";
    } else if ("<?php echo $SecurityQuestion; ?>" == "question3") {
      document.getElementById("question").selectedIndex = "2";
    } else if ("<?php echo $SecurityQuestion; ?>" == "question4") {
      document.getElementById("question").selectedIndex = "3";
    } else if ("<?php echo $SecurityQuestion; ?>" == "question5") {
      document.getElementById("question").selectedIndex = "4";
    }
  </script>
</body>

</html>