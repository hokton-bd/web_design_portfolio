<?php get_header('small') ; ?>

    <main id="primary">
      
        <section id="news-archive" class="news">
            <div class="container">
    
              <h2 class="section-title">news</h2>
    
              <div class="news-list clear">

                <?php if(have_posts()) : ?>
                  <?php while(have_posts()) : the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="news-item">
    
                  <div class="news-img">
                    <?php
                      if(has_post_thumbnail()) {
                        the_post_thumbnail( 'large' );
                      } else {
                        echo "<img src='".esc_url(get_template_directory_uri())."/img/noimg.png' alt=''>";
                      }
                    ;?>
                  </div><!--/news-img-->
    
                  <div class="news-body">
                    <time class="post-date"><?php the_time('Y/n/j') ; ?></time>
                    <p class="post-title"><?php the_title() ; ?></p>
                  </div>
    
                </a><!--news-item-->

                <?php endwhile; endif; ?>
                
            </div><!--/news-list-first-->

            <div class="pagination">
                <!-- <span class="paginate pagination-first">1</span>
                <span class="paginate pagination-second">2</span>
                <span class="paginate pagination-next"><i class="fas fa-angle-right"></i></span> -->
                <?php wp_pagenavi() ; ?>
            </div>
    
            </div><!--/container-->
        </section><!--/news-->
        
        <?php get_template_part('template-parts/schedule') ; ?>
      
    </main>
<?php get_footer() ; ?>