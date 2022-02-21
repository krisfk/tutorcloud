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
            <?php echo get_field('promotion_txt');?>

        </div>

        <div class="text-center mt-5">
            <a href="<?php echo get_site_url();?>/promotion" class="know-more-btn">了解更多</a>
        </div>
    </div>
</div>

<div class="container mt-5">

    <div class="text-center mb-4">
        <h2>關於TutorCloud
            <div class="bar"></div>
        </h2>
    </div>

    <div class="row gx-5  ">
        <div class="col-lg-4 col-md-4 col-sm-6 col-6 mb-4 text-center"> <img class="pt-icon"
                src="<?php echo get_template_directory_uri();?>/assets/images/icon-1.png" alt="">
            <?php echo get_field('content_1');?>
            <!-- <div class="pt-title mt-3">優良師資</div>
            <div class="pt-content mt-3">所有導師均為現職大學生及具有學士學位或以上資歷，確保導師知識水平及能力，為學生提供最優質的教育。</div> -->

        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-6 mb-4 text-center"><img class="pt-icon"
                src="<?php echo get_template_directory_uri();?>/assets/images/icon-2.png" alt="">
            <?php echo get_field('content_2');?>

            <!-- <div class="pt-title mt-3">簡易登記</div>
            <div class="pt-content mt-3">登記過程簡易快速，只需填寫個案基本資料，最快2分鐘內完成登記。</div> -->
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-6 mb-4 text-center"><img class="pt-icon"
                src="<?php echo get_template_directory_uri();?>/assets/images/icon-3.png" alt="">
            <?php echo get_field('content_3');?>

            <!-- <div class="pt-title mt-3">彈性課堂</div>
            <div class="pt-content mt-3">學生可以自由選擇上課地點及時間，不論是上門、會所、視像補習都由學生自行決定。不像傳統補習社限制時間和地點，私人補習配對解決空間和時間的限制。</div> -->
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6 col-6 mb-4 text-center"> <img class="pt-icon"
                src="<?php echo get_template_directory_uri();?>/assets/images/icon-4.png" alt="">
            <?php echo get_field('content_4');?>

            <!-- <div class="pt-title mt-3">即時配對</div>
            <div class="pt-content mt-3">網上登記後有專人聯絡，最快24小時內為家長提供多個合適的專業導師作選擇。</div> -->
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-6 mb-4 text-center"><img class="pt-icon"
                src="<?php echo get_template_directory_uri();?>/assets/images/icon-5.png" alt="">
            <?php echo get_field('content_5');?>

            <!-- <div class="pt-title mt-3">收費透明</div>
            <div class="pt-content mt-3">TutorCloud 師魂 承諾不收取家長任何行政費用，只向導師收取首兩星期學費作行
                政費。所有收費在網站清楚列明，絕對沒有隱藏收費。</div> -->
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-6 mb-4 text-center"><img class="pt-icon"
                src="<?php echo get_template_directory_uri();?>/assets/images/icon-6.png" alt="">
            <?php echo get_field('content_6');?>

            <!-- <div class="pt-title mt-3">學生主導</div>
            <div class="pt-content mt-3">登記個案時，家長可自行挑選心水導師，增加配對的成效。</div> -->
        </div>

    </div>

    <div class="text-center mt-5">
        <h2>使用流程
            <div class="bar"></div>
        </h2>
    </div>

    <div class="row align-items-center justify-content-center reverse-col">
        <div class="col-lg-3 col-md-3 col-sm-12 col-12 ">
            <img class="w-100  step-main-img"
                src="http://64.227.13.14/tutorcloud/wp-content/uploads/2021/11/big-icon-1.jpg" alt="">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 ">
            <?php echo get_field('step_1');?>
            <!-- <table class="mt-lg-0 mt-md-0 mt-sm-5 mt-5  step-table ">
                <tr>
                    <td><span class="num-pt">1</span></td>
                    <td>
                        <div class="pt-title text-start ">網上登記</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td class="pt-4">

                        於網站按“學生登記”，填寫網上補習表格。簡單登記步驟。</td>
                </tr>
            </table> -->

        </div>
    </div>


    <div class="row align-items-center justify-content-center ">

        <div class="col-lg-6 col-md-6 col-sm-12 col-12 ">
            <?php echo get_field('step_2');?>

            <!-- <table class="mt-lg-0 mt-md-0 mt-sm-5 mt-5  step-table ">
                <tr>
                    <td><span class="num-pt">2</span></td>
                    <td>
                        <div class="pt-title text-start ">快速配對</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td class="pt-4">
                        填妥表格後，TutorCloud會在短時間內為您配對最合適的導師，亦可以於網站內尋
                        找心水導師。</td>
                </tr>
            </table> -->

        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-12 ">
            <img class="w-100  step-main-img"
                src="http://64.227.13.14/tutorcloud/wp-content/uploads/2021/11/big-icon-2.jpg" alt="">
        </div>

    </div>


    <div class="row align-items-center justify-content-center reverse-col">
        <div class="col-lg-3 col-md-3 col-sm-12 col-12 ">
            <img class="w-100  step-main-img"
                src="http://64.227.13.14/tutorcloud/wp-content/uploads/2021/11/big-icon-3.jpg" alt="">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 ">
            <?php echo get_field('step_3');?>

            <!-- <table class="mt-lg-0 mt-md-0 mt-sm-5 mt-5  step-table">
                <tr>
                    <td><span class="num-pt">3</span></td>
                    <td>
                        <div class="pt-title text-start ">預備補習</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td class="pt-4">
                        成功配對及按照TutorCloud指示繳交學費後，學生可以預備進行線上或上門補習。</td>
                </tr>
            </table> -->

        </div>
    </div>


    <div class="row align-items-center justify-content-center  ">

        <div class="col-lg-6 col-md-6 col-sm-12 col-12 ">
            <?php echo get_field('step_4');?>

            <!-- <table class="mt-lg-0 mt-md-0 mt-sm-5 mt-5 step-table">
                <tr>
                    <td><span class="num-pt">4</span></td>
                    <td>
                        <div class="pt-title text-start ">課後評價</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td class="pt-4">
                        完成兩星期課堂後，TutorCloud會聯絡您，讓您提供對導師的評價。</td>
                </tr>
            </table> -->

        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-12 ">
            <img class="w-100 step-main-img"
                src="http://64.227.13.14/tutorcloud/wp-content/uploads/2021/11/big-icon-4.jpg" alt="">
        </div>

    </div>



    <div class="mt-5">

        <ul class="bottom-btns">
            <li><a href="<?php echo get_site_url();?>/apply-case" class="apply-case-btn">學生登記</a></li>
            <li><a href="<?php echo get_site_url();?>/tutor-register" class="reg-tutor-btn">新導師登記</a></li>
        </ul>
    </div>





</div>
<?php
get_footer();