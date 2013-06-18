<?php
	session_start();
	if($_SESSION['UserID'] != "")
	{
		$objConnect = mysql_connect("localhost","root","1234") or die("Error Connect to Database");
		$objDB = mysql_select_db("coursedetdb");
		$strSQL = "UPDATE register ";
		$strSQL .="SET ";
		$strSQL .="   email='".$_POST["email"]."'";
		$strSQL .=" , name='".$_POST["name"]."'";
		$strSQL .=" , surname='".$_POST["surname"]."'";
		$strSQL .=" , gender='".$_POST["gender"]."'";
		$strSQL .=" , addr='".$_POST["addr"]."'";
		$strSQL .=" , birth_day='".$_POST["year"]."-".$_POST["month"]."-".$_POST["date"]."'";
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