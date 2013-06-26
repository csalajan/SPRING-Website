<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>ADMIN Client Profile - Spring Creative Group</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/client-style.css">


	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo base_url(); ?>images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>images/apple-touch-icon-114x114.png">

	<!-- Web Fonts
	================================================== -->
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css'>

</head>
<body>

	<!-- Primary Page Layout
	================================================== -->

<div class="row top">
	<div class="container top-space bottom-space">
		<section class="sixteen columns">
			<header>
				<nav>
					<?php echo anchor('home', '<img src="'.base_url().'images/spring215-logo-white.png">', array('class' => 'four columns')); ?>
				</nav>
				<h1 class="six columns offset-by-one alpha">ADMIN: CLIENTS</h1>
				<div class="six columns omega login">
					<span><?php echo $name; ?>:</span>&nbsp;&nbsp;
					<?php echo anchor('client/logout', 'log out'); ?>
				</div>
			</header>
		</section>
	</div>
</div>