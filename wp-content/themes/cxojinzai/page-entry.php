<?php
/*
Template Name: Entry Template
*/

if ( ! defined( 'ABSPATH' ) ) exit;
get_header('contact');

$paged = get_query_var('paged') ? get_query_var('paged') : 1;

?>

    <main id="pre-entry" class="main-form">
        <div class="common-firstview">
            <h3 class="section-title">具体的な転職相談<br>お申し込みフォーム</h3>
            <h5 class="eng-title">ENTRY</h5>
        </div>
        <div class="container">
            <p class="desc heading">現在、実際にご転職を検討している方に、ヒアリング面談や、企業及び求人のご紹介をいたします。<br>お気軽にお申し込みください！<br>※2営業日以内にエージェントよりご連絡差し上げます。</p>
            
            <form action="https://go.cxo-jinzaibank.jp/l/1022123/2023-08-16/c9s5" method="post">
                <ul class="form-wrapper">
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
                    <li class="vertical-wrapper input-item">
                        <label for="annualincome" class="required desc bold">直近の年収</label>
                        <select name="annualincome" id="annualincome" class="requires input sources sub-input deschalf-length">
                            <option value="" selected='selected'>選択してください</option>
                            <option value="600万以上～800万未満" >
                            600万以上～800万未満		</option>
                            <option value="800万以上～1000万未満" >
                            800万以上～1000万未満		</option>
                            <option value="1000万以上～1300万未満" >
                            1000万以上～1300万未満		</option>
                            <option value="1300万以上～1500万未満" >
                            1300万以上～1500万未満		</option>
                            <option value="1500万以上" >
                            1500万以上		</option>
                        </select>

                    </li>
                    <li class="horizontal-wrapper pc-only">
                        <div class="vertical-wrapper input-item">
                            <label for="industry" class="required desc bold">直近の業種</label>
                            <select name="industry" id="industry" class="input sources sub-input desc">
                                <option value="" selected='selected'>
                                選択してください		</option>
                                <option value="金融・保険" >
                                金融・保険		</option>
                                <option value="建設・不動産" >
                                建設・不動産		</option>
                                <option value="コンサル・士業" >
                                コンサル・士業		</option>
                                <option value="IT" >
                                IT		</option>
                                <option value="メーカー・商社" >
                                メーカー・商社		</option>
                                <option value="流通・小売・サービス" >
                                流通・小売・サービス		</option>
                                <option value="メディカル" >
                                メディカル		</option>
                                <option value="マスコミ・メディア" >
                                マスコミ・メディア		</option>
                                <option value="エンターテインメント" >
                                エンターテインメント		</option>
                                <option value="運輸・物流" >
                                運輸・物流		</option>
                                <option value="エネルギー" >
                                エネルギー		</option>
                                <option value="その他（教育・官公庁など）" >
                                その他（教育・官公庁など）		</option>
                            </select>
                        </div>
                        <div class="vertical-wrapper input-item">
                            <label for="occupation" class="required desc bold">直近の職種</label>
                            <select name="occupation" id="occupation" class="input sources sub-input desc">
                                <option v`alue="" selected='selected'>
                                選択してください		</option>
                                <option value="コーポレート" >
                                コーポレート		</option>
                                <option value="財務・経理" >
                                財務・経理		</option>
                                <option value="経営企画・戦略経営" >
                                経営企画・戦略経営		</option>
                                <option value="事業企画・開発" >
                                事業企画・開発		</option>
                                <option value="広報・IR" >
                                広報・IR		</option>
                                <option value="人事" >
                                人事		</option>
                                <option value="営業" >
                                営業		</option>
                                <option value="マーケティング" >
                                マーケティング		</option>
                                <option value="コンサルタント" >
                                コンサルタント		</option>
                                <option value="エンジニア" >
                                エンジニア		</option>
                                <option value="クリエイター" >
                                クリエイター		</option>
                                <option value="経営者・フリーランス" >
                                経営者・フリーランス		</option>
                                <option value="その他" >
                                その他		</option>
                            </select>
                        </div>
                    </li>
                    <li class="horizontal-wrapper pc-only">
                        <div class="vertical-wrapper input-item">
                            <label for="wantindustry" class="desc bold">希望の業種</label>
                            
                            <select name="wantindustry" id="wantindustry" class="input sources sub-input desc">
                                <option value="" selected='selected'>
                                選択してください		</option>
                                <option value="金融・保険" >
                                金融・保険		</option>
                                <option value="建設・不動産" >
                                建設・不動産		</option>
                                <option value="コンサル・士業" >
                                コンサル・士業		</option>
                                <option value="IT" >
                                IT		</option>
                                <option value="メーカー・商社" >
                                メーカー・商社		</option>
                                <option value="流通・小売・サービス" >
                                流通・小売・サービス		</option>
                                <option value="メディカル" >
                                メディカル		</option>
                                <option value="マスコミ・メディア" >
                                マスコミ・メディア		</option>
                                <option value="エンターテインメント" >
                                エンターテインメント		</option>
                                <option value="運輸・物流" >
                                運輸・物流		</option>
                                <option value="エネルギー" >
                                エネルギー		</option>
                                <option value="その他（教育・官公庁など）" >
                                その他（教育・官公庁など）		</option>
                            </select>
                        </div>
                        <div class="vertical-wrapper input-item">
                            <label for="wantoccupation" class="desc bold">希望の職種</label>
                            
                        <select name="wantoccupation" id="wantoccupation" class="input sources sub-input desc">
                            <option value="" selected='selected'>
                            選択してください		</option>
                            <option value="コーポレート" >
                            コーポレート		</option>
                            <option value="財務・経理" >
                            財務・経理		</option>
                            <option value="経営企画・戦略経営" >
                            経営企画・戦略経営		</option>
                            <option value="事業企画・開発" >
                            事業企画・開発		</option>
                            <option value="広報・IR" >
                            広報・IR		</option>
                            <option value="人事" >
                            人事		</option>
                            <option value="営業" >
                            営業		</option>
                            <option value="マーケティング" >
                            マーケティング		</option>
                            <option value="コンサルタント" >
                            コンサルタント		</option>
                            <option value="エンジニア" >
                            エンジニア		</option>
                            <option value="クリエイター" >
                            クリエイター		</option>
                            <option value="経営者・フリーランス" >
                            経営者・フリーランス		</option>
                            <option value="その他" >
                            その他		</option>
                        </select>
                    </div>
                    </li>
                    <li class="vertical-wrapper input-item">
                        <label for="freecoment" class="desc bold">転職活動へのお考えや期待するもの、その他ご要望等、ご自由にご記入ください。</label>
                        <textarea name="freecoment" id="freecoment" class="input whole-length desc" cols="50" rows="5" ></textarea>

                    </li>
                    <li class="horizontal-wrapper input-privacy">
                        <div class="vertical-wrapper">
                            
                            <span class="mwform-checkbox-field horizontal-item">
                                <label for="privacyok-1">
                                <input type="checkbox" id="privacyok" name="privacyok">
                                </label>
                            </span>
                        </div>
                        <label for="privacyok"><span><a href="https://go.cxo-jinzaibank.jp/l/1022123/2023-04-17/3dnr" target="_blank">個人情報保護方針</a></span>に同意します</label>
                    </li>
                    <li class="horizontal-wrapper input-button">
                        <button type="submit" name="submitConfirm" value="confirm" class="action-btn next"><span>送信する</span></button>
                    </li>
                </ul>
            </form>
        </div>
    </main>
<?php get_footer('contact');?>