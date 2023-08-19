<?php get_header(); ?>

<main id="column-singleresearch">
        <div class="page-status">
            <a class="home" href="<?php echo HOME; ?>/">トップページ</a>
            <img src="<?php echo T_DIRE_URI; ?>/assets/img/goto-mark.png">
            <a class="home" href="<?php echo HOME . 'column'; ?>">転職コラム
            </a>
            <img src="<?php echo T_DIRE_URI; ?>/assets/img/goto-mark.png">
            <a class="home" href="<?php echo HOME . 'research'; ?>">CxO人材研究所</a>
            <img src="<?php echo T_DIRE_URI; ?>/assets/img/goto-mark.png">
            <?php if( have_posts() ) : ?>
            <?php while( have_posts() ) : the_post(); ?>
            <div class="this-page">
                <?php echo the_title(); ?>
            </div>
        </div>
        <div class="content">
            <div class="part1">
                <?php
                $post_cats = get_the_terms(get_the_ID(), "research-category");
                if( $post_cats ) :
                    foreach( $post_cats as $post_cat ) : 
                ?>
                <a class="category"><?php echo $post_cat->name; ?></a>
                <?php 
                endforeach; 
                endif;
                ?>
                <h3 class="subtitle"><?php the_title(); ?></h3>
            </div>
            <?php the_content(); ?>
            <?php $social_group = get_field("social");
            if ( !empty($social_group['twitter']) || !empty($social_group['line']) || !empty($social_group['facebook']) ) :
            ?>
            <div class="social-share">
                <div class="label">この記事をシェアする</div>
                <ul class="socials">
                    <?php if(!empty($social_group['twitter'])) : ?>
                    <li>
                        <a class="twitter" href="<?php echo $social_group['twitter']; ?>">
                            <img src="<?php echo T_DIRE_URI; ?>/assets/img/twitter.png">
                        </a>                    
                    </li>
                    <?php endif; ?>
                    <?php if(!empty($social_group['line'])) : ?>
                    <li>
                        <a class="line" href="<?php echo $social_group['line']; ?>">
                            <img src="<?php echo T_DIRE_URI; ?>/assets/img/line.png">
                        </a>                    
                    </li>
                    <?php endif; ?>
                    <?php if(!empty($social_group['facebook'])) : ?>
                    <li>
                        <a class="facebook" href="<?php echo $social_group['facebook']; ?>">
                            <img src="<?php echo T_DIRE_URI; ?>/assets/img/facebook.png">
                        </a>                    
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
                <?php endif; ?>
            
            <?php endwhile; ?>
            <?php endif; ?>
            <?php
            $args = array(
                'post_type'         => 'research',
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
            <!-- <div class="goto-part">
                <p class="related-label">関連ページ</p>
                <a class="gotopage" href="">
                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/right-arrow-incircle.png">
                        CxOとは？
                </a>
                <a class="gotopage" href="">
                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/right-arrow-incircle.png">
                    退職交渉が長引きそうです。入社日はどれくらい延ばしてもらえますか？
                </a>
            </div> -->
            <a class="white-button" href="<?php echo HOME . 'research'; ?>">記事一覧へ</a>
        </div>
    </main>

<?php get_footer(); ?>