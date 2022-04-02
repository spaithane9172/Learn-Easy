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
let dropdown_status=true;
let question="";
function question1(){
    question="What is the name of your first pet?";
    dropdown();
}
function question2(){
    question="What was your first car?";
    dropdown();
}
function question3(){
    question="What elementary school did you attend?";
    dropdown();
}
function question4(){
    question="What is the name of the town where you were born?";
    dropdown();
}
function question5(){
    question="What is your mother's maiden name?";
    dropdown();
} 
function dropdown(){
    let dropdownlist=document.querySelector("#dropdownlist");
    let dropdowntitle = document.querySelector("#dropdowntitle label");
    console.log("object")
    
    if(dropdown_status){
        dropdownlist.style.display="block";
        dropdown_status=false;
    }
    else{
        dropdownlist.style.display="none";
        dropdown_status=true;
    }
    if(question=="What is the name of your first pet?"){
        dropdowntitle.innerHTML=question;
    }
    else if(question=="What was your first car?"){
        dropdowntitle.innerHTML=question;
    }
    else if(question=="What elementary school did you attend?"){
        dropdowntitle.innerHTML=question;
    }
    else if(question=="What is the name of the town where you were born?"){
        dropdowntitle.innerHTML=question;
    }
    else if(question=="What is your mother's maiden name?"){
        dropdowntitle.innerHTML=question;
    }
}