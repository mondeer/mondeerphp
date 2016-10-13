<?PHP
require_once("./include/membersite_config.php");

if(isset($_POST['submitted']))
{
   if($fgmembersite->RegisterUser())
   {
        $fgmembersite->RedirectToURL("confirmreg.php");
   }
}

?>
<!DOCTYPE>
<html>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <title>Register To Nandi County Agricultural System</title>
    <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css" />
    <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
    <link rel="STYLESHEET" type="text/css" href="style/pwdwidget.css" />
    <script src="scripts/pwdwidget.js" type="text/javascript"></script>

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

<style> 
input[type=button], input[type=submit], input[type=reset] {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}
</style>


</head>
<body>
<div class="wrapper">
    <header >
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

<div style="width:400px; margin-right:auto; margin-left:auto; border:1px solid #000;">
                <!-- Form Code Start -->
            <div id='fg_membersite'>
            <form id='register' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
            
            <legend>Register</legend>

            <input type='hidden' name='submitted' id='submitted' value='1'/>

            <div class='short_explanation'>* required fields</div>
            <input type='text'  class='spmhidip' name='<?php echo $fgmembersite->GetSpamTrapInputName(); ?>' />

            <div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
            <div class='container'>
                <label for='name' >Your Full Name*: </label><br/>
                <input type='text' name='name' id='name' value='<?php echo $fgmembersite->SafeDisplay('name') ?>' maxlength="50" /><br/>
                <span id='register_name_errorloc' class='error'></span>
            </div>
            <div class='container'>
                <label for='email' >Email Address*:</label><br/>
                <input type='text' name='email' id='email' value='<?php echo $fgmembersite->SafeDisplay('email') ?>' maxlength="50" /><br/>
                <span id='register_email_errorloc' class='error'></span>
            </div>
            <div class='container'>
                <label for='username' >UserName*:</label><br/>
                <input type='text' name='username' id='username' value='<?php echo $fgmembersite->SafeDisplay('username') ?>' maxlength="50" /><br/>
                <span id='register_username_errorloc' class='error'></span>
            </div>
            <div class='container' style='height:80px;'>
                <label for='password' >Password*:</label><br/>
                <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                <noscript>
                <input type='password' name='password' id='password' maxlength="50" />
                </noscript>    
                <div id='register_password_errorloc' class='error' style='clear:both'></div>
            </div>

            <div class='container'>
               <input type='submit' value='Submit' /> 
            </div>

            
            </form>
            <!-- client-side Form Validations:
            Uses the excellent form validation script from JavaScript-coder.com-->

            <script type='text/javascript'>
            // <![CDATA[
                var pwdwidget = new PasswordWidget('thepwddiv','password');
                pwdwidget.MakePWDWidget();
                
                var frmvalidator  = new Validator("register");
                frmvalidator.EnableOnPageErrorDisplay();
                frmvalidator.EnableMsgsTogether();
                frmvalidator.addValidation("name","req","Please provide your name");

                frmvalidator.addValidation("email","req","Please provide your email address");

                frmvalidator.addValidation("email","email","Please provide a valid email address");

                frmvalidator.addValidation("username","req","Please provide a username");
                
                frmvalidator.addValidation("password","req","Please provide a password");

            // ]]>
            </script>

            <!--
            Form Code End (see html-form-guide.com for more info.)
            -->
</div>


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