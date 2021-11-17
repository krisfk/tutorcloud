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

    <div class="row gx-5 ">
        <div class="col-4"> <img class="w-100" src="<?php echo get_template_directory_uri();?>/assets/images/icon-1.png"
                alt="">
            <div class="pt-title mt-3">優良師資</div>
            <div>所有導師均為現職大學生及具有學士學位或以上資歷，確保導師知識水平及能力，為學生提供最優質的教育。</div>
        </div>
        <div class="col-4"><img class="w-100" src="<?php echo get_template_directory_uri();?>/assets/images/icon-2.png"
                alt="">
            <div class="pt-title mt-3">簡易登記</div>
            <div>登記過程簡易快速，只需填寫個案基本資料，最快2分鐘內完成登記。</div>
        </div>
        <div class="col-4"><img class="w-100" src="<?php echo get_template_directory_uri();?>/assets/images/icon-3.png"
                alt="">
            <div class="pt-title mt-3">彈性課堂</div>
            <div>學生可以自由選擇上課地點及時間，不論是上門、會所、視像補習都由學生自行決定。不像傳統補習社限制時間和地點，私人補習配對解決空間和時間的限制。</div>
        </div>
    </div>
</div>
<?php
get_footer();