<?
	session_start();
	mysql_connect("localhost","root","cartoonman");
	mysql_select_db("coursedetdb");
	$strSQL = "SELECT * FROM register WHERE user = '".mysql_real_escape_string($_POST['Username'])."' 
	and pwd = '".mysql_real_escape_string($_POST['Password'])."'";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if(!$objResult)
	{
			echo "Username and Password Incorrect!";
	}
	else
	{
			$_SESSION["UserID"] = $objResult["user"];
			$_SESSION["Status"] = $objResult["status"];

			session_write_close();

			if($objResult["Status"] == "admin")
			{
				header("location:admin_page.php");
			}
			else
			{
				header("location:index.php");
			}

	}
	mysql_close();
?>
