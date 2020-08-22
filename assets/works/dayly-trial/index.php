<?php get_header() ; ?>

    <main id="primary">
      
      <section id="intro">

        <div class="container">

          <h2 class="section-title">introduction</h2>
          <h3 class="subtitle">なぜ今「マハーバーラタ」なのか？</h3>

          <div class="intro-contents">
            <p class="intro-text">「平和」について改めて考えるストーリー全世界を司るものが神だとすれば、なぜ神であるクリシュナは、策を巡らしてまで、登場人物すべてを滅亡へと導いたのか？<br>それは、「戦い」そのものを廃絶しようとしたからだと考えられる。戦うことそのものへの虚しさ、「戦い」そのものの「悪」を問う物語が「マハーバーラタ」と言える。 平和とは？私たちには何ができるのか？根源的な「平和」を希求する物語。</p>
            <p class="intro-text">現代社会を映し出す人間ドラマ対難民問題やヘイトスピーチ問題に見られるように、文化的背景が「異」なるものに対して非寛容になりつつある現代社会。<br>神の血を引きながらも、現代人同様に欲望や嫉妬によって争う登場人物たちが破滅していく様を描いた「マハーバーラタ」のストーリーは、人類が歩んできた争いの歴史の物語とも言い換えられる。<br>非寛容による悲劇の物語である「マハーバーラタ」を現代社会に重ね合わせつつ描くことで「寛容」の重要性を示す。</p>  
          </div>

        </div><!--/container-->
      </section><!--intro-->

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

      <section id="story">
        <div class="container">

          <h2 class="section-title">story</h2>

          <div class="story-text-block">
            <p class="story-text">マハー（偉大な）、バーラタ（バラタ族）、つまり「偉大なバラタ族」の物語。神々が人間界を作り出すところから始まり、バラタ族の中のクル家とパーンドゥ家という二つの部族間の対立を巡るストーリー。神の血を引く個性豊かな登場人物たちによる差別、対立、欲望、嫉妬など、生の苦しみが描かれ、最終的には一族が破滅していく。<br>世界的な文学作品古代ギリシャの「イーリアス」「オデュッセイア」と並ぶ世界三大叙事詩の一つに数えられており、「ラーマーヤナ」と双璧を成すインド二大叙事詩の一つ。原語はサンスクリット語であるが、全18巻、10万詩節を超えるその長さは聖書の約4倍と言われ、原典の日本語訳はいまだ完結していない。</p>
          </div>

          <a href="#" class="btn story-btn">もっと詳しく</a>

        </div>
      </section>

      <!-- comments -->
      <section class="comments">
        <div class="container">

          <h2 class="section-title">comments</h2>

          <h4 class="subtitle">舞台関係者のみならず<br class="break">各界著名人からコメントが届いています！</h4>

          <div class="top-comment">
            <h5 class="comment-name">京都佛立ミュージアム館長<span class="name">長松清潤</span></h5>
            <p class="comment-text">「文に非ず、其の義に非ず、唯だ一部の意のみ。」<br>まずこの聖句が浮かんだ。境界線に立つ人類。超越する意志。小池博史氏の心象が生み出したアバターが乱舞しながら深層意識に波紋を起こしてゆく。</p>

            <a href="#" class="btn comment-link">もっと見る</a>
          </div>

        </div>
      </section><!--comments-->

      <section class="cast">

          <h2 class="section-title">cast</h2>

          <div class="top-cast-block">
            <div class="container">  
              <?php 
                $casts = SCF::get('cast_group', get_page_by_path('cast'));
                $tmp = get_page_by_path('cast');
                
                $top_casts = array_slice($casts, 0, 3);
                foreach($top_casts as $cast) :
                  $imgUrl = wp_get_attachment_image_src($cast['cast_img'], 'full');
              ?>

            <div class="top-cast-item">

              <div class="cast-img-box">
                <img src="<?= $imgUrl[0]; ?>" width="<?= $imgUrl[1]; ?>" height="<?= $imgUrl[2]; ?>" alt="" class="cast-img">
              </div>

              <div class="cast-title">
                <p class="role"><?= $cast['cast_position'] ;?></p>
                <p class="name"><?= $cast['cast_name'] ;?></p>
              </div>
              
              <p class="cast-text"><?= $cast['cast_description'] ;?></p>

            </div><!--/cast-item-->

            <?php endforeach ; ?>
            
          </div><!--container-->
          
          <a href="<?= get_page_link(34); ?>" class="btn cast-link">もっと見る</a>

          </div><!--/cast-list-->

      </section>

      <?php get_template_part('template-parts/schedule') ; ?>

    </main>
<?php get_footer( ) ; ?>