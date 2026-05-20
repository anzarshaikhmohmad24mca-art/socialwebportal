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
                        <li><a href="team.html"> Editorial Board </a></li>
                        <li><a href="team.html"> Trustee </a></li>
                        <li><a href="team.html"> Past Editors and Administrators </a></li>
                        <li><a href="team.html"> Past Presidents and Secretories </a></li>
                    </ul> 

                </li>
                <li><a href="patrika.php"> Patrika </a></li>
                <li><a href="activities.php"> Activities </a></li>
                <li><a href="image.php"> Gallery </a></li>
                <li><a href="metrimony.php"> Matrimony </a></li>
                <li><a href="blog.php"> Blog</a></li>
                <li><a href="gallery.html"> Donation </a></li>
                <li><a href="stuff.php"> Submit Stuff </a></li>
                <li><a href="contact.php"> Contact us </a></li>
            </ul>
            </div>
        </div>
            </div>
        </nav>

        <!-- .nav-bar -->
    </header><!-- site-header -->
    
       <table style="margin-top: -0.9 rem!important;"><tr>
		<td> <div class="swiper-container hero-slider" style="width:1050px; height:500px">

        <div class="swiper-wrapper">
            <div class="swiper-slide hero-content-wrap">
                <img src="images/banner1.jpg" alt="">

                <div class="hero-content-overlay position-absolute w-100 h-100">
                    <!-- .container -->
                </div><!-- .hero-content-overlay -->
            </div><!-- .hero-content-wrap -->

            <!--<div class="swiper-slide hero-content-wrap">
                <img src="images/banner2.jpg" alt="">

                <div class="hero-content-overlay position-absolute w-100 h-100">
                    
                </div>
            </div>--><!-- .hero-content-wrap -->

            <div class="swiper-slide hero-content-wrap">
                <img src="images/banner3.jpg" alt="">

                <div class="hero-content-overlay position-absolute w-100 h-100">
                    <!-- .container -->
                </div><!-- .hero-content-overlay -->
            </div><!-- .hero-content-wrap -->
        </div><!-- .swiper-wrapper -->

        <div class="pagination-wrap position-absolute w-100">
            <div class="container">
                <div class="swiper-pagination"></div>
            </div><!-- .container -->
        </div><!-- .pagination-wrap -->

        <!-- Add Arrows -->
        <div class="swiper-button-next flex justify-content-center align-items-center">
            <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
        </div>

        <div class="swiper-button-prev flex justify-content-center align-items-center">
            <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg></span>
        </div>
                 </div> </td>
		<td ><div><marquee><img src="images/1002.png" height="500px" width="500px" style="margin-bottom: 2rem!important;">
		<marquee><img src="images/1005.png" height="500px" width="500px" style="margin-bottom: 0rem!important;">
		<marquee><img src="images/1008.png" height="500px" width="500px" style="margin-bottom: 0rem!important;">
		<marquee><img src="images/1009.png" height="500px" width="500px" style="margin-bottom: 0rem!important;">
		
	
		
		
            </marquee>	</div>	
		
		</td>
		</tr>
            </table>
               
                
               
             
        
    
   <!-- .hero-slider -->
	
   
    
  

	<div class="clearfix"></div>
    
    <div class="home-page-welcome">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 order-2 order-lg-1">
                    <div class="welcome-content">
                        <header class="entry-header">
                            <h2 class="entry-title"> About Patrika </h2>
                        </header>

                        <div class="entry-content mt-5" style="margin-top: 2rem!important;">
                            <p> “THE YOUTH IS THE HOPE OF OUR FUTURE” </p>
                            <p> ઉપરોક્ત ઉક્તિ ને જ સાર્થક કરવા લગભગ ૩ દાયકા પહેલા અનાવિલ યુવાનો દ્વારા અનાવિલ યુવાના ઉત્થાન માટે આ સંસ્થા ને જન્મ આપ્વામાં આવ્યો હતો. </p>
                            <p> દક્ષિણ ગુજરાત અનાવિલ યુવા સંગઠનની સ્થાપના તા: ૧૭/૦૫/૧૯૮૧ ના રોજ કરવામાં આવી. જેનો વિશિષ્ટ હેતુ સમાજમાં યુવાનો એકત્ર થાય, તેમનામાં સહકારની ભાવના જન્મે અને સમાજ એક બને તથા શ્રેષ્ઠ બને. તદઉપરાંત અનાવિલ યુવાનો માટે વિવિધ પ્રવ્રુતિઓ થાય , સાંસ્ક્રુતિક પ્રોગ્રામોનું આયોજન થાય, મેળવળા યોજાય તથા યુવાનોને નોકરીની તકો મેળવી આગળ આવે તેવા હેતુથી આ સંસ્થાનાં બીજ રોપાયા હતા. આ એજ સંસ્થાકે જેના દ્વારા પ્રથમ વખત અનાવિલ યુવાન યુવતી માટે લગ્ન મેળાવળાનુ આયોજન કરવામાં આવ્યુ હતુ. જેની નોંધ બીજા સમાજ દ્વારા પણ લેવામાં આવિ હતી. ઇ.સ. ૨૦૧૦ માં પ્રથમ વખત શ્રી દયાળજી અનાવિલ કેળવણી મંડળમાં સોગાયો દ્વારા ગરબા મહોત્સવ ૨૦૧૧ નું આયોજન કરવામાં આવ્યુ હતુ. જેનુ સમગ્ર સંચાલન સોગયો દ્વારા કરવામા આવ્યુ હતુ </p>
                           
                        </div>

                        <div class="entry-footer mt-5">
                            <a href="about.html" class="btn gradient-bg mr-2">Read More</a>
                        </div>
                    </div><!-- .welcome-content -->
                </div>
                
                <div class="col-12 col-lg-6 order-2 order-lg-1">
                    <div class="welcome-content">
                        <header class="entry-header">
                            <h2 class="entry-title"> About Palwada Samaj </h2>
                        </header>

                        <div class="entry-content mt-5" style="margin-top: 2rem!important;">
                            <p> “THE YOUTH IS THE HOPE OF OUR FUTURE” </p>
                            <p> ઉપરોક્ત ઉક્તિ ને જ સાર્થક કરવા લગભગ ૩ દાયકા પહેલા અનાવિલ યુવાનો દ્વારા અનાવિલ યુવાના ઉત્થાન માટે આ સંસ્થા ને જન્મ આપ્વામાં આવ્યો હતો. </p>
                            <p> દક્ષિણ ગુજરાત અનાવિલ યુવા સંગઠનની સ્થાપના તા: ૧૭/૦૫/૧૯૮૧ ના રોજ કરવામાં આવી. જેનો વિશિષ્ટ હેતુ સમાજમાં યુવાનો એકત્ર થાય, તેમનામાં સહકારની ભાવના જન્મે અને સમાજ એક બને તથા શ્રેષ્ઠ બને. તદઉપરાંત અનાવિલ યુવાનો માટે વિવિધ પ્રવ્રુતિઓ થાય , સાંસ્ક્રુતિક પ્રોગ્રામોનું આયોજન થાય, મેળવળા યોજાય તથા યુવાનોને નોકરીની તકો મેળવી આગળ આવે તેવા હેતુથી આ સંસ્થાનાં બીજ રોપાયા હતા. આ એજ સંસ્થાકે જેના દ્વારા પ્રથમ વખત અનાવિલ યુવાન યુવતી માટે લગ્ન મેળાવળાનુ આયોજન કરવામાં આવ્યુ હતુ. જેની નોંધ બીજા સમાજ દ્વારા પણ લેવામાં આવિ હતી. ઇ.સ. ૨૦૧૦ માં પ્રથમ વખત શ્રી દયાળજી અનાવિલ કેળવણી મંડળમાં સોગાયો દ્વારા ગરબા મહોત્સવ ૨૦૧૧ નું આયોજન કરવામાં આવ્યુ હતુ. જેનુ સમગ્ર સંચાલન સોગયો દ્વારા કરવામા આવ્યુ હતુ </p>
                         <!--  <p>rJtftmtlte dtr;t Lzvte ctltNtu, yvturHt;t nu;tw rJtltt mtkftuat cth ytJtNtu.</p>-->
                        </div>

                        <div class="entry-footer mt-5">
                            <a href="about.html" class="btn gradient-bg mr-2">Read More</a>
                        </div>
                    </div><!-- .welcome-content -->
                </div>
                <!-- .col -->

               <!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div>
    
    <div class="home-page-welcome">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 order-2 order-lg-1">
                    <div class="welcome-content">
                        <header class="entry-header">
                            <h2 class="entry-title"> સંસ્થાની પ્રવ્રુતીઓ </h2>
                        </header>

                        <div class="entry-content mt-5" style="margin-top: 2rem!important;">
                            <p> “THE YOUTH IS THE HOPE OF OUR FUTURE” </p>
                            <p> ઉપરોક્ત ઉક્તિ ને જ સાર્થક કરવા લગભગ ૩ દાયકા પહેલા અનાવિલ યુવાનો દ્વારા અનાવિલ યુવાના ઉત્થાન માટે આ સંસ્થા ને જન્મ આપ્વામાં આવ્યો હતો. </p>
                            <p> દક્ષિણ ગુજરાત અનાવિલ યુવા સંગઠનની સ્થાપના તા: ૧૭/૦૫/૧૯૮૧ ના રોજ કરવામાં આવી. જેનો વિશિષ્ટ હેતુ સમાજમાં યુવાનો એકત્ર થાય, તેમનામાં સહકારની ભાવના જન્મે અને સમાજ એક બને તથા શ્રેષ્ઠ બને. તદઉપરાંત અનાવિલ યુવાનો માટે વિવિધ પ્રવ્રુતિઓ થાય , સાંસ્ક્રુતિક પ્રોગ્રામોનું આયોજન થાય, મેળવળા યોજાય તથા યુવાનોને નોકરીની તકો મેળવી આગળ આવે તેવા હેતુથી આ સંસ્થાનાં બીજ રોપાયા હતા. આ એજ સંસ્થાકે જેના દ્વારા પ્રથમ વખત અનાવિલ યુવાન યુવતી માટે લગ્ન મેળાવળાનુ આયોજન કરવામાં આવ્યુ હતુ. જેની નોંધ બીજા સમાજ દ્વારા પણ લેવામાં આવિ હતી. ઇ.સ. ૨૦૧૦ માં પ્રથમ વખત શ્રી દયાળજી અનાવિલ કેળવણી મંડળમાં સોગાયો દ્વારા ગરબા મહોત્સવ ૨૦૧૧ નું આયોજન કરવામાં આવ્યુ હતુ. જેનુ સમગ્ર સંચાલન સોગયો દ્વારા કરવામા આવ્યુ હતુ </p>
                           
                        </div>

                        <div class="entry-footer mt-5">
                            <a href="about.html" class="btn gradient-bg mr-2">Read More</a>
                        </div>
                    </div><!-- .welcome-content -->
                </div>
                
                <div class="col-12 col-lg-6 order-2 order-lg-1">
                    <div class="welcome-content">
                        <header class="entry-header">
                            <h2 class="entry-title"> આવનારી પ્રવ્રુતીઓ </h2>
                        </header>

                        <div class="entry-content mt-5" style="margin-top: 2rem!important;">
                           
                        <marquee direction="up" behavior="scroll" onMouseOver="this.stop();"
           onmouseout="this.start();"> 
						<?php
												$i3 = 1;
												$sel3 = "select * from upcoming_activities order by uaid DESC";
												$res3 = mysqli_query($con,$sel3);
												while($row3 = mysqli_fetch_array($res3))
												{	
												?>
												<a href="news.php?a=<?php echo $row3['uaid'] ?>"><b><?php echo $row3['title'] ?></b></a><hr>
												<?php
												}?>
						  
						   </marquee>
						  
                        </div>

                        
                    </div><!-- .welcome-content -->
                </div>
                <!-- .col -->

               <!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div>
    <!-- .home-page-icon-boxes -->

    <div class="home-page-events">
        <div class="container">
            <div class="row">
            <div class="col-12 col-lg-12">
                    <div class="upcoming-events">
                        <div class="section-heading">
                            <h2 class="entry-title"> પાલવાડા સમાજ પત્રિકાના હોદેદારો.</h2>
                        </div>
<br>
<br>

                    </div>
                </div>
                <br>
				 <?php
												$i = 1;
												$sel = "select * from hodedar where type='Patrika Hodedar'";
												$res = mysqli_query($con,$sel);
												while($row = mysqli_fetch_array($res))
												{	
												?>
                <div class="col-12 col-lg-3">
                    <div class="upcoming-events">
                        <figure class="m-0">
                        <center>    <img src="C-Panel/<?php echo $row['image']; ?>" alt="" style=" height: 140px;"> </center>
                        </figure>
                        <div>
                            

                            <div>
                                
                                   <center> <p> <?php echo $row['name']; ?></p> </center>

                                    <div>
                                       <center><?php echo $row['designation']; ?> : પાલવાડા સમાજ પત્રિકા  </center>
                                    </div>

                            </div>
                        </div>

                       
                    </div>
                </div>
				<?php
		$i++;
	}
	?>

                

               

               
                
                
            </div>
        </div>
    </div>

    <div class="home-page-events">
        <div class="container">
            <div class="row">
            <div class="col-12 col-lg-12">
                    <div class="upcoming-events">
                        <div class="section-heading">
                            <h2 class="entry-title"> શ્રી પાલવાડા ઔદીચ્ય મંડળ સુરત ના હોદેદારો</h2>
                        </div>
<br>
<br>

                    </div>
                </div>
               <br>
				 <?php
												$i1 = 1;
												$sel1 = "select * from hodedar where type='Mandal Hodedar'";
												$res1 = mysqli_query($con,$sel1);
												while($row1 = mysqli_fetch_array($res1))
												{	
												?>
                <div class="col-12 col-lg-3">
                    <div class="upcoming-events">
                        <figure class="m-0">
                        <center>    <img src="C-Panel/<?php echo $row1['image']; ?>" alt="" style=" height: 140px;"> </center>
                        </figure>
                        <div>
                            

                            <div>
                                
                                   <center> <p> <?php echo $row1['name']; ?></p> </center>

                                    <div>
                                       <center><?php echo $row1['designation']; ?> : પાલવાડા સમાજ </center>
                                    </div>

                            </div>
                        </div>

                       
                    </div>
                </div>
				<?php
		$i++;
	}
	?>
                   
    
                   
                   
                    
                    
                </div>

        </div>
    </div>

    <div class="home-page-welcome">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 order-2 order-lg-1">
                    <div class="welcome-content">
                        <header class="entry-header">
                            <h2 class="entry-title"> પ્રમુખશ્રીનુ નિવેદન </h2>
                        </header>

                        <div class="entry-content mt-5" style="margin-top: 2rem!important;">
                            <p> “THE YOUTH IS THE HOPE OF OUR FUTURE” </p>
                            <p> ઉપરોક્ત ઉક્તિ ને જ સાર્થક કરવા લગભગ ૩ દાયકા પહેલા અનાવિલ યુવાનો દ્વારા અનાવિલ યુવાના ઉત્થાન માટે આ સંસ્થા ને જન્મ આપ્વામાં આવ્યો હતો. </p>
                            <p> દક્ષિણ ગુજરાત અનાવિલ યુવા સંગઠનની સ્થાપના તા: ૧૭/૦૫/૧૯૮૧ ના રોજ કરવામાં આવી. જેનો વિશિષ્ટ હેતુ સમાજમાં યુવાનો એકત્ર થાય, તેમનામાં સહકારની ભાવના જન્મે અને સમાજ એક બને તથા શ્રેષ્ઠ બને. તદઉપરાંત અનાવિલ યુવાનો માટે વિવિધ પ્રવ્રુતિઓ થાય , સાંસ્ક્રુતિક પ્રોગ્રામોનું આયોજન થાય, મેળવળા યોજાય તથા યુવાનોને નોકરીની તકો મેળવી આગળ આવે તેવા હેતુથી આ સંસ્થાનાં બીજ રોપાયા હતા. આ એજ સંસ્થાકે જેના દ્વારા પ્રથમ વખત અનાવિલ યુવાન યુવતી માટે લગ્ન મેળાવળાનુ આયોજન કરવામાં આવ્યુ હતુ. જેની નોંધ બીજા સમાજ દ્વારા પણ લેવામાં આવિ હતી. ઇ.સ. ૨૦૧૦ માં પ્રથમ વખત શ્રી દયાળજી અનાવિલ કેળવણી મંડળમાં સોગાયો દ્વારા ગરબા મહોત્સવ ૨૦૧૧ નું આયોજન કરવામાં આવ્યુ હતુ. જેનુ સમગ્ર સંચાલન સોગયો દ્વારા કરવામા આવ્યુ હતુ </p>
                           
                        </div>

                        <div class="entry-footer mt-5">
                            <a href="about.html" class="btn gradient-bg mr-2">Read More</a>
                        </div>
                    </div><!-- .welcome-content -->
                </div>
                
                <div class="col-12 col-lg-6 order-2 order-lg-1">
                    <div class="welcome-content">
                        <header class="entry-header">
                            <h2 class="entry-title"> તંત્રી / વ્ય્વસ્થાપક નો સંદેશ </h2>
                        </header>

                        <div class="entry-content mt-5" style="margin-top: 2rem!important;">
                            <p> “THE YOUTH IS THE HOPE OF OUR FUTURE” </p>
                            <p> ઉપરોક્ત ઉક્તિ ને જ સાર્થક કરવા લગભગ ૩ દાયકા પહેલા અનાવિલ યુવાનો દ્વારા અનાવિલ યુવાના ઉત્થાન માટે આ સંસ્થા ને જન્મ આપ્વામાં આવ્યો હતો. </p>
                            <p> દક્ષિણ ગુજરાત અનાવિલ યુવા સંગઠનની સ્થાપના તા: ૧૭/૦૫/૧૯૮૧ ના રોજ કરવામાં આવી. જેનો વિશિષ્ટ હેતુ સમાજમાં યુવાનો એકત્ર થાય, તેમનામાં સહકારની ભાવના જન્મે અને સમાજ એક બને તથા શ્રેષ્ઠ બને. તદઉપરાંત અનાવિલ યુવાનો માટે વિવિધ પ્રવ્રુતિઓ થાય , સાંસ્ક્રુતિક પ્રોગ્રામોનું આયોજન થાય, મેળવળા યોજાય તથા યુવાનોને નોકરીની તકો મેળવી આગળ આવે તેવા હેતુથી આ સંસ્થાનાં બીજ રોપાયા હતા. આ એજ સંસ્થાકે જેના દ્વારા પ્રથમ વખત અનાવિલ યુવાન યુવતી માટે લગ્ન મેળાવળાનુ આયોજન કરવામાં આવ્યુ હતુ. જેની નોંધ બીજા સમાજ દ્વારા પણ લેવામાં આવિ હતી. ઇ.સ. ૨૦૧૦ માં પ્રથમ વખત શ્રી દયાળજી અનાવિલ કેળવણી મંડળમાં સોગાયો દ્વારા ગરબા મહોત્સવ ૨૦૧૧ નું આયોજન કરવામાં આવ્યુ હતુ. જેનુ સમગ્ર સંચાલન સોગયો દ્વારા કરવામા આવ્યુ હતુ </p>
                           
                        </div>

                        <div class="entry-footer mt-5">
                            <a href="about.html" class="btn gradient-bg mr-2">Read More</a>
                        </div>
                    </div><!-- .welcome-content -->
                </div>
                <!-- .col -->

               <!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div>

	<div class="our-causes">
        <div class="container">
			<div class="row">
                <div class="coL-12">
                    <div class="section-heading">
                        <h2 class="entry-title"> શુભેચ્છક </h2>
                    </div><!-- .section-heading -->
                </div><!-- .col -->
            </div><!-- .row -->
            
            <div class="row">
                <div class="col-12">
                    <div class="swiper-container causes-slidero">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="cause-wrap">
                                    <figure class="m-0">
                                        <img src="images/add.jpg" alt="">
                                    </figure>
                                </div><!-- .cause-wrap -->
                            </div><!-- .swiper-slide -->

                            <div class="swiper-slide">
                                <div class="cause-wrap">
                                    <figure class="m-0">
                                        <img src="images/add.jpg" alt="">
                                    </figure>
                                </div><!-- .cause-wrap -->
                            </div><!-- .swiper-slide -->

                           	<div class="swiper-slide">
                                <div class="cause-wrap">
                                    <figure class="m-0">
                                        <img src="images/add.jpg" alt="">
                                    </figure>
                                </div><!-- .cause-wrap -->
                            </div><!-- .swiper-slide -->

                           	<div class="swiper-slide">
                                <div class="cause-wrap">
                                    <figure class="m-0">
                                        <img src="images/add.jpg" alt="">
                                    </figure>
                                </div><!-- .cause-wrap -->
                            </div><!-- .swiper-slide -->

                           <div class="swiper-slide">
                                <div class="cause-wrap">
                                    <figure class="m-0">
                                        <img src="images/add.jpg" alt="">
                                    </figure>
                                </div><!-- .cause-wrap -->
                            </div><!-- .swiper-slide -->

                           <div class="swiper-slide">
                                <div class="cause-wrap">
                                    <figure class="m-0">
                                        <img src="images/add.jpg" alt="">
                                    </figure>
                                </div><!-- .cause-wrap -->
                            </div><!-- .swiper-slide -->
                            
                            <div class="swiper-slide">
                                <div class="cause-wrap">
                                    <figure class="m-0">
                                        <img src="images/add.jpg" alt="">
                                    </figure>
                                </div><!-- .cause-wrap -->
                            </div><!-- .swiper-slide -->
                            
                            <div class="swiper-slide">
                                <div class="cause-wrap">
                                    <figure class="m-0">
                                        <img src="images/add.jpg" alt="">
                                    </figure>
                                </div><!-- .cause-wrap -->
                            </div><!-- .swiper-slide -->
                            
                            <div class="swiper-slide">
                                <div class="cause-wrap">
                                    <figure class="m-0">
                                        <img src="images/add.jpg" alt="">
                                    </figure>
                                </div><!-- .cause-wrap -->
                            </div><!-- .swiper-slide -->
                        </div><!-- .swiper-wrapper -->

                    </div><!-- .swiper-container -->

                    <!-- Add Arrows -->
                    <div class="swiper-button-next flex justify-content-center align-items-center">
                        <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
                    </div>

                    <div class="swiper-button-prev flex justify-content-center align-items-center">
                        <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg></span>
                    </div>
                </div><!-- .col -->
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
                                
								<li><a href="C-Panel"><i class=""></i>Admin</a></li>
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
								<p>&copy; 2021 Palwada audichya Mandal surat </p>
								<p>All rights reserved</p>
                                </br> </br>
					
								<h2 class="widgetheading">Design By</h2>
								<p style="text-align:left; margin-top: -20px;">
                        			<a href="http://brelicontechnologies.com/" target="_blank"> Brelicon Technologies </a> 
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