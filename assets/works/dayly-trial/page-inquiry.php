<?php get_header('small') ; ?>
    <main id="primary">
        
        <section class="inquiry">
        <div class="container">
            
            <h2 class="section-title">inquiry</h2>

            <div class="inquiry-block">

                <p class="form-text">小池博史ブリッジプロジェクトにご興味を持っていただきまして、ありがとうございます。 公演に関するお問い合わせ、公演・ワークショップのご依頼など、 お電話（03-3385-2066）か、下記フォームよりお気軽にお問い合わせください。</p>

                <?= apply_filters('the_content', '[contact-form-7 id="52" title="Contact form 1"]') ;?>

            </div>
            

        </div>
        </section><!--form-->

        <?php get_template_part('template-parts/schedule') ; ?>

    </main>
<?php get_footer() ; ?>