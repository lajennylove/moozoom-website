<?php



// Check rows exists.
if( have_rows( 'tutorial' ) ): 

    // Loop through rows.
    while( have_rows( 'tutorial' ) ): the_row();  
    
        $image = get_sub_field('tutorial_image');
       $unique = time().uniqid();
    ?>
    <div x-data="{vi_<?=$unique;?>:false}" class="flex flex-col flex-shrink-0 mr-8 overflow-hidden bg-white rounded-xl w-full lg:w-96 snapscroll-child">
		<div x-on:click="vi_<?=$unique;?> = !vi_<?=$unique;?>" class="relative cursor-pointer">
            <img src="<?php echo $image['url']; ?>" alt="" class="w-full">
            <span class="uppercase absolute top-0 left-0 bg-purple-700 px-2 py-1 text-xs text-white rounded-br-xl block"><?=get_sub_field('tutorial_label');?></span>
        </div>
		<div class="flex flex-col flex-grow p-6">
			<h5 class="mb-2 text-lg font-semibold"><?=get_sub_field('tutorial_number');?></h5>
			<p class="flex-grow mb-4 font-normal"><?=get_sub_field('tutorial_description');?></p>
            <span x-on:click="vi_<?=$unique;?> = !vi_<?=$unique;?>" class="flex cursor-pointer font-semibold text-purple-700">
                <?php _e('See the video', 'wpml_theme'); ?>
                <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg" class="ml-2">
                    <path d="M16.17 13l-3.58 3.59L14 18l6-6-6-6-1.41 1.41L16.17 11H4v2h12.17z" fill="currentColor"></path>
                </svg>
            </span>
        </div>
        
        <!-- embed video -->
        <div x-show="vi_<?=$unique;?>" class="min-h-screen w-screen fixed top-0 left-0 bg-black z-[200] bg-opacity-50 flex justify-center overflow-auto items-center">
            <svg x-on:click="vi_<?=$unique;?> = !vi_<?=$unique;?>" viewbox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 w-12 h-12 z-[220] mt-6 mr-6 text-white cursor-pointer">
                <path d="M16.333 5.667L5.667 16.333M5.667 5.667l10.666 10.666" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
            <div class="flex flex-col items-center justify-center w-screen h-screen md:w-[80%] lg:w-[65%]">
                <div class="relative w-full h-full">
                    <iframe @click.away="vi_<?=$unique;?> = !vi_<?=$unique;?>"  x-bind:src="vi_<?=$unique;?> ? 'https://player.vimeo.com/video/<?=get_sub_field('tutorial_video');?>?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479&amp;h=b83331c529' : ''" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen="" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Find out what happens to Daniel"></iframe>
                </div>
            </div>
        </div> 
        <!-- END embed video -->
	</div>
    <?php
    // End loop.
    endwhile;
// No value.
else : ?>
    <div>No se encuentran registros</div>
<?php endif;  ?>