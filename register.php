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
			<div id="slogan">
					<div class="inside">
						<h2><span></span> </h2>
						<p></p>
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
							<h2> Register &nbsp;</h2>
							<p>&nbsp;</p>
                          <form name="form1" id="register" method="post" action="member_insert.php">
                            <table width="566" border="0" cellpadding="3">
                              <tr>
                                <td width="8" height="33" rowspan="2">&nbsp;</td>
                                <td width="138" height="33">Username</td>
                                <td width="354"><label for="user"></label>
                                <input type="text" name="user" id="user"></td>
                                <td width="32">&nbsp;</td>
                              </tr>
                              <tr>
                                <td height="34">Password</td>
                                <td><label for="pwd"></label>
                                <input type="password" name="pwd" id="pwd"></td>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td height="31">&nbsp;</td>
                                <td>Verify password</td>
                                <td><label for="repwd"></label>
                                <input type="password" name="repwd" id="repwd"></td>
                                <td>&nbsp;</td>
                              </tr>
							  <tr>
                                <td height="30">&nbsp;</td>
                                <td>show Email</td>
                                <td><label for="visible_mail"></label>
                                  <label>
                                    <input type="radio" name="visible_mail" id="true" value='1'>
                                  </label>
								<label for="visible_mail"></label>
                                Yes &nbsp;&nbsp;
                                <label>
                                  <input type="radio" name="visible_mail" id="false" value='0'>
                                  No
                                </label></td>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td height="32">&nbsp;</td>
                                <td>E-mail</td>
                                <td><label for="email"></label>
                                <input type="text" name="email" id="email"></td>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td height="32">&nbsp;</td>
                                <td>Name</td>
                                <td><label for="name"></label>
                                <input type="text" name="name" id="name"></td>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td height="29">&nbsp;</td>
                                <td>Surname</td>
                                <td><label for="surname"></label>
                                <input type="text" name="surname" id="surname"></td>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td height="30">&nbsp;</td>
                                <td>Gender</td>
                                <td><label for="gender"></label>
                                  <label>
                                    <input type="radio" name="gender" id="male" value="male">
                                  </label>
								<label for="gender"></label>
                                Male &nbsp;&nbsp;
                                <label>
                                  <input type="radio" name="gender" id="female" value="female">
                                  Female
                                </label></td>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td height="33">&nbsp;</td>
                                <td>Birthdate</td>
                                <td>dates 
                                  <select name="date" size="1" id="date">
                                  <? for($i=1 ; $i<=31 ; $i++)
								  { 
								  	echo "<option value='".$i."'>".$i."</option>";
								  } 
								  ?>
                                </select> 
                                  &nbsp;&nbsp;Months 
                                  <label for="month"></label>
                                  <select name="month" size="1" id="month">
                                    <option value='01'>January</option>
                                    <option value='02'>February</option>
                                    <option value='03'>March</option>
                                    <option value='04'>April </option>
                                    <option value='05'>May </option>
                                    <option value='06'>June </option>
                                    <option value='07'>July </option>
                                    <option value='08'>August </option>
                                    <option value='09'>September </option>
                                    <option value='10'>October </option>
                                    <option value='11'>November </option>
                                    <option value='12'>December </option>
                                  </select> 
                                  &nbsp;&nbsp;Years 
                                  <label for="year"></label>
                                  <select name="year" size="1" id="year">
                                  <? for($i=2013 ; $i>=1960 ; $i--)
								  { 
									echo "<option value='".$i."'>".$i."</option>";
								  } 
								  ?>
                                  </select></td>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td height="31">&nbsp;</td>
                                <td>Address</td>
                                <td><label for="date"></label>
                                  <label for="addr"></label>
                                <textarea name="addr" id="addr" cols="45" rows="5"></textarea></td>
                                <td>&nbsp;</td>
                              </tr>
                            </table>
<!--                          </form>
                          <p><form action="member_insert.php" method="post">  -->



<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div class="aligncenter">
  <a href="#" class="link1" onClick="document.getElementById('register').submit()" \><span><span>Sign Up</span></span>
  </a>
  
  </div>
</form>
<!--</form>&nbsp; -->
</p>
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