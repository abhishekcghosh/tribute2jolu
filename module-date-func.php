<?php
	require_once('module-config.php');										//Safety - include config file
	function date_ip_to_op($dateip,$t)
	{
		//echo "dateip: " . $dateip;
		if(strtotime($dateip)==false || $dateip=="0000-00-00 00:00:00") { return " "; }
		$arr=explode(" ",$dateip);										//arr=Y-m-d H:i:s
		$ad=explode("-",$arr[0]);										//ad=Y-m-d, split into Y, m, d
		$at=explode(":",$arr[1]);										//at=H:i:s, split into H, i, s
		$tsop=mktime($at[0]+__TIME_OFFSET_HOUR__,$at[1]+__TIME_OFFSET_MINUTE__,$at[2],$ad[1],$ad[2],$ad[0]);
		//echo "tsop: " . $tsop . "|||";
		if($t=='n')
		{
			return date(__DATE_FORMAT_OP_NT__,$tsop);
		}
		else
		{
			return date(__DATE_FORMAT_OP__,$tsop);
		}
	}
?>