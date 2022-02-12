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

    主頁 > 導師收費
</div>
<div class="container mt-5">

    <div class="text-center">
        <h2>導師收費
            <div class="bar"></div>
        </h2>
    </div>

    <div class="row align-items-top justify-content-center mt-5">

        <div class="col-2">
            <img class="w-100 pe-3"
                src="http://64.227.13.14/tutorcloud/wp-content/uploads/2022/02/1200px-Calculator_icon.svg_.png" alt="">

        </div>
        <div class="col-6">
            <div class="pt-title mt-3 text-start">行政費計算方法</div>
            <div class="mt-4">

                <ul class="ps-3">

                    <li>一般補習個案: 2個星期的補習費
                    </li>
                    <li>小組補習個案: 2個星期的補習費(每位學生計)
                    </li>

                </ul>
            </div>


            <table class="price-table">
                <thead>
                    <tr>
                        <th>項目說明</th>
                        <th>費用 (HKD)</th>
                        <th>付款期限</th>
                    </tr>
                </thead>
                <tr>
                    <td>登記成為導師</td>
                    <td>免費</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>口頭承諾確認個案</td>
                    <td>一對一補習個案: <br>
                        兩個星期的補習費</td>
                    <td>原議定日期</td>
                </tr>
                <tr>
                    <td>導師與家長串同欺騙行政費用</td>
                    <td>原行政費用+$300</td>
                    <td>確認個案終止72小時內或議定日期</td>
                </tr>
                <tr>
                    <td>私下改動堂數並未有即時匯報</td>
                    <td>原行政費用</td>
                    <td>原議定日期</td>
                </tr>
                <tr>

                    <td>私自轉讓個案予第三者</td>
                    <td>原行政費用+$200</td>
                    <td>確認個案取消72小時內</td>
                </tr>
                <tr>

                    <td>任何原因失約致個案取消</td>
                    <td>原行政費用+$200</td>
                    <td>確認個案取消72小時內</td>
                </tr>
                <tr>
                    <td>因失責行為致家長終止服務</td>
                    <td>已上堂數一半學費+$200</td>
                    <td>確認個案取消72小時內</td>
                </tr>
                <tr>




                    <td>取消已確認接納之個案</td>
                    <td>仍未開始上課:費用為$200 <br>
                        已上首課:費用為原行政費用</td>
                    <td>確認個案取消72小時內</td>
                </tr>
                <tr>
                    <td>個案開始後家長終止服務</td>
                    <td>兩周內終止:已上課堂之一半學費 <br>
                        兩周後終止:仍為全數行政費用</td>
                    <td>確認個案終止72小時內或議定日期</td>
                </tr>
                <tr>
                    <td>過期付費少於5天</td>
                    <td>原行政費用及每日曆日$10附加費用</td>
                    <td>立即繳付</td>
                </tr>
                <tr>
                    <td>過期付費5天或以上</td>
                    <td>個案轉至「小額錢債」追討<br>
                        原行政費用及每日曆日$50附加費用</td>
                    <td>立即繳付</td>
                </tr>




            </table>




        </div>



    </div>








</div>
<?php
get_footer();