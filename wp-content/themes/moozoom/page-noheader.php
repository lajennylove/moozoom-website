	
<?php /* Template Name: No Header */ 

get_header(); ?>

<div class="px-3 my-0 mx-auto md:px-0">

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

<?php
get_footer();
