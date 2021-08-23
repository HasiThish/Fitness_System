function GetAcc() {
  document.getElementById("i1").src = "images/A2.png";
  document.getElementById("i2").src = "images/A16.png";				
  document.getElementById("i3").src = "images/A6.png";
  document.getElementById("i4").src = "images/A7.png";
  document.getElementById("i5").src = "images/A13.png";
  document.getElementById("i6").src = "images/A14.png";
  document.getElementById("i7").src = "images/A3.png";
  document.getElementById("i8").src = "images/A17.png";
  document.getElementById("i9").src = "images/A18.png";
  var current = document.getElementsByClassName("act");
  current[0].className = current[0].className.replace("act", "");
  var current1 = document.getElementsByClassName("num");
  current1[0].className = current1[0].className.replace("num", "act");
}
function GetBars() {
  document.getElementById("ii1").src = "images/B4.png";
  document.getElementById("ii2").src = "images/B16.jpg";
  document.getElementById("ii3").src = "images/B6.png";
  document.getElementById("ii4").src = "images/B7.png";
  document.getElementById("ii5").src = "images/B13.jpg";
  document.getElementById("ii6").src = "images/B14.jpg";
  document.getElementById("ii7").src = "images/B3.png";				
  document.getElementById("ii8").src = "images/B17.jpg";
  document.getElementById("ii9").src = "images/B18.jpg";
   var current = document.getElementsByClassName("act");
  current[0].className = current[0].className.replace("act", "");
  var current1 = document.getElementsByClassName("num");
  current1[0].className = current1[0].className.replace("num", "act");
}
function GetMach() {
  document.getElementById("j1").src = "images/C7.png";
  document.getElementById("j2").src = "images/C8.png";				
  document.getElementById("j3").src = "images/C9.png";
  document.getElementById("j4").src = "images/C10.png";
  document.getElementById("j5").src = "images/C11.png";
  document.getElementById("j6").src = "images/C12.jpg";
   var current = document.getElementsByClassName("act");
  current[0].className = current[0].className.replace("act", "");
  var current1 = document.getElementsByClassName("num");
  current1[0].className = current1[0].className.replace("num", "act");
}