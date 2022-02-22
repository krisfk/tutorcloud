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

    主頁 > 聯絡我們
</div>
<div class="container mt-5">

    <div class="text-center">
        <h2>聯絡我們
            <div class="bar"></div>
        </h2>
    </div>


    <div class="text-center">


        <a href="https://wa.me/message/DPN557RPMIDTF1" target="_blank">whatsapp</a>
        <?php
    echo do_shortcode('[contact-form-7 id="375"  title="Contact form 1"]');
    ?>
    </div>









</div>
<?php
get_footer();