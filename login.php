<?PHP
require_once("./include/membersite_config.php");

if(isset($_POST['submitted']))
{
   if($fgmembersite->Login())
   {
        $fgmembersite->RedirectToURL("login-home.php");
   }
}

?>
<!DOCTYPE>
<html>
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Login</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css" />
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
	  
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />
	<meta name="author" content="http://bootstraptaste.com" />
	<!-- css -->
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
	<link href="css/jcarousel.css" rel="stylesheet" />
	<link href="css/flexslider.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />


<!-- Theme skin -->
<link href="skins/default.css" rel="stylesheet" />
	  
	  
</head>
<body>

<div id="wrapper">
	<!-- start header -->
	
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

					<a class="kali-logo" href="login-home.php" target="_blank"><img src="img/usefull-logo.png" alt="Nandi" width="150" /></a>
                </div>
            </div>
        </div>
	</header>
	<!-- end header -->
	<section id="featured">
	<!-- start slider -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
	<!-- Slider -->
	<!-- end slider -->
			</div>
		</div>
	</div>	

           <div class="cta-text">
                    <h1>The most advanced information system for agricultural stakeholders </br> in nandi county</h1> 
					<br /><br /> 
			</div>		
	

	</section>

	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-lg-3">
						<div class="box">
							<div class="box-gray aligncenter">
								<h4>WELCOME TO<br />NANDI COUNTY LAND OF AGRICULTURE</h4>
								<div class="icon">
								<i class="fa fa-users fa-3x"></i>
								</div>
																	
							</div>
							
						</div>
					</div>
					<div class="col-lg-6">
						
							<div>
								<h4>Login to the System</h4>
								
																	<!-- Form Code Start -->
									<div id='fg_membersite'>
									<form id='login' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
									
									<legend>Login</legend>

									<input type='hidden' name='submitted' id='submitted' value='1'/>

									<div class='short_explanation'>* required fields</div>

									<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
									<div class='container'>
										<label for='username' >UserName*:</label><br/>
										<input type='text' name='username' id='username' value='<?php echo $fgmembersite->SafeDisplay('username') ?>' maxlength="50" /><br/>
										<span id='login_username_errorloc' class='error'></span>
									</div>
									<div class='container'>
										<label for='password' >Password*:</label><br/>
										<input type='password' name='password' id='password' maxlength="50" /><br/>
										<span id='login_password_errorloc' class='error'></span>
									</div>

									<div class='container'>
										<input type='submit' name='Submit' value='Submit' />
									</div>
									<div class='short_explanation'><a href='reset-pwd-req.php'>Forgot Password?</a></div>
									
									</form>
									<!-- client-side Form Validations:
									Uses the excellent form validation script from JavaScript-coder.com-->

									<script type='text/javascript'>
									// <![CDATA[

										var frmvalidator  = new Validator("login");
										frmvalidator.EnableOnPageErrorDisplay();
										frmvalidator.EnableMsgsTogether();

										frmvalidator.addValidation("username","req","Please provide your username");
										
										frmvalidator.addValidation("password","req","Please provide the password");

									// ]]>
									</script>
									</div>
									<!--
									Form Code End (see html-form-guide.com for more info.)
									-->
									
							</div>
							<div class="box-bottom">
								<a href="register.php" target="_blank">Register</a>
							</div>
						
					</div>
					<div class="col-lg-3">
						<div class="box">
							<div class="box-gray aligncenter">
								<h4>Leading produce<br />Marketing portal</h4>
								<div class="icon">
								<i class="fa fa-cogs fa-3x"></i>							
								</div>
							</div>
						</div>
					</div>
		</div>
		<!-- divider -->
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
		<!-- end divider -->
		<!-- Portfolio Projects -->
		<div class="row">
			<div class="col-lg-12">
				
				<div class="row">
					<section id="projects">
					<ul id="thumbs" class="portfolio">
						<!-- Item Project and Filter Name -->
						<li class="col-lg-3 design" data-id="id-0" data-type="web">
						<div class="item-thumbs">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Nandi Agrics Forum" href="login.php" target="_blank">
						<!--<span class="overlay-img"></span>-->
						<span class="overlay-img-thumb font-icon-plus">Forum</span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="img/farm_2003.png" class="img-circle" alt="Nandi county Agricultural forum">
						</div>
						</li>
						<!-- End Item Project -->
						<!-- Item Project and Filter Name -->
						<li class="item-thumbs col-lg-3 design" data-id="id-1" data-type="icon">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Nandi County CEC Agriculture" href="http://www.nethunter.com/" target="_blank">
						<!--<span class="overlay-img"></span>-->
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="img/cec.png" class="img-circle" alt="CEC Agrics Nandi">
						<p align="justify">Message from CEC Agriculture </br> Nandi County</p>
						</li>
						<!-- End Item Project -->
						
						<!-- Item Project and Filter Name -->
						<li class="item-thumbs col-lg-3 photography" data-id="id-2" data-type="illustrator">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Land of Tea" href="https://www.exploit-db.com" target="_blank">
						<!--<span class="overlay-img"></span>-->
						<span class="overlay-img-thumb font-icon-plus">Tea</span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="img/useful.png" class="img-circle" alt="The Land of tea">
						</li>
						<!-- End Item Project -->
						
						<!-- Item Project and Filter Name -->
						<li class="item-thumbs col-lg-3 photography" data-id="id-2" data-type="illustrator">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Agricultural Nation" href="https://www.kalro.org/" target="_blank">
						<!--<span class="overlay-img"></span>-->
						<span class="overlay-img-thumb font-icon-plus">Kalro</span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="img/kalro.png" class="img-circle" alt="The Kenya agricultural portal">
						</li>
						<!-- End Item Project -->
						
					</ul>
					</section>
				</div>
			</div>
		</div>

	</div>
	</section>
	<footer>

	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>
							<span>&copy; Nandi Agrics</span>
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a href="https://www.facebook.com/KaliLinux" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://twitter.com/KaliLinux" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://www.linkedin.com/groups?gid=970937" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
</div>
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/google-code-prettify/prettify.js"></script>
<script src="js/portfolio/jquery.quicksand.js"></script>
<script src="js/portfolio/setting.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
</div>
</body>
</html>