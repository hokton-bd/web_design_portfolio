<?php get_header('small') ; ?>

    <main id="primary">
        
        <section class="inquiry confirm">
        <div class="container">
            
            <h2 class="section-title">inquiry</h2>

            <div class="inquiry-block">

                <p class="confirm-text">お問い合わせありがとうございました。</p>
                <p class="confirm-text">メッセージは正常に送信されました。</p>

            </div>

        </div>
        </section><!--form-->

        <section id="news" class="news">
        <div class="container">

          <h2 class="section-title">news</h2>
          <a href="<?= get_page_link(23); ?>" class="btn news-link">ニュース一覧へ</a>

          <div class="news-list clear">

            <?php if(have_posts()) : ?>
              <?php 
                $args = array(
                  'post_type' => 'post',
                  'posts_per_page' => 5,
                  'orderby' => 'date',
                  'order' => 'DESC',
                );
                $latest_posts = get_posts($args);
                foreach($latest_posts as $post) : setup_postdata($post);
              ; ?>

            <a href="<?php the_permalink(); ?>" class="news-item">

              <div class="news-img">
                <?php
                  if(has_post_thumbnail()) {
                    the_post_thumbnail( 'middle' );
                  } else {
                    echo "<img src='".esc_url(get_template_directory_uri())."img/noimg.png' alt=''>";
                  }
                ; ?>
  
              </div><!--/news-img-->

              <div class="news-body">
                <time class="post-date"><?php the_time('Y/n/j') ; ?></time>
                <p class="post-title"><?php the_title(); ?></p>
              </div>

            </a><!--news-item-->

              <?php endforeach; endif ; ?>

          </div><!--/news-list-first-->

        </div><!--/container-->
      </section><!--/news-->


          <?php get_template_part('template-parts/schedule') ; ?>

    </main>
<?php get_footer() ; ?>