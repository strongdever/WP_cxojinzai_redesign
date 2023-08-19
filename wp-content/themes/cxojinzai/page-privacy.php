<?php
/*
Template Name: プライバシーポリシー Template
*/

if ( ! defined( 'ABSPATH' ) ) exit;
get_header();

$paged = get_query_var('paged') ? get_query_var('paged') : 1;

?>

<main id="privacy">
        <div class="page-status">
            <a class="home" href="<?php echo HOME; ?>">トップページ</a>
            <img src="<?php echo T_DIRE_URI; ?>/assets/img/goto-mark.png">
            <div class="this-page">プライバシーポリシー</div>
        </div>
        <div class="common-firstview">
            <h3 class="section-title">プライバシーポリシー</h3>
            <h5 class="eng-title">PRIVACY POLICY</h5>
        </div>
        <?php the_content(); ?>
    </main>

<?php get_footer();?>