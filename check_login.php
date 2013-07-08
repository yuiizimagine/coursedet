<?
	session_start();
	mysql_connect("localhost","root","1234");
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
			$_SESSION["Trainer"] = $objResult["trainer"];
			$_SESSION["Visible_mail"] = $objResult["visible_mail"];

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
