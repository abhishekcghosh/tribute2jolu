function updateDates()
{
	var dobd=document.getElementById("ar_dobd");
	var m=document.getElementById("ar_dobm").value;
	dobd.innerHTML="";
	var dmax=30;
	switch(m)
	{
		case '1','3','5','7','8','10','12':
			dmax=31;
			break;												
		case '4','6','9','11':
			dmax=30;
			break;
		case '2':
			if(isleap(document.getElementById("ar_doby").value)==true)
				dmax=29;
			else
				dmax=28;
			break;
		default:
			dmax=30;
	}
	var d;
	for(d=1;d<=dmax;d++)
	{
		dobd.innerHTML+="<option>"+d+"</option>";
	}
	dobd.style.color="#f00";
}
function updateDatesLeapYr()
{
	var dobd=document.getElementById("ar_dobd");
	if(document.getElementById("ar_dobm").value=="2")
	{
		dobd.innerHTML="";
		if(isleap(document.getElementById("ar_doby").value)==true)
		{	
			for(d=1;d<=29;d++)
			{
				dobd.innerHTML+="<option>"+d+"</option>";
			}
		}
		else
		{
			for(d=1;d<=28;d++)
			{
				dobd.innerHTML+="<option>"+d+"</option>";
			}
		}
		dobd.style.color="#f00";
	}
}
function clearColor()
{
	document.getElementById("ar_dobd").style.color="#000";
}
function isleap(yr)
{	 
	 if ((parseInt(yr)%4) == 0)
	 {
	  if (parseInt(yr)%100 == 0)
	  {
		if (parseInt(yr)%400 != 0)
		{
		//alert("Not Leap");
		return false;
		}
		if (parseInt(yr)%400 == 0)
		{
		//alert("Leap");
		return true;
		}
	  }
	  if (parseInt(yr)%100 != 0)
	  {
		//alert("Leap");
		return true;
	  }
	 }
	 if ((parseInt(yr)%4) != 0)
	 {
		//alert("Not Leap");
		return false;
	 } 
}