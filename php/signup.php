<?php
$uname=$_GET['Uname'];
$email=$_GET['Email'];
$pass=$_GET['Passw'];
$squestion=$_GET['SecurityQ'];
$sqanswer=$_GET['sqanswer'];
$con=mysqli_connect("localhost","root","","learneasy");
if(!$con){
    die("Error".mysqli_connect_error());
}
$con->query("INSERT INTO `userinfo` (`UserName`,`Email`,`UPassword`,`SecurityQuestion`,`sqAnswer`) VALUE('$uname','$email','$pass','$squestion','$sqanswer')");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="../CSS/sign-up.css">
  <link rel="stylesheet" href="../CSS/navbar.css">
  <script src="https://kit.fontawesome.com/0f60051df1.js" crossorigin="anonymous"></script>
  <script src="./JS/sign-in.js"></script>
  <script src="./JS/index.js"></script>
  <script>
        function SignIn(){
            window.location.href="../sign-in.html"
        }
</script>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand logo-container" href="index.html">
        <img class="logo" src="../img/light-logo.png">
        <p>Learn Easy</p>
      </a>
    </div>
  </nav>

  <div class="modal" style="display:block !important; top:10% !important" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Sign Up</h5>
      </div>
      <div class="modal-body">
        <p>Sign Up Successfully</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" onclick="SignIn()" data-bs-dismiss="modal">Ok</button>
      </div>
    </div>
  </div>
</div>
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

</body>

</html>