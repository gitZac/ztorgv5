<?php get_header(); ?>

<main role="main">

	<section class="section section--front">
        
        <?php get_template_part('template-parts/hero'); ?> 
        
	</section>

	<section class="section section--front">
        
        <div class="l-wrapper">
            <?php get_template_part('template-parts/allabout'); ?>
        </div>

	</section>
	
	<section class="section section--front u-bgcolor-gradred">
    
	    <div class="l-wrapper">
            <?php get_template_part('template-parts/promo'); ?>	
	    </div>
		    
	</section>

	<section class="section section--front">
        
        <?php get_template_part('template-parts/featured-project'); ?>

	</section>
	
</main>

<?php get_footer(); ?>