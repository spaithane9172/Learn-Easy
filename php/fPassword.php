<?php
$pass = isset($_GET['p']) ? $_GET['p'] : "";
$id = isset($_GET['userId']) ? $_GET['userId'] : "";
$con = mysqli_connect("localhost", "root", "", "learneasy");
if (!$con) {
    die("Error : " . mysqli_connect_error());
}
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

$con->query("UPDATE userinfo SET UPassword='$enc' WHERE id='$id'");
$con->close();
echo "<script>window.location.href='../sign-in.php';</script>";
