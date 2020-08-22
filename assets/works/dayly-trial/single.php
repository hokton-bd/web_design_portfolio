<?php get_header('small') ; ?>
    <main id="primary">
      <h2 class="section-title">news</h2>
    
      <article class="news" id="post">
      <div class="container">

      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        
        <div class="feature-img-box">
        <?php if(has_post_thumbnail()) {
          the_post_thumbnail('large');
        } ; ?>
          <!-- <img src="img/post.png" alt="" class="feature-img"> -->
        </div>

        <div class="post-info">
          <span class="posted-date"><?php the_time() ; ?></span>
          <h3 class="post-title"><?php the_title() ; ?></h3>
        </div><!--/post-info-->

        <div class="post-content">
          <?php the_content() ; ?>

        </div>

        <div class="post-pagination">

          <div class="paginate paginate-prev">
            <?php previous_post_link() ; ?>            
          </div>

          <div class="paginate paginate-next">
            <?php next_post_link() ; ?>
          </div>
          
      </div><!--post-pagination-->

      </div><!--/container-->
      </article>
      <?php endwhile; endif ; ?>
      
    <?php get_template_part('template-parts/schedule') ; ?>

    </main>
<?php get_footer() ; ?>