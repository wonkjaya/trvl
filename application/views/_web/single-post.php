<!DOCTYPE html>
<html>
	<head>
		<title>KuiRen Tour & Travel</title>
		<!-- JSON-LD markup generated by Google Structured Data Markup Helper. -->
		<link rel="icon" type="image/icon" href="<?=base_url('favicon.ico')?>">
		<script type="application/ld+json">
		{
		  "@context" : "http://schema.org",
		  "@type" : "LocalBusiness",
		  "name" : "KuiRen Tour",
		  "telephone" : [ "(+1) 234 56 789", "(+1) 234 56 780" ],
		  "email" : [ "", "" ],
		  "address" : {
		    "@type" : "PostalAddress",
		    "streetAddress" : "1100 High Street",
		    "addressLocality" : "New York City",
		    "addressCountry" : "USA"
		  }
		}
		</script>
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
			  <div class="container">
			  	<div class="row">
				  	<div class="col-md-9">
						<div class="about-head">
						  <h3>
						  	<?=($tour_destination['tour_destination'])
						  	?$tour_destination['tour_destination']->title:'No title'?>
						  </h3>
						  <span></span>
						  <img lsrc="<?=base_url('assets/images/_web/star.png')?>" alt="">
						  <span style="width: 80%"></span>
						</div>
						<hr>
				  		<?=($tour_destination['tour_destination'])
				  			?$tour_destination['tour_destination']->content
				  			:'No Content';
				  		?>
				  	</div>
				  	<div class="col-md-3">
				  		<div class="about-head text-center">
						  <h3>
						  	Other Posts
						  </h3>
						  <span style="width: 30%"></span>
						  <img lsrc="<?=base_url('assets/images/_web/about-img.png')?>" alt="">
						  <span style="width: 40%"></span>
						</div>
				  	</div>
			  	</div>
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