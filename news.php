<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> Palwada Samaj </title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!--  FAVICON -->
    <link href="images/plogo.png" rel="shortcut icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- ElegantFonts CSS -->
    <link rel="stylesheet" href="css/elegant-fonts.css">

    <!-- themify-icons CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/hover.css">
    
</head>
<style>
.event-wrap figure img {
    border: 1px solid #900;
}
</style>
<body>
    <header class="site-header">
        <div class="top-header-bar">
            <div class="container">
                <div class="row flex-wrap justify-content-center justify-content-lg-between align-items-lg-center">
                    <!-- .col -->
					<div class="col-12 col-lg-12 mb-12 mb-lg-0">
                        <div class="header-bar-email">
                           <!-- <i class="fa fa-phone"></i> <a href="#"> +91 01234-56789  |  +91 01234-56789 </a>-->
                           <p> શ્રી પાલવાડા ઔદીચ્ય મંડળ, સુરત, સ્થાપિત અને સંચાલિત શ્રી પાલવાડા સમાજ પત્રિકા </p>
                        </div><!-- .header-bar-email -->
                    </div>
                   <!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .top-header-bar -->
             <img src="images/img.jpg" height="100%" width="100%">
		<nav style="margin-top: -1rem!important;">
        	<div div class="container">
            	<div class="row">
        			
            <div class="col-md-5">
            	<label for="drop" class="toggle">Menu</label>
        		<input type="checkbox" id="drop" />
            	<ul class="menu">
                <li><a href="index.php"> Home </a></li>
                <li>
                    <!-- First Tier Drop Down -->
                    <label for="" class="toggle"> About Us </label>
                    <a href=""> About us </a>
                    <input type="checkbox" id="drop-1"/>
                    <ul>
                        <li><a href="about.html">  Patrika History </a></li>
                        <li><a href="team.html"> Commitee </a></li>
                        
                    </ul> 

                </li>
               <!-- <li><a href="patrika.php"> Patrika </a></li>
                <li><a href="activities.php"> Activities </a></li>-->
                <li><a href="image.php"> Gallery </a></li>
                <!--<li><a href="metrimony.php"> Matrimony </a></li>
                <li><a href="blog.php"> Blog</a></li>-->
                
               <!-- <li><a href="stuff.php"> Submit Stuff </a></li>-->
                <li><a href="contact.php"> Contact us </a></li>
				 <li>
                    <!-- First Tier Drop Down -->
                    <label for="" class="toggle"> Login </label>
                    <a href=""> Login </a>
                   
                    <ul>
                        <li><a href="login.php">  User Login </a></li>
                        <li><a href="login1.php"> Admin Login </a></li>
                        
                    </ul> 

                </li>
            </ul>
            </div>
        </div>
            </div>
        </nav>

        <!-- .nav-bar -->
    </header><!-- .site-header -->

    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>News</h1>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .page-header -->

    <div class="contact-page-wrap">
        <div class="container">
            <div class="row">
			
                <!-- .col -->
				
            
							
				<?php
				                                 $abc=$_REQUEST['a'];
												$i = 1;
												$sel = "select * from upcoming_activities where uaid='$abc' order by uaid ASC";
												$res = mysqli_query($con,$sel);
												while($row = mysqli_fetch_array($res))
												{	
												?>
                <div class="col-12 col-lg-12"><br>
				<br>
				<!--<div class="contact-form">-->
				<div>
                    
                                <b><?php echo $row['title'] ?></b>
                                <br>
								<br><?php echo $row['descrip'] ?>
                               
                                
                               
                            
				</div>	
                </div>
				
				
<?php } ?>
                
            </div><!-- .row -->
        </div><!-- .container -->
    </div>

    <footer class="site-footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="foot-about">
                            <h2> About Sogayo </h2>

                            <p> “THE YOUTH IS THE HOPE OF OUR FUTURE” </p>
                            <p>ઉપરોક્ત ઉક્તિ ને જ સાર્થક કરવા લગભગ ૩ દાયકા પહેલા અનાવિલ યુવાનો દ્વારા અનાવિલ યુવાના ઉત્થાન માટે આ સંસ્થા ને જન્મ આપ્વામાં આવ્યો હતો. દક્ષિણ ગુજરાત અનાવિલ યુવા સંગઠનની સ્થાપના તા: ૧૭/૦૫/૧૯૮૧ ના રોજ કરવામાં આવી. જેનો વિશિષ્ટ હેતુ સમાજમાં યુવાનો એકત્ર થાય.  <a href="about.html"> READ MORE </a></p>

                            <ul class="d-flex flex-wrap align-items-center">
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div><!-- .foot-about -->
                    </div><!-- col -->

                    <div class="col-12 col-md-6 col-lg-2 mt-5 mt-md-0">
                        <h2>Useful Links</h2>

                        <ul>
                            <li><a href="index.html"> હોમ </a></li>
                            <li><a href="about.html"> અમારા વિશે </a></li>
                            <li><a href="activities.html"> પ્રવૃત્તિઓ </a></li>
                            <li><a href="event.html"> ઇવેન્ટ </a></li>
                            <li><a href="register.html"> લગ્ન વિષયક </a></li>
                            <li><a href="volunteer.php"> નોકરી વિષયક </a></li>
                            <li><a href="donation.php"> ડોનેશન</a></li>
                            <li><a href="contact.php"> સંપર્ક </a></li>
                        </ul>
                    </div><!-- col -->
                    
                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <div class="foot-contact">
                            <h2>Contact</h2>

                            <ul>
                            	<li><i class="fa fa-map-marker"></i><span> દક્ષિણ ગુજરાત અનાવિલ યુવા, સંગઠન,
સુરત C/o શ્રી દયાળજી કેળવણી મંડળ,
દયાળજી ભાઇ દેસાઇ ચોક, સુરત</span></li>
                                <li><i class="fa fa-phone"></i><span> +91 99787 97959 </span></li>
                                <li><i class="fa fa-envelope"></i><span> info@sogayo.org </span></li>
                            </ul>
                        </div><!-- .foot-contact -->

                       <!-- <div class="subscribe-form">
                            <form class="d-flex flex-wrap align-items-center">
                                <input type="email" placeholder="Your email">
                                <input type="submit" value="send">
                            </form>
                        </div>--><!-- .search-widget -->
                    </div><!-- col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <div class="foot-latest-news">
                            <h2> Copy Rights </h2>

                            <div class="widget">					
								<p>&copy;  Palwada Samaj </p>
								<p>All rights reserved</p>
					
								<h2 class="widgetheading">Design By</h2>
								
							</div>
                        </div><!-- .foot-latest-news -->
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->
        </div><!-- footer-widgets -->

        
    </footer><!-- .site-footer -->

    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='js/swiper.min.js'></script>
    <script type='text/javascript' src='js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='js/circle-progress.min.js'></script>
    <script type='text/javascript' src='js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='js/jquery.barfiller.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>

</body>
</html>