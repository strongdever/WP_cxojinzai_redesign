<?php
if ( ! defined( 'ABSPATH' ) ) exit;
add_shortcode('url', function ( $atts ) {
    if(isset($atts['arg'])) {
        return site_url($atts['arg']);
    }
    return get_theme_file_uri();
} );

// サイト情報
define( 'HOME', home_url( '/' ) );
define( 'TITLE', get_option( 'blogname' ) );

// 状態
define( 'IS_ADMIN', is_admin() );
define( 'IS_LOGIN', is_user_logged_in() );
define( 'IS_CUSTOMIZER', is_customize_preview() );

// テーマディレクトリパス
define( 'T_DIRE', get_template_directory() );
define( 'S_DIRE', get_stylesheet_directory() );
define( 'T_DIRE_URI', get_template_directory_uri() );
define( 'S_DIRE_URI', get_stylesheet_directory_uri() );

define( 'THEME_NOTE', 'shinpohouse' );

define( 'WPCF7_AUTOP', false );

error_reporting(0);

flush_rewrite_rules();

// 固定ページとMW WP Formでビジュアルモードを使用しない
function stop_rich_editor($editor) {
    global $typenow;
    global $post;
    if(in_array($typenow, array('page', 'post', 'mw-wp-form'))) {
        $editor = true;
    }
    return $editor;
}

add_filter('user_can_richedit', 'stop_rich_editor');

// エディター独自スタイル追加
//TinyMCE追加用のスタイルを初期化
if(!function_exists('initialize_tinymce_styles')) {
    function initialize_tinymce_styles($init_array) {
        //追加するスタイルの配列を作成
        $style_formats = array(
            array(
                'title' => '注釈',
                'inline' => 'span',
                'classes' => 'cmn_note'
            )
        );
        //JSONに変換
        $init_array['style_formats'] = json_encode($style_formats);
        return $init_array;
    }
}

add_filter('tiny_mce_before_init', 'initialize_tinymce_styles', 10000);

add_filter('query_vars', function($vars) {
	$vars[] = 'employee';
    $vars[] = 'occupation';
    $vars[] = 'id';
	return $vars;
});

// オプションページを追加
if(function_exists('acf_add_options_page')) {
    $option_page = acf_add_options_page(array(
        'page_title' => 'テーマオプション', // 設定ページで表示される名前
        'menu_title' => 'テーマオプション', // ナビに表示される名前
        'menu_slug' => 'top_setting',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}

function my_script_constants() {
?>
    <script type="text/javascript">
        var templateUrl = '<?php echo S_DIRE_URI; ?>';
        var baseSiteUrl = '<?php echo HOME; ?>';
        var themeAjaxUrl = '<?php echo admin_url( 'admin-ajax.php' ) ?>';
    </script>
<?php
}

add_action('wp_head', 'my_script_constants');

// CSS・スクリプトの読み込み
function theme_add_files() {
    wp_enqueue_style('c-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', [], '1.0', 'all');
    wp_enqueue_style('c-font-common', T_DIRE_URI.'/assets/font/fonts.css', [], '1.0', 'all');
    wp_enqueue_style('c-reset', T_DIRE_URI.'/assets/css/reset.css', [], '1.0', 'all');
    wp_enqueue_style('c-slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.css', [], '1.0', 'all');
    wp_enqueue_style('c-slick-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick-theme.min.css', [], '1.0', 'all');
    // wp_enqueue_style('c-lightbox', 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css', [], '1.0', 'all');
    wp_enqueue_style('c-common', T_DIRE_URI.'/assets/css/common.css', [], '1.0', 'all');
    wp_enqueue_style('c-style', T_DIRE_URI.'/assets/css/style.css', [], '1.0', 'all');
    wp_enqueue_style('c-theme', T_DIRE_URI.'/style.css', [], '1.0', 'all');

    wp_enqueue_script('s-jquery', T_DIRE_URI.'/assets/js/jquery.min.js', [], '1.0', false);
    wp_enqueue_script('s-cookie', T_DIRE_URI.'/assets/js/jquery.cookie.js', [], '1.0', false);
    wp_enqueue_script('s-slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.js', [], '1.0', true);
    // wp_enqueue_script('s-fontawesome', 'https://kit.fontawesome.com/8cbdf0a85f.js', [], '1.0', true);  
    // wp_enqueue_script('s-common', T_DIRE_URI.'/assets/js/common.js', [], '1.0', true);  
    wp_enqueue_script( 'ajax-script', get_template_directory_uri() . '/page-candidate-list.php', array( 'jquery' ), '1.0', true );
    wp_localize_script( 'ajax-script', 'ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
}

add_action('wp_enqueue_scripts', 'theme_add_files');

function theme_admin_assets() {
    wp_enqueue_script( 'csv-uploader', T_DIRE_URI . '/admin/script.js', array( 'jquery' ) );
}

// add_action('admin_enqueue_scripts', 'theme_admin_assets');

function custom_term_radio_checklist( $args ) {
    if ( ! empty( $args['taxonomy'] ) && $args['taxonomy'] === 'product' || $args['taxonomy'] === 'category' ) {
        if ( empty( $args['walker'] ) || is_a( $args['walker'], 'Walker' ) ) { 
            if ( ! class_exists( 'WPSE_139269_Walker_Category_Radio_Checklist' ) ) {
                class WPSE_139269_Walker_Category_Radio_Checklist extends Walker_Category_Checklist {
                    function walk( $elements, $max_depth, ...$args ) {
                        $output = parent::walk( $elements, $max_depth, ...$args );
                        $output = str_replace(
                            array( 'type="checkbox"', "type='checkbox'" ),
                            array( 'type="radio"', "type='radio'" ),
                            $output
                        );

                        return $output;
                    }
                }
            }

            $args['walker'] = new WPSE_139269_Walker_Category_Radio_Checklist;
        }
    }

    return $args;
}

add_filter( 'wp_terms_checklist_args', 'custom_term_radio_checklist' );

function theme_custom_setup() {
    add_theme_support( 'post-thumbnails' ); 
    add_image_size( "thumbnail", 150, 100, true );
    add_image_size( "candidate-thumbnail", 96, 96, true );
    add_image_size( "medium", 480, 320, true );
    set_post_thumbnail_size( 480, 320, true );
    add_editor_style('assets/css/reset.css');
    add_editor_style('assets/css/common.css');
    add_editor_style('assets/css/style.css');
    add_editor_style('editor-style.css');
    add_theme_support( 'automatic-feed-links' );
}

add_action( 'after_setup_theme', 'theme_custom_setup' );

//------remove autop------{
add_filter('tiny_mce_before_init', 'disable_wpautop');
function disable_wpautop($init) {
    $init['wpautop'] = false;
    return $init;
}

define( 'WPCF7_AUTOP', false );

function disable_wp_auto_p( $content ) {
    if ( is_singular( 'page' ) ) {
      remove_filter( 'the_content', 'wpautop' );
    }
    remove_filter( 'the_excerpt', 'wpautop' );
    return $content;
}

add_filter( 'the_content', 'disable_wp_auto_p', 0 );

add_filter('wpcf7_autop_or_not', '__return_false');

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

function custom_tinymce_config( $init ) {
    $init['wpautop'] = false;
    $init['apply_source_formatting'] = true;
    $init['forced_root_block'] = false;
    $init['force_br_newlines'] = true;
    $init['force_p_newlines'] = false;
    $init['convert_newlines_to_brs'] = true;
    return $init;
}
add_filter( 'tiny_mce_before_init', 'custom_tinymce_config' );
//<------remove autop------}

function custom_excerpt_length($length) {
    return 120; // Change this number to set your desired character limit
}
add_filter('excerpt_length', 'custom_excerpt_length');

function custom_excerpt_more($more) {
    return '...'; // Replace this string with your desired ellipsis
}
add_filter('excerpt_more', 'custom_excerpt_more');

//hide the content editor of the interview post
add_action( 'init', function() {
    remove_post_type_support( 'interview', 'editor' );
}, 99);

add_action( 'init', function() {
    remove_post_type_support( 'case', 'editor' );
}, 99);

function catch_that_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+?src=[\'"]([^\'"]+)[\'"].*?>/i', $post->post_content, $matches);
    $first_img = $matches[1][0];
  
    if(empty($first_img)) {
      $first_img = T_DIRE_URI . "/assets/img/noimage.png";
    }
    return $first_img;
}

//add css style to the admin dashboard
function custom_dashboard_css() {
  wp_enqueue_style( 'custom-dashboard-css', T_DIRE_URI.'/assets/css/admin-dashboard.css' );
}
add_action( 'admin_enqueue_scripts', 'custom_dashboard_css' );

//Ajax response for the candidate-list page
function handle_ajax_request() {
    // Retrieve the data
    $data = $_POST['my_data'];
    
    // Access the individual values
    $employee = $data['employee'];
    $occupation = $data['occupation'];
    $args = [
        'post_type' => 'candidate',
        'post_status' => 'publish',
        'paged' => $paged,
        'posts_per_page' => -1,
        'orderby' => 'post_date',
        'order' => 'DESC'
    ];
    $tax_query = [];

    $employee_value = $employee ? $employee : '正規雇用';
    if( $employee_value ) {
        $tax_query[] = [
            'taxonomy' => 'employee-category',
            'field' => 'name',
            'terms' => $employee_value,
        ];
    }
    if ( !empty($tax_query) ) {
        $args['tax_query'] = $tax_query;
    }

    // $occupation_value = $occupation ? $occupation : '経理財務課長';
    $occupation_value = $occupation;
    if( $occupation_value == '' ) {
        $tax_query[] = [
            'taxonomy' => 'occupation-category',
            'operator' => 'NOT EXISTS',
        ];
    } else {
        $tax_query[] = [
            'taxonomy' => 'occupation-category',
            'field' => 'name',
            'terms' => $occupation_value,
        ];
    }
    if ( !empty($tax_query) ) {
        $args['tax_query'] = $tax_query;
    }

    $custom_query = new WP_Query( $args );

    if( $custom_query->have_posts() ) {
    $cards_data = 
    '<ul class="cards-list">';
        while( $custom_query->have_posts() ) : $custom_query->the_post();
    $cards_data = $cards_data . 
        '<li class="card">';
    $cards_data = $cards_data . 
            '<p class="id">' . get_the_title() . '</p>';
    $cards_data = $cards_data . 
            '<div class="cats-wrapper">';
            $emp_terms = get_the_terms(get_the_ID(), 'employee-category');
            if( $emp_terms ) {
                foreach( $emp_terms as $emp_term ) {
    $cards_data = $cards_data . 
            '<p class="cat-item">' . $emp_term->name . '</p>';
                }
            }
            $occu_terms = get_the_terms(get_the_ID(), 'occupation-category');
            if( $occu_terms ) {
    $cards_data = $cards_data . '/';
                foreach( $occu_terms as $occu_term ) {
    $cards_data = $cards_data . 
            '<p class="cat-item">' . $occu_term->name . '</p>';
                }
            }
    $cards_data = $cards_data . 
            '</div>';
    $cards_data = $cards_data . 
            '<img src="' . (get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : T_DIRE_URI . '/assets/img/noimage.png') . '">';
    $cards_data = $cards_data . 
            '<a class="btn-rightarrow" href="' . esc_attr( get_field('resume') ) . '" target="_blank">';
    $cards_data = $cards_data . 
                '職務経歴書
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M14.0306 8.53061L9.53063 13.0306C9.38973 13.1715 9.19863 13.2507 8.99938 13.2507C8.80012 13.2507 8.60902 13.1715 8.46813 13.0306C8.32723 12.8897 8.24807 12.6986 8.24807 12.4994C8.24807 12.3001 8.32723 12.109 8.46813 11.9681L11.6875 8.74999H2.5C2.30109 8.74999 2.11032 8.67097 1.96967 8.53032C1.82902 8.38967 1.75 8.1989 1.75 7.99999C1.75 7.80108 1.82902 7.61031 1.96967 7.46966C2.11032 7.329 2.30109 7.24999 2.5 7.24999H11.6875L8.46937 4.02999C8.32848 3.88909 8.24932 3.69799 8.24932 3.49874C8.24932 3.29948 8.32848 3.10838 8.46937 2.96749C8.61027 2.82659 8.80137 2.74744 9.00062 2.74744C9.19988 2.74744 9.39098 2.82659 9.53187 2.96749L14.0319 7.46749C14.1018 7.53726 14.1573 7.62016 14.1951 7.71142C14.2329 7.80269 14.2523 7.90052 14.2522 7.99931C14.252 8.09809 14.2324 8.19588 14.1944 8.28706C14.1564 8.37824 14.1007 8.46101 14.0306 8.53061Z" fill="#1BA2C5"/>
                </svg>
            </a>';
    $cards_data = $cards_data . 
            '<label for="' . get_the_ID() . '">';
    $cards_data = $cards_data . 
                '<input type="checkbox" class="interest-checkbox" id="' . get_the_ID() . '" name="interest" value="' . get_the_ID() . '">&nbsp;&nbsp;興味あり
            </label>
        </li>';
        endwhile;
    $cards_data = $cards_data . 
    '</ul>';
    }
    
    $response = array(
        'cards_data' => $cards_data,
        'message' => 'Data received and processed successfully!',
    );
    // echo "sdgsgsergrstg";
    wp_send_json_success( $response );
    wp_die();
}
add_action( 'wp_ajax_my_ajax_action', 'handle_ajax_request' );
add_action( 'wp_ajax_nopriv_my_ajax_action', 'handle_ajax_request' );

//add 雇用形態 item to イチオシ人材のご紹介 post table.
function add_set_column( $columns ) {
    $columns['employee_column'] = '雇用形態'; // Add the 雇用形態 column
    $columns['occupation_column'] = '業種'; // Add the 業種 column
    return $columns;
}
add_filter( 'manage_candidate_posts_columns', 'add_set_column', 10, 1 );

//set the value of 雇用形態 column on the イチオシ人材のご紹介 post table.
function populate_set_column( $column, $post_id ) {
    if ( $column === 'employee_column' ) {  //雇用形態
        $emp_cats = get_the_terms($post_id, 'employee-category');
        $value = '';
        foreach( $emp_cats as $emp_cat ) {
            $value = $value . $emp_cat->name . ', ';
        }
        $value = substr($value, 0, strlen($value) - 2); //delete the last string', ' from the value
        echo $value;
    }

    if ( $column === 'occupation_column' ) {  //業種
        $occu_cats = get_the_terms($post_id, 'occupation-category');
        $value = '';
        foreach( $occu_cats as $occu_cat ) {
            $value = $value . $occu_cat->name . ', ';
        }
        $value = substr($value, 0, strlen($value) - 2); //delete the last string', ' from the value
        echo $value;
    }
}
add_action( 'manage_candidate_posts_custom_column', 'populate_set_column', 10, 2 );

?>