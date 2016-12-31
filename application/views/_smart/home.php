<!DOCTYPE html>
<html>
<head>
	<title>KuiRen Tour & Travel</title>
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<link href="assets/css/smart.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="The free My-tour Iphone web template, Andriod web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<!--js-->
	<link type="text/css" rel="stylesheet" href="assets/css/jquery.mmenu.all.css" /> 	
	<!--/js-->
	<!--animated-css-->
	<link href="assets/css/animate.css" rel="stylesheet" type="text/css" media="all">
	<!--/animated-css-->
</head>
<body>
<!--header-->
	<?php
	$this->load->view('_smart/header');
	?>
<!--/header-->	
<!---banner-->
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
				
		<!-- //End-slider-->
		<!--banner-->	
		<!--About-->
		<div class="about" id="about">
			  <div class="about-head text-center">
			  <h3>TENTANG KAMI</h3>
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
				  <h3>TUJUAN WISATA</h3>
				  <span></span><img src="assets/images/_smart/star.png" alt=""><span></span>
				  <div class="container">
			      	<p>
			      	<?php
						if($tour_destinations['cat']){
							echo $tour_destinations['cat'][0]->category_description;
						}
					?>
					</p>
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
				    <?php
						if($tour_destinations['tour_destinations']):
						foreach ($tour_destinations['tour_destinations'] as $r) { 
					?>
							<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
								<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
									<a href="tour_destination/<?=$r->slug?>" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
								     <img lsrc="assets/images/uploads/post_thumb/<?=$r->thumbnail?>" class="img-responsive" alt=""/>
										<div class="tour-caption">
											<span> </span>
											<p><?=$r->title?></p>
										</div>
								    </a>

								</div>
							</div>	
					<?php
					}
					endif;
						?>		
							<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
								<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
									<a href="tour_destinations" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
								     <img lsrc="assets/images/uploads/post_thumb/loadmore.jpg" class="img-responsive" alt=""/>
										<div class="tour-caption">
											<span> </span>
											<p>Lihat Lainnya</p>
										</div>
								    </a>

								</div>
							</div>	
				   <div class="clearfix"></div>	
			  </div>
		</div>	  
		<!--/top-tours-->
		<!-- rental mobil -->	
		<div class="portfolio" id="toptours">
		   <div class="top-tours-head text-center">
				  <h3>RENTAL MOBIL</h3>
				  <span></span><img src="assets/images/_smart/star.png" alt=""><span></span>
				  <div class="container">
			      	<p>
					<?php
						if($car_rental['cat']){
							echo $car_rental['cat'][0]->category_description;
						}
					?>
					</p>
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
				    <?php
					if($car_rental['car_rental']):
					foreach ($car_rental['car_rental'] as $r) { 
						?>
							<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
								<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
									<a href="tour_destination/<?=$r->slug?>" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
								     <img lsrc="assets/images/uploads/post_thumb/<?=$r->thumbnail?>" class="img-responsive" alt=""/>
										<div class="tour-caption">
											<span> </span>
											<p><?=$r->title?></p>
										</div>
								    </a>

								</div>
							</div>	
					<?php
					}
					endif;
						?>		
							<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
								<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
									<a href="tour_destinations" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
								     <img lsrc="assets/images/uploads/post_thumb/loadmore.jpg" class="img-responsive" alt=""/>
										<div class="tour-caption">
											<span> </span>
											<p>Lihat Lainnya</p>
										</div>
								    </a>

								</div>
							</div>	
				   <div class="clearfix"></div>	
			  </div>
		</div>	  
		<!--/rental mobil-->
		<div id="guides" class="tour-guides">
			  <div class="tour-guides-head text-center">
				  <h3>PEMANDU WISATA</h3>
				  <span></span><img src="assets/images/_smart/guide.png" alt=""><span></span>
				  <div class="container">
						<p>
							<?php
							if($tour_guides['cat']){
								echo $tour_guides['cat'][0]->category_description;
							}
							?>
						</p>
				  </div>
			  </div>
			  <div class="container">
				<!-- requried-jsfiles-for owl -->
				<link href="assets/css/owl.carousel.css" rel="stylesheet">
					<!-- //requried-jsfiles-for owl -->
				  <div id="owl-demo" class="owl-carousel">
						 <?php
					  if($tour_guides['tour_guide']):
					  	$index = 1;
					  foreach ($tour_guides['tour_guide'] as $tg) {
					  	//if($index <= 4):
						?>
					  		<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
								<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
									<a href="tour_destination/<?=$tg->slug?>" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
								     <img lsrc="assets/images/uploads/post_thumb/<?=$tg->thumbnail?>" class="img-responsive" alt=""/>
										<div class="tour-caption">
											<p style="font-size: 2em"><?=$tg->title?></p>
										</div>
								    </a>

								</div>
							</div>
					<?php
						//endif;
					  }
					  endif;
					  ?>
				  </div>
				</div>
		</div>
		<!--client-say-->
		<div class="client-say" style="margin-top:100px">
			 <div class="client-say-layer">
			     <div class="client-say-head text-center">
					  <h3>APA KATA </h3>
					  <span></span><img src="assets/images/_smart/face.png" alt=""><span></span>
					  <!-- requried-jsfiles-for owl -->
						<link href="assets/css/owl.carousel.css" rel="stylesheet">
					 <!-- //requried-jsfiles-for owl -->
				     <div id="owl-demo1" class="owl-carousel">
				     <?php
						    foreach($testimonies as $tm){
						    	$content = $tm->content;
						    	$title = $tm->title;
						    ?>
					   <?php
						}
					   ?>
						  <div class="item">
							  <div class="client-say-info">
									<p><?=$content?></p>
									<h4><?=$title?></h4>
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
				  <h3>HUBUNGI KAMI</h3>
				  <span></span><img lsrc="assets/images/_smart/mail.png" alt=""><span></span>
				  <div class="contact-grids">
					  <div class="container">
						  <div class="col-md-4 address">
								<h4>Layanan Tour & Travel Indonesia</h4>
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
					<!-- <iframe src="https://www.google.com/maps/embed/v1/place?q=malang&key=AIzaSyAMTepnwk9iTN_Fd7KGtuzhqwiWlzLalRM" frameborder="0" style="border:0"></iframe> -->
				    <span></span>
					</div>
			  </div>
		</div>
		<?php
		$this->load->view('_smart/footer');
		?>

		<script src="assets/js/jquery.min.js?v12"></script>
		<!--/js-->
		<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>
		<script src="assets/js/wow.min.js?v12"></script>
		<script>
		 new WOW().init();
		</script>

		<script>
			//from http://www.activewidgets.com/javascript.forum.6114.43/dynamic-load-javascript-from-javascript.html
				function $import(src){
				    var scriptElem = document.createElement('script');
					scriptElem.setAttribute('src',src);
					scriptElem.setAttribute('type','text/javascript');
					document.getElementsByTagName('head')[0].appendChild(scriptElem);
				}

				// import with a random query parameter to avoid caching
				function $importWithCache(src){
				  var ms = new Date().getHours().toString();
				  var seed = "?" + ms;
				  
				  $import(src + seed);
				}


			function loadDelayedScripts(){
	        	$importWithCache('assets/js/jquery.cacheimage.js');
	        	$importWithCache('assets/js/move-top.js');
	        	$importWithCache('assets/js/easing.js');
	        	$importWithCache('assets/js/jquery.mmenu.js');
	        	$importWithCache('assets/js/wow.min.js');
	        	$importWithCache('assets/js/responsiveslides.min.js');
	        	$importWithCache('assets/js/jquery.mixitup.min.js');
	        	$importWithCache('assets/js/owl.carousel.js');
		    }
		    function loadScript(){
	        	$import('assets/js/mob-script.js');
		    }

		    var delay = 3; // wait and then load the file
		    var delayS = 5; // wait and then load the file
		    setTimeout("loadDelayedScripts()", delay * 1000);
		    setTimeout("loadScript()", delayS * 1000);
		</script>

	</body>
</html>