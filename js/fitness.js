

var myIndex = 0;
carousel();

/*slideshow*/
function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2500); // Change image every 2 seconds
}

function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $("#blah").attr('src', e.target.result);
    };

    reader.readAsDataURL(input.files[0]);
  }
}


/* check password is mathched or not*/
function checkPasswords(){
    if(document.getElementById("pwd").value != document.getElementById("rpwd").value){
        alert("Passwords are mismatched!");
        return false;
    }
    else{
        alert("Passwords matched!");
        return true;
    }
}
/*password must contain simple letter,capital letter,number,exceed the given length*/
var myInput = document.getElementById("pwd");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

/*chek for lower case letter*/
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) { 
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}
/*check for uppercase letter*/
 var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) { 
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }
  /*check for numbers*/
    var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) { 
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  /*chek for length of the password*/
    if(myInput.value.length >= 5 && myInput.value.length <= 10) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
/*confirm password*/
var password=
document.getElementById("password");
 confirm_pwd=
document.getElementById("confirm_psw");


password.onchange = validatePassword;
confirm_psw.onkeyup = validatePassword;

function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}


