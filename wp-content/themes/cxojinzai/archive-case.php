<?php get_header(); ?>
<?php

$path_parts = $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
$path_parts = pathinfo($path_parts);

$paged = get_query_var('paged') ? get_query_var('paged') : 1;
?>


<main id="usecase">
    <div class="page-status">
        <a class="home" href="<?php echo HOME; ?>">トップページ</a>
        <img src="<?php echo T_DIRE_URI; ?>/assets/img/goto-mark.png">
        <div class="this-page">CxO人材への転職成功事例</div>
    </div>
    <div class="common-firstview">
        <h3 class="section-title">CxO人材への転職成功事例</h3>
        <h5 class="eng-title">CASE</h5>
    </div>
    <p class="top desc">CxO人材バンクを通して、転職成功された方々の事例をご紹介します。<br>
    今後のキャリアプランや転職活動に大変参考になる内容ですので是非ご覧ください。</p>
    <section class="job-change">
        <h3 class="section-title">転職事例一覧</h3>
        <!-- <div class="tabs">
            <button class="tab active">全て</button>
            <button class="tab">インタビューあり</button>
        </div> -->
        <?php
            $args = [
                'post_type' => 'case',
                'post_status' => 'publish',
                'paged' => $paged,
                'posts_per_page' => 12,
                'orderby' => 'post_date',
                'order' => 'DESC'
            ];
            $custom_query = new WP_Query( $args );
        ?>
        <?php if( $custom_query->have_posts() ):
        ?>
        <div class="case-wrapper">
        <?php while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
            <div class="content-wrapper">
                <!-- <p class="interview-flag">転職インタビューあり</p> -->
                <div class="top-section">
                    <?php if( has_post_thumbnail() ): ?>
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                    <?php else: ?>
                        <?php if(get_field("case_gender") == "男性") : ?>
                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/man-icon.png">
                        <?php else: ?>
                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/women-icon.png">
                        <?php endif; ?>
                    <?php endif; ?>
                    <div class="top-text">
                        <p class="head"><?php echo get_field("case_title"); ?></p>
                        <p class="gender"><?php echo get_field("case_name"); ?>／<?php echo get_field("case_gender"); ?>／<?php echo get_field("case_age"); ?>代</p>
                    </div>
                </div>
                <div class="middle-section">
                    <div class="left">前職</div>
                    <div class="right">
                        <p class="top-text">
                        <?php echo get_field("case_prevcomp"); ?>
                        </p>
                        <p class="middle-text">
                        <?php echo get_field("case_prevjob"); ?>
                        </p>
                        <?php if(!empty(get_field("case_income"))): ?>
                        <p class="bottom-text">
                            年収<span><?php echo get_field("case_income"); ?></span>万円
                        </p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="bottom-section">
                    <div class="left">転職後</div>
                    <div class="right">
                        <p class="top-text">
                        <?php echo get_field("case_nextcomp"); ?>
                        </p>
                        <p class="middle-text">
                        <?php echo get_field("case_jobchange"); ?>
                        </p>
                        <?php if(!empty(get_field("case_nextincome"))): ?>
                        <p class="bottom-text">
                            年収<span><?php echo get_field("case_nextincome"); ?></span>万円
                        </p>
                        <?php endif; ?>
                    </div>
                </div>
                <h3 class="title">キャリア相談のきっかけ</h3>
                <p class="desc">
                <?php echo get_field("case_opportunity"); ?>
                </p>
                <h3 class="title">入社を決めた経緯</h3>
                <p class="desc">
                <?php echo get_field("case_theway"); ?>
                </p>
            </div>
        <?php endwhile; ?>
        </div>
        <?php the_posts_pagination( array(
                'next_text' => '<i class="fa fa-angle-right" style="font-size:36px"></i>',
                'prev_text' => '<i class="fa fa-angle-left" style="font-size:36px"></i>',
            ) ); ?>
        <?php wp_reset_query(); ?>  
        <?php endif; ?>
        <!-- <div class="pagination bottom">
            <a class="num active" href="">1</a>
            <a class="num" href="">2</a>
            <a class="num" href="">3</a>
        </div> -->
    </section>
    
</main>

<?php get_footer(); ?>