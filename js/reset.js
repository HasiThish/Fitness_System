
/* check password is mathched or not*/

function checkPassword(){
  if (document.getElementById("pwd").value != document.getElementById("conpwd").value) {
    alert ("Password Mismatch!");
    return false;
  }
  else
    alert ("Success!");
    return true;
}





