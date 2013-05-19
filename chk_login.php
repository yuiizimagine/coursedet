<?php
mysql_connect("localhost","root","1234");
mysql_select_db("register");
echo mysql_error();


if($_POST['sub_log'] == 'Log in'){
	$str_username = $_POST['Username'];
	$str_password = $_POST['Password'];
	$query = mysql_query("SELECT * FROM member where user_member = '".$str_username."' and pwd_member = '".$str_password."' ");
	$array = mysql_fetch_array($query);
	if($str_username == $array['user_member'] && $str_password == $array['pwd_member']){
				echo '<font size="10">'.$text.'</font>';
				echo "<meta http-equiv=\"refresh\" content=\"2;URL='http://cctvstreaming.com/'\">";
				
				}else{
				
				echo"<a href=\"index.php\"><p>Cannot login please try again!</p></a>";
				}
	
}	
?>