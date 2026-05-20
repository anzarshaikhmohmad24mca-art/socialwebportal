<!DOCTYPE html>
<html lang="en">
<head>
<title> Palwada Samaj </title>

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
</head>
<style>
.table td, .table th {
    font-size: 13px;
    font-weight: 600;
}
</style>
<body class="single-page about-page">
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
             
		<nav>
        	<div div class="container">
            	<div class="row">
        			<div class="col-md-2">
            			<div class="site-branding d-flex align-items-center">
                           <a class="d-block" href="index.html" rel="home"><img class="d-block" src="images/plogo.png" alt="logo"> </a>
                        </div><!-- .site-branding -->
            		</div>
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
        
                <li>
                    <!-- First Tier Drop Down -->
                    <label for="#" class="toggle"> Commitee </label>
                    <a href="#"> Commitee </a>
                    <input type="checkbox" id="drop-1"/>
                    <ul>
                        <li><a href="editorial.html"> Editorial Board </a></li>
                        <li><a href="trustee.html"> Trustee </a></li>
                        <li><a href="pasteditor.html"> Past Editors and Administrators </a></li>
                        <li><a href="pastpresident.html"> Past Presidents and Secretories </a></li>
                    </ul> 

                </li>

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

    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Donate Us</h1>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .page-header -->

    <div class="">
        <div class="container">	 
		<div class="row"> 
		<br>
		
		<?php 
            if(isset($_POST['submit'])){
                $message="";
                $to     = 'brijalpatel02@gmail.com';
                $from   =$_POST['email']; 
                $name   =$_POST['name'];
                $add=$_POST['add'];     
                $cno=$_POST['cno'];     
				$intrst=$_POST['intrst']; 
				$amount=$_POST['amount']; 
                $headers  = 'From: '.$from. "\r\n"."<br>";
                $headers .= 'Name: '.$name. "\r\n"."<br>";
                $headers .= 'Subject: '.$subject. "\r\n"."<br>";	
                $headers .= 'Message: '.$message. "\r\n"."<br>";
                $headers .= "MIME-Version: 1.0\r\n";
                $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                 
                $message = '<html><body>';
                $message .=  "This email was submitted on " . date("d-m-y") . "<br>";	
            
                $message .= " <table>
                            <tr><td><strong>Name</strong></td> <td><span>:</span></td> <td>  $name</td> </td></tr>
                            <tr><td><strong>E-Mail</strong></td> <td><span>:</span></td> <td>  $from </td></tr>
                            <tr><td><strong>Address</strong></td> <td><span>:</span></td> <td> $add</td></tr>
							<tr><td><strong>Contact No</strong></td> <td><span>:</span></td> <td> $cno</td></tr>
							<tr><td><strong>Area Of Interest</strong></td> <td><span>:</span></td> <td> $intrst</td></tr>
							<tr><td><strong>Amount you want to Donate</strong></td> <td><span>:</span></td> <td> $amount</td></tr>
                            </table>";	
                $message .= "</body></html>";
                
                ?>
				
				<?php if(mail($to,$subject,$message, $headers)){?>
                    <div class="alert alert-success" >
                        <strong>Success!</strong> Thank you for contacting us.
                    </div>
                <?php } else { ?>
                      <div class="alert alert-danger">
                            <strong>Error!</strong> Some error has been occured. Please try again later.
                      </div>
                <?php } 
            }?>
		
				<div class="col-md-6">							
			 	<div class="contact-form">

                            <form method="post">
							
                                <input type="text" name="name" placeholder="Name" required=" " class="form-control">
								<textarea type="text" name="add" placeholder="Address" required rows="4" class="form-control"></textarea>															
								<input type="text" name="cno" placeholder="Contact No." required=" " class="form-control">
                                <input type="text" name="email" placeholder="Email" required=" " class="form-control">
								<select name="intrst" style="width: 100%;padding: 8px;border: 1px solid #ddd;font-size: 13px;" required class="form-control">
									<option selected="selected" disabled="disabled">Area Of Interest</option>
									<option>Education</option>
									<option>Health</option>
									<option>Empowering Project</option>
									<option>Other</option>
								</select><br>      
                                <input type="text" name="amount" placeholder="Amount you want to Donate" required=" " class="form-control">                       
								<input type="submit" name="submit" value="SUBMIT" class="btn gradient-bg">
								
                            </form>
                          
                        </div>		 
				</div>
				<div class="col-md-6 contact-form" style="background: #fff;padding: 0;">
					<table class="table">
						<tr>
							<td>Account Holder</td>
							<td>:</td>
							<td>Daxin Gujarat Anavil Yuva Sangathan</td>
						</tr>
						<tr>
							<td>Account No</td>
							<td>:</td>
							<td> 055001000001014</td>
						</tr>
						<tr>
							<td>Bank Name</td>
							<td>:</td>
							<td>The Suart District Co-operative Bank Ltd.</td>
						</tr>
						<tr>
							<td>Bank Address</td>
							<td>:</td>
							<td> Mahavir Chok,<br> Near R.T.O. Office,<br> J.P.Road, Surat-395001 </td>
						</tr>
						<tr>
							<td>IFSC Code</td>
							<td>:</td>
							<td>SDCB0000055</td>
						</tr>
						<tr>
							<td>Pan Card No</td>
							<td>:</td>
							<td></td>
						</tr>
						<tr>
							<td>Phone No</td>
							<td>:</td>
							<td>0261-2470258</td>
						</tr>
					</table>
				</div>
				</div>
		<!-- end divider -->
	<br><br>
	</div>
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