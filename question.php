<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/question.css">
    <link rel="stylesheet" href="CSS/navbar.css">
    <?php
    $arr = array();

    $db = $_GET['subject'];
    $tb = $_GET['topic'];
    $con = mysqli_connect("localhost", "root", "", $db);

    if (!$con) {
        die("Error : " . mysqli_connect_error());
    }
    $result = $con->query("SELECT qnumber,question,option1,option2,option3,option4,answer FROM $tb");
    $tdata = $result->num_rows;
    for ($i = 0; $i < $result->num_rows; $i++) {
        $temp = array();
        $row = $result->fetch_assoc();
        array_push($temp, $row['qnumber'], $row['question'], $row['option1'], $row['option2'], $row['option3'], $row['option4'], $row['answer']);
        array_push($arr, $temp);
    }

    ?>
<script>
    if(localStorage.getItem('Status')!="Successful"){
      window.location.href="index.php";
    }
  </script>


</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-fixed sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand logo-container">
                <img class="logo" src="img/light-logo.png">
                <p>Learn Easy</p>
            </a>
        </div>
    </nav>
    <div class="container bg">
        <div class="row">
            <div class="timer col-12 float-end mt-2"><label id="timer-m"></label><label id="timer-s"></label></div>
        </div>
        <div id="question_container" >

        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <button class="s-btn mb-2 mb-md-4" onclick="submitExam()">Submit Test</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        //score calculation part is remaining 
        var total_data = <?php echo $tdata; ?>;
        var data = <?php echo json_encode($arr) ?>;
        idvar = 0;
        for (i = 0; i < total_data; i++) {
            document.getElementById("question_container").innerHTML += `
            <div class="question">
                <label id="questionNumber">${data[i][0]} &nbsp;</label>
                <label id="question">${data[i][1]}</label>
            </div>

            <div class="options">
                <div class="op">
                    <input type="radio" name="option${i}" id="ans${++idvar}" value="${data[i][2]}"><label id="op${idvar}">${data[i][2]}</label>
                </div>
                <div class="op">
                    <input type="radio" name="option${i}" id="ans${++idvar}" value="${data[i][3]}"><label id="op${idvar}">${data[i][3]}</label>
                </div>
                <div class="op">
                    <input type="radio" name="option${i}" id="ans${++idvar}" value="${data[i][4]}"><label id="op${idvar}">${data[i][4]}</label>
                </div>
                <div class="op">
                    <input type="radio" name="option${i}" id="ans${++idvar}" value="${data[i][5]}"><label id="op${idvar}">${data[i][5]}</label>
                </div>
            </div>
        `;
        }

        function submitExam() {
            score = 0;
            idvar = 0;
            for (i = 0; i < total_data; i++) {
                r1 = document.getElementById(`ans${++idvar}`);
                r2 = document.getElementById(`ans${++idvar}`);
                r3 = document.getElementById(`ans${++idvar}`);
                r4 = document.getElementById(`ans${++idvar}`);
                if(r1.checked){
                    if(r1.value==data[i][6]){
                        score+=1;
                    }
                }
                if(r2.checked){
                    if(r2.value==data[i][6]){
                        score+=1;
                    }
                }
                if(r3.checked){
                    if(r3.value==data[i][6]){
                        score+=1;
                    }
                }
                if(r4.checked){
                    if(r4.value==data[i][6]){
                        score+=1;
                    }
                }
            }
            localStorage.setItem("score",score); 
            window.location.href=`./result.php?userId=${localStorage.getItem('userId')}`;
        }

        m=30;
        s=00;

        setInterval(function(){
            if(m==0 && s==0){
                submitExam();
            }
            if(s==0){
                m-=1;
                document.getElementById("timer-m").innerHTML=m+" : ";
                s=60;
                document.getElementById("timer-s").innerHTML=s;
            }
            else{
                s-=1;
                document.getElementById("timer-s").innerHTML=s;
            }
        },1000);
    </script>
</body>

</html>