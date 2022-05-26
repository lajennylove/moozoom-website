<?php
/*
 * Hero Component
 *
 * Retrieve the hero component elements wih the post ID by using the get_hero() function.
 * 
 * pill = $heroComponents->pill,
 * content_background = $heroComponents->image, 
 * title = $heroComponents->title, 
 * subtitle = $heroComponents->subtitle, 
 * button_call_to_action = $heroComponents->button, 
 * button_link = $heroComponents->link,
 * button_disclamer = $heroComponents->button_disclaimer 
 * and 
 * background = $heroComponents->background
 * video = $heroComponents->video
 *  
 */
$heroID = get_query_var('heroID'); 
$heroComponents = get_hero( $heroID );
?>
			<div x-data="{open:false}"
				 x-init="$watch('open', (value) => {
							if (value) {
								$refs.video.play()
							} else {
								$refs.video.pause()
							}
						})"
				class="styles_container__Em53G" style="background-image:url('<?php echo $heroComponents->background; ?>')">
				
				<!-- Play Button -->
				<div x-on:click="open = !open" class="relative float-right right-1/4 top-[270px] items-center hidden rounded-full shadow-lg cursor-pointer text-violet-700 lg:block">
					<svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 text-white">
						<circle cx="20" cy="20" r="20" fill="#6500FF"></circle>
						<path d="M27 18.268c1.333.77 1.333 2.694 0 3.464l-9 5.196c-1.333.77-3-.192-3-1.732V14.804c0-1.54 1.667-2.502 3-1.732l9 5.196z" fill="#fff"></path>
					</svg>
				</div>
				<!-- END Play Button -->

				<!-- Hero Hero Desk Version -->
				<div class="flex-col items-end justify-center hidden w-1/2 h-full pt-32 pb-20 pl-4 text-white lg:flex pr-[10rem]" style="background-image:url('<?php print_r($heroComponents->content_background); ?>');background-size:cover;background-repeat:no-repeat;background-position:center right">
					<div class="max-w-[598px]">
						<h4 class="px-4 py-1 mb-4 text-sm font-semibold uppercase rounded-full bg-purple-100 text-violet-700 w-max"><?php echo $heroComponents->pill; ?></h4>
						<h1 class="mb-4 text-5xl leading-16 font-medium"><?php echo $heroComponents->title; ?></h1>
						<p class="pr-2 font-medium leading-8 mb-7 text-[17px]"><?php echo $heroComponents->subtitle; ?></p>
						<div class="flex items-center">
							<button type="submit" id="getStartedNowDesktopRegister" class="py-2 lg:pr-8 mb-4 font-normal text-left rounded-lg text-md lg:mr-6 sm:mb-0 whitespace-nowrap">
								<a href="<?php echo (ICL_LANGUAGE_CODE == 'en' ? get_option('option_1') : get_option('option_2') );?>try-for-free" class="px-4 py-2 my-2 font-bold text-black rounded-full bg-[rgb(253,185,14)] w-min"><?php echo $heroComponents->button_call_to_action; ?></a>
							</button>
							<p class="font-normal text-indigo-50"><?php echo $heroComponents->button_disclaimer; ?></p>
						</div>
					</div>					
				</div>
				<!-- END Hero Desk Version -->

				<!-- Hero Mobile Version -->
				<div class="text-white lg:hidden pt-[14rem] md:pt-[24rem]">
					<?php get_template_part( 'template-parts/header', 'spin' ); ?>
					<div class="py-14 px-4 styles_mobileBG__3ufYP md:text-center" style="background-image:url('<?php print_r($heroComponents->mobile_background); ?>'); background-repeat: no-repeat; background-size: cover;background-position: top right;">
						<h4 class="px-4 py-1 mb-4 text-sm uppercase rounded-full bg-purple-100 text-violet-700 w-max md:mx-auto">
							<?php echo $heroComponents->pill; ?>
						</h4>
						<h1 class="mb-4 text-xl md:text-2xl">
							<?php echo $heroComponents->title; ?>
						</h1>
						<h2 class="mx-auto mb-8 font-normal text-md md:text-lg md:max-w-[520px]">
							<?php echo $heroComponents->subtitle; ?>
						</h2>
						<div class="flex items-center justify-between mx-auto w-max">
							<button type="submit" id="getStartedNowMobileRegister" class="py-2 lg:pr-8 mb-4 font-normal text-center rounded-lg text-md lg:mr-6 sm:mb-0 whitespace-nowrap">
							<a href="<?php echo (ICL_LANGUAGE_CODE == 'en' ? get_option('option_1') : get_option('option_2') );?>register" class="px-4 py-2 font-bold text-black rounded-full bg-[rgb(253,185,14)] w-min mx-auto">
								<?php echo $heroComponents->button_call_to_action; ?>
							</a>
							<p class="mt-2 text-base font-medium text-indigo-50"><?php echo $heroComponents->button_disclaimer; ?></p>
							</button>
						</div>
					</div>
				</div>
				<!-- END Hero Mobile Version -->
				
				<!-- Hero Video Modal -->
				<div x-show="open" class="min-h-screen w-screen fixed top-0 left-0 bg-black z-[200] bg-opacity-50 flex justify-center overflow-auto items-center z-99">
					<svg x-on:click="open = !open" viewbox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 w-12 h-12 z-[220] mt-6 mr-6 text-white cursor-pointer">
						<path d="M16.333 5.667L5.667 16.333M5.667 5.667l10.666 10.666" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
					</svg>
					<div class="flex flex-col items-center justify-center w-screen h-screen md:w-[80%] lg:w-[65%]">
						<div class="relative w-auto h-auto">
							<video x-ref="video" class="cursor-pointer">
								<source src="<?= $heroComponents->video;?>" type="video/mp4">
								Your browser does not support the video tag.
							</video>
						</div>
					</div>
				</div>
				<!-- END Hero Video Modal -->

			</div>
			


			
