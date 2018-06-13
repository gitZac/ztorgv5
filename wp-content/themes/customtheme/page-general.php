<?php
/**
 * Template Name: General
 *
 * Contains the jumbotron template loop.
 *
 * @package customtheme
 * @subpackage 
 * @since customtheme 1.0
 */

$about_jumbo_title = get_field('about_jumbo_title');
$about_jumbo_intro = get_field('about_jumbo_intro');

$about_main_body = get_field('about_main_body');
$about_skills_title = get_field('about_skills_title');
$about_skills_body = get_field('about_skills_body');


$attr1 = array(
    'class' => "img-responsive",
);

//about sidebar

$sidebar_content = get_field('sidebar_content');
$sidebar_profile_image = get_field('sidebar_profile_image');
$sidebar_profile_list_text = get_field('sidebar_profile_list_text');

$sidebar_cta = get_field('sidebar_cta');

?><?php get_header(); ?>
    
<!--JUMBOTRON HTML START-->
<div id="jumbotron-global" class="jumbotron">
    <div class="container">
        <h1><?php echo $about_jumbo_title; ?></h1>
        <hr class="rule">
        <h2><p class="long-copy !quick-!fade"><?php echo $about_jumbo_intro; ?></p></h2>
    </div>
</div><!--JUMBOTRON HTML END-->

<section>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-8 abt-main quick-fade">
                <div class="about-post">
                    <?php echo $about_main_body; ?>
                </div>                    
                <div class="about-post">
                    <h2><?php echo $about_skills_title ?></h2>
                    <p><?php echo $about_skills_body ?></p>

                    <div class="row web-dev-skills js-wp-4">
                        <?php $loop = new WP_Query(array( 'post_type' => 'TTI_images', 'orderby' => 'post_id', 'order' => 'ASC' )); ?>

                        <?php while($loop->have_posts() ) : $loop->the_post(); ?>        

                        <div class="col-xs-6 col-sm-6 col-md-4 ">
                            <?php 
                                if (has_post_thumbnail() ) {   
                                    
                                    
                                    the_post_thumbnail('large', $attr1);
                                }
                            ?>
                            
                        </div>                    
                        <?php endwhile; ?>                  
                    </div>
                </div>           
            </div>
            
    <!--  /***************************************/
    /*      SIDEBAR                        */
    /***************************************/ -->

            <div class="col-xs-12 col-sm-4 col-md-4 sidebar quick-!fade">
                <h3>Call Me Zac.</h3>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 headshot">
                        
                        <?php if ( !empty($sidebar_profile_image) ) : ?>
                            
                        <img class="img-circle img-responsive" alt="<?php echo $sidebar_profile_image['alt']; ?>" src="<?php echo $sidebar_profile_image['url']; ?>">

                        
                        <?php endif; ?>
                        
                        <p style="text-align:center;">Zac Taylor, Content Writer</p>
                    </div>                     
                    <div class="col-xs-12 col-sm-12 col-md-6 about-me">
                        <ul class="hobbies">
                            <li><?php echo $sidebar_profile_list_text; ?></li>
                        </ul>
                        <a href="http://zactaylor.org/my-portfolio/" class="btn btn-small margin-center">MY PORTFOLIO</a>
                    </div>
                </div>
                <hr>
                    <?php echo $sidebar_content; ?>
                <div class="sidebar-content-post cta-container row">
                    <a href="http://zactaylor.org/my-portfolio/" class="btn btn-large-solid"><?php echo $sidebar_cta?></a>
                </div>

            </div>           
        </div>
    </div>
</section>

<?php get_footer(); ?>