function SignIn(){
    window.location.href="./sign-in.php";
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
function signout(){
    localStorage.clear();
    window.location.href="./index.php";
}
 if(localStorage.getItem("Status")=="Successful"){
    let sinbtn1=document.querySelector("#signin-btn1");
    let sinbtn2=document.querySelector("#signin-btn2");
    let navbarToggler=document.querySelector(".navbar-toggler");
    let slbtn=document.querySelector("#sl-btn");
    let navlink1=document.querySelector(".nl1");
    let navlink2=document.querySelector(".nl2");
    let navlink3=document.querySelector(".nl3");
    let navlink4=document.querySelector(".nl4");
    let userbtn=document.querySelector("#user");
    userbtn.style.display="block";
    navlink1.style.display="none";
    navlink2.style.display="none";
    navlink3.style.display="none";
    navlink4.style.display="none";
    sinbtn1.style.display="none";
    sinbtn2.style.display="none";
    navbarToggler.style.display="none";
    slbtn.style.display="block";

    document.getElementById("start-msg").innerHTML="Welcome, Start Learning with Learn Easy.";
    
 }