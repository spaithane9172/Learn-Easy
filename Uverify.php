
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

<body>
    <script>
        if (localStorage.getItem('Status') == "Successful") {
            window.location.href = "index.php";
        }

        function Uverify() {
            email=document.getElementById("Email").value;
            selectv=document.getElementById("question").value;
            ans=document.getElementById("answer").value;

            if (!email.includes("@") || !email.includes(".") || email.length < 7) {
                document.getElementById("error").innerHTML = "Enter Correct Email Id";
            } else if (selectv == "question1") {
                document.getElementById("error").innerHTML = "Select Security Question";
            } else if (ans.length == 0) {
                document.getElementById("error").innerHTML = "Enter Security Question Answer";
            } else {
                window.location.href = `./php/UserVerify.php?Email=${email}&SecurityQ=${selectv}&sqanswer=${ans}`;
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
                            <div class="email-in mb-md-4">
                                <i class="fa-solid fa-envelope"></i>
                                <input placeholder="Enter Email" name="Email" id="Email" type="email">
                            </div>
                            <div class="dropdown pb-2 mb-md-4 d-flex justify-content-between">
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
                            <div class="email-in mb-md-4">
                                <input placeholder="Enter Answer" id="answer" name="sqanswer" type="text">
                            </div>
                            <button class="mt-4 mb-4" onclick="Uverify()">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>