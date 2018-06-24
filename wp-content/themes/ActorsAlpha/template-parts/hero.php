
<?php $args = array(
        'post_type' => 'hero',							
        'posts_per_page' => 1,							
        'orderby' => 'title',
        'order' => 'ASC',
    ); ?>

<?php $hero = new WP_Query($args); while($hero->have_posts()): $hero->the_post(); ?>
    <div class="l-wrapper">
<div style="background-image:linear-gradient(to right bottom, rgba(0,0,0,0.1), rgba(0,0,0,0.1)), url(<?php echo get_the_post_thumbnail_url(); ?>);" class="hero hero--vhbg">




        <div class="hero__content">

            <h1 class="hero__title">A Catchy Slogan</h1>
            <p class="hero__text">Some Catchy Text it. That will blow your damn mind when you read it. Because it's so awesome it makes me want to puke.</p>
            
            <div class="hero__btn-container">
                <a href="#" class="btn btn--master btn--primary">That's What's Up.</a>
            </div>      
            
        </div>
        
    </div>
    

</div><!--HERO-->


<?php endwhile; wp_reset_postdata(); ?>
