<?php
/*
Template Name: Entry Thank you Template
*/

if ( ! defined( 'ABSPATH' ) ) exit;
get_header('contact');

$paged = get_query_var('paged') ? get_query_var('paged') : 1;

?>

    <main id="pre-entry-confirm" class="main-form main-form-thankyou">
    <div class="common-firstview">
            <h3 class="section-title">具体的な転職相談<br>お申し込みフォーム</h3>
            <h5 class="eng-title">ENTRY</h5>
        </div>
        <div class="container">
            <p class="head-thankyou">お申し込みありがとうございます</p>
            <p class="desc heading">お申し込みが完了しました。<br>ご入力いただいたメールアドレス宛に受付完了メールをお送りしておりますので<br>記載のURLよりご面談の日程調整をお願いいたします。</p>
            <a href="<?php echo HOME; ?>" class="action-btn"><span>CxO人材バンクトップページに戻る</span></a>
        </div>
    </main>
    
<?php get_footer('contact');?>