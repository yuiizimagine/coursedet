<?
	include("phpMySQLFunctionDatabase.php");
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>CourseDet - Course Detail</title>
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
					</div> -->
				</div>
				<div class="inside1">
					<div class="wrap row-2">

						<article class="col-2">
						<?
						$strTable = "course";
						$strCondition = "course_id = ".$_GET['cid'];
						$objSelect = fncSelectRecord($strTable,$strCondition);
	
						
						echo "<h1>Course Detail</h1><br>
							<img src='images/crouse-detail.png'>
							<h2>".$objSelect[course_name]."</h2>
							<p><b>Overview</b></p>
							<UL TYPE='square'>
							<LI>Fee: $".$objSelect[price]."</LI>
							<LI>Quantity: ".$objSelect[trainee_no]."</LI>
							<LI>Trainer: <a href='profile.php?user=".$objSelect[trainer]."'>".$objSelect[trainer]."</a></LI>
							<LI>Contact Name: ".$objSelect[con_name]."</LI>
							<LI>Contact Phone: ".$objSelect[con_phone]."</LI>
							<LI>Contact Email: ".$objSelect[con_email]."</LI>
							<LI>Start Date : ".$objSelect[start_date]."</LI>
							<LI>End Date : ".$objSelect[end_date]."</LI>
							<LI>Place: ".$objSelect[place]."</LI>
							</UL>
							
							<br><br><p><b>Detail</b></p>
							<p>".$objSelect[course_detail];
							
							if($objSelect[trainer] == $_SESSION['UserID']){
								echo "<div class='aligncenter'>
								<a href='course_edit.php?cid=".$objSelect[course_id]."' class='link1'\><span><span>Edit Course</span></span></a>
								</div>";
							}
						?>
							
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