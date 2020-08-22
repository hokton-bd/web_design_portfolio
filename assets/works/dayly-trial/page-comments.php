<?php get_header('small') ; ?>

    <main id="primary">

      <section id="comments-detail" class="comments">
        <div class="container">

          <h2 class="section-title">comments</h2>

          <h4 class="subtitle">舞台関係者のみならず各界著名人からコメントが届いています！</h4>

          <div class="comment-content">
            
            <div class="top-comment">
                <h5 class="comment-name">
                    京都佛立ミュージアム館長<span class="name">長松清潤</span>
                </h5>
                <p class="comment-text">「文に非ず、其の義に非ず、唯だ一部の意のみ。」<br>まずこの聖句が浮かんだ。境界線に立つ人類。超越する意志。小池博史氏の心象が生み出したアバターが乱舞しながら深層意識に波紋を起こしてゆく。</p>
            </div>

            <div class="comments-list clear">
                <?php
                    $comments = SCF::get('comment_group', 30);
                    foreach($comments as $item) :
                ?>
                <div class="comment-item">
                    <p class="comment-name"><?= $item['name'] ;?></p>
                    <p class="position"><?= $item['position'] ;?></p>
                    <p class="comment-text"><?= $item['comment'] ;?></p>
                </div><!--comment-item-->

                <?php endforeach ; ?>

            </div><!--comments-list-->
                
          </div><!--comment-content-->

        </div>
      </section>
      <?php get_template_part('template-parts/schedule') ; ?>

    </main>
<?php get_footer() ; ?>