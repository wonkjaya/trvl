<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="Kuiren Tour And Travel">

		<?php
		echo favicon(); // header_helper
		$metas = (isset($metas))?$metas:null;
		generate_metas($metas); // header_helper

		?>

		<title>Tujuan Wisata | KuiRen Tour & Travel</title>
		<!-- JSON-LD markup generated by Google Structured Data Markup Helper. -->
		<?php
			echo google_json_ld(); // header_helper
		?>
		<!-- <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'> -->
		<link href="<?=base_url('assets/css/bootstrap.css?v1')?>" rel='stylesheet' type='text/css'/>
		<link href="<?=base_url('assets/css/web.css?v1.0')?>" rel="stylesheet" type="text/css" media="all"/>
		<link href="<?=base_url('assets/css/style.css?v12')?>" rel="stylesheet" type="text/css" media="all"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> 
			addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
		</script>
		<!--animated-css-->
		<link href="<?=base_url('assets/css/animate.css')?>" rel="stylesheet" type="text/css" media="all">
		<!--/animated-css-->
	</head>
	<body>
	<!--header-->
	<?php
	$this->load->view('_web/header');
	?>
	<!--About-->
	     <div class="about section" id="section-2">
			  <div class="about-head text-center">
				  <h3>TUJUAN WISATA</h3>
				  <span></span><img lsrc="<?=base_url('assets/images/_web/star.png')?>" alt=""><span></span>
			  </div>
			  	<ul id="filters" class="clearfix wow bounceIn" data-wow-delay="0.4s">
					<li><span class="filter active" data-filter="app card icon logo fun">ALL</span></li>
					<li><span class="filter" data-filter="app">Domestic Travel</span></li>
					<li><span class="filter" data-filter="card">Foreign Travel</span></li>
					<li><span class="filter" data-filter="icon">Short Date Tour</span></li>
					<li><span class="filter" data-filter="fun">Long Date Tour</span></li>
			    </ul>
			    <div id="portfoliolist">
			    <style>
			    	.custom-portofolio{
			    		display: inline-block; opacity: 1;
			    	}
			    </style>
						<?php
					if($tour_destinations['tour_destinations']):
					foreach ($tour_destinations['tour_destinations'] as $r) { 
						?>
					<div class="portfolio card mix_all custom-portofolio" data-cat="card">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="tour_destination/<?=$r->slug?>" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     	<img lsrc="assets/images/uploads/post_thumb/<?=$r->thumbnail?>" class="img-responsive" alt=""/>
								<div class="tour-caption" style="text-align:center">
									<span></span>
									<p><?=$r->title?></p>
								</div>
							</a>
						</div>
					</div>
						<?php
					}
					endif;
						?>
						<div class="portfolio card mix_all custom-portofolio" data-cat="card">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="tour_destinations" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
							    <img lsrc="assets/images/uploads/post_thumb/loadmore.jpg" class="img-responsive" alt=""/>
								<div class="tour-caption" style="text-align:center">
									<span></span>
									<p>Lihat Lainnya</p>
								</div>
						    </a>

						</div>
					</div>
				   <div class="clearfix"></div>	
				</div>
		</div>
		<hr>
	<!--/About-->
		<?php
		$this->load->view('_web/footer');
		?>
		<!--js--> 
		<script src="<?=base_url('assets/js/jquery.min.js?v12')?>"></script>
		<!--/js-->
		<script src="<?=base_url('assets/js/jquery-ui.min.js?v12')?>"></script>
		<script src="<?=base_url('assets/js/wow.min.js?v12')?>"></script>
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

			var base_url = "<?=base_url()?>";
			// console.log(base_url);

			function loadDelayedScripts(){
	        	$importWithCache(base_url + 'assets/js/jquery.cacheimage.js');
	        	$importWithCache(base_url + 'assets/js/responsiveslides.min.js');
	        	$importWithCache(base_url + 'assets/js/jquery.mixitup.min.js');
	        	$importWithCache(base_url + 'assets/js/owl.carousel.js');
	        	$importWithCache(base_url + 'assets/js/owl.carousel.js');
	        	$importWithCache(base_url + 'assets/js/jquery.scrollTo.js');
	        	$importWithCache(base_url + 'assets/js/jquery.nav.js');
		    }
		    function loadScript(){
	        	$import(base_url + 'assets/js/script.js');
		    }

		    var delay = 3; // wait and then load the file
		    var delayS = 5; // wait and then load the file
		    setTimeout("loadDelayedScripts()", delay * 1000);
		    setTimeout("loadScript()", delayS * 1000);
		</script>
	</body>
</html>