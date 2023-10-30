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
            <form action="https://go.cxo-jinzaibank.jp/l/1022123/2023-10-24/k5wj" method="post" id="myForm">
                <ul class="form-wrapper">
                    <li class="vertical-wrapper input-item">
                        <label for="company" class="required desc bold">会社名</label>
                        <input type="text" name="company" id="company" class="input whole-length desc" size="60" value="" placeholder="例）株式会社IR Robotics" />
                        <div class="company-error error">この項目は必須項目です。</div>
                    </li>
                    <li class="vertical-wrapper input-item name-wrapper">
                        <label for="name" class="required desc bold">お名前</label>
                        <div class="input-wrapper horizontal-wrapper">
                            <div class="vertical-wrapper input-item">
                                <input type="text" name="lastname" id="lastname" class="requires sub-input input desc" size="60" value="" placeholder="姓" />
                                <div class="lastname-error error">この項目は必須項目です。</div>
                            </div>
                            <div class="vertical-wrapper input-item">
                                <input type="text" name="firstname" id="firstname" class="sub-input input desc" size="60" value="" placeholder="名" />
                                <div class="firstname-error error">この項目は必須項目です。</div>
                            </div>
                        </div>
                    </li>
                    <li class="vertical-wrapper input-item">
                        <label for="email" class="required desc bold">メールアドレス</label>
                        <input type="text" name="email" id="email" class="input whole-length desc" size="60" value="" placeholder="例）mail@example.com" />
                        <div class="email-error error">この項目は必須項目です。</div>
                    </li>
                    <li class="vertical-wrapper input-item">
                        <label for="free_description" class="desc bold">確認事項やご要望などございましたら、ご自由にご記入ください</label>
                        <textarea name="free_description" id="free_description" class="input whole-length desc"  rows="4" placeholder="例）人事のメールアドレス宛に送ってほしいです。&#10例）この方は、大阪勤務は可能でしょうか？"></textarea>
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
                                    <input type="checkbox" class="interest-checkbox" id="<?php echo get_the_ID(); ?>" name="custom_multi_field" value="<?php echo get_the_ID(); ?>">&nbsp;&nbsp;<span><?php the_title(); ?></span>
                                </label>
                                <?php $occup = get_field('occupation'); ?>
                                <p class="occupation"><?php echo $occup; ?></p>
                                <img src="<?php echo get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : T_DIRE_URI . '/assets/img/noimage.png'; ?>">
                            </li>
                            <?php endwhile; ?>
                        </ul>
                    </li>
                    <?php endif; ?>

                    <li class="vertical-wrapper input-privacy">
                        <label for="privacyok">
                            <input type="checkbox" id="privacyok" name="privacyok"><span><a href="https://ir-robotics.co.jp/privacypolicy/">&nbsp;個人情報保護方針</a></span>に同意します
                        </label>
                        <div class="privacyok-error error">この項目は必須項目です。</div>
                    </li>
                    <li class="horizontal-wrapper input-button">
                        <a class="action-btn white-btn" href="javascript:history.go(-1)"><span>戻る</span></a>
                        <button type="submit" class="action-btn submit-btn"><span>送信する</span></a>
                    </li>
                </ul>
            </form>
        </div>
    </main>
    <script type="text/javascript">
        !(function ($) {
            $(document).ready(function(){
                $('#myForm').submit(function(event) {
                    event.preventDefault(); // Prevent default form submission
                    var fValidate = true;

                    var company_Input = $('#company');
                    if (!company_Input.val()) {  //company validation
                        $(".company-error").show();
                        fValidate = false;
                    } else {
                        $(".company-error").hide();
                    }

                    var lastname_Input = $('#lastname');
                    if (!lastname_Input.val()) {  //lastname validation
                        $(".lastname-error").show();
                        fValidate = false;
                    } else {
                        $(".lastname-error").hide();
                    }

                    var firstname_Input = $('#firstname');
                    if (!firstname_Input.val()) {  //firstname validation
                        $(".firstname-error").show();
                        fValidate = false;
                    } else {
                        $(".firstname-error").hide();
                    }

                    var email_Input = $('#email');
                    if (!email_Input.val()) {  //email validation
                        $(".email-error").show();
                        fValidate = false;
                    } else {
                        $(".email-error").hide();
                    }

                    var privacyCheckbox = $('#privacyok');  //check if the checkbox is checked
                    if (!privacyCheckbox.is(':checked')) {
                        $(".privacyok-error").show();
                        fValidate = false;
                    } else {
                        $(".privacyok-error").hide();
                    }

                    if (fValidate ) {   //if form is validated, submit
                        this.submit();
                        window.location.href = "<?php echo HOME . 'candidate-list/thanks'; ?>";
                    } else {    //if form is not validated, do nothing
                        return 0;
                    }
                });
            });

            var company_Input = $('#company');
            company_Input.on('input', function() {
                if (!company_Input.val()) {  //company text change
                    $(".company-error").show();
                } else {
                    $(".company-error").hide();
                }
            });

            var lastname_Input = $('#lastname');
            lastname_Input.on('input', function() {
                if (!lastname_Input.val()) {  //lastname text change
                    $(".lastname-error").show();
                } else {
                    $(".lastname-error").hide();
                }
            });

            var firstname_Input = $('#firstname');
            firstname_Input.on('input', function() {
                if (!firstname_Input.val()) {  //firstname text change
                    $(".firstname-error").show();
                } else {
                    $(".firstname-error").hide();
                }
            });

            var email_Input = $('#email');
            email_Input.on('input', function() {
                if (!email_Input.val()) {  //email text change
                    $(".email-error").show();
                } else {
                    $(".email-error").hide();
                }
            });

            var privacyCheckbox = $('#privacyok');
            privacyCheckbox.change(function() {
                if (privacyCheckbox.is(':checked')) {
                    $(".privacyok-error").hide();
                }
            })
        })(jQuery);
    </script>
<?php get_footer('contact');?>