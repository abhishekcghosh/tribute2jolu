<?php
	require_once('module-config.php');
	require_once('module-sql-connect.php');
	require_once('module-date-func.php');
	
	function EncodeCSVField($string) {
	    if(strpos($string, ',') !== false || strpos($string, '"') !== false || strpos($string, "\n") !== false)
		{
			$string = '"' . str_replace('"', '""', $string) . '"';
		}
    	return $string;
	}	
	
?>
<?php
	if(isset($_POST['password']))
	{
		if($_POST['password']=='jT12.jolu38')
		{
			//access
			
				header("Content-type: application/csv");
				header("Content-Disposition: attachment; filename=t2j_copy_of_regd_list.csv");
				header("Pragma: no-cache");
				header("Expires: 0");
			
				echo "Registration #,";
				echo "Firstname,";
				echo "Lastname,";
				echo "College Nickname,";
				echo "Year of Passing,";
				echo "Department,";
				echo "Date of Birth,";
				echo "Gender,";
				echo "Present City,";
				echo "Present Country,";
				echo "Contact Address,";
				echo "Primary Email,";
				echo "Secondary Email,";
				echo "Phone 1,";
				echo "Phone 2,";
				echo "Present Industry,";
				echo "Companies Worked";
				echo "\n";
			
                $tbl_name=__SQL_TABLE_PREFIX__ . "alumreg";
				$sql_query="SELECT * FROM $tbl_name";
				$query_result=mysql_query($sql_query);
				while($row=mysql_fetch_array($query_result))
                {
					$aid = stripslashes($row['aid']);
					$firstname = stripslashes($row['firstname']);
					$lastname = stripslashes($row['lastname']);
					$collegenick = stripslashes($row['collegenick']);
					$yearofpassing = stripslashes($row['yearofpassing']);
					$department = stripslashes($row['department']);
					$dob = stripslashes($row['dob']);
					$gender = stripslashes($row['gender']);
					$presentcity = stripslashes($row['presentcity']);
					$presentcountry = stripslashes($row['presentcountry']);
					$contactaddress = stripslashes($row['contactaddress']);
					$email1 = stripslashes($row['email1']);
					$email2 = stripslashes($row['email2']);
					$phone1 = stripslashes($row['phone1']);
					$phone2 = stripslashes($row['phone2']);
					$presentindustry = stripslashes($row['presentindustry']);
					
					echo EncodeCSVField($aid) . ",";
					echo EncodeCSVField($firstname) . ",";
					echo EncodeCSVField($lastname) . ",";
					echo EncodeCSVField($collegenick) . ",";
					echo EncodeCSVField($yearofpassing) . ",";
					echo EncodeCSVField($department) . ",";
					echo EncodeCSVField(date_ip_to_op($dob,"n")) . ",";
					echo EncodeCSVField($gender) . ",";
					echo EncodeCSVField($presentcity) . ",";
					echo EncodeCSVField($presentcountry) . ",";
					echo EncodeCSVField($contactaddress) . ",";
					echo EncodeCSVField($email1) . ",";
					echo EncodeCSVField($email2) . ",";
					echo EncodeCSVField($phone1) . ",";
					echo EncodeCSVField($phone2) . ",";
					echo EncodeCSVField($presentindustry) . ",";
					
						$tbl_name2=__SQL_TABLE_PREFIX__ . "alumcompanies";
						$sql_query2="SELECT * FROM $tbl_name2 WHERE alumemail1='$email1'";
						$query_result2=mysql_query($sql_query2);
						$clist="";
						while($row2=mysql_fetch_array($query_result2))
						{
							$cname = stripslashes($row2['companyname']);
							$wfrom = stripslashes($row2['workedfrom']);
							$wto = stripslashes($row2['workedto']);
							
							$clist = $clist . $cname . " (" . $wfrom . " - " . $wto . ")\n";
						}
					echo EncodeCSVField($clist);
					
					echo "\n";
					
					
                }
                mysql_close($con);
            ?>
            
                        
            
            <?php
			
		}
		else
		{
			?>
            <html>
            <head><title>Tribute 2 Jolu :: Registered List</title></head>
            <body>
            <form method="post" action="reglist.php">
                Password: &nbsp;
                <input name="password" type="password" value="" maxlength="32" size="30" />
                <input type="submit" value="Enter" />
            </form>
            <code style="color: #f00">WRONG PASSWORD!</code>
            </body>
            </html>
            <?php
			
		}
	}
	else 
	{
			?>
            <html>
            <head><title>Tribute 2 Jolu :: Registered List</title></head>
            <body>	
            <form method="post" action="reglist.php">
                Password: &nbsp;
                <input name="password" type="password" value="" maxlength="32" size="30" />
                <input type="submit" value="Enter" />
            </form>
            </body>
            </html>
            <?php
			
	}
?>
