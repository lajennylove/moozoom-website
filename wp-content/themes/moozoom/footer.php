
</main>

<?php do_action( 'moozoom_content_end' ); ?>

</div>

<?php do_action( 'moozoom_content_after' ); ?>

<footer id="colophon"  role="contentinfo">

	<!-- Footer menus -->
	<div class="py-4 px-8 w-full h-auto bg-white">
		<div class="bg-white pt-8 flex flex-col lg:flex">
			<div class="py-5 mx-auto md:grid grid-cols-4-foot gap-7 w-full max-w-7xl ">
				
				<!-- company menu -->
				<div class="pb-4 md:px-1 flex flex-col" x-data="{ companyMenu:false }">
					<span class="flex justify-between border-b border-slate-300 md:border-transparent pb-2 mb-2 md:mb-0 cursor-pointer py-1 uppercase text-[#742DE0] font-semibold md:text-[20px] " @click="companyMenu = !companyMenu">
					<?php _e('Company', 'wpml_theme'); ?>
						<svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 transition-all false md:hidden" :class="companyMenu ? 'rotate-180' : '' ">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M5.293 8.293a1 1 0 011.414 0L12 13.586l5.293-5.293a1 1 0 111.414 1.414l-6 6a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414z" fill="currentColor"></path>
						</svg>
					</span>
					<div class="hidden md:block" >
					<?php 	$args = array(
										'theme_location'=> 'tertiary',
										'menu_class' => '',
										'container_class' => '',
										'li_class' => 'sm:pt-6 md:py-1 font-normal md:font-medium text-base text-[#374151]',
										);
							wp_nav_menu( $args ); ?>
					</div>
					<div class="md:hidden" :class="companyMenu ? 'max-h-fit' : 'invisible max-h-0' ">
					<?php 	$args = array(
										'theme_location'=> 'tertiary',
										'menu_class' => '',
										'container_class' => '',
										'li_class' => 'sm:pt-6 md:py-1 font-normal md:font-medium text-base text-[#374151]',
										);
							wp_nav_menu( $args ); ?>
					</div>
				</div>
				<!-- End company menu -->

				<!--  privacy menu -->
				<div class="pb-4 md:px-1 flex flex-col" x-data="{ privacyMenu:false }">
					<span class="flex justify-between border-b border-slate-300 md:border-transparent pb-2 mb-2 md:mb-0 cursor-pointer py-1 uppercase text-[#742DE0] font-semibold md:text-[20px]" @click="privacyMenu = !privacyMenu">
					<?php _e('Privacy', 'wpml_theme'); ?>
						<svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 transition-all false md:hidden" :class="privacyMenu ? 'rotate-180' : '' ">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M5.293 8.293a1 1 0 011.414 0L12 13.586l5.293-5.293a1 1 0 111.414 1.414l-6 6a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414z" fill="currentColor"></path>
						</svg>
					</span>
					<div class="hidden md:block" >
					<?php 	$args = array(
										'theme_location'=> 'secondary',
										'menu_class' => '',
										'container_class' => '',
										'li_class' => 'sm:pt-6 md:py-1 font-normal md:font-medium text-base text-[#374151]',
										);
							wp_nav_menu( $args ); ?>
					</div>
					<div class="md:hidden" :class="privacyMenu ? 'max-h-fit' : 'invisible max-h-0' ">
					<?php 	$args = array(
										'theme_location'=> 'secondary',
										'menu_class' => '',
										'container_class' => '',
										'li_class' => 'sm:pt-6 md:py-1 font-normal md:font-medium text-base text-[#374151]',
										);
							wp_nav_menu( $args ); ?>
					</div>
				</div>
				<!-- End privacy menu -->

				<!-- <div></div> -->
		
				<div class="w-full text-black flex flex-col lg:items-start items-center justify-between">

					<!-- footer logo -->
					<a href="<?php bloginfo( 'url' ); ?>" class="ml-[-8px] mb-4 lg:mb-0">
						<?php get_template_part( 'template-parts/header', 'logo' ); ?>
					</a>
					<!-- End footer logo -->

					<div class="flex w-full flex-col-reverse lg:items-start items-center"><span class="lg:mt-3 lg:mb-0 mb-[24px] font-normal text-[#879BB4] items-center">© 2022 moozoom. <?php _e('All rights reserved', 'wpml_theme'); ?></span>
						<div class="flex items-center gap-x-2">

							<!-- footer switch lang -->
							<?php 
								// Get the current language links for the postID		
								$url = get_the_permalink();
								$wpml_permalink['en'] = apply_filters( 'wpml_permalink', $url , 'en' );
								$wpml_permalink['fr'] = apply_filters( 'wpml_permalink', $url , 'fr' );
								?>
							<div class="w-full py-1 mt-2 md:hidden">
								<?php 
									if ( $url == $wpml_permalink['en'] ) get_template_part( 'template-parts/header', 'lang', array('url' => $wpml_permalink['fr'], 'lang' => 'fr' ) ); 
									else get_template_part( 'template-parts/header', 'lang', array('url' => $wpml_permalink['en'], 'lang' => 'en' ) );
								?>
							</div>
							<div class="hidden md:block relative" x-data="{ open: false }" @mouseleave="open = false">
								<div class="p-4 border border-transparent rounded-md relative z-[90] cursor-pointer hover:border-violet-700"
									x-bind:class="open ? 'border-violet-700 border' : 'border-blueGray-300'"
									@mouseover="open = true">
									<?php 
										if ( $url == $wpml_permalink['en'] ) get_template_part( 'template-parts/header', 'english', array('url' => $wpml_permalink['en'], 'active' => true ) ); 
										else get_template_part( 'template-parts/header', 'french', array('url' => $wpml_permalink['fr'], 'active' => true ) );
									?>
								</div>
								<div x-cloak x-show="open" class="absolute w-full -mt-2 z-[80] z-1">
									<div class="left-0 pt-2 overflow-hidden bg-white border-b border-l border-r rounded-lg border-blueGray-300">
										<a>
											<div class="flex flex-col p-4 cursor-pointer hover:bg-purple-100">
												<?php 
													if ( $url != $wpml_permalink['en'] ) get_template_part( 'template-parts/header', 'english', array('url' => $wpml_permalink['en'], 'active' => false ) ); 
													else get_template_part( 'template-parts/header', 'french', array('url' => $wpml_permalink['fr'], 'active' => false ) );
												?>
											</div>
										</a>
									</div>
								</div>
							</div>
							<!-- End footer switch lang -->

						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- End footer menus -->


		<div class="flex w-full h-[88px] bg-[#F1F5FF] px-16 text-black undefined">
			<div class="md:mx-auto flex gap-x-5 w-full md:max-w-7xl items-center justify-center md:justify-start">
				<a target="_blank" href="https://www.facebook.com/moozoomapp">
					<svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M24 12c0-6.627-5.373-12-12-12S0 5.373 0 12c0 5.99 4.388 10.954 10.125 11.854V15.47H7.078V12h3.047V9.356c0-3.007 1.792-4.668 4.533-4.668 1.312 0 2.686.234 2.686.234v2.953H15.83c-1.491 0-1.956.925-1.956 1.875V12h3.328l-.532 3.469h-2.796v8.385C19.612 22.954 24 17.99 24 12z" fill="#4A4554"></path>
					</svg>
				</a>
				<a target="_blank" href="https://www.youtube.com/channel/UCdg8ShZN56O_qtOlUg9POiw">
					<svg width="24" height="18" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M23.76 4.2s-.233-1.655-.955-2.381C21.89.863 20.869.858 20.4.802 17.044.558 12.005.558 12.005.558h-.01S6.956.558 3.6.802c-.469.056-1.49.06-2.405 1.017C.473 2.545.244 4.2.244 4.2S0 6.145 0 8.086v1.819c0 1.94.24 3.886.24 3.886s.233 1.654.95 2.38c.915.957 2.115.924 2.65 1.027 1.92.183 8.16.24 8.16.24s5.044-.01 8.4-.249c.469-.056 1.49-.06 2.405-1.017.722-.727.956-2.381.956-2.381S24 11.85 24 9.905V8.086c0-1.94-.24-3.886-.24-3.886zM9.52 12.113V5.367l6.483 3.385-6.483 3.36z" fill="#4A4554"></path>
					</svg>
				</a>
				<a target="_blank" href="https://www.linkedin.com/company/42904062/admin/">
					<svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M22.223 0H1.772C.792 0 0 .773 0 1.73v20.536C0 23.222.792 24 1.772 24h20.451c.98 0 1.777-.778 1.777-1.73V1.73C24 .773 23.203 0 22.223 0zM7.12 20.452H3.558V8.995H7.12v11.457zM5.34 7.434a2.064 2.064 0 110-4.125 2.063 2.063 0 010 4.125zm15.112 13.018h-3.558v-5.57c0-1.326-.024-3.037-1.852-3.037-1.851 0-2.133 1.449-2.133 2.944v5.663H9.356V8.995h3.413v1.566h.047c.473-.9 1.636-1.852 3.365-1.852 3.605 0 4.27 2.372 4.27 5.457v6.286z" fill="#4A4554"></path>
					</svg>
				</a>
				<a target="_blank" href="https://www.instagram.com/moozoomapp_en">
					<svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M12 2.16c3.206 0 3.586.015 4.847.071 1.172.052 1.805.249 2.226.413a3.71 3.71 0 011.379.895c.421.422.68.82.895 1.378.164.422.36 1.06.412 2.227.057 1.265.07 1.645.07 4.847 0 3.206-.013 3.586-.07 4.846-.051 1.172-.248 1.805-.412 2.227a3.71 3.71 0 01-.895 1.378 3.69 3.69 0 01-1.379.895c-.421.165-1.059.361-2.226.413-1.266.056-1.645.07-4.847.07-3.206 0-3.586-.014-4.847-.07-1.172-.052-1.805-.248-2.226-.413a3.71 3.71 0 01-1.379-.895 3.691 3.691 0 01-.895-1.378c-.164-.422-.36-1.06-.412-2.227-.057-1.265-.07-1.645-.07-4.846 0-3.207.013-3.586.07-4.847.051-1.172.248-1.805.412-2.227.216-.558.478-.96.895-1.378.422-.422.82-.68 1.379-.895.421-.164 1.059-.361 2.226-.413 1.261-.056 1.64-.07 4.847-.07zM12 0C8.742 0 8.334.014 7.055.07 5.78.127 4.903.333 4.144.628a5.857 5.857 0 00-2.128 1.388A5.88 5.88 0 00.628 4.139C.333 4.903.127 5.775.07 7.05.014 8.334 0 8.742 0 12s.014 3.666.07 4.945c.057 1.275.263 2.152.558 2.911.31.792.717 1.463 1.388 2.128a5.866 5.866 0 002.123 1.383c.764.296 1.636.502 2.911.558 1.28.056 1.688.07 4.945.07 3.258 0 3.666-.014 4.946-.07 1.275-.056 2.151-.262 2.91-.558a5.866 5.866 0 002.124-1.383 5.866 5.866 0 001.383-2.123c.295-.764.501-1.636.558-2.911.056-1.28.07-1.688.07-4.945 0-3.258-.014-3.666-.07-4.946-.057-1.275-.263-2.151-.558-2.91a5.62 5.62 0 00-1.374-2.133A5.866 5.866 0 0019.861.633C19.097.338 18.225.13 16.95.075 15.666.015 15.258 0 12 0z" fill="#4A4554"></path>
						<path d="M12 5.836A6.166 6.166 0 005.836 12 6.166 6.166 0 0012 18.164 6.166 6.166 0 0018.164 12 6.166 6.166 0 0012 5.836zm0 10.162A3.999 3.999 0 1112.001 8 3.999 3.999 0 0112 15.998zM19.847 5.592a1.44 1.44 0 11-2.879 0 1.44 1.44 0 012.879 0z" fill="#4A4554"></path>
					</svg>
				</a>
				<a target="_blank" href="https://twitter.com/moozoomapp_en">
					<svg width="24" height="20" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M7.55 19.75c9.055 0 14.008-7.503 14.008-14.008 0-.211-.004-.427-.014-.638A9.999 9.999 0 0024 2.555c-.898.4-1.85.66-2.826.774A4.95 4.95 0 0023.339.606 9.897 9.897 0 0120.213 1.8a4.93 4.93 0 00-8.394 4.49A13.985 13.985 0 011.673 1.15a4.93 4.93 0 001.523 6.57 4.93 4.93 0 01-2.23-.614v.06a4.922 4.922 0 003.95 4.829 4.893 4.893 0 01-2.221.084 4.933 4.933 0 004.597 3.422A9.875 9.875 0 010 17.538a13.969 13.969 0 007.55 2.212z" fill="#4A4554"></path>
					</svg>
				</a>
			</div>
		</div>
	</div>
</footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
