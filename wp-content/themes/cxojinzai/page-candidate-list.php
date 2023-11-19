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
            <!-- <span class="red-color">※候補者とのご面談をご希望される企業様は「人材紹介契約」の締結が必要となります。</span><br><br> -->
            </p>

            <?php
            $emp_terms = get_terms( array(
                'taxonomy'   => 'employee-category',
                'hide_empty' => false,
            ) );
            ?>
            <?php if( $emp_terms ) : ?>
            <ul class="tabs">
                <?php foreach( $emp_terms as $emp_term ) : ?>
                <li class="tab <?php echo $emp_term->name; ?>" data-employee="<?php echo $emp_term->name; ?>">
                    <a><?php echo $emp_term->name; ?></a>
                </li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>

            <?php
            $occu_terms = get_terms( array(
                'taxonomy'   => 'occupation-category',
                'orderby'    => 'post_date',
                'order'      => 'DESC',
                'hide_empty' => false,
            ) );
            ?>
            <?php if( $occu_terms ) : ?>
            <div class="categories">
                <?php foreach( $occu_terms as $occu_term ) : ?>
                <a class="category <?php echo $occu_term->name; ?>" data-occupation="<?php echo $occu_term->name; ?>"><?php echo $occu_term->name; ?></a>
                <?php endforeach; ?>
                <div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
            </div>
            <?php endif; ?>

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
            let checked_list = [];
            $(document).ready(function(){
                let employee = $(".tab.active").attr('data-employee');
                let occupation = $(".category.active").attr('data-occupation');
                let nCheckedCount = checked_list.length;

                if($.cookie('checkbox_list')) {
                    checked_list = ($.cookie('checkbox_list')).split(',');
                    nCheckedCount = checked_list.length;
                    $.cookie('checkbox_list', '', { path: '/candidate-list/' });
                }
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

                employee = localStorage.getItem("employee");
                occupation = localStorage.getItem("occupation");
                if( !employee) {
                    employee = '正規雇用';
                }
                if( !occupation ) {
                    if( occupation != '') {
                        occupation = '経理財務課長';
                    }
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
                if( occupation != '' ) {
                    if( !$('.category.' + occupation).hasClass('active') ) {
                        $('.category.' + occupation).addClass('active');
                    }
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
                    if( occupation == $(this).attr('data-occupation') ) {
                        occupation = '';
                        if( $(this).hasClass('active') ) {
                            $(this).removeClass('active');
                        }
                    } else {
                        $(this).addClass('active');
                        occupation = $(this).attr('data-occupation');
                    }
                    async_Request(employee, occupation);
                });

                $('.cards-wrapper').on('change', '.cards-list .card label .interest-checkbox', function() {                    
                    let current_id = $(this).attr('id');
                    if($(this).prop('checked')) {   //checked checkbox lists
                        if( !checked_list.includes(current_id) ) {
                            checked_list.push(current_id);
                        }
                    } else {
                        if( checked_list.includes(current_id) ) {
                            var index = checked_list.indexOf(current_id);
                            if (index !== -1) {
                                checked_list.splice(index, 1);
                            }
                        }
                    }

                    nCheckedCount = checked_list.length;
                    let footer_btn = $('.footer-btn');
                    if( nCheckedCount > 0 ) {  //activate or deactivate of the 候補者との面談を希望する button
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
                    nCheckedCount = checked_list.length;
                    for( i = 0 ; i < nCheckedCount - 1 ; i++ ) {
                        url = url + 'id[' + i + ']=' + checked_list[i] + '&';
                    }
                    url = url + 'id[' + (nCheckedCount - 1) + ']=' + checked_list[nCheckedCount - 1];
                    window.location.href = url;
                })
            });
            
            function async_Request(employee, occupation) {
                localStorage.setItem("employee", employee);
                localStorage.setItem("occupation", occupation);
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
                        
                        $.each(checked_list, function(index, value) {
                            $('#' + value).prop('checked', true);
                        });
                    },
                });
            }
        })(jQuery);
    </script>
<?php get_footer('contact');?>