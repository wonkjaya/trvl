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


// console.log(base_url);

function loadDelayedScripts(base_url){
	$importWithCache(base_url + 'assets/js/jquery.cacheimage.js');
	$importWithCache(base_url + 'assets/js/responsiveslides.min.js');
	$importWithCache(base_url + 'assets/js/jquery.mixitup.min.js');
	$importWithCache(base_url + 'assets/js/owl.carousel.js');
	$importWithCache(base_url + 'assets/js/owl.carousel.js');
	$importWithCache(base_url + 'assets/js/jquery.scrollTo.js');
	$importWithCache(base_url + 'assets/js/jquery.nav.js');
}

function loadScript(base_url){
	$import(base_url + 'assets/js/script.js');
}
