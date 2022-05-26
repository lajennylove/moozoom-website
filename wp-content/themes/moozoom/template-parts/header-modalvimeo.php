<?php

/**
 * @var array $args
 */

$vimeoID = $args['id'];
?>
	<div x-show="vimeoModal" class="min-h-screen w-screen fixed top-0 left-0 bg-black z-[200] bg-opacity-50 flex justify-center overflow-auto items-center">
		<svg x-on:click="vimeoModal = !vimeoModal" viewbox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 w-12 h-12 z-[220] mt-6 mr-6 text-white cursor-pointer">
			<path d="M16.333 5.667L5.667 16.333M5.667 5.667l10.666 10.666" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
		</svg>
		<div class="flex flex-col items-center justify-center w-screen h-screen md:w-[80%] lg:w-[65%]">
			<div class="relative w-full h-full">
				<iframe @click.away="vimeoModal = !vimeoModal" x-bind:src="vimeoModal ? 'https://player.vimeo.com/video/<?=$vimeoID; ?>?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479&amp;h=b83331c529' : ''" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen="" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Find out what happens to Daniel"></iframe>
			</div>
		</div>
	</div>  