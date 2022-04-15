<?php
$userId=$_GET['userId'];
$uname=$_GET['Uname'];
$email=$_GET['Email'];
$pass=$_GET['Passw']; 
$squestion=$_GET['SecurityQ'];
$sqanswer=$_GET['sqanswer'];
//password encryption
$enc="";
for($i=1;$i<=strlen($pass); $i++){
  $enc=$enc.chr(ord($pass[$i-1])+$i);
}
$randstr="";
$randstr1="";
for($i=1;$i<=6; $i++){
  $randstr=$randstr.chr(rand(0,255));
  $randstr1=$randstr1.chr(rand(0,255));
}
$enc=$randstr.$enc.$randstr1;

//DB code
$con=mysqli_connect("localhost","root","","learneasy");
if(!$con){
    die("Error".mysqli_connect_error());
}
$result=$con->query("UPDATE userinfo SET UserName='$uname',Email='$email',UPassword='$enc',SecurityQuestion='$squestion',sqAnswer='$sqanswer' WHERE ID='$userId'");
$con->close();
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
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand logo-container" href="../index.php?userId=<?php echo isset($_GET['userId']) ? $_GET['userId'] : ""; ?>">
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
        <p>Profile Updated Successfully</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" onclick="profileUpdateRedirect()" data-bs-dismiss="modal">Ok</button>
      </div>
    </div>
  </div>
</div>
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
    <script src="../JS/profileUpdate.js"></script>
</body>

</html>