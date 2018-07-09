<?php 
  /*
    Template Name: Services
  */
?>
<?php get_header(); ?>

<main role="main" class="u-padding-top-15">
   
    <?php get_template_part('template-parts/header-page'); ?>
    
    <?php get_template_part('template-parts/services/services-cards') ?>
                  
    <?php get_template_part('template-parts/promos/quote'); ?>
	                
</main>

<?php get_footer(); ?>