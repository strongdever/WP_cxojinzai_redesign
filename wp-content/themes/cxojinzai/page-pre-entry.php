<?php
/*
Template Name: Pre-entry Template
*/

if ( ! defined( 'ABSPATH' ) ) exit;
get_header('contact');

$paged = get_query_var('paged') ? get_query_var('paged') : 1;

?>

    <main id="pre-entry" class="main-form">
        <div class="common-firstview">
            <h3 class="section-title">中長期のキャリア相談<br>お申し込みフォーム</h3>
            <h5 class="eng-title">PRE-ENTRY</h5>
        </div>
        <div class="container">
            <p class="desc heading">中長期的にご転職を視野に入れている・<br class="sp">情報収集をしている方に<br>
            面談やイベントを通じて、<br class="sp">企業に関する情報などを提供いたします。<br>
            ぜひお気軽にお申し込みください！<br>
            ※2営業日以内にエージェントより<br class="sp">ご連絡差し上げます。</p>
            <form action="https://go.cxo-jinzaibank.jp/l/1022123/2023-08-16/c9yr" method="post">
                <ul class="form-wrapper">
                    <li class="vertical-wrapper input-item name-wrapper">
                        <label for="name" class="required desc bold">お名前</label>
                        <div class="input-wrapper horizontal-wrapper">
                            <div class="vertical-wrapper input-item">
                                <input id="lastname" name="lastname" type="text" class="requires sub-input input desc medium" placeholder="姓">
                            </div>
                            <div class="vertical-wrapper input-item">
                                <input  id="firstname" name="firstname" type="text" class="sub-input input desc medium" placeholder="名">
                            </div>
                        </div>
                    </li>
                    <li class="vertical-wrapper input-item">
                        <label for="email" class="required desc bold">メールアドレス</label>
                        <input id="email" name="email" type="text" class="input whole-length desc medium" placeholder="例）mail@example.com">
                    </li>
                    <li class="vertical-wrapper input-item">
                        <label for="phone" class="required desc bold">電話番号</label>
                        <input id="phone" name="phone" type="text" class="input half-length desc medium" placeholder="例）050-1742-3631">
                    </li>
                    <li class="vertical-wrapper input-item">
                        <label for="annualincome" class="required desc bold">直近の年収</label>
                        <select name="annualincome" id="annualincome" class="requires input sources sub-input half-length desc medium">
                            <option value="0" label="選択してください">選択してください</option>
                            <option>600万以上～800万未満</option>
                            <option>800万以上～1000万未満</option>
                            <option>1000万以上～1300万未満</option>
                            <option>1300万以上～1500万未満</option>
                            <option>1500万以上</option>
                        </select>
                    </li>
                    <li class="horizontal-wrapper pc-only">
                        <div class="vertical-wrapper input-item">
                            <label for="industry" class="desc bold">直近の業種</label>
                            <select name="industry" id="industry" class="input sources sub-input desc medium">
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
                            <label for="occupation" class="desc bold">直近の職種</label>
                            <select name="occupation" id="occupation" class="input sources sub-input desc medium">
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
                    <li class="horizontal-wrapper input-privacy">
                        <div class="vertical-wrapper">
                            <input type="checkbox" id="privacyok" name="privacyok">
                        </div>
                        <label for="privacyok"><span><a href="https://go.cxo-jinzaibank.jp/l/1022123/2023-04-17/3dnr" target="_blank">個人情報保護方針</a></span>に同意します</label>
                    </li>
                    <li class="horizontal-wrapper input-button">
                        <button type="submit" class="action-btn"><span>送信する</span></button>
                    </li>
                </ul>
            </form>
        </div>
    </main>
    
<?php get_footer('contact');?>