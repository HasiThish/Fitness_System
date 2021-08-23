function forget()
{
	var img=document.getElementById('userpic');
	img.remove();

	document.getElementById('topic').innerHTML="Forget Password";

	document.getElementById('user').style.position = "absolute%";
	document.getElementById('user').style.left = "44%";
	document.getElementById('user').style.top = "40%";

	document.getElementById('usern').innerHTML="Get a verification code";

	var para = document.createElement("p");
	para.innerHTML = "To get a verification code, first <br>confirm the recovery email address <br>you added to your account.";
	document.getElementById('usern').appendChild(para);
	para.style.fontSize="small";

	document.getElementsByTagName("input")[0].setAttribute("type", "email");
	document.getElementById('uname').placeholder="email";

	var pwd=document.getElementById('para2');
	pwd.remove();
	document.getElementById('link').remove();

	document.getElementById('btn').innerHTML="Send";

	var linklogin = document.createElement("a");
	linklogin.innerHTML = "<br><br>Login";
	document.getElementById('signin').appendChild(linklogin);
	linklogin.href="login.html";

}