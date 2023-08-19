<?php
/*
Template Name: Single News Template
*/

if ( ! defined( 'ABSPATH' ) ) exit;
get_header();

$paged = get_query_var('paged') ? get_query_var('paged') : 1;

?>

    <main id="column">
        <div class="page-status">
            <a class="home" href="<?php echo HOME; ?>">トップページ</a>
            <img src="<?php echo T_DIRE_URI; ?>/assets/img/goto-mark.png">
            <div class="this-page">転職コラム</div>
        </div>
        <div class="common-firstview">
            <h3 class="section-title">転職コラム</h3>
            <h5 class="eng-title">COLUMN</h5>
        </div>
        <div class="container">
            <p class="desc">
            CxO人材バンクが、これまでお会いしたCEOをはじめCxOの方々は約1万人超。<br>
            お会いする中で得られた、CxO人材になるためのキャリアの道筋や、皆さまから頂くよくある相談についてコラムで発信しております！<br>
            是非、今後のキャリアや転職活動のヒントとしてお役立てください。
            </p>
            <ul class="contents">
                <li class="content-item">
                    <div class="career-wrapper">
                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/half-female.png">
                        <div class="career-text">
                            <h3 class="title">
                                CxO人材研究所
                            </h3>
                            <p class="desc">
                            CxOとは何か、さらに各CxOの<br>
                            キャリアプランについて詳しく解説します。
                            </p>
                        </div>
                    </div>
                    <h3 class="article-text">
                        よく読まれている記事
                    </h3>
                    <?php
                        $args = [
                            'post_type' => 'research',
                            'post_status' => 'publish',
                            'paged' => $paged,
                            'posts_per_page' => 5,
                            'orderby' => 'post_date',
                            'order' => 'DESC'
                        ];
                        $tax_query = [];

                        if( $cat_slug ) {
                            $tax_query[] = [
                                'taxonomy' => 'research-category',
                                'field' => 'slug',
                                'terms' => $cat_slug
                            ];
                        }
                    
                        if ( !empty($tax_query) ) {
                            $args['tax_query'] = $tax_query;
                        }

                        $custom_query = new WP_Query( $args );
                    ?>
                    <ul class="articles pc">
                    <?php if( $custom_query->have_posts() ) : ?>
                        <?php 
                            $number = 1;
                            while( $custom_query->have_posts() ) : $custom_query->the_post(); 
                        ?>
                        <li class="article">
                            <div class="number">
                                <?php echo $number; ?>
                            </div>
                            <div class="title-wrap">
                                <a class="title" href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                                <p class="desc">
                                    <?php the_excerpt(); ?>
                                </p>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M17.5383 10.6635L11.9133 16.2885C11.7372 16.4647 11.4983 16.5636 11.2492 16.5636C11.0001 16.5636 10.7613 16.4647 10.5852 16.2885C10.409 16.1124 10.3101 15.8736 10.3101 15.6245C10.3101 15.3754 10.409 15.1365 10.5852 14.9604L14.6094 10.9378H3.125C2.87636 10.9378 2.6379 10.839 2.46209 10.6632C2.28627 10.4874 2.1875 10.2489 2.1875 10.0003C2.1875 9.75162 2.28627 9.51316 2.46209 9.33735C2.6379 9.16153 2.87636 9.06276 3.125 9.06276H14.6094L10.5867 5.03776C10.4106 4.86164 10.3117 4.62277 10.3117 4.3737C10.3117 4.12462 10.4106 3.88575 10.5867 3.70963C10.7628 3.53351 11.0017 3.43457 11.2508 3.43457C11.4999 3.43457 11.7387 3.53351 11.9148 3.70963L17.5398 9.33463C17.6273 9.42185 17.6966 9.52547 17.7438 9.63955C17.7911 9.75364 17.8153 9.87593 17.8152 9.99941C17.815 10.1229 17.7905 10.2451 17.743 10.3591C17.6955 10.4731 17.6259 10.5765 17.5383 10.6635Z" fill="#AEAEAE"/>
                            </svg>
                        </li>
                        <?php 
                            $number++;    
                        endwhile; ?>
                        <?php else : ?>
                        <p class="no-item desc">該当の投稿が存在しません。</p>
                        <?php endif; ?>   
                    </ul>
                    <ul class="articles sp">
                    <?php if( $custom_query->have_posts() ) : ?>
                        <?php 
                            $number = 1;
                            while( $custom_query->have_posts() ) : $custom_query->the_post(); 
                        ?>
                        <li class="article">
                            <div class="number-title">
                                <div class="number">
                                    <?php echo $number; ?>
                                </div>
                                <a class="title" href="<?php echo the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </div>
                            <div class="desc-arrow">
                                <p class="desc">
                                    <?php echo the_excerpt(); ?>
                                </p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M17.5383 10.6635L11.9133 16.2885C11.7372 16.4647 11.4983 16.5636 11.2492 16.5636C11.0001 16.5636 10.7613 16.4647 10.5852 16.2885C10.409 16.1124 10.3101 15.8736 10.3101 15.6245C10.3101 15.3754 10.409 15.1365 10.5852 14.9604L14.6094 10.9378H3.125C2.87636 10.9378 2.6379 10.839 2.46209 10.6632C2.28627 10.4874 2.1875 10.2489 2.1875 10.0003C2.1875 9.75162 2.28627 9.51316 2.46209 9.33735C2.6379 9.16153 2.87636 9.06276 3.125 9.06276H14.6094L10.5867 5.03776C10.4106 4.86164 10.3117 4.62277 10.3117 4.3737C10.3117 4.12462 10.4106 3.88575 10.5867 3.70963C10.7628 3.53351 11.0017 3.43457 11.2508 3.43457C11.4999 3.43457 11.7387 3.53351 11.9148 3.70963L17.5398 9.33463C17.6273 9.42185 17.6966 9.52547 17.7438 9.63955C17.7911 9.75364 17.8153 9.87593 17.8152 9.99941C17.815 10.1229 17.7905 10.2451 17.743 10.3591C17.6955 10.4731 17.6259 10.5765 17.5383 10.6635Z" fill="#AEAEAE"/>
                                </svg>
                            </div>
                        </li>
                        <?php 
                            $number++;    
                        endwhile; ?>
                        <?php else : ?>
                        <p class="no-item desc">該当の投稿が存在しません。</p>
                        <?php endif; ?>   
                    </ul>
                    <a class="btn-rightarrow" href="<?php echo HOME . 'research'; ?>">
                        全ての記事一覧
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M14.0306 8.53061L9.53063 13.0306C9.38973 13.1715 9.19863 13.2507 8.99938 13.2507C8.80012 13.2507 8.60902 13.1715 8.46813 13.0306C8.32723 12.8897 8.24807 12.6986 8.24807 12.4994C8.24807 12.3001 8.32723 12.109 8.46813 11.9681L11.6875 8.74999H2.5C2.30109 8.74999 2.11032 8.67097 1.96967 8.53032C1.82902 8.38967 1.75 8.1989 1.75 7.99999C1.75 7.80108 1.82902 7.61031 1.96967 7.46966C2.11032 7.329 2.30109 7.24999 2.5 7.24999H11.6875L8.46937 4.02999C8.32848 3.88909 8.24932 3.69799 8.24932 3.49874C8.24932 3.29948 8.32848 3.10838 8.46937 2.96749C8.61027 2.82659 8.80137 2.74744 9.00062 2.74744C9.19988 2.74744 9.39098 2.82659 9.53187 2.96749L14.0319 7.46749C14.1018 7.53726 14.1573 7.62016 14.1951 7.71142C14.2329 7.80269 14.2523 7.90052 14.2522 7.99931C14.252 8.09809 14.2324 8.19588 14.1944 8.28706C14.1564 8.37824 14.1007 8.46101 14.0306 8.53061Z" fill="#1BA2C5"/>
                        </svg>
                    </a>
                </li>
                <li class="content-item">
                    <div class="career-wrapper">
                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/half-male.png">
                        <div class="career-text">
                            <h3 class="title">
                                転職相談室
                            </h3>
                            <p class="desc">
                            転職の不安やお悩みに、 <br>
                            一問一答形式でお答えします。
                            </p>
                        </div>
                    </div>
                    <h3 class="article-text">
                        よく読まれている記事
                    </h3>
                    <?php
                        $args = [
                            'post_type' => 'consult',
                            'post_status' => 'publish',
                            'paged' => $paged,
                            'posts_per_page' => 5,
                            'orderby' => 'post_date',
                            'order' => 'DESC'
                        ];
                        $custom_query = new WP_Query( $args );
                    ?>
                    <ul class="articles">
                    <?php if( $custom_query->have_posts() ) : ?>
                        <?php 
                            $number = 1;
                            while( $custom_query->have_posts() ) : $custom_query->the_post(); 
                            ?>
                        <li class="article">
                            <div class="number">
                                <?php echo $number; ?>
                            </div>
                            <a class="title" href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M17.5383 10.6635L11.9133 16.2885C11.7372 16.4647 11.4983 16.5636 11.2492 16.5636C11.0001 16.5636 10.7613 16.4647 10.5852 16.2885C10.409 16.1124 10.3101 15.8736 10.3101 15.6245C10.3101 15.3754 10.409 15.1365 10.5852 14.9604L14.6094 10.9378H3.125C2.87636 10.9378 2.6379 10.839 2.46209 10.6632C2.28627 10.4874 2.1875 10.2489 2.1875 10.0003C2.1875 9.75162 2.28627 9.51316 2.46209 9.33735C2.6379 9.16153 2.87636 9.06276 3.125 9.06276H14.6094L10.5867 5.03776C10.4106 4.86164 10.3117 4.62277 10.3117 4.3737C10.3117 4.12462 10.4106 3.88575 10.5867 3.70963C10.7628 3.53351 11.0017 3.43457 11.2508 3.43457C11.4999 3.43457 11.7387 3.53351 11.9148 3.70963L17.5398 9.33463C17.6273 9.42185 17.6966 9.52547 17.7438 9.63955C17.7911 9.75364 17.8153 9.87593 17.8152 9.99941C17.815 10.1229 17.7905 10.2451 17.743 10.3591C17.6955 10.4731 17.6259 10.5765 17.5383 10.6635Z" fill="#AEAEAE"/>
                            </svg>
                        </li>
                        <?php 
                            $number++;
                            endwhile; 
                        ?>
                    <?php else : ?>
                        <p class="no-item desc">該当の投稿が存在しません。</p>
                    <?php endif; ?> 
                    </ul>
                    <a class="btn-rightarrow" href="<?php echo HOME . 'consult'; ?>">
                        全ての記事一覧
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M14.0306 8.53061L9.53063 13.0306C9.38973 13.1715 9.19863 13.2507 8.99938 13.2507C8.80012 13.2507 8.60902 13.1715 8.46813 13.0306C8.32723 12.8897 8.24807 12.6986 8.24807 12.4994C8.24807 12.3001 8.32723 12.109 8.46813 11.9681L11.6875 8.74999H2.5C2.30109 8.74999 2.11032 8.67097 1.96967 8.53032C1.82902 8.38967 1.75 8.1989 1.75 7.99999C1.75 7.80108 1.82902 7.61031 1.96967 7.46966C2.11032 7.329 2.30109 7.24999 2.5 7.24999H11.6875L8.46937 4.02999C8.32848 3.88909 8.24932 3.69799 8.24932 3.49874C8.24932 3.29948 8.32848 3.10838 8.46937 2.96749C8.61027 2.82659 8.80137 2.74744 9.00062 2.74744C9.19988 2.74744 9.39098 2.82659 9.53187 2.96749L14.0319 7.46749C14.1018 7.53726 14.1573 7.62016 14.1951 7.71142C14.2329 7.80269 14.2523 7.90052 14.2522 7.99931C14.252 8.09809 14.2324 8.19588 14.1944 8.28706C14.1564 8.37824 14.1007 8.46101 14.0306 8.53061Z" fill="#1BA2C5"/>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </main>

<?php get_footer();?>