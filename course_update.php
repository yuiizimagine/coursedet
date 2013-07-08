<?php
	session_start();
	if($_SESSION['UserID'] != "")
	{
		$objConnect = mysql_connect("localhost","root","1234") or die("Error Connect to Database");
		$objDB = mysql_select_db("coursedetdb");
		$strSQL = "UPDATE course ";
		$strSQL .="SET ";
		$strSQL .="   course_name='".$_POST["course_name"]."'";
		$strSQL .=" , course_detail='".$_POST["course_detail"]."'";
		$strSQL .=" , start_date='".$_POST["start_year"]."-".$_POST["start_month"]."-".$_POST["start_date"]."'";
		$strSQL .=" , end_date='".$_POST["end_year"]."-".$_POST["end_month"]."-".$_POST["end_date"]."'";
		$strSQL .=" , place='".$_POST["place"]."'";
		$strSQL .=" , con_name='".$_POST["con_name"]."'";
		$strSQL .=" , con_phone='".$_POST["con_phone"]."'";
		$strSQL .=" , con_email='".$_POST["con_email"]."'";
		$strSQL .=" , cer_type='".$_POST["cer_type"]."'";
		$strSQL .=" , price=".$_POST["price"];
		$strSQL .=" , trainee_no=".$_POST["trainee_no"];
		$strSQL .=" WHERE ";
		$strSQL .="course_id='".$_POST['course_id']."'";
		$objQuery = mysql_query($strSQL);
		//echo $strSQL;
	
		if($objQuery)
		{
			header("Location: course.php");
			echo "<p> Congruatulation! Update course suceesful </p><hr>";
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