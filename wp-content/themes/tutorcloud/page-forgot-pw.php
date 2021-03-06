<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>

<div class="breadcrumb mt-4">

    主頁 > 忘記密碼
</div>
<div class="container mt-5">

    <div class="text-center">
        <h2>忘記密碼
            <div class="bar"></div>
        </h2>
    </div>

    <div class="text-center mt-4">

        <?php //echo do_shortcode('[contact-form-7 id="378" title="Forgot pw"]');?>

        <div class="form-div">
            <label for="login-email">登入電郵</label>
            <input type="text" class="form-control mt-2" id="login-email">

            <a href="javascript:void(0);" class="forgot-fw-submit-btn mt-3">發送</a>
        </div>
    </div>









</div>
<style type="text/css">
.form-div {
    display: inline-block;
    text-align: left;
}

.form-div {}
</style>
<script type="text/javascript">
$(function() {


    $('.forgot-fw-submit-btn').click(function() {

        var email = $('#login-email').val();




        $.ajax({
            type: "POST",
            url: '<?php echo get_site_url();?>/wp-json/api/forgot_pw',
            data: {
                email: email
            },
            dataType: "json",
        }).done(function(response) {
            console.log(response);
            if (response.status == -1) {
                alert(response.msg);

            } else {

                $('.form-div').html(response.msg);

            }






        }).fail(function(Response) {});


    })

})
</script>
<?php
get_footer();