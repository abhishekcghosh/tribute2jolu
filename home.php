<?php require_once('module-session-info.php'); ?>
<!doctype html>
<html>
<head>
<?php require_once("module-head-tag.php"); ?>
<title>Tribute 2 Jolu</title>
</head>
<body>
	<!-- navbar + google analytics -->
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
                    	<td valign="top" align="left">
                        	<div style="height: 40px">&nbsp;</div>
                            <span class="quote-text">In Life, you always get either more than what you deserve or less</span><br>
                            <span class="quote-text">than what you should. You never quite get just the right amount.</span><br>
                            <span class="quote-text">If you get less, you must work harder &amp; smarter; and if you</span><br>
                            <span class="quote-text">get more - then you must give back!</span><br>
                            
                        </td>
                        <td width="310px" align="right" valign="top">
                        	<div style="height: 20px;"></div>
                            <div style="height: 50px;">
                            	<p class="bubble">
                            	<?php
                                    require_once('module-sql-connect.php');
                                    //GET MESSAGES
                                    $tbl_name=__SQL_TABLE_PREFIX__ . "general";
                                    $sql_query="SELECT SUM(attribvalue) AS hitsTotal FROM $tbl_name WHERE attribname='hits'";
                                    $query_result=mysql_query($sql_query);
                                    $result_row=mysql_fetch_array($query_result);
                                    $hits=$result_row['hitsTotal']+1;
                                    $sql_query="UPDATE $tbl_name SET attribvalue=attribvalue+1 WHERE attribname='hits'";
                                    $query_result=mysql_query($sql_query);
                                    echo number_format($hits,0,'.',',');
                                ?>
                                	hits
                                </p>
                            </div>
                        	<img src="style/globe.png" height="312" width="310">
                        </td>
                    </tr>
                    <tr>
                    	<td colspan="2">
                        	<p class="initiative-text initiative-first">
                            	<strong>Tribute2Jolu</strong> is an initiative, rather an unheard voice to gather the
                                gigantic alumni base of 
                                <a class="initiative-link" href="http://www.jgec.in" target="_blank">
                                Jalpaiguri Government Engineering College</a> to a 
                                single platform, to help make our Alma Mater
                                one of the world's leading engineering colleges. Joluites have touched the skies
                                in every area of their life and its the time to pay something back to our beloved "Jolu".
                                Our efforts, small and big, can help to take JGEC to the place where it                                
                                should stand, and beyond.
                            </p>
                            <p class="initiative-text">
                            	We Joluites all unanimously agree, that our time at JGEC has been among the 
                                best of times of our lives. Today when we compare with rest of the world, we
                                unfortunately see that JGEC yet needs to go a few miles to establish itself as a much bigger
                                brand that it should rightfully be. And there has been numerous efforts from 
                                personal to group level
                                in past to help this cause. But now it's the right time to assimilate all
                                those small and big efforts to a single platform, so that tomorrow we
                                can proudly say "JGEC is among the Top Engineering Colleges in India."
                                And we are sure, that very much like us, your heart too beats as much to see JGEC in
                                the front rows in coming years.
                            </p>
                            <p class="initiative-text">
                            	As fellow Joluite Alumni, it becomes our duty to support this cause with 
                                whatever big or little we can bring in. So, why not take the first step, 
                                and spread the word?
                            </p>
                            
                            <div>
                            	<a href="alum-reg.php" class="a-btn">
                                    <span class="a-btn-text">SPREAD THE WORD!</span> 
                                    <span class="a-btn-slide-text">AND LET US KNOW WHERE YOU ARE</span>
                                    <span class="a-btn-icon-right"><span></span></span>
                                </a>					
                            </div>
                            
                            
                        </td>
                    </tr>
                    <tr>
                    	<td colspan="2">
                            
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
