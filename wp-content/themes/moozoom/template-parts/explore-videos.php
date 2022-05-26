<?php

/**
 * @var array $args
 */

// Check rows exists.
if( have_rows( 'videos' ) ): 

    // Loop through rows.
    while( have_rows( 'videos' ) ): the_row();  
    
        $image = get_sub_field('module_image');
        $pdf = get_sub_field('module_summary');
        $unique = time().uniqid();

        // Create slug from title.
        $slug = slugify( get_sub_field('module_vimeo') );
    ?>
    <div x-data="{vim_<?=$unique;?>:false}" class="flex flex-col mr-8 snapscroll-child">
        <div class="bg-white rounded-xl overflow-hidden flex-grow styles_card__Dm0iu">
            <div x-on:click="vim_<?=$unique;?> = !vim_<?=$unique;?>" class="relative styles_thumbnail__3itNe" style="background-image:url(<?php echo $image['url']; ?>);background-size:cover;background-position:center;background-repeat:no-repeat">
                <span class="absolute top-0 left-0 px-4 py-2 text-xs uppercase text-purple-700 bg-purple-100 rounded-br-xl"><?=get_sub_field('module_name');?></span>
                <svg viewBox="0 0 92 92" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute w-24 h-24 cursor-pointer top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                    <circle cx="46" cy="46" r="25.639" fill="#fff"></circle>
                    <circle opacity="0.1" cx="46" cy="46" r="46" fill="#fff"></circle>
                    <circle opacity="0.3" cx="46" cy="46" r="36.197" fill="#fff"></circle>
                    <path d="M52.8 44.7c1 .578 1 2.022 0 2.599l-9.075 5.239a1.5 1.5 0 01-2.25-1.3V40.762a1.5 1.5 0 012.25-1.299l9.074 5.239z" fill="#6500FF"></path>
                </svg>
            </div>
            <div class="p-4">
                <h5 class="mb-2 styles_cardTitle__BnI-v"><?=get_sub_field('module_title');?></h5>
                <p class="mb-4 font-normal">
                    <?=get_sub_field('module_description');?>
                </p>
                <a target="_blank" href="<?=$pdf['url'];?>">
                    <span class="flex text-purple-700">
                    <?php _e('Download learning summary', 'wpml_theme'); ?>
                        <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg" class="ml-4">
                            <path d="M16.17 13l-3.58 3.59L14 18l6-6-6-6-1.41 1.41L16.17 11H4v2h12.17z" fill="currentColor"></path>
                        </svg>
                    </span>
                </a>
                <div class="flex mt-5 gap-3">
                    <a href="<?php echo (ICL_LANGUAGE_CODE == 'en' ? get_option('option_1') : get_option('option_2') );?>try-for-free" class="px-3 py-2 text-white rounded cursor-pointer bg-purple-700">
                        <?php _e('Try for free', 'wpml_theme'); ?>
                    </a>
                    <span class="flex px-3 py-2 rounded cursor-pointer text-purple-700 bg-purple-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="self-center w-5 h-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                        </svg>
                        <a href="<?= home_url();?>/videos/<?=$slug; ?>/"><?php _e('Video link', 'wpml_theme'); ?></a>
                    </span>
                </div>
            </div>
        </div>
         <!-- embed video -->
         <div x-show="vim_<?=$unique;?>" class="min-h-screen w-screen fixed top-0 left-0 bg-black z-[200] bg-opacity-50 flex justify-center overflow-auto items-center">
            <svg x-on:click="vim_<?=$unique;?> = !vim_<?=$unique;?>" viewbox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute top-0 right-0 w-12 h-12 z-[220] mt-6 mr-6 text-white cursor-pointer">
                <path d="M16.333 5.667L5.667 16.333M5.667 5.667l10.666 10.666" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
            <div class="flex flex-col items-center justify-center w-screen h-screen md:w-[80%] lg:w-[65%]">
                <div class="relative w-full h-full">
                    <iframe @click.away="vim_<?=$unique;?> = !vim_<?=$unique;?>" x-bind:src="vim_<?=$unique;?> ? 'https://player.vimeo.com/video/<?=get_sub_field('module_vimeo');?>?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479&amp;h=b83331c529' : ''" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen="" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Find out what happens to Daniel"></iframe>
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
    <div>No records found</div>
<?php endif;  ?>