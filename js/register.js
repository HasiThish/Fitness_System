function rand(captcha_str,fin){
            captcha_str="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*()_+{}:,./;][=-";
            fin=Math.floor(Math.random()*captcha_str.length);
            for(let i=0; i<6; i++){
                fin+=captcha_str[Math.floor(Math.random()* 85)];
            }
            //console.log(captcha_str.length);
            return fin;
        }
function validate(){
    var input=document.getElementById("input"),
        check=document.getElementById("checked"),
        valid=document.getElementById("output");
    if(check.checked==true&&input.value===doc.textContent){
        doc.innerHTML=(rand());
        valid.style.display="block";
        valid.style.color="#090";
        valid.style.border="solid 1px #090";
        valid.style.backgroundColor="rgba(0,170,0,0.15)";
        valid.innerHTML=("Valid Captcha! Redirecting....");
    }else{
        doc.innerHTML=(rand());
        valid.style.display="block";
        valid.style.color="#900";
        valid.style.border="solid 1px #900";
        valid.style.backgroundColor="rgba(170,0,0,0.15)";
        valid.innerHTML=("Invalid Captcha! Try agian!");
    }
}
function results(){
    var fname=document.getElementById('fname').value;
    var lname=document.getElementById('lname').value;
    var tp=document.getElementById('tp').value;
    var email=document.getElementById('email').value;
    var age=document.getElementById('age').value;

    document.write("<h1>Thank You!</h1>");
    document.write("<p>Your data have recieved successfully.</p>");

    document.write("<h3>Here is your data:</h3>");

    document.write(fname +"<br>");
    document.write(lname +"<br>");
    document.write(tp +"<br>");
    document.write(email +"<br>");
    document.write(age +"<br>");
}

