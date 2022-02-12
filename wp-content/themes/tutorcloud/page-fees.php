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

        <div class="col-3">
            <img class="w-100 pe-3" src="http://64.227.13.14/tutorcloud/wp-content/uploads/2021/11/money-back-icon.jpg"
                alt="">

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


            <table>
                <tr>
                    <td>項目說明</td>
                    <td>費用 (HKD)</td>
                    <td>付款期限</td>
                </tr>
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
            </table>




        </div>



    </div>








</div>
<?php
get_footer();