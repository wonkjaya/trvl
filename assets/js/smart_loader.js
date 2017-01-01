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
	$importWithCache(base_url + 'assets/js/move-top.js');
	$importWithCache(base_url + 'assets/js/easing.js');
	$importWithCache(base_url + 'assets/js/jquery.mmenu.js');
	$importWithCache(base_url + 'assets/js/responsiveslides.min.js');
	$importWithCache(base_url + 'assets/js/jquery.mixitup.min.js');
	$importWithCache(base_url + 'assets/js/owl.carousel.js');
}

function loadScript(base_url){
	$import(base_url + 'assets/js/smart_scripts.js');
}
