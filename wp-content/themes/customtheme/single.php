<?php
/**
 * This template is for displaying the posts
 *
 * @package customtheme
 * @subpackage 
 * @since customtheme 1.0
 */
?><?php get_header(); ?>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!--POST LOOP-->
                    <div <?php post_class(); ?>>
                        <?php if( have_posts() ) : ?>
                            <?php while( have_posts() ) : the_post(); ?>

                                <h1><?php the_title(); ?></h1>
                                <p><?php the_date(); ?></p>
                                <?php the_content(); ?>

                                <?php 

                                    wp_link_pages(array( 
                                        'before'      => '<div class="page-links"><span class="page-links-title">' .__('','customtheme') . '</span>', 
                                        'after'       => '</div>',
                                        'link_before' => '<span>',
                                        'link_after'  => '</span>',
                                        'pagelink'    => '<span class="screen-reader-text">' .__(' Page ','customtheme' ) . '</span>%', 
                                        'separator'   => '<span class="screen-reader-text"> | </span>'
                                    )); 
                                ?>

                            <?php endwhile; ?>
                        <?php endif; ?>
                        <!--END LOOP-->

                        <!--Post navigation check-->
                        <?php
                            if (is_singular('post') ){
                                the_post_navigation(array(
                                    'next-text' => 'Next',
                                    'prev_text' => 'Previous'
                                ) );
                            }
                        ?>
                        <!--End Check-->
                    </div> <!--End post Class-->
                </div>
                
                <div class="col-md-4">
                    <?php get_sidebar(); ?>
                </div> <!--SIDEBAR-->
            </div>
        </div>
        
<?php get_footer(); ?>