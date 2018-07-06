<?php 
SESSION_START();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Read on Rent</title>
<meta name="description" content="Read on Rent">
<meta name="author" content="read on rent">
<meta name="url" content="http://www.readonrent.com"/>
    <meta name="site_name" content="Read on Rent"/>


 <meta property="title" content="Read on Rent"/>

<!-- Favicons
    ================================================== -->
<link rel="icon" size="72x72" href="img/amu.png">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="icon" sizes="72x72" href="img/about.jpg">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/prettyphoto.css">
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/modernizr.custom.js"></script>


</head>
<body>
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="index.html"><i class="fa fa-book"></i> <strong>Read on Rent</strong></a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="index.html" class="page-scroll">Home</a></li>
		<li><a href="rent.html" class="page-scroll">Rent</a></li>
		<li><a href="request.html" class="page-scroll">Request a Book</a></li>
        <li><a href="contact.html" class="page-scroll">Contact</a></li>
		<li><a href="" class="page-scroll">
		<?php 
		if(isset($_SESSION['signed_in']))
    {
      echo 'Hello '. $_SESSION['name'].', Not you?<a href="signout.php">Sign out</a>' ;
    }
    else
    {
        echo '<li class="page-scroll"><a class="dropdown" data-toggle="dropdown" href="#">Login/Signup</a>
		<ul class="dropdown-menu">
		<li><a href="login.html" >Login</a></li>
		<li><a href="signup.html">Signup</a></li>
		</ul>
		</li>';
    }?>
	</a></li>
		
		
		
		
		
		
		
      </ul>
	  
	  </div>
	  
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<!-- Header -->
<header class="text-center" name="home">
  <div class="intro-text">
    <h1 >Welcome to <strong>Read on Rent</strong></h1>
    <p ><br><b>Rent->Read->Return</b></p></p></p></p>
    <a href="#services-section" class="btn btn-default btn-lg page-scroll" >LEARN MORE</a> </div>
</header>

<br>

<!--Rent Section -->
<div id="rent">
  <div class="container"> <!-- Container -->
    <div class="section-title text-center center">
      <h2>Renting</h2>
      <hr>
      <div class="clearfix"></div>
      <p>Rent any book now!!</p>
    </div>
   
    <div class="row">
      <div class="portfolio-items">
        <div class="col-sm-3 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/1.jpg" rel="prettyphoto">
              <div class="hover-text">
                <h4><a href="rent.html"target="blank">Read on Rent</a></h4>
              
                
				
              </div>
			  
			  <img src="img/portfolio/1.jpg" class="img-responsive" alt="Read on Rent"></a> 
              
			  </div>
			  
          </div>
        </div>
        <div class="col-sm-3 col-md-3 col-lg-3 app">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/2.jpg" rel="prettyphoto">
              <div class="hover-text">
                <h4><a href="rent.html"target="blank">Read on Rent</a></h4>
            
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/2.jpg" class="img-responsive" alt="Read on Rent" > </a> </div>
          </div>
        </div>
        <div class="col-sm-3 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/3.jpg" rel="prettyphoto">
              <div class="hover-text">
                <h4><a href="rent.html"target="blank">Read on Rent</a></h4>
           
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/3.jpg" class="img-responsive" alt="Read on Rent"> </a> </div>
          </div>
        </div>
        <div class="col-sm-3 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/4.jpg" rel="prettyphoto">
              <div class="hover-text">
                <h4><a href="rent.html"target="blank">Read on Rent</a></h4>
            
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/4.jpg" class="img-responsive" alt="Read on Rent"> </a> </div>
          </div>
        </div>
        <div class="col-sm-3 col-md-3 col-lg-3 app">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/5.jpg" rel="prettyphoto">
              <div class="hover-text">
                <h4><a href="rent.html"target="blank">Read on Rent</a></h4>
              
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/5.jpg" class="img-responsive" alt="Read on Rent"> </a> </div>
          </div>
        </div>
        <div class="col-sm-3 col-md-3 col-lg-3 branding">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/6.jpg" rel="prettyphoto">
              <div class="hover-text">
                <h4><a href="rent.html"target="blank">Read on Rent</a></h4>
               
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/6.jpg" class="img-responsive" alt="Read on Rent"> </a> </div>
          </div>
        </div>
        <div class="col-sm-3 col-md-3 col-lg-3 branding app">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/7.jpg" rel="prettyphoto">
              <div class="hover-text">
                <h4><a href="rent.html"target="blank">Read on Rent</a></h4>
              
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/7.jpg" class="img-responsive" alt="Read on Rent"> </a> </div>
          </div>
        </div>
        <div class="col-sm-3 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/8.jpg" rel="prettyphoto">
              <div class="hover-text">
                <h4><a href="rent.html"target="blank">Read on Rent</a></h4>
                
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/8.jpg" class="img-responsive" alt="Read on Rent"> </a> </div>
          </div>
        </div>
		<p style="margin-left:45%;font-size:20px;text-weight:bold"><a href="rent.html" target="blank">See More..</a></p>
      </div>
    </div>
  </div>
  
</div>
<br>
<!--Buy Section-->

<div id="buy">
  <div class="container"> <!-- Container -->
    <div class="section-title text-center center">
      <h2>Buy From Us</h2>
      <hr>
      <div class="clearfix"></div>
      <p>Become our "Customer" not "Sales"!!</p>
    </div>
   
    <div class="row">
      <div class="portfolio-items">
        <div class="col-sm-3 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/1.jpg" rel="prettyphoto">
              <div class="hover-text">
                <h4>Read on Rent</h4>
              
                <div class="clearfix"></div>
              </div>
			  <img src="img/portfolio/1.jpg" class="img-responsive" alt="Read on Rent"> </a> 
              </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 app">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/2.jpg" rel="prettyphoto">
              <div class="hover-text">
                <h4>Read on Rent</h4>
            
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/2.jpg" class="img-responsive" alt="Read on Rent"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/3.jpg" rel="prettyphoto">
              <div class="hover-text">
                <h4>Read on Rent</h4>
           
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/3.jpg" class="img-responsive" alt="Read on Rent"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/4.jpg" rel="prettyphoto">
              <div class="hover-text">
                <h4>Read on Rent</h4>
            
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/4.jpg" class="img-responsive" alt="Read on Rent"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 app">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/5.jpg" rel="prettyphoto">
              <div class="hover-text">
                <h4>Read on Rent</h4>
              
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/5.jpg" class="img-responsive" alt="Read on Rent"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 branding">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/6.jpg" rel="prettyphoto">
              <div class="hover-text">
                <h4>Read on Rent</h4>
               
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/6.jpg" class="img-responsive" alt="Read on Rent"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 branding app">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/7.jpg" rel="prettyphoto">
              <div class="hover-text">
                <h4>Read on Rent</h4>
              
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/7.jpg" class="img-responsive" alt="Read on Rent"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/8.jpg" rel="prettyphoto">
              <div class="hover-text">
                <h4>Read on Rent</h4>
                
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/8.jpg" class="img-responsive" alt="Read on Rent"> </a> </div>
          </div>
        </div>
		<p style="margin-left:45%;font-size:20px;text-weight:bold"><a href="buy.html" target="blank">See More..</a></p>
      </div>
    </div>
  </div>
  </div>
  <br>

<!-- Achievements Section -->
<div id="achievements" class="section dark-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-3">
        <div class="achievement-box"> <span class="count">200</span>
          <h4>Happy clients</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-3">
        <div class="achievement-box"> <span class="count">100</span>
          <h4>Working hours</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-3">
        <div class="achievement-box"> <span class="count">1236</span>
          <h4>Books</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-3">
        <div class="achievement-box"> <span class="count">1</span>
          <h4>Aim</h4>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Services Section -->
<div id="services-section" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2><strong>Our Services</strong></h2>
      <hr>
      <div class="clearfix"></div>
      
    </div>
    <div class="space"></div>
    <div class="row">
      <div class="col-md-3 col-sm-6 service"> <i class="fa fa-tags"></i>
        <h4>Renting</h4>
        <p>Just order Books & Novels to Read on Rent</p>
      </div>
      <div class="col-md-3 col-sm-6 service"> <i class="fa fa-gears"></i>
        <h4>Buying</h4>
        <p>Just order Books & Novels because we make "Customers" not "Sales"</p>
      </div>
      <div class="col-md-3 col-sm-6 service"> <i class="fa fa-download"></i>
        <h4>Free Home Delivery</h4>
        <p>The Delivery of every book is just Free of Cost to your doorsteps</p>
      </div>
      <div class="col-md-3 col-sm-6 service"> <i class="fa fa-paw"></i>
        <h4>Membership</h4>
        <p>Yeah,Our Members Form is Workin!</p>
		<p><strong><a href="signup.html">Become a Member!!</a></strong></p>
      </div>
    </div>
  </div>
</div>





<div id="social-section">
  <div class="container">
    <div class="social">
      <ul>
        <li><a href="https://www.facebook.com/take.read.return/"><i class="fa fa-facebook"></i></a></li>
        <li><a href="https://twitter.com/justread_rent"><i class="fa fa-twitter"></i></a></li>
        
        
        <li><a href="https://www.instagram.com/read_on_rent/"><i class="fa fa-instagram"></i></a></li>
        <li><a href="https://plus.google.com/u/1/101925148378901915388"><i class="fa fa-google"></i></a></li>
      </ul>
    </div>
  </div>
</div>
<div id="footer">
  <div class="container">
    <div class="fnav">
      <p>Copyright &copy; Just Read Company,2018. <br>Designed by <b>Just Read</b></p>
    </div>
  </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/jquery.counterup.js"></script> 
<script type="text/javascript" src="js/waypoints.js"></script> 
<script type="text/javascript" src="js/jquery.prettyphoto.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/contact_me.js"></script> 

<!-- Javascripts
    ================================================== --> 
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>