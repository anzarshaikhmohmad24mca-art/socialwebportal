<?php
include("../connection.php");

	if(isset($_REQUEST['s_id']))
	{
		$s_id = $_REQUEST['s_id'];
		$sel = "select * from sabhasad_reg where s_id = '$s_id'";
		$res = mysqli_query($con,$sel);
		$row = mysqli_fetch_array($res);	
	}
	else
	{
		header("location:member");
	}
	
	if(isset($_REQUEST['btn_update']))
	{
		
		$sno = $_REQUEST['txt_sno'];
		$snm = $_REQUEST['txt_snm'];
		$add = $_REQUEST['txt_add'];
		$mno = $_REQUEST['txt_mno'];
		$eid = $_REQUEST['txt_eid'];
		
		$name=$_FILES['userfile']['name'];
		$tmp=$_FILES['userfile']['tmp_name'];
		$type=$_FILES['userfile']['type'];
		
		
		$date = date('dmY_');
		$ext = explode('.',$name);
		$extension = end($ext);
		$r = rand();
		
		$newfilename = "IMG_".$s_id.".".$extension;
		$path="../Document_Upload/".$newfilename;
	
		move_uploaded_file($tmp,$path);
		
		$ins = "insert into sabhasad_reg_request values('NULL','$s_id','$sno','$snm','$add','$mno','$eid','$newfilename')";
		mysqli_query($con,$ins);
		header("location:member");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Sogayo</title>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!--  FAVICON -->
<link href="images/favicon.png" rel="shortcut icon">

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

<script type="text/javascript" src="../assets/Gujarati_js/gujarati.js"></script>
<script type="text/javascript">

      // Load the Google Transliterate API
      google.load("elements", "1", {
            packages: "transliteration"
          });

      function onLoad() {
        var options = {
            sourceLanguage:
                google.elements.transliteration.LanguageCode.ENGLISH,
            destinationLanguage:
                [google.elements.transliteration.LanguageCode.GUJARATI],
            shortcutKey: 'ctrl+g',
            transliterationEnabled: true
        };

        // Create an instance on TransliterationControl with the required
        // options.
        var control =
            new google.elements.transliteration.TransliterationControl(options);

        // Enable transliteration in the textbox with id
        // 'transliterateTextarea'.
        control.makeTransliteratable(['transliterateTextarea']);
		control.makeTransliteratable(['transliterateTextarea1']);
		control.makeTransliteratable(['transliterateTextarea2']);
		control.makeTransliteratable(['transliterateTextarea3']);
      }
      google.setOnLoadCallback(onLoad);
    </script>

</head>
<body class="single-page news-page">
<header class="site-header">
        <div class="top-header-bar">
            <div class="container">
                <div class="row flex-wrap justify-content-center justify-content-lg-between align-items-lg-center">
                    <div class="col-12 col-lg-3 d-none d-md-flex flex-wrap justify-content-center justify-content-lg-start mb-3 mb-lg-0">
                        <div class="header-bar-email">
                            <i class="fa fa-phone"></i> <a href="#"> +91 99787 97959 </a>
                        </div><!-- .header-bar-email -->
                    </div><!-- .col -->
					<div class="col-12 col-lg-6 mb-3 mb-lg-0">
                        <div class="header-bar-email">
                           <!-- <i class="fa fa-phone"></i> <a href="#"> +91 01234-56789  |  +91 01234-56789 </a>-->
                           <p> WELCOME TO DAKSHIN GUJARAT ANAVIL YUVA SANGATHAN </p>
                        </div><!-- .header-bar-email -->
                    </div>
                    <div class="col-12 col-lg-3 ">
                       <!-- <div class="donate-btn">
                            <a href="#">Donate Now</a>
                        </div>--><!-- .donate-btn -->
                        
                        <div class="header-bar-text">
                            <p><i class="fa fa-envelope"></i> <span> info@sogayo.org </span></p>
                        </div><!-- .header-bar-text -->
                        
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .top-header-bar -->


		<nav>
        	<div div class="container">
            	<div class="row">
        			<div class="col-md-2">
            			<div class="site-branding d-flex align-items-center">
                           <a class="d-block" href="index.html" rel="home"><img class="d-block" src="images/logo.png" alt="logo"><span>SOGAYO</span> </a>
                        </div><!-- .site-branding -->
            		</div>
            <div class="col-md-10">
            	<label for="drop" class="toggle">Menu</label>
        		<input type="checkbox" id="drop" />
            	<ul class="menu">
                <li><a href="index.html"> હોમ </a></li>
                <li>
                    <!-- First Tier Drop Down -->
                    <label for="#" class="toggle"> અમારા વિશે  </label>
                    <a href="#"> અમારા વિશે </a>
                    <input type="checkbox" id="drop-1"/>
                    <ul>
                        <li><a href="about.html">  સંસ્થા વિશે </a></li>
                        <li><a href="team.html"> કમિટી </a></li>
                        <li><a href="member.php"> આજીવન સભ્યો </a></li>
                        <li><a href="parmukh.html"> પ્રમુખશ્રી નું નિવેદન </a></li>
                        <li><a href="uppramukh.html"> ઉપ પ્રમુખશ્રી નું નિવેદન </a></li>
                    </ul> 

                </li>
                <li><a href="activities.html"> પ્રવૃત્તિઓ </a></li>
                <li><a href="event.html"> ઇવેન્ટ </a></li>
                <li><a href="register.php"> લગ્ન વિષયક </a></li>
                <li><a href="volunteer.php"> નોકરી વિષયક </a></li>
                <li><a href="donation.php"> ડોનેશન</a></li>
                <li><a href="gallery.html"> ઇવેન્ટ ગેલેરી </a></li>
                <li><a href="download.html"> ડાઉનલોડ </a></li>
                <li><a href="contact.php"> સંપર્ક </a></li>
            </ul>
            </div>
        </div>
            </div>
        </nav>

        <!-- .nav-bar -->
    </header>
<!-- .site-header -->

<div class="page-header">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1> LIFETIME MEMBERS </h1>
      </div>
      <!-- col --> 
    </div>
    <!-- row --> 
  </div>
  <!-- container --> 
</div>
<!-- page-header -->

<section class="activities">
  <div class="container">
    <div class="col-md-12">
      <div class="a-title">
        <h3> આજીવન સભ્યો UPDATE INFO</h3>
      </div>
      <div class="a-text">
			<center>
			<form method="post" class="form-horizontal" enctype="multipart/form-data">
				<div class="form-group">
					<label class="control-label col-lg-4">સભાસદ નંબર</label>

					<div class="col-lg-6">
						<input type="text" name="txt_sno" value="<?php echo $row['s_no'] ?>" required id="transliterateTextarea" class="form-control" autofocus />
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-4">સભાસદ નામ</label>

					<div class="col-lg-6">
						<input type="text" name="txt_snm" value="<?php echo $row['s_name'] ?>" required id="transliterateTextarea1" class="form-control" />
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-4">Address</label>

					<div class="col-lg-6">
						<textarea type="text" name="txt_add" id="transliterateTextarea2" required class="form-control"><?php echo $row['s_address'] ?></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-4">Mobile No</label>

					<div class="col-lg-6">
						<input type="text" name="txt_mno" value="<?php echo $row['s_contact'] ?>" id="transliterateTextarea3" class="form-control" required />
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-4">Email ID</label>

					<div class="col-lg-6">
						<input type="email" name="txt_eid" value="<?php echo $row['s_email'] ?>" required class="form-control" />
					</div>
				</div>
				
				<div class="form-group">
					<label class="control-label col-lg-4">Upload Document</label>

					<div class="col-lg-6">
						<input type="file" name="userfile" value="" required class="form-control" />
					</div>
				</div>
				<div class="form-actions no-margin-bottom" style="text-align:center;">
				<?php
				$qsel = "select * from sabhasad_reg_request where s_id = '$s_id'";
				$qres = mysqli_query($con,$qsel);
				if(mysqli_num_rows($qres))
				{
				?>
					<center><h4 style="color:#FF3300;">Request Already Send..!</h4></center>
				<?php
				}
				else
				{
				?>
					<button type="submit" name="btn_update" class="btn btn-primary btn-md">Send Edit Request</button>
				<?php
				}
				?>
				</div>
			</form>
			</center>		
        
        
        
      </div>
    </div>
  </div>
</section>

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
								<p>&copy; 2018 sogayo </p>
								<p>All rights reserved</p>
					
								<h2 class="widgetheading">Design By</h2>
								<p style="text-align:left; margin-top: -20px;">
                        			<a href="http://brelicontechnologies.com/" target="_blank"> Brelicon Technologies </a> www.brelicontechnologies.com
                    			</p>
							</div>
                        </div><!-- .foot-latest-news -->
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->
        </div><!-- footer-widgets -->

        
    </footer>
<!-- .site-footer --> 

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