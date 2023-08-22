<?php
/*
Template Name: Single News Template
*/

if ( ! defined( 'ABSPATH' ) ) exit;
get_header();

$paged = get_query_var('paged') ? get_query_var('paged') : 1;

?>

<main id="features-media">
        <div class="page-status">
            <a class="home" href="/<?php echo HOME; ?>">トップページ</a>
            <img src="<?php echo T_DIRE_URI; ?>/assets/img/goto-mark.png">
            <a class="home" href="<?php echo HOME . 'features'; ?>">CxO人材バンクの特長
            </a>
            <img src="<?php echo T_DIRE_URI; ?>/assets/img/goto-mark.png">
            <div class="this-page">CxO人材バンク関連コミュニティ</div>
        </div>
        <div class="subpage-firstview">
            <h3 class="section-title">CxO人材バンク<br class="sp">関連コミュニティ</h3>
        </div>
        <div class="container">
            <div class="part1">
                <h2 class="maintitle">
                中長期のキャリアを視野に入れてのご支援！<br>
                オフラインイベントも多数実施しています
                </h2>
                <p class="desc">
                私たちは、皆さまとの表面的ではない繋がりや、双方の理解を深めることを大切にしています。<br>
                そのため、単に求人案件を紹介するだけでなく、オフラインイベントも実施しており、コンサルタントと対面で交流できる機会も創っているのが特長です。<br>
                また、CxO人材の求人はタイミングやご縁も大きいものですので、短期的なご支援ではなく、中長期でのお付き合いをさせて頂いております。
                </p>
            </div>
            <div class="part2">
                <h3 class="subtitle">CxO人材バンクが開催するイベント</h3>
                <div class="wrapper">
                    <img class="thumb" src="<?php echo T_DIRE_URI; ?>/assets/img/community008.png">
                    <div class="content">
                        <h4 class="title">Sweet 19 blues</h4>
                        <p class="desc">
                        これまでにCxO人材バンクを通してお会いした方々をお招きして、毎月19日*に「sweet 19 blues」という宴を開催しています！<br>当社コンサルタントと直接会うことで双方の理解が深まるだけでなく、参加者同士の交流もできます。<br>*金曜日・土日祝は除く
                        </p>
                    </div>
                </div>
            </div>
            <div class="part3">
                <ul class="wrapper">
                    <li>
                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/community007-1.png">
                        <h5 class="title">中華DE Night</h5>
                    </li>
                    <li>
                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/community003.png">
                        <h5 class="title">餃子DE Night</h5>
                    </li>
                    <li>
                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/community007.png">
                        <h5 class="title">中華DE Night</h5>
                    </li>
                </ul>
                <a class="btn-rightarrow" href="<?php echo HOME . 'news'; ?>">
                    最新の開催について
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M14.0306 8.53061L9.53063 13.0306C9.38973 13.1715 9.19863 13.2507 8.99938 13.2507C8.80012 13.2507 8.60902 13.1715 8.46813 13.0306C8.32723 12.8897 8.24807 12.6986 8.24807 12.4994C8.24807 12.3001 8.32723 12.109 8.46813 11.9681L11.6875 8.74999H2.5C2.30109 8.74999 2.11032 8.67097 1.96967 8.53032C1.82902 8.38967 1.75 8.1989 1.75 7.99999C1.75 7.80108 1.82902 7.61031 1.96967 7.46966C2.11032 7.329 2.30109 7.24999 2.5 7.24999H11.6875L8.46937 4.02999C8.32848 3.88909 8.24932 3.69799 8.24932 3.49874C8.24932 3.29948 8.32848 3.10838 8.46937 2.96749C8.61027 2.82659 8.80137 2.74744 9.00062 2.74744C9.19988 2.74744 9.39098 2.82659 9.53187 2.96749L14.0319 7.46749C14.1018 7.53726 14.1573 7.62016 14.1951 7.71142C14.2329 7.80269 14.2523 7.90052 14.2522 7.99931C14.252 8.09809 14.2324 8.19588 14.1944 8.28706C14.1564 8.37824 14.1007 8.46101 14.0306 8.53061Z" fill="#1BA2C5"/>
                    </svg>
                </a>
            </div>
            <div class="part4">
                <p class="desc">成長企業に欠かせない人材に関する情報共有やきっかけづくりの場は、今すぐ転職を考えていない方でも、<br>
                    中長期のキャリア相談をお申し込みいただければ参加できます。
                </p>
                <a class="btn-rightarrow" href="https://go.cxo-jinzaibank.jp/l/1022123/2023-08-02/bcd7">
                    中長期のキャリア相談について
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M14.0306 8.53061L9.53063 13.0306C9.38973 13.1715 9.19863 13.2507 8.99938 13.2507C8.80012 13.2507 8.60902 13.1715 8.46813 13.0306C8.32723 12.8897 8.24807 12.6986 8.24807 12.4994C8.24807 12.3001 8.32723 12.109 8.46813 11.9681L11.6875 8.74999H2.5C2.30109 8.74999 2.11032 8.67097 1.96967 8.53032C1.82902 8.38967 1.75 8.1989 1.75 7.99999C1.75 7.80108 1.82902 7.61031 1.96967 7.46966C2.11032 7.329 2.30109 7.24999 2.5 7.24999H11.6875L8.46937 4.02999C8.32848 3.88909 8.24932 3.69799 8.24932 3.49874C8.24932 3.29948 8.32848 3.10838 8.46937 2.96749C8.61027 2.82659 8.80137 2.74744 9.00062 2.74744C9.19988 2.74744 9.39098 2.82659 9.53187 2.96749L14.0319 7.46749C14.1018 7.53726 14.1573 7.62016 14.1951 7.71142C14.2329 7.80269 14.2523 7.90052 14.2522 7.99931C14.252 8.09809 14.2324 8.19588 14.1944 8.28706C14.1564 8.37824 14.1007 8.46101 14.0306 8.53061Z" fill="#1BA2C5"/>
                    </svg>
                </a>
                <!-- <div class="img-wrapper">
                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/features06.png">
                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/features06.png">
                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/features06.png">
                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/features06.png">
                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/features06.png">
                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/features06.png">
                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/features06.png">
                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/features06.png">
                </div> -->
            </div>
            <div class="part5">
                <h2 class="maintitle">
                    経営者と距離が近いのが<br>
                    CxO人材バンクの特長です
                </h2>
                <p class="desc">
                当社は、IR活動やIPO・経営戦略支援をしているため、成長企業の経営者と定期的に交流する機会があります。<br>
                企業経営者に直接提案するだけでなく、会員制グループやメルマガなどで候補者の情報を共有しているので、経営者から「この方と会ってみたい」と言われる頻度が多いのが、CxO人材バンクの特長です。
                </p>
                <div class="img-wrapper">
                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/community002.png">
                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/features05-1.png">
                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/community001.png">
                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/community011.png">
                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/community010.png">
                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/community009.png">
                </div>
                <!-- <div class="newletter">
                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/features-media001.png">
                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/features-media001.png">
                </div> -->
            </div>


            <p class="related-label">関連ページ</p>
            <a class="gotopage" href="<?php echo HOME . 'features'; ?>">
                <img src="<?php echo T_DIRE_URI; ?>/assets/img/right-arrow-incircle.png">
                CxO人材バンクの特長
            </a>
            <a class="gotopage" href="<?php echo HOME . 'features/background'; ?>">
                <img src="<?php echo T_DIRE_URI; ?>/assets/img/right-arrow-incircle.png">
                CxO人材バンクのバックグラウンド
            </a>
        </div>
    </main>

<?php get_footer();?>