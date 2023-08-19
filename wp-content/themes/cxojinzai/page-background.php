<?php
/*
Template Name: Single News Template
*/

if ( ! defined( 'ABSPATH' ) ) exit;
get_header();

$paged = get_query_var('paged') ? get_query_var('paged') : 1;

?>

    <main id="features-background">
        <div class="page-status">
            <a class="home" href="<?php echo HOME; ?>">トップページ</a>
            <img src="<?php echo T_DIRE_URI; ?>/assets/img/goto-mark.png">
            <a class="home" href="<?php echo HOME . 'features'; ?>">CxO人材バンクの特長
            </a>
            <img src="<?php echo T_DIRE_URI; ?>/assets/img/goto-mark.png">
            <div class="this-page">CxO人材バンクのバックグラウンド
            </div>
        </div>
        <div class="subpage-firstview">
            <h3 class="section-title">CxO人材バンクのバックグラウンド</h3>
        </div>
        <div class="container">
            <div class="part1">
                <h2 class="maintitle">
                    CxO人材バンクを運営する<br>
                    IR Roboticsは成長企業をより成長させる<br>
                    ビジネスプラットフォームを多数、運営しています
                </h2>
                <p class="desc">
                    CxO人材バンクは株式会社ベクトルと株式会社ミンカブ・ジ・インフォノイドのジョイントベンチャー「IR Robotics」が運営しています。<br>
                    成長企業がより成長するための支援として、サービスの提供先を、<br>
                    「上場企業」「上場準備企業」「将来の上場を考えている企業」という3つのカテゴリーに絞った事業展開をしています。
                </p>
            </div>
            <div class="part2">
                <div class="left-wrapper">
                    <h2 class="maintitle">
                        CxO人材バンクが考える成長企業とは
                    </h2>
                    <p class="desc">
                    CxO人材バンクが考える成長企業とは「上場企業」「上場準備中企業」「将来の上場を考えている企業」の中で、自社の企業価値向上に積極的に取り組む企業を指します。<br>私たちは「成長企業がより成長するための支援を通じ、ともに成長し、日本経済の発展に寄与する」を企業理念に掲げ、これからも『成長企業がより成長するためのビジネスプラットフォームになる』をスローガンに、全国の成長企業が真に必要としているCxO人材をご紹介できるよう努めて参ります。
                    </p>
                </div>
                <div class="right-wrapper">
                    <img class="title" src="<?php echo T_DIRE_URI; ?>/assets/img/features101-1.png">
                    <img class="detail" src="<?php echo T_DIRE_URI; ?>/assets/img/features101-2.png">
                </div>
            </div>
            <div class="part3">
                <h2 class="maintitle">
                    IR Roboticsが運営するサービス
                </h2>
                <div class="window">
                    <h4 class="title">
                    IPO 経営戦略支援事業
                    </h4>
                    <div class="content">
                        <div class="wrapper">
                            <img class="img-title01" src="<?php echo T_DIRE_URI; ?>/assets/img/features102.png">
                            <b>本気でIPOを実現したい企業のための会員制コミュニティ</b>
                            <p class="desc">
                            上場企業社長を講師に招いたIPOセミナーを毎月開催。1社1社ケースが異なるIPO準備段階において過去の事例を学ぶことで、事前に起こりうるトラブルを回避し、会員企業にとって健全なIPOを実現することを目指しています。
                            </p>
                        </div>
                        <div class="wrapper">
                            <img class="img-title04" src="<?php echo T_DIRE_URI; ?>/assets/img/features105.png">
                            <b>国内唯一の”上場企業の社長・役員”に特化した学びのコミュニティ</b>
                            <p class="desc">
                                日本を代表する企業となることを志し、企業価値向上へ本気で向き合う国内唯一の”上場企業の社長・役員”に特化した学びのコミュニティです。
                            </p>
                        </div>
                        <div class="wrapper">
                            <img class="img-title02" src="<?php echo T_DIRE_URI; ?>/assets/img/features103.png">
                            <b>経験者の過去の実体験から学びM&Aの成功を目指す会員制コミュニティ</b>
                            <p class="desc">
                            M&Aの経験者を講師に招いたM&A講座を毎月実施。過去に実施したディールにおける成功と失敗の実体験を学ぶことで、成長意欲の高い上場企業や有望なベンチャー・スタートアップ企業が理想的なM&Aを実現することを目指しています。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="window">
                    <h4 class="title">
                        IR活動支援事業
                    </h4>
                    <div class="content">
                        <div class="wrapper">
                            <img class="img-title03" src="<?php echo T_DIRE_URI; ?>/assets/img/features104.png">
                            <b>IRリリース動画配信サービス</b>
                            <p class="desc">
                            上場企業のためのIRリリース動画撮り放題サービスです。導入企業は月額固定の料金で何度でもIRリリース情報を動画収録することができます。企業理解を深めたい投資家に向けた、5G・動画時代に最適なオンラインIRツールです。
                            </p>
                        </div>
                        <div class="wrapper">
                            <img class="img-title05" src="<?php echo T_DIRE_URI; ?>/assets/img/features106.png">
                            <b>YouTubeチャンネル「Japan Stock Channel」</b>
                            <p class="desc">
                            上場企業の社長をゲストに、その企業のビジネスモデルと定量的な決算情報をQ&A方式で深堀りしていく株式情報番組です。収録した番組はYoutube,Twitter,Facebookのソーシャルメディアを通じて発信と拡散をします。
                            </p>
                        </div>
                        <div class="wrapper">
                            <img class="img-title06" src="<?php echo T_DIRE_URI; ?>/assets/img/features107.png">
                            <b>株式情報メディア「Next ten-Bagger」</b>
                            <p class="desc">
                            Next ten-Baggerの編集部が独自の視点で上場企業の成長可能性を調査・分析し、次のテンバガー銘柄（10倍株）候補としてご紹介。成長銘柄を探している投資家への有益な情報提供となることを目指しています。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="window last">
                    <h4 class="title">
                        人材支援事業
                    </h4>
                    <div class="content">
                        <h2 class="maintitle">
                            CxO人材バンクは、<br class="sp">成長企業の経営層との<br>
                            パイプ情報共有によって生まれた人材支援サービスです
                        </h2>
                        <div class="wrapper">
                            <img class="img-title07" src="<?php echo T_DIRE_URI; ?>/assets/img/logo.png">
                            <b>上場企業・IPO準備中企業に特化した国内唯一の人材ファーム</b>
                            <p class="desc">
                            エグゼクティブ層・マネジメント層・専門職など、企業における各機能の最高責任者のポストへ転職をサポートいたします。当事業を通して、企業の経営課題解決・企業成長に加速の一助となることを目指して参ります。
                            </p>
                        </div>
                        <div class="wrapper">
                            <img class="img-title08" src="<?php echo T_DIRE_URI; ?>/assets/img/features108.png">
                            <b>YouTubeチャンネル「CxOの履歴書チャンネル」</b>
                            <p class="desc">
                            実際に上場企業やIPO準備中企業でご活躍しているCxOの皆様をゲストにお招きして、皆様のキャリアをMCが深堀りしていく番組です。転職のタイミングやその意思決定した理由などCxOになるまでの裏側を紐解いていきます。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="history">
                <h2 class="maintitle">
                    CxO人材バンク立ち上げの経緯
                </h2>
                <ul class="history-wrapper">
                    <li>
                        <div class="eara">
                            <div class="duration-title">
                                <span>
                                    2013年10月
                                </span>
                            </div>
                            <div class="mark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <circle cx="16" cy="16" r="16" fill="#0099BD"/>
                                    <circle cx="16" cy="16" r="8" fill="white"/>
                                </svg>
                            </div>
                            <div class="desc">
                            IR Robotics 設立
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="eara">
                            <div class="duration-title">
                                <span>
                                2015年8月
                                </span>
                            </div>
                            <div class="mark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <circle cx="16" cy="16" r="16" fill="#0099BD"/>
                                    <circle cx="16" cy="16" r="8" fill="white"/>
                                </svg>
                            </div>
                            <div class="desc">
                            IRリリース動画配信サービス<br>
                            「IRTV」の提供開始
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="eara">
                            <div class="duration-title">
                                <span>
                                2017年7月
                                </span>
                            </div>
                            <div class="mark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <circle cx="16" cy="16" r="16" fill="#0099BD"/>
                                    <circle cx="16" cy="16" r="8" fill="white"/>
                                </svg>
                            </div>
                            <div class="desc">
                            上場を目指す企業の経営陣を<br>
                            対象とした会員制IPO勉強会<br>
                            「Next IPO Club」の提供開始
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="eara">
                            <div class="duration-title">
                                <span>
                                2020年1月
                                </span>
                            </div>
                            <div class="mark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <circle cx="16" cy="16" r="16" fill="#0099BD"/>
                                    <circle cx="16" cy="16" r="8" fill="white"/>
                                </svg>
                            </div>
                            <div class="desc">
                            株式情報メディア<br>
                            「Next ten-Bagger」をリリース
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="eara">
                            <div class="duration-title">
                                <span>
                                2020年6月
                                </span>
                            </div>
                            <div class="mark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <circle cx="16" cy="16" r="16" fill="#0099BD"/>
                                    <circle cx="16" cy="16" r="8" fill="white"/>
                                </svg>
                            </div>
                            <div class="desc">
                            上場企業の経営陣を<br>
                            対象とした会員制経営勉強会<br>
                            「上場企業俱楽部」の提供開始
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="eara current">
                            <div class="duration-title">
                                <span>
                                2020年8月<br>
                                CxO人材バンク開始
                                </span>
                            </div>
                            <div class="mark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <circle cx="16" cy="16" r="16" fill="#0099BD"/>
                                    <circle cx="16" cy="16" r="8" fill="white"/>
                                </svg>
                            </div>
                            <div class="desc">
                            上場企業社長や上場準備中企業社長向けのサービスを展開する中で、上場準備に必要な人材や、上場後さらなる成長に必要な人材のニーズを多くいただき、CxO人材支援事業を開始
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="overview">
                <h2 class="maintitle">
                    IR Robotics会社概要
                </h2>
                <div class="wrapper">
                    <div class="column">
                        <h4 class="title">
                            取引先情報
                        </h4>
                        <p class="content">
                            株式会社IR Robotics
                        </p>
                    </div>
                    <div class="column">
                        <h4 class="title">
                            本社
                        </h4>
                        <p class="content">
                            〒102-0083 東京都千代田区麹町5-3-23 We Work 日テレ四谷ビル<br>
                            TEL 03-6772-8482<br><br>
                            ※当社は電話取次代行サービスを利用しておりますので、新規営業のお電話を頂いてもお取次ぎ致しかねます。新規営業の場合は問い合わせフォームより頂戴しましたら、各担当が内容を確認しまして応対させて頂きます。
                        </p>
                    </div>
                    <div class="column">
                        <h4 class="title">
                            スタジオ
                        </h4>
                        <p class="content">
                            〒102-0093 東京都千代田区平河町1-4-14 VORT麹町ⅡB1F<br>
                            緊急連絡先（スタジオ直通）TEL 050-1742-3631
                        </p>
                    </div>
                    <div class="column">
                        <h4 class="title">
                            資本金
                        </h4>
                        <p class="content">
                            3,429万円
                        </p>
                    </div>
                    <div class="column">
                        <h4 class="title">
                            株主
                        </h4>
                        <p class="content">
                            株式会社ベクトル（東証プライム6058）、株式会社ミンカブ・ジ・インフォノイド（東証グロース4436）、金 成柱
                        </p>
                    </div>
                    <div class="column">
                        <h4 class="title">
                            役員
                        </h4>
                        <p class="content">
                            代表取締役金 成柱<br>
                            取締役 管理本部長孫 大基（公認会計士）<br>
                            社外取締役上木 英典<br>
                            常勤社外監査役亀田 雅博<br>
                            社外監査役森 博司<br>
                            監査役後藤 洋介。
                        </p>
                    </div>
                    <div class="column">
                        <h4 class="title">
                            法律顧問
                        </h4>
                        <p class="content">
                            <u>CrossOver法律事務所（Next IPO Club顧問）</u><br>
                            <u>フォーサイト総合法律事務所</u><br>
                            <u>弁護士法人GVA法律事務所</u>
                        </p>
                    </div>
                    <div class="column">
                        <h4 class="title">
                            事業内容
                        </h4>
                        <p class="content">
                            <b>
                                1）IR DX事業【上場企業向けオンラインIRツール
                            </b><br>
                            IRリリース動画のサブスクリプション型撮影配信サービス「IRTV」の運営<br>
                            IRサイト自動更新CMS「IR Direct」の開発・運用<br>
                            【IRメディア】<br>
                            ・YouTubeチャンネル「<u>Japan Stock Channel</u>」の企画・運営（2019年1月～）<br>
                            ・株式情報メディア「<u>Next ten-Bagger 未来の10倍"成長"株を探せ。</u>」の企画・運営（2020年1月～）<br>
                            【クリエイティブ】<br><br>
                            ・<u>IR用ビジネスモデル解説動画</u>の作成<br>
                            ・上場企業／上場準備中企業向けコーポレートサイトの制作<br><br>
                            <b>2）エデュケーション事業</b><br>
                            ・本気でIPOを実現したい企業のための会員制コミュニティ「<b>Next IPO Club</b>」の運営(2017年7月～)<br>
                            ・株式上場に興味を持ちはじめた企業のための会員制コミュニティ「<u>Next IPO Club インキュベーション</u>」の運営(2021年1月～)<br>
                            ・株式上場に興味を持ちはじめた地方企業のための会員制コミュニティ「地方から上場倶楽部」の運営(2021年6月～) ※「<u>全国47都道府県IPOセミナーツアー</u>」のnoteもご覧ください。<br>
                            上場企業社長／役員のための経営塾「<u>上場企業倶楽部</u>」の運営(2020年6月～)<br><br>
                            <b>3） CxO人材紹介事業</b><br>
                            ・ハイクラス人材と上場企業／上場準備企業をマッチングする人材紹介サービス「<u>CxO人材バンク</u>」の運営（2020年8月～）<br>
                            ・YouTubeチャンネル「<u>CxOの履歴書チャンネル</u>」の企画・運営（2020年8月～）
                        </p>
                    </div>
                    <div class="column">
                        <h4 class="title">
                            免許等
                        </h4>
                        <p class="content">
                            有料職業紹介事業許可番号 １３ーユー３１１８３９
                        </p>
                    </div>
                    <div class="column">
                        <h4 class="title">
                            加盟団体
                        </h4>
                        <p class="content">
                            一般社団法人 新経済連盟、一般社団法人アジア経営者連合会、地方創生SDGs官民連携プラットフォーム
                        </p>
                    </div>
                </div>
            </div>
            <p class="related-label">関連ページ</p>
            <a class="gotopage" href="<?php echo HOME . 'features'; ?>">
                <img src="<?php echo T_DIRE_URI; ?>/assets/img/right-arrow-incircle.png">
                CxO人材バンクの特長
            </a>
            <a class="gotopage" href="<?php echo HOME . 'features/media'; ?>">
                <img src="<?php echo T_DIRE_URI; ?>/assets/img/right-arrow-incircle.png">
                CxO人材バンク関連コミュティやメディア
            </a>
        </div>
    </main>

<?php get_footer();?>