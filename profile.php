<?
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>CourseDet - Profile</title>
<meta name="description" content="Place your description here">
<meta name="keywords" content="put, your, keyword, here">
<meta name="author" content="Templates.com - website templates provider">
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_600.font.js"></script>
<script type="text/javascript" src="js/script.js"></script>


<!--[if lt IE 7]>
	<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
 <![endif]-->
<!--[if lt IE 9]>
  	<script type="text/javascript" src="js/html5.js"></script>
  <![endif]-->
</head>
<body id="page2">
<div class="tail-top1">
	<!-- header -->
	<header>
		<div class="container">
			<div class="header-box">
				<div class="left">
					<div class="right">
						<nav>
							<ul>
								<!-- <li class="current"><a href="index.php">Home</a></li> -->
								<li><a href="course.php">Course</a></li>
								<!-- <li><a href="hosting.php">[Hosting]</a></li> -->
								<li><a href="support.php">Support</a></li>
								<li><a href="Blog.php">Blog</a></li>
								<li><a href="FAQ.php">FAQ</a></li>
								<li><a href="contacts.php">Contacts</a></li>
								<li><a href="aboutMe.php">About me</a></li>
							</ul>
						</nav>
						<h1><a href="index.php"><span>Course</span>Det</a></h1>
					</div>
				</div>
			</div>
			<span class="top-info">Course &amp; Study + 66 882 805 028  </span>
			<?
				if($_SESSION['UserID'] != "")
				{
					echo "<form id=\"login-form\" method=\"post\" action=\"logout.php\">
					<fieldset>
					
						<table>
						<tr>
						<td><h5>Hi,welcome&nbsp;&nbsp;&nbsp;&nbsp;<a href='profile.php'>".$_SESSION['UserID']."</h5></td>
						<td><a href='#' class=\"login\" onClick=\"document.getElementById('login-form').submit()\"><span><span>Logout</span></span></a></td>
						</tr></table>

					</fieldset>
					</form>";
				}
				else{
					echo "<form id=\"login-form\" method=\"post\" action=\"check_login.php\">
					<fieldset>
					<span class=\"text\">
						<input type=\"text\" name=\"Username\" value=\"Username\" onFocus=\"if(this.value=='Username'){this.value=''}\" onBlur=\"if(this.value==''){this.value='Username'}\">
					</span>
					<span class=\"text\">
						<input type=\"password\" name=\"Password\" value=\"Password\" onFocus=\"if(this.value=='Password'){this.value=''}\" onBlur=\"if(this.value==''){this.value='Password'}\">
					</span>
					<a href='#' class=\"login\" onClick=\"document.getElementById('login-form').submit()\"><span><span>Login</span></span></a>
					<span class=\"links\"><a href='#'>Forgot Password?</a><br/><a href=\"register.php\">Register</a></span>
					</fieldset>
					</form>";
				}
			?>
		</div>
	</header>
	<!-- content -->
	<section id="content">
		<div class="container">
			<div class="inside">
			<!--<div id="slogan">
					<div class="inside">
						<h2><span></span></h2>
					</div>-->
				</div>
				<div class="inside1">
					<div class="wrap row-2">

						<article class="col-2">
							<h2> PROFILE ME</h2>
							<table width="200" border="1">
							  <tr>
							    <td><img src="images/yui.png" width="400" height="267"></td>
						      </tr>
						  </table>
							<p>&nbsp;</p>
<?
	include("phpMySQLFunctionDatabase.php");
	
	$strTable = "register";
	$strCondition = "user = '".$_SESSION['UserID']."' ";
	$objSelect = fncSelectRecord($strTable,$strCondition);
	if(!$objSelect)
	{
		echo "Record not found<br>";
	}
?>
                          <form name="form1" >
                          
                          
                            <table width="566" border="0" cellpadding="3">
                              <tr>
                                <td width="8" height="15">&nbsp;</td>
                                <td width="138" height="33"><strong>Personal Data<hr></strong></td>
                                <td width="354">&nbsp;<hr></td>
                                <td width="32">&nbsp;<hr></td>
                              </tr>
                              <tr>
                                <td height="32">&nbsp;</td>
                                <td>Name</td>
                                <td><label for="name"></label>
                                <?
                                  echo $objSelect[name]."</td>";
								?>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td height="32">&nbsp;</td>
                                <td>Surname</td>
                                <td><label for="surname"></label>
                                <?
                                  echo $objSelect[surname]."</td>";
								?>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td height="29">&nbsp;</td>
                                <td width="138" height="33">Username</td>
                                <td width="354"><label for="user"></label>
                                <?
                                  echo $objSelect[user]."</td>";
								?>
                                <td>&nbsp;</td>
                              </tr>
							  <tr>
                                <td height="29">&nbsp;</td>
                                <td width="138" height="33">Permission</td>
                                <td width="354"><label for="user"></label>
                                <?
                                  echo $objSelect[status]."</td>";
								?>
                                <td>&nbsp;</td>
                              </tr>
							  <tr>
                                <td height="29">&nbsp;</td>
                                <td width="138" height="33">Class User</td>
                                <td width="354"><label for="user"></label>
                                <?
									if($objSelect[trainer] == 1 && $objSelect[practitioner] == 1){
										echo "trainer & practitioner";
									}
									else{
										if($objSelect[trainer] == 1){
											echo "trainer";
										}
										else if($objSelect[practitioner] == 1){
											echo "practitioner";
										}
										else{
											echo "None";
										}
									}
                                  
								?>
								</td>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
								<?
									if($_SESSION["Visible_mail"] == true){
										echo "<td height=\"30\">&nbsp;</td>";
										echo "<td>E-mail</td>";
										echo "<td><label for=\"email\"></label>";
                                
										echo $objSelect[email]."</td>";
										
								
										echo "<td>&nbsp;</td>";
									}
								?>
                              </tr>
                              <tr>
                                <td height="33">&nbsp;</td>
                                <td>Gender</td>
                                <td>
								<?
                                  echo $objSelect[gender]."</td>";
								?>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td height="31">&nbsp;</td>
                                <td>Birthdate</td>
                                <td>
								<?
                                  echo $objSelect[birth_day]."</td>";
								?>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td height="31">&nbsp;</td>
                                <td>Address</td>
                                <td>
								<?
                                  echo $objSelect[addr]."</td>";
								?>
                                <td>&nbsp;</td>
                              </tr>
							  <tr>
                                <td height="31">&nbsp;</td>
                                <td>Register to trainer</td>
                                <td>
									<?
									if($objSelect["trainer"] == 0){
										echo "<a href='status_edit.php?class=trainer&value=1'>register</a>";
									}
									else {
										echo "<a href='status_edit.php?class=trainer&value=0'>unregister</a>";
									}
									?>
								</td>
                                <td>&nbsp;</td>
                              </tr>
							  <tr>
                                <td height="31">&nbsp;</td>
                                <td>Register to practitioner</td>
                                <td>
									<?
									if($objSelect["practitioner"] == 0){
										echo "<a href='status_edit.php?class=practitioner&value=1'>register</a>";
									}
									else {
										echo "<a href='status_edit.php?class=practitioner&value=0'>unregister</a>";
									}
									?>
									
								</td>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td height="31">&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                              </tr>
                              
                              <tr>
                                <td height="31">&nbsp;</td>
                                <td width="138" height="33"><strong>Register History</strong><hr></td>
                                <td width="354">&nbsp;<hr></td>
                                <td>&nbsp;<hr></td>
                              </tr>
                              <tr>
                                <td height="31">&nbsp;</td>
                                <td height="33" colspan="3">
                                <table width="100%" border="1"> 
                                  <tr>
                                    <td width="254"><div align="center"><strong>Course Name</strong></div></td>
                                    <td width="128"><div align="center"><strong>Date</strong></div></td>
                                    <td width="148"><div align="center"><strong>Pay Status</strong></div></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">Agile</div></td>
                                    <td><div align="left">1 / 12./ 2555</div></td>
                                    <td><div align="center">paid</div></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">Software Product Line</div></td>
                                    <td><div align="left">1 / 4./ 2552</div></td>
                                    <td><div align="center">paid</div></td>
                                  </tr>
                                </table></td>
                              </tr>
                            </table>
                            
                            <p>&nbsp;</p>
                            <p><!--                          </form>
                          <p><form action="member_insert.php" method="post">  -->
                              
                              
                              
  <br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <div class="aligncenter">
  <a href="profile_edit.php" class="link1"\><span><span>Edit Profile</span></span>
  </a>
  
  </div>
                            </p>
                            </br>
                          </form>
                          
 <!-- ----------------------------------------------------------------------------------->
<!--</form>&nbsp; -->
</p>
</article>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<!-- aside -->
<aside>
	<div class="container">
		<div class="inside">
			<div class="line-ver1">
				<div class="line-ver2">
					<div class="line-ver3">
						<div class="wrapper line-ver4">
							<!-- <ul class="list col-1">
								<li>Other</li>
								<li><a href="#">Link</a></li>
								<li><a href="#">Link</a></li>
							</ul>
							<ul class="list col-2">
								<li>Other</li>
								<li><a href="#">Link</a></li>
								<li><a href="#">Link</a></li>
							</ul>
							<ul class="list col-3">
								<li>Other</li>
								<li><a href="#">Link</a></li>
								<li><a href="#">Link</a></li>
							</ul>
							<ul class="list col-4">
								<li>Other</li>
								<li><a href="#">Link</a></li>
								<li><a href="#">Link</a></li>
							</ul>
							<ul class="list col-5">
								<li>Other</li>
								<li><a href="#">Link</a></li>
								<li><a href="#">Link</a></li>
							</ul> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</aside>
<!-- footer -->
<footer>
	<div class="container">
		<div class="inside">
			Website created by WR Together<a class="new_window" href="http://www.templatemonster.com" target="_blank" rel="nofollow"></a><br/>
			<a class="new_window" href="http://www.templates.com/product/3d-models/" target="_blank" rel="nofollow"></a>
		</div>
	</div>
</footer>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>