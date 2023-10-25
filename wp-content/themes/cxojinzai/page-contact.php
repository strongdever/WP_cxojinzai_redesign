<?php
/*
Template Name: Contact Template
*/

if ( ! defined( 'ABSPATH' ) ) exit;
get_header('contact');

$paged = get_query_var('paged') ? get_query_var('paged') : 1;

?>

    <main id="pre-entry" class="main-form">
        <div class="common-firstview">
            <h3 class="section-title">採用ご担当者様<br>お申し込みフォーム</h3>
            <h5 class="eng-title">CONTACT</h5>
        </div>
        <div class="container">
            <p class="desc heading">現在、実際にご転職を検討している方に、ヒアリング面談や、企業及び求人のご紹介をいたします。<br>お気軽にお申し込みください！<br>※2営業日以内にエージェントよりご連絡差し上げます。</p>
            <form action="https://go.cxo-jinzaibank.jp/l/1022123/2023-08-16/cc6n" method="post">
                <ul class="form-wrapper">
                    <li class="vertical-wrapper input-item">
                        <label for="company" class="required desc bold">会社名</label>
                        <input type="text" name="company" id="company" class="input whole-length desc" size="60" value="" placeholder="例）株式会社IR Robotics" />

                    </li>
                    <li class="vertical-wrapper input-item name-wrapper">
                        <label for="name" class="required desc bold">お名前</label>
                        <div class="input-wrapper horizontal-wrapper">
                            <div class="vertical-wrapper input-item">
                                <input type="text" name="lastname" id="lastname" class="requires sub-input input desc" size="60" value="" placeholder="姓" />

                            </div>
                            <div class="vertical-wrapper input-item">
                                <input type="text" name="firstname" id="firstname" class="sub-input input desc" size="60" value="" placeholder="名" />

                            </div>
                        </div>
                    </li>
                    <li class="vertical-wrapper input-item">
                        <label for="email" class="required desc bold">メールアドレス</label>
                        <input type="text" name="email" id="email" class="input whole-length desc" size="60" value="" placeholder="例）mail@example.com" />

                    </li>
                    <li class="vertical-wrapper input-item">
                        <label for="phone" class="required desc bold">電話番号</label>
                        <input type="text" name="phone" id="phone" class="input half-length desc" size="60" value="" placeholder="例）050-1742-3631" />

                    </li>
                    <li class="vertical-wrapper checkbox-item">
                        <label for="service" class="required desc bold">お申し込みのサービス</label>
                        <div name="service" id="service" class="checkbox-wrapper">
                            <div class="horizontal-wrapper">
                                <input type="checkbox" id="service" name="service" value="人材紹介（正規雇用）">
                                <label for="service">人材紹介（正規雇用）</label>
                            </div>
                            <div class="horizontal-wrapper">
                                <input type="checkbox" id="service" name="service" value="社外取締役・監査役の紹介">
                                <label for="service">社外取締役・監査役の紹介</label>
                            </div>
                            <div class="horizontal-wrapper">
                                <input type="checkbox" id="service" name="service" value="顧問・業務委託契約の紹介">
                                <label for="service">顧問・業務委託契約の紹介</label>
                            </div>
                        </div>
                    </li>
                    <li class="vertical-wrapper input-item">
                        <label for="inquiry" class="required desc bold">問い合わせ内容</label>
                        <textarea name="inquiry" id="inquiry" class="input whole-length desc" cols="50" rows="5" ></textarea>

                    </li>
                    <li class="horizontal-wrapper input-privacy">
                        <div class="vertical-wrapper">
                            <span class="mwform-checkbox-field horizontal-item">
                                <label for="privacyok-1">
                                <input type="checkbox" id="privacyok" name="privacyok">
                                    <span class="mwform-checkbox-field-text"> </span>
                                </label>
                                <label for="privacyok"><span><a href="https://go.cxo-jinzaibank.jp/l/1022123/2023-04-17/3dnr" target="_blank">個人情報保護方針</a></span>に同意します</label>
                            </span>
                        </li>
                    <li class="horizontal-wrapper input-button">
                        <button type="submit" name="submitConfirm" value="confirm" class="action-btn next"><span>送信する</span></button>
                        
                    </li>
                    
                </ul>
            </form>
        </div>
    </main>
<?php get_footer('contact');?>