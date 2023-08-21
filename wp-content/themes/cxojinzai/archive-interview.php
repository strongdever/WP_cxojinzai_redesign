<?php get_header(); ?>
<?php

$path_parts = $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
$path_parts = pathinfo($path_parts);

$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$cat_slug = get_query_var('interview-category') ? get_query_var('interview-category') : "";

?>

<main id="interview">
    <div class="page-status">
        <a class="home" href="<?php echo HOME; ?>">トップページ</a>
        <img src="<?php echo T_DIRE_URI; ?>/assets/img/goto-mark.png">
        <div class="this-page">CxOインタビュー</div>
    </div>
    <div class="common-firstview">
        <h3 class="section-title">CxOインタビュー</h3>
        <h5 class="eng-title">INTERVIEW</h5>
    </div>
    <div class="container">
        <p class="desc">
            優秀であり、能力ある方々のキャリアや仕事論を、分析・言語化し、<br>
            「CxOとして企業で活躍したい！」「本気でキャリアアップを目指したい！」という方に役立つ情報をお届けしています。<br>
            実際の上場企業CxO経験者からお聞きした“キャリア”や”仕事論”をお聞きしながらその方たちの転職のタイミングや、意思決定した理由などをインタビューしました。<br>
            ”CxOになるまでの裏側”や”CxOとして活躍し続けるための共通項”を紐解くことで、本気でキャリアアップを目指す皆様のキャリアアップを支援します。
        </p>
        <?php
            $args = [
                'post_type' => 'interview',
                'post_status' => 'publish',
                'paged' => $paged,
                'posts_per_page' => 12,
                'orderby' => 'post_date',
                'order' => 'DESC'
            ];
            $tax_query = [];

            if( $cat_slug ) {
                $tax_query[] = [
                    'taxonomy' => 'interview-category',
                    'field' => 'slug',
                    'terms' => $cat_slug
                ];
            }
        
            if ( !empty($tax_query) ) {
                $args['tax_query'] = $tax_query;
            }

            $custom_query = new WP_Query( $args );
        ?>
        <div class="wrapper">
        <?php if( $custom_query->have_posts() ) : ?>
            <?php while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
            <div class="slider-item">
                <div class="item-wrapper">
                <?php if( has_post_thumbnail() ): ?>
                    <img class="thumb" src="<?php echo get_the_post_thumbnail_url(); ?>">
                <?php else: ?>
                    <img class="thumb" src="<?php echo catch_that_image(); ?>">
                <?php endif; ?>
                    <div class="content-wrapper pc">
                        <a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?>
                        </a>
                        <?php
                        $post_cats = get_the_terms(get_the_ID(), 'interview-category');
                        if( $post_cats ) :
                            foreach($post_cats as $post_cat) :
                        ?>
                        <a class="category active" href="<?php echo get_term_link($post_cat); ?>"><?php echo $post_cat->name; ?></a>
                        <?php 
                            endforeach;
                        endif; ?>
                        <p class="name">
                            <?php
                            $profile = get_field("profile");
                            $business_name = $profile['business_name'];
                            
                            $performer = $profile['performer'];
                            $position = $performer['position'];
                            $name = $performer['name'];
                            if( !empty($business_name) ) {
                                echo $business_name; 
                            } 
                            ?>
                            <br>
                            <?php
                            if( !empty($position) ) {
                                echo $position; 
                            } 
                            ?>
                            &nbsp;&nbsp;&nbsp;
                            <?php
                            if( !empty($name) ) {
                                echo $name; 
                            }
                            ?>
                        </p>
                    </div>
                    <div class="content-wrapper sp">
                        <a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?>
                        </a>
                        <p class="company-name">
                            <?php
                            if( !empty($business_name) ) {
                                echo $business_name; 
                            }
                            ?>
                        </p>
                        <div class="name-category">
                            <?php
                            $post_cats = get_the_terms(get_the_ID(), 'interview-category');
                            if( $post_cats ) :
                                foreach($post_cats as $post_cat) :
                            ?>
                            <a class="category active" href="<?php echo get_term_link($post_cat); ?>"><?php echo $post_cat->name; ?></a>
                            <?php 
                                endforeach;
                            endif; ?>
                            <p class="name">
                                <?php
                                    if(!empty($position)) {
                                    echo $position; 
                                    }
                                ?>
                                &nbsp;&nbsp;&nbsp;
                                <?php
                                    if(!empty($name)) {
                                    echo $name; 
                                    }
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div> 
            <?php endwhile; ?>
            <?php else : ?>
            <p class="no-item desc">該当の投稿が存在しません。</p>
            <?php endif; ?> 
        </div>
        <div class="interview-pagination">
            <?php the_posts_pagination( array(
            'next_text' => '<i class="fa fa-angle-right" style="font-size:36px"></i>',
            'prev_text' => '<i class="fa fa-angle-left" style="font-size:36px"></i>',
        ) ); ?>
        </div>
        
    </div>
</main>

<?php get_footer(); ?>