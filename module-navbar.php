<?php require_once('module-google-analytics.php'); ?>
<?php require_once('module-session-info.php'); ?>
<script type="text/javascript" src="script/ajax-alumni-login.js"></script>
<table class="table-header" id="header_table" cellpadding="0" cellspacing="0" width="100%" border="0">
    <tr>
    	<td class="td-login-space" align="center" valign="top">
        	<?php 
				if($li_privilege=="GUEST")
				{
			?>
            <table class="table-fixed-width table-alumreg" style="height: 66px;">
            	<tr valign="top">
                	<td colspan="2">&nbsp;</td>
                </tr>
                <tr valign="top"><td width="100px">Email</td><td>
                    <input class="formitems" id="al_email" type="text" name="email" maxlength="256" style="width: 300px" />
                </td></tr>
                <tr valign="top"><td>Password</td><td>
                    <input class="formitems" id="al_password" type="password" name="password" maxlength="32" style="width: 300px" />
                </td></tr>
                <tr valign="top"><td>&nbsp;</td><td>
                    <span id="al_busystatus" style="display:none">Uploading data...</span>
                    <input class="formitems" id="al_submit" type="submit" name="submit" value=" Log in " onclick="doAlumniLogin()" />
                </td></tr>
                <tr valign="top"><td>&nbsp;</td><td>
                    <span id="al_feedback" class="formfeedbackmsgred"></span>                    
                </td></tr>
            </table>
            <?php
				}
				else
				{
			?>
            <table class="table-fixed-width table-alumreg" style="height: 66px;">
            	<tr valign="top">
                	<td>&nbsp;</td>
                </tr>
                <tr valign="top">
                	<td>
                    	You are logged in as <br /><br />
                        <b><?php echo $li_firstname . " " . $li_lastname ?></b><br />
                        (<?php echo $li_user; ?>)<br />
                        <a class="navbar-link" href="logout.php">Logout</a>
                    </td>
                </tr>
            </table>
            <?php
				}
			?>
        </td>
    </tr>
    <tr>
        <td class="td-navbar" align="center" valign="top">
            <table class="table-fixed-width" style="height: 66px;">
                <tr>
                    <td valign="middle" align="left">
                    	<a class="navbar-link" href="home.php">HOME</a>
                        &middot;
                        <a class="navbar-link" href="what-is.php">WHAT IS?</a>
                        &middot;
                        <a class="navbar-link" href="alum-reg.php">SPREAD THE WORD</a>
                        &middot;
                        <a class="navbar-link" href="reg-zone.php">REGISTERED USERS</a>
                        
                    </td>
                    <td align="right" valign="middle">
                        <a href="http://www.tribute2jolu.com"><span class="masthead">TRIBUTE 2 JOLU</span></a>
                    </td>
                </tr>
            </table>
        </td>            
    </tr>
    <tr>
    	<td class="nub-central" align="center" valign="top">
        	<div class="nubs">
        	<a id="toggleButtonOn" style="display: inline-block;" href="#" onmouseover="toggleTip(1)" onmouseout="toggleTip(0)" onclick='toggleLoginSpace(1);'><img src="style/nub.png" height="20" width="40" border="0"/></a>
            <a id="toggleButtonOff" style="display: none;" href="#" onmouseover="toggleTip(1)" onmouseout="toggleTip(0)" onclick='toggleLoginSpace(0);'><img src="style/nub.png" height="20" width="40" border="0"/></a>
            </div>
            <br />
            <div id="nubsTips" class="nubs-tips">
                    <div id="nubsTipsContent" class="nubs-tips-content">Slide down the Login Panel</div>
            </div>
        </td>
    </tr>
</table>
