<?php $loop = new WP_Query(array( 'post_type' => 'title_text', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
            
            <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
            
                <div class="about-post">
                    <h2><?php the_field('title_text_title'); ?></h2>
                    <p><?php the_field('title_content');?></p>  
                </div>
             <?php endwhile ?>