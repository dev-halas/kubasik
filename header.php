<!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php if(is_search()):?>
			<meta name="robots" content="noindex, nofollow" />
		<?php endif;?>
		
		<?php wp_head() ?>
		<title><?php echo bloginfo('name'); echo ' - '; bloginfo('description');?></title> 

		<meta charset="<?php bloginfo('charset')?>" />

		<!-- Stylesheets-->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700&Open+Sans:wght@500&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo THEME_URL ?>public/main.css">
	</head>
	

	<body <?php body_class()?>>
		<header class="header">
			<div class="headerInner">
				<div class="hamburger">
					<div class="toggle">
						<div class="bars" id="bar1"></div>
						<div class="bars" id="bar2"></div>
						<div class="bars" id="bar3"></div>
					</div>
				</div>
				<nav class="headerNav">
					<?php wp_nav_menu(['theme_location' => 'main_nav']); ?>
				</nav>
				<a href="<?php echo esc_url(home_url('/')) ?>" class="headerLogo">
					<img src="<?php echo THEME_URL; ?>_dev/img/logo.svg" />
				</a>
				<div class="headerLang">
					PL
				</div>
			</div>
		</header