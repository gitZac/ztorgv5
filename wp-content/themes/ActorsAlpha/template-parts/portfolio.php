<?php $args = array(
    'post_type' => 'scrapbook',							
    'posts_per_page' => -1,							
    'orderby' => 'date',
    'order' => 'ASC',
); ?>


<section class="section">
        
    <div class="port">
        
        <?php $scrapbook = new WP_Query($args); while($scrapbook->have_posts()): $scrapbook->the_post(); ?>

        <div class="port__card" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);">

            <h2 class="port__title"><?php the_title(); ?></h2>
            
            <div class="port__logo">

                <?php 

                    $image = get_field('logo_image');

                    if( !empty($image) ): ?>

                        <img class="port__logo-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                <?php endif; ?>
                
            </div>
            
            <?php 
                
            //vars
            $servs = get_field('services');    
            
                if( $servs ):  ?>
            
            <ul class="port__plist">

               <?php foreach ($servs as $serv): ?>
                   <li class="port__plist-item"><?php echo $serv; ?> </li>
                <?php endforeach; ?>

            </ul>
            
            <?php endif; ?>

            <div class="port__btn-container">
               
                <a href="" class="btn--text">Learn More<i class="feat-proj__icon fa fa-arrow-right"></i></a>
                
            </div>
            
        </div>
        
        <?php endwhile; wp_reset_postdata(); ?>    
        
    </div>
    
</section>

<!--
       
       Can't figure out how to implement a full-width potfolio dynamically yet. Will have to come back to it.
        <div class="port__card--fw u-bgcolor-gradblack">
           
            <h2 class="port__title--fw">Title of Project. This is a long descriptive title. This is even longer</h2>
            
            <div class="port__logo--fw">
                <img class="port__logo-image" src="http://via.placeholder.com/150x75" alt="">
            </div>
            
            <ul class="port__plist--fw">
               
                <li class="port__plist-item--fw">SEO</li>
                <li class="port__plist-item--fw">Content Writing</li>
                <li class="port__plist-item--fw">Web Dev</li>
                
            </ul>
            
        </div>
-->