<?php
/*
Template Name: Contact Confirm Template
*/

if ( ! defined( 'ABSPATH' ) ) exit;
get_header('contact');

$paged = get_query_var('paged') ? get_query_var('paged') : 1;

?>

    <main id="pre-entry-confirm" class="main-form main-form-confirm">
        <div class="common-firstview">
            <h3 class="section-title">採用ご担当者様<br>お申し込みフォーム</h3>
            <h5 class="eng-title">CONTACT</h5>
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
                var company_val = document.querySelector("#pre-entry-form > ul > li:nth-child(1) > input[type=hidden]").value;
                var lastname_val = document.querySelector("#pre-entry-form > ul > li.vertical-wrapper.input-item.name-wrapper > div > div:nth-child(1) > input[type=hidden]").value;
                var firstname_val = document.querySelector("#pre-entry-form > ul > li.vertical-wrapper.input-item.name-wrapper > div > div:nth-child(2) > input[type=hidden]").value;
                var email_val = document.querySelector("#pre-entry-form > ul > li:nth-child(3) > input[type=hidden]").value;
                var phone_val = document.querySelector("#pre-entry-form > ul > li:nth-child(4) > input[type=hidden]").value;
                var service_val = document.querySelector("#pre-entry-form > ul > li:nth-child(5) > input[type=hidden]").value;
                var inquiry_val = document.querySelector("#pre-entry-form > ul > li:nth-child(6) > input[type=hidden]").value;
                const formData = {
                    company: company_val,
                    lastname: lastname_val,
                    firstname: firstname_val,
                    email: email_val,
                    phone: phone_val,
                    service: service_val,
                    inquiry: inquiry_val
                };

                $.ajax({
                    url: 'http://go.cxo-jinzaibank.jp/l/1022123/2023-08-16/cc6n',
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