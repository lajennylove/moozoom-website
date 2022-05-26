<?php
/**
 * The index.
 *
 * @package MooZoom
 * @author Valentin Lancu / Jenny Martinez
 * @link https://moozoomapp.com
 * 
 */
get_header(); ?>

<div class="mx-auto my-8">
    <!-- Begin Loop -->
	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

    <?php endwhile; endif;?>
    <!-- End loop -->
</div>

<?php
get_footer();
