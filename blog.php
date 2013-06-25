<?
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>CourseDet - COURSE</title>
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
<body id="page3">
<div class="tail-top2">
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
			<div class="inside bot-indent">
				<div id="slogan">
				<img src="images/head_blog.png">
					<div class="inside">
						<h2><span>TOPIC</span></h2>
						<p>Today, you need to be agile; you need to maximize the value you receive from your software teams, and respond to constantly evolving customer needs to stay competitive. From the fundamentals provided in our Foundations course to more specialized training for Scrum Masters, Product Owners, and Development Team members, Scrum.org provides a complete family of courses to help you learn the skills you need to become agile. Click on a course name for more information.    </p>
					</div>
				</div>
				<h1 class="extra">BLOG UPDATE</h1>
				<div class="box extra">
					<div class="border-right">
						<div class="border-bot">
							<div class="border-left">
								<div class="left-top-corner1">
									<div class="right-top-corner1">
										<div class="right-bot-corner">
											<div class="left-bot-corner">
												<div class="inner">
													
													
													<?
													include("phpMySQLFunctionDatabase.php");
	
													$strTable = "blog";
													$objSelect = fncSelectAllRecord($strTable);
													//if(!$objSelect)
													//{
													//	echo "Record not found<br>";
													//}
													
													while ($objResult = mysql_fetch_object($objSelect)) { 
														//echo "".$objResult->topic."<br>";
													
													
													//for($i = 1; $i < $objSelec ; $i++){
													echo "<div class='border-top'>
														<div class='inner1'>
															<h4 class='extra aligncenter'>".$objResult->topic."</h4>
															<div class=''>
																<div class='line-ver1 left-indent'>
																	<div class='line-ver2'>
																		<div class='line-ver3'>
																			<div class='wrap line-ver4'>
																						<table width='90%' border='1'>
																						<tr>
																						<td>
																						<img src=\"".$objResult->image."\">
																						<br> <br>
																						</td>
																						<td width='20'>
																						</td>
																						<td>
																						<br><br>
																						"
																						.$objResult->detail.
																						"
																						<br><br><br>
																						</td>
																						</tr>
																						</table>
																				<div class='clear'></div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>";
													}
													
													
													
													
													if($_SESSION['Status'] == "admin"){
				
														echo "
														<form id='add-topic' name='form-add-topic' method='post' action='add_topic.php'>

														<div class='border-top'>
														<div class='inner1'>
															<h4 class='extra aligncenter'>Add Topic</h4>
															<div class=''>
																<div class='line-ver1 left-indent'>
																	<div class='line-ver2'>
																		<div class='line-ver3'>
																			<div class='wrap line-ver4'>
																<div align='center'>
																<br><br>
																<table>
																<tr>
																	<td width='300' align='right'>Topic Name : 
																	<br> <br>
																	</td>
																	<td width='300'><input type='text' id='topic' name='topic'>
																	<br> <br>
																	</td>
																</tr>
																<tr>
																	<td align='right'>Detail : 
																	<br> <br>
																	</td>
																	<td><textarea name='detail' id='detail' cols='45' rows='5'></textarea>
																	<br> <br>
																	</td>
																</tr>
																
																<tr>
																	<td align='right'>Image Url : 
																	<br> <br>
																	</td>
																	<td><input type='text' id='image' name='image'>
																	<br> <br>
																	</td>
																</tr>
																
																<tr>
																	<td align='right'><a href='#' class='link1' onClick=\"document.getElementById('add-topic').submit()\" \><span><span>Save</span></span>
																		</a>
																	</td>
																	<td><a href='blog.php' class='link1' \><span><span>Cancle</span></span>
																		</a>
																	</td>
																</tr>

																</table>
															</div>
																				<div class='clear'></div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													</form>";	
													}
													
													?>
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
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
							<ul class="list col-1">
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
							</ul>
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