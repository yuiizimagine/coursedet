<?
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>CourseDet - ABOUT ME</title>
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
			<div id="slogan">
				<!-- <img src="images/slide-title22.png"> -->
					<div class="inside">
						<h2><span>About me</span> </h2>
						<p>Scrum.org is the home of Scrum, and is leading the evolution and maturity of Scrum to improve the profession of software development.

Scrum.org strives to provide all of the tools and resources needed by Scrum practitioners to deliver value using Scrum. We host the Scrum Guide in 30 languages, provide Scrum assessments to allow people to evaluate themselves and improve</p>
					</div>
				</div>
				<!-- <ul class="banners wrapper">
					<li><a href="#">Basic  &nbsp; <b>$9.95</b></a></li>
					<li><a href="#">Economy  &nbsp; <b>$14.95</b></a></li>
					<li><a href="#">Deluxe  &nbsp; <b>$19.95</b></a></li>
					<li><a href="#">Unlimited  &nbsp; <b>$24.95</b></a></li>
				</ul> -->
				<div class="inside1">
					<div class="wrap row-2">
						<!-- <article class="col-1">
							<ul class="solutions">
								<li><img src="images/icon1.gif">
									<p>Quickly and easily create a Web Page</p>
									<a href="#"><b>Read More</b></a></li>
								<li><img src="images/icon2.gif">
									<p>Share documents any time, any where</p>
									<a href="#"><b>Read More</b></a></li>
								<li><img src="images/icon3.gif">
									<p>24/7 Real Person Customer Support</p>
									<a href="#"><b>Read More</b></a></li>
								<li><img src="images/icon4.gif">
									<p>Online Account Management Tools</p>
									<a href="#"><b>Read More</b></a></li>
							</ul>
						</article> -->
						<article class="col-2">
							<h2>MEMBER</h2>
							<p><b>Technical  Manager : </b> 53363287	นางสาวกนกพร เรื่อนรื่น	auicpe@gamil.com	<br> </p>
							<p><b>Technical  Manager : </b> 53363393	นางสาวจุฑาทิพย์ แก่นสิงห์	yuiizimagine@gmail.com	 <br> </p>
							<p><b>Planning Manager : </b> 53363584	นางสาวน้ำฝน ในพิมาย	numfontook@gmail.com	<br> </p>
							<p><b>Product Owner : </b> 53363645	นางสาวปวีณา บุตรโคตร	biribiri.nungning@gmail.com	 <br> </p>
							<p><b>Test Manager : </b> 53363799	นางสาวภิพิมพร เบญญาไพจิตร	pipim.new@gmail.com,infinite1sunshine@gmail.com	 <br> </p>
							<p><b>Quality Manager : </b> 53363942	นางสาวแวววรรณ จันทบุตร wawawaw_naja@hotmail.com	<br><br><br></p>
							<p><b>ปล.รูปกับเอฟเฟคเดี๋ยวใส่ทีหลังนะ เอาแค่นี้ไปก่อน</b></p>
							<!-- <div class="img-box"><img src="images/2page-img.jpg">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloreque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem eaque ipsa quae sequi nesciunt. </div>
							<p class="p1">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur vero eos et accusamus et iusto.</p>
							<a href="#" class="link2"><span><span>Read More</span></span></a> --> </article>
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