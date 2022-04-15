if(localStorage.getItem("Status")=="Successful"){
    let userbtn=document.querySelector("#user");
    userbtn.style.display="block";
 }
 function userinfo(){
    let uinfobox=document.querySelector(".userinfo-box");
    if(uinfobox.style.display=="flex"){
        uinfobox.style.display="none";
    }
    else{
        uinfobox.style.display="flex";
    }
}
function show_hide(){
    var password=document.querySelector("#password");
    let eye1=document.querySelector("#eye");
    let eye2=document.querySelector("#eye-slash");
    if(password.type==="password"){
        password.type="text";
        eye1.style.display="none";
        eye2.style.display="block";
    }
    else{
        password.type="password";
        eye1.style.display="block";
        eye2.style.display="none";
    } 
}

function cpshow_hide(){
    var password=document.querySelector("#cpassword");
    let eye3=document.querySelector("#cpeye");
    let eye4=document.querySelector("#cpeye-slash");
    if(password.type==="password"){
        password.type="text";
        eye3.style.display="none";
        eye4.style.display="block";
    }
    else{
        password.type="password";
        eye3.style.display="block";
        eye4.style.display="none";
    } 
}
function isalpha(uname){
    var temp;
    for(i=0;i<uname.length;i++){
        if((uname[i]>="A" && uname[i]<="Z") || (uname[i]>="a" && uname[i]<="z") || uname[i]==" "){
            temp=true;
        }
        else{
            temp=false;
            break;
        }
    }
    return temp;
}

function profileUpdateRedirect() {
    window.location.href = `../profile.php?userId=${localStorage.getItem('userId')}`;
}
function signout(){
    localStorage.clear();
    window.location.href="./index.php";
}

function profileUpdate() {
    uname = document.getElementById("Uname").value;
    email = document.getElementById("Email").value;
    passw = document.getElementById("password").value;
    cpassw = document.getElementById("cpassword").value;
    selectv = document.getElementById("question").value;
    ans = document.getElementById("answer").value;
    if (uname.length < 3 || !isalpha(uname)) {
        document.getElementById("error").innerHTML = "Enter Correct Name";
    }
    else if (!email.includes("@") || !email.includes(".") || email.length < 7) {
        document.getElementById("error").innerHTML = "Enter Correct Email Id";
    }
    else if (passw.length < 8) {
        document.getElementById("error").innerHTML = "Password Length must be 8 ";
    }
    else if (!(passw == cpassw)) {
        document.getElementById("error").innerHTML = "Password and Confirm Password does not match ";
    }
    else if (selectv == "question1") {
        document.getElementById("error").innerHTML = "Select Security Question";
    }

    else if (ans.length == 0) {
        document.getElementById("error").innerHTML = "Enter Security Question Answer";
    }
    else {
        window.location.href = `./php/profileUpdate.php?userId=${localStorage.getItem('userId')}&Uname=${uname}&Email=${email}&Passw=${passw}&SecurityQ=${selectv}&sqanswer=${ans}`;
    }
    event.preventDefault();
} 
