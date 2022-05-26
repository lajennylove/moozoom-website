	
<?php /* Template Name: Policies */ 

get_header(); ?>

<div class="items-start p-6 grid grid-cols-1 lg:grid-cols-4 gap-6 lg:gap-0 relative">

    <?php 	$args = array(
                        'theme_location'=> 'secondary',
                        'menu_class' => 'p-6 shadow rounded-xl grid grid-cols-1 gap-6 sticky top-0 lg:top-6 bg-white',
                        'container_class' => '',
                        'li_class' => 'font-normal md:font-medium text-[#374151]',
                        );
            wp_nav_menu( $args ); ?>

    <div class="px-4 pb-4 font-normal md:col-span-2 lg:col-span-3 lg:px-10">
		<div>

        <?php if ( have_posts() ) : ?>

            <?php
            while ( have_posts() ) :
                the_post();
                ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="entry-content">
                        <?php the_content(); ?>

                        <?php
                            wp_link_pages(
                                array(
                                    'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'tailpress' ) . '</span>',
                                    'after'       => '</div>',
                                    'link_before' => '<span>',
                                    'link_after'  => '</span>',
                                    'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'tailpress' ) . ' </span>%',
                                    'separator'   => '<span class="screen-reader-text">, </span>',
                                )
                            );
                        ?>
                    </div>
                </article>

            <?php endwhile; ?>

        <?php endif; ?>

        </div>
	</div>
</div>

<?php
get_footer();
