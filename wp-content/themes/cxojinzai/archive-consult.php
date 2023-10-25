<?php get_header(); ?>
<?php

$path_parts = $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
$path_parts = pathinfo($path_parts);

$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$cat_slug = get_query_var('consult-category') ? get_query_var('consult-category') : "";

?>

<main id="column-consultaion">
    <div class="page-status">
        <a class="home" href="<?php echo HOME; ?>">トップページ</a>
        <img src="<?php echo T_DIRE_URI; ?>/assets/img/goto-mark.png">
        <a class="home" href="<?php echo HOME . 'column'; ?>">転職コラム
        </a>
        <img src="<?php echo T_DIRE_URI; ?>/assets/img/goto-mark.png">
        <div class="this-page">転職相談室
        </div>
    </div>
    <div class="subpage-firstview">
        <h3 class="section-title">転職相談室</h3>
    </div>
    <div class="container">
        <div class="description">
            <h2 class="subtitle">
                転職に関するよくあるお悩みやご不安にお答えしました！
            </h2>
            <p class="desc">
            CxO人材バンクは、上場企業・上場準備中企業のCxO人材に特化した転職支援をする中で、皆さまから日々ご相談を頂いております。<br>そこで、「転職相談室」ではよくお聞きする転職にまつわる不安や悩みについて、一問一答形式でお答えします！
            </p>
        </div>
        <?php  
            $cats_args = [
                'taxonomy' => 'consult-category',
                'hide_empty' => false,
            ];
            $cats = get_terms( $cats_args );
        ?>
        <?php if( $cats ) : ?>
        <div class="categories">
            <a class="category<?php echo $cat_slug ? '' : ' active'; ?>" href="<?php echo HOME; ?>consult">全て</a>
            <?php foreach( $cats as $cat ) : ?>
            <a class="category<?php if($cat_slug == $cat->slug ){ echo ' active'; } else { echo ''; } ?>" href="<?php echo get_term_link($cat); ?>"><?php echo $cat->name; ?></a>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
        <?php
            $args = [
                'post_type' => 'consult',
                'post_status' => 'publish',
                'paged' => $paged,
                'posts_per_page' => 12,
                'orderby' => 'post_date',
                'order' => 'DESC'
            ];
            $tax_query = [];

            if( $cat_slug ) {
                $tax_query[] = [
                    'taxonomy' => 'consult-category',
                    'field' => 'slug',
                    'terms' => $cat_slug
                ];
            }
        
            if ( !empty($tax_query) ) {
                $args['tax_query'] = $tax_query;
            }

            $custom_query = new WP_Query( $args );
        ?>
        <div class="articles-list">
        <?php if( $custom_query->have_posts() ) : ?>
            <?php while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
            <div class="article">
                <?php
                $post_cats = get_the_terms(get_the_ID(), 'consult-category');
                if( $post_cats ) :
                    foreach($post_cats as $post_cat) :
                ?>
                <a class="category" href="<?php echo get_term_link($post_cat); ?>"><?php echo $post_cat->name; ?></a>
                <?php 
                    endforeach;
                endif;
                ?>
                <a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <div class="svg-wrapper">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M17.5383 10.6633L11.9133 16.2883C11.7372 16.4644 11.4983 16.5634 11.2492 16.5634C11.0001 16.5634 10.7613 16.4644 10.5852 16.2883C10.409 16.1122 10.3101 15.8733 10.3101 15.6242C10.3101 15.3752 10.409 15.1363 10.5852 14.9602L14.6094 10.9375H3.125C2.87636 10.9375 2.6379 10.8387 2.46209 10.6629C2.28627 10.4871 2.1875 10.2487 2.1875 10C2.1875 9.75137 2.28627 9.51292 2.46209 9.3371C2.6379 9.16129 2.87636 9.06252 3.125 9.06252H14.6094L10.5867 5.03751C10.4106 4.86139 10.3117 4.62252 10.3117 4.37345C10.3117 4.12438 10.4106 3.88551 10.5867 3.70939C10.7628 3.53327 11.0017 3.43433 11.2508 3.43433C11.4999 3.43433 11.7387 3.53327 11.9148 3.70939L17.5398 9.33439C17.6273 9.4216 17.6966 9.52523 17.7438 9.63931C17.7911 9.75339 17.8153 9.87569 17.8152 9.99917C17.815 10.1226 17.7905 10.2449 17.743 10.3589C17.6955 10.4728 17.6259 10.5763 17.5383 10.6633Z" fill="#AEAEAE"/>
                    </svg>
                </div>
            </div>
            <?php endwhile; ?>
        <?php else : ?>
            <p class="no-item desc">該当の投稿が存在しません。</p>
        <?php endif; ?> 
        </div>
        <?php the_posts_pagination( array(
                'next_text' => '<i class="fa fa-angle-right" style="font-size:36px"></i>',
                'prev_text' => '<i class="fa fa-angle-left"font-size:36px"></i>',
            ) ); ?>
            
        <?php wp_reset_query(); ?>

    </div>

</main>

<?php get_footer(); ?>