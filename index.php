<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/navbar.css">
    <script src="https://kit.fontawesome.com/0f60051df1.js" crossorigin="anonymous"></script>
    <script>
      function redirect1(){
        if(localStorage.getItem('Status')=="Successful"){
          window.location.href=`index.php?userId=${localStorage.getItem('userId')}`;
        }
        else{
          window.location.href=`index.php`;
        }
      }
      function redirect2(){
        if(localStorage.getItem('Status')=="Successful"){
          window.location.href=`profile.php?userId=${localStorage.getItem('userId')}`;
        }
      }
      function redirect3(){
        if(localStorage.getItem('Status')=="Successful"){
          window.location.href=`start-learning.php?userId=${localStorage.getItem('userId')}`;
        }
      }
    </script>
</head>
<body>
  <div class="bg">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-fixed">
        <div class="container-fluid">
            <a style="cursor:pointer;" onclick="redirect1()" class="navbar-brand logo-container">
                <img class="logo" src="img/light-logo.png">
                <p>Learn Easy</p>
            </a>

          <button class="navbar-toggler color-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-5">
              <li class="nav-item">
                <a class="nl1 nav-link active" aria-current="page" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nl2 nav-link" href="#">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nl3 nav-link" href="#">Contact Us</a>
              </li>
              <li class="nav-item sl-btn">
                <a class="nl4 nav-link" href="#">Start Learning</a>
              </li>
            </ul>
            <div class="d-flex justify-content-center align-items-center">
              <button class=" btn btn-sm btn-outline-light fw-bold" onclick="SignIn()" id="signin-btn1">Sign In</button>
            </div>
          </div>
          <div class="rounded-circle" id="user" onclick="userinfo()"><i class="fa-solid fa-user" ></i></div>
        </div>
      </nav>
      <div style="padding: 0;" class="container-fluid">
        <div class="userinfo-box float-end p-3">
          <a style="cursor:pointer;" onclick="redirect2()"><p class="mt-3" id="Uname"></p></a>
          <a style="cursor:pointer;" onclick="redirect3()"><p>Start Learning</p></a>
          <p onclick="signout()">Sign Out</p>
        </div>
      </div>
      
      <div class="home-body">
        <h1 class="mb-4">Learn Easy</h1>
        <p id="start-msg">Start Learning with Learn Easy by Sign In.</p>
        <button class="btn btn-dark btn-lg" id="signin-btn2" onclick="SignIn()">Sign In</button>
        <button style="display: none;" class="btn btn-dark" id="sl-btn" onclick="StartLearning()">Start Learning</button>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </div>
  <script>
    document.getElementById("Uname").innerHTML=localStorage.getItem('UN');
    function StartLearning(){
      window.location.href=`./start-learning.php?userId=${localStorage.getItem('userId')}`;
    }
  </script>
  <script src="./JS/index.js"></script>
  </body>
</html>