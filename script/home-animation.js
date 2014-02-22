$(window).scroll(function () { 
								var cHeight=$(".college-cutout").height();
								var uPos=Math.floor(1.1*cHeight);
								var lPos=-300;
								var factor=(uPos-lPos)/cHeight;
								var docH=$(".table-content").height()+$(".table-header").height()-220;
								if($(document).scrollTop()>=docH-$(window).height()-cHeight) 
								{ 
									xtra = $(document).scrollTop()-(docH-$(window).height()-cHeight);
									amt = xtra*factor+lPos;
									amtS = Math.floor(amt) + "px";
									$("#sun").css("bottom",amt+"px");
									$("#cloud1").css("bottom",amt+"px");
									$("#cloud2").css("bottom",(amt-50)+"px");
									$("#cloud3").css("bottom",amt+"px");
								}
								else
								{
									$("#sun").css("bottom","-300px");
									$("#cloud1").css("bottom","-300px");
									$("#cloud2").css("bottom","-350px");
									$("#cloud3").css("bottom","-300px");
								} 
							});
function randomCloudPos()
{
	var r=Math.random();
	var rr=Math.floor($(window).width()*r);
	$("#cloud1").css("right",rr+"px");
	$("#cloud2").css("right",(rr+50)+"px");
	$("#cloud3").css("right",(rr+220)+"px");
	setTimeout("randomCloudPos()",5000);
}
document.addEventListener("load",randomCloudPos,true);