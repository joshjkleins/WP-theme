<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Josh's Site</title>
	<?php wp_head(); ?>
</head>
<body class="relative">
	<div class="site-overlay"></div>
	<header class="hundred z-index-1 flex fixed top">
		<div class="inner-header flex space-between margin-auto hundred align-items-center">
			<div class="logo">
				<a class="flex align-items-center justify-center" href="/"><img width="250" height="55" alt="site logo" src="<?php echo get_template_directory_uri() . '/assets/images/logo-black.png'; ?>"></a>
			</div>
			<div class="nav-items full-height">
				<ul class="no-list flex full-height sm-hide">
					<li><a class="flex align-items-center full-height uppercase" href="/our-process">Our Process</a></li>
					<li><a class="flex align-items-center full-height uppercase" href="/faq">FAQs</a></li>
					<li><a class="flex align-items-center full-height uppercase" href="/contact">Contact</a></li>
				</ul>
				<div class="hamburger-menu hide sm-flex">
					<div class="inner pointer">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="mobile-menu absolute">
		<div class="top flex align-items-center justify-center flex-column">
			<div class="mobile-menu-title">Websites By Josh</div>
		</div>
		<ul class="no-list flex full-height flex-column">
			<li>
				<a class="flex align-items-center full-height uppercase" href="/">Home</a>
			</li>
			<li>
				<a class="flex align-items-center full-height uppercase" href="/our-process">Our Process</a>
			</li>
			<li>
				<a class="flex align-items-center full-height uppercase" href="/faq">FAQs</a>
			</li>
			<li>
				<a class="flex align-items-center full-height uppercase" href="/contact">Contact</a>
			</li>
		</ul>
		<div class="close-mobile absolute pointer"></div>
	</div>
	<main>
