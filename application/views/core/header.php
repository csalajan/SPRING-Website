
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/main.css">


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
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css'>

</head>
<body>



	<!-- Primary Page Layout
	================================================== -->

	<!-- Delete everything in this .container and get started on your own site! -->
<div class="row top">
	<header class="container">
		<section class="sixteen columns alpha omega">
			<nav class="four columns alpha">
				<?php echo anchor('home', '<img class="logo" src="' . base_url() . 'images/spring215-logo.png">', array('class' => 'four columns')); ?>
			</nav>
			<nav class="social-links twelve columns omega">
				<a class="inactive" href="http://www.facebook.com"><i class="foundicon-facebook"></i></a>
				<a class="inactive" href="http://www.twitter.com"><i class="foundicon-twitter"></i></a>
				<a class="inactive" href="http://www.linkedin.com"><i class="foundicon-linkedin"></i></a>
			</nav>
			<nav class="client-login twelve columns offset-by-ten omega">
				<?php echo anchor('client', 'client login', array('class' => 'two columns alpha omega')); ?>
			</nav>
			<nav class="global-nav twelve columns offset-by-two omega">
                                <?php echo anchor('home/services', 'services', array('class' => 'two columns alpha')); ?>
                                <?php echo anchor('home/about', 'about', array('class' => 'two columns')); ?>
                                <?php echo anchor('home/contact', 'contact', array('class' => 'two columns')); ?>
                                <?php echo anchor('home/team', 'team', array('class' => 'two columns')); ?>
                                <?php echo anchor('home/blog', 'blog', array('class' => 'two columns omega')); ?>
				<!--
                                <a class="two columns alpha" href="services.html">services</a>
				<a class="two columns" href="about.html">about</a>
				<a class="two columns" href="contact.html">contact</a>
				<a class="two columns" href="team.html">team</a>
				<a class="two columns omega" href="subpage.html">blog</a> -->
			</nav>
		</section>
	</header>
</div>