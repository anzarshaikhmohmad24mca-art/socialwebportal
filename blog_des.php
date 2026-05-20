<?php
include("connection.php");



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Palwada Samaj Patrika</title>

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
	<style>

}
</style>
</head>
<body class="single-page news-page">
<header class="site-header">
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
        			
            <div class="col-md-10">
            	<label for="drop" class="toggle">Menu</label>
        		<input type="checkbox" id="drop" />
            	<ul class="menu">
                <li><a href="index.html"> Home </a></li>
                <li>
                    <!-- First Tier Drop Down -->
                    <label for="#" class="toggle"> About Us </label>
                    <a href="#"> About us </a>
                    <input type="checkbox" id="drop-1"/>
                    <ul>
                        <li><a href="about.html">  Patrika History </a></li>
                        <li><a href="team.html"> Mandal History </a></li>
                        
                    </ul> 

                </li>
                 <li><a href="patrika.php"> Patrika </a></li>
                <li><a href="activities.php"> Activities </a></li>
                <li><a href="image.php"> Gallery </a></li>
                <li><a href="metrimony.php"> Matrimony </a></li>
                <li><a href="blog.php"> Blog</a></li>
                
                <li><a href="stuff.php"> Submit Stuff </a></li>
                <li><a href="contact.php"> Contact us </a></li>
				<li><a href="login.php"> Login </a></li>
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
                    <h1>Blog</h1>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .page-header -->

    <div class="contact-page-wrap">
        <div class="container">
            
            
            <div class="row">
                <!-- .col -->
				
            
							
				<?php
				                                    $sel = "select * from stuff where status='Approved' and  sid=".$_REQUEST['id'];
                                                    $res = mysqli_query($con,$sel);   
                                                    $row=mysqli_fetch_assoc($res); 
                                              ?>
                <div class="col-12 col-lg-12">
				<div class="contact-form">
                    
                                <div class="card">
                                      <div class="card-body">
                                        <h4 class="card-title"><b style="color:blue"><?php echo $row['title'] ?></b></h4>
                                        <p class="card-text"><b style="color:#CC3300"><?php echo $row['type'] ?></b></p>
                                        <p class="card-text"><?php echo $row['descp'] ?></p>
                                           

                                      </div>
                                    </div>

                               
                                
                               
                            
				</div>	
            </div>
            </div><!-- .row -->
        </div><!-- .container -->
    </div>

    <footer class="site-footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="foot-about">
                            <h2> Follow us </h2>

                            

                            <ul class="d-flex flex-wrap align-items-center">
                                
                                <li><a href="https://www.facebook.com/palwadasamaj.patrika"><i class="fa fa-facebook"></i></a></li>
                                
								
                            </ul>

                            
                        </div>
                        
                        
                        
                        <!-- .foot-about -->
                    </div><!-- col -->

                    <div class="col-12 col-md-6 col-lg-2 mt-5 mt-md-0">
                        <h2>Useful Links</h2>

                        <ul>
                            <li><a href="index.html"> હોમ </a></li>
                            <li><a href="about.html"> અમારા વિશે </a></li>
                            <li><a href="patrika.php"> પત્રિકા </a></li>
                        
                            <li><a href="metrimony.php"> લગ્ન વિષયક </a></li>
                            
                            <li><a href="donation.php"> ડોનેશન</a></li>
                            <li><a href="contact.php"> સંપર્ક </a></li>
                        </ul>
                    </div><!-- col -->
                    
                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <div class="foot-contact">
                            <h2>Contact Editor</h2>

                            <ul>
                            	<li><i class="fa fa-user-o"></i><span> શ્રી ગૌતમભાઇ મગનલાલ ઉપાધ્યાય</span></li>
                                <li><i class="fa fa-phone"></i><span> +91 90333 04000 </span></li>
                               
                            </ul>
                          
                            <h2 class="widgetheading">Contact Administrators</h2>
                            
                            <ul style="text-align:left; margin-top: -20px;">
                            	<li><i class="fa fa-user-o"></i><span> શ્રી આનંદભાઇ દીપક્ચંદ્ર પાઠક</span></li>
                                <li><i class="fa fa-phone"></i><span> +91 84010 27799 </span></li>
                                <li><i class="fa fa-envelope-o "></i><span> info@palwadasamaj.org </span></li>
                               
                            </ul>
             
                        </div><!-- .foot-contact -->

               </div><!-- col -->

                    <div class="col-12 col-md-6 col-lg-4 mt-5 mt-md-0">
                        <div class="foot-latest-news">
                            <h2> Copy Rights </h2>
                           
                            <div class="widget">					
								<p>&copy;  Palwada audichya Mandal surat </p>
								<p>All rights reserved</p>
                                </br> </br>
					
								<h2 class="widgetheading">Design By</h2>
								<p style="text-align:left; margin-top: -20px;">
                        			
                    			</p>
								
                                  


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