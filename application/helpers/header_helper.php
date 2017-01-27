<?php

function favicon(){
	return '
		<link rel="apple-touch-icon" sizes="57x57" href="favicon.ico">
		<link rel="apple-touch-icon" sizes="60x60" href="favicon.ico">
		<link rel="apple-touch-icon" sizes="72x72" href="favicon.ico">
		<link rel="apple-touch-icon" sizes="76x76" href="favicon.ico">
		<link rel="apple-touch-icon" sizes="114x114" href="favicon.ico">
		<link rel="apple-touch-icon" sizes="120x120" href="favicon.ico">
		<link rel="apple-touch-icon" sizes="144x144" href="favicon.ico">
		<link rel="apple-touch-icon" sizes="152x152" href="favicon.ico">
		<link rel="apple-touch-icon" sizes="180x180" href="favicon.ico">
		<link rel="icon" type="image/png" sizes="192x192" href="favicon.ico">
		<link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">
		<link rel="icon" type="image/png" sizes="96x96" href="favicon.ico">
		<link rel="icon" type="image/png" sizes="16x16" href="favicon.ico">
	';
}

function generate_metas($data= null){
	if(!$data){
		echo default_metas();
	}else{
		print_r($data); // meta url tidak deteksi
		foreach ($data as $m) {
			echo '<meta property="'.$m->meta_property.'" content="'.$m->meta_content.'">';
			if($m->meta_property == "description"){
				echo '<meta property="og:'.$m->meta_property.'" content="'.$m->meta_content.'">';
				echo '<meta name="description" content="'.$m->meta_content.'">';
			}
		}
	}
}

function default_metas(){
	$description = 'Temukan semua tempat wisata favorit anda disini dan kami siap membantu segala kebutuhan anda selama berlibur (Kuiren Tour And Travel Indonesia)...';
	$image = base_url('assets/images/property/site-image.jpg');
	
	return '
		<link rel="canonical" href="'.site_url().'">
		<link rel="alternate" type="application/rss+xml" title="post_title" href="'.site_url('feed').'/">

		<meta property="og:locale" content="id_ID">
		<meta property="og:type" content="article">
		<meta property="og:title" content="Kuiren Tour And Travel Indonesia">
		<meta property="og:description" content="'.$description.'">
		<meta property="og:url" content="'.site_url().'">
		<meta property="og:site_name" content="'.site_url().'">
		<meta property="article:publisher" content="https://www.facebook.com/kuirentour">
		<meta property="article:tag" content="Tour">
		<meta property="article:tag" content="Travel">
		<meta property="article:tag" content="Malang">
		<meta property="article:tag" content="Wisata">
		<meta property="article:tag" content="Terbaik">

		<meta property="article:section" content="Tools">	
		<meta property="og:image" content="'.$image.'">
		<meta property="og:image:width" content="700">
		<meta property="og:image:height" content="350">

		<meta name="description" content="'.$description.'">
		<meta property="description" content="'.$description.'">
		<meta property="language" content="Indonesia">
		<meta property="revisit-after" content="7">
		<meta property="webcrawlers" content="all">
		<meta property="rating" content="general">
		<meta property="spiders" content="all">
		<meta property="robots" content="all">
	';
}

function google_json_ld(){
	return '<script type="application/ld+json">
		{
		  "@context" : "http://schema.org",
		  "@type" : "LocalBusiness",
		  "name" : "KuiRen Tour And Travel",
		  "telephone" : [ "(+62) 234 56 789", "(+62) 234 56 780" ],
		  "email" : [ "admin@kuirentour.com", "cs@kuirentour.com" ],
		  "address" : {
		    "@type" : "65142",
		    "streetAddress" : "Jalan Ikan Gurami Perum Litle Kyoto",
		    "addressLocality" : "MALANG",
		    "addressCountry" : "INDONESIA"
		  }
		}
		</script>';
}

// end of file