function userinfo(){
    let uinfobox=document.querySelector(".userinfo-box");
    if(uinfobox.style.display=="flex"){
        uinfobox.style.display="none";
    }
    else{
        uinfobox.style.display="flex";
    }
}
function submitSubject(){
    var subject=document.getElementById("subject").value;
    var topic=document.getElementById("topic");
    var topicBtn=document.getElementById("topicBtn");
    var subjectTopic=[["AI","Introduction to AI","Problem Solving","Adversarial Search and Games","Knowledge","Reasoning","Planning"],
    ["WT","Web Essentials and Mark-up language- HTML","Client Side Technologies: JavaScript and DOM","Java Servlet and XML","JSP and Web Services","Server Side Sripting Languages","Ruby and Rails"],
    ["DSBDA","Introduction to Data Science and Big Data","Statistical Inference","Big Data Analytics Life Cycle","Predictiv Big Data Analytics with Python","Big Data Analytis and Model Evaluation","Data Visualization and Hadoop"],
    ["IS","Introduction to Information Security","Symmetric Key Cryptogaphy","Asymmetric Key Cryptography","Data Integrity Algorithms and Web Security ","Network and System Security","Cyber Security and Tools"]];

    for(i=0;i<4;i++){
        if(subjectTopic[i][0]==subject){
            topic.removeAttribute("disabled");
            topicBtn.removeAttribute("class");
            topicBtn.setAttribute("class","btn btn-dark");
            document.getElementById("t1").innerHTML=subjectTopic[i][1];
            document.getElementById("t2").innerHTML=subjectTopic[i][2];
            document.getElementById("t3").innerHTML=subjectTopic[i][3];
            document.getElementById("t4").innerHTML=subjectTopic[i][4];
            document.getElementById("t5").innerHTML=subjectTopic[i][5];
            document.getElementById("t6").innerHTML=subjectTopic[i][6];
            break;
        }
    }
}
function submitSubjectTopic(){
    var subject=document.getElementById("subject").value;
    var topic=document.getElementById("topic").value;
    if(subject!="" && topic!=""){
        window.location.href=`./question.php?subject=${subject.toLowerCase()}&topic=${topic}`;
    }
}
function signout(){
    localStorage.clear();
    window.location.href="./index.php";
}

 if(localStorage.getItem("Status")=="Successful"){
    let userbtn=document.querySelector("#user");
    userbtn.style.display="block";
 }