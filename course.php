<?
	include("phpMySQLFunctionDatabase.php");
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
				<img src="images/head_course.png">
					<div class="inside">
						<h2><span>Professional Scrum Training</span></h2>
						<p>Today, you need to be agile; you need to maximize the value you receive from your software teams, and respond to constantly evolving customer needs to stay competitive. From the fundamentals provided in our Foundations course to more specialized training for Scrum Masters, Product Owners, and Development Team members, Scrum.org provides a complete family of courses to help you learn the skills you need to become agile. Click on a course name for more information.    </p>
					</div>
				</div>
				<h2 class="extra">Course </h2>
				<? if($_SESSION["Trainer"] == 1)
				{
					echo "<a href='course_create.php' class='link1'><span><span>create course</span></span></a>";
				}
				?>
				
				<div class="box extra">
					<div class="border-right">
						<div class="border-bot">
							<div class="border-left">
								<div class="left-top-corner1">
									<div class="right-top-corner1">
										<div class="right-bot-corner">
											<div class="left-bot-corner">
												<div class="inner">
													<div class="left-indent line-ver1">
														<div class="line-ver2">
															<div class="line-ver3">
																<div class="wrap line-ver4">															
																	<article class="col-1 indent">
																		<h4>Course</h4>
																		
																		<ul class="info-list1">
																			<? 
																			
	
																			$strTable = "course";
																			$order = "start_date";
																			$objSelect = fncSelectAllRecordOrder($strTable, $order);
																			
																			while ($objResult = mysql_fetch_object($objSelect)) 
																			{ 
																				echo "<li><a href='course_detail.php?cid=".$objResult->course_id."'>".$objResult->course_name." </a></li>";
																			} 
																			?>	

																	</article>
																	<article class="col-2 indent">
																		<h4 class="aligncenter">Personal</h4>
																		<ul class="info-list1 alt">
																		
																			<? 
																			
																			$strTable = "course";
																			$order = "start_date";
																			$objSelect = fncSelectAllRecordOrder($strTable, $order);
																			
																			while ($objResult = mysql_fetch_object($objSelect)) 
																			{ 
																				echo "<li>".$objResult->trainee_no."</li>";
																			} 
																			?>
																		</ul>
																		<!-- <div class="aligncenter"><a href="#" class="link3"><span><span>Buy Now!</span></span></a></div> -->
																	</article>
																	<article class="col-3 indent">
																		<h4 class="aligncenter">Start Date</h4>
																		<ul class="info-list1 alt">
																			<? 
																			
																			$strTable = "course";
																			$order = "start_date";
																			$objSelect = fncSelectAllRecordOrder($strTable, $order);
																			
																			while ($objResult = mysql_fetch_object($objSelect)) 
																			{ 
																				echo "<li>".$objResult->start_date."</li>";
																			} 
																			?>
																		</ul>
																		<!-- <div class="aligncenter"><a href="#" class="link3"><span><span>Buy Now!</span></span></a></div> -->
																	</article>
																	<article class="col-4 indent">
																		<h4 class="aligncenter">Price</h4>
																		<ul class="info-list1 alt">
																			<? 
																			
																			$strTable = "course";
																			$order = "start_date";
																			$objSelect = fncSelectAllRecordOrder($strTable, $order);
																			
																			while ($objResult = mysql_fetch_object($objSelect)) 
																			{ 
																				echo "<li> $".$objResult->price."</li>";
																			} 
																			?>
																		</ul>
																		<!-- <div class="aligncenter"><a href="#" class="link3"><span><span>Buy Now!</span></span></a></div> -->
																	</article>
																	<article class="col-5 indent">
																		<h4 class="aligncenter">pdf</h4>
																		<ul class="info-list1 alt">
																		
																		<? 
																			
																			$strTable = "course";
																			$objSelect = fncSelectAllRecord($strTable);
																			
																			while ($objResult = mysql_fetch_object($objSelect)) 
																			{ 
																				echo "<li><a href='load_pdf.php?course=".$objResult->course_id."'>download</a></li>";
																			} 
																			?>
																		</ul>
																	
																	</article>
																	
																	<div class="clear"></div>
																
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