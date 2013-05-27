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
                          <form name="form1" method="post" action="member_insert.php">
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
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                  <option>6</option>
                                  <option>7</option>
                                  <option>8</option>
                                  <option>9</option>
                                  <option>10</option>
                                  <option>11</option>
                                  <option>12</option>
                                  <option>13</option>
                                  <option>14</option>
                                  <option>15</option>
                                  <option>16</option>
                                  <option>17</option>
                                  <option>18</option>
                                  <option>19</option>
                                  <option>20</option>
                                  <option>21</option>
                                  <option>22</option>
                                  <option>23</option>
                                  <option>24</option>
                                  <option>25</option>
                                  <option>26</option>
                                  <option>27</option>
                                  <option>28</option>
                                  <option>29</option>
                                  <option>30</option>
                                  <option>31</option>
                                </select> 
                                  &nbsp;&nbsp;Months 
                                  <label for="month"></label>
                                  <select name="month" size="1" id="month">
                                    <option>January</option>
                                    <option>February</option>
                                    <option>March</option>
                                    <option>April </option>
                                    <option>May </option>
                                    <option>June </option>
                                    <option>July </option>
                                    <option>August </option>
                                    <option>September </option>
                                    <option>October </option>
                                    <option>November </option>
                                    <option>December </option>
                                  </select> 
                                  &nbsp;&nbsp;Years 
                                  <label for="year"></label>
                                  <select name="year" size="1" id="year">
                                    <option>2013</option>
                                    <option>2012</option>
                                    <option>2011</option>
                                    <option>2010</option>
                                    <option>2009</option>
                                    <option>2008</option>
                                    <option>2007</option>
                                    <option>2006</option>
                                    <option>2005</option>
                                    <option>2004</option>
                                    <option>2003</option>
                                    <option>2002</option>
                                    <option>2001</option>
                                    <option>2000</option>
                                    <option>1999</option>
                                    <option>1998</option>
                                    <option>1997</option>
                                    <option>1996</option>
                                    <option>1996</option>
                                    <option>1995</option>
                                    <option>1994</option>
                                    <option>1993</option>
                                    <option>1992</option>
                                    <option>1991</option>
                                    <option>1990</option>
                                    <option>1989</option>
                                    <option>1988</option>
                                    <option>1987</option>
                                    <option>1986</option>
                                    <option>1985</option>
                                    <option>1984</option>
                                    <option>1983</option>
                                    <option>1982</option>
                                    <option>1981</option>
                                    <option>1980</option>
                                    <option>1979</option>
                                    <option>1978</option>
                                    <option>1977</option>
                                    <option>1976</option>
                                    <option>1975</option>
                                    <option>1974</option>
                                    <option>1973</option>
                                    <option>1972</option>
                                    <option>1971</option>
                                    <option>1970</option>
                                    <option>1969</option>
                                    <option>1968</option>
                                    <option>1967</option>
                                    <option>1966</option>
                                    <option>1965</option>
                                    <option>1964</option>
                                    <option>1963</option>
                                    <option>1962</option>
                                    <option>1961</option>
                                    <option>1960</option>
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
<input type="submit" name="subRegis" value="Sign up"/></br>
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