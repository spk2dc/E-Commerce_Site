<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/

PayPal Tutorial References:
http://www.evoluted.net/thinktank/web-development/paypal-php-integration
https://www.sandbox.paypal.com/us/cgi-bin/webscr?SESSION=O15IpDSWsmsBJ5VGwU3dDZWngTkpwLuXZm5qU9DOeIfTnfZKT8PPUfa7q9u&dispatch=5885d80a13c0db1f8e263663d3faee8d94717bd303200c3af9aadd01a5f55080
http://www.webassist.com/tutorials/PayPal-Sandbox-for-testing
-->

<?php
	session_start();
	if(!isset($_SESSION['login_email'])) {
		echo "<script>window.location = 'index.php'</script>";
	}
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Pimped up Plants</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- Header Starts Here -->
<div class="header">
	<div class="container">
		<div class="header-top">
			
				<div class="logo">
					<a href="index.html"><img src="images/logo2.png"></a>
				</div>
			
				<div class="logotitle" style="float: left; padding-top: 23px; font-size: 45px; color: white;">PIMPED UP PLANTS
				</div>
			
			
			<div class="clear"></div>
			
			<div class="navigation">
				<ul class="navig">
					<li><a href="index.php">Home</a></li>
					<li><a href="">Shop</a></li>
					<li><a href="about.php">About</a></li>
					<li><?php
							if(!isset($_SESSION['login_email'])){
								echo '<a href="login.php">Log In</a>';
							}
							else{
								echo '<a href="signout.php">Log Out</a>';
							}
						?></li>
					<li><a href="register.php">Sign Up</a></li>
				</ul>
				<script>
					$( "span.menu" ).click(function() {
					  $( ".navigation ul.navig" ).slideToggle( "slow", function() {
					    // Animation complete.
					  });
					});
				</script>

			</div>
			<div class="clearfix"></div>
		
		</div>
		<!-- Banner Slide Starts Here -->
			<div class="slider">
			<!-- Slideshow 3 -->
			<script src="js/responsiveslides.min.js"></script>
			<script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 3
			      $("#slider3").responsiveSlides({
			        manualControls: '#slider3-pager',
			      });
			    });
			  </script>
		    <ul class="rslides" id="slider3">
		    <li>
		    	<div class="banner">
					<h1>Welcome <?php 
						if(isset($_SESSION['login_name'])) {
							echo $_SESSION['login_name'];
						}
					?>!<br></h1>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<h2>Delivery updates are being sent to: <?php
						if(isset($_SESSION['login_email'])){
							echo $_SESSION['login_email'];
						}
					 ?></h2>
				</div>
		   	</li>
		   	</ul>
		    <div class="clearfix"> </div>
		    </div>
		<!-- Banner Slide Ends Here -->
		
		<!-- MEMBER'S ONLY Best Seller Starts Here -->

			<div class="biseller-info">
			<ul id="memberFlexisel">

				<li>
					<div class="biseller-column">
					<img src="images/fabric.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark2">
							<a href="single.html">Member's Only Discount!</a>
						</div>
					<div class="biseller-name">
						<h4>Fabric</h4>
						<small>by Ankino Frique</small>
					</div>
					<div class="biseller-name1">
						<p style="color:red; font-size:200%;">$49.99</p>
					</div>
					<div class="clearfix"></div>
					<div class="price-s">
						<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="9ADCXJSR943ML">
						<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
						<input type="hidden" value="http://localhost/E-commerce_site/index.html" name="return">
						<input type="hidden" value="2" name="rm">
						<input type="hidden" value="219.99" name="amount">
						</form>
					</div>
					
					</div>
				</li>
				<li>
					<div class="biseller-column">
					<img src="images/fish-in-jar.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark2">
							<a href="single.html">Member's Only Discount!</a>
						</div>
					<div class="biseller-name">
						<h4>Fish in Jar</h4>
						<small>by Enrique Salmo</small>
					</div>
					<div class="biseller-name1">
						<p style="color:red; font-size:200%;">$99.99</p>
					</div>
					<div class="clearfix"></div>
					<div class="price-s">
						<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="9ADCXJSR943ML">
						<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
						<input type="hidden" value="http://localhost/E-commerce_site/index.html" name="return">
						<input type="hidden" value="2" name="rm">
						<input type="hidden" value="899.99" name="amount">
						</form>
					</div>
					
					</div>
				</li>
				<li>
					<div class="biseller-column">
					<img src="images/white-shoe-plant-fit.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark2">
							<a href="single.html">Member's Only Discount!</a>
						</div>
					<div class="biseller-name">
						<h4>White Shoe Plant</h4>
						<small>by Marco Spielmann</small>
					</div>
					<div class="biseller-name1">
						<p style="color:red; font-size:200%;">$49.99</p>
					</div>
					<div class="clearfix"></div>
					<div class="price-s">
						<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="9ADCXJSR943ML">
						<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
						<input type="hidden" value="http://localhost/E-commerce_site/index.html" name="return">
						<input type="hidden" value="2" name="rm">
						<input type="hidden" value="219.99" name="amount">
						</form>
					</div>
					
					</div>
				</li>
	     	</ul>
			</div>
		
		<!-- ORIGINAL Best Seller Starts Here -->

			<div class="biseller-info">
			<ul id="originalFlexisel">

				<li>
					<div class="biseller-column">
					<img src="images/fabric.jpg" alt="" class="veiw-img">
					<div class="biseller-name">
						<h4>Fabric</h4>
						<small>by Ankino Frique</small>
					</div>
					<div class="biseller-name1">
						<p>$219.99</p>
					</div>
					<div class="clearfix"></div>
					<div class="price-s">
						<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="9ADCXJSR943ML">
						<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
						<input type="hidden" value="http://localhost/E-commerce_site/index.html" name="return">
						<input type="hidden" value="2" name="rm">
						<input type="hidden" value="219.99" name="amount">
						</form>
					</div>
					
					</div>
				</li>
				<li>
					<div class="biseller-column">
					<img src="images/fish-in-jar.jpg" alt="" class="veiw-img">
					<div class="biseller-name">
						<h4>Fish in Jar</h4>
						<small>by Enrique Salmo</small>
					</div>
					<div class="biseller-name1">
						<p>$899.99</p>
					</div>
					<div class="clearfix"></div>
					<div class="price-s">
						<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="9ADCXJSR943ML">
						<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
						<input type="hidden" value="http://localhost/E-commerce_site/index.html" name="return">
						<input type="hidden" value="2" name="rm">
						<input type="hidden" value="899.99" name="amount">
						</form>
					</div>
					
					</div>
				</li>
				<li>
					<div class="biseller-column">
					<img src="images/white-shoe-plant-fit.jpg" alt="" class="veiw-img">
					<div class="biseller-name">
						<h4>White Shoe Plant</h4>
						<small>by Marco Spielmann</small>
					</div>
					<div class="biseller-name1">
						<p>$219.99</p>
					</div>
					<div class="clearfix"></div>
					<div class="price-s">
						<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="9ADCXJSR943ML">
						<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
						<input type="hidden" value="http://localhost/E-commerce_site/index.html" name="return">
						<input type="hidden" value="2" name="rm">
						<input type="hidden" value="219.99" name="amount">
						</form>
					</div>
					
					</div>
				</li>
	     	</ul>
			</div>
		</div>
			<script type="text/javascript">
				 $(window).load(function() {
					$("#memberFlexisel").flexisel({
						visibleItems: 3,
						animationSpeed: 1000,
						autoPlay: true,
						autoPlaySpeed: 3000,    		
						pauseOnHover: true,
						enableResponsiveBreakpoints: true,
				    	responsiveBreakpoints: { 
				    		portrait: { 
				    			changePoint:480,
				    			visibleItems: 1
				    		}, 
				    		landscape: { 
				    			changePoint:640,
				    			visibleItems: 2
				    		},
				    		tablet: { 
				    			changePoint:768,
				    			visibleItems: 3
				    		}
				    	}
				    });
				    
				});
			   </script>
			   <script type="text/javascript">
				 $(window).load(function() {
					$("#originalFlexisel").flexisel({
						visibleItems: 3,
						animationSpeed: 1000,
						autoPlay: true,
						autoPlaySpeed: 3000,    		
						pauseOnHover: true,
						enableResponsiveBreakpoints: true,
				    	responsiveBreakpoints: { 
				    		portrait: { 
				    			changePoint:480,
				    			visibleItems: 1
				    		}, 
				    		landscape: { 
				    			changePoint:640,
				    			visibleItems: 2
				    		},
				    		tablet: { 
				    			changePoint:768,
				    			visibleItems: 3
				    		}
				    	}
				    });
				    
				});
			   </script>
			   <script type="text/javascript" src="js/jquery.flexisel.js"></script>
	</div>
</div>
	<!--- fOOTER Starts Here --->
	<div class="container">
		<div class="footer">
			<a href="">Browse shop</a>
		</div>
		<div class="footer-top">
			<ul class="bottom-list">
				<li><a href="#">terms & conditions</a></li>
				<li><a href="#">return policy</a></li>
				<li><a href="#">reviews</a></li>
				<li><a href="#">about shop</a></li>
				<li><a href="#">secure payment</a></li>
			</ul>
		</div>
		<ul class="payment-list">
			<li><i class="paypal"></i></li>
			<li><i class="wi"></i></li>
			<li><i class="visa"></i></li>
			<li><i class="amazon"></i></li>
			<li><i class="sm"></i></li>
		</ul>
		<p class="copyright">2014 Template By <a href="http://w3layouts.com/">W3layouts</a></p>
	</div>
	<!--- fOOTER Starts Here --->
</body>
</html>
