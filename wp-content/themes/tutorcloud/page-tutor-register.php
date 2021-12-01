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

    主頁 > 新導師登記</div>
<div class="container mt-5">

    <div class="text-center">
        <h2>導師登記資格
            <div class="bar"></div>
        </h2>
    </div>

    <!-- <div class="text-center mt-3">
        <a href="#" class="filter-btn">導師選項</a>
    </div> -->
    <div class="row mt-3">

        <div class="col-2">
            <ul class="m-0 p-0 text-start">
                <li class="step-txt active">1. 條款及細則</li>
                <li class="step-txt">2. 個人資料</li>
                <li class="step-txt">3. 聯絡資料</li>
                <li class="step-txt">4. 上載履歷</li>
                <li class="step-txt">5. 授課資料</li>
                <li class="step-txt">6. 自我簡介</li>
                <li class="step-txt">7. 完成</li>
            </ul>


            <div class="text-end mt-4">
                <a href="#" class="next-step-btn">下一步</a>
            </div>
        </div>
        <div class="col-10">


            <div class="step-content step-content-1">
                <ul>
                    <li>

                        <a href="javascript:void(0);" class="terms-a">
                            <h3>TutorCloud 師魂 的職責</h3>
                        </a>
                        <div class="mt-3 terms-content">TutorCloud 師魂作為一個網上教育配對平台，其責任僅為導師及家長或學生進行相互配對，以使導師可以向家
                            長或學生提供補習或教育服務。 導師與家長其間只為獨立合作聘約，並不存在僱傭關係。 <br>
                            導師與TutorCloud 師魂亦只存在服務提供者與服務使用者之關係，雙方沒有任何僱傭關係，因此TutorCloud
                            師魂有權依本公司與導師所訂定之「導師收費」收取行政費用，成功登記即代表導師同意條款全部內容。而「條
                            款及細則」所訂之內容等同TutorCloud 師魂與導師之間所定之合約，而TutorCloud 師魂網站內所列出的任何
                            規則或指示都屬於導師合約的一部份，本網站導師亦須格守。</div>
                    </li>
                </ul>
            </div>

        </div>
        <!-- <div class="col-2"></div> -->

    </div>








</div>

<script type="text/javascript">
// var $ = jQuery;
$(function() {

    $('.terms-a').click(function() {


        $(this).toggleClass('active');
        if ($(this).hasClass('active')) {
            $(this).next('.terms-content').slideDown(200);
        } else {
            $(this).next('.terms-content').fadeOut(0);

        }
    })
})
</script>
<?php
get_footer();