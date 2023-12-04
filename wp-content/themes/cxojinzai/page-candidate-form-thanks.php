<?php
/*
Template Name: Top Recommend Form Thanks Template
*/

if ( ! defined( 'ABSPATH' ) ) exit;
get_header('candidate');

?>

    <main id="candidate-thanks" class="main-form candidate candidate-thanks">
        <h3 class="section-title">面談のお申し込みが完了しました</h3>
        <div class="container">
            <p class="desc heading">候補者ご本人に応募意思の確認後、ご連絡差し上げますので今しばらくお待ちください。</p>
            <a class="action-btn submit-btn" href="<?php echo HOME . 'candidate-list'; ?>"><span>候補者の一覧画面に戻る</span></a>
        </div>
    </main>
<?php get_footer('contact');?>