<?php

	/*
	Template Name: FrontPage
	*/

	if ( ! defined( 'ABSPATH' ) ) exit;
	get_header();

?>

    <main id="main">
        <section class="mainview">
            <div class="introduction">
                <h3 class="top-text">CxO人材の転職なら</h3>
                <h1 class="top-title">CxO人材バンク</h1>
                <p class="desc-top top1">
                <!-- 自分を高く評価してくれる<br> -->
                <span>上場企業・上場準備中企業の<br class="sp"> 経営層として</span><br>
                さらなる企業の成長に携わる
                </p>
                <!-- <p class="desc-top top2">自分のキャリア史上、最も高い評価と最も高いステージへ</p> -->
                <ul class="contact-btns pc">
                    <li>
                        <a class="btn long-term" href="<?php echo HOME . 'pre-entry'; ?>">
                            <span>中長期のキャリア相談をする</span>
                        </a>    
                    </li>
                    <li>
                        <a class="btn job-consult" href="<?php echo HOME . 'entry'; ?>">
                            <span>具体的な転職相談をする</span>
                        </a>    
                    </li>
                </ul>
                <ul class="contact-btns sp">
                    <li>
                        <a class="btn long-term" href="<?php echo HOME . 'pre-entry'; ?>">
                            <span>中長期のキャリア相談</span>
                        </a>    
                    </li>
                    <li>
                        <a class="btn job-consult" href="<?php echo HOME . 'entry'; ?>">
                            <span>具体的な転職相談</span>
                        </a>    
                    </li>
                </ul>
                <a class="btn-rightarrow" href="<?php echo HOME . 'consultsdiffer'; ?>">
                    2つの相談の違いについて
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M14.0306 8.53061L9.53063 13.0306C9.38973 13.1715 9.19863 13.2507 8.99938 13.2507C8.80012 13.2507 8.60902 13.1715 8.46813 13.0306C8.32723 12.8897 8.24807 12.6986 8.24807 12.4994C8.24807 12.3001 8.32723 12.109 8.46813 11.9681L11.6875 8.74999H2.5C2.30109 8.74999 2.11032 8.67097 1.96967 8.53032C1.82902 8.38967 1.75 8.1989 1.75 7.99999C1.75 7.80108 1.82902 7.61031 1.96967 7.46966C2.11032 7.329 2.30109 7.24999 2.5 7.24999H11.6875L8.46937 4.02999C8.32848 3.88909 8.24932 3.69799 8.24932 3.49874C8.24932 3.29948 8.32848 3.10838 8.46937 2.96749C8.61027 2.82659 8.80137 2.74744 9.00062 2.74744C9.19988 2.74744 9.39098 2.82659 9.53187 2.96749L14.0319 7.46749C14.1018 7.53726 14.1573 7.62016 14.1951 7.71142C14.2329 7.80269 14.2523 7.90052 14.2522 7.99931C14.252 8.09809 14.2324 8.19588 14.1944 8.28706C14.1564 8.37824 14.1007 8.46101 14.0306 8.53061Z" fill="#1BA2C5"/>
                    </svg>
                </a>
                <div class="goto-channel sp">
                    <div class="play-wrapper">
                        <a class="btn-play" href="https://www.youtube.com/channel/UCimlVSKM9Y4cUZcTK4C-RIw" target="_blank">
                            <img src="<?php echo T_DIRE_URI; ?>/assets/img/red-play.png">
                            <span>CxOの履歴書チャンネル配信中</span>
                        </a>
                    </div>
                    <div class="btn-desc">本気でキャリアアップを目指す人へ</div>
                </div>
            </div>
            <video playsinline loop muted autoplay id="myVideo">
                <source src="<?php echo T_DIRE_URI; ?>/assets/img/background.mp4" type="video/mp4">
            </video>
            <!-- <img src="/assets/img/background-sp.gif" class="top-background sp"> -->
            <a href="https://www.youtube.com/channel/UCimlVSKM9Y4cUZcTK4C-RIw" target="_blank"><img class="mans-couple pc" src="<?php echo T_DIRE_URI; ?>/assets/img/mans-couple.png" alt="CxO人材バンク"></a>
            <div class="section-title"></div>
        </section>
        
        <section class="features">
            <div class="title-wrapper">
                <div class="title-text">Features</div>
                <h2 class="main-title pc">CxO人材バンクの特長</h2>
            </div>
            <div class="container pc">
                <div class="feature-wrapper type1">
                    <div class="image-wrapper">
                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/feature001.png">
                        <p class="desc">↑ 転職希望者の情報をまとめ、経営者に直接提案をしています。</p>
                    </div>
                    <div class="content-wrapper">
                        <h4 class="first-title">CxO人材バンクの特長<span>01</span></h4>
                        <h3 class="second-title">
                        成長真っ只中の上場企業、上場準備中企業の経営者からオファーがもらえる
                        </h3>
                        <p class="desc">
                        CxO人材バンクは上場企業・上場準備中企業のIPO・経営戦略やIR活動に関する支援を通じて、経営者、経営層との深い繋がりを築いてきました。<br>経営者本人に転職希望者の提案をしますので、彼らからの面談オファーがもらえます。
                        </p>
                    </div>
                </div>
                <div class="feature-wrapper type2">
                    <div class="content-wrapper">
                        <h4 class="first-title">CxO人材バンクの特長<span>02</span></h4>
                        <h3 class="second-title">
                        年収800万円以上の、経営に携わる「CxOポジション」を中心にご紹介
                        </h3>
                        <p class="desc">
                        CxO人材バンクがご紹介するのは、いずれも経営の中枢を担う「CxOポジション」が中心となります。<br>上場企業・上場準備中企業の経営者にとって、自社の成長に欠かせない存在であるため、スキル、カルチャーなど様々な面から、マッチする企業をご紹介します。
                        </p>
                    </div>
                    <div class="image-wrapper">
                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/feature002.png">
                    </div>
                </div>
                <div class="feature-wrapper type1">
                    <div class="image-wrapper">
                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/feature003.png">
                    </div>
                    <div class="content-wrapper">
                        <h4 class="first-title">CxO人材バンクの特長<span>03</span></h4>
                        <h3 class="second-title">
                        コンサルタントが選考に同席することでその場の状況に応じて、適切なフォローアップが可能</h3>
                        <p class="desc">
                        コンサルタントは、企業との選考面接※には原則同席します。<br>同席することで、選考の雰囲気や双方の温度感がダイレクトにわかり、その後のフォローアップの精度が上がります。<br>※企業から許可された場合、1次面接とオファー面談には原則同席します。
                        </p>
                    </div>
                </div>
                <div class="feature-wrapper type2">
                    <div class="content-wrapper">
                        <h4 class="first-title">CxO人材バンクの特長<span>04</span></h4>
                        <h3 class="second-title">
                        単なる求人紹介や情報提供だけではなくオフラインの交流などを通じた中長期でのお付き合い
                        </h3>
                        <p class="desc">
                        CxO人材バンクは、単に求人案件を紹介するだけでなく、コンサルタントとオフラインで交流できる機会も創っており、皆さまとの表面的ではない繋がりや、双方の理解を深めることを大切にしています。<br>また、CxO人材の求人はタイミングやご縁も大きいものですので、短期的なご支援ではなく、中長期でのお付き合いをさせて頂いております。
                        </p>
                    </div>
                    <div class="image-wrapper">
                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/feature004.png">
                        <p class="desc">↑候補者との交流会「Sweet 19 Blues」の第1回目</p>
                    </div>
                </div>
                <a class="btn-rightarrow" href="<?php echo HOME . 'features'; ?>">
                    CxO人材バンクの特長について
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M14.0306 8.53061L9.53063 13.0306C9.38973 13.1715 9.19863 13.2507 8.99938 13.2507C8.80012 13.2507 8.60902 13.1715 8.46813 13.0306C8.32723 12.8897 8.24807 12.6986 8.24807 12.4994C8.24807 12.3001 8.32723 12.109 8.46813 11.9681L11.6875 8.74999H2.5C2.30109 8.74999 2.11032 8.67097 1.96967 8.53032C1.82902 8.38967 1.75 8.1989 1.75 7.99999C1.75 7.80108 1.82902 7.61031 1.96967 7.46966C2.11032 7.329 2.30109 7.24999 2.5 7.24999H11.6875L8.46937 4.02999C8.32848 3.88909 8.24932 3.69799 8.24932 3.49874C8.24932 3.29948 8.32848 3.10838 8.46937 2.96749C8.61027 2.82659 8.80137 2.74744 9.00062 2.74744C9.19988 2.74744 9.39098 2.82659 9.53187 2.96749L14.0319 7.46749C14.1018 7.53726 14.1573 7.62016 14.1951 7.71142C14.2329 7.80269 14.2523 7.90052 14.2522 7.99931C14.252 8.09809 14.2324 8.19588 14.1944 8.28706C14.1564 8.37824 14.1007 8.46101 14.0306 8.53061Z" fill="#1BA2C5"/>
                    </svg>
                </a>
            </div>
            <div class="container sp">
                <div class="feature-wrapper type1">
                    <div class="content-wrapper">
                        <h4 class="first-title">CxO人材バンクの特長<span>01</span></h4>
                        <h3 class="second-title">
                        成長真っ只中の上場企業、上場準備中企業の経営者からオファーがもらえる
                        </h3>
                        <p class="desc">
                        CxO人材バンクは上場企業・上場準備中企業のIPO・経営戦略やIR活動に関する支援を通じて、経営者、経営層との深い繋がりを築いてきました。<br>経営者本人に転職希望者の提案をしますので、彼らからの面談オファーがもらえます。
                        </p>
                    </div>
                    <div class="image-wrapper">
                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/feature001.png">
                        <p class="desc">↑ 転職希望者の情報をまとめ、経営者に直接提案をしています。</p>
                    </div>
                </div>
                <div class="feature-wrapper type2">
                    <div class="content-wrapper">
                        <h4 class="first-title">CxO人材バンクの特長<span>02</span></h4>
                        <h3 class="second-title">
                        年収800万円以上の、経営に携わる「CxOポジション」を中心にご紹介
                        </h3>
                        <p class="desc">
                        CxO人材バンクがご紹介するのは、いずれも経営の中枢を担う「CxOポジション」が中心となります。<br>上場企業・上場準備中企業の経営者にとって、自社の成長に欠かせない存在であるため、スキル、カルチャーなど様々な面から、マッチする企業をご紹介します。
                        </p>
                    </div>
                    <div class="image-wrapper">
                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/feature002.png">
                    </div>
                </div>
                <div class="feature-wrapper type1">
                    <div class="content-wrapper">
                        <h4 class="first-title">CxO人材バンクの特長<span>03</span></h4>
                        <h3 class="second-title">コンサルタントが選考に同席することでその場の状況に応じて、適切なフォローアップが可能</h3>
                        <p class="desc">
                        コンサルタントは、企業との選考面接※には原則同席します。<br>同席することで、選考の雰囲気や双方の温度感がダイレクトにわかり、その後のフォローアップの精度が上がります。<br>※企業から許可された場合、1次面接とオファー面談には原則同席します。
                        </p>
                    </div>
                    <div class="image-wrapper">
                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/feature003.png">
                    </div>
                </div>
                <div class="feature-wrapper type2">
                    <div class="content-wrapper">
                        <h4 class="first-title">CxO人材バンクの特長<span>04</span></h4>
                        <h3 class="second-title">
                        単なる求人紹介や情報提供だけではなくオフラインの交流などを通じた中長期でのお付き合い
                        </h3>
                        <p class="desc">
                        CxO人材バンクは、単に求人案件を紹介するだけでなく、コンサルタントとオフラインで交流できる機会も創っており、皆さまとの表面的ではない繋がりや、双方の理解を深めることを大切にしています。<br>また、CxO人材の求人はタイミングやご縁も大きいものですので、短期的なご支援ではなく、中長期でのお付き合いをさせて頂いております。
                        </p>
                    </div>
                    <div class="image-wrapper">
                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/feature004.png">
                        <p class="desc">↑候補者との交流会「Sweet 19 Blues」の第1回目</p>
                    </div>
                </div>
                <a class="btn-rightarrow" href="<?php echo HOME . 'features'; ?>">
                    CxO人材バンクの特長について
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M14.0306 8.53061L9.53063 13.0306C9.38973 13.1715 9.19863 13.2507 8.99938 13.2507C8.80012 13.2507 8.60902 13.1715 8.46813 13.0306C8.32723 12.8897 8.24807 12.6986 8.24807 12.4994C8.24807 12.3001 8.32723 12.109 8.46813 11.9681L11.6875 8.74999H2.5C2.30109 8.74999 2.11032 8.67097 1.96967 8.53032C1.82902 8.38967 1.75 8.1989 1.75 7.99999C1.75 7.80108 1.82902 7.61031 1.96967 7.46966C2.11032 7.329 2.30109 7.24999 2.5 7.24999H11.6875L8.46937 4.02999C8.32848 3.88909 8.24932 3.69799 8.24932 3.49874C8.24932 3.29948 8.32848 3.10838 8.46937 2.96749C8.61027 2.82659 8.80137 2.74744 9.00062 2.74744C9.19988 2.74744 9.39098 2.82659 9.53187 2.96749L14.0319 7.46749C14.1018 7.53726 14.1573 7.62016 14.1951 7.71142C14.2329 7.80269 14.2523 7.90052 14.2522 7.99931C14.252 8.09809 14.2324 8.19588 14.1944 8.28706C14.1564 8.37824 14.1007 8.46101 14.0306 8.53061Z" fill="#1BA2C5"/>
                    </svg>
                </a>
            </div>
        </section>

        <section class="community">
            <div class="title-wrapper">
                <div class="title-text">Community</div>
                <h2 class="main-title">CxO人材バンクの<br class="sp">メディア＆コミュニティ</h2>
                <img src="<?php echo T_DIRE_URI; ?>/assets/img/female-alone.png">
            </div>
            <div class="container">
                <p class="desc">
                CxO人材バンクは、単に求人案件を紹介するだけでなく、コンサルタントとオフラインで交流できる機会も創っており、皆さまとの表面的ではない繋がりや、双方の理解を深めることを大切にしています。<br>また、CxO人材の求人はタイミングやご縁も大きいものですので、短期的なご支援ではなく、中長期でのお付き合いをさせて頂いております。
                </p>
            </div>
            <div class="top-community slider-wrapper">
                <div class="slider-item">
                    <div class="item-wrapper">
                        <img classs="thumb" src="<?php echo T_DIRE_URI; ?>/assets/img/community001.png">
                        <div class="content-wrapper">
                            <h4 class="title">Next IPO Club</h4>
                            <p class="content">
                            本気でIPOを実現したい企業のための会員制コミュニティ
                            </p>
                        </div>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="item-wrapper">
                        <img classs="thumb" src="<?php echo T_DIRE_URI; ?>/assets/img/community002.png">
                        <div class="content-wrapper">
                            <h4 class="title">上場企業倶楽部</h4>
                            <p class="content">
                                国内唯一の“上場企業の社長・役員”に特化した学びのコミュニティ
                            </p>
                        </div>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="item-wrapper">
                        <img classs="thumb" src="<?php echo T_DIRE_URI; ?>/assets/img/community003.png">
                        <div class="content-wrapper">
                            <h4 class="title">Sweet 19 Blues</h4>
                            <p class="content">
                            CxO人材バンク経由で転職された方々、転職支援中の方々をお招きして、毎月19日に開催される交流会（金曜日・土日祝は除く）
                            </p>
                        </div>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="item-wrapper">
                        <img classs="thumb" src="<?php echo T_DIRE_URI; ?>/assets/img/community004.png">
                        <div class="content-wrapper">
                            <h4 class="title">Japan Stock Channel</h4>
                            <p class="content">
                                上場企業の社長にビジネスモデルと決算情報をQ＆Aで深堀りしていく情報番組
                            </p>
                        </div>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="item-wrapper">
                        <img classs="thumb" src="<?php echo T_DIRE_URI; ?>/assets/img/community005.png">
                        <div class="content-wrapper">
                            <h4 class="title">CxOの履歴書チャンネル</h4>
                            <p class="content">
                            上場企業や上場準備中企業でご活躍している経営者やCxOに、これまでのキャリアや仕事論についてMCが深堀りしていく番組
                            </p>
                        </div>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="item-wrapper">
                        <img classs="thumb" src="<?php echo T_DIRE_URI; ?>/assets/img/community006.png">
                        <div class="content-wrapper">
                            <h4 class="title">IR戦略事例セミナー</h4>
                            <p class="content">
                            著名な上場企業社長や機関投資家をゲストに迎えた、IR戦略についてのセミナー
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="btn-rightarrow" href="<?php echo HOME . 'features/media'; ?>">
                メディア＆コミュニティについて
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M14.0306 8.53061L9.53063 13.0306C9.38973 13.1715 9.19863 13.2507 8.99938 13.2507C8.80012 13.2507 8.60902 13.1715 8.46813 13.0306C8.32723 12.8897 8.24807 12.6986 8.24807 12.4994C8.24807 12.3001 8.32723 12.109 8.46813 11.9681L11.6875 8.74999H2.5C2.30109 8.74999 2.11032 8.67097 1.96967 8.53032C1.82902 8.38967 1.75 8.1989 1.75 7.99999C1.75 7.80108 1.82902 7.61031 1.96967 7.46966C2.11032 7.329 2.30109 7.24999 2.5 7.24999H11.6875L8.46937 4.02999C8.32848 3.88909 8.24932 3.69799 8.24932 3.49874C8.24932 3.29948 8.32848 3.10838 8.46937 2.96749C8.61027 2.82659 8.80137 2.74744 9.00062 2.74744C9.19988 2.74744 9.39098 2.82659 9.53187 2.96749L14.0319 7.46749C14.1018 7.53726 14.1573 7.62016 14.1951 7.71142C14.2329 7.80269 14.2523 7.90052 14.2522 7.99931C14.252 8.09809 14.2324 8.19588 14.1944 8.28706C14.1564 8.37824 14.1007 8.46101 14.0306 8.53061Z" fill="#1BA2C5"/>
                </svg>
            </a>
        </section>

        <section class="news">
            <div class="title-wrapper">
                <div class="title-text">News</div>
                <h2 class="main-title">CxO人材バンクNEWS</h2>
            </div>
            <div class="container">
                <?php
                    $args = [
                        'post_type' => 'news',
                        'post_status' => 'publish',
                        'paged' => $paged,
                        'posts_per_page' => 5,
                        'orderby' => 'post_date',
                        'order' => 'DESC'
                    ];
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
                </ul>
            </div>
            <a class="btn-rightarrow" href="<?php echo HOME . 'news'; ?>">
                ニュース記事一覧
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M14.0306 8.53061L9.53063 13.0306C9.38973 13.1715 9.19863 13.2507 8.99938 13.2507C8.80012 13.2507 8.60902 13.1715 8.46813 13.0306C8.32723 12.8897 8.24807 12.6986 8.24807 12.4994C8.24807 12.3001 8.32723 12.109 8.46813 11.9681L11.6875 8.74999H2.5C2.30109 8.74999 2.11032 8.67097 1.96967 8.53032C1.82902 8.38967 1.75 8.1989 1.75 7.99999C1.75 7.80108 1.82902 7.61031 1.96967 7.46966C2.11032 7.329 2.30109 7.24999 2.5 7.24999H11.6875L8.46937 4.02999C8.32848 3.88909 8.24932 3.69799 8.24932 3.49874C8.24932 3.29948 8.32848 3.10838 8.46937 2.96749C8.61027 2.82659 8.80137 2.74744 9.00062 2.74744C9.19988 2.74744 9.39098 2.82659 9.53187 2.96749L14.0319 7.46749C14.1018 7.53726 14.1573 7.62016 14.1951 7.71142C14.2329 7.80269 14.2523 7.90052 14.2522 7.99931C14.252 8.09809 14.2324 8.19588 14.1944 8.28706C14.1564 8.37824 14.1007 8.46101 14.0306 8.53061Z" fill="#1BA2C5"/>
                </svg>
            </a>
        </section>

        <section class="case">
            <p class="female"><img src="<?php echo T_DIRE_URI; ?>/assets/img/female1.png"></p>
            <div class="title-wrapper">
                <div class="title-text">Case</div>
                <h2 class="main-title">CxO人材への転職成功事例</h2>
            </div>
            <p class="desc pc">
            紹介先となる企業は、業界内で今、まさにステージを上げて成長する企業です。<br>経営層としてご活躍するためのご転職を実現しています。
            </p>
            <?php
                $args = [
                    'post_type' => 'case',
                    'post_status' => 'publish',
                    'paged' => $paged,
                    'posts_per_page' => 8,
                    'orderby' => 'post_date',
                    'order' => 'DESC'
                ];
                $custom_query = new WP_Query( $args );
            ?>
            <?php if( $custom_query->have_posts() ):
            ?>
            <ul class="top-case-slider1 item-wrapper">
            <?php while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
                <li class="item">
                    <div class="content-wrapper">
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
                        <img class="down-mark sp" src="<?php echo T_DIRE_URI; ?>/assets/img/down-mark-sp.png">
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
                    </div>
                </li>
            <?php endwhile; ?>
            </ul>
            <?php endif; ?>
            <a class="btn-rightarrow" href="<?php echo HOME . 'case'; ?>">
                転職成功事例一覧
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M14.0306 8.53061L9.53063 13.0306C9.38973 13.1715 9.19863 13.2507 8.99938 13.2507C8.80012 13.2507 8.60902 13.1715 8.46813 13.0306C8.32723 12.8897 8.24807 12.6986 8.24807 12.4994C8.24807 12.3001 8.32723 12.109 8.46813 11.9681L11.6875 8.74999H2.5C2.30109 8.74999 2.11032 8.67097 1.96967 8.53032C1.82902 8.38967 1.75 8.1989 1.75 7.99999C1.75 7.80108 1.82902 7.61031 1.96967 7.46966C2.11032 7.329 2.30109 7.24999 2.5 7.24999H11.6875L8.46937 4.02999C8.32848 3.88909 8.24932 3.69799 8.24932 3.49874C8.24932 3.29948 8.32848 3.10838 8.46937 2.96749C8.61027 2.82659 8.80137 2.74744 9.00062 2.74744C9.19988 2.74744 9.39098 2.82659 9.53187 2.96749L14.0319 7.46749C14.1018 7.53726 14.1573 7.62016 14.1951 7.71142C14.2329 7.80269 14.2523 7.90052 14.2522 7.99931C14.252 8.09809 14.2324 8.19588 14.1944 8.28706C14.1564 8.37824 14.1007 8.46101 14.0306 8.53061Z" fill="#1BA2C5"/>
                </svg>
            </a>
        </section>

        <section class="interview">
            <div class="title-wrapper">
                <div class="title-text">Interview</div>
                <h2 class="main-title">CxOインタビュー</h2>
            </div>
            <div class="container">
                <h3 class="sub-title pc">
                これまでお会いした経営者やCxOは1万人超え<br>彼らに共通する仕事とキャリアをインタビュー
                </h3>
                <p class="desc">
                上場企業や上場準備中企業で活躍する経営者やCxOに“キャリア”や”仕事論”をお聞きしながら、転職のタイミングや意思決定のプロセスなどをインタビューしました。<br>「CxOとして活躍したい！」「本気でキャリアアップを目指したい！」という方に役立つ記事になっていますので、ぜひご覧ください。
                </p>
            </div>
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
            <div class="slider-wrapper">
            <?php if( $custom_query->have_posts() ) : ?>
                <?php while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
                <div class="slider-item">
                    <div class="item-wrapper">
                    <?php if( has_post_thumbnail() ): ?>
                        <img classs="thumb" src="<?php echo get_the_post_thumbnail_url(); ?>">
                    <?php else: ?>
                        <img classs="thumb" src="<?php echo catch_that_image(); ?>">
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
            </div>            
            <?php endif; ?>
            <a class="btn-rightarrow" href="<?php echo HOME . 'interview'; ?>">
                インタビュー記事一覧
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M14.0306 8.53061L9.53063 13.0306C9.38973 13.1715 9.19863 13.2507 8.99938 13.2507C8.80012 13.2507 8.60902 13.1715 8.46813 13.0306C8.32723 12.8897 8.24807 12.6986 8.24807 12.4994C8.24807 12.3001 8.32723 12.109 8.46813 11.9681L11.6875 8.74999H2.5C2.30109 8.74999 2.11032 8.67097 1.96967 8.53032C1.82902 8.38967 1.75 8.1989 1.75 7.99999C1.75 7.80108 1.82902 7.61031 1.96967 7.46966C2.11032 7.329 2.30109 7.24999 2.5 7.24999H11.6875L8.46937 4.02999C8.32848 3.88909 8.24932 3.69799 8.24932 3.49874C8.24932 3.29948 8.32848 3.10838 8.46937 2.96749C8.61027 2.82659 8.80137 2.74744 9.00062 2.74744C9.19988 2.74744 9.39098 2.82659 9.53187 2.96749L14.0319 7.46749C14.1018 7.53726 14.1573 7.62016 14.1951 7.71142C14.2329 7.80269 14.2523 7.90052 14.2522 7.99931C14.252 8.09809 14.2324 8.19588 14.1944 8.28706C14.1564 8.37824 14.1007 8.46101 14.0306 8.53061Z" fill="#1BA2C5"/>
                </svg>
            </a>
        </section>

        <section class="flow">
            <div class="title-wrapper">
                <div class="title-text">Flow</div>
                <h2 class="main-title">CxO人材への転職の流れ</h2>
            </div>
            <div class="container">
                <h3 class="sub-title">
                    具体的な転職相談だけでなく、<br>
                    中長期のキャリア相談を<br class="sp">踏まえたイベント参加もOK
                </h3>
                <p class="desc">
                キャリア相談のエントリー後、まずはコンサルタントとの面談で、現在の状況や希望をお聞きします。<br>具体的な求人の紹介だけでなく、中長期のキャリア相談や情報交換も可能です。
                </p>
                <div class="content-wrapper">
                    <img class="pc" src="<?php echo T_DIRE_URI; ?>/assets/img/flow.png" alt="">
                    <img class="sp" src="<?php echo T_DIRE_URI; ?>/assets/img/flow-sp.png" alt="">
                    <div class="steps-wrapper">
                        <ul class="steps">
                            <li>
                                <div class="step-wrapper">
                                    <div class="number">
                                        <p class="step-text">STEP</p>
                                        <p class="step-number">01</p>
                                    </div>
                                    <div class="step-content">
                                    転職・キャリア相談のお申込み
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="step-wrapper">
                                    <div class="number">
                                        <p class="step-text">STEP</p>
                                        <p class="step-number">02</p>
                                    </div>
                                    <div class="step-content">
                                    コンサルタントとの面談
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="step-wrapper">
                                    <div class="number">
                                        <p class="step-text">STEP</p>
                                        <p class="step-number">03</p>
                                    </div>
                                    <div class="step-content">
                                    企業の選定および紹介
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="step-wrapper">
                                    <div class="number">
                                        <p class="step-text">STEP</p>
                                        <p class="step-number">04</p>
                                    </div>
                                    <div class="step-content">
                                    選考
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="step-wrapper">
                                    <div class="number">
                                        <p class="step-text">STEP</p>
                                        <p class="step-number">05</p>
                                    </div>
                                    <div class="step-content">
                                    オファー
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <a class="btn-rightarrow" href="<?php echo HOME . 'flow'; ?>">
                    詳しい転職支援の流れはこちら
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M14.0306 8.53061L9.53063 13.0306C9.38973 13.1715 9.19863 13.2507 8.99938 13.2507C8.80012 13.2507 8.60902 13.1715 8.46813 13.0306C8.32723 12.8897 8.24807 12.6986 8.24807 12.4994C8.24807 12.3001 8.32723 12.109 8.46813 11.9681L11.6875 8.74999H2.5C2.30109 8.74999 2.11032 8.67097 1.96967 8.53032C1.82902 8.38967 1.75 8.1989 1.75 7.99999C1.75 7.80108 1.82902 7.61031 1.96967 7.46966C2.11032 7.329 2.30109 7.24999 2.5 7.24999H11.6875L8.46937 4.02999C8.32848 3.88909 8.24932 3.69799 8.24932 3.49874C8.24932 3.29948 8.32848 3.10838 8.46937 2.96749C8.61027 2.82659 8.80137 2.74744 9.00062 2.74744C9.19988 2.74744 9.39098 2.82659 9.53187 2.96749L14.0319 7.46749C14.1018 7.53726 14.1573 7.62016 14.1951 7.71142C14.2329 7.80269 14.2523 7.90052 14.2522 7.99931C14.252 8.09809 14.2324 8.19588 14.1944 8.28706C14.1564 8.37824 14.1007 8.46101 14.0306 8.53061Z" fill="#1BA2C5"/>
                    </svg>
                </a>
            </div>
        </section>

        <section class="column">
            <div class="title-wrapper">
                <div class="title-text">Column</div>
                <h2 class="main-title">転職コラム</h2>
            </div>
            <div class="container">
                <ul class="contents">
                    <li class="content-item">
                        <div class="career-wrapper">
                            <div class="career-text">
                                <h3 class="title">
                                CxO人材研究所
                                </h3>
                                <p class="desc">
                                    CxOとは何か、さらに各CxOの年収や<br class="pc">
                                    キャリアプランについて説明しています。
                                </p>
                            </div>
                            <img src="<?php echo T_DIRE_URI; ?>/assets/img/half-female.png">
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
                                <a href="<?php the_permalink(); ?>">
                                    <div class="number">
                                        <?php echo $number; ?>
                                    </div>
                                    <div class="title-wrap">
                                        <h3 class="title">
                                            <?php the_title(); ?>
                                        </h3>
                                        <p class="desc">
                                            <?php the_excerpt(); ?>
                                        </p>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M17.5383 10.6635L11.9133 16.2885C11.7372 16.4647 11.4983 16.5636 11.2492 16.5636C11.0001 16.5636 10.7613 16.4647 10.5852 16.2885C10.409 16.1124 10.3101 15.8736 10.3101 15.6245C10.3101 15.3754 10.409 15.1365 10.5852 14.9604L14.6094 10.9378H3.125C2.87636 10.9378 2.6379 10.839 2.46209 10.6632C2.28627 10.4874 2.1875 10.2489 2.1875 10.0003C2.1875 9.75162 2.28627 9.51316 2.46209 9.33735C2.6379 9.16153 2.87636 9.06276 3.125 9.06276H14.6094L10.5867 5.03776C10.4106 4.86164 10.3117 4.62277 10.3117 4.3737C10.3117 4.12462 10.4106 3.88575 10.5867 3.70963C10.7628 3.53351 11.0017 3.43457 11.2508 3.43457C11.4999 3.43457 11.7387 3.53351 11.9148 3.70963L17.5398 9.33463C17.6273 9.42185 17.6966 9.52547 17.7438 9.63955C17.7911 9.75364 17.8153 9.87593 17.8152 9.99941C17.815 10.1229 17.7905 10.2451 17.743 10.3591C17.6955 10.4731 17.6259 10.5765 17.5383 10.6635Z" fill="#AEAEAE"/>
                                    </svg>
                                </a>
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
                                <a href="<?php the_permalink(); ?>">
                                    <div class="number-title">
                                        <div class="number">
                                            <?php echo $number; ?>
                                        </div>
                                        <h3 class="title">
                                            <?php the_title(); ?>
                                        </h3>
                                    </div>
                                    <div class="desc-arrow">
                                        <p class="desc">
                                            <?php echo the_excerpt(); ?>
                                        </p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M17.5383 10.6635L11.9133 16.2885C11.7372 16.4647 11.4983 16.5636 11.2492 16.5636C11.0001 16.5636 10.7613 16.4647 10.5852 16.2885C10.409 16.1124 10.3101 15.8736 10.3101 15.6245C10.3101 15.3754 10.409 15.1365 10.5852 14.9604L14.6094 10.9378H3.125C2.87636 10.9378 2.6379 10.839 2.46209 10.6632C2.28627 10.4874 2.1875 10.2489 2.1875 10.0003C2.1875 9.75162 2.28627 9.51316 2.46209 9.33735C2.6379 9.16153 2.87636 9.06276 3.125 9.06276H14.6094L10.5867 5.03776C10.4106 4.86164 10.3117 4.62277 10.3117 4.3737C10.3117 4.12462 10.4106 3.88575 10.5867 3.70963C10.7628 3.53351 11.0017 3.43457 11.2508 3.43457C11.4999 3.43457 11.7387 3.53351 11.9148 3.70963L17.5398 9.33463C17.6273 9.42185 17.6966 9.52547 17.7438 9.63955C17.7911 9.75364 17.8153 9.87593 17.8152 9.99941C17.815 10.1229 17.7905 10.2451 17.743 10.3591C17.6955 10.4731 17.6259 10.5765 17.5383 10.6635Z" fill="#AEAEAE"/>
                                        </svg>
                                    </div>
                                </a>
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
                            <div class="career-text">
                                <h3 class="title">
                                    転職相談室
                                </h3>
                                <p class="desc">
                                転職の不安やお悩みに、<br>一問一答形式でお答えします。
                                </p>
                            </div>
                            <img src="<?php echo T_DIRE_URI; ?>/assets/img/half-male.png">
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
                                <a href="<?php the_permalink(); ?>">
                                    <div class="number">
                                        <?php echo $number; ?>
                                    </div>
                                    <h3 class="title">
                                        <?php the_title(); ?>
                                    </h3>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M17.5383 10.6635L11.9133 16.2885C11.7372 16.4647 11.4983 16.5636 11.2492 16.5636C11.0001 16.5636 10.7613 16.4647 10.5852 16.2885C10.409 16.1124 10.3101 15.8736 10.3101 15.6245C10.3101 15.3754 10.409 15.1365 10.5852 14.9604L14.6094 10.9378H3.125C2.87636 10.9378 2.6379 10.839 2.46209 10.6632C2.28627 10.4874 2.1875 10.2489 2.1875 10.0003C2.1875 9.75162 2.28627 9.51316 2.46209 9.33735C2.6379 9.16153 2.87636 9.06276 3.125 9.06276H14.6094L10.5867 5.03776C10.4106 4.86164 10.3117 4.62277 10.3117 4.3737C10.3117 4.12462 10.4106 3.88575 10.5867 3.70963C10.7628 3.53351 11.0017 3.43457 11.2508 3.43457C11.4999 3.43457 11.7387 3.53351 11.9148 3.70963L17.5398 9.33463C17.6273 9.42185 17.6966 9.52547 17.7438 9.63955C17.7911 9.75364 17.8153 9.87593 17.8152 9.99941C17.815 10.1229 17.7905 10.2451 17.743 10.3591C17.6955 10.4731 17.6259 10.5765 17.5383 10.6635Z" fill="#AEAEAE"/>
                                    </svg>
                                </a>
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
        </section>

        <section class="aboutus">
            <div class="title-wrapper">
                <div class="title-text">About</div>
                <h2 class="main-title">CxO人材バンクとは</h2>
            </div>
            <div class="container">
                <div class="content-wrapper">
                    <div class="left-wrapper">
                        <h2 class="title">
                            成長企業をより成長させる<br>
                            ビジネスプラットフォームを展開する<br class="pc">
                            IR Roboticsの人材支援サービスです
                        </h2>
                        <p class="desc">
                        上場企業・上場準備企業のIPO・経営戦略やIR活動に関する支援を通じて、これまで1万人超の経営者と深いつながりを構築してきました。<br>彼らとの交流を通じて得た潜在的＆顕在的ニーズから、成長企業が必要とする人材をご紹介するサービスを展開しています。
                        </p>
                        <a class="btn-rightarrow pc" href="<?php echo HOME . 'features/background'; ?>">
                            CxO人材バンクについて
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M14.0306 8.53061L9.53063 13.0306C9.38973 13.1715 9.19863 13.2507 8.99938 13.2507C8.80012 13.2507 8.60902 13.1715 8.46813 13.0306C8.32723 12.8897 8.24807 12.6986 8.24807 12.4994C8.24807 12.3001 8.32723 12.109 8.46813 11.9681L11.6875 8.74999H2.5C2.30109 8.74999 2.11032 8.67097 1.96967 8.53032C1.82902 8.38967 1.75 8.1989 1.75 7.99999C1.75 7.80108 1.82902 7.61031 1.96967 7.46966C2.11032 7.329 2.30109 7.24999 2.5 7.24999H11.6875L8.46937 4.02999C8.32848 3.88909 8.24932 3.69799 8.24932 3.49874C8.24932 3.29948 8.32848 3.10838 8.46937 2.96749C8.61027 2.82659 8.80137 2.74744 9.00062 2.74744C9.19988 2.74744 9.39098 2.82659 9.53187 2.96749L14.0319 7.46749C14.1018 7.53726 14.1573 7.62016 14.1951 7.71142C14.2329 7.80269 14.2523 7.90052 14.2522 7.99931C14.252 8.09809 14.2324 8.19588 14.1944 8.28706C14.1564 8.37824 14.1007 8.46101 14.0306 8.53061Z" fill="#1BA2C5"/>
                            </svg>
                        </a>
                    </div>
                    <div class="right-wrapper">
                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/aboutus-right.png">
                    </div>
                    <a class="btn-rightarrow sp" href="<?php echo HOME . 'features/background'; ?>">
                        CxO人材バンクについて
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M14.0306 8.53061L9.53063 13.0306C9.38973 13.1715 9.19863 13.2507 8.99938 13.2507C8.80012 13.2507 8.60902 13.1715 8.46813 13.0306C8.32723 12.8897 8.24807 12.6986 8.24807 12.4994C8.24807 12.3001 8.32723 12.109 8.46813 11.9681L11.6875 8.74999H2.5C2.30109 8.74999 2.11032 8.67097 1.96967 8.53032C1.82902 8.38967 1.75 8.1989 1.75 7.99999C1.75 7.80108 1.82902 7.61031 1.96967 7.46966C2.11032 7.329 2.30109 7.24999 2.5 7.24999H11.6875L8.46937 4.02999C8.32848 3.88909 8.24932 3.69799 8.24932 3.49874C8.24932 3.29948 8.32848 3.10838 8.46937 2.96749C8.61027 2.82659 8.80137 2.74744 9.00062 2.74744C9.19988 2.74744 9.39098 2.82659 9.53187 2.96749L14.0319 7.46749C14.1018 7.53726 14.1573 7.62016 14.1951 7.71142C14.2329 7.80269 14.2523 7.90052 14.2522 7.99931C14.252 8.09809 14.2324 8.19588 14.1944 8.28706C14.1564 8.37824 14.1007 8.46101 14.0306 8.53061Z" fill="#1BA2C5"/>
                        </svg>
                    </a>
                </div>
                <img class="aboutus-img" src="<?php echo T_DIRE_URI; ?>/assets/img/aboutus.png">
            </div>
        </section>

    </main>

<?php get_footer(); ?>