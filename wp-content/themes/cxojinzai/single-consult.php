<?php get_header(); ?>

<main id="column-singleconsultation">
        <div class="page-status">
            <a class="home" href="<?php echo HOME; ?>/">トップページ</a>
            <img src="<?php echo T_DIRE_URI; ?>/assets/img/goto-mark.png">
            <a class="home" href="<?php echo HOME . 'column'; ?>">転職コラム
            </a>
            <img src="<?php echo T_DIRE_URI; ?>/assets/img/goto-mark.png">
            <a class="home" href="<?php echo HOME . 'consult'; ?>">転職相談室</a>
            <img src="<?php echo T_DIRE_URI; ?>/assets/img/goto-mark.png">
            <?php if( have_posts() ) : ?>
            <?php while( have_posts() ) : the_post(); ?>
            <div class="this-page">
                <?php echo the_title(); ?>
            </div>
        </div>
        <div class="content">
            <div class="part1">
                <div class="date-cat">
                    <div class="date"><?php the_time('Y.m.d'); ?></div>
                    <?php
                    $post_cats = get_the_terms(get_the_ID(), "consult-category");
                    if( $post_cats ) :
                        foreach( $post_cats as $post_cat ) : 
                    ?>
                    <a class="category"><?php echo $post_cat->name; ?></a>
                    <?php 
                    endforeach; 
                    endif;
                    ?>
                </div>
                <h3 class="title"><?php the_title(); ?></h3>
            </div>
            <?php the_content(); ?>            
            <?php endwhile; ?>
            <?php endif; ?>
            
            <?php
            $args = array(
                'post_type'         => 'consult',
                'post_status'       => 'publish',
                'post__not_in'      => array(get_the_ID()), // Exclude the current post
                'posts_per_page'    => 2, // Number of related articles to display
                'orderby'           => 'rand', // Randomize the order of related articles
            );
            $related_query = new WP_Query($args);
            ?>            
            <?php if( $related_query->have_posts() ):
            ?>
            <div class="goto-part">
                <p class="related-label">関連ページ</p>
                <?php 
                while( $related_query->have_posts() ) : $related_query->the_post(); 
                ?>
                <a class="gotopage" href="<?php the_permalink(); ?>">
                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/right-arrow-incircle.png">
                    <?php echo the_title(); ?>
                </a>
                <?php
                endwhile;
                ?>
            </div>
            <?php endif; ?>
            <a class="white-button" href="<?php echo HOME . 'consult'; ?>">記事一覧へ</a>
        </div>
    </main>

<?php get_footer(); ?>