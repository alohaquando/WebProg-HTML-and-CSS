function login() {
	var uname = document.getElementById("email").value;
	var pwd = document.getElementById("pwd1").value;
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if(uname =='')
	{
		alert("Please Enter An Username.");
	}
	else if(pwd=='')
	{
		alert("Please Enter A Valid Password!");
	}
	else if(!filter.test(uname))
	{
		alert("Please Enter A Valid Email!");
	}
	else if(pwd.length < 8 || pwd.length > 8)
	{
		alert("Password min and max length is 8.");
	}
	else
	{
		alert('Thank You for Login & You are Redirecting to Marché! Mall Website');
		//Redirecting to other page or webste code or you can set your own html page.
		window.location = "5.1.7 My-account-Logged-in.html";
	}
}

function clearFunc() {
	document.getElementById("email").value="";
	document.getElementById("pwd1").value="";
}