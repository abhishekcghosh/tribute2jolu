<?php
	
	session_start();									//start session to access session info
	unset($_SESSION['t2j_username']);				//delete logged in user's Email ID info
	unset($_SESSION['t2j_mid']);				//delete logged in user's Email ID info
	unset($_SESSION['t2j_privilege']);				//delete logged in user's privilege info
	unset($_SESSION['t2j_firstname']);				//delete logged in user's Email ID info
	unset($_SESSION['t2j_lastname']);				//delete logged in user's Email ID info
	
	session_destroy();									//destroy session completely
	header("location: home.php");				//go to home page
	
?>
