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

        <?php echo do_shortcode('[contact-form-7 id="378" title="Forgot pw"]');?>
    </div>









</div>
<?php
get_footer();