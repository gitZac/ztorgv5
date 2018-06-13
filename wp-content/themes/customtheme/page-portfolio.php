<?php
/**
 * Template Name: Portfolio
 *
 * Contains the jumbotron template loop.
 *
 * @package customtheme
 * @subpackage 
 * @since customtheme 1.0
 */

$attr = array(
    'class' => "img-responsive",
);

$port_jumbo_title = get_field('port_jumbo_title');
$port_jumbo_intro = get_field('port_jumbo_intro');

$marketing_slider_title = get_field('marketing_slider_title');
$marketing_slider_intro = get_field('marketing_slider_intro');
$marketing_slider_image = get_field('marketing_slider_image');

$webdev_slider_title = get_field('webdev_slider_title');
$webdev_slider_intro = get_field('webdev_slider_intro');
$webdev_slider_image = get_field('webdev_slider_image');
    

?><?php get_header(); ?>

<!--  /***************************************/
        /*      JUMBOTRON                      */
       /***************************************/ -->
    <div id="jumbotron-global" class="jumbotron">
        <div class="container">
            <h1><?php echo $port_jumbo_title; ?></h1>
              <hr class="rule">
              <h2><p class="long-copy quick-!fade"><?php echo $port_jumbo_intro?></p></h2>
        </div>     
    </div>
    
    <div class="container quick-!fade">
    <!-- WELL ****************************-->
      <div class="well" id="ga-well">
        <div class="row">     
          <div class="well-img col-lg-2 col-md-2 col-sm-3 col-xs-12">
            <img alt="" title="" src="<?php echo $marketing_slider_image;?>" id="goarmy_img" class="desktop-display">
            <img alt="" title="" src= "assets/images/soldier-holding-camera.png" class="mobile-display">
          </div>
          <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">  
             <h2><span class="header-underline"><?php echo $marketing_slider_title; ?></span></h2>
             <p class="text-muted well-text"><?php echo $marketing_slider_intro; ?></p>
             <i id="icon-ga" class="fa fa-plus-square fa-2x icon well-icon float-right" aria-hidden="true"></i>                
          </div>
        </div>
      </div> <!-- WELL END -->
        
    <!-- CONTENT MARKETING ********************************* -->
      <div id="goarmy" class="portfolio-grid">
          <div class="inner-row row">
          </div>
          <div class="inner-row row">         
            <?php $loop = new WP_Query(array( 'post_type' => 'portfolio_card', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
            
            <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="grid-item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <?php 
                        if (has_post_thumbnail() ) {   

                            the_post_thumbnail('large', $attr);
                        }
                    ?>
                    <h3><?php the_field('card_title');?></h3>
                    <h6 class="card-subtitle text-muted"><?php the_field('card_subtitle');?> | <a class="<?php the_field('card_brand_button');?> btn text-muted"><?php the_field('card_brand_button_title');?></a></h6>
                    <hr>
                    <p><?php the_field('card_project_description');?></p>
                    <a class="btn btn-small" target="_blank" href="<?php the_field('card_button_link');?>">Check it Out</a>
              </div>        
             <?php endwhile ?>
          </div>          
      </div> <!-- PORT END -->
        
        <!-- ******************* WEB DEVELOPMENT ********************************* -->
      <div class="well" id="web-dev-well">
        <div class="row">   
          <div class="well-img col-lg-2 col-md-2 col-sm-3 col-xs-12">
            <img alt="" title="" src="<?php echo $webdev_slider_image; ?>" class="desktop-display">
            <img alt="" title="" src= "" class="mobile-display">
          </div>
          <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
               <h2><span class="header-underline"><?php echo $webdev_slider_title; ?></span></h2> 
               <p class="text-muted well-text"><?php echo $webdev_slider_intro; ?></p>
               <i id="icon-dev" class="fa fa-plus-square fa-2x icon well-icon float-right" aria-hidden="true"></i>
          </div>
        </div>
      </div> <!-- WELL END -->

      <div id="web-development" class="portfolio-grid">
          <div class="inner-row row">
          </div>
          <div class="inner-row row">         
            <?php $loop = new WP_Query(array( 'post_type' => 'portfolio_card_web', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
            
            <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
            
              <div class="grid-item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    
                    <?php 
                        if (has_post_thumbnail() ) {   

                            the_post_thumbnail('large', $attr);
                        }
                    ?>
                  
                    <h3><?php the_field('card_title');?></h3>
                    <h6 class="card-subtitle text-muted"><?php the_field('card_subtitle');?> | <a class="<?php the_field('card_brand_button');?> btn text-muted"><?php the_field('card_brand_button_title');?></a></h6>
                    <hr>
                    <p><?php the_field('card_project_description');?></p>
                    <a class="btn btn-small" target="_blank" href="<?php the_field('card_button_link');?>">Check it Out</a>
              </div>              
             <?php endwhile ?>     
          </div>
      </div> <!-- PORT END -->
        
</div>
        
<?php get_footer(); ?>