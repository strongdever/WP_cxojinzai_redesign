<?php
/*
Template Name: Top Recommend Template
*/

if ( ! defined( 'ABSPATH' ) ) exit;
get_header('contact');

$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$employee = get_query_var('employee') ? get_query_var('employee') : '';
$occupation = get_query_var('occupation') ? get_query_var('occupation') : '';

?>

    <main id="candidate-list" class="main-form candidate">
        <div class="common-firstview">
            <h3 class="section-title">イチオシ人材のご紹介</h3>
            <h5 class="eng-title">TOP RECOMMENDED</h5>
        </div>
        <div class="container">
            <p class="desc heading">「職務経歴書」のボタンから候補者のマスクレジュメをご確認いただけます。<br>
            ご興味をお持ち頂いた人材の「興味あり」にチェックした後、「候補者との面談を希望する」のボタンから、必要情報をご入力し送信してください。<br>
            すぐに候補者ご本人に応募意思の確認をいたします。<br>
            <span class="red-color">※候補者とのご面談をご希望される企業様は「人材紹介契約」の締結が必要となります。</span><br><br>
            </p>

            <ul class="tabs">
                <li class="tab 正規雇用" data-employee="正規雇用">
                    <a>正規雇用</a>
                </li>
                <li class="tab 社外取締役・監査役" data-employee="社外取締役・監査役">
                    <a>社外取締役・監査役</a>
                </li>
                <li class="tab 業務委託" data-employee="業務委託">
                    <a>業務委託</a>
                </li>
            </ul>

            <div class="categories">
                <a class="category 経理財務課長" data-occupation="経理財務課長">経理財務課長</a>
                <a class="category マーケティング" data-occupation="マーケティング">マーケティング</a>
                <a class="category エンジニア" data-occupation="エンジニア">エンジニア</a>
                <a class="category IR" data-occupation="IR">IR</a>
                <div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
            </div>

            <div class="cards-wrapper">
                <!-- card-list body -->
            </div>
        </div>
        
        <div class="footer-part">
            <p class="footer-text">※「興味あり」にチェックをいれてください</p>
            <a class="footer-btn">候補者との面談を希望する</a>
        </div>
    </main>
    <script type="text/javascript">
        !(function ($) {
            $(document).ready(function(){
                let employee = $(".tab.active").attr('data-employee');
                let occupation = $(".category.active").attr('data-occupation');

                employee = localStorage.getItem("employee");
                occupation = localStorage.getItem("occupation");
                if( !employee) {
                    employee = '正規雇用';
                }
                if( !occupation ) {
                    occupation = '経理財務課長';
                }
                //active of tab when loading
                if( $('.tab').hasClass('active') ) {
                    $('.tab').removeClass('active');
                }
                if( !$('.tab.' + employee).hasClass('active') ) {
                    $('.tab.' + employee).addClass('active');
                }

                //active of category when loading
                if( $('.category').hasClass('active') ) {
                    $('.category').removeClass('active');
                }
                if( !$('.category.' + occupation).hasClass('active') ) {
                    $('.category.' + occupation).addClass('active');
                }
                
                async_Request(employee, occupation);    //display the cards list when loading

                $('.tab').click(function() {
                    if( $('.tab').hasClass('active') ) {
                        $('.tab').removeClass('active');
                    }
                    $(this).addClass('active');
                    employee = $(this).attr('data-employee');
                    async_Request(employee, occupation);
                });

                $('.category').click(function() {
                    if( $('.category').hasClass('active') ) {
                        $('.category').removeClass('active');
                    }
                    $(this).addClass('active');
                    occupation = $(this).attr('data-occupation');
                    async_Request(employee, occupation);
                });

                let nCheckedCount = $('input[class="interest-checkbox"]:checked').length;
                let footer_btn = $('.footer-btn');
                if( nCheckedCount > 0 ) {
                    if( !footer_btn.hasClass('active') ) {
                        footer_btn.addClass('active');
                    }
                } else {
                    if( footer_btn.hasClass('active') ) {
                        footer_btn.removeClass('active');
                    }
                }
                $('.cards-wrapper').on('change', '.cards-list .card label .interest-checkbox', function() {
                    nCheckedCount = $('input[class="interest-checkbox"]:checked').length;
                    let footer_btn = $('.footer-btn');
                    if( nCheckedCount > 0 ) {
                        if( !footer_btn.hasClass('active') ) {
                            footer_btn.addClass('active');
                        }
                    } else {
                        if( footer_btn.hasClass('active') ) {
                            footer_btn.removeClass('active');
                        }
                    }
                })

                $('.footer-btn').click(function(e) {
                    if( !$(this).hasClass('active') ) {
                        return 0;
                    }
                    let url = "<?php echo HOME . 'candidate-list/form/?'; ?>";
                    let checkedInputs = $('input[class="interest-checkbox"]:checked');
                    nCheckedCount = checkedInputs.length;
                    for( i = 0 ; i < nCheckedCount - 1 ; i++ ) {
                        url = url + 'id[' + i + ']=' + checkedInputs[i].value + '&';
                    }
                    url = url + 'id[' + (nCheckedCount - 1) + ']=' + checkedInputs[nCheckedCount - 1].value;
                    window.location.href = url;
                })
            });
            
            function async_Request(employee, occupation) {
                localStorage.setItem("employee", employee);
                localStorage.setItem("occupation", occupation);
                if( $('.footer-btn').hasClass("active") ) {
                    $('.footer-btn').removeClass('active');
                }
                var data = {
                    employee: employee,
                    occupation: occupation,
                }
                // var json_data = JSON.stringify(data);
                $(".lds-spinner").show();
                $.ajax({
                    url: ajax_object.ajax_url,
                    type: 'POST',
                    data: {
                        action: 'my_ajax_action',
                        my_data: data
                    },
                    success: function(response) {
                        // Handle the response
                        cards_data = response.data['cards_data'];
                        $('.cards-wrapper').empty();
                        $('.cards-wrapper').append(cards_data);
                        $(".lds-spinner").hide();
                    },
                });
            }
        })(jQuery);
    </script>
<?php get_footer('contact');?>