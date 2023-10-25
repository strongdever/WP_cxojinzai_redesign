<?php
/*
Template Name: Top Recommend Form Template
*/

if ( ! defined( 'ABSPATH' ) ) exit;
get_header('contact');

$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$ids = get_query_var('id') ? get_query_var('id') : 0;

?>

    <main id="candidate-form" class="main-form candidate candidate-form">
        <h3 class="section-title">面談のご希望</h3>
        <div class="container">
            <p class="desc heading">ご興味を持っていただいた人材の方に応募意思の確認をいたします。<br>以下のフォームに必要情報をご入力し送信してください。<br>
            <span class="red-color">※候補者とのご面談をご希望される場合は「人材紹介契約」の締結が必要となります。</span></p>
            <form action="" method="post">
                <ul class="form-wrapper">
                    <li class="vertical-wrapper input-item name-wrapper">
                        <label for="name" class="required desc bold">お名前</label>
                        <div class="input-wrapper horizontal-wrapper">
                            <div class="vertical-wrapper input-item">
                                <input type="text" name="lastname" id="lastname" class="requires sub-input input desc" size="60" value="" placeholder="姓" />
                            </div>
                            <div class="vertical-wrapper input-item">
                                <input type="text" name="firstname" id="firstname" class="sub-input input desc" size="60" value="" placeholder="名" />
                            </div>
                        </div>
                    </li>
                    <li class="vertical-wrapper input-item">
                        <label for="email" class="required desc bold">メールアドレス</label>
                        <input type="text" name="email" id="email" class="input whole-length desc" size="60" value="" placeholder="例）mail@example.com" />

                    </li>
                    <li class="vertical-wrapper input-item">
                        <label for="phone" class="required desc bold">電話番号</label>
                        <input type="text" name="phone" id="phone" class="input half-length desc" size="60" value="" placeholder="例）050-1742-3631" />
                    </li>
                    <?php
                    $custom_query = new WP_Query(array(
                        'post_type' => 'candidate',
                        'post__in' =>$ids,
                    ));
                    ?>
                    <?php if( $custom_query->have_posts() ) : ?>
                    <li class="vertical-wrapper input-item">    
                        <label for="phone" class="desc bold candidate-label">面談をご希望の候補者様</label>
                        <ul class="cards-list">
                            <?php while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
                            <li class="card">
                                <label for="<?php echo get_the_ID(); ?>" class="id">
                                    <input type="checkbox" class="interest-checkbox" id="<?php echo get_the_ID(); ?>" name="interest" value="<?php echo get_the_ID(); ?>">&nbsp;&nbsp;<span><?php the_title(); ?></span>
                                </label>
                                <?php $occup = get_field('occupation'); ?>
                                <p class="occupation"><?php echo $occup; ?></p>
                                <img src="<?php echo get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : T_DIRE_URI . '/assets/img/noimage.png'; ?>">
                            </li>
                            <?php endwhile; ?>
                        </ul>
                    </li>
                    <?php endif; ?>

                    <li class="horizontal-wrapper input-privacy">
                        <label for="privacyok">
                            <input type="checkbox" id="privacyok" name="privacyok"><span><a href="https://ir-robotics.co.jp/privacypolicy/">&nbsp;個人情報保護方針</a></span>に同意します
                        </label>
                    </li>
                    <li class="horizontal-wrapper input-button">
                        <a class="action-btn white-btn" href="javascript:history.go(-1)"><span>戻る</span></a>
                        <a class="action-btn submit-btn" href="<?php echo HOME . 'candidate-list/form/thanks'; ?>"><span>送信する</span></a>
                    </li>
                </ul>
            </form>
        </div>
    </main>
<?php get_footer('contact');?>