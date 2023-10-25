<?php
/*
Template Name: Top Recommend Template
*/

if ( ! defined( 'ABSPATH' ) ) exit;
get_header('contact');

$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$employee = get_query_var('employee') ? get_query_var('employee') : '';
$occupation = get_query_var('occupation') ? get_query_var('occupation') : '';

?>

    <main id="candidate-list" class="main-form candidate">
        <div class="common-firstview">
            <h3 class="section-title">イチオシ人材のご紹介</h3>
            <h5 class="eng-title">TOP RECOMMENDED</h5>
        </div>
        <div class="container">
            <p class="desc heading">「職務経歴書」のボタンから候補者のマスクレジュメをご確認いただけます。<br>
            ご興味をお持ち頂いた人材の「興味あり」にチェックした後、「候補者との面談を希望する」のボタンから、必要情報をご入力し送信してください。<br>
            すぐに候補者ご本人に応募意思の確認をいたします。<br>
            <span class="red-color">※候補者とのご面談をご希望される企業様は「人材紹介契約」の締結が必要となります。</span><br><br>
            </p>

            <ul class="tabs">
                <li class="tab <?php if( $employee == '' || $employee == '正規雇用' ) echo 'active'; ?>">
                    <a href="<?php echo HOME . 'candidate-list/?employee=正規雇用';?><?php echo $occupation ? '&occupation=' . $occupation : ''; ?>">正規雇用</a>
                </li>
                <li class="tab <?php echo $employee == '社外取締役・監査役' ? 'active' : ''; ?>">
                    <a href="<?php echo HOME . 'candidate-list/?employee=社外取締役・監査役';?><?php echo $occupation ? '&occupation=' . $occupation : ''; ?>">社外取締役・監査役</a>
                </li>
                <li class="tab <?php echo $employee == '業務委託' ? 'active' : ''; ?>">
                    <a href="<?php echo HOME . 'candidate-list/?employee=業務委託';?><?php echo $occupation ? '&occupation=' . $occupation : ''; ?>">業務委託</a>
                </li>
            </ul>

            <div class="categories">
                <a class="category<?php if( $occupation == '' || $occupation == '経理財務課長' ) echo ' active'; ?>" href="<?php echo HOME . 'candidate-list/?' . ($employee ? 'employee=' . $employee . '&' : '');?>occupation=経理財務課長">経理財務課長</a>
                <a class="category<?php echo $occupation == 'マーケティング' ? ' active' : ''; ?>" href="<?php echo HOME . 'candidate-list/?' . ($employee ? 'employee=' . $employee . '&' : '');?>occupation=マーケティング">マーケティング</a>
                <a class="category<?php echo $occupation == 'エンジニア' ? ' active' : ''; ?>" href="<?php echo HOME . 'candidate-list/?' . ($employee ? 'employee=' . $employee . '&' : '');?>occupation=エンジニア">エンジニア</a>
                <a class="category<?php echo $occupation == 'IR' ? ' active' : ''; ?>" href="<?php echo HOME . 'candidate-list/?' . ($employee ? 'employee=' . $employee . '&' : '');?>occupation=IR">IR</a>
            </div>

            <?php
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
                        'taxonomy' => 'candidate-category',
                        'field' => 'name',
                        'terms' => $employee_value,
                    ];
                }
                if ( !empty($tax_query) ) {
                    $args['tax_query'] = $tax_query;
                }

                $occupation_value = $occupation ? $occupation : '経理財務課長';
                if( $occupation_value ) {
                    $meta_query[] = array(
                        'key'     => 'occupation',
                        'value'   => $occupation_value, 
                        'compare' => 'LIKE',
                    );
                }
                if( !empty($meta_query) ) {
                    $args['meta_query'] = $meta_query;
                }

                $custom_query = new WP_Query( $args );
            ?>

            <?php if( $custom_query->have_posts() ) : ?>
            <ul class="cards-list">
                <?php while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
                <li class="card">
                    <p class="id"><?php the_title(); ?></p>
                    <?php $occup = get_field('occupation'); ?>
                    <p class="occupation"><?php echo $occup; ?></p>
                    <img src="<?php echo get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : T_DIRE_URI . '/assets/img/noimage.png'; ?>">
                    <a class="btn-rightarrow" href="<?php echo esc_attr( get_field('resume') ); ?>" target="_blank">
                        職務経歴書
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M14.0306 8.53061L9.53063 13.0306C9.38973 13.1715 9.19863 13.2507 8.99938 13.2507C8.80012 13.2507 8.60902 13.1715 8.46813 13.0306C8.32723 12.8897 8.24807 12.6986 8.24807 12.4994C8.24807 12.3001 8.32723 12.109 8.46813 11.9681L11.6875 8.74999H2.5C2.30109 8.74999 2.11032 8.67097 1.96967 8.53032C1.82902 8.38967 1.75 8.1989 1.75 7.99999C1.75 7.80108 1.82902 7.61031 1.96967 7.46966C2.11032 7.329 2.30109 7.24999 2.5 7.24999H11.6875L8.46937 4.02999C8.32848 3.88909 8.24932 3.69799 8.24932 3.49874C8.24932 3.29948 8.32848 3.10838 8.46937 2.96749C8.61027 2.82659 8.80137 2.74744 9.00062 2.74744C9.19988 2.74744 9.39098 2.82659 9.53187 2.96749L14.0319 7.46749C14.1018 7.53726 14.1573 7.62016 14.1951 7.71142C14.2329 7.80269 14.2523 7.90052 14.2522 7.99931C14.252 8.09809 14.2324 8.19588 14.1944 8.28706C14.1564 8.37824 14.1007 8.46101 14.0306 8.53061Z" fill="#1BA2C5"/>
                        </svg>
                    </a>
                    <label for="<?php echo get_the_ID(); ?>">
                        <input type="checkbox" class="interest-checkbox" id="<?php echo get_the_ID(); ?>" name="interest" value="<?php echo get_the_ID(); ?>">&nbsp;&nbsp;興味あり
                    </label>
                </li>
                <?php endwhile; ?>
            </ul>
            <?php endif; ?>
        </div>
        <div class="footer-part">
            <p class="footer-text">※「興味あり」にチェックをいれてください</p>
            <a class="footer-btn">候補者との面談を希望する</a>
        </div>
    </main>
    <script type="text/javascript">
        !(function ($) {
            $(document).ready(function(){
                let nCheckedCount = $('input[class="interest-checkbox"]:checked').length;
                let footer_btn = $('.footer-btn');
                if( nCheckedCount > 0 ) {
                    if( !footer_btn.hasClass('active') ) {
                        footer_btn.addClass('active');
                    }
                } else {
                    if( footer_btn.hasClass('active') ) {
                        footer_btn.removeClass('active');
                    }
                }
                $('.interest-checkbox').change(function() {
                    nCheckedCount = $('input[class="interest-checkbox"]:checked').length;
                    let footer_btn = $('.footer-btn');
                    if( nCheckedCount > 0 ) {
                        if( !footer_btn.hasClass('active') ) {
                            footer_btn.addClass('active');
                        }
                    } else {
                        if( footer_btn.hasClass('active') ) {
                            footer_btn.removeClass('active');
                        }
                    }
                })

                $('.footer-btn').click(function(e) {
                    if( !$(this).hasClass('active') ) {
                        return 0;
                    }
                    let url = "<?php echo HOME . 'candidate-list/form/?'; ?>";
                    let checkedInputs = $('input[class="interest-checkbox"]:checked');
                    nCheckedCount = checkedInputs.length;
                    for( i = 0 ; i < nCheckedCount - 1 ; i++ ) {
                        url = url + 'id[' + i + ']=' + checkedInputs[i].value + '&';
                    }
                    url = url + 'id[' + (nCheckedCount - 1) + ']=' + checkedInputs[nCheckedCount - 1].value;
                    window.location.href = url;
                })
            });
        })(jQuery);
    </script>
<?php get_footer('contact');?>