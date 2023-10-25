<?php get_header(); ?>
<?php

$path_parts = $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
$path_parts = pathinfo($path_parts);

$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$cat_slug = get_query_var('news-category') ? get_query_var('news-category') : "";

?>

    <main id="news">
        <div class="page-status">
            <a class="home" href="<?php echo HOME; ?>">トップページ</a>
            <img src="<?php echo T_DIRE_URI; ?>/assets/img/goto-mark.png">
            <div class="this-page">CxO人材バンクNEWS</div>
        </div>
        <div class="common-firstview">
            <h3 class="section-title">CxO人材バンクNEWS</h3>
            <h5 class="eng-title">NEWS</h5>
        </div>

        <div class="container">
            <?php  
                $cats_args = [
                    'taxonomy' => 'news-category',
                    'hide_empty' => false,
                ];
                $cats = get_terms( $cats_args );
            ?>
            <?php if( $cats ) : ?>
            <div class="categories">
                <a class="category<?php echo $cat_slug ? '' : ' active'; ?>" href="<?php echo HOME; ?>/news">全て</a>
                <?php foreach( $cats as $cat ) : ?>
                <a class="category<?php if($cat_slug == $cat->slug ){ echo ' active'; } else { echo ''; } ?>" href="<?php echo get_term_link($cat); ?>"><?php echo $cat->name; ?></a>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
            <?php
                $args = [
                    'post_type' => 'news',
                    'post_status' => 'publish',
                    'paged' => $paged,
                    'posts_per_page' => 12,
                    'orderby' => 'post_date',
                    'order' => 'DESC'
                ];
                $tax_query = [];

                if( $cat_slug ) {
                    $tax_query[] = [
                        'taxonomy' => 'news-category',
                        'field' => 'slug',
                        'terms' => $cat_slug
                    ];
                }
            
                if ( !empty($tax_query) ) {
                    $args['tax_query'] = $tax_query;
                }

                $custom_query = new WP_Query( $args );
            ?>
            <ul class="news-wrapper">
                <?php if( $custom_query->have_posts() ) : ?>
                <?php while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
                <li class="news-item">
                    <ul class="item">
                        <li>
                            <span class="date"><?php the_time('Y.m.d'); ?></span>
                        </li>
                        <?php
                        $post_cats = get_the_terms(get_the_ID(), 'news-category');
                        if( $post_cats ) :
                            foreach($post_cats as $post_cat) :
                        ?>
                        <li>
                            <a class="category" href="<?php echo get_term_link($post_cat); ?>"><?php echo $post_cat->name; ?></a>
                        </li>
                        <?php 
                            endforeach;
                        endif; ?>
                        <li>
                            <a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </li>
                    </ul>
                </li>
                <?php endwhile; ?>
                <?php else : ?>
                <p class="no-item desc">該当の投稿が存在しません。</p>
                <?php endif; ?>
                <?php the_posts_pagination( array(
                    'next_text' => '<i class="fa fa-angle-right" style="font-size:36px"></i>',
                    'prev_text' => '<i class="fa fa-angle-left" style="font-size:36px"></i>',
        	    ) ); ?>
        	    <?php wp_reset_query(); ?>
            </ul>
        </div>

    </main>

	<?php get_footer(); ?>