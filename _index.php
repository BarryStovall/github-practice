<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="robots" content="" />
		<meta name="author" content="Barry Stovall" />
		
		<link REL="SHORTCUT ICON" HREF="imgs/favicon.ico">
		<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<!--[if IE 7]>
		<link rel="stylesheet" href="ie7.css" type="text/css" media="screen" />
		<![endif]-->
		
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
		
		<title>Need-A-Book</title>
		<script type="text/javascript" src="http://www.google.com/jsapi"></script>
		<script type="text/javascript">
			google.load('jquery', '1');
			google.load("jqueryui", "1.8.9");
		</script>
	</head>
	<body>
	<!-- START BANNER -->
		<div id="banner">
			<div id="banner-wrap">
				<h1>NEED-A-BOOK</h1>
				<form id='login' action='login.php' method='post' accept-charset='UTF-8'>
					<input type='hidden' name='submitted' id='submitted' value='1'/>
					<label for='username' >UserName*:</label>
					<input type='text' name='username' id='username'  maxlength="50" />
					<label for='password' >Password*:</label>
					<input type='password' name='password' id='password' maxlength="50" />
					<input type='submit' name='Submit' value='Login' />
				</form>
 
			</div>
		</div>
	<!-- END BANNER -->
	<!-- START NAV BAR -->
		<div id="nav">
			<div id="nav-wrap">
				<a href="#"><li align="center">ABOUT</li></a>
				<a href="#"><li align="center">CONTACT</li></a>
				<a href="#"><li align="center">FAQ</li></a>
				<p id="signup">Not a member? <a href="#">Sign Up!</a></p>
			</div>
		</div>
	<!-- END NAV BAR -->
	<!-- START CONTENT -->
		<div id="content-container">
			<div id="content-wrap">
				<section id="intro-sec">
					<h2>WELCOME TO NEED-A-BOOK</h2>
					<p id="intro">This project was born of necessity. I don&apos;t need to tell you how expensive college is but 					whatever your goal is, chances are, you&apos;re gonna need to bite that bullet and fork some money over to an 					educational institution in order to receive your proof of purchase/ degree. Unfortunately the costs do not 						stop with enrollment. Ahh yes, you guessed it. Text books... and you have to have them. That is of course 						unless you don&apos;t mind spending all your free time outside of class in the library rushing to finish your 					homework using the one book (that you can&apos;t check out, by the way) that your professor kindly placed in 					the library for students unable to afford their own to fight over. I&apos;m also sure there&apos;s no reason 					for me to get into the whole issue of selling your over-priced books back to the same crooks that sold it to 					you in the first place only to have them buy it back for about 5-10% of what you paid, right?<br/><br/> 
					Enough of my jaded rambling. This project is designed to save your life and at the same time it allows me to 					stick it to the Man. If you listen closely you can almost hear the click of his belt buckle and the rattling 					of keys and loose change in his pockets as he pulls his pants down to stick it to you.</p>
				</section>
				<section id="intro-sec2">
					<img id="chalkboard" src="img/chalkboard_03.png" alt="equation for the diet of a typical student" width="393" 					height="180" />
					<h3>FOR THE PEOPLE, BY THE PEOPLE</h3>
					<p>This site has been created as a force for good... <b>for the people</b>. It can only be as successful as you, the 					people, make it. Create an account to get started. Once you have your own profile you can begin to populate 					your &quot;backpack&quot; with the books you currently own and are willing to part with as well as post 						requests for the books you need. If made successful, <b>by the people</b>, you&apos;ll be able to stop eating ramen 					every night. Besides, you&apos;re in college now... shouldn&apos;t you be saving money to go to Cancun or 						something?</p>
				</section>
			</div>
			
		</div>
	<!-- END CONTENT -->
	<!-- START FOOTER -->
		<footer>
			<div id="footer-wrap">
				<div id="social">
					<a href="#"><img class="social" src="img/facebook.png" alt="facebook" width="34" height="34" /></a>
					<a href="#"><img class="social" src="img/twitter.png" alt="twitter" width="34" height="34" /></a>
				</div>
				<div id="spacer">
					<img src="img/spacer.png" alt="spacer" width="960" height="2" />
				</div>
				<p class="copyright" align="center">&copy; <?php echo date("Y"); ?> NEED-A-BOOK LLC. ALL RIGHTS RESERVED. WEB 					DEVELOPMENT BY: WWW.CAMDESIGNS.NET</p>
			</div>
		</footer> 
	<!-- END FOOTER -->
		
	</body>
	
</html>