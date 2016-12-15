<!DOCTYPE html>
<html>
<head>
	<title>KuiRen Tour & Travel</title>
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<link href="assets/css/smart.css" rel="stylesheet" type="text/css" media="all"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="The free My-tour Iphone web template, Andriod web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<!--js-->
	<link type="text/css" rel="stylesheet" href="assets/css/jquery.mmenu.all.css" /> 
	<script src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/move-top.js"></script>
	<script type="text/javascript" src="assets/js/easing.js"></script>
	   <script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
		<script type="text/javascript" src="assets/js/jquery.mmenu.js"></script>
			<script type="text/javascript">
				//	The menu on the left
				$(function() {
					$('nav#menu-left').mmenu();
				});
			</script>
	<!--/scroll -->
	<!--/js-->
	<!--animated-css-->
	<link href="assets/css/animate.css" rel="stylesheet" type="text/css" media="all">
	<script src="assets/js/wow.min.js"></script>
	<script>
	 new WOW().init();
	</script>
	<!--/animated-css-->


</head>
<body>
<!--header-->
	 <div id="page">
		 <div id="header">
			 <a class="navicon" href="#menu-left"> </a>
			 <div class="logo">
			 <a href="index.html"><img src="assets/images/_smart/logo.png" alt="" /></a>
			 </div>
		 </div>
		 <nav id="menu-left">
			 <ul>
			     <li><a href="#home">Home</a></li>
				 <li><a href="#about" class="scroll">About</a></li>
				 <li><a href="#toptours" class="scroll">Top Tours</a></li>
				 <li><a href="#guides" class="scroll">Guides</a></li>
				 <li><a href="#contact" class="scroll">Contact</a></li>
				 <div class="clear"> </div>
			 </ul>
		 </nav>
	 </div>	
<!--/header-->	
<!---banner--->
<!----start-slider-script---->
			<script src="assets/js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			<!----//End-slider-script---->
			<!-- Slideshow 4 -->
			    <div id="top" class="callbacks_container">
			      <ul class="rslides" id="slider4">
			        <li>
			          <img src="assets/images/_smart/banner.png" alt="">
					  <div class="caption">
			     	  		<div class="header-info">
							<h2><a href="#">Get Away On This Weekend</a></h2>
							<lable></lable>
							<h1><a href="#">HEAVEN BEACH RESORT</a></h1>
							</div>
			          </div>
			        </li>
			        <li>
			          <img src="assets/images/_smart/beach2.jpg" alt="">
			        <div class="caption">
			          	<div class="header-info">
							<h2><a href="#">Get Away On This Weekend</a></h2>
							<lable></lable>
							<h1><a href="#">HEAVEN BEACH RESORT</a></h1>
							</div>
			          </div>
			        </li>
			        <li>
			          <img src="assets/images/_smart/beach3.jpg" alt="">
			          <div class="caption">
			          	<div class="header-info">
							<h2><a href="#">Get Away On This Weekend</a></h2>
							<lable></lable>
							<h1><a href="#">HEAVEN BEACH RESORT</a></h1>
							</div>
			          </div>
			        </li>
					<li>
			          <img src="assets/images/_smart/beach4.jpg" alt="">
			          <div class="caption">
			          	<div class="header-info">
							<h2><a href="#">Get Away On This Weekend</a></h2>
							<lable></lable>
							<h1><a href="#">HEAVEN BEACH RESORT</a></h1>
							</div>
			          </div>
			        </li>
			      </ul>
			    </div>	         
			    <div class="clearfix"> </div>
				
		<!----- //End-slider---->
<!---banner--->	
<!--About-->
<div class="about" id="about">
	  <div class="about-head text-center">
	  <h3>ABOUT US</h3>
	  <span></span><img src="assets/images/_smart/about-img.png" alt=""><span></span>
	  </div>
	   <div class="container">		  
		 <div class="col-md-4 about-grids">
			 <h4><span class="icon1"></span>Best Destinations</h4>
			 <p>Sed ut perspiciatis unde omnis iste natus error.</p>
		 </div>
		 <div class="col-md-4 about-grids grid2">
			 <h4><span class="icon2"></span>Trust & Safety</h4>
			 <p>Sed ut perspiciatis unde omnis iste natus error.</p>
		 </div>
		 <div class="col-md-4 about-grids">
			 <h4><span class="icon3"></span>Combine & Save</h4>
			 <p>Sed ut perspiciatis unde omnis iste natus error.</p>
		 </div>
	 </div>
</div>
<!--/About-->
<!--top-tours-->	
<div class="portfolio" id="toptours">
   <div class="top-tours-head text-center">
		  <h3>TOP TOURS</h3>
		  <span></span><img src="assets/images/_smart/star.png" alt=""><span></span>
		  <div class="container">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
		  </div>
		  </div>
	      <ul id="filters" class="clearfix wow bounceIn" data-wow-delay="0.4s">
			<li><span class="filter active" data-filter="app card icon logo fun">ALL</span></li>
			<li><span class="filter" data-filter="app">Domestic Travel</span></li>
			<li><span class="filter" data-filter="card">Foreign Travel</span></li>
			<li><span class="filter" data-filter="icon">Short Date Tour</span></li>
			<li><span class="filter" data-filter="fun">Long Date Tour</span></li>
	        </ul>
	     <div id="portfoliolist">
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="assets/images/_smart/t1.jpg" class="img-responsive" alt=""/></a>
							<div class="tour-caption">
							<span> </span>
							<p>Phu Quoc Resort & Spa</p>
							</div>

						</div>
					</div>				
					<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="assets/images/_smart/t2.jpg" class="img-responsive" alt=""/></a>
							 <div class="tour-caption">
							 <span> </span>
							 <p>Phu Quoc Resort & Spa</p>
						     </div>

						</div>
					</div>		
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="assets/images/_smart/t3.jpg" class="img-responsive" alt=""/></a>
							 <div class="tour-caption">
							 <span> </span>
							 <p>Phu Quoc Resort & Spa</p>
							 </div>
						</div>
					</div>				
					<div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="assets/images/_smart/t4.jpg" class="img-responsive" alt=""/></a>
							 <div class="tour-caption">
							 <span> </span>
							<p>Phu Quoc Resort & Spa</p>
							</div>
						</div>
					</div>	
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="assets/images/_smart/t5.jpg" class="img-responsive" alt=""/></a>
							 <div class="tour-caption">
							 <span> </span>
							 <p>Phu Quoc Resort & Spa</p>
							 </div>
						</div>
					</div>			
					<div class="portfolio fun mix_all" data-cat="fun" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="assets/images/_smart/t6.jpg" class="img-responsive" alt=""/></a>
							 <div class="tour-caption">
							 <span> </span>
							<p>Phu Quoc Resort & Spa</p>
							</div>
						</div>
			      </div>
				  <div class="portfolio fun mix_all" data-cat="fun" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
							<img src="assets/images/_smart/t7.jpg" class="img-responsive" alt=""/></a>
							<div class="tour-caption">
							<span> </span>
							<p>Phu Quoc Resort & Spa</p>
							</div>
						</div>
			      </div>
				  <div class="portfolio icon mix_all" data-cat="fun" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="assets/images/_smart/t8.jpg" class="img-responsive" alt=""/></a>
							 <div class="tour-caption">
							 <span> </span>
							 <p>Phu Quoc Resort & Spa</p>
							 </div>
					   </div>
			      </div>
		   <div class="clearfix"></div>	
	  </div>
</div>	  
<!-- Script for gallery Here-->
<script type="text/javascript" src="assets/js/jquery.mixitup.min.js"></script>
<script type="text/javascript">
	$(function () {
		var filterList = {
		init: function () {
// MixItUp plugin
// http://mixitup.io
				$('#portfoliolist').mixitup({
					targetSelector: '.portfolio',
					filterSelector: '.filter',
					effects: ['fade'],
					easing: 'snap',
				// call the hover effect
				onMixEnd: filterList.hoverEffect()
	});				
},
		hoverEffect: function () {
// Simple parallax effect
		$('#portfoliolist .portfolio').hover(
			function () {
			$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
			$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
			},
					function () {
						$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
						$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
			}		
		);				
	}
};
// Run the show!
		filterList.init();
	});	
</script>
<!--Gallery Script Ends-->	 
<!--/top-tours-->
<div id="guides" class="tour-guides">
	  <div class="tour-guides-head text-center">
		  <h3>TOUR GUIDES</h3>
		  <span></span><img src="assets/images/_smart/guide.png" alt=""><span></span>
		  <div class="container">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
		  </div>
	  </div>
	  <div class="container">
		<!-- requried-jsfiles-for owl -->
				<link href="assets/css/owl.carousel.css" rel="stylesheet">
							    <script src="assets/js/owl.carousel.js"></script>
							        <script>
							    $(document).ready(function() {
							      $("#owl-demo").owlCarousel({
							        items : 1,
							        lazyLoad : true,
							        autoPlay : true,
							        navigation : false,
							        navigationText :  false,
							        pagination : true,
							      });
							    });
							    </script>
			<!-- //requried-jsfiles-for owl -->
		  <div id="owl-demo" class="owl-carousel">
			  <div class="item text-center guide-sliders">
				 <div class="col-md-3 image-grid">
					 <img src="assets/images/_smart/g1.jpg" alt=""/>
					 <div class="guide-caption">
					 <span></span>
						<a href="#"><span class="twit"> </span></a>
						<a href="#"><span class="fb"> </span></a>
						<a href="#"><span class="gplus"> </span></a>
					 </div>
					 <p><a href="#">Elena Smith</a></p>
				 </div>
			  </div>
			  <div class="item text-center guide-sliders">
				 <div class="col-md-3 image-grid">
					 <img src="assets/images/_smart/g2.jpg" alt=""/>
					 <div class="guide-caption">
					 <span></span>
						<a href="#"><span class="twit"> </span></a>
						<a href="#"><span class="fb"> </span></a>
						<a href="#"><span class="gplus"> </span></a>
					 </div>
					 <p><a href="#">Smith</a></p>
				 </div>
			  </div>
			  <div class="item text-center guide-sliders">
				 <div class="col-md-3 image-grid">
					 <img src="assets/images/_smart/g3.jpg" alt=""/>
					 <div class="guide-caption">
					 <span></span>
						<a href="#"><span class="twit"> </span></a>
						<a href="#"><span class="fb"> </span></a>
						<a href="#"><span class="gplus"> </span></a>
					 </div>
					 <p><a href="#">Elena</a></p>
				 </div>
			  </div>
			  <div class="item text-center guide-sliders">
				 <div class="col-md-3 image-grid">
					 <img src="assets/images/_smart/g4.jpg" alt=""/>
					 <div class="guide-caption">
					 <span></span>
						<a href="#"><span class="twit"> </span></a>
						<a href="#"><span class="fb"> </span></a>
						<a href="#"><span class="gplus"> </span></a>
					 </div>
					 <p><a href="#">John</a></p>
				 </div>
			  </div>
		  </div>
		</div>
</div>
<!--client-say-->
<div class="client-say">
	 <div class="client-say-layer">
	     <div class="client-say-head text-center">
			  <h3>CLIENT SAY</h3>
			  <span></span><img src="assets/images/_smart/face.png" alt=""><span></span>
			  <!-- requried-jsfiles-for owl -->
				<link href="assets/css/owl.carousel.css" rel="stylesheet">
							    <script src="assets/js/owl.carousel.js"></script>
							        <script>
							    $(document).ready(function() {
							      $("#owl-demo1").owlCarousel({
							        items : 1,
							        lazyLoad : true,
							        autoPlay : true,
							        navigation : false,
							        navigationText :  false,
							        pagination : true,
							      });
							    });
							    </script>
			 <!-- //requried-jsfiles-for owl -->
		     <div id="owl-demo1" class="owl-carousel">
				  <div class="item">
					  <div class="client-say-info">
							<p>"  Lorem ipsum dolor sit amet, consectetur adipiscing elit.  "</p>
							<h4>Anna Smith</h4>
						    <h6><span></span></h6>
					  </div> 
				  </div>
				   <div class="item">
					  <div class="client-say-info">
							<p>"  Lorem ipsum dolor sit amet, consectetur adipiscing elit.  "</p>
							<h4>Anna Smith</h4>
						    <h6><span></span></h6>
					  </div> 
				  </div>
				   <div class="item">
					   <div class="client-say-info">
							<p>"  Lorem ipsum dolor sit amet, consectetur adipiscing elit.  "</p>
							<h4>Smith</h4>
						    <h6><span></span></h6>
					   </div> 
				  </div>
				  <div class="item">
					  <div class="client-say-info">
							<p>"  Lorem ipsum dolor sit amet, consectetur adipiscing elit.  "</p>
						    <h4>Amith</h4>
						    <h6><span></span></h6>
					  </div> 
				  </div>
				  <div class="item">
					   <div class="client-say-info">
							<p>"  Lorem ipsum dolor sit amet, consectetur adipiscing elit.  "</p>
							<h4>John Smith</h4>
						    <h6><span></span></h6>
					  </div> 
				  </div>
			  </div>
          </div>
      </div>
</div>
<!--/client-say-->
<div id="contact" class="contact">
	  <div class="contact-head text-center">
		  <h3>CONTACT US</h3>
		  <span></span><img src="assets/images/_smart/mail.png" alt=""><span></span>
		  <div class="contact-grids">
			  <div class="container">
				  <div class="col-md-4 address">
						<h4>Lorem ipsum dolor sit amet,consec</h4>
						<p>Quis nostrud exercitation ullamco laboris nisi ut aliquip 
						ex ea commodo consequat.</p>
						<h5><span class="img1"></span>(+1) 234 56 789&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;(+1) 234 56 780</h5>
						<h5><span class="img2"></span><a href="#">info[at]mytour.com&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;support[at]mytour.com</a></h5>
						<h5><span class="img3"></span>1100 High Street,New York City,USA.</h5>
				  </div>
				  <div class="col-md-8 contact">	
					  <form>
					  <input type="text" class="text" value=" Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Name';}">
					  <input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your mail';}">
					  <textarea onfocus="if(this.value == 'Message') this.value='';" onblur="if(this.value == '') this.value='Enter Message Here';" >Message</textarea>
					  <input type="submit" value="Send message">
					  <div class="clearfix"></div>
					   </form>
				   </div>
				  <div class="clearfix"></div>
			  </div>
		  </div>
	        <div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d193683.36875212385!2d-74.30999320395165!3d40.66730031841747!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1411724375639" frameborder="0" style="border:0"></iframe>
		    <span></span>
			</div>
	  </div>
</div>
<div class="fotter">	
	 <div class="container">
		 <div class="fotter-grids">
			 <div class="col-md-4 fotter-left">
			 <img src="assets/images/_smart/fotter-logo.png" alt="">
			 <p>Voluptatem quia voluptas sit aspernatur aut odit aut fugit, 
				sed quia consequuntur magni dolores eos qui ratione.</p>
			 </div>
			 <div class="col-md-4 fotter-middle">
				 <h3>Latest News</h3>
				 <div class="footer-list">
						<ul>
						<li><a href="#"><span></span>Sed ut perspiciatis unde omnis iste natus.</a></li> 
						<li><a href="#"><span></span>Voluptatem accusantium.</a></li> 
						<li><a href="#"><span></span>Totam rem aperiam,eaque ipsa quae.</a></li> 
						<li><a href="#"><span></span>Inventore veritatis et quae.</a></li> 
						<li><a href="#"><span></span>Nemo enim ipsum voluptatem quia voluptas.</a></li>
						</ul>
				 </div>
			 </div>
			 <div class="col-md-4 fotter-right">
			 <h3>Newsletter</h3>
			 <form>
			 <input type="text" class="text" value="E-mail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your mail';}">
			 <input type="submit" value="Send">
			 <div class="clearfix"></div>
			 </form>
			 <div class="social-icons">
			 <a href="#"><span class="facebook"> </span></a>
			 <a href="#"><span class="twitter"> </span></a>
			 <a href="#"><span class="googleplus"> </span></a>
			 <a href="#"><span class="pinterest"> </span></a>
			 <a href="#"><span class="instagram"> </span></a>
			 </div>
			 <div class="clearfix"></div>
	     </div>
		 <div class="clearfix"></div>
	 </div>
</div>
</div>  
<div class="copyright text-center">
<p>Template by <a href="http://www.w3layouts.com">W3layouts</a></p>
</div>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  </body>
</html>