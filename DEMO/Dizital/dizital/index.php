<?php 
	require_once 'core\connection.php';
	require_once 'functions\category.php';
?>
<pre>
</pre>
<html>
<head>
<meta charset="utf-8">
<title>Homepage</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Odibee+Sans&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>
<body>
<div class="page-wrapper">
 	
    <!-- Main Header-->
    <header class="main-header">
    
    	<!--Header-Upper-->
        <div class="header-upper">
        	<div class="auto-container">
            	<div class="clearfix">
                	
                	<div class="pull-left logo-box">
                    	<div class="logo"><a href="index.php"><img src="images/logo.png" alt="" title=""></a></div>
                    </div>
                    
                    <div class="nav-outer pull-right clearfix">
                    
						<!-- Main Menu -->
						<nav class="main-menu navbar-expand-md">
							<div class="navbar-header">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							</div>

							<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
								<ul class="navigation clearfix">
									<li><a href="index.php">Home</a>
									</li>
									<li><a href="about.php">About Us</a></li>
									<li><a href="contact.php">Contact us</a></li>
								</ul>
							</div>
							
						</nav>
						
						<!-- Main Menu End-->
						
						<!--Button Box-->
						
					</div>
                    
                </div>
            </div>
        </div>
        <!--End Header Upper-->
        
        <!--Sticky Header-->
        <div class="sticky-header">
        	<div class="auto-container clearfix">
            	<!--Logo-->
            	<div class="logo pull-left">
                	<a href="index.php" class="img-responsive"><img src="images/logo-small.png" alt="" title=""></a>
                </div>
                
                <!--Right Col-->
                <div class="right-col pull-right">
                	<!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        
                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                            <ul class="navigation clearfix">
                                <li><a href="index.php">Home</a>
								</li>
								<li><a href="about.php">About Us</a></li>
								<li><a href="contact.php">Contact us</a></li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
                
            </div>
        </div>
        <!--End Sticky Header-->
    
    </header>
    <!--End Main Header -->
	<!--Banner Section-->
	<section class="banner-section" style="background-image: url(images/background/town.jpeg)">
		<div class="auto-container">
			<h2>We are speak just truth<br>Global news</h2>
			<!--Search Form-->
			<div class="search-form">
				<form method="post" action="index.php">
					<div class="form-group clearfix">
						<input type="text" name="firstname" value="" placeholder="Searh here...." required>
						<button type="submit" class="theme-btn dripicons-search"></button>
					</div>

				</form>
			</div>
			<!--End Search Form-->
	</section>
	<!--End Banner Section-->
	
	<section class="gallery-section">
    	<div class="auto-container">
        	
        	<!--MixitUp Galery-->
            <div class="mixitup-gallery">
                
                <!--Filter-->
                <div class="filters text-center clearfix">
                    <ul class="filter-tabs filter-btns clearfix">
                    	<?php 
                        	$categories = get_category(); 
                        ?>
                        	<?php if (count($categories)===0): ?>
                        <li><a href="#">Добавить категорию</a></li>
                        <?php else: ?>

                        <?php foreach ($categories as $category):?>
                    	<li class="filter" data-role="button"><a class="filter" href='/category.php?id=<?=$category['id']?>'><?=$category['name']?></a></li>
                    	<?php endforeach; ?>
                    	
                    	<?php endif; ?>
                    </ul>
                </div>
                <?php
                	$news = get_news();
                ?>
                <?php foreach ($news as $news): ?>
                <div class="filter-list row clearfix">
                <div class="row">
				  <div class="span8">
				    <div class="row">
				      <div class="span8">
				        <h3><strong><?=$news['text']?></strong></h3>
				      </div>
				    </div>
				    <div class="row">
				      <div class="span2">
				            <img src="<?=$news['img']?>" alt="">
				      </div>
				      <div class="span6">      
				        <p>
				          <?=$news['discription']?>
				        </p>
				        <p>Read more</p>
				      </div>
				    </div>
				    <div class="row">
				      <div class="span8">
				        <p></p>
				        <p>
				          <i class="icon-user"></i><?=$news['users']?> 
				          | <i class="icon-calendar"></i><?=$news['date']?> 
				        </p>
				      </div>
				    </div>
				  </div>
				</div>
				<hr>
				<?php endforeach; ?>			
			</div>
		</div>
	</section>
	<!--End Gallery Section-->
	
	<!--Counter Section-->
	<section class="counter-section">
		<!--Title Box-->
		<div class="title-box" style="background-image: url(images/background/1.jpg)">
			<div class="auto-container">
				<h2>Send your news to<br>dizitalnews@gmail.com</h2>
			</div>
		</div>
	</section>
	<!--End Counter Section-->
	
	<!--Main Footer-->
    <footer class="main-footer alternate">
    
		<div class="auto-container">
        
        	<!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">
                	
                    <!--big column-->
                    <div class="big-column col-lg-5 col-md-12 col-sm-12">
                        <div class="row clearfix">
							
							<!--Footer Column / Logo Widget-->
                            <div class="footer-column col-lg-7 col-md-7 col-sm-12">
								<div class="footer-widget logo-widget">
									<div class="logo">
										<a href="index.php"><img src="images/footer-logo.png" alt="" /></a>
									</div>
									<div class="text">Lorem Ipsum proin gravida nibh vel velit aucsollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</div>
									<ul class="social-icon-one">
										<li class="facebook"><a href="#"><span class="fa fa-facebook"></span></a></li>
										<li class="pinterest"><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
										<li class="twitter"><a href="#"><span class="fa fa-twitter"></span></a></li>
									</ul>
								</div>
							</div>
							
							<!--Footer Column / Links Widget-->
                            <div class="footer-column col-lg-5 col-md-5 col-sm-12">
								<div class="footer-widget links-widget">
									<h2>Company</h2>
									<ul class="list">
										<li><a href="#">About Us</a></li>
										<li><a href="#">Our Team</a></li>
										<li><a href="#">Testimonials</a></li>
										<li><a href="#">Brand</a></li>
										<li><a href="#">Ecosystem</a></li>
										<li><a href="#">Sitemap</a></li>
									</ul>
								</div>
							</div>
							
						</div>
					</div>
					
					<!--big column-->
                    <div class="big-column col-lg-7 col-md-12 col-sm-12">
                        <div class="row clearfix">
							<!--Footer Column / Links Widget-->
                            <div class="footer-column col-lg-4 col-md-6 col-sm-12">
								<div class="footer-widget links-widget">
									<h2>Links</h2>
									<ul class="list">
										<li><a href="#">Terms & Conditions</a></li>
										<li><a href="#">Privacy Policy</a></li>
										<li><a href="#">Refund Policy</a></li>
										<li><a href="#">Affiliate</a></li>
										<li><a href="#">Contact</a></li>
									</ul>
								</div>
							</div>
							
							<!--Footer Column / Map Widget-->
                            <div class="footer-column col-lg-4 col-md-6 col-sm-12">
								<div class="footer-widget map-widget">
									<h2>Where we are?</h2>
									<div class="image">
										<img src="images/resource/map.png" alt="" />
									</div>
								</div>
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
			
			<div class="copyright">&copy; Copyright 2018 , Dizital.PTVR18</div>
			
		</div>
	</footer>
			
	
</div>
<!--End pagewrapper-->

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/script.js"></script>


</body>
</html>