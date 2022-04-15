<?php
$email = $_POST['email'];
$passwd = $_POST['passwd'];
$enc = "";
for ($i = 1; $i <= strlen($passwd); $i++) {
  $enc = $enc . chr(ord($passwd[$i - 1]) + $i);
}
$con = mysqli_connect("localhost", "root", "", "learneasy");
if (!$con) {
  die("Connnection Error" . mysqli_connect_error());
}
$UN;
$result = $con->query("SELECT `ID`, `Email`,`UPassword`, `UserName` FROM `userinfo`");
$status = "False";
$id;
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    if ($row["Email"] == $email) {
      if (substr($row['UPassword'], 6, strlen($enc)) == $enc) {
        $status = "True";
        $id = $row['ID'];
        $UN=$row['UserName'];
      }
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="../CSS/sign-up.css">
  <link rel="stylesheet" href="../CSS/navbar.css">
  <script src="https://kit.fontawesome.com/0f60051df1.js" crossorigin="anonymous"></script>

  <script>
    if ("<?php echo $status; ?>"=="True") {
        localStorage.setItem("Status", "Successful");
        localStorage.setItem("UN", "<?php echo isset($UN)?$UN:"";?>");
        localStorage.setItem('userId',<?php echo $id;?>);
        window.location.href = "../index.php?userId=<?php echo isset($id)?$id:""; ?>";
      }
    function SignIn() {
      window.location.href = "../sign-in.php";
    }
  </script>
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
          <h5 class="modal-title">Sign In</h5>
        </div>
        <div class="modal-body">
          <p>Invalid Credentials</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-dark" onclick="SignIn()" data-bs-dismiss="modal">Ok</button>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>