<?php
/**
 * Template Name: Home Page Template
 *
 * Contains the jumbotron template loop.
 *
 * @package customtheme
 * @subpackage 
 * @since customtheme 1.0
 */

//Advanced Custom Fields
    //Header
$feature_image            = get_field('feature_image');
$header_title             = get_field('header_title');

$first_hero_button_text   = get_field('first_hero_button_text');
$second__hero_button_text = get_field('second__hero_button_text');
$first_hero_link          = get_field('first_hero_link');
$second_hero_link         = get_field('second_hero_link');

    //Supporting
$first_title             = get_field('first_title');
$first_content           = get_field('first_content');
$first_skills_button     = get_field('first_skills_button'); 

$second_title            = get_field('second_title');
$second_content          = get_field('second_content');
$second_skills_button    = get_field('second_skills_button'); 

$third_title             = get_field('third_title');
$third_content           = get_field('third_content');
$third_skills_button     = get_field('third_skills_button'); 



?><?php get_header(); ?>


    
<div id="jumbotron-home" class="jumbotron" style="background-image:linear-gradient(rgba(0, 0, 0, 0.3),rgba(0, 0, 0, 5.0)), url('<?php echo $feature_image; ?>');">
    <div class="container">
        <div class="hero-text-box">
            <h1><?php echo $header_title; ?></h1>
            <a class="btn btn-large !fade" href="<?php echo $first_hero_link; ?>"><?php echo $first_hero_button_text; ?></a> 
            <a class="btn btn-large !fade" href="<?php echo $second_hero_link; ?>"><?php echo $second__hero_button_text; ?></a> 

        </div>
    </div>
</div>
<?php the_content(); ?>

    <!--  /***************************************/
         /*      SUPPORTING                     */
        /***************************************/ -->

  <div class="container">
    <section class="supporting">
      <h2>This is <span class="highlight">What I Do</span>.</h2>
      <div class="row supporting-content js-wp-main">
          
      <?php $loop = new WP_Query(array( 'post_type' => 'main_features', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

        <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
        
        <div class="col-xs-12 col-md-4 col-sm-4 supporting-content-item">

            <i class="<?php the_field('features_icon'); ?> fa-3x icon" aria-hidden="true"></i>
            <h3><?php the_field('features_title'); ?></h3>
            <p><?php the_field('features_intro'); ?></p>           
            <a class="btn btn-small" href="<?php the_field('features_button_link'); ?>"><?php the_field('features_button_text'); ?></a>
        </div>
          
         <?php endwhile ?>

      </div> <!--Row End-->
    </section> <!--Supporting End-->
  </div> <!--Container End-->

<?php get_footer(); ?>