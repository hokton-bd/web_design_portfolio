<?php get_header('story') ; ?>

    <main id="primary">
      
        <?php
            $stories = SCF::get('story_group', 32);
            foreach($stories as $item) :
                $imgUrl = wp_get_attachment_image_src($item['image'], 'full');
        ?>
        <section class="storyline" style="background-image:url(<?= $imgUrl[0]; ?>); ">
        <div class="container">
            
            <div class="story-text-block">
                <p class="story-text"><?= $item['description'] ;?></p>
            </div>

        </div>
        </section>

        <?php endforeach ; ?>
            
            <?php get_template_part('template-parts/schedule') ; ?>

    </main>
<?php get_footer() ; ?>