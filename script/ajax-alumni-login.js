var xmlhttpB=GetXmlHttpObjectB();
function GetXmlHttpObjectB()
{
	if (window.XMLHttpRequest)
    {
	  // code for IE7+, Firefox, Chrome, Opera, Safari
	  return new XMLHttpRequest();
	}
	if (window.ActiveXObject)
	{
	  // code for IE6, IE5
	  return new ActiveXObject("Microsoft.XMLHTTP");
	}
	return null;
}
function stateChangedB()
{
if (xmlhttpB.readyState==4)
  {
	  var httpDoc=xmlhttpB.responseText;
	  if(httpDoc=="LOGIN_SUCCESS")
	  {
		  //clearFormA();
	  	  document.getElementById("al_busystatus").style.display="none";
		  document.getElementById("al_submit").style.display="inline-block";
		  document.getElementById("al_feedback").className="formfeedbackmsggreen";
		  document.getElementById("al_feedback").innerHTML="You have been successfully logged in! You are being redirected to your User Home...";
		  //doAlumniYearView();
		  setTimeout('window.location="user-home.php";',2000);
	  }
	  else
	  {
	  	  document.getElementById("al_busystatus").style.display="none";
		  document.getElementById("al_submit").style.display="inline-block";
		  document.getElementById("al_feedback").className="formfeedbackmsgred";
		  document.getElementById("al_feedback").innerHTML=httpDoc;
	  }
	  
  }
}
function doAlumniLogin()
{
	email=document.getElementById("al_email").value;
	password=document.getElementById("al_password").value;
	
	if (email.length==0 || password.length==0) { document.getElementById("al_feedback").innerHTML="One or more of the required fields are empty!"; return; }
	if (xmlhttpB==null) { return; }
	document.getElementById("al_submit").style.display="none";
	document.getElementById("al_busystatus").style.display="inline-block";
	var url="login-server.php";
	var params="email="+email+"&password="+password;
	params+="&rand="+Math.random();
	xmlhttpB.onreadystatechange=stateChangedB;
	xmlhttpB.open("POST",url,true);
	xmlhttpB.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttpB.setRequestHeader("Content-length", params.length);
	xmlhttpB.setRequestHeader("Connection", "close");
	xmlhttpB.send(params);	
}
