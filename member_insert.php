<?php
	if($_POST["user"])
	{
		$objConnect = mysql_connect("localhost","root","1234") or die("Error Connect to Database");
		$objDB = mysql_select_db("coursedetdb");
		$strSQL = "INSERT INTO register ";
		$strSQL .="VALUES ";
		$strSQL .="('NULL' , '".$_POST["user"]."'    , '".$_POST["pwd"]."'  , '".$_POST["repwd"]."' ";
		$strSQL .=" ,'".$_POST["email"]."'   , '".$_POST["name"]."' , '".$_POST["surname"]."' ";
		$strSQL .=" ,'".$_POST["gender"]."'  , '".$_POST["date"]."' , '".$_POST["month"]."' ";
		$strSQL .=" ,'".$_POST["year"]."'    , '".$_POST["addr"]."') ";
		$objQuery = mysql_query($strSQL);
		//echo $strSQL;
	
		if($objQuery)
		{
			echo "<p> Congruatulation! Sign up suceesful </p><hr>";
			echo "<a href=\"index.php\"> <p> Go to homepage </p> </a>";
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


