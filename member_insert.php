<?php
	if($_POST["user"])
	{
		$objConnect = mysql_connect("localhost","root","cartoonman") or die("Error Connect to Database");
		$objDB = mysql_select_db("coursedetdb");
		$strSQL = "INSERT INTO register ";
		$strSQL .="VALUES ";
		$strSQL .="('NULL' ";
		$strSQL .=" , '".$_POST["user"]."' ";
		$strSQL .=" , '".$_POST["pwd"]."' ";
		$strSQL .=" , '".$_POST["email"]."' ";
		$strSQL .=" ,  ".$_POST["visible_mail"]." ";
		$strSQL .=" , '".$_POST["name"]."' ";
		$strSQL .=" , '".$_POST["surname"]."' ";
		$strSQL .=" , '".$_POST["gender"]."' ";
		$strSQL .=" , '".$_POST["addr"]."' ";
		$strSQL .=" , '".$_POST["year"]."-".$_POST["month"]."-".$_POST["date"]."' ";
		$strSQL .=" , 'user' ";
		$strSQL .=" , '0' ";
		$strSQL .=" , '0') ";
		$objQuery = mysql_query($strSQL);
		//echo $strSQL;
	
		if($objQuery)
		{
			header("Location: index.php");
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
		echo "Can's give value from register page.";
	}
?>
	
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>

 <?php

?>


