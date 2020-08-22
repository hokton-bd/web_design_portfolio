<div class="container">
        <nav class="global-nav">
          <?php 
				wp_nav_menu(
					array(
						'depth' => 1,
						'theme_location' => 'global', //グローバルメニューをここに表示すると指定
						'container' => 'false',
						'menu_class' => 'global-list',
					)
					);
			; ?>
        </nav>

          <!-- drawer -->
          <div class="drawer">

            <div class="drawer-icon">
              <span class="drawer-open"><i class="fas fa-bars"></i></span>
              <span class="drawer-close"><i class="fas fa-times"></i></span>
            </div><!--/drawer-icon-->

            <div class="drawer-content">
            <?php 
                wp_nav_menu(
                    array(
                        'depth' => 1,
                        'theme_location' => 'drawer', //ドロワーメニューをここに表示すると指定
                        'container' => 'nav',
                        'container_class' => 'drawer-nav',
                        'menu_class' => 'drawer-list',
                    )
                );
            ; ?>
            </div>


          </div><!--/drawer-->

      </div><!--/container-->