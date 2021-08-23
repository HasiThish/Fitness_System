function tog(id) {
	if (id=="btn1") {
  var x = document.getElementById("gad");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
    x.style.transition = "0.5s;"
  }
}
else if (id=="btn2") {
	var y = document.getElementById("gad1");
  if (y.style.display === "block") {
    y.style.display = "none";
  } else {
    y.style.display = "block";
  }
}
}