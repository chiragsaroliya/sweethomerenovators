<!DOCTYPE html>
<html>
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-133682390-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-133682390-1');
</script>
<title>Sweet Home Renovators | Make your dream home</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="We are one of the finest renovators across Mumbai. We provide unique and creative decor to your house.">
<meta name="keywords" content="Home,Renovation,Renovate,Interior,Remodel,Contractor,Improve home,bathroom,Kitchen,Bedroom
">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:image" content="<?php echo site_url();?>assets/images/home-thumbnail.png" />
<meta property="og:image:type" content="image/png">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<script>
window.onload=function(){
var phone = document.getElementById("phone");
phone.addEventListener("input", function (event) {
  if (phone.validity.patternMismatch) {
    phone.setCustomValidity("Phone number should be numeric with 10 digits");
  } else {
    phone.setCustomValidity("");
  }
});
}
</script>
<!-- //for-mobile-apps -->
<link href="<?php echo site_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo site_url();?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo site_url();?>assets/css/gallery.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo site_url();?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<!-- js -->
<script src="<?php echo site_url();?>assets/js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- for-gallery-rotation -->
<script src="<?php echo site_url();?>assets/js/modernizr.custom.97074.js"></script>
<!-- //for-gallery-rotation -->
<!-- FlexSlider -->
<link rel="stylesheet" href="<?php echo site_url();?>assets/css/flexslider.css" type="text/css" media="screen" />
<script defer src="<?php echo site_url();?>assets/js/jquery.flexslider.js"></script>
<script type="text/javascript">
						$(window).load(function(){
						  $('.flexslider').flexslider({
							animation: "slide",
							start: function(slider){
							  $('body').removeClass('loading');
							}
						  });
						});
					  </script>
<!-- //FlexSlider -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php echo site_url();?>assets/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo site_url();?>assets/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Comfortaa:400,300,700' rel='stylesheet' type='text/css'>
<link href="//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900" rel="stylesheet">
</head>

<body>
<!-- header -->
	<div class="header">
		<div class="container">
			<div class="header-nav">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
						<div class="logo">
							<h1><a class="navbar-brand" href="index.html"><label>S</label>weet<label>H</label>ome<label>R</label>enovators<span>Make dream home for you</span></a></h1>
						</div>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					 <ul class="nav navbar-nav">
						<li class="hvr-sweep-to-bottom active"><a href="/">Home</a></li>
						<li class="hvr-sweep-to-bottom"><a href="#services" class="scroll">How We Work</a></li>
						<li class="hvr-sweep-to-bottom"><a href="#about" class="scroll">Services</a></li>
						<li class="hvr-sweep-to-bottom"><a href="#gallery" class="scroll">Gallery</a></li>
						<li class="hvr-sweep-to-bottom"><a href="#contact" class="scroll">Contact Us</a></li>
					  </ul>
					</div><!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>
	</div>
<!-- //header -->
<!-- banner -->
	<div class="banner">
		<div class="container">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="banner-info">
								<div class="banner-info-left">
									<h3>Dream home</h3>
									<p>WE ARE HERE TO TRANSFORM YOUR HOME INTO DREAM HOME</p>
                  <!--
									<div class="more">
										<a href="#">Learn More</a>
									</div>
                  -->
								</div>
							</div>
						</li>
						<li>
							<div class="banner-info">
								<div class="banner-info-left">
									<h3>Quality Work</h3>
									<p>WE PROVIDE BEST QUALITY</p>
                  <!--
									<div class="more">
										<a href="#">Learn More</a>
									</div>
                  -->
								</div>
							</div>
						</li>
						<li>
							<div class="banner-info">
								<div class="banner-info-left">
									<h3>Customer Satisfaction</h3>
									<p>CUSTOMER SATISFACTION IS OUR PRIME FOCUS</p>
                  <!--
									<div class="more">
										<a href="#">Learn More</a>
									</div>
                  -->
								</div>
							</div>
						</li>
					</ul>
				</div>
			</section>	
		</div>
	</div>

<!-- //banner -->
<!-- welcome -->
<div><?php echo $this->session->flashdata('msg'); ?></div>
	<div class="welcome">
		<div class="container">
			<h2>Welcome !</h2>
			<p class="ever">We Make it Happens,Something Amazing For You Everyday.</p>
			<div class="welcome-grids">
				<div class="col-md-3 welcome-grid">
					<div class="welcome-grd">
						<div class="icons">
							<span class="glyphicon glyphicon-thumbs-up"></span>
						</div>
						<h4>QUALITY WORK</h4>
						<p>Our highly experienced & skilled professional ensures the quality work.</p>
					</div>
				</div>
				<div class="col-md-3 welcome-grid">
					<div class="welcome-grd">
						<div class="icons">
							<span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
						</div>
						<h4>STANDARD MATERIALS</h4>
						<p>We use branded materials for work.</p>
					</div>
				</div>
				<div class="col-md-3 welcome-grid">
					<div class="welcome-grd">
						<div class="icons">
							<span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
						</div>
						<h4>MODERN TECHNIQUES</h4>
						<p>We use modern techniques and tools for better finishing.</p>
					</div>
				</div>
				<div class="col-md-3 welcome-grid">
					<div class="welcome-grd">
						<div class="icons">
							<span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
						</div>
						<h4>BUDGET PLANNING</h4>
						<p>We provide renovation ideas to best fit your budget.</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //welcome -->
<!-- banner-text -->
	<div class="banner-text">
		<div class="container">
			<div class="wmuSlider example1">
			   <div class="wmuSliderWrapper">
					<article style="position: absolute; width: 100%; opacity: 0;"> 
						<div class="banner-wrap">
							<div class="banner-text-info banner-text-inf">
								
							</div>
						</div>
					</article>
					<article style="position: absolute; width: 100%; opacity: 0;"> 
						<div class="banner-wrap">
							<div class="banner-text-info banner-text-inf1">
								
							</div>
						</div>
					</article>
					<article style="position: absolute; width: 100%; opacity: 0;"> 
						<div class="banner-wrap">
							<div class="banner-text-info banner-text-inf2">
								
							</div>
						</div>
					</article>
					<article style="position: absolute; width: 100%; opacity: 0;"> 
						<div class="banner-wrap">
							<div class="banner-text-info banner-text-inf3">
								
							</div>
						</div>
					</article>
				</div>
			</div>
				<script src="<?php echo site_url();?>assets/js/jquery.wmuSlider.js"></script> 
					<script>
						$('.example1').wmuSlider();         
					</script> 
		</div>
	</div>
<!-- //banner-text -->
<!-- services -->
	<div id="services" class="services">
		<div class="container">
			<h3 class="ser">How We Work</h3>
		<p class="ever">We Are Here To Make Your Dream Home Come True.</p>
			<div class="services-top">
				<div class="col-md-6 services-top-left">
					<div class="services-top-main">
						<div class="col-md-6 services-left service-img">
							<img src="<?php echo site_url();?>assets/images/how_we_work/meet-and-discuss.png" alt="" class="img-responsive" />
						</div>
						<div class="col-md-6 services-left">
							<h4>Understand Requirements</h4>
							<p>We meet & discuss to understand the requirement.</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="services-top-main">
						<div class="col-md-6 services-left service-img">
							<img src="assets/images/how_we_work/planning.png" alt="" class="img-responsive" />
						</div>
						<div class="col-md-6 services-left">
							<h4>Planning & Suggestions</h4>
							<p>Proper planning for utilization of space & material selection to best fit the budget.</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-6 services-top-left">
					<div class="services-top-main">
						<div class="col-md-6 services-left service-img">
							<img src="assets/images/how_we_work/execution.png" alt="" class="img-responsive" />
						</div>
						<div class="col-md-6 services-left">
							<h4>Execution With Perfection</h4>
							<p>Our highly experienced team will execute the plan with perfection.</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="services-top-main">
						<div class="col-md-6 services-left service-img">
							<img src="assets/images/how_we_work/cleaning-and-finishing.png" alt="" class="img-responsive" />
						</div>
						<div class="col-md-6 services-left">
							<h4>Finishing & Cleaning</h4>
							<p>Finishing and cleaning the workspace.</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
				<!--swipebox -->	
				<link rel="stylesheet" href="<?php echo site_url();?>assets/css/swipebox.css">
					<script src="<?php echo site_url();?>assets/js/jquery.swipebox.min.js"></script> 
					<script type="text/javascript">
						jQuery(function($) {
							$(".swipebox").swipebox();
						});
					</script>
				<!--//swipebox Ends -->
		</div>
	</div>

<!-- //services -->
<!-- about -->
	<div id="about" class="advantages">
		<div class="container">
			<h3>OUR SERVICES</h3>
			
			
			<div class="our-advantages-grids w3layouts-agile">
				<div class="col-md-4 our-advantages-grid">
					<div class="col-xs-3 our-advantages-grd-left">
						<p>1.</p>
					</div>
					<div class="col-xs-9 our-advantages-grd-right">
						<h4>Flooring</h4>
						<p>We have many types of flooring to choose from as per your need.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 our-advantages-grid">
					<div class="col-xs-3 our-advantages-grd-left">
						<p>2.</p>
					</div>
					<div class="col-xs-9 our-advantages-grd-right">
						<h4>Kitchen & Bathroom</h4>
						<p>We remodel your kitchen to not only look beautiful, but works exactly as per need.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 our-advantages-grid">
					<div class="col-xs-3 our-advantages-grd-left">
						<p>3.</p>
					</div>
					<div class="col-xs-9 our-advantages-grd-right">
						<h4>Tiling</h4>
						<p>Attractive tiling work to beautify your home.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="our-advantages-grids">
				<div class="col-md-4 our-advantages-grid">
					<div class="col-xs-3 our-advantages-grd-left">
						<p>4.</p>
					</div>
					<div class="col-xs-9 our-advantages-grd-right">
						<h4>Plumbing & Electrical</h4>
						<p>High quality pipes and wires for long lasting maintenance free work.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 our-advantages-grid">
					<div class="col-xs-3 our-advantages-grd-left">
						<p>5.</p>
					</div>
					<div class="col-xs-9 our-advantages-grd-right">
						<h4>False Ceiling</h4>
						<p>Appropriate false ceiling for décor and attractive lighting.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 our-advantages-grid">
					<div class="col-xs-3 our-advantages-grd-left">
						<p>6.</p>
					</div>
					<div class="col-xs-9 our-advantages-grd-right">
						<h4>Painting Work</h4>
						<p>Perfect colour combination for pleasant look.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>

<!-- //about -->

<!-- gallery -->
	<div id="gallery" class="gallery">
		<div class="container">
			<h3>Gallery</h3>
      <p class="ever">We Are Here To Make Your Dream Home Come True.</p>
      <div class="wrap-label-gallery filter-tope-group size27 flex-w flex-sb-m m-l-r-auto flex-col-c-sm p-l-15 p-r-15">
        <button class="label-gallery txt26 trans-0-4 is-actived" data-filter="*">
          All Photo
        </button>
        <button class="label-gallery txt26 trans-0-4" data-filter=".bedroom">
          Bedroom
        </button>
        <button class="label-gallery txt26 trans-0-4" data-filter=".kitchen">
          Kitchen
        </button>
        <button class="label-gallery txt26 trans-0-4" data-filter=".bathroom">
          Bathroom
        </button>
        <button class="label-gallery txt26 trans-0-4" data-filter=".LivingRoom">
          Livingroom
        </button>
      </div>
			<div class="gallery-grids">
				<section>
					<ul id="da-thumbs" class="da-thumbs isotope-grid">
						<li class="isotope-item bedroom">
							<a href="assets/images/bedroom/bedroom1.jpeg" class=" mask b-link-stripe b-animate-go swipebox"  title="">
								<img src="assets/images/bedroom/bedroom1.jpeg" alt="" />
								<div>
									<h5>bedroom design</h5>
								</div>
							</a>
						</li>
						<li class="isotope-item bedroom">
							<a href="assets/images/bedroom/bedroom2.jpeg" class=" mask b-link-stripe b-animate-go swipebox"  title="">
								<img src="assets/images/bedroom/bedroom2.jpeg" alt="" />
								<div>
									<h5>bedroom design</h5>
								</div>
							</a>
						</li>
						<li class="isotope-item bedroom">
							<a href="assets/images/bedroom/bedroom3.jpeg" class=" mask b-link-stripe b-animate-go swipebox"  title="">
								<img src="assets/images/bedroom/bedroom3.jpeg" alt="" />
								<div>
									<h5>bedroom design</h5>
								</div>
							</a>
						</li>
						<li class="isotope-item bedroom">
							<a href="assets/images/bedroom/bedroom4.jpeg" class=" mask b-link-stripe b-animate-go swipebox"  title="">
								<img src="assets/images/bedroom/bedroom4.jpeg" alt="" />
								<div>
									<h5>bedroom design</h5>
								</div>
							</a>
						</li>
						<li class="isotope-item bedroom">	
							<a href="assets/images/bedroom/bedroom5.jpeg" class=" mask b-link-stripe b-animate-go swipebox"  title="">
								<img src="assets/images/bedroom/bedroom5.jpeg" alt="" />
								<div>
									<h5>bedroom design</h5>
								</div>
							</a>
						</li>
						<li class="isotope-item bedroom">
							<a href="assets/images/bedroom/bedroom6.jpeg" class=" mask b-link-stripe b-animate-go swipebox"  title="">
								<img src="assets/images/bedroom/bedroom6.jpeg" alt="" />
								<div>
									<h5>bedroom design</h5>
								</div>
							</a>
						</li>
						<li class="isotope-item kitchen">
							<a href="assets/images/kitchen/kitchen1.jpeg" class=" mask b-link-stripe b-animate-go swipebox"  title="">
								<img src="/assets/images/kitchen/kitchen1.jpeg" alt="" />
								<div>
									<h5>kitchen design</h5>
								</div>
							</a>
						</li>
						<li class="isotope-item kitchen">
							<a href="assets/images/kitchen/kitchen2.jpeg" class=" mask b-link-stripe b-animate-go swipebox"  title="">
								<img src="assets/images/kitchen/kitchen2.jpeg" alt="" />
								<div>
									<h5>kitchen design</h5>
								</div>
							</a>
						</li>
						<li class="isotope-item kitchen">
							<a href="assets/images/kitchen/kitchen3.jpeg" class=" mask b-link-stripe b-animate-go swipebox"  title="">
								<img src="assets/images/kitchen/kitchen3.jpeg" alt="" />
								<div>
									<h5>kitchen design</h5>
								</div>
							</a>
						</li>
						<li class="isotope-item kitchen">
							<a href="assets/images/kitchen/kitchen4.jpeg" class=" mask b-link-stripe b-animate-go swipebox"  title="">
								<img src="assets/images/kitchen/kitchen4.jpeg" alt="" />
								<div>
									<h5>kitchen design</h5>
								</div>
							</a>
						</li>
						<li class="isotope-item bathroom">
							<a href="assets/images/bathroom/bath1.jpeg" class=" mask b-link-stripe b-animate-go swipebox"  title="">
								<img src="assets/images/bathroom/bath1.jpeg" alt="" />
								<div>
									<h5>Bathroom design</h5>
								</div>
							</a>
						</li>
						<li class="isotope-item bathroom">
							<a href="assets/images/bathroom/bath2.jpeg" class=" mask b-link-stripe b-animate-go swipebox"  title="">
								<img src="assets/images/bathroom/bath2.jpeg" alt="" />
								<div>
									<h5>Bathroom design</h5>
								</div>
							</a>
						</li>
						<li class="isotope-item bathroom">
							<a href="assets/images/bathroom/bath3.jpeg" class=" mask b-link-stripe b-animate-go swipebox"  title="">
								<img src="assets/images/bathroom/bath3.jpeg" alt="" />
								<div>
									<h5>Bathroom design</h5>
								</div>
							</a>
						</li>
						
						<li class="isotope-item LivingRoom">
							<a href="assets/images/LivingRoom/LR1.jpeg" class=" mask b-link-stripe b-animate-go swipebox"  title="">
								<img src="assets/images/LivingRoom/LR1.jpeg" alt="" />
								<div>
									<h5>LivingRoom design</h5>
								</div>
							</a>
						</li>
						<li class="isotope-item LivingRoom">
							<a href="assets/images/LivingRoom/LR2.jpeg" class=" mask b-link-stripe b-animate-go swipebox"  title="">
								<img src="assets/images/LivingRoom/LR2.jpeg" alt="" />
								<div>
									<h5>LivingRoom design</h5>
								</div>
							</a>
						</li>
						<li class="isotope-item LivingRoom">
							<a href="assets/images/LivingRoom/LR3.jpeg" class=" mask b-link-stripe b-animate-go swipebox"  title="">
								<img src="assets/images/LivingRoom/LR3.jpeg" alt="" />
								<div>
									<h5>LivingRoom design</h5>
								</div>
							</a>
						</li>
						<li class="isotope-item LivingRoom">
							<a href="assets/images/LivingRoom/LR4.jpeg" class=" mask b-link-stripe b-animate-go swipebox"  title="">
								<img src="assets/images/LivingRoom/LR4.jpeg" alt="" />
								<div>
									<h5>LivingRoom design</h5>
								</div>
							</a>
						</li>
						<li class="isotope-item LivingRoom">
							<a href="assets/images/LivingRoom/LR5.jpeg" class=" mask b-link-stripe b-animate-go swipebox"  title="">
								<img src="assets/images/LivingRoom/LR5.jpeg" alt="" />
								<div>
									<h5>LivingRoom design</h5>
								</div>
							</a>
						</li>
						<li class="isotope-item LivingRoom">
							<a href="assets/images/LivingRoom/LR6jpeg" class=" mask b-link-stripe b-animate-go swipebox"  title="">
								<img src="assets/images/LivingRoom/LR6.jpeg" alt="" />
								<div>
									<h5>LivingRoom design</h5>
								</div>
							</a>
						</li>
						<li class="isotope-item LivingRoom">
							<a href="assets/images/LivingRoom/LR7.jpeg" class=" mask b-link-stripe b-animate-go swipebox"  title="">
								<img src="assets/images/LivingRoom/LR7.jpeg" alt="" />
								<div>
									<h5>LivingRoom design</h5>
								</div>
							</a>
						</li>
						<li class="isotope-item LivingRoom">
							<a href="assets/images/LivingRoom/LR8.jpeg" class=" mask b-link-stripe b-animate-go swipebox"  title="">
								<img src="assets/images/LivingRoom/LR8.jpeg" alt="" />
								<div>
									<h5>LivingRoom design</h5>
								</div>
							</a>
						</li>
						
					</ul>
				</section>
				<script type="text/javascript" src="<?php echo site_url();?>assets/js/jquery.hoverdir.js"></script>
				<script type="text/javascript" src="<?php echo site_url();?>assets/js/isotope.pkgd.min.js"></script>
				<script type="text/javascript" src="<?php echo site_url();?>assets/js/main.js"></script>
				<script type="text/javascript">
					$(function() {
					
						$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

					});
				</script>
			</div>
		</div>
	</div>
<!-- //gallery -->
<!-- contact -->
    
	<div id="contact" class="contact">
	<div class="container">
		<h3>get free quotation now</h3>
		<p class="ever">Contact now to get the best deals for renovation.</p>
		<div class="contact-us1-bottom w3layouts-agile">
			<form action="<?php echo base_url(); ?>contact/contact_us" method="post">
				<input type="text" placeholder="Name" name="name" required="">			
				<input type="email" placeholder="Email" name="email" required="">			
				<input type="text" placeholder="Contact Number" name="phone" id="phone" pattern="[789][0-9]{9}" required="">			
				<textarea placeholder="Message" name="message" required=""></textarea>
				<input type="submit" value="Submit" >
			</form>
			<div class="location">
        <div class="our-service-available">
          <h2 class="glyphicon glyphicon-home">Our Services available at</h2>
            <ul>
              <li>Kalyan</li>
              <li>Dombivli</li>
              <li>Thane</li>
              <li>Mulund</li>
              <li>Nahur</li>
              <li>Bhandup</li>
              <li>Kanjurmarg</li>
              <li>Vikhroli</li>
              <li>Ghatkopar</li>
            </ul>
            <ul>
              <li>Borivali</li>
              <li>Kandivali</li>
              <li>Malad</li>
              <li>Goregaon</li>
              <li>Jogeshwari</li>
              <li>Andheri</li>
            </ul>
        </div>
        <div class="mobile-number">
          <h2 class="glyphicon glyphicon-phone-alt">Call : <a href="tel:+496170961709">496170961709</a></h2>
        </div>
        <div class="emai-id">
          <h2 class="fa fa-envelope">Call : <a href="mailto:support@sweethomerenovators.com">support@sweethomerenovators.com</a></h2>
        </div>
			</div>
      <!--
			<div class="home-radio-clock-right">
				<ul>
					<li>Mumbai ( Central, Western ), Ahmedabad</li>
					<li class="lst">(+91) 9167667302</li>
					<li>support@sweethomerenovators.com</li>
				</ul>
			</div>
      -->
			<div class="clearfix"> </div>
		</div>

	</div>
	</div>
<!-- //contact -->
<!-- footer -->
	
	<div class="copy">
		<div class="container">
			<div class="copy-left-w3l-agile">
        <p>* Images used above are for demonstration purpose only.</p>
			</div>
			<div class="social-icons">
				<ul>
					<li><a href="#" class="fb"></a></li>
					<li><a href="#"></a></li>
					<li><a href="#" class="gg"></a></li>
					<li><a href="#" class="pn"></a></li>					
				</ul>	
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!--//footer-->
<!-- for bootstrap working -->
		<script src="<?php echo site_url();?>assets/js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>
