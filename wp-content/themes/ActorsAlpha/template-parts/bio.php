  <?php //$abt_page_data = new WP_Query('page_id=7'); while($abt_page_data->have_posts()): $abt_page_data->the_post(); ?>
  
<section class="section">

   <div class="bio">
      
       <h2 class="section__title--inner u-text-center">A Little About Me.</h2>
        <div class="bio__image">
            <img src="http://via.placeholder.com/600x300" alt="" class="feat-proj__image">
        </div>

        <div class="bio__content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea cumque incidunt inventore mollitia laudantium laborum, dolores excepturi ipsa earum iusto fugit delectus. Sed reiciendis delectus nostrum blanditiis incidunt saepe? Dolorem! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea cumque incidunt inventore mollitia laudantium laborum, dolores excepturi ipsa earum iusto fugit delectus. Sed reiciendis delectus nostrum blanditiis incidunt saepe? Dolorem!</p>
        </div>
       
   </div>
   
</section>

  <?php// endwhile; wp_reset_postdata(); ?>