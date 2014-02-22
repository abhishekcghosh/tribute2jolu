<?php

	//MySQL Server Access Key CONSTANTS							
	define("__SQL_HOST__","localhost",true);								//Server Hostname to MySQL Server
	define("__SQL_USERNAME__","ENTER_USERNAME",true);						//MySQL System Username for the site
	define("__SQL_PASSWORD__","ENTER_PASSWORD",true);						//MySQL System user's Password for the site
	define("__SQL_DBNAME__","ENTER_DATABASENAME",true);						//MySQL Database name for the site
	define("__SQL_TABLE_PREFIX__","t2j_",true);								//MySQL Table name prefix for the site db
	
	//Site Specification CONSTANTS
	define("__SITE_ADMINEMAIL__","tribute2jolu@gmail.com",true);			//Site Admin's Email Address (INTERNAL, DEVELOPMENT FUNCTIONS), where error-reports, feedback etc. will go
	define("__SITE_WEBADDRESS__","http://www.tribute2jolu.com/",true);				//Absolute website address, ** with trailing / **

	//Date/Time Default Format/Offset CONSTANTS
	date_default_timezone_set("Asia/Calcutta");								//default timezone
	define("__DATE_FORMAT_IP__","Y-m-d H:i:s",true);						//Input  (MySQL Server's accepted format)
	define("__DATE_FORMAT_OP__","d F Y, h:i a",true);						//Output (what looks good to people...)
	define("__DATE_FORMAT_OP_NT__","d F Y",true);							//Output (what looks good to people...)
	define("__TIME_OFFSET_HOUR__","0",true);								//Default hour offset to add to server time while displaying
	define("__TIME_OFFSET_MINUTE__","0",true);								//Default minute offset to add to server time while displaying
	
?>
