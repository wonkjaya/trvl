 <?php
	 //echo $this->uri->segment(2);exit;
	 ?>
 <div id="page">
	 <div id="header">
		 <a class="navicon" href="#menu-left">
		 	
		 </a>
		<div class="logo head-logo logo-md">
			<a href="<?=site_url()?>" style="margin-left: 10%">
				<img src="<?=base_url('assets/images/_smart/logo.gif');?>" id="section-1" class="img-responsive head-image" alt="kuiren tour and travel"/>
				<span class="site-title">KuiRen Tour</span>
			</a>
		</div>
	 </div>
	 <nav id="menu-left">
	 <?php
	 if(!isset($scroll)){
	 	$link = site_url();
	 }
	 ?>
		 <ul>
		     <li><a href="<?=(isset($link))?$link:'#home';?>">Home</a></li>
			 <li><a href="<?=(isset($link))?$link:'#about';?>" class="<?=(!isset($link))?'scroll':''?>">About</a></li>
			 <li><a href="<?=(isset($link))?$link:'#toptours';?>" class="<?=(!isset($link))?'scroll':''?>">Top Tours</a></li>
			 <li><a href="<?=(isset($link))?$link:'#guides';?>" class="<?=(!isset($link))?'scroll':''?>">Guides</a></li>
			 <li><a href="<?=(isset($link))?$link:'#contact';?>" class="<?=(!isset($link))?'scroll':''?>">Contact</a></li>
			 <div class="clear"> </div>
		 </ul>
	 </nav>
 </div>	