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

    <div class="text-center">

        <?php //echo do_shortcode('[contact-form-7 id="378" title="Forgot pw"]');?>

        <label for="login-email">登入電郵</label>
        <input type="text" class="form-control" id="login-email">
    </div>









</div>
<style type="text/css">
.wpcf7-submit {
    display: none;
}
</style>
<script type="text/javascript">
$(function() {

    $('.wpcf7-form').submit(function() {
        return false;
    })


})
</script>
<?php
get_footer();