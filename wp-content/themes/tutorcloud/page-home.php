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
<div class="home-banner-div">


    <div class="home-banner-content">
        <div class="banner-msg">
            開業優惠！只收導師 <span class="large-txt">1.5星期</span> 學費作行政費 <br>
            家長可獲高達 <span class="large-txt">$100</span> 現金回贈
        </div>

        <div class="text-center mt-5">
            <a href="#" class="know-more-btn">了解更多</a>
        </div>
    </div>
</div>

<div class="container mt-5">

    <div class="text-center">
        <h2>關於TutorCloud
            <div class="bar"></div>
        </h2>
    </div>

    <div class="row gx-5">
        <div class="col-4"> <img class="w-100" src="<?php echo get_template_directory_uri();?>/assets/images/icon-1.png"
                alt="">
        </div>
        <div class="col-4"><img class="w-100" src="<?php echo get_template_directory_uri();?>/assets/images/icon-2.png"
                alt=""></div>
        <div class="col-4"><img class="w-100" src="<?php echo get_template_directory_uri();?>/assets/images/icon-3.png"
                alt=""></div>
    </div>
</div>
<?php
get_footer();