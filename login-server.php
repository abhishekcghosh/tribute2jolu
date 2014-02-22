<?php

	require_once('module-config.php');
	require_once('module-sql-connect.php'); 

	//Variables assigned
	$emailid=addslashes(strip_tags(trim($_POST['email'])));
	$password=addslashes(strip_tags(trim($_POST['password'])));
	$md5password=md5($password);
	
	//error string parts (flags)
	$flag_incomplete=0;
	$flag_wrong=0;
	$flag_sqlfail=0;

	//check if all data present
	if($emailid=='' || $password=='')
	{
		$flag_incomplete=1;
		$err_occured=1;
	}

	//email ID validation + password match, then login
	if($err_occured!=1)
	{	
		
		$tbl_name=__SQL_TABLE_PREFIX__ . "alumreg";
		$sql_query="SELECT COUNT(*) AS existing FROM $tbl_name WHERE email1='$emailid' AND md5password='$md5password' AND (siteprivilege<>'BLOCKED')";
		$query_result=mysql_query($sql_query);
		$result_rows=mysql_fetch_array($query_result);
		$existing_count=$result_rows['existing'];

		if($existing_count==0) 
		{
			$flag_wrong=1;
			$err_occured=1;
		}
		else
		{
			session_start();
			$_SESSION['t2j_username']=strtolower($emailid);
			$tbl_name=__SQL_TABLE_PREFIX__ . "alumreg";
			$sql_query="SELECT aid,siteprivilege,firstname,lastname FROM $tbl_name WHERE email1='$emailid'";
			$query_result=mysql_query($sql_query);
			$result_rows=mysql_fetch_array($query_result);
			$_SESSION['t2j_uid']=$result_rows['aid'];
			$_SESSION['t2j_privilege']=$result_rows['siteprivilege'];
			$_SESSION['t2j_firstname']=$result_rows['firstname'];
			$_SESSION['t2j_lastname']=$result_rows['lastname'];
		}
		
		mysql_close($con);
	}
	

	//feedback to user
	$err_string="";
	if($err_occured==1)
	{
		if($flag_sqlfail==1 || $flag_confail==1)
		{
			$err_string='Loggin in failed due to a technical problem. Sorry for the inconvenience. Please try again later.';
		}
		else if($flag_incomplete==1)
		{
			$err_string='One or more fields empty!';
		}
		else if($flag_wrong==1)
		{
			$err_string='Wrong Email address or Password combination! Please recheck and retry.';
		}
	}
	else
	{
		$err_string='LOGIN_SUCCESS';
	}
	echo $err_string;

?>