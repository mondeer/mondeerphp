<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}

?>
<!DOCTYPE>
<html>
<head>
	<meta charset="utf-8">
	<title>Nandi County</title>
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

      <!--<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Home page</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">-->
</head>
<body >

<!-- <div ><div style="width: 1349px; top: 0px; bottom: auto; left: 0px; right: auto; position: fixed;" class="nav-holder nav-container sticky">-->





<div style="height: 64px; width: 100%; margin: auto; position: relative; float: none; left: auto; right: auto; top: auto; bottom: auto;" class="wrapper-sticky">
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

					<a class="kali-logo" href="login-home.php" target="_blank"><img src="img/usefull-logo.png" alt="Kali" width="100px" /></a>
                </div>
				
                <div class="navbar-collapse collapse ">
                   
				   <div class="bs-example">
						<ul class="nav navbar-nav nav-pills">
							<li class="active"><a href="login-home.php">Home</a></li>
							<li><a href="chart_sample.html">Market Analysis</a></li>
							<li class="dropdown">
								<a href="#" data-toggle="dropdown" class="dropbtn">Trade Fairs<b class="caret"></b></a>
								<ul class="dropdown-content">
									<li><a href="fair.html">Fair 2016</a></li>
									<li><a href="#">Drafts</a></li>
									<li><a href="#">Sent Items</a></li>
									<li class="divider"></li>
									<li><a href="about.html">About Us</a></li>
								</ul>
							</li>
							<li class="dropdown pull-right">
								<a href="#" data-toggle="dropdown" class="dropbtn">Account<b class="caret"></b></a>
								<ul class="dropdown-content">
									
									<li><a href='adduser.php'>Add New User</a></li>
									<li><a href='change-pwd.php'>Change password</a></li>
									<li class="divider"></li>
									<li><a href='logout.php'>Logout</a></li>
								</ul>
							</li>
							<li></li>

						</ul>
						Logged in as:<?= $fgmembersite->UserFullName(); ?>!
					
                </div>
            </div>
        </div>
	</header>
	<!-- end header -->
	<section id="featured">
	<!-- start slider -->
	<div class="my-container">
		<div class="row">
			
	<!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
				<li>
                <img src="img/tea.png" alt="" />
				</li>
              <li>
                <img src="img/farm.png" alt="" />
              </li>
            </ul>
        </div>
	<!-- end slider -->
			
		</div>
	</div>	

           <div class="cta-text">
                    <h1>The most advanced information system for agricultural stakeholders </br> in nandi county</h1> 					 
			</div>		
	</section>

	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-lg-4">
						<div class="box">
							<div class="box-gray aligncenter">
								<h4>Brought to you by<br />Nandi Agricultural Ministry</h4>
								<div class="icon">
								<i class="fa fa-users fa-3x"></i>
								</div>
								<p align="justify">
								 The Nandi county ministry of agriculture is the high producer of agricultural products <a href="login-home.php" target="_blank">in kenya</a>. Nandi county is strategically situated in the cold and wet region having a good  rainy intervals seasons, with rich soil which produces a range of agricultural produce. <br /><br /><br />
								</p>									
							</div>
							<div class="box-bottom">
								<a href="chart_sample.html" target="_blank">Learn more</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="box">
							<div class="box-gray aligncenter">
								<h4>Leaders in<br />Agricultural information</h4>
								<div class="icon">
								<i class="fa fa-book fa-3x"></i>
								</div>
								<p align="justify">
								 This is a web based project which is useful for farmers, agricultural students and general public. This is an open discussion portal providing solutions to small farmers and agricultural students. It also provides soil analysis for all regions and suggestions on which fertilizers to use where and how much? And which crop, herb or vegetable to be grown where and in which season? It also helps to make decisions on market and best prices. Information about major crop markets and their current price for the crop will be published daily. 
								</p>
									
							</div>
							<div class="box-bottom">
								<a href="index.html" target="_blank">Learn more</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="box">
							<div class="box-gray aligncenter">
								<h4>Leading produce<br />Marketing portal</h4>
								<div class="icon">
								<i class="fa fa-cogs fa-3x"></i>
								</div>
								<p align="justify">
								 Farmers system is playing an important and vital role in agricultural production and marketing. This system allows farmers to save time on order and delivery and getting feedback. In the existing competition, there is a need to rapidly attract new customers as well as retain existing customers. Crop database must be managed. The database includes the kinds of crops, the size of cultivated area, time of harvest and yield. Farmers or the extension personnel transmit those data via the Internet to database server. Further, information provides the farmer with an important instrument for decision making and taking action.
								</p>
									
							</div>
							<div class="box-bottom">
								<a href="index.html" target="_blank">Learn more</a>
							</div>
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
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Nandi Agrics Forum" href="index.html" target="_blank">
						<!--<span class="overlay-img"></span>-->
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="img/farm_2003.png" class="img-circle" alt="Nandi county Agricultural forum">
						</div>
						</li>
						<!-- End Item Project -->
						<!-- Item Project and Filter Name -->
						<li class="item-thumbs col-lg-3 design" data-id="id-1" data-type="icon">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Nandi County CEC Agriculture" href="login.php" target="_blank">
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
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Land of Tea" href="chart_sample.html" target="_blank">
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
</body>
</html>
