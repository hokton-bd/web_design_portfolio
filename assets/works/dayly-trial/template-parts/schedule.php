<section id="schedule">
        <div class="container">

          <div class="schedule-block">

            <h2 class="section-title">schedule</h2>

            <div class="schedule-list">

              <?php 
                $event_repeat = SCF::get('schedule-block', 17);
                foreach($event_repeat as $field) :
              ; ?>
              <div class="schedule-item">
                <p class="date"><?= $field['date'] ;?></p>
                <p class="time"><?= $field['time'] ;?>開演</p>
                <p class="place"><?= $field['place'] ;?></p>
                <a href="<?= $field['link'] ;?>" class="link">チケット予約受付中</a>
              </div><!--schedule-item-->

              <?php endforeach ; ?>

            </div><!--/schedule-list-->

          </div><!--/schedule-block-->

          <div class="cta-btn-block">
            <a href="#" class="btn inquire-btn">お問い合わせはこちら</a>
            <a href="#" class="btn reserve-btn">チケット予約サイトへ</a>
          </div>

        </div><!--/container-->
      </section><!--/schedule-->