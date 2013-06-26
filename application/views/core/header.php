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
	<meta name="description" content="<?php echo $description; ?>">
	<meta name="author" content="Design: Christopher Collins - chris@spring215.com, Development: Craig Salajan - craig@spring215.com ">

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
	<link rel="apple-touch-icon" href="<?php echo base_url(); ?>images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>images/apple-touch-icon-114x114.png">
	<link rel="icon" type="image/png" href="http://spring215.com/images/favicon.ico">
	
	<!-- Web Fonts
	================================================== -->
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Josefin+Slab:400,600' rel='stylesheet' type='text/css'>

</head>
<body>



	<!-- Primary Page Layout
	================================================== -->

<div class="row top">
	<header class="container">
		<section class="sixteen columns alpha omega">
			<nav class="four columns alpha">
				<?php echo anchor('home', '<img class="logo" src="'.base_url().'images/spring215-logo.png" alt="SPRING Creative Group\'s logo on the www.spring215.com website">', array('class' => 'four columns', 'title' => 'SPRING Creative Group\'s Home Page')); ?>
			</nav>
			<nav class="social-links twelve columns omega">
				<a class="inactive" href="https://www.facebook.com/pages/Spring-Creative-Group/637144592980321" title="SPRING Creative Group's Facebook page"><i class="foundicon-facebook"></i></a>
				<a class="inactive" href="https://twitter.com/Spring_CG" title="SPRING Creative Group's Twitter page"><i class="foundicon-twitter"></i></a>
				<a class="inactive" href="http://www.linkedin.com/company/3180921" title="SPRING Creative Group's LinkedIn page"><i class="foundicon-linkedin"></i></a>
			</nav>
			<nav class="client-login twelve columns offset-by-nine omega">
				<?php echo anchor('client', 'client login', array('class' => 'four columns alpha omega', 'title' => 'Login to view client files')); ?>
			</nav>
			<nav class="global-nav twelve columns offset-by-two omega">
				<?php echo anchor('home/services','services', array('class' => 'two columns alpha', 'title' => 'Services provided by the SPRING Creative Group')); ?>
				<?php echo anchor('home/about','about', array('class' => 'two columns', 'title' => 'Information about the SPRING Creative Group')); ?>
				<?php echo anchor('home/contact','contact', array('class' => 'two columns', 'title' => 'Contact information for teh SPRING Creative Group')); ?>
				<?php echo anchor('home/team','team', array('class' => 'two columns', 'title' => 'The SPRING Creative Group Team Members')); ?>
				<?php echo anchor('home/blog','blog', array('class' => 'two columns omega', 'title' => 'SPRING Creative Group\'s Blog')); ?>
			</nav>
		</section>
	</header>
</div>