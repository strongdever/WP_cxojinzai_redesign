<?php
/*
Template Name: Entry Confirm Template
*/

if ( ! defined( 'ABSPATH' ) ) exit;
get_header('contact');

$paged = get_query_var('paged') ? get_query_var('paged') : 1;

?>

    <main id="pre-entry-confirm" class="main-form main-form-confirm">
    <div class="common-firstview">
            <h3 class="section-title">具体的な転職相談<br>お申し込みフォーム</h3>
            <h5 class="eng-title">ENTRY</h5>
        </div>
        <div class="container">
            <p class="desc heading">内容をご確認の上、よろしければ「送信する」をクリックしてください。</p>
            <?php the_content(); ?>
        </div>
    </main>
    
    <script>
        $(document).ready(function() {
            $('.submit-btn').click(function(e) {
                e.preventDefault(); // Prevent the form from submitting normally
                $('.confirm-spinner').show();
                var lastname_val = document.querySelector("#pre-entry-form > ul > li.vertical-wrapper.input-item.name-wrapper > div > div:nth-child(1) > input[type=hidden]").value;
                var firstname_val = document.querySelector("#pre-entry-form > ul > li.vertical-wrapper.input-item.name-wrapper > div > div:nth-child(2) > input[type=hidden]").value;
                var email_val = document.querySelector("#pre-entry-form > ul > li:nth-child(2) > input[type=hidden]").value;
                var phone_val = document.querySelector("#pre-entry-form > ul > li:nth-child(3) > input[type=hidden]").value;
                var annualincome_val = document.querySelector("#pre-entry-form > ul > li:nth-child(4) > input[type=hidden]").value;
                var industry_val = document.querySelector("#pre-entry-form > ul > li:nth-child(5) > div:nth-child(1) > input[type=hidden]:nth-child(2)").value;
                var occupation_val = document.querySelector("#pre-entry-form > ul > li:nth-child(5) > div:nth-child(2) > input[type=hidden]:nth-child(2)").value;
                var wantindustry_val = document.querySelector("#pre-entry-form > ul > li:nth-child(6) > div:nth-child(1) > input[type=hidden]:nth-child(2)").value;
                var wantoccupation_val = document.querySelector("#pre-entry-form > ul > li:nth-child(6) > div:nth-child(2) > input[type=hidden]:nth-child(2)").value;
                var freecoment_val = document.querySelector("#pre-entry-form > ul > li:nth-child(7) > input[type=hidden]").value;
                const formData = {
                    lastname: lastname_val,
                    firstname: firstname_val,
                    email: email_val,
                    phone: phone_val,
                    annualincome: annualincome_val,
                    industry: industry_val,
                    occupation: occupation_val,
                    wantindustry: wantindustry_val,
                    wantoccupation: wantoccupation_val,
                    freecoment: freecoment_val
                };

                $.ajax({
                    url: 'http://go.cxo-jinzaibank.jp/l/1022123/2023-08-16/c9s5',
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        window.location.href = "<?php echo HOME . 'pre-entry/thankyou'; ?>";
                    },
                    error: function(error) {
                        $('.confirm-spinner').hide();
                        $('.confirm-error').show();
                        alert("failed!!!");
                    }
                });
            });
        });

    </script>
<?php get_footer('contact');?>