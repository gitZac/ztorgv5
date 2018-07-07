<?php 
  /*
    Template Name: Services
  */
?>
<?php get_header(); ?>

<main role="main" class="u-padding-top-15">
   
    <?php get_template_part('template-parts/header-page'); ?>
    
    <section class="section">
       
        <div class="services">
           
            <div class="services__card" style="background-image:linear-gradient(to right, rgba(0,0,0,0.9), rgba(0,0,0,0.0)), url(http://localhost:8888/ztorg_v5.1/wp-content/uploads/2018/06/digitalzac.com_hr2.jpg);">
             
                <div class="services__content">
                  
                   <h2 class="services__title">Content Writing</h2>
                   <p class="services__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae eius quis sunt beatae, praesentium doloremque.</p>
                   <a href="" class="services__link">Learn More<i class="feat-proj__icon fa fa-arrow-right"></i></a>
                    
                </div>
                
            </div>
            
            <div class="services__card" style="background-image:linear-gradient(to right, rgba(0,0,0,0.9), rgba(0,0,0,0.0)), url(http://localhost:8888/ztorg_v5.1/wp-content/uploads/2018/06/digitalzac.com_hr2.jpg);">
              
                <div class="services__content">
                  
                   <h2 class="services__title">SEO</h2>
                   <p class="services__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                   <a href="" class="services__link">Learn More<i class="feat-proj__icon fa fa-arrow-right"></i></a>
                    
                </div>
               
            </div>
            
            <div class="services__card" style="background-image:linear-gradient(to right, rgba(0,0,0,0.9), rgba(0,0,0,0.0)), url(http://localhost:8888/ztorg_v5.1/wp-content/uploads/2018/06/digitalzac.com_hr2.jpg);">
              
                <div class="services__content">
                  
                   <h2 class="services__title">Web Development</h2>
                   <p class="services__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae eius quis sunt beatae, praesentium doloremque.</p>
                   <a href="" class="services__link">Learn More<i class="feat-proj__icon fa fa-arrow-right"></i></a>
                    
                </div>
               
            </div>
            
        </div>
        
    </section>
                  
    <?php get_template_part('template-parts/promos/vr'); ?>

    <?php get_template_part('template-parts/promos/quote'); ?>

    <?php get_template_part('template-parts/promos/contracting'); ?>	
	                
</main>

<?php get_footer(); ?>