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
		<div class="container">
			<div class="header__menu">
				<a href="/" class="header__logo">
					<img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.svg" alt="logo site" />
				</a>

				<div class="header__right">
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

					</nav>

					<div class="header__social">
						<a href="#">
							<svg width="32" height="32" fill="none" xmlns="http://www.w3.org/2000/svg">
								<circle cx="16" cy="16" r="15.5" fill="#fff" stroke="#fff" />
								<g clip-path="url(#clip0_344_218)">
									<path
										d="M14.68 23.92C10.88 23.24 8 19.96 8 16c0-4.4 3.6-8 8-8s8 3.6 8 8c0 3.96-2.88 7.24-6.68 7.92l-.44-.36h-1.76l-.44.36z"
										fill="#F44920" />
									<path
										d="M19.12 18.24l.36-2.24h-2.12v-1.56c0-.64.24-1.12 1.2-1.12h1.04v-2.04c-.56-.08-1.2-.16-1.76-.16-1.84 0-3.12 1.12-3.12 3.12V16h-2v2.24h2v5.64a7.365 7.365 0 002.64 0v-5.64h1.76z"
										fill="#fff" />
								</g>
								<defs>
									<clipPath id="clip0_344_218">
										<path fill="#fff" transform="translate(8 8)" d="M0 0h16v16H0z" />
									</clipPath>
								</defs>
							</svg>
						</a>
						<a href="#">
							<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
								fill="none">
								<circle cx="16" cy="16" r="15.5" fill="white" stroke="white" />
								<path
									d="M23.3919 12.6867C23.2141 12.0224 22.692 11.5004 22.0278 11.3226C20.8251 11 16 11 16 11C16 11 11.175 11 9.97219 11.3226C9.30794 11.5004 8.78594 12.0224 8.60812 12.6867C8.28552 13.8894 8.28552 16.4004 8.28552 16.4004C8.28552 16.4004 8.28552 18.9114 8.60812 20.1141C8.78594 20.7784 9.30794 21.3004 9.97219 21.4782C11.175 21.8008 16 21.8008 16 21.8008C16 21.8008 20.8251 21.8008 22.0278 21.4782C22.692 21.3004 23.2141 20.7784 23.3919 20.1141C23.7145 18.9114 23.7145 16.4004 23.7145 16.4004C23.7145 16.4004 23.7132 13.8894 23.3919 12.6867Z"
									fill="#F44920" />
								<path d="M14.4556 18.7146L18.464 16.4005L14.4556 14.0864V18.7146Z" fill="white" />
							</svg>
						</a>
						<a href="#">
							<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
								fill="none">
								<circle cx="16" cy="16" r="15.5" fill="white" stroke="white" />
								<path
									d="M11.4167 16.6003L8.27826 15.5902C8.27826 15.5902 7.90318 15.4399 8.02396 15.099C8.04882 15.0287 8.09898 14.9689 8.24901 14.8661C8.94441 14.3873 21.1203 10.0644 21.1203 10.0644C21.1203 10.0644 21.4641 9.95001 21.6669 10.0261C21.717 10.0415 21.7622 10.0697 21.7977 10.1079C21.8331 10.1461 21.8577 10.193 21.8689 10.2437C21.8908 10.3332 21.8999 10.4253 21.8961 10.5173C21.8951 10.5969 21.8854 10.6707 21.878 10.7864C21.8038 11.9683 19.5846 20.7891 19.5846 20.7891C19.5846 20.7891 19.4519 21.3053 18.9761 21.323C18.8592 21.3267 18.7428 21.3072 18.6337 21.2655C18.5246 21.2238 18.4251 21.1608 18.3412 21.0804C17.4077 20.2872 14.1811 18.1453 13.4681 17.6742C13.4521 17.6634 13.4385 17.6493 13.4284 17.6328C13.4183 17.6164 13.4119 17.598 13.4096 17.5789C13.3997 17.5293 13.4543 17.4678 13.4543 17.4678C13.4543 17.4678 19.0726 12.5348 19.2221 12.017C19.2337 11.9769 19.1899 11.9571 19.1312 11.9747C18.7581 12.1103 12.2893 16.1454 11.5753 16.5908C11.5239 16.6061 11.4696 16.6094 11.4167 16.6003Z"
									fill="#F44920" />
							</svg>
						</a>
						<a href="#">
							<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
								fill="none">
								<circle cx="16" cy="16" r="15.5" fill="white" stroke="white" />
								<path
									d="M19.5796 17.0901C19.8576 17.1938 21.3403 17.9201 21.6415 18.07C21.9427 18.2199 22.1454 18.2948 22.2207 18.4216C22.296 18.5484 22.296 19.1479 22.0469 19.8511C21.7921 20.5544 20.5874 21.1942 20.0082 21.2807C19.4869 21.3556 18.8325 21.3902 18.1085 21.1596C17.6683 21.0213 17.1065 20.8368 16.3883 20.5256C13.3592 19.2228 11.3842 16.1908 11.2337 15.9891C11.0831 15.7873 10 14.3636 10 12.8821C10 11.4007 10.7761 10.6744 11.0541 10.3747C11.3321 10.0749 11.6565 10 11.8592 10C12.0619 10 12.2646 10 12.4383 10.0115C12.6237 10.0173 12.8727 9.93659 13.116 10.5246C13.3708 11.124 13.9731 12.6055 14.0484 12.7553C14.1237 12.9052 14.1701 13.0781 14.0716 13.2799C13.9731 13.4816 13.921 13.6084 13.7704 13.7814C13.6198 13.9543 13.4519 14.1733 13.3187 14.3059C13.1681 14.4558 13.0117 14.6172 13.1855 14.9169C13.365 15.2167 13.9674 16.2024 14.8651 16.9978C16.0176 18.0239 16.9907 18.3409 17.2918 18.4908C17.593 18.6407 17.7726 18.6176 17.9463 18.4158C18.1201 18.2199 18.6992 17.5397 18.902 17.2399C19.0989 16.9402 19.3016 16.9921 19.5796 17.0901Z"
									fill="#F44920" />
							</svg>
						</a>
					</div>
				</div>
			</div>
		</div>
	</header>

	<main>
