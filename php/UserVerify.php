<?php 
    $email=$_GET['Email'];
    $securityQ=$_GET['SecurityQ'];
    $sqAnswer=$_GET['sqanswer'];
    $con=mysqli_connect("localhost","root","","learneasy");
    if(!$con){
        die("Error : ". mysqli_connect_error());
    }
    $result=$con->query("SELECT * FROM userinfo");
    for($i=0; $i<$result->num_rows; $i++){
        $row=$result->fetch_assoc();
        if($row['Email']==$email && $row['SecurityQuestion']==$securityQ && $row['sqAnswer']==$sqAnswer){
            $id=$row['ID'];
            echo "<script>window.location.href='../forgotPassword.php?userId=$id';</script>";
        }
    }
?>