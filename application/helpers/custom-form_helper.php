<?php

function meta_options($default='', $all = null){
	$property = [
		'og:locale'=>'og:locale',
		'og:type'=>'og:type',
		// 'og:title'=>'og:title',
		'og:description'=>'og:description',
		// 'og:url'=>'og:url',
		// 'og:site_name'=>'og:site_name',
		'og:image'=>'og:image',
		'og:image:width'=>'og:image:width',
		'og:image:height'=>'og:image:height',
		'article:publisher'=>'article:publisher',
		'article:tag'=>'article:tag',
		'article:section'=>'article:section',
		'description'=>'description',
		'language'=>'language',
		'revisit-after'=>'revisit-after',
		'webcrawlers'=>'webcrawlers',
		'rating'=>'rating',
		'spiders'=>'spiders',
		'robots'=>'robots',
	];
	$rel = [
		'canonical'=>'canonical',
		'alternate'=>'alternate',
	];
	$name = [
		'description'=>'description',
	];
	if($all){
		$all = array_merge($property, $rel, $name);
		return $all;
	}
	
	return $property;
}

// end of file