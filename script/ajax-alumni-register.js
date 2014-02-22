var xmlhttpA=GetXmlHttpObjectA();
function GetXmlHttpObjectA()
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
function stateChangedA()
{
if (xmlhttpA.readyState==4)
  {
	  var httpDoc=xmlhttpA.responseText;
	  if(httpDoc=="REG_SUCCESS")
	  {
		  clearFormA();
	  	  document.getElementById("ar_busystatus").style.display="none";
		  document.getElementById("ar_submit").style.display="inline-block";
		  document.getElementById("ar_feedback").className="formfeedbackmsggreen";
		  document.getElementById("ar_feedback").innerHTML="Thank you for your time! You have been Successfully registered!<br><br>\
		  													Please check your email address for a mail with your login details. \
															In case you don't see a mail, DO NOT FORGET to check the SPAM FOLDER.\
															<br><br>You may also want to see who others have registered. To do so, \
															please go to the <a class='feedbacklinkgreen' href='reg-zone.php'>Registered Users</a> page.";
		  //doAlumniYearView();
	  }
	  else
	  {
	  	  document.getElementById("ar_busystatus").style.display="none";
		  document.getElementById("ar_submit").style.display="inline-block";
		  document.getElementById("ar_feedback").className="formfeedbackmsgred";
		  document.getElementById("ar_feedback").innerHTML=httpDoc;
		  //alert(httpDoc);
	  }
	  
  }
}
function doAlumniRegister()
{
	fname=document.getElementById("ar_fname").value;
	lname=document.getElementById("ar_lname").value;
	nick=document.getElementById("ar_nick").value;
	year=document.getElementById("ar_year").value;
	dept=document.getElementById("ar_deptt").value;
	dobd=document.getElementById("ar_dobd").value;
	dobm=document.getElementById("ar_dobm").value;
	doby=document.getElementById("ar_doby").value;
	gend=document.getElementById("ar_gender").value;
	pcty=document.getElementById("ar_pcity").value;
	pcnt=document.getElementById("ar_pcountry").value;
	addr=document.getElementById("ar_address").value;
	eml1=document.getElementById("ar_email1").value;
	eml2=document.getElementById("ar_email2").value;
	phn1=document.getElementById("ar_phone1").value;
	phn2=document.getElementById("ar_phone2").value;
	pind=document.getElementById("ar_pindustry").value;
	hdcc=document.getElementById("ar_ccount").value;
	
	var comps=new Array(hdcc);
	var cfrom=new Array(hdcc);
	var cto=new Array(hdcc);
	var i;
	for(i=1;i<=hdcc;i++)
	{
		comps[i-1]=document.getElementById("ar_cname"+i).value;
		cfrom[i-1]=document.getElementById("ar_cyearf"+i).value;
		cto[i-1]=document.getElementById("ar_cyeart"+i).value;
	}

	if (fname.length==0 || lname.length==0 || year.length==0 || dept.length==0 || dobd.length==0 || dobm.length==0 || doby.length==0 || gend.length==0 || pcty.length==0 ||  addr.length==0 || phn1.length==0 || eml1.length==0 || pind.length==0) { document.getElementById("ar_feedback").innerHTML="One or more of the required fields are empty!"; return; }
	if (xmlhttpA==null) { return; }
	document.getElementById("ar_submit").style.display="none";
	document.getElementById("ar_busystatus").style.display="inline-block";
	var url="alum-reg-server.php";
	var params="fname="+fname+"&lname="+lname+"&nick="+nick+"&year="+year+"&dept="+dept+"&dobd="+dobd+"&dobm="+dobm+"&doby="+doby+"&gend="+gend+"&pcty="+pcty+"&pcnt="+pcnt+"&addr="+addr+"&phn1="+phn1+"&phn2="+phn2+"&eml1="+eml1+"&eml2="+eml2+"&pind="+pind+"&hdcc="+hdcc; //+"&rand="+Math.random();
	var params2="";
	for(i=1;i<=hdcc;i++)
	{
		params2+="&cmn"+i+"="+comps[i-1]+"&cmf"+i+"="+cfrom[i-1]+"&cmt"+i+"="+cto[i-1];
	}
	params+=params2+"&rand="+Math.random();
	xmlhttpA.onreadystatechange=stateChangedA;
	xmlhttpA.open("POST",url,true);
	xmlhttpA.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttpA.setRequestHeader("Content-length", params.length);
	xmlhttpA.setRequestHeader("Connection", "close");
	xmlhttpA.send(params);	
}
function clearFormA()
{
	document.getElementById("ar_fname").value="";
	document.getElementById("ar_lname").value="";
	document.getElementById("ar_nick").value="";
	document.getElementById("ar_year").selectedIndex=0;
	document.getElementById("ar_deptt").selectedIndex=0;
	document.getElementById("ar_dobd").selectedIndex=0;
	document.getElementById("ar_dobm").selectedIndex=0;
	document.getElementById("ar_doby").selectedIndex=0;
	document.getElementById("ar_gender").selectedIndex=0;
	document.getElementById("ar_pcity").value="";
	document.getElementById("ar_pcountry").value="";
	document.getElementById("ar_address").value="";
	document.getElementById("ar_email1").value="";
	document.getElementById("ar_email2").value="";
	document.getElementById("ar_phone1").value="";
	document.getElementById("ar_phone2").value="";
	document.getElementById("ar_pindustry").selectedIndex=0;
	document.getElementById("ar_ccount").value="1";
	
	document.getElementById("ar_cname1").value="";
	document.getElementById("ar_cyearf1").selectedIndex=0;
	document.getElementById("ar_cyeart1").selectedIndex=0;	
	for(i=2;i<=10;i++)
	{
		document.getElementById("ar_companyholder"+i).style.display="none";
	}
}