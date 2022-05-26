<?php 
/**
 * Template Name: Videos
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package MDLWP
 */

get_header(); 
$videoid = get_query_var( 'videoid');
?>

<div class="flex px-4 pt-10 mx-auto max-w-7xl pb-6 items-center justify-center">

    <!-- Video -->
    <div class="relative w-screen lg:w-[48rem] h-48 lg:h-96">
        <iframe src="https://player.vimeo.com/video/<?=$videoid;?>?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479&amp;h=b83331c529" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen="" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Find out what happens to Daniel"></iframe>
    </div>
    <!-- END Video-->
    
</div>

<?php
get_footer();
