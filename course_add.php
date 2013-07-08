<?php
	session_start();
	if($_POST["course_name"])
	{
		$objConnect = mysql_connect("localhost","root","1234") or die("Error Connect to Database");
		$objDB = mysql_select_db("coursedetdb");
		$strSQL = "INSERT INTO course ";
		$strSQL .="VALUES ";
		$strSQL .="( NULL";
		$strSQL .=" , '".$_POST["course_name"]."' ";
		$strSQL .=" , '".$_POST["course_detail"]."' ";
		$strSQL .=" , '".$_SESSION['UserID']."' ";
		$strSQL .=" , '".$_POST["start_year"]."-".$_POST["start_month"]."-".$_POST["start_date"]."' ";
		$strSQL .=" , '".$_POST["end_year"]."-".$_POST["end_month"]."-".$_POST["end_date"]."' ";
		$strSQL .=" , '".$_POST["place"]."' ";
		$strSQL .=" , '".$_POST["con_name"]."' ";
		$strSQL .=" , '".$_POST["con_phone"]."' ";
		$strSQL .=" , '".$_POST["con_email"]."' ";
		$strSQL .=" , '".$_POST["cer_type"]."' ";
		$strSQL .=" , ".$_POST["price"]." ";
		$strSQL .=" , ".$_POST["trainee_no"]." ";
		$strSQL .=") ";
		$objQuery = mysql_query($strSQL);
		//echo $strSQL;
	
		if($objQuery)
		{
			header("Location: course.php");
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
		echo "Can's give value from create course page.";
	}
?>
	
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>

 <?php

?>


