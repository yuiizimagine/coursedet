<?php
	if($_POST["topic"])
	{
		$objConnect = mysql_connect("localhost","root","1234") or die("Error Connect to Database");
		$objDB = mysql_select_db("coursedetdb");
		$strSQL = "INSERT INTO blog ";
		$strSQL .="VALUES ";
		$strSQL .="(  '".$_POST["topic"]."' ";
		$strSQL .=" , '".$_POST["detail"]."' ";
		$strSQL .=" , '".$_POST["image"]."' ";
		$strSQL .=" , '000-00-00' ";
		//$strSQL .=" , '".$_POST["year"]."-".$_POST["month"]."-".$_POST["date"]."' ";
		$strSQL .=") ";
		$objQuery = mysql_query($strSQL);
		//echo $strSQL;
	
		if($objQuery)
		{
			header("Location: blog.php");
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
		echo "Can's give value from blog page.";
	}
?>
	
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>

 <?php

?>


