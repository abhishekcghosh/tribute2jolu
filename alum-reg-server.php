<?php
	function sendMail($emailid,$pass)
	{
		//send mail
			$sender = $emailid;
			$passwd = $pass;
			$receiver = "mail@tribute2jolu.com";
			$client_ip = $_SERVER['REMOTE_ADDR'];
			$email_body_auto_reply = "Hello, \n\nThis is the auto-reply message. Thank you for your registration on the Tribute 2 Jolu website.\n\nYou will shortly be able to log in on our website using the following credentials:\n\nUsername(Email): $sender\nPassword: $passwd\n\nYou are requested to log in and change the password to something suitable as soon as possible.\n\nThank You,\nAdmin\nwww.tribute2jolu.com";
			$extra_auto_reply = "From: mail@tribute2jolu.com\r\nReply-To: " . stripslashes($receiver) . "\r\n" . "X-Mailer: PHP/" . phpversion();
			mail( $sender, "Tribute 2 Jolu :: Registration - Auto-reply", $email_body_auto_reply, $extra_auto_reply );
	}
?>
<?php 
	require_once('module-config.php');
	require_once('module-sql-connect.php'); 

	$firstname=addslashes(strip_tags(trim($_POST['fname'])));
	$lastname=addslashes(strip_tags(trim($_POST['lname'])));
	$collegenick=addslashes(strip_tags(trim($_POST['nick'])));
	$yearofpassing=addslashes(strip_tags(trim($_POST['year'])));
	$department=addslashes(strip_tags(trim($_POST['dept']))); 
	
	$dobd=addslashes(strip_tags(trim($_POST['dobd']))); 
	$dobm=addslashes(strip_tags(trim($_POST['dobm']))); 
	$doby=addslashes(strip_tags(trim($_POST['doby']))); 
	
	$gender=addslashes(strip_tags(trim($_POST['gend']))); 
	$presentcity=addslashes(strip_tags(trim($_POST['pcty']))); 
	$presentcountry=addslashes(strip_tags(trim($_POST['pcnt']))); 
	
	$address=addslashes(strip_tags(trim($_POST['addr']))); 
	$phone1=addslashes(strip_tags(trim($_POST['phn1']))); 
	$phone2=addslashes(strip_tags(trim($_POST['phn2']))); 
	
	$email1=addslashes(strip_tags(trim($_POST['eml1']))); 
	$email2=addslashes(strip_tags(trim($_POST['eml2']))); 
	
	$presentindustry=addslashes(strip_tags(trim($_POST['pind']))); 
	$hdcc=addslashes(strip_tags(trim($_POST['hdcc']))); 
	
	$comps = array($hdcc);
	$froms = array($hdcc);
	$tos = array($hdcc);
	
	$i=0;
	for($i=1;$i<=$hdcc;$i++)
	{
		$comps[$i-1]=addslashes(strip_tags(trim($_POST['cmn' . $i]))); 
		$froms[$i-1]=addslashes(strip_tags(trim($_POST['cmf' . $i]))); 
		$tos[$i-1]=addslashes(strip_tags(trim($_POST['cmt' . $i]))); 		
	}
	
	$password=substr(md5(rand(0,1000000)),1,10);
	//$password='password';
	$md5password=md5($password);
	
	$flag_incomplete=0;
	$flag_sqlfail=0;
	$flag_emailid=0;
	$flag_exists=0;
	
	if($firstname=='' || $lastname=='' || $yearofpassing=='' || $department=='' || $dobd=='' || $dobm=='' || $doby=='' || $gender=='' ||  $presentcity=='' || $address=='' || $phone1=='' || $email1=='' || $presentindustry=='')
	{
		$flag_incomplete=1;
		$err_occured=1;
	}
	if (!filter_var($email1, FILTER_VALIDATE_EMAIL))
	{
		$flag_emailid=1;
		$err_occured=1;
	}
	if ($email2!="" && !filter_var($email2, FILTER_VALIDATE_EMAIL))
	{
		$flag_emailid=1;
		$err_occured=1;
	}
	$dobdate=$doby . "/" . $dobm . "/" . $dobd;
	
	$tbl_name=__SQL_TABLE_PREFIX__ . "alumreg";
	$sql_query="SELECT count(*) AS existing FROM $tbl_name WHERE email1='$email1'";
	$query_result=mysql_query($sql_query);
	$row=mysql_fetch_array($query_result);
	if($row['existing']>0)
	{
		$err_occured=1;
		$flag_exists=1;
	}
	if($err_occured!=1)
	{
		$tbl_name=__SQL_TABLE_PREFIX__ . "alumreg";
		$sql_query="INSERT INTO $tbl_name(firstname,lastname,collegenick,yearofpassing,department,dob,gender,presentcity,presentcountry,contactaddress,email1,email2,phone1,phone2,presentindustry,md5password,siteprivilege) VALUES('$firstname','$lastname','$collegenick','$yearofpassing','$department','$dobdate','$gender','$presentcity','$presentcountry','$address','$email1','$email2','$phone1','$phone2','$presentindustry','$md5password','GENERAL')";
		$query_result=mysql_query($sql_query);
		if(!$query_result)
		{
			$flag_sqlfail=1;
			$err_occured=1;
		}
		else
		{
			$tbl_name=__SQL_TABLE_PREFIX__ . "alumcompanies";
			for($i=0;$i<$hdcc;$i++)
			{
				$sql_query="INSERT INTO $tbl_name(alumemail1,companyname,workedfrom,workedto) VALUES('$email1','$comps[$i]','$froms[$i]','$tos[$i]')";
				if($comps[$i]!="")
				{
					$query_result=mysql_query($sql_query);
				}
			}
			$message='';
			@sendMail($email1,$password);
		}
	}
	mysql_close($con);
	$err_string="";
	if($err_occured==1)
	{
		if($flag_sqlfail==1 || $flag_confail==1)
		{
			$err_string='Registration failed due to technical problem. Sorry for the inconvenience. Please try again later.';
		}
		else if($flag_incomplete==1)
		{
			$err_string='One or more fields empty!';
		}
		else if($flag_exists==1)
		{
			$err_string='A registered member with same email address already exists! Please provide an unique email address.';
		}
		else if($flag_emailid==1)
		{
			$err_string='The email address you provided is invalid. Please provide a valid email address!';
		}
	}
	else
	{
		$err_string='REG_SUCCESS';
	}
	echo $err_string;
?>
