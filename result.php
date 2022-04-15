<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/navbar.css">
    <link rel="stylesheet" href="CSS/result.css">
    <script>
    if(localStorage.getItem('Status')!="Successful"){
      window.location.href="index.php";
    }
  </script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-fixed sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand logo-container" href="./index.php?userId=<?php echo isset($_GET['userId'])?$_GET['userId']:"";?>">
                <img class="logo" src="img/light-logo.png">
                <p>Learn Easy</p>
            </a>
        </div>
    </nav>
    <div class="container bg">
        <h1 class="uscore">Your Score</h1>
        <div class="result mb-5">
            <div class="outer">
                <div class="inner">
                    <h1 id="score">5/5</h1>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <button class="s-btn" onclick="submitScore()">Submit</button>
        </div>
    </div>
    <script>
        document.getElementById("score").innerHTML=localStorage.getItem("score")+"/5";
        function submitScore(){
            window.location.href=`./start-learning.php?userId=${localStorage.getItem('userId')}`;
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>