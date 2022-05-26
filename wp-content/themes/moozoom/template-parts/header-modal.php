	<!-- modal x-data="{open:false}" -->
	<?php get_template_part( 'template-parts/header', 'modal' ); ?> 
	<!-- END modal -->

	<div x-show="open" class="fixed z-99 inset-0 bg-gray-dark bg-opacity-50 overflow-y-auto h-full w-full">
		<div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
			<video class="cursor-pointer" src="https://moozoomapp.lndo.site/wp-content/uploads/2022/01/teaser_en.mp4"></video>
			<div class="absolute top-1/2 right-1/2 transform translate-x-1/2 -translate-y-1/2">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-24 h-24 text-white cursor-pointer">
					<circle cx="12" cy="12" r="10"></circle>
					<path d="M10 8l6 4-6 4V8z"></path>
				</svg>
			</div>
		</div>
	</div>