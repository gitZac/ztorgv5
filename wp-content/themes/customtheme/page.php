
<?php
/**
 * The template for displaying the Page Type Home
 *
 * 
 *
 * @package customtheme
 * @subpackage 
 * @since customtheme 1.0
 */

?><?php get_header(); ?>
    <?php if( have_posts() ) : ?>
        <?php while( have_posts() ) : the_post(); ?>
    
    <!--JUMBOTRON HTML START-->

            <div class="jumbotron gradient-bg">
                <div class="container">
                <h1><?php the_title(); ?></h1>
                    <hr class="rule">
                    <?php the_content(); ?>
                </div>
            </div>

    <!--JUMBOTRON HTML END-->

        <?php endwhile; ?>
    <?php endif; ?>        
<?php get_footer(); ?>