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

    主頁 > 申請補習個案</div>
<div class="container mt-5">

    <div class="text-center">
        <h2>申請補習個案
            <div class="bar"></div>
        </h2>
    </div>

    <div class="text-center mt-3">
        <a href="#" class="filter-btn">導師選項</a>
    </div>
    <div class="row mt-5">

        <div class="col-2">
            <ul class="m-0 p-0 text-center">
                <li class="step-txt active">1. 選擇心儀導師</li>
                <li class="step-txt">2. 登記學生資料</li>
            </ul>
            <div class="added-list">

                <div class="deep-green"><img class="tutor-deep-icon"
                        src="<?php echo get_template_directory_uri();?>/assets/images/tutor-deep-icon.png" alt="">
                    心儀導師名單</div>

                <ul>
                    <li>T210001 <a href="javascript:void(0);" class="list-close-btn"></a></li>
                    <li>T210001 <a href="javascript:void(0);" class="list-close-btn"></a></li>
                    <li>T210001 <a href="javascript:void(0);" class="list-close-btn"></a></li>
                    <li>T210001 <a href="javascript:void(0);" class="list-close-btn"></a></li>
                    <li>T210001 <a href="javascript:void(0);" class="list-close-btn"></a></li>
                </ul>

            </div>

            <div class="text-end mt-4">
                <a href="#" class="next-step-btn">下一步</a>
            </div>
        </div>
        <div class="col-10">

            <ul class="tutor-list-ul">

                <?php 
                for($i=0;$i<10;$i++)
            {
                ?>
                <li class="">
                    <!-- <a href="javascript:void(0);"> -->
                    <div class="row gx-0 align-items-top">
                        <div class='col-2 data-column'>T210001 <br>女 <img
                                src="<?php echo get_template_directory_uri();?>/assets/images/f-icon.png" alt="">
                        </div>
                        <div class='col-2 data-column'>香港中文大學 <br>護理系 </div>
                        <div class='col-2 data-column'>大學生 <br> </div>
                        <div class='col-2 data-column'>可接受最低時薪： <br>$160</div>
                        <div class='col-2 data-column'>可教授科目： <br>數學 化學 經濟</div>
                        <div class='col-2 add-btn-column text-center'>

                            <a class="add-btn-a" href="javascript:void(0);">

                                <img src="<?php echo get_template_directory_uri();?>/assets/images/add-btn.png" alt="">
                                <div>加入導師名單</div>

                            </a>
                        </div>

                    </div>
                </li>
                <?php
            }
                ?>
            </ul>


            <div>
                <h2 class="mb-4">登記學生資料</h2>


                <table>
                    <tr>
                        <td><label for="chi-name"> 中文全名 *</label></td>
                        <td><input id="chi-name" name="chi-name" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label for="chi-name"> 英文全名 *</label></td>
                        <td><input id="chi-name" name="eng-name" type="text" class="form-control"></td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- <div class="col-2"></div> -->

    </div>








</div>






<script type="text/javascript">
$(function() {

    $('.tutor-list-ul.data-column').click(function() {

    });
    $('.add-btn-a').click(function() {
        alert(87);
    })
})
</script>
<?php
get_footer();