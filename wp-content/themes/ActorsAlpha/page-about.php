<?php 
  /*
    Template Name: About Page
  */
?>
<?php get_header(); ?>

<main role="main" class="u-padding-top-15">
   
    <?php get_template_part('template-parts/header-page'); ?>

    <?php get_template_part('template-parts/bio') ?>
        
    <?php get_template_part('template-parts/promos/contracting'); ?>		
    <?php get_template_part('template-parts/about/text-blocks') ?>
    
    <?php get_template_part('template-parts/featured-project'); ?>
    
    <?php get_template_part('template-parts/forms/resume'); ?>

    <?php get_template_part('template-parts/promos/vr'); ?>	
                    
</main>

<?php get_footer(); ?>