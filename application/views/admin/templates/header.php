<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>KuiRen Admin</title>
    <link rel="icon" type="image/icon" href="favicon.ico">
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="<?=base_url('assets/css/bootstrap.css')?>" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="<?=base_url('assets/css/font-awesome.css')?>" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="<?=base_url('assets/css/admin/style.css')?>" rel="stylesheet" />
    <!-- GOOGLE FONT CSS -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css' /> -->

</head>
<body>
    <!--LOGO SECTION END-->
     <section class="sec-menu" >
        <div class="container">
            <div class="row">
              <div class="col-md-12">
                <span class="menu-open-icon">
                  <i class="fa fa-bars pull-left fa-2x b-clr"></i>
                </span>
                <i class="pull-right"> KuiRen Tour & Travel </i>   
              </div>
            </div>
        </div>
    </section>
       <div id="side-menu"  >

        <ul>
            <li style="border-bottom:0px;">
              <a href="#" title="close"> 
                <i class="fa fa-close fa-2x menu-close-icon b-clr"></i>
              </a>
            </li>
            <li>
              <a href="<?=site_url('admin')?>" title="Dashboard"> 
                <i class="fa fa-home fa-2x "></i> 
              </a>
            </li>
            <li>
              <a href="<?=site_url('admin/blogoffers')?>" title="Blog Penawaran">
                <i class="fa fa-paint-brush fa-2x "></i>
              </a>
            </li>
            <li>
              <a href="<?=site_url('admin/products')?>" title="Data Produk">
                <i class="fa fa-bus fa-2x "></i>
              </a>
            </li> 
            <li>
              <a href="<?=site_url('admin/emailmessage')?>" title="Email">
                <i class="fa fa-envelope fa-2x "></i>
              </a>
            </li> 
            <li>
              <a href="<?=site_url('admin/invoice')?>" title="Invoice">
                <i class="fa fa-usd fa-2x "></i>
              </a>
            </li>            
        </ul>
           
    </div>