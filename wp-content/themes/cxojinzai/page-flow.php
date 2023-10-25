<?php
/*
Template Name: Single Flow Template
*/

if ( ! defined( 'ABSPATH' ) ) exit;
get_header();

$paged = get_query_var('paged') ? get_query_var('paged') : 1;

?>

    <main id="flow">
        <div class="page-status">
            <a class="home" href="<?php echo HOME; ?>">トップページ</a>
            <img src="<?php echo T_DIRE_URI; ?>/assets/img/goto-mark.png">
            <div class="this-page">CxO人材への転職支援の流れ</div>
        </div>
        <div class="common-firstview">
            <h3 class="section-title">CxO転職支援の流れ</h3>
            <h5 class="eng-title">FLOW</h5>
        </div>
        <section class="content">
            <p class="top desc">CxO人材バンクでは、転職への温度感に応じて、2つの窓口をご用意しております。
            </p>
            <a class="btn-rightarrow" href="<?php echo HOME . 'flow/consultsdiffer'; ?>">
                2つの相談窓口の違い
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M14.0306 8.53061L9.53063 13.0306C9.38973 13.1715 9.19863 13.2507 8.99938 13.2507C8.80012 13.2507 8.60902 13.1715 8.46813 13.0306C8.32723 12.8897 8.24807 12.6986 8.24807 12.4994C8.24807 12.3001 8.32723 12.109 8.46813 11.9681L11.6875 8.74999H2.5C2.30109 8.74999 2.11032 8.67097 1.96967 8.53032C1.82902 8.38967 1.75 8.1989 1.75 7.99999C1.75 7.80108 1.82902 7.61031 1.96967 7.46966C2.11032 7.329 2.30109 7.24999 2.5 7.24999H11.6875L8.46937 4.02999C8.32848 3.88909 8.24932 3.69799 8.24932 3.49874C8.24932 3.29948 8.32848 3.10838 8.46937 2.96749C8.61027 2.82659 8.80137 2.74744 9.00062 2.74744C9.19988 2.74744 9.39098 2.82659 9.53187 2.96749L14.0319 7.46749C14.1018 7.53726 14.1573 7.62016 14.1951 7.71142C14.2329 7.80269 14.2523 7.90052 14.2522 7.99931C14.252 8.09809 14.2324 8.19588 14.1944 8.28706C14.1564 8.37824 14.1007 8.46101 14.0306 8.53061Z" fill="#1BA2C5"/>
                </svg>
            </a>
            <h2 class="main-title">
                転職支援の流れ
            </h2>
            <ul class="flow-steps">
                <li class="each-step">
                    <div class="step-wrapper">
                        <div class="step-number">
                            <div class="label">STEP</div>
                            <div class="num">01</div>
                        </div>
                        <div class="step-content">
                            <h3 class="step-title">
                                エントリー
                            </h3>
                            <p class="desc">「具体的な転職相談をする」または「中長期のキャリア相談をする」のどちらかからお問い合わせください。担当コンサルタントより、ご連絡を差し上げます。
                            </p>
                            <ul class="contact-btns">
                                <li>
                                    <a class="btn job-consult" href="<?php echo HOME . 'pre-entry'; ?>">
                                        <span>中長期のキャリア相談をする</span>
                                    </a>    
                                </li>
                                <li>
                                    <a class="btn long-term" href="<?php echo HOME . 'entry'; ?>">
                                        <span>具体的な転職相談をする</span>
                                    </a>    
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="each-step">
                    <div class="step-wrapper">
                        <div class="step-number">
                            <div class="label">STEP</div>
                            <div class="num">02</div>
                        </div>
                        <div class="for-responsive">
                            <div class="step-content">
                                <h3 class="step-title">
                                    ご面談
                                </h3>
                                <p class="desc">まずはCxO人材バンク担当者との面談となります。所要時間は30分ほどです。<br>
                                面談方法はご希望に併せてご対応可能ですが、お顔が見える形での面談をお願いしております。<br>
                                対面やオンラインなどご希望をお伝え下さい。<br>
                                ご経歴やご志向をヒアリングの後、企業や求人情報のご紹介をいたします。<br>
                                ※コンフィデンシャル案件が多いため、具体的な求人は面談後のご紹介となります。</p>
                            </div>
                            <div class="img-wrapper">
                                <img class="thumb" src="<?php echo T_DIRE_URI; ?>/assets/img/step02.png">
                            </div>
                        </div>
                    </div>
                </li>
                <li class="each-step">
                    <div class="step-wrapper">
                        <div class="step-number">
                            <div class="label">STEP</div>
                            <div class="num">03</div>
                        </div>
                        <div class="for-responsive">
                            <div class="step-content">
                                <h3 class="step-title">
                                    候補企業の紹介
                                </h3>
                                <p class="desc">CxO人材バンクは、上場企業・上場準備中企業の経営者との強いパイプがあります。<br>企業の紹介は以下のような方法があります。
                                </p>
                                <div class="method">
                                    <h3 class="title">
                                        ご紹介方法の例
                                    </h3>
                                    <p class="content">
                                    1. 面談後、CxO人材バンクのコンサルタントが企業を厳選し、あなたに紹介<br>
                                    2. あなたの情報を見た当社のコミュニティ会員である経営者から面談オファー
                                    </p>
                                </div>
                            </div>
                            <div class="img-wrapper">
                                <img class="thumb" src="<?php echo T_DIRE_URI; ?>/assets/img/step03.png">
                            </div>
                        </div>
                    </div>
                </li>
                <li class="each-step">
                    <div class="step-wrapper">
                        <div class="step-number">
                            <div class="label">STEP</div>
                            <div class="num">04</div>
                        </div>
                        <div class="for-responsive">
                            <div class="step-content">
                                <h3 class="step-title">
                                    選考
                                </h3>
                                <p class="desc">企業によって選考フローは様々ですが、初回の面談では、原則CxO人材バンクのコンサルタントが同席します。<br>
                                役職や企業によっては、カジュアルな面談からのスタート、リファレンスチェック、会食形式のご面談等もあります。                           
                                </p>
                                <div class="method">
                                    <h3 class="title">
                                    よくある流れ
                                    </h3>
                                    <p class="content">
                                    ・社長面談→役員・部長クラスと面談→会食兼オファー面談<br>・役員・部長クラスと面談→社長面談→オファー面談
                                    </p>
                                </div>
                            </div>
                            <div class="img-wrapper">
                                <img class="thumb" src="<?php echo T_DIRE_URI; ?>/assets/img/step04.png">
                            </div>
                        </div>
                    </div>
                </li>
                <li class="each-step">
                    <div class="step-wrapper">
                        <div class="step-number">
                            <div class="label">STEP</div>
                            <div class="num">05</div>
                        </div>
                        <div class="step-content">
                            <h3 class="step-title">
                                オファー
                            </h3>
                            <p class="desc">オファー条件を承諾されましたら、ご入社の手続きを進めます。
                                ケースによって期間の変動はありますが、ご紹介から内定までの期間は１か月半ほどです。（具体的な転職支援の場合）
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
            <h2 class="main-title">
                社外取締役・監査役就任への流れ
            </h2>
            <p class="desc">
                上場企業では2021年から社外取締役の設置が義務化されました。CxO人材バンクでは社外取締役への就任支援も行っています。
            </p>
            <a class="btn-rightarrow bottom" href="<?php echo HOME . 'flow/support'; ?>">
                社外取締役就任までの流れはこちら
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M14.0306 8.53061L9.53063 13.0306C9.38973 13.1715 9.19863 13.2507 8.99938 13.2507C8.80012 13.2507 8.60902 13.1715 8.46813 13.0306C8.32723 12.8897 8.24807 12.6986 8.24807 12.4994C8.24807 12.3001 8.32723 12.109 8.46813 11.9681L11.6875 8.74999H2.5C2.30109 8.74999 2.11032 8.67097 1.96967 8.53032C1.82902 8.38967 1.75 8.1989 1.75 7.99999C1.75 7.80108 1.82902 7.61031 1.96967 7.46966C2.11032 7.329 2.30109 7.24999 2.5 7.24999H11.6875L8.46937 4.02999C8.32848 3.88909 8.24932 3.69799 8.24932 3.49874C8.24932 3.29948 8.32848 3.10838 8.46937 2.96749C8.61027 2.82659 8.80137 2.74744 9.00062 2.74744C9.19988 2.74744 9.39098 2.82659 9.53187 2.96749L14.0319 7.46749C14.1018 7.53726 14.1573 7.62016 14.1951 7.71142C14.2329 7.80269 14.2523 7.90052 14.2522 7.99931C14.252 8.09809 14.2324 8.19588 14.1944 8.28706C14.1564 8.37824 14.1007 8.46101 14.0306 8.53061Z" fill="#1BA2C5"/>
                </svg>
            </a>
            <p class="related-label">関連ページ</p>
            <a class="gotopage" href="<?php echo HOME . 'flow/consultsdiffer'; ?>">
                <img src="<?php echo T_DIRE_URI; ?>/assets/img/right-arrow-incircle.png">
                2つの相談窓口の違い
            </a>
            <a class="gotopage" href="<?php echo HOME . 'flow/support'; ?>">
                <img src="<?php echo T_DIRE_URI; ?>/assets/img/right-arrow-incircle.png">
                社外取締役・監査役への就任支援
            </a>
        </section>
    </main>

<?php get_footer();?>