<?
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>CourseDet - FAQ</title>
<meta name="description" content="Place your description here">
<meta name="keywords" content="put, your, keyword, here">
<meta name="author" content="Templates.com - website templates provider">
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/maxheight.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<!--[if lt IE 7]>
	<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
 <![endif]-->
<!--[if lt IE 9]>
  	<script type="text/javascript" src="js/html5.js"></script>
  <![endif]-->
</head>
<body id="page4" onLoad="new ElementMaxHeight();">
<div class="tail-top3">
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
				<div id="slogan" class="bot-indent1">
				<img src="images/head_FAQ.png">
					<div class="inside">
						<h2><span>FAQ</span> SCRUM</h2>
						<p>The Scrum.org community is a global network of Scrum practitioners, working together to improve software development. We invite you to join us. Take your time to learn what you can from others who have already been where you are. Find answers in our library of resources. Attend a live event. Seek guidance from community experts that know the challenges you face. And teach others tomorrow what you learn today.</p>
					</div>
				</div>
				<!-- <div class="wrapper row-1">
					<div class="box col-1 maxheight">
						<div class="border-right maxheight">
							<div class="border-bot maxheight">
								<div class="border-left maxheight">
									<div class="left-top-corner maxheight">
										<div class="right-top-corner maxheight">
											<div class="right-bot-corner maxheight">
												<div class="left-bot-corner maxheight">
													<div class="inner">
														<h3>Basic Plan</h3>
														<ul class="info-list">
															<li><span>Disk space</span>300 Gb</li>
															<li><span>Monthly transfer</span>3000 Gb</li>
															<li><span>FTP accounts</span>25</li>
															<li><span>Email boxes</span>1000</li>
															<li><span>Free domains</span>1</li>
														</ul>
														<span class="price">$ 9.95 p/m</span>
														<div class="aligncenter"><a href="#" class="link1"><span><span>Learn More</span></span></a></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="box col-2 maxheight">
						<div class="border-right maxheight">
							<div class="border-bot maxheight">
								<div class="border-left maxheight">
									<div class="left-top-corner maxheight">
										<div class="right-top-corner maxheight">
											<div class="right-bot-corner maxheight">
												<div class="left-bot-corner maxheight">
													<div class="inner">
														<h3>Economy Plan</h3>
														<ul class="info-list">
															<li><span>Disk space</span>500 Gb</li>
															<li><span>Monthly transfer</span>5000 Gb</li>
															<li><span>FTP accounts</span>50</li>
															<li><span>Email boxes</span>2500</li>
															<li><span>Free domains</span>2</li>
														</ul>
														<span class="price">$ 14.95 p/m</span>
														<div class="aligncenter"><a href="#" class="link1"><span><span>Learn More</span></span></a></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="box col-3 maxheight">
						<div class="border-right maxheight">
							<div class="border-bot maxheight">
								<div class="border-left maxheight">
									<div class="left-top-corner maxheight">
										<div class="right-top-corner maxheight">
											<div class="right-bot-corner maxheight">
												<div class="left-bot-corner maxheight">
													<div class="inner">
														<h3>Deluxe Plan</h3>
														<ul class="info-list">
															<li><span>Disk space</span>800 Gb</li>
															<li><span>Monthly transfer</span>8000 Gb</li>
															<li><span>FTP accounts</span>70</li>
															<li><span>Email boxes</span>3000</li>
															<li><span>Free domains</span>3</li>
														</ul>
														<span class="price">$ 19.95 p/m</span>
														<div class="aligncenter"><a href="#" class="link1"><span><span>Learn More</span></span></a></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="box col-4 maxheight">
						<div class="border-right maxheight">
							<div class="border-bot maxheight">
								<div class="border-left maxheight">
									<div class="left-top-corner maxheight">
										<div class="right-top-corner maxheight">
											<div class="right-bot-corner maxheight">
												<div class="left-bot-corner maxheight">
													<div class="inner">
														<h3>Unlimited Plan</h3>
														<ul class="info-list">
															<li><span>Disk space</span>Unlimited</li>
															<li><span>Monthly transfer</span>Unlimited</li>
															<li><span>FTP accounts</span>Unlimited</li>
															<li><span>Email boxes</span>Unlimited</li>
															<li><span>Free domains</span>Unlimited</li>
														</ul>
														<span class="price">$ 24.95 p/m</span>
														<div class="aligncenter"><a href="#" class="link1"><span><span>Learn More</span></span></a></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> -->
			<!-- 	<div class="inside1">
					<div class="wrap row-2">
						<article class="col-1">
							<h2>Solutions</h2>
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
							<h2><p>FAQ</p></h2><br>
							<div class="img-box"><b>Question : Can we have single Scrum Master(SM) for multiple projects ?</b><br> Answer : It is recommended to have a dedicated Scrum Master for each project. Diluting this could also dilute the effectiveness</div>
							<p><b>Question : Can Scrum Master be a Product Owner ?</b><br> Answer : Scrum Master should never be a product Owner.</p>
							<p><b>Question : Can Scrum Master be technical and can SM help the team if they are stuck with technical issues ?</b><br> Answer :  It does not matter if the SM is coming from technical background or management. However if SM is technical, he/she should be careful enough not to dilute the SMs responsibilities in the process of helping the team with technology stuff.</p>
							<p><b>Question : During the Scrum Meeting, my colleague talked about an impediment and I had the answer. However, can I answer it immediately and it won�t take more than 1 minute ?</b><br> Answer :  Do not diverge from the recommended rules around Scrum Meeting. Any discussion should happen outside the Scrum Meeting. Even though your answer takes only one minute, some one else could also jump in saying even he/she needs a chance to answer another question. This leads to chaos and could stretch Scrum Meeting beyond recommended limit of 15 to 20 minutes. My recommendation is to follow the rules by the book until every one gains experience.</p>
							<p><b>Question : I just need another 4 hours to complete my task and the iteration is coming to an end, can I stretch the Iteration/Sprint duration ?</b><br> Answer : No. Iterations are time boxed.</p>
							<p><b>Question : When people say Sprint duration is 30 days, is it working days ?</b><br> Answer : Sprint duration of 30 days means 30 calendar days.</p>
							<p><b>Question : The team has completed all the tasks before the sprint ends, what should they do now ?</b><br> Answer :  The team can approach the product owner and request for additional items from the PB.</p>
							<p><b>Question : Is it mandatory for the team to follow the Idealized line in the burn down charts ?</b><br> Answer :  Idealized(A.K.A Ideal) line provides just a point of reference.</p>
							<p><b>Question : Can I work on the undone tasks in the next iteration ?</b><br> Answer : Undone tasks would go back to Product Backlog and Product Owner would make a call on the set of requirements for the next iteration with due feedback from the team.</p>
							<p><b>Question : Should I use Iteration or Sprint ?</b><br> Answer : All sprints are iterations but not all iterations are Sprints. Sprint is the terminology coined by the Scrum co-founders to define an iteration.</p>
							<p><b>Question : What does it mean to be a Certified Scrum Professional (CSP)?</b><br> Answer : A Certified Scrum Professional has proven experience and expertise in the art of Scrum. CSP is the level of certification that all practitioners of Scrum should strive to attain. Before becoming a CSP, applicants must be CSMs, CSPOs, or CSDs.</p>
							<br><br><a href="#" class="link2"><span><span>Read More</span></span></a> </article>
						<article class="col-3">
							
							<br><br>
							<h2>More</h2>
							<ul class="list1">
								<li><a href="#">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</a></li>
								<li><a href="#">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</a></li>
								<li><a href="#">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</a></li>
								<li><a href="#">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</a></li>
								<li><a href="#">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</a></li>
								<li><a href="#">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</a></li>
								<li><a href="#">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</a></li>
								<li><a href="#">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</a></li>
								<li><a href="#">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</a></li>
								<li><a href="#">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</a></li>
								
							</ul>
							<!-- <a href="#" class="link2"><span><span>More Solutions</span></span></a>  --></article>
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