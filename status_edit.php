<?php
	session_start();
	if($_SESSION['UserID'] != "")
	{
		$objConnect = mysql_connect("localhost","root","1234") or die("Error Connect to Database");
		$objDB = mysql_select_db("coursedetdb");
		$strSQL = "UPDATE register ";
		$strSQL .="SET ";
		$strSQL .=" ".$_GET["class"]."='".$_GET["value"]."'";
		$strSQL .=" WHERE ";
		$strSQL .="user='".$_SESSION['UserID']."'";
		$objQuery = mysql_query($strSQL);
		//echo $strSQL;
	
		if($objQuery)
		{
			header("Location: profile.php");
			echo "<p> Congruatulation! Sign up suceesful </p><hr>";
		}
		else
		{
			echo "Error Save [".$strSQL."]";
		}
		mysql_close($objConnect);
	}
	else
	{
		echo "You not login.";
	}
?>
	
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>

 <?php

?>