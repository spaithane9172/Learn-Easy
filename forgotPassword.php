<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="./CSS/forgotPassword.css">
  <link rel="stylesheet" href="CSS/navbar.css">
  <script src="https://kit.fontawesome.com/0f60051df1.js" crossorigin="anonymous"></script>
  <script src="./JS/index.js"></script>
  <script src="./JS/sign-in.js"></script>
</head>

<body>
  <script>
    if (localStorage.getItem('Status') == "Successful") {
      window.location.href = "index.php";
    }

    function forgotPassword() {
      id="<?php echo isset($_GET['userId'])?$_GET['userId']:"";?>";
      passw = document.getElementById("password").value;
      cpassw = document.getElementById("cpassword").value;
      if (passw.length < 8) {
        document.getElementById("error").innerHTML = "Password Length must be 8 ";
      } else if (!(passw == cpassw)) {
        document.getElementById("error").innerHTML = "Password and Confirm Password does not match ";
      } else {
        alert("done");
        window.location.href = `./php/fPassword.php?p=${passw}&userId=${id}`;
      }
      event.preventDefault();
    }
  </script>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand logo-container" href="./index.php">
        <img class="logo" src="img/light-logo.png">
        <p>Learn Easy</p>
      </a>

      <button class="navbar-toggler color-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-5">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
          <li class="nav-item sl-btn">
            <a class="nav-link" href="#">Start Learning</a>
          </li>
        </ul>
        <div class="d-flex justify-content-center align-items-center">
          <button class=" btn btn-sm btn-outline-light fw-bold" onclick="SignIn()" type="submit">Sign In</button>
        </div>
      </div>
    </div>
  </nav>

  <div class="container-fluid d-flex justify-content-center align-items-center">
    <div class="form-box mb-4">
      <div class="row">
        <div class="row mt-2 mt-md-3">
          <div class="col-12 d-flex justify-content-center align-items-center">
            <form method="post" class="d-flex justify-content-center align-items-center flex-column">
              <div class="errorbox">
                <p id="error"></p>
              </div>
              <div class="password-in mb-md-4">
                <i class="fa-solid fa-key"></i>
                <input id="password" name="Passw" placeholder="Enter Password" type="password">
                <label><i id="eye" onclick="show_hide()" class="fa-solid fa-eye"></i>
                  <i id="eye-slash" onclick="show_hide()" class="fa-solid fa-eye-slash"></i></label>
              </div>
              <div class="password-in mb-3 mb-md-4">
                <i class="fa-solid fa-key"></i>
                <input id="cpassword" name="Cpass" placeholder="Enter Confirm Password" type="password">
                <label><i id="cpeye" onclick="cpshow_hide()" class="fa-solid fa-eye"></i>
                  <i id="cpeye-slash" onclick="cpshow_hide()" class="fa-solid fa-eye-slash"></i></label>
              </div>
              <button class="mt-4 mb-4" onclick="forgotPassword()">Forgot Password</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>