<?php
/*
Template Name: Features Template
*/

if ( ! defined( 'ABSPATH' ) ) exit;
get_header();

$paged = get_query_var('paged') ? get_query_var('paged') : 1;

?>


<main id="features">
    <div class="page-status">
        <a class="home" href="<?php echo HOME; ?>">トップページ</a>
        <img src="<?php echo T_DIRE_URI; ?>/assets/img/goto-mark.png">
        <div class="this-page">CxO人材バンクの特長</div>
    </div>
    <div class="common-firstview">
        <h3 class="section-title">CxO人材バンクの特長</h3>
        <h5 class="eng-title">FEATURES</h5>
    </div>
    <div class="part1">
        <h2 class="maintitle">
        CxO人材バンクは上場企業・上場準備中企業の<br>
        成長支援を行うIR Roboticsの人材支援部門です
        </h2>
        <p class="desc">
        これまでIPO・経営戦略やIR活動に関する支援を通じて、多くの経営者と日々コミュニケーションをとる中で、<br class="pc">
        事業を拡大するうえで必要な人材についてご相談を頂き、CxO人材バンクを立ち上げました。
        </p>
        <img src="<?php echo T_DIRE_URI; ?>/assets/img/aboutus-right.png">
    </div>
    <div class="part2 pc">
        <img src="<?php echo T_DIRE_URI; ?>/assets/img/features02.png">
        <div class="wrapper">
            <h2 class="maintitle">
            これまでお会いした<br>経営者やCxOは1万人超え
            </h2>
            <p class="desc">CxO人材バンクでは、ご紹介する企業の経営者と密にコミュニケーションを取っているため、経営にダイレクトに携われる重要なポジションをご紹介します。
            </p>
            <a class="btn-rightarrow" href="<?php echo HOME . 'features/background'; ?>">
            CxO人材バンクのバックグラウンド
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M14.0306 8.53061L9.53063 13.0306C9.38973 13.1715 9.19863 13.2507 8.99938 13.2507C8.80012 13.2507 8.60902 13.1715 8.46813 13.0306C8.32723 12.8897 8.24807 12.6986 8.24807 12.4994C8.24807 12.3001 8.32723 12.109 8.46813 11.9681L11.6875 8.74999H2.5C2.30109 8.74999 2.11032 8.67097 1.96967 8.53032C1.82902 8.38967 1.75 8.1989 1.75 7.99999C1.75 7.80108 1.82902 7.61031 1.96967 7.46966C2.11032 7.329 2.30109 7.24999 2.5 7.24999H11.6875L8.46937 4.02999C8.32848 3.88909 8.24932 3.69799 8.24932 3.49874C8.24932 3.29948 8.32848 3.10838 8.46937 2.96749C8.61027 2.82659 8.80137 2.74744 9.00062 2.74744C9.19988 2.74744 9.39098 2.82659 9.53187 2.96749L14.0319 7.46749C14.1018 7.53726 14.1573 7.62016 14.1951 7.71142C14.2329 7.80269 14.2523 7.90052 14.2522 7.99931C14.252 8.09809 14.2324 8.19588 14.1944 8.28706C14.1564 8.37824 14.1007 8.46101 14.0306 8.53061Z" fill="#1BA2C5"/>
                </svg>
            </a>
        </div>
    </div>
    <div class="part2 sp">
        <div class="wrapper">
            <h2 class="maintitle">
            これまでお会いした<br>経営者やCxOは1万人超え
            </h2>
            <p class="desc">CxO人材バンクでは、ご紹介する企業の経営者と密にコミュニケーションを取っているため、経営にダイレクトに携われる重要なポジションをご紹介します。
            </p>
        </div>
        <img src="<?php echo T_DIRE_URI; ?>/assets/img/features02.png">
        <a class="btn-rightarrow" href="<?php echo HOME . 'features/background'; ?>">
                CxO人材バンクのバックグラウンド
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M14.0306 8.53061L9.53063 13.0306C9.38973 13.1715 9.19863 13.2507 8.99938 13.2507C8.80012 13.2507 8.60902 13.1715 8.46813 13.0306C8.32723 12.8897 8.24807 12.6986 8.24807 12.4994C8.24807 12.3001 8.32723 12.109 8.46813 11.9681L11.6875 8.74999H2.5C2.30109 8.74999 2.11032 8.67097 1.96967 8.53032C1.82902 8.38967 1.75 8.1989 1.75 7.99999C1.75 7.80108 1.82902 7.61031 1.96967 7.46966C2.11032 7.329 2.30109 7.24999 2.5 7.24999H11.6875L8.46937 4.02999C8.32848 3.88909 8.24932 3.69799 8.24932 3.49874C8.24932 3.29948 8.32848 3.10838 8.46937 2.96749C8.61027 2.82659 8.80137 2.74744 9.00062 2.74744C9.19988 2.74744 9.39098 2.82659 9.53187 2.96749L14.0319 7.46749C14.1018 7.53726 14.1573 7.62016 14.1951 7.71142C14.2329 7.80269 14.2523 7.90052 14.2522 7.99931C14.252 8.09809 14.2324 8.19588 14.1944 8.28706C14.1564 8.37824 14.1007 8.46101 14.0306 8.53061Z" fill="#1BA2C5"/>
                </svg>
            </a>
    </div>
    <div class="part3">
        <h2 class="maintitle">
        CxO人材バンクの仕組み
        </h2>
        <div class="top-wrapper">
            <h3 class="sub-title">
                企業側へのアプローチ
            </h3>
            <ul class="imgs">
                <li>
                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/features03.png">
                    <h5 class="desc">
                    当社社員と経営者の方の会食を定期的に開催しています！
                    </h5>
                </li>
                <li>
                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/features04.png">
                    <h5 class="desc">
                    会食会場でも、転職希望者の資料をお持ちして直接ご提案します。
                    </h5>
                </li>
                <li>
                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/features05.png">
                    <h5 class="desc">
                    経営者の方とのMessengerグループでも、候補者さまの情報を共有！「会いたいです！」と返信があります。
                    </h5>
                </li>
            </ul>
        </div>
        <div class="diagrams">
            <div class="diagram">
                <h5 class="side1 side left">
                    <span>必要な人材に<br class="sp">ついての<br>
                    生の声と<br class="sp">直接オファー</span>
                </h5>
                <img src="<?php echo T_DIRE_URI; ?>/assets/img/features-diagram01.png">
                <h5 class="side2 side right">
                    <span>企業が求める<br>
                    優秀な人材を提供</span>
                </h5>
            </div>
            <img src="<?php echo T_DIRE_URI; ?>/assets/img/logo.png" class="logo" alt="CxO人材バンク">
            <div class="diagram">
                <h5 class="side2 side left">
                    <span>交流、きっかけ作り<br>
                    情報提供</span>
                </h5>
                <img src="<?php echo T_DIRE_URI; ?>/assets/img/features-diagram02.png">
                <h5 class="side1 side right">
                    <span class="pc">キャリア相談、転職相談</span>
                    <span class="sp">キャリア相談<br class="sp">転職相談</span>
                </h5>
            </div>
        </div>
        <div class="bottom-wrapper">
            <h3 class="sub-title">
            転職希望者へのアプローチ
            </h3>
            <ul class="imgs">
                <li>
                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/features06.png">
                    <h5 class="desc">
                    初回はFace to Faceでのご面談となります。（9割がオンラインで実施しております）
                    </h5>
                </li>
                <li>
                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/features07.png">
                    <h5 class="desc">
                    定期的に開催している「Sweet 19 Blues」にご招待！当社コンサルタントや他の参加者との交流を深められます。
                    </h5>
                </li>
                <li>
                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/features08.png">
                    <h5 class="desc">
                    ご転職後は、ご入社先の経営陣としてお付き合いが始まります。場合によっては採用のお手伝いをさせていただくことも…（CxOの履歴書チャンネルへのご出演、Next IPO Clubへのご出席など）
                    </h5>
                </li>
            </ul>
        </div>
        <a class="btn-rightarrow" href="<?php echo HOME . 'features/media'; ?>">
        CxO人材バンク関連コミュティ
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path d="M14.0306 8.53061L9.53063 13.0306C9.38973 13.1715 9.19863 13.2507 8.99938 13.2507C8.80012 13.2507 8.60902 13.1715 8.46813 13.0306C8.32723 12.8897 8.24807 12.6986 8.24807 12.4994C8.24807 12.3001 8.32723 12.109 8.46813 11.9681L11.6875 8.74999H2.5C2.30109 8.74999 2.11032 8.67097 1.96967 8.53032C1.82902 8.38967 1.75 8.1989 1.75 7.99999C1.75 7.80108 1.82902 7.61031 1.96967 7.46966C2.11032 7.329 2.30109 7.24999 2.5 7.24999H11.6875L8.46937 4.02999C8.32848 3.88909 8.24932 3.69799 8.24932 3.49874C8.24932 3.29948 8.32848 3.10838 8.46937 2.96749C8.61027 2.82659 8.80137 2.74744 9.00062 2.74744C9.19988 2.74744 9.39098 2.82659 9.53187 2.96749L14.0319 7.46749C14.1018 7.53726 14.1573 7.62016 14.1951 7.71142C14.2329 7.80269 14.2523 7.90052 14.2522 7.99931C14.252 8.09809 14.2324 8.19588 14.1944 8.28706C14.1564 8.37824 14.1007 8.46101 14.0306 8.53061Z" fill="#1BA2C5"/>
            </svg>
        </a>
    </div>
    <div class="part4">
        <h2 class="maintitle">
            CxO人材バンクの特長
        </h2>
        <ul class="features">
            <li class="feature-item">
                <p class="number">特長<span>01</span></p>
                <h3 class="subtitle">
                成長真っ只中の上場企業、上場準備中企業の経営者からオファーがもらえる
                </h3>
                <div class="content-wrapper">
                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/feature001.png">
                    <div class="content">
                        <p class="desc">
                        CxO人材バンクは上場企業・上場準備中企業のIPO・経営戦略やIR活動に関する支援を通じて、経営者、経営層との深い繋がりを築いてきました。<br>経営者本人に転職希望者の提案をしますので、彼らからの面談オファーがもらえます。
                        </p>
                        <h4 class="sub-title">
                        ご依頼いただく企業例
                        </h4>
                        <p class="sub-desc">
                        ・SaaS系企業<br>
                        ・Fintech企業<br>
                        ・地方創生企業
                        </p>
                    </div>
                </div>
            </li>
            <li class="feature-item">
                <p class="number">特長<span>02</span></p>
                <h3 class="subtitle">
                年収800万円以上の、経営に携わる「CxOポジション」を中心にご紹介
                </h3>
                <div class="content-wrapper">
                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/feature002.png">
                    <div class="content">
                        <p class="desc">
                        CxO人材バンクがご紹介するのは、いずれも経営の中枢を担う「CxOポジション」が中心となります。<br>上場企業・上場準備中企業の経営者にとって、自社の成長に欠かせない存在であるため、スキル、カルチャーなど様々な面から、マッチする企業をご紹介します。
                        </p>
                        <h4 class="sub-title">
                            これまでの転職者のポジション例
                        </h4>
                        <p class="sub-desc">
                        ・IPO準備強化のため、管理部長ポジションで年収850万円<br>
                        ・PMF以降の営業力強化のため、執行役員ポジションで年収936万円<br>
                        ・子会社の事業拡大のため、COOポジションで年収1000万円
                        </p>
                        <a class="btn-rightarrow" href="<?php echo HOME . 'case'; ?>">
                            転職成功事例はこちら
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M14.0306 8.53061L9.53063 13.0306C9.38973 13.1715 9.19863 13.2507 8.99938 13.2507C8.80012 13.2507 8.60902 13.1715 8.46813 13.0306C8.32723 12.8897 8.24807 12.6986 8.24807 12.4994C8.24807 12.3001 8.32723 12.109 8.46813 11.9681L11.6875 8.74999H2.5C2.30109 8.74999 2.11032 8.67097 1.96967 8.53032C1.82902 8.38967 1.75 8.1989 1.75 7.99999C1.75 7.80108 1.82902 7.61031 1.96967 7.46966C2.11032 7.329 2.30109 7.24999 2.5 7.24999H11.6875L8.46937 4.02999C8.32848 3.88909 8.24932 3.69799 8.24932 3.49874C8.24932 3.29948 8.32848 3.10838 8.46937 2.96749C8.61027 2.82659 8.80137 2.74744 9.00062 2.74744C9.19988 2.74744 9.39098 2.82659 9.53187 2.96749L14.0319 7.46749C14.1018 7.53726 14.1573 7.62016 14.1951 7.71142C14.2329 7.80269 14.2523 7.90052 14.2522 7.99931C14.252 8.09809 14.2324 8.19588 14.1944 8.28706C14.1564 8.37824 14.1007 8.46101 14.0306 8.53061Z" fill="#1BA2C5"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </li>
            <li class="feature-item">
                <p class="number">特長<span>03</span></p>
                <h3 class="subtitle">
                コンサルタントが選考に同席することでその場の状況に応じて、適切なフォローアップが可能
                </h3>
                <div class="content-wrapper">
                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/feature003.png">
                    <div class="content">
                        <p class="desc">
                        コンサルタントは、企業との選考面接*には原則同席します。<br>同席することで、選考の雰囲気や双方の温度感がダイレクトにわかり、その後のフォローアップの精度が上がります。<br>※企業から許可された場合、1次面接とオファー面談には原則同席します。
                        </p>
                        <h4 class="sub-title">
                        キャリアアドバイザーが同席するメリット
                        </h4>
                        <p class="sub-desc">
                        ・同席することで最新の企業情報や選考のポイントなどの蓄積ができる<br>
                        ・条件などの重要な局面で両者の間に立つことで、ブラックボックス化を防げる
                        </p>
                        <a class="btn-rightarrow" href="<?php echo HOME . 'flow'; ?>">
                        転職支援の流れはこちら
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M14.0306 8.53061L9.53063 13.0306C9.38973 13.1715 9.19863 13.2507 8.99938 13.2507C8.80012 13.2507 8.60902 13.1715 8.46813 13.0306C8.32723 12.8897 8.24807 12.6986 8.24807 12.4994C8.24807 12.3001 8.32723 12.109 8.46813 11.9681L11.6875 8.74999H2.5C2.30109 8.74999 2.11032 8.67097 1.96967 8.53032C1.82902 8.38967 1.75 8.1989 1.75 7.99999C1.75 7.80108 1.82902 7.61031 1.96967 7.46966C2.11032 7.329 2.30109 7.24999 2.5 7.24999H11.6875L8.46937 4.02999C8.32848 3.88909 8.24932 3.69799 8.24932 3.49874C8.24932 3.29948 8.32848 3.10838 8.46937 2.96749C8.61027 2.82659 8.80137 2.74744 9.00062 2.74744C9.19988 2.74744 9.39098 2.82659 9.53187 2.96749L14.0319 7.46749C14.1018 7.53726 14.1573 7.62016 14.1951 7.71142C14.2329 7.80269 14.2523 7.90052 14.2522 7.99931C14.252 8.09809 14.2324 8.19588 14.1944 8.28706C14.1564 8.37824 14.1007 8.46101 14.0306 8.53061Z" fill="#1BA2C5"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </li>
            <li class="feature-item">
                <p class="number">特長<span>04</span></p>
                <h3 class="subtitle">
                単なる求人紹介や情報提供だけではなくオフラインの交流などを通じた中長期でのお付き合い
                </h3>
                <div class="content-wrapper">
                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/feature004.png">
                    <div class="content">
                        <p class="desc">
                        CxO人材バンクは、単に求人案件を紹介するだけでなく、コンサルタントとオフラインで交流できる機会も創っており、皆さまとの表面的ではない繋がりや、双方の理解を深めることを大切にしています。<br>また、CxO人材の求人はタイミングやご縁も大きいものですので、短期的なご支援ではなく、中長期でのお付き合いをさせて頂いております。
                        </p>
                        <h4 class="sub-title">
                            開催しているコミュニティ
                        </h4>
                        <p class="sub-desc">
                            ・毎月19日に開催される転職希望者の方との飲み会「Sweet 19 blues」<br>
                            ・経営者とのコミュニティ

                        </p>
                        
                        <a class="btn-rightarrow" href="<?php echo HOME . 'features/media'; ?>">
                        CxO人材バンク関連コミュティ
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M14.0306 8.53061L9.53063 13.0306C9.38973 13.1715 9.19863 13.2507 8.99938 13.2507C8.80012 13.2507 8.60902 13.1715 8.46813 13.0306C8.32723 12.8897 8.24807 12.6986 8.24807 12.4994C8.24807 12.3001 8.32723 12.109 8.46813 11.9681L11.6875 8.74999H2.5C2.30109 8.74999 2.11032 8.67097 1.96967 8.53032C1.82902 8.38967 1.75 8.1989 1.75 7.99999C1.75 7.80108 1.82902 7.61031 1.96967 7.46966C2.11032 7.329 2.30109 7.24999 2.5 7.24999H11.6875L8.46937 4.02999C8.32848 3.88909 8.24932 3.69799 8.24932 3.49874C8.24932 3.29948 8.32848 3.10838 8.46937 2.96749C8.61027 2.82659 8.80137 2.74744 9.00062 2.74744C9.19988 2.74744 9.39098 2.82659 9.53187 2.96749L14.0319 7.46749C14.1018 7.53726 14.1573 7.62016 14.1951 7.71142C14.2329 7.80269 14.2523 7.90052 14.2522 7.99931C14.252 8.09809 14.2324 8.19588 14.1944 8.28706C14.1564 8.37824 14.1007 8.46101 14.0306 8.53061Z" fill="#1BA2C5"/>
                        </svg>
                    </a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="part5">
        <p class="related-label">関連ページ</p>
        <a class="gotopage" href="<?php echo HOME . 'features/background'; ?>">
            <img src="<?php echo T_DIRE_URI; ?>/assets/img/right-arrow-incircle.png">
            CxO人材バンクのバックグラウンド
        </a>
        <a class="gotopage" href="<?php echo HOME . 'features/media'; ?>">
            <img src="<?php echo T_DIRE_URI; ?>/assets/img/right-arrow-incircle.png">
            CxO人材バンク関連コミュティ
        </a>    
    </div>

</main>


<?php get_footer();?>