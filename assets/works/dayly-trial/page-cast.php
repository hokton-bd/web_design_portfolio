<?php get_header('small') ; ?>

    <main id="primary">
        
      <section class="cast" id="cast-detail">

        <h2 class="section-title">cast</h2>

        <div class="top-cast-block">
          <div class="container">  

            <?php
              $casts = SCF::get('cast_group', 34);
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

        </div><!--/top-cast-list-->

        <div class="mid-casts-list">
        <div class="container">

          <?php 
            $middle_casts = array_slice($casts, 3, 4);
            foreach($middle_casts as $cast) :
                $imgUrl = wp_get_attachment_image_src($cast['cast_img'], 'full');
          ?>

            <div class="mid-cast-item">

                <div class="mid-cast-img-box">
                    <img src="<?= $imgUrl[0]; ?>" width="<?= $imgUrl[1]; ?>" height="<?= $imgUrl[2]; ?>" alt="" class="mid-cast-img">
                </div>

                <div class="cast-info">
                    <p class="cast-position"><?= $cast['cast_position'] ;?></p>
                    <p class="cast-name"><?= $cast['cast_name'] ;?></p>
                    <p class="cast-experience"><?= $cast['cast_nationality'] ;?></p>
                    <p class="cast-text"><?= $cast['cast_description'] ;?></p>
                </div>

            </div><!--mid-cast-item-->

            <?php endforeach ; ?>

        </div>
        </div><!--mid-cast-list-->

        <div class="bottom-cast-list">
        <div class="container clear">
            
            <?php
              $bottom_casts = array_slice($casts, 7);
              foreach($bottom_casts as $cast) :
            ?>
            <div class="bottom-cast-item">
                <p class="position"><?= $cast['cast_position'] ;?></p>
                <p class="cast-name"><?= $cast['cast_name'] ;?></p>
                <p class="cast-experience"><?= $cast['cast_nationality'] ;?></p>
            </div>
            <?php endforeach ; ?>

        </div>
        </div><!--bottom-cast-list-->

    </section>

    <?php get_template_part('template-parts/schedule') ; ?>
      
    </main>

<?php get_footer() ; ?>