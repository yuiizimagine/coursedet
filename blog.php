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
                                <td align='right'>Date : </td>
                                <td>
                                  <select name='date' size='1' id='date'>
									<option value='1'>1</option>
									<option value='2'>2</option>
									<option value='3'>3</option>
									<option value='4'>4</option>
									<option value='5'>5</option>
									<option value='6'>6</option>
									<option value='7'>7</option>
									<option value='8'>8</option>
									<option value='9'>9</option>
									<option value='10'>10</option>
									<option value='11'>11</option>
									<option value='12'>12</option>
									<option value='13'>13</option>
									<option value='14'>14</option>
									<option value='15'>15</option>
									<option value='16'>16</option>
									<option value='17'>17</option>
									<option value='18'>18</option>
									<option value='19'>19</option>
									<option value='20'>20</option>
									<option value='21'>21</option>
									<option value='22'>22</option>
									<option value='23'>23</option>
									<option value='24'>24</option>
									<option value='25'>25</option>
									<option value='26'>26</option>
									<option value='27'>27</option>
									<option value='28'>28</option>
									<option value='29'>29</option>
									<option value='30'>30</option>
									<option value='31'>31</option>
								  </select> 
                                  <label for='month'></label>
                                  <select name='month' size='1' id='month'>
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
                                  <label for='year'></label>
                                  <select name='year' size='1' id='year'>
									<option value='2012'>2012</option>
									<option value='2013'>2013</option>
									<option value='2014'>2014</option>
                                  </select>
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
													
													
													$strTable = "blog";
													$field = "point";
													$objResult = fncSelectMAXRecord($strTable, $field);

													echo "
													<form id='top-topic' name='top-topic' method='post' action='like.php'>

													<div class='border-top'>
														<div class='inner1'>
															<h4 class='extra aligncenter'>HOT !!! --- ".$objResult['topic']."</h4>
															<div class=''>
																<div class='line-ver1 left-indent'>
																	<div class='line-ver2'>
																		<div class='line-ver3'>
																			<div class='wrap line-ver4'>
																						<table width='90%' border='1'>
																						<tr>
																						<td>
																						<img src=\"".$objResult[image]."\">
																						<br> <br>
																						</td>
																						<td width='20'>
																						</td>
																						<td>
																							<table width='100%'>
																								<tr>
																									<td align='left'>
																								<br><br>
																								"
																								.$objResult[detail].
																								"
																								<br><br><br>
																									</td>
																								</tr>
																								<tr>
																									
																										<td>
																									Write Date : "
																									.$objResult['date'].
																									"
																										</td>
																										<td>
																									<a href='like.php?id=".$objResult[blog_id]."&point=".($objResult[point]+1)."' class='link1' \><span><span>Like</span></span>
																										</td>
																									
																								</tr>
																							</table>
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
													</div>
													</form>";
													
													
													
	
													$strTable = "blog";
													$objSelect = fncSelectAllRecord($strTable);
													//if(!$objSelect)
													//{
													//	echo "Record not found<br>";
													//}
													
													while ($objResult = mysql_fetch_object($objSelect)) { 
														//echo "".$objResult->topic."<br>";
													
													
													//for($i = 1; $i < $objSelec ; $i++){
													echo "
													<form id='topic' name='topic' method='post' action='like.php'>

													<div class='border-top'>
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
																							<table width='100%'>
																								<tr>
																									<td align='left'>
																								<br><br>
																								"
																								.$objResult->detail.
																								"
																								<br><br><br>
																									</td>
																								</tr>
																								<tr>
																									
																										<td>
																									Write Date : "
																									.$objResult->date.
																									"
																										</td>
																										<td>
																									<a href='like.php?id=".$objResult->blog_id."&point=".($objResult->point+1)."' class='link1' \><span><span>Like</span></span>
																										</td>
																									
																								</tr>
																							</table>
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