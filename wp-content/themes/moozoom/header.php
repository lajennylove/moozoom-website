<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Required meta tags -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">

	<!-- Links -->
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!-- Favicons & Apple Icons -->
	<link rel="icon" type="image/png" href="<?=THEME_URI?>/dist/images/icons/icon-16x16.png">
	<link rel="icon" type="image/png" href="<?=THEME_URI?>/dist/images/icons/icon-32x32.png">
	<link rel="apple-touch-startup-image" href="<?=THEME_URI?>/dist/images/icons/icon-192x192.png">
	<link rel="apple-touch-icon" href="<?=THEME_URI?>/dist/images/icons/icon-192x192.png">
	<link rel="apple-touch-icon" sizes="192x192" href="<?=THEME_URI?>/dist/images/icons/icon-192x192.png">
	<link rel="apple-touch-icon" sizes="512x512" href="<?=THEME_URI?>/dist/images/icons/icon-512x512.png">

	<!-- JS -->
	<script src="//unpkg.com/alpinejs" type="text/javascript" defer></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.8.1/lottie.min.js" integrity="sha512-V1YyTKZJrzJNhcKthpNAaohFXBnu5K9j7Qiz6gv1knFuf13TW/3vpgVVhJu9fvbdW8lb5J6czIhD4fWK2iHKXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
	<!-- Title -->
	<title><?php the_title(); ?></title>

	<!-- WP Head -->
	<?php wp_head(); ?>
	<!-- WP Head End -->

	<!-- Language -->
	<?php 
	// Get the current language links for the postID		
	$url = get_the_permalink();
	$wpml_permalink['en'] = apply_filters( 'wpml_permalink', $url , 'en' );
	$wpml_permalink['fr'] = apply_filters( 'wpml_permalink', $url , 'fr' );
	?>
</head>

<body <?php body_class( 'bg-white text-black antialiased' ); ?>>

<?php do_action( 'moozoom_site_before' ); ?>

<div id="page" class="flex flex-col min-h-screen relative">

	<?php do_action( 'moozoom_header' ); ?>

	<!-- Header -->
    <nav class="bg-white sticky top-0 z-50">

		<!-- Navbar container -->
		<div x-data="{ isMobile:false }" class="container px-6 py-4 md:py-3 lg:py-4 mx-auto">
			<div class="lg:flex lg:items-center lg:justify-betwee">
				
				<div class="flex items-center justify-between">

					<!-- Logo -->
					<div class="text-xl font-semibold text-gray-700">
						<a href="<?php bloginfo( 'url' ); ?>" class="flex items-center" title="moozoom" rel="home">
							<?php get_template_part( 'template-parts/header', 'logo' ); ?>
						</a>
					</div>
					<!-- END Logo -->

					<!-- Tablet menu -->
					<div class="flex items-center lg:hidden">
						
						<!-- Free Trial -->
						<div class="py-3 border-r px-6 mr-6 hidden md:block lg:hidden">
							<div class="rounded-full py-2 px-4 text-center bg-yellow-400 cursor-pointer md:block lg:hidden">
								<a href="<?php echo (ICL_LANGUAGE_CODE == 'en' ? get_option('option_1') : get_option('option_2') );?>try-for-free" id="askForDemoDesktop" class="mx-auto text-black font-bold">
									<?php _e('Free Trial', 'wpml_theme'); ?>
								</a>
							</div>
						</div>
						<!-- END Free Trial -->

						<!-- Language tablet -->
						<div class="hidden md:block lg:hidden relative mr-6" x-data="{ open: false }" @mouseleave="open = false">
							<div class="p-4 border border-transparent rounded-md relative z-[90] cursor-pointer hover:border-violet-700 border-blueGray-300" x-bind:class="open ? 'border-violet-700 border' : 'border-blueGray-300'" @mouseover="open = true">
								<?php 
									if ( $url == $wpml_permalink['en'] ) get_template_part( 'template-parts/header', 'lang', array('url' => $wpml_permalink['fr'], 'lang' => 'fr' ) ); 
									else get_template_part( 'template-parts/header', 'lang', array('url' => $wpml_permalink['en'], 'lang' => 'en' ) );
								?>							
							</div>
							<div x-show="open" class="absolute w-full -mt-2 z-[80] z-1" style="display: none;">
								<div class="left-0 pt-2 overflow-hidden bg-white border-b border-l border-r rounded-lg border-blueGray-300">
									<div class="flex flex-col p-4 cursor-pointer hover:bg-purple-100">
										<?php 
											if ( $url == $wpml_permalink['en'] ) get_template_part( 'template-parts/header', 'english', array('url' => $wpml_permalink['en'], 'active' => false ) ); 
											else get_template_part( 'template-parts/header', 'french', array('url' => $wpml_permalink['fr'], 'active' => false ) );
										?>									
									</div>
								</div>
							</div>
						</div>
						<!-- END Language tablet -->

						<!-- Mobile menu button -->
						<button @click="isMobile = !isMobile" type="button" class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400" aria-label="toggle menu">
							<div x-data="{ menuClicked:false }" @click="menuClicked = !menuClicked" :class="menuClicked ? 'open' : '' " class="icon nav-icon">
								<span></span>
								<span></span>
								<span></span>
							</div>
						</button> 
						<!-- END Mobile menu button -->

					</div>
					<!-- END Tablet menu -->

				</div>

				<!-- Mobile Menu open: "block", Menu closed: "hidden" -->
				<div :class="isMobile ? 'show' : 'hidden' " class="flex-1 lg:flex lg:items-center lg:justify-between ">
					
					<!-- Navigation -->
					<?php
					wp_nav_menu( [
						'theme_location' => 'primary',
						'menu_class' => 'flex flex-col -mx-4 lg:flex-row lg:items-center lg:mx-8',
						'container_class' => 'flex-1 lg:flex lg:items-center lg:justify-between',
						'li_class' => 'px-2 py-1 mx-2 mt-4 text-md font-semibold',
					] ); ?>
					<!-- END Navigation -->

					<div class="flex flex-col  mt-4 lg:flex-row">
					
					<!-- Login -->
						<a href="<?php echo (ICL_LANGUAGE_CODE == 'en' ? get_option('option_1') : get_option('option_2') );?>login" class="mt-4 text-md font-semibold">
							<?php _e('Login', 'wpml_theme'); ?>
						</a>
						<!-- END Login -->

						<!-- Demo -->
						<span class="hidden pr-8 mx-8 mt-2 border-r cursor-pointer border-blueGray-300 lg:block">
							<a href="<?php echo (ICL_LANGUAGE_CODE == 'en' ? get_option('option_1') : get_option('option_2') );?>try-for-free" id="askForDemoDesktop" class="block px-4 py-2 text-black font-bold rounded-2xl bg-yellow-400">
								<?php _e('Free Trial', 'wpml_theme'); ?>
							</a>
						</span>
						<!-- END Demo -->

						<!-- Language desk -->
						<div class="w-full py-1 mt-2 lg:hidden">
							<?php 
								if ( $url != $wpml_permalink['en'] ) get_template_part( 'template-parts/header', 'english', array('url' => $wpml_permalink['en'], 'active' => false ) ); 
								else get_template_part( 'template-parts/header', 'french', array('url' => $wpml_permalink['fr'], 'active' => false ) );
							?>
						</div>

						<div class="hidden lg:block relative" x-data="{ open: false }" @mouseleave="open = false">
							<div class="p-4 border border-transparent rounded-md relative z-[90] cursor-pointer hover:border-violet-700 border-blueGray-300" x-bind:class="open ? 'border-violet-700 border' : 'border-blueGray-300'" @mouseover="open = true">
															<?php 
										if ( $url == $wpml_permalink['en'] ) get_template_part( 'template-parts/header', 'english', array('url' => $wpml_permalink['en'], 'active' => true ) ); 
										else get_template_part( 'template-parts/header', 'french', array('url' => $wpml_permalink['fr'], 'active' => true ) );
									?>							
							</div>
							<div x-show="open" class="absolute w-full -mt-2 z-[80] z-1" style="display: none;">
								<div class="left-0 pt-2 overflow-hidden bg-white border-b border-l border-r rounded-lg border-blueGray-300">
									<div class="flex flex-col p-4 cursor-pointer hover:bg-purple-100">
										<?php 
											if ( $url != $wpml_permalink['en'] ) get_template_part( 'template-parts/header', 'english', array('url' => $wpml_permalink['en'], 'active' => false ) ); 
											else get_template_part( 'template-parts/header', 'french', array('url' => $wpml_permalink['fr'], 'active' => false ) );
										?>										
									</div>
								</div>
							</div>
						</div>
						<!-- END Language desk -->

					</div>
				</div>
				<!-- END Mobile Menu -->

			</div>
		</div>
		<!-- END Navbar -->

		<!-- Demo -->
		<div class="w-full py-3 text-center bg-yellow-400 cursor-pointer md:hidden">
			<a href="<?php echo (ICL_LANGUAGE_CODE == 'en' ? get_option('option_1') : get_option('option_2') );?>try-for-free" id="askForDemoDesktop" class="mx-auto text-black font-bold">
				<?php _e('Free Trial', 'wpml_theme'); ?>
			</a>
		</div>
		<!-- END Demo -->

	</nav>
	

	<div id="content" class="site-content flex-grow">
		<?php do_action( 'moozoom_content_start' ); ?>

		<main>
			
			<!-- Hero -->
			<?php
			// Verify that the current page has an active hero section	
			$value = get_field( "hero_selector" );

			if ( $value ) {
				set_query_var( 'heroID', $value->ID );
				get_template_part( 'template-parts/header', 'hero' );
			}
			?>
			<!-- END Hero -->

			<!-- SubHeader -->
			<?php
			// Verify that the current page is using sub header.
			$mzhead['headline'] = get_field('headline', get_the_ID() );
			$mzhead['sub_headline']  = get_field('sub_headline', get_the_ID() );
			if ( is_page_template( 'page-subheader.php' ) )  get_template_part( 'template-parts/header', 'subheader', array('headlines' => $mzhead ) );
			?>
			<!-- END SubHeader -->

