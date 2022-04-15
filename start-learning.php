<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link rel="stylesheet" href="CSS/navbar.css">
    <script src="https://kit.fontawesome.com/0f60051df1.js" crossorigin="anonymous"></script>
    <script src="./JS/sign-in.js"></script>
    <script>
    if(localStorage.getItem('Status')!="Successful"){
      window.location.href=`index.php?userId=${localStorage.getItem('userId')}`;
    }
  </script>
  <link rel="stylesheet" href="./CSS/start-learning.css">
</head>
<body>
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-fixed">
    <div class="container-fluid">
        <a class="navbar-brand logo-container" href="./index.php?userId=<?php echo isset($_GET['userId'])?$_GET['userId']:"";?>">
            <img class="logo" src="img/light-logo.png">
            <p>Learn Easy</p>
        </a>
      
      <div class="rounded-circle" id="user" onclick="userinfo()"><i class="fa-solid fa-user" ></i></div>
    </div>
  </nav>

  <div style="padding: 0;" class="container-fluid">
    <div class="userinfo-box float-end p-3">
      <a href="./profile.php?userId=<?php echo isset($_GET['userId'])?$_GET['userId']:"";?>"><p class="mt-3" id="Uname"></p></a>
      <a href="./start-learning.php?userId=<?php echo isset($_GET['userId'])?$_GET['userId']:"";?>"><p>Start Learning</p></a>
      <p onclick="signout()">Sign Out</p>
    </div>
  </div>
  

      <div class="container mt-5">
          <div class="row ">
            <div class="col-md-6 mb-4 d-flex justify-content-center align-item-center">
              <div class="row">
              <div class="col-8">
              <select class="form-select" id="subject">
                <option value="NAN">Select Subject</option>
                <option value="AI">Artificial Intelligence</option>
                <option value="WT">Web Technology</option>
                <option value="DSBDA">Data Science and Big Data Analytics</option>
                <option value="IS">Information Security</option>
              </select>
            </div>
            <div class="col-4">
              <button class="btn btn-dark" onclick="submitSubject()">Submit</button>
            </div>
              </div>
            </div>
            <div class="col-md-6 d-flex justify-content-center align-item-center">
              <div class="row">
              <div class="col-8">
              <select class="form-select" id="topic" disabled>
                <option value="NAN">Select Topic</option>
                <option id="t1" value="t1"></option>
                <option id="t2" value="t2"></option>
                <option id="t3" value="t3"></option>
                <option id="t4" value="t4"></option>
                <option id="t5" value="t5"></option>
                <option id="t6" value="t6"></option>
              </select>
            </div>
            <div class="col-4">
              <button class="btn btn-dark disabled" onclick="submitSubjectTopic()" id="topicBtn">Submit</button>
            </div>
              </div>
            </div>
          </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>document.getElementById("Uname").innerHTML=localStorage.getItem('UN');</script>
    <script src="./JS/startlearning.js"></script>
  </body>
</html>