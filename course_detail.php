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
							<h1>Course Detail</h1><br>
							<img src="images/crouse-detail.png">
							<h2>The Professional Scrum Foundations Program</h2>
							<p><b>Details</b></p>
							<UL TYPE="square">
							<LI>Fee: $100</LI>
							<LI>Passing score: 85%</LI>
							<LI>Time limit: 60 minutes</LI>
							<LI>Format: Multiple Choice and True/False</LI>
							<LI>Required course: None</LI>
							<LI>Recommended course: Professional Scrum Foundations or Professional Scrum Master</LI>
							<LI>Practice Assessment: Scrum Open</LI>
							</UL>
							
							<br><br><p><b>Overview</b></p>
							<p>Scrum Teams succeed best with a solid foundation and this two-day course prepares individuals or teams to begin effectively using Scrum immediately. The Scrum framework, mechanics, and roles of Scrum are emphasized with a focus on practical application. </p>
							<p>Common missteps in the adoption of Scrum have been seen over and over again across industries, companies, and teams. Rather than coaching teams back from a poorly functioning Scrum implementation, PSF exposes these common missteps, increases the awareness of the associated symptoms, and provides prescriptive guidance to avoid going off track. </p>
							<p>Professional Scrum Foundations (PSF) is the perfect introduction to Scrum for anyone new to the framework. Whether your team needs a flawless Scrum launch or needs to reboot a struggling Scrum implementation, this class lays the foundation for an effective Scrum team. This course also provides the foundation of knowledge needed for role-focused training for Product Owners, Scrum Masters and Developers.</p>
							
							<br><p><b>Audience</b></p>
							<p>But the PSF course is not for everyone. Well-functioning Scrum teams looking for assistance with advanced topics like Scaling Scrum or implementing a rigorous ROI framework will not receive as much benefit from this course. Teams looking to explore more advanced Scrum topics such as Scaling Scrum or Release Planning should consider the Professional Scrum Master program.
							PSF is most effective as a training event for a dedicated team.</p>
							<p><b>Syllabus</b></p>
							<p>In addition to the subjects noted below, students actively participate in the Scrum process with realistic and practical hands-on exercises that reinforce the learning points. Practicing Scrum ensures that students complete the class with new skills in addition to new knowledge and theory.</p>
							<img src="images/crouse-detail1.png">
							<br><br><p><b>The Scrum Framework</b></p>
							<p>Students dive into the Scrum software development framework including, roles and responsibilities, principles, artifacts, events and time boxes, and rules and customs.</p>
							<p><b>Introducing Scrum and Agile</b></p>
							<p>This module discusses the current state of the software industry and Scrum is role within it. Topics include the origins of Scrum, misconceptions of the framework, the value that Scrum provides, and an exploration of self-organization as a power tool for increasing productivity.</p>
							<p><b>Scrum Planning</b></p>
							<p>Learn practical techniques of planning releases, managing Product Backlogs, keeping Sprints on track, and maintaining healthy team behaviors. Although many effective techniques exist for expressing requirements, this module equips teams to discover, express, and decompose requirements as Backlog Items using proven techniques.</p>
							<p><b>Keeping Scrum Healthy</b></p>
							<p>This module focuses on common missteps teams make when adopting Scrum and strategies to avoid them. In addition to discussing typical patterns/anti-patterns in this module, class attendees practice some of the more courageous conversations that commonly occur.</p>
							<p><b>Getting Started</b></p>
							<p>Following an excellent training event, Teams often struggle implementing what seemed so reasonable just a few days ago. This discussion helps attendees plan and prepare to actually be effective with Scrum immediately, marking the PSF as the true catalyst for change and increasing agility within your organization.</p>
							
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