<?php
	session_start();														//Starting Session to obtain data
	if(isset($_SESSION['t2j_username']))
	{
		//Logged In User's Data
		$li_user=$_SESSION['t2j_username'];							//Email ID
		$li_uid=$_SESSION['t2j_uid'];								//Internal Member ID
		$li_privilege=strtoupper($_SESSION['t2j_privilege']);		//User Privilege Level
		$li_firstname=$_SESSION['t2j_firstname'];
		$li_lastname=$_SESSION['t2j_lastname'];
	}
	else
	{
		//Guest User (No Login)
		$li_user='Guest';													//Guest Name
		$li_uid=0;															//None
		$li_privilege='GUEST';												//Guest User Privilege
		$li_firstname='Guest';
		$li_lastname='';
	}
?>
