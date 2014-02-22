<?php require_once('module-session-info.php'); ?>
<!doctype html>
<html>
<head>
<?php require_once("module-head-tag.php"); ?>
<title>Spread the Word :: Tribute 2 Jolu</title>
<script type="text/javascript" src="script/reg-datecalcs.js"></script>                                
<?php require_once('script/reg-companyscript.php'); ?>
<script type="text/javascript" src="script/ajax-alumni-register.js"></script>
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "8195cfb6-ec11-43b9-933c-c716537be847"}); </script> 
</head>
<body>
	<?php require_once("module-navbar.php"); ?>
    <table class="table-content" cellpadding="0" cellspacing="0" border="0">
    	<tr>
        	<td valign="top" align="center">
            	<!-- FIXED WIDTH TABLE -->
            	<table class="table-fixed-width" border="0">
                	<tr>
                    	<td colspan="2" height="20px">&nbsp;</td>
                    </tr>
                	<tr>
                    	<td align="left" valign="top">
                        	<p class="initiative-text">
                                <span class="sub-header">SPREAD THE WORD!</span>
                                <br><br>
                                <span class='st_sharethis_large' displayText='ShareThis'></span>
                                <span class='st_facebook_large' displayText='Facebook'></span>
                                <span class='st_twitter_large' displayText='Tweet'></span>
                                <span class='st_linkedin_large' displayText='LinkedIn'></span>
                                <span class='st_googleplus_large' displayText='Google +'></span>
                                <span class='st_blogger_large' displayText='Blogger'></span>
                                <span class='st_wordpress_large' displayText='WordPress'></span>
                                <span class='st_tumblr_large' displayText='Tumblr'></span>
                                <span class='st_delicious_large' displayText='Delicious'></span>
                                <span class='st_digg_large' displayText='Digg'></span>
                                <span class='st_reddit_large' displayText='Reddit'></span>
                                <span class='st_stumbleupon_large' displayText='StumbleUpon'></span>
                                <span class='st_email_large' displayText='Email'></span> 
                                <br>
                                'cause, Sharing is caring!
							<p>
                        	<p class="initiative-text initiative-first">
                            	<span class="sub-header">...AND, LET US KNOW WHERE YOU ARE</span>
                                <br>
                                
                                <table class="table-alumreg" border="0" cellpadding="4" cellspacing="2">
                                        <tr valign="top"><td width="200px">First Name*</td><td>
                                        	<input class="formitems" id="ar_fname" type="text" name="fname" maxlength="100" style="width: 300px" />
                                        </td></tr>
                                        <tr valign="top"><td>Last Name*</td><td>
                                        	<input class="formitems" id="ar_lname" type="text" name="lname" maxlength="100" style="width: 300px" />
                                        </td></tr>
                                        <tr valign="top"><td>College Nickname</td><td>
                                        	<input class="formitems" type="text" name="nick" id="ar_nick" maxlength="50" style="width: 200px" title="We love to know this!" />
                                            &nbsp;<span style="font-weight: normal; font-size: 14px; color: #ccc"><em>(Optional)</em></span>
                                        </td></tr>
                                        <tr valign="top"><td>Year of Passing*</td><td>
                                        	<select name="year" id="ar_year" class="formitems"><?php for($y=date("Y");$y>=1966;$y--) { echo '<option>' . $y . '</option>'; } ?></select>
                                        </td></tr>
                                        <tr valign="top"><td>Department*</td><td>
                                        	<select name="department" id="ar_deptt" class="formitems">
                                            	<option>CE</option><option>CSE</option><option>ECE</option><option>EE</option><option>IT</option><option>ME</option>
                                            </select>
                                       	</td></tr>
                                        <tr valign="top"><td>Date of Birth*</td><td>
                                        	<select name="doby" id="ar_doby" class="formitems" onChange="updateDatesLeapYr()"><?php for($y=(date("Y")-21);$y>=1930;$y--) { echo '<option>' . $y . '</option>'; } ?></select>
                                            <select name="dobm" id="ar_dobm" class="formitems" onChange="updateDates()"><?php for($m=1;$m<=12;$m++) { echo '<option>' . $m . '</option>'; } ?></select>
                                            <select name="dobd" id="ar_dobd" class="formitems" onClick="clearColor()"><?php for($d=1;$d<=31;$d++) { echo '<option>' . $d . '</option>'; } ?></select>
                                            &nbsp;<span style="font-weight: normal; font-size: 14px; color: #ccc"><em>(YYYY/MM/DD)</em></span>
                                        </td></tr>
                                        <tr valign="top"><td>Gender*</td><td>
                                        	<select name="gender" id="ar_gender" class="formitems">
                                            	<option>Male</option><option>Female</option>
                                            </select>
                                       	</td></tr>
                                        <tr valign="top"><td>Presently Located in</td><td>
                                        	<span style="font-weight: normal; font-size: 20px; color: #ccc; width: 75px; display:inline-block">City*</span>
                                            <input class="formitems" id="ar_pcity" type="text" name="presentcity" maxlength="100" style="width: 220px" />
                                            <br>
                                            <span style="font-weight: normal; font-size: 20px; color: #ccc; width: 75px; display:inline-block">Country</span>
                                            <input class="formitems" id="ar_pcountry" type="text" name="presentcountry" maxlength="100" style="width: 220px" />
                                        </td></tr>
                                        <tr valign="top"><td>Contact Address*</td><td>
                                        	<textarea class="formitems" name="address" id="ar_address" style="width: 300px; height: 60px" title="1000 Characters Max"></textarea>
                                        </td></tr>
                                        <tr valign="top"><td>Email Address*</td><td>
                                        	<input class="formitems" type="text" name="emailid1" id="ar_email1" maxlength="256" style="width: 300px" />
                                            &nbsp;<span style="font-weight: normal; font-size: 14px; color: #ccc"><em>(Will be used to Log in)</em></span>
                                        </td></tr>
                                        <tr valign="top"><td>Alternate Email</td><td>
                                        	<input class="formitems" type="text" name="emailid2" id="ar_email2" maxlength="256" style="width: 300px" />
                                        </td></tr>
                                        <tr valign="top"><td>Phone #*</td><td>
                                        	<input class="formitems" type="text" name="phone1" id="ar_phone1" maxlength="20" style="width: 200px" />
                                        </td></tr>
                                        <tr valign="top"><td>Secondary Phone #</td><td>
                                        	<input class="formitems" type="text" name="phone2" id="ar_phone2" maxlength="20" style="width: 200px" />
                                        </td></tr>
                                        <tr valign="top"><td>Present Industry*</td><td>
                                        	<select name="pindustry" id="ar_pindustry" class="formitems">
                                            	<option>Accounting, Auditors, Tax & Bookkeepers</option>
                                                <option>Advertising & Public Relations</option>
                                                <option>Agriculture Products & Services</option>
                                                <option>Airlines, Aviation Services / Supplies</option>
                                                <option>Animal Products</option>
                                                <option>Apparel / Accessories / Textiles</option>
                                                <option>Architectural, Engineering & Technical</option>
                                                <option>Associations and Non-Profit Organizations</option>
                                                <option>Banking & Financial Services</option>
                                                <option>Beverages, Alcoholic & Non-alcoholic</option>
                                                <option>Building Systems / Materials / Fixtures</option>
                                                <option>Business Consultancy & Advisory</option>
                                                <option>Computer & IT Products & Services</option>
                                                <option>Construction General</option>
                                                <option>Education & Training</option>
                                                <option>Entertainment & Recreation</option>
                                                <option>Environmental Products & Services</option>
                                                <option>Executive Search & Personnel Recruitment</option>
                                                <option>Farm Equipment</option>
                                                <option>Food Manufacturing / Distribution / Services</option>
                                                <option>Freight Forwarders / Couriers</option>
                                                <option>Gases, Natural & Processed</option>
                                                <option>Government</option>
                                                <option>Health / Hygiene Products & Services</option>
                                                <option>Hospitals</option>
                                                <option>Hotels / Restaurants / Caterers</option>
                                                <option>Industrial Equipment</option>
                                                <option>Information & Communications Technology</option>
                                                <option>Inspection, Safety & Security</option>
                                                <option>Insurance</option>
                                                <option>Legal Practice</option>
                                                <option>Manufacturing - Automotive</option>
                                                <option>Manufacturing - Consumer</option>
                                                <option>Manufacturing - Electronics</option>
                                                <option>Manufacturing - Industrial</option>
                                                <option>Manufacturing - Other</option>
                                                <option>Manufacturing - Chemical Elements & Allied Products</option>
                                                <option>Marketing & Communications</option>
                                                <option>Outplacement Services</option>
                                                <option>Petroleum & Petroleum Products</option>
                                                <option>Pharmaceutical & Medicinal Products</option>
                                                <option>Power & Electrical</option>
                                                <option>Printing & Publishing</option>
                                                <option>Property & Real Estate Services</option>
                                                <option>Retail Consumer Products</option>
                                                <option>Schools</option>
                                                <option>Scientific & Medical Instruments</option>
                                                <option>Security, Investigative Services & Products</option>
                                                <option>Sourcing, Trading & Buying</option>
                                                <option>Transport Vehicles & Parts</option>
                                                <option>Transportation & Logistics</option>
                                                <option>Travel & Tourism</option>
                                                <option>Valuation & Disposal</option>
                                                <option>Other</option>
                                            </select>
                                       	</td></tr>
                                        <tr valign="top"><td>Worked at</td><td>
                                        	<input type="hidden" name="companycount" id="ar_ccount" value="1" />
                                        	<div id="ar_companyholder1">
                                                <span style="font-weight: normal; font-size: 20px; color: #ccc; width: 100px; display:inline-block">Company</span>
                                                <input class="formitems" id="ar_cname1" type="text" maxlength="200" style="width: 220px" />
                                                <br>
                                                <span style="font-weight: normal; font-size: 20px; color: #ccc; width: 100px; display:inline-block">From</span>
                                                <select name="cyearf1" id="ar_cyearf1" class="formitems" onChange="checkCompanyYears(1)"><?php for($y=date("Y");$y>=1966;$y--) { echo '<option>' . $y . '</option>'; } ?></select>
                                                &nbsp;
                                                <span style="font-weight: normal; font-size: 20px; color: #ccc; width: 14px; display:inline-block">To</span>&nbsp;
                                                <select name="cyeart1" id="ar_cyeart1" class="formitems" onClick="clearColorCompany(1)" onChange="checkCompanyYears(1)"><option>Present</option><?php for($y=date("Y");$y>=1966;$y--) { echo '<option>' . $y . '</option>'; } ?></select>
                                                <br><br>
                                            </div> 
                                            
                                            <div id="ar_companyholder2" style="display: none">
                                                <span style="font-weight: normal; font-size: 20px; color: #ccc; width: 100px; display:inline-block">Company</span>
                                                <input class="formitems" id="ar_cname2" type="text" maxlength="200" style="width: 220px" />
                                                <br>
                                                <span style="font-weight: normal; font-size: 20px; color: #ccc; width: 100px; display:inline-block">From</span>
                                                <select name="cyearf1" id="ar_cyearf2" class="formitems" onChange="checkCompanyYears(2)"><?php for($y=date("Y");$y>=1966;$y--) { echo '<option>' . $y . '</option>'; } ?></select>
                                                &nbsp;
                                                <span style="font-weight: normal; font-size: 20px; color: #ccc; width: 14px; display:inline-block">To</span>&nbsp;
                                                <select name="cyeart1" id="ar_cyeart2" class="formitems" onClick="clearColorCompany(2)" onChange="checkCompanyYears(2)"><option>Present</option><?php for($y=date("Y");$y>=1966;$y--) { echo '<option>' . $y . '</option>'; } ?></select>
                                                <br><br>
                                            </div>
                                            <div id="ar_companyholder3" style="display: none">
                                                <span style="font-weight: normal; font-size: 20px; color: #ccc; width: 100px; display:inline-block">Company</span>
                                                <input class="formitems" id="ar_cname3" type="text" maxlength="200" style="width: 220px" />
                                                <br>
                                                <span style="font-weight: normal; font-size: 20px; color: #ccc; width: 100px; display:inline-block">From</span>
                                                <select name="cyearf1" id="ar_cyearf3" class="formitems" onChange="checkCompanyYears(3)"><?php for($y=date("Y");$y>=1966;$y--) { echo '<option>' . $y . '</option>'; } ?></select>
                                                &nbsp;
                                                <span style="font-weight: normal; font-size: 20px; color: #ccc; width: 14px; display:inline-block">To</span>&nbsp;
                                                <select name="cyeart1" id="ar_cyeart3" class="formitems" onClick="clearColorCompany(3)" onChange="checkCompanyYears(3)"><option>Present</option><?php for($y=date("Y");$y>=1966;$y--) { echo '<option>' . $y . '</option>'; } ?></select>
                                                <br><br>
                                            </div>
                                            <div id="ar_companyholder4" style="display: none">
                                                <span style="font-weight: normal; font-size: 20px; color: #ccc; width: 100px; display:inline-block">Company</span>
                                                <input class="formitems" id="ar_cname4" type="text" maxlength="200" style="width: 220px" />
                                                <br>
                                                <span style="font-weight: normal; font-size: 20px; color: #ccc; width: 100px; display:inline-block">From</span>
                                                <select name="cyearf1" id="ar_cyearf4" class="formitems" onChange="checkCompanyYears(4)"><?php for($y=date("Y");$y>=1966;$y--) { echo '<option>' . $y . '</option>'; } ?></select>
                                                &nbsp;
                                                <span style="font-weight: normal; font-size: 20px; color: #ccc; width: 14px; display:inline-block">To</span>&nbsp;
                                                <select name="cyeart1" id="ar_cyeart4" class="formitems" onClick="clearColorCompany(4)" onChange="checkCompanyYears(4)"><option>Present</option><?php for($y=date("Y");$y>=1966;$y--) { echo '<option>' . $y . '</option>'; } ?></select>
                                                <br><br>
                                            </div>
                                            <div id="ar_companyholder5" style="display: none">
                                                <span style="font-weight: normal; font-size: 20px; color: #ccc; width: 100px; display:inline-block">Company</span>
                                                <input class="formitems" id="ar_cname5" type="text" maxlength="200" style="width: 220px" />
                                                <br>
                                                <span style="font-weight: normal; font-size: 20px; color: #ccc; width: 100px; display:inline-block">From</span>
                                                <select name="cyearf1" id="ar_cyearf5" class="formitems" onChange="checkCompanyYears(5)"><?php for($y=date("Y");$y>=1966;$y--) { echo '<option>' . $y . '</option>'; } ?></select>
                                                &nbsp;
                                                <span style="font-weight: normal; font-size: 20px; color: #ccc; width: 14px; display:inline-block">To</span>&nbsp;
                                                <select name="cyeart1" id="ar_cyeart5" class="formitems" onClick="clearColorCompany(5)" onChange="checkCompanyYears(5)"><option>Present</option><?php for($y=date("Y");$y>=1966;$y--) { echo '<option>' . $y . '</option>'; } ?></select>
                                                <br><br>
                                            </div>
                                            <div id="ar_companyholder6" style="display: none">
                                                <span style="font-weight: normal; font-size: 20px; color: #ccc; width: 100px; display:inline-block">Company</span>
                                                <input class="formitems" id="ar_cname6" type="text" maxlength="200" style="width: 220px" />
                                                <br>
                                                <span style="font-weight: normal; font-size: 20px; color: #ccc; width: 100px; display:inline-block">From</span>
                                                <select name="cyearf1" id="ar_cyearf6" class="formitems" onChange="checkCompanyYears(6)"><?php for($y=date("Y");$y>=1966;$y--) { echo '<option>' . $y . '</option>'; } ?></select>
                                                &nbsp;
                                                <span style="font-weight: normal; font-size: 20px; color: #ccc; width: 14px; display:inline-block">To</span>&nbsp;
                                                <select name="cyeart1" id="ar_cyeart6" class="formitems" onClick="clearColorCompany(6)" onChange="checkCompanyYears(6)"><option>Present</option><?php for($y=date("Y");$y>=1966;$y--) { echo '<option>' . $y . '</option>'; } ?></select>
                                                <br><br>
                                            </div>
                                            <div id="ar_companyholder7" style="display: none">
                                                <span style="font-weight: normal; font-size: 20px; color: #ccc; width: 100px; display:inline-block">Company</span>
                                                <input class="formitems" id="ar_cname7" type="text" maxlength="200" style="width: 220px" />
                                                <br>
                                                <span style="font-weight: normal; font-size: 20px; color: #ccc; width: 100px; display:inline-block">From</span>
                                                <select name="cyearf1" id="ar_cyearf7" class="formitems" onChange="checkCompanyYears(7)"><?php for($y=date("Y");$y>=1966;$y--) { echo '<option>' . $y . '</option>'; } ?></select>
                                                &nbsp;
                                                <span style="font-weight: normal; font-size: 20px; color: #ccc; width: 14px; display:inline-block">To</span>&nbsp;
                                                <select name="cyeart1" id="ar_cyeart7" class="formitems" onClick="clearColorCompany(7)" onChange="checkCompanyYears(7)"><option>Present</option><?php for($y=date("Y");$y>=1966;$y--) { echo '<option>' . $y . '</option>'; } ?></select>
                                                <br><br>
                                            </div>
                                            <div id="ar_companyholder8" style="display: none">
                                                <span style="font-weight: normal; font-size: 20px; color: #ccc; width: 100px; display:inline-block">Company</span>
                                                <input class="formitems" id="ar_cname8" type="text" maxlength="200" style="width: 220px" />
                                                <br>
                                                <span style="font-weight: normal; font-size: 20px; color: #ccc; width: 100px; display:inline-block">From</span>
                                                <select name="cyearf1" id="ar_cyearf8" class="formitems" onChange="checkCompanyYears(8)"><?php for($y=date("Y");$y>=1966;$y--) { echo '<option>' . $y . '</option>'; } ?></select>
                                                &nbsp;
                                                <span style="font-weight: normal; font-size: 20px; color: #ccc; width: 14px; display:inline-block">To</span>&nbsp;
                                                <select name="cyeart1" id="ar_cyeart8" class="formitems" onClick="clearColorCompany(8)" onChange="checkCompanyYears(8)"><option>Present</option><?php for($y=date("Y");$y>=1966;$y--) { echo '<option>' . $y . '</option>'; } ?></select>
                                                <br><br>
                                            </div>
                                            <div id="ar_companyholder9" style="display: none">
                                                <span style="font-weight: normal; font-size: 20px; color: #ccc; width: 100px; display:inline-block">Company</span>
                                                <input class="formitems" id="ar_cname9" type="text" maxlength="200" style="width: 220px" />
                                                <br>
                                                <span style="font-weight: normal; font-size: 20px; color: #ccc; width: 100px; display:inline-block">From</span>
                                                <select name="cyearf1" id="ar_cyearf9" class="formitems" onChange="checkCompanyYears(9)"><?php for($y=date("Y");$y>=1966;$y--) { echo '<option>' . $y . '</option>'; } ?></select>
                                                &nbsp;
                                                <span style="font-weight: normal; font-size: 20px; color: #ccc; width: 14px; display:inline-block">To</span>&nbsp;
                                                <select name="cyeart1" id="ar_cyeart9" class="formitems" onClick="clearColorCompany(9)" onChange="checkCompanyYears(9)"><option>Present</option><?php for($y=date("Y");$y>=1966;$y--) { echo '<option>' . $y . '</option>'; } ?></select>
                                                <br><br>
                                            </div>
                                            <div id="ar_companyholder10" style="display: none">
                                                <span style="font-weight: normal; font-size: 20px; color: #ccc; width: 100px; display:inline-block">Company</span>
                                                <input class="formitems" id="ar_cname10" type="text" maxlength="200" style="width: 220px" />
                                                <br>
                                                <span style="font-weight: normal; font-size: 20px; color: #ccc; width: 100px; display:inline-block">From</span>
                                                <select name="cyearf1" id="ar_cyearf10" class="formitems" onChange="checkCompanyYears(10)"><?php for($y=date("Y");$y>=1966;$y--) { echo '<option>' . $y . '</option>'; } ?></select>
                                                &nbsp;
                                                <span style="font-weight: normal; font-size: 20px; color: #ccc; width: 14px; display:inline-block">To</span>&nbsp;
                                                <select name="cyeart1" id="ar_cyeart10" class="formitems" onClick="clearColorCompany(10)" onChange="checkCompanyYears(10)"><option>Present</option><?php for($y=date("Y");$y>=1966;$y--) { echo '<option>' . $y . '</option>'; } ?></select>
                                                <br><br>
                                            </div>                                       
                                            
                                            <input class="formitems" id="ar_addcompany" type="submit" name="addcompany" value=" Add Another Company " onClick="addCompany()" />
                                        </td></tr>
                                        <tr><td height="1px"></td><td></td></tr>
                                        <tr valign="top"><td>&nbsp;</td><td class="td-reg-button-cell">
                                        	<span id="ar_busystatus" style="display:none">Uploading data...</span>
                                        	<input class="formitems" id="ar_submit" type="submit" name="submit" value=" Register Me " onclick="doAlumniRegister()" />
                                        </td></tr>
                                        <tr valign="top"><td>&nbsp;</td><td>
                                            <span id="ar_feedback" class="formfeedbackmsgred"></span>                    
                                        </td></tr>
                                    </table>
                            </p>
                        </td>
                    </tr>
                </table>
                <!-- END OF FX WD TABLE -->
            </td>
        </tr>
        <?php require_once("module-footer-anim.php"); ?>
    </table>
    
    
  
    
</body>
</html>
