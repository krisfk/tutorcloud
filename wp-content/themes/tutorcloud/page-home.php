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
            <a href="<?php echo get_site_url();?>/promotion" class="know-more-btn">了解更多</a>
        </div>
    </div>
</div>

<div class="container mt-5">

    <div class="text-center">
        <h2>關於TutorCloud
            <div class="bar"></div>
        </h2>
    </div>

    <div class="row gx-5  ">
        <div class="col-4 mb-4 text-center"> <img class="pt-icon"
                src="<?php echo get_template_directory_uri();?>/assets/images/icon-1.png" alt="">
            <div class="pt-title mt-3">優良師資</div>
            <div class="pt-content mt-3">所有導師均為現職大學生及具有學士學位或以上資歷，確保導師知識水平及能力，為學生提供最優質的教育。</div>
        </div>
        <div class="col-4 mb-4 text-center"><img class="pt-icon"
                src="<?php echo get_template_directory_uri();?>/assets/images/icon-2.png" alt="">
            <div class="pt-title mt-3">簡易登記</div>
            <div class="pt-content mt-3">登記過程簡易快速，只需填寫個案基本資料，最快2分鐘內完成登記。</div>
        </div>
        <div class="col-4 mb-4 text-center"><img class="pt-icon"
                src="<?php echo get_template_directory_uri();?>/assets/images/icon-3.png" alt="">
            <div class="pt-title mt-3">彈性課堂</div>
            <div class="pt-content mt-3">學生可以自由選擇上課地點及時間，不論是上門、會所、視像補習都由學生自行決定。不像傳統補習社限制時間和地點，私人補習配對解決空間和時間的限制。</div>
        </div>

        <div class="col-4 mb-4 text-center"> <img class="pt-icon"
                src="<?php echo get_template_directory_uri();?>/assets/images/icon-4.png" alt="">
            <div class="pt-title mt-3">即時配對</div>
            <div class="pt-content mt-3">所有導師均為現職大學生及具有學士學位或以上資歷，確保導師知識水平及能力，為學生提供最優質的教育。</div>
        </div>
        <div class="col-4 mb-4 text-center"><img class="pt-icon"
                src="<?php echo get_template_directory_uri();?>/assets/images/icon-5.png" alt="">
            <div class="pt-title mt-3">收費透明</div>
            <div class="pt-content mt-3">登記過程簡易快速，只需填寫個案基本資料，最快2分鐘內完成登記。</div>
        </div>
        <div class="col-4 mb-4 text-center"><img class="pt-icon"
                src="<?php echo get_template_directory_uri();?>/assets/images/icon-6.png" alt="">
            <div class="pt-title mt-3">學生主導</div>
            <div class="pt-content mt-3">學生可以自由選擇上課地點及時間，不論是上門、會所、視像補習都由學生自行決定。不像傳統補習社限制時間和地點，私人補習配對解決空間和時間的限制。</div>
        </div>

    </div>

    <div class="text-center mt-5">
        <h2>使用流程
            <div class="bar"></div>
        </h2>
    </div>

    <div class="row align-items-center justify-content-center">
        <div class="col-3"><img class="w-100"
                src="http://64.227.13.14/tutorcloud/wp-content/uploads/2021/11/big-icon-1.jpg" alt="">
        </div>
        <div class="col-6">
            <table>
                <tr>
                    <td><span class="num-pt">1</span></td>
                    <td>
                        <div class="pt-title text-start ">網上登記</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td class="pt-4">
                        於網站上方的目錄按“學生尋補”，填上網上表格中，填寫補習表格後，會有客服專員聯絡您。於網站上方的目錄按“學生尋補”，填上網上表格中，填寫補習表格後，會有客服專員聯絡您。</td>
                </tr>
            </table>

        </div>
    </div>


    <div class="row align-items-center justify-content-center">

        <div class="col-6">
            <table>
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
            </table>

        </div>
        <div class="col-3"><img class="w-100"
                src="http://64.227.13.14/tutorcloud/wp-content/uploads/2021/11/big-icon-2.jpg" alt="">
        </div>

    </div>


    <div class="row align-items-center justify-content-center">
        <div class="col-3"><img class="w-100"
                src="http://64.227.13.14/tutorcloud/wp-content/uploads/2021/11/big-icon-3.jpg" alt="">
        </div>
        <div class="col-6">
            <table>
                <tr>
                    <td><span class="num-pt">3</span></td>
                    <td>
                        <div class="pt-title text-start ">預備補習</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td class="pt-4">
                        - 成功配對及按照TutorCloud指示繳交學費後，學生可以預備進行線上或上門補習。</td>
                </tr>
            </table>

        </div>
    </div>


    <div class="row align-items-center justify-content-center">

        <div class="col-6">
            <table>
                <tr>
                    <td><span class="num-pt">4</span></td>
                    <td>
                        <div class="pt-title text-start ">課後評價</div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td class="pt-4">
                        - 完成兩星期課堂後，TutorCloud會聯絡您，讓您提供對導師的評價。</td>
                </tr>
            </table>

        </div>
        <div class="col-3"><img class="w-100"
                src="http://64.227.13.14/tutorcloud/wp-content/uploads/2021/11/big-icon-4.jpg" alt="">
        </div>

    </div>



    <div class="mt-5">

        <ul class="bottom-btns">
            <li><a href="" class="apply-case-btn">申請補習個案</a></li>
            <li><a href="<?php echo get_site_url();?>/tutor-register" class="reg-tutor-btn">新導師登記</a></li>
        </ul>
    </div>





</div>
<?php
get_footer();