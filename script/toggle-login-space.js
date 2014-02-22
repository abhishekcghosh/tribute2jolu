function toggleLoginSpace(value)
{
	if(value==1)
	{
		$("#header_table").css("top","0px");
		$("#toggleButtonOn").css("display","none");
		$("#toggleButtonOff").css("display","inline-block");
		$("#nubsTipsContent").html("Slide up the Login Panel");
	}
	else
	{
		$("#header_table").css("top","-220px");
		$("#toggleButtonOff").css("display","none");
		$("#toggleButtonOn").css("display","inline-block");
		$("#nubsTipsContent").html("Slide down the Login Panel");
	}	
}
function toggleTip(value)
{
	if(value==1)
	{
		$("#nubsTips").css("opacity","1");
	}
	else
	{
		$("#nubsTips").css("opacity","0");
	}
}