<?php 
  /*
    Template Name: About Page
  */
?>
<?php get_header(); ?>

<main role="main" class="u-padding-top-15">
   
    <section class="section">

        <h1 class="header__page-title u-text-center">This is What I Do.</h1>
        <p class="header__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo est sapiente exercitationem qui vitae unde expedita quasi fugit tenetur?</p> 

    </section>

    <section class="section">

        <?php get_template_part('template-parts/bio') ?>

    </section>

    <?php get_template_part('template-parts/promos/contracting'); ?>		
    <section class="section">

        <?php get_template_part('template-parts/featured-project'); ?>

    </section>

    <?php get_template_part('template-parts/promos/vr'); ?>	

    <section class="section">
       
        <div class="l-wrapper">
            
            <h2 class="section__title--inner u-text-center">Request My Resume</h2>
            <p class="section__text">If you'd like to see my full professional resume, please fill out the form below and I'll respond with a link to download the file.</p>

            <?php echo do_shortcode( '[contact-form-7 id="464" title="Resume"]' ); ?>
            	
        </div>

    </section>
                    
</main>

<?php get_footer(); ?>