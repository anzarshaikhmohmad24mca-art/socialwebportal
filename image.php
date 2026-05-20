<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> Palwada Samaj Patrika </title>
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
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
  padding: 00px;
  font-family: Arial;
}

/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 30px;
  word-break: break-all;
}

.row {
  margin: 00px -00px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  display: none; /* Hide all elements by default */
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: white;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
</style>

<!--  FAVICON -->

</head>
<body class="single-page news-page">
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
    </header>
<!-- .site-header -->

<div class="page-header">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1> Gallery </h1>
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
            	<h3> Gallery</h3>
            </div>
			<div class="main">
        <div class="row">
                                <form method="post" align="left">
                        <input type="text" name="searching_txt" required="" placeholder="Enter Year">
                        <input type="submit" name="btnsearch" value="Search" class="">
                    </form>
                    &nbsp;&nbsp;&nbsp;
                    <a href="image.php"><button class="">show all</button></a>

        </div>
           <div class="row">

		   <?php
												$i = 1;
                        if(isset($_REQUEST['btnsearch']))
                        {
                            $searching_txt=$_REQUEST['searching_txt'];
                            $sel="select * from gallery 
                                  where year='$searching_txt'
                                  order by year ASC";
                            $res = mysqli_query($con,$sel);
                        }
                        else
                        {
                            $sel = "select * from gallery order by year ASC";
                            $res = mysqli_query($con,$sel);
                        }
												while($row = mysqli_fetch_array($res))
												{	
												?>
  <div class="column nature">
    <div class="content" style="width:320px">
      <a href="image1.php?a=<?php echo $row['gid']; ?>"><img src="C-Panel/<?php echo $row['image']; ?>" alt="Gallery" style="width:300px; height:200px"></a>
     <center> <h5><a href="image1.php?a=<?php echo $row['gid']; ?>"><b> <?php echo $row['name']; ?> - <?php echo $row['year']; ?></a></b></h5></center>
    </div>
	
  </div>	
   <?php
		$i++;
	}
	?>
  </div>
	
</div>
  </div>
    </div>
</section>


<!-- MAIN (Center website) -->


<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

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