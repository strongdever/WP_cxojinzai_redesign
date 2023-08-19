<?php get_header(); ?>

<main id="single-news">
        <div class="page-status">
            <a class="home" href="<?php echo HOME; ?>">トップページ</a>
            <img src="<?php echo T_DIRE_URI; ?>/assets/img/goto-mark.png">
            <div class="this-page">CxO人材バンクNEWS</div>
        </div>
        <?php if( have_posts() ) : ?>
        <?php while( have_posts() ) : the_post(); ?>
        <div class="main-section">
            <div class="header-text">
                <div class="date"><?php the_time("Y.m.d"); ?></div>
                <?php
                $post_cats = get_the_terms(get_the_ID(), "news-category");
                if( $post_cats ) :
                    foreach( $post_cats as $post_cat ) : 
                ?>
                <a class="category" href="<?php echo get_term_link($post_cat); ?>"><?php echo $post_cat->name; ?></a>
                <?php 
                endforeach; 
                endif;
                ?>
            </div>
            <div class="title">
                <?php the_title(); ?>
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
            <a class="btn-rightarrow" href="<?php echo HOME . 'news'; ?>">ニュース一覧へ</a>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </main>

    <?php get_footer(); ?>