<?php 
    function my_setup()
    {
    add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
    add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
    add_theme_support('title-tag'); // タイトルタグ自動生成
    add_theme_support(
    'html5',
    array( //HTML5でマークアップ
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
    )
    );
    }
    
    add_action('after_setup_theme', 'my_setup');

    function my_script_init() {

        wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com./releases/v5.8.2/css/all.css', array(), '5.8.2', 'all' );
        wp_enqueue_style('my', get_template_directory_uri() . '/css/style.min.css', array(), '1.0.0', 'all');
        wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css', array(), '1.0.0', 'all');
        wp_enqueue_style('hight_light', get_template_directory_uri() . '/css/tomorrow-night-eighties.css', array(), '1.0.0', 'all');
        wp_enqueue_script('my', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0.0', true);
        wp_enqueue_script('hight_light', get_template_directory_uri() . '/js/highlight.pack.js', array( 'jquery' ), '10.1.1', true);
    
        // if(is_single()) {
        //     wp_enqueue_script('sns', get_template_directory_uri().'/js/sns.js', array('jquery'), '1.0.0', true );
        // }
    
        // if( is_single() ){
        //     wp_enqueue_script('sns', get_template_directory_uri() . '/js/sns.js', array( 'jquery' ), '1.0.0', true);
        // }
    
    }
    
    add_action('wp_enqueue_scripts', 'my_script_init');

    function my_menu_init() {
        register_nav_menus(
            array(
                'global' => 'ヘッダーメニュー',
                'drawer' => 'ドロワーメニュー',
            )
            );
    }

    add_action('init', 'my_menu_init');

    // function remove_admin_login_header() {
    //     remove_action('wp_head', '_admin_bar_bump_cb');
    // }
    // add_action('get_header', 'remove_admin_login_header');

    //archive
    function post_has_archive( $args, $post_type ) {

        if ( 'post' == $post_type ) {
            $args['rewrite'] = true;
            $args['has_archive'] = 'news'; //任意のスラッグ名
        }
        return $args;
     
    }
    add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );


//scf schedule-block
function add_scf_schedule_group($settings, $post_type, $post_id, $meta_type) {

    if($post_id != 17) {
        return $settings;
    } else {

        // 引数: (設定名スラッグ, ラベル名)
        $setting = SCF::add_setting('schedule-list', 'schedule');

        $items = array(
            array(
                'name' => 'date',
                'type' => 'text',
                'label' => '日時'
            ),
            array(
                'name' => 'time',
                'type' => 'text',
                'label' => '時間'
            ),
            array(
                'name' => 'place',
                'type' => 'text',
                'label' => '場所'
            ),
            array(
                'name' => 'link',
                'type' => 'text',
                'label' => 'リンク'
            )

            );

        $setting->add_group('schedule-block', true, $items);

        array_push($settings, $setting);

        return $settings;

    }

}

add_filter('smart-cf-register-fields', 'add_scf_schedule_group', 10, 4);
//scf schedule-block

//scf cast_group
function add_scf_cast_block($settings, $post_type, $post_id, $meta_type) {

    if($post_id != 34) {
        return $settings;

    } else {

        $setting = SCF::add_setting('cast-group', 'casts');
        
        $casts = array(
            array(
                'name' => 'cast_img',
                'label' => 'picture',
                'type' => 'image',
                'size' => 'full',
            ),
            array(
                'name' => 'cast_nationality',
                'label' => 'nationality',
                'type' => 'text'
            ),
            array(
                'name' => 'cast_name',
                'label' => 'name',
                'type' => 'text'
            ),
            array(
                'name' => 'cast_position',
                'label' => 'position',
                'type' => 'text'
            ),
            array(
                'name' => 'cast_description',
                'label' => 'description',
                'type' => 'textarea'
            )
        );

        // 引数: (グループ名, ループの可否, 項目の配列)
        $setting->add_group('cast_group', true, $casts);

        // 今あるカスタムフィールドの設定に$Settingを追加
        array_push($settings, $setting);

        return $settings;
        
    }

}

add_filter('smart-cf-register-fields', 'add_scf_cast_block', 10, 4);

//scf musician_group
function add_scf_musician_block($settings, $post_type, $post_id, $meta_type) {

    if($post_id != 34) {
        return $settings;

    } else {

        $setting = SCF::add_setting('musician-group', 'musicians');
        
        $musicians = array(
            array(
                'name' => 'musician_img',
                'label' => 'picture',
                'type' => 'image',
                'size' => 'full',
            ),
            array(
                'name' => 'musician_nationality',
                'label' => 'nationality',
                'type' => 'text'
            ),
            array(
                'name' => 'musician_position',
                'label' => 'position',
                'type' => 'text'
            ),
            array(
                'name' => 'musician_description',
                'label' => 'description',
                'type' => 'textarea'
            )
        );

        // 引数: (グループ名, ループの可否, 項目の配列)
        $setting->add_group('musician_group', true, $musicians);

        // 今あるカスタムフィールドの設定に$Settingを追加
        array_push($settings, $setting);

        return $settings;
        
    }

}

add_filter('smart-cf-register-fields', 'add_scf_musician_block', 10, 4);

//scf staff_group
function add_scf_staff_block($settings, $post_type, $post_id, $meta_type) {

    if($post_id != 34) {
        return $settings;

    } else {

        $setting = SCF::add_setting('staff-group', 'staffs');
        
        $staffs = array(
            array(
                'name' => 'staff_img',
                'label' => 'picture',
                'type' => 'image',
                'size' => 'full',
            ),
            array(
                'name' => 'staff_nationality',
                'label' => 'nationality',
                'type' => 'text'
            ),
            array(
                'name' => 'staff_position',
                'label' => 'position',
                'type' => 'text'
            ),
            array(
                'name' => 'staff_description',
                'label' => 'description',
                'type' => 'textarea'
            )
        );

        // 引数: (グループ名, ループの可否, 項目の配列)
        $setting->add_group('staff_group', true, $staffs);

        // 今あるカスタムフィールドの設定に$Settingを追加
        array_push($settings, $setting);

        return $settings;
        
    }

}

add_filter('smart-cf-register-fields', 'add_scf_staff_block', 10, 4);

//scf story-block
function add_scf_story_block($settings, $post_type, $post_id, $meta_type) {

    if($post_id != 32) {
        return $settings;
    } else {

        $setting = SCF::add_setting('story-block', 'story');

        $items = array(
            array(
                'name' => 'title',
                'label' => 'title',
                'type' => 'text'
            ),
            array(
                'name' => 'image',
                'label' => 'background image',
                'type' => 'image',
                'size' => 'full'
            ),
            array(
                'name' => 'description',
                'label' => 'description',
                'type' => 'textarea',
            )
        );

        $setting->add_group('story_group', true, $items);
        array_push($settings, $setting);

        return $settings;

    }

}

add_filter('smart-cf-register-fields', 'add_scf_story_block', 10, 4);

//scf comment-block
function add_scf_comment_block($settings, $post_type, $post_id, $meta_type) {
    if($post_id != 30) {
        return $settings;
    } else {

        $setting = SCF::add_setting('comment-block', 'comments');

        $items = array(
            array(
                'name' => 'name',
                'label' => 'name',
                'type' => 'text'
            ),
            array(
                'name' => 'position',
                'label' => 'position',
                'type' => 'text'
            ),
            array(
                'name' => 'comment',
                'label' => 'comment',
                'type' => 'textarea'
            ),
            array(
                'name' => 'image',
                'label' => 'image',
                'type' => 'image',
                'size' => 'full',
            )
        );

        $setting->add_group('comment_group', true, $items);
        array_push($settings, $setting);

        return $settings;

    }
}

add_filter('smart-cf-register-fields', 'add_scf_comment_block', 10, 4);

; ?>