<?php
/*
Template Name: Single Conults Differ Template
*/

if ( ! defined( 'ABSPATH' ) ) exit;
get_header();

$paged = get_query_var('paged') ? get_query_var('paged') : 1;

?>

<main id="consults-differ">
        <div class="page-status">
            <a class="home" href="<?php echo HOME; ?>">トップページ</a>
            <img src="<?php echo T_DIRE_URI; ?>/assets/img/goto-mark.png">
            <a class="home" href="<?php echo HOME . 'flow'; ?>">CxO人材への転職支援の流れ</a>
            <img src="<?php echo T_DIRE_URI; ?>/assets/img/goto-mark.png">
            <div class="this-page">2つの相談窓口の違い</div>
        </div>
        <div class="subpage-firstview">
            <h3 class="section-title">2つの相談窓口の違い</h3>
        </div>
        <div class="container">
            <div class="part1">
                <h2 class="maintitle">
                    具体的な転職相談と中長期のキャリア相談の違い
                </h2>
                <p class="desc">
                CxO人材バンクでは、転職への温度感に応じて、2つの窓口をご用意しております。
                </p>
                <ul class="concept">
                    <li class="specific">
                        <h4 class="title">
                            具体的な転職相談とは
                        </h4>
                        <p class="content">
                        今すぐ・もしくは近いうちにご転職を検討している方向けに現状や希望条件などのヒアリング、求人のご紹介をいたします。
                        </p>
                    </li>
                    <li class="long-term">
                        <h4 class="title">
                            中長期のキャリア相談とは
                        </h4>
                        <p class="content">
                        中長期的にご転職を視野に入れたり、情報収集をしている方向けにご面談やイベントを通じて、情報提供を行います。
                        </p>
                    </li>
                </ul>
            </div>
            <div class="part2">
                <h2 class="maintitle">
                転職のタイミング以外でもご支援をする理由
                </h2>
                <p class="content">
                成長企業は日々変化するものです。さらに、CxO人材の求人はタイミングやご縁も大きいものですので、短期的なご支援ではなく、中長期でのお付き合いをしております。<br>ベストなタイミングでの新しい企業とのマッチングを実現した方がいらっしゃいます。
                </p>
                <h3 class="subtitle second">
                今すぐではなく、中長期のキャリア相談を希望される方との交流
                </h3>
                <p class="desc">
                CxO人材バンクは、単に求人案件を紹介するだけでなく、コンサルタントとオフラインで交流できる機会も創っており、皆さまとの表面的ではない繋がりや、双方の理解を深めることを大切にしています。
                </p>
                <div class="sweet-blues">
                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/consult-differ02.png" class="img2">
                    <div class="wrapper">
                        <h5 class="seet-title">
                        Sweet 19 Blues
                        </h5>
                        <p class="desc">
                        CxO人材バンク経由で転職された方々、転職支援中の方々をお招きして、毎月19日※に「Sweet 19 Blues」という交流会を開催しています！<br>当社コンサルタントと直接会うことで、双方の理解が深まるだけでなく、参加者同士の交流もできます。<br>※金曜日・土日祝は除く　
                        </p>
                        <a class="btn-rightarrow" href="<?php echo HOME . 'features/media/'; ?>">
                            CxO人材バンク関連<br class="sp">コミュニティについて
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M14.0306 8.53061L9.53063 13.0306C9.38973 13.1715 9.19863 13.2507 8.99938 13.2507C8.80012 13.2507 8.60902 13.1715 8.46813 13.0306C8.32723 12.8897 8.24807 12.6986 8.24807 12.4994C8.24807 12.3001 8.32723 12.109 8.46813 11.9681L11.6875 8.74999H2.5C2.30109 8.74999 2.11032 8.67097 1.96967 8.53032C1.82902 8.38967 1.75 8.1989 1.75 7.99999C1.75 7.80108 1.82902 7.61031 1.96967 7.46966C2.11032 7.329 2.30109 7.24999 2.5 7.24999H11.6875L8.46937 4.02999C8.32848 3.88909 8.24932 3.69799 8.24932 3.49874C8.24932 3.29948 8.32848 3.10838 8.46937 2.96749C8.61027 2.82659 8.80137 2.74744 9.00062 2.74744C9.19988 2.74744 9.39098 2.82659 9.53187 2.96749L14.0319 7.46749C14.1018 7.53726 14.1573 7.62016 14.1951 7.71142C14.2329 7.80269 14.2523 7.90052 14.2522 7.99931C14.252 8.09809 14.2324 8.19588 14.1944 8.28706C14.1564 8.37824 14.1007 8.46101 14.0306 8.53061Z" fill="#1BA2C5"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="part3">
                <h3 class="subtitle">
                    現在の企業に勤務しながら、自己成長も兼ねた交流や情報提供
                </h3>
                <img src="<?php echo T_DIRE_URI; ?>/assets/img/consult-differ03.png" class="img3">
            </div>
            <p class="related-label">関連ページ</p>
            <a class="gotopage" href="<?php echo HOME . 'flow'; ?>">
                <img src="<?php echo T_DIRE_URI; ?>/assets/img/right-arrow-incircle.png">
                CxO転職支援の流れ
            </a>
            <a class="gotopage" href="<?php echo HOME . 'flow/support'; ?>">
                <img src="<?php echo T_DIRE_URI; ?>/assets/img/right-arrow-incircle.png">
                社外取締役・監査役への就任支援
            </a>
        </div>
    </main>

<?php get_footer();?>