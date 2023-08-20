<?php get_header(); ?>

<main id="single-interview">
    <div class="page-status">
        <a class="home" href="<?php echo HOME; ?>">トップページ</a>
        <img src="<?php echo T_DIRE_URI; ?>/assets/img/goto-mark.png">
        <div class="this-page">CxOインタビュー</div>
    </div>

    <div class="container">
        <div class="part1">
            <h2 class="subtitle pc">
                <?php the_title();?>
            </h2>
            <?php
            $header_text=get_field("header_text");
            ?>
            <p class="desc pc">
                <?php echo $header_text; ?>
            </p>
            <?php
            $videos = get_field("youtube_urls");
            ?>
            <?php if( !empty($videos ) ) : ?>
                <?php
                $part1_url = $videos['video_part1'];
                $part2_url = $videos['video_part2'];
                ?>
            <div class="video-wrapper">
                <div class="title">
                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/play-mark.png" class="play-mark">
                    CxOの履歴書チャンネル動画
                </div>
                <ul class="videos">
                    <?php if( !empty($part1_url) ) : ?>
                    <li>
                        <p>前編</p>
                        <iframe src="<?php echo $part1_url; ?>">
                        </iframe>
                    </li>
                    <?php endif; ?>
                    <?php if( !empty($part2_url) ) : ?>
                    <li>
                        <p>後編</p>
                        <iframe src="<?php echo $part2_url; ?>">
                        </iframe>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
            <?php endif; ?>
        </div>
        <?php
        $profile = get_field("profile");
        $business_name = $profile['business_name'];
        $performer = $profile['performer'];
        $position = $performer['position'];
        $name = $performer['name'];
        $birthday = $profile['birthday'];
        $province = $profile['province'];
        ?>
        <div class="profile">
            <div class="label">
                プロフィール
            </div>
            <div class="wrapper">
                <div class="left-wrapper">
                    <div class="content-wrapper">   
                        <div class="column">
                            <div class="title">企業名</div>
                            <div class="content"><?php echo $business_name; ?></div>
                        </div>
                        <div class="column">
                            <div class="title">出演者</div>
                            <div class="content"><?php
                            $post_cats = get_the_terms(get_the_ID(), 'interview-category');
                            if( $post_cats ) :
                                foreach($post_cats as $post_cat) :
                                ?>
                                <span><?php echo $post_cat->name; ?></span>
                                <?php
                                endforeach;
                            endif;
                                ?>
                                <p class="desc position"><?php echo $position; ?></p>
                                <p class="desc name"><?php echo $name; ?></p>
                            </div>
                        </div>
                        <div class="column">
                            <div class="title">生年月日</div>
                            <div class="content"><?php echo $birthday; ?></div>
                        </div>
                        <div class="column">
                            <div class="title">出身地</div>
                            <div class="content"><?php echo $province; ?></div>
                        </div>
                    </div>
                </div>
                <?php if( have_rows('theory') ): ?>
                <div class="right-wrapper">
                    <div class="content-wrapper">
                        <h4 class="title">西脇流CxOの仕事論</h4>
                        <?php 
                        $number = 1;
                        while( have_rows('theory') ) : the_row(); 
                        $theory_item = get_sub_field('theory-text');
                        ?>
                        <p class="column"><span><?php echo $number; ?></span><?php echo $theory_item; ?></p>
                        <?php 
                        $number++;
                        endwhile;
                        ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <?php
        $articles = get_field("interview_articles");
        $childhood_rows = $articles['childhood'];
        $student_rows = $articles['student'];
        $adult_rows = $articles['adult'];
        ?>
        <div class="articles">
            <div class="label">インタビュー記事</div>
            <?php if( $childhood_rows ): ?>
            <div class="eara">
                <div class="sub-title">幼少期</div>
                <?php  foreach( $childhood_rows as $row ) : ?>
                <div class="question-wrapper">
                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/features108.png">
                    <div class="q-message">
                        <div class="triangle-left"></div>
                        <h3 class="question desc"><?php echo $row["question"]; ?></h3>
                    </div>
                </div>
                <div class="answer-wrapper">
                    <div class="a-message">
                        <div class="triangle-right"></div>
                        <p class="answer desc"><?php echo $row["answer"]; ?></p>
                    </div>
                    <?php if( has_post_thumbnail() ): ?>
                    <img class="thumb" src="<?php echo get_the_post_thumbnail_url(); ?>">
                    <?php else: ?>
                    <img class="thumb" src="<?php echo catch_that_image(); ?>">
                    <?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
            <?php if( $student_rows ): ?>
                <div class="eara">
                <div class="sub-title">学生時代</div>
                <?php  foreach( $childhood_rows as $row ) : ?>
                <div class="question-wrapper">
                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/features108.png">
                    <div class="q-message">
                        <div class="triangle-left"></div>
                        <h3 class="question desc"><?php echo $row["question"]; ?></h3>
                    </div>
                </div>
                <div class="answer-wrapper">
                    <div class="a-message">
                        <div class="triangle-right"></div>
                        <p class="answer desc"><?php echo $row["answer"]; ?></p>
                    </div>
                    <?php if( has_post_thumbnail() ): ?>
                    <img class="thumb" src="<?php echo get_the_post_thumbnail_url(); ?>">
                    <?php else: ?>
                    <img class="thumb" src="<?php echo catch_that_image(); ?>">
                    <?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
            <?php if( $adult_rows ): ?>
                <div class="eara">
                <div class="sub-title">社会人時代</div>
                <?php  foreach( $childhood_rows as $row ) : ?>
                <div class="question-wrapper">
                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/features108.png">
                    <div class="q-message">
                        <div class="triangle-left"></div>
                        <h3 class="question desc"><?php echo $row["question"]; ?></h3>
                    </div>
                </div>
                <div class="answer-wrapper">
                    <div class="a-message">
                        <div class="triangle-right"></div>
                        <p class="answer desc"><?php echo $row["answer"]; ?></p>
                    </div>
                    <?php if( has_post_thumbnail() ): ?>
                    <img class="thumb" src="<?php echo get_the_post_thumbnail_url(); ?>">
                    <?php else: ?>
                    <img class="thumb" src="<?php echo catch_that_image(); ?>">
                    <?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>

            <p class="thanks-word desc"><?php echo get_field("footer_text"); ?></p>
        </div>
        <!-- <div class="private-info">
            <div class="label">西脇さんのパーソナルデータ</div>
            <div class="wrapper">
                <div class="column">
                    <h4 class="title">
                        趣味・特技
                    </h4>
                    <p class="content">
                        ロードバイク（含むロードレース観戦）、ダーツ（含むプロダーツPDC観戦）、ベース演奏、バスケNBA観戦など
                    </p>
                </div>
                <div class="column">
                    <h4 class="title">
                        よく聞く曲
                    </h4>
                    <p class="content">
                        Red Hot Chili Peppers:Can’t Stop / Mr.BIG:Green-Tinted Sixties Mind /澤野弘之:UNICORN
                    </p>
                </div>
                <div class="column">
                    <h4 class="title">
                        休日の過ごし方
                    </h4>
                    <p class="content">
                        外出が難しい状況なので、自宅でベース演奏やNBA観戦が多くなっている
                    </p>
                </div>
                <div class="column">
                    <h4 class="title">
                        好きな食べ物
                    </h4>
                    <p class="content">
                        餃子と焼肉
                    </p>
                </div>
                <div class="column">
                    <h4 class="title">
                        苦手な食べ物
                    </h4>
                    <p class="content">
                        生野菜、特にきゅうりは天敵。マヨネーズとか・・・好き嫌い多いです
                    </p>
                </div>
                <div class="column">
                    <h4 class="title">
                        行きつけの飲食店
                    </h4>
                    <p class="content">
                        焼肉赤門（千葉県ローカルの名店）
                    </p>
                </div>
                <div class="column">
                    <h4 class="title">
                        尊敬する人
                    </h4>
                    <p class="content">
                        小川孔輔先生（大学のゼミでガチで学ぶ楽しさを教えていただいた）
                    </p>
                </div>
                <div class="column">
                    <h4 class="title">
                        おすすめ書籍
                    </h4>
                    <p class="content">
                        シン・デジタル教育 松林弘治著（かんき出版）：著者の松林さんと某プロジェクトで楽しくご一緒しました
                    </p>
                </div>
                <div class="column">
                    <h4 class="title">
                        座右の銘
                    </h4>
                    <p class="content">
                        日々自己新記録
                    </p>
                </div>
                <div class="column">
                    <h4 class="title">
                        若者へのメッセージ
                    </h4>
                    <p class="content">
                        自分が関わる仕事で誰かの何かが変わっていくって素晴らしいと思います。誰かのためになれる自分って素敵やん。それから、なんでも気合でどうにかできますよ、本当に。
                    </p>
                </div>
            </div>
        </div> -->
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

        <?php
        $args = array(
            'post_type'         => 'interview',
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

        <a class="btn-leftarrow" href="<?php echo HOME . 'interview'; ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                <path d="M2.46172 10.6631L8.08672 16.2881C8.26284 16.4642 8.50171 16.5631 8.75078 16.5631C8.99985 16.5631 9.23872 16.4642 9.41484 16.2881C9.59096 16.1119 9.68991 15.8731 9.68991 15.624C9.68991 15.3749 9.59096 15.136 9.41484 14.9599L5.39062 10.9373H16.875C17.1236 10.9373 17.3621 10.8385 17.5379 10.6627C17.7137 10.4869 17.8125 10.2484 17.8125 9.99977C17.8125 9.75113 17.7137 9.51267 17.5379 9.33686C17.3621 9.16104 17.1236 9.06227 16.875 9.06227H5.39062L9.41328 5.03727C9.5894 4.86115 9.68834 4.62228 9.68834 4.37321C9.68834 4.12414 9.5894 3.88527 9.41328 3.70915C9.23716 3.53303 8.99829 3.43408 8.74922 3.43408C8.50015 3.43408 8.26128 3.53303 8.08516 3.70915L2.46016 9.33415C2.37274 9.42136 2.30342 9.52498 2.25616 9.63907C2.20891 9.75315 2.18466 9.87544 2.18481 9.99892C2.18495 10.1224 2.20949 10.2446 2.25701 10.3586C2.30453 10.4726 2.3741 10.576 2.46172 10.6631Z" fill="#0099BD"/>
                </svg>
                インタビュー記事一覧へ
        </a>
    </div>
</main>

<?php get_footer(); ?>