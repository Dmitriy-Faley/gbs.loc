<!doctype html>
<html lang="ru-RU">

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo wp_get_document_title(); ?></title>
	<?php wp_head(); ?>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&display=swap"
		rel="stylesheet">

	<!-- Link Swiper's CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

	<!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
</head>

<body <?php body_class(); ?>>

	<header class="header" id="header">
		<div class="header__bg"
			style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/bg_home.png');"
			data-bg="<?php echo get_template_directory_uri() ?>/assets/img/bg_home.png"
			data-bg-webp="<?php echo get_template_directory_uri() ?>/assets/img/bg_home.png"></div>
		<div class="container">
			<div class="header__menu">
				<a href="/" class="header__logo">
					<img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.svg" alt="logo site" />
				</a>

				<nav class="main-header-menu">
					<?php
								wp_nav_menu( [
								'menu'            => '', 
								'container'       => false, 
								'container_class' => '', 
								'container_id'    => '',
								'menu_class'      => 'main-header-menu', 
								'menu_id'         => '',
								'echo'            => true,
								'theme_location'  => 'button_menu',
								'fallback_cb'     => 'wp_page_menu',
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '<ul id="%1$s" class="header-menu__ul">%3$s</ul>',
								'depth'           => 0,
								'walker'          => '',
								] );?>

					<span class="closeMenu"></span>
				</nav>

				<div class="header__phone">
					<a href="tel:<?php the_field('telefon', 'option') ?>"><?php the_field('telefon', 'option') ?></a>
				</div>
			</div>
		</div>
	</header>


	<main>