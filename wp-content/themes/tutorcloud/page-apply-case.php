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
                <h2 class="mb-4 p-0">登記學生資料</h2>


                <div class="student-apply-case-content">
                    <table>
                        <tr>
                            <td><label for="chi-name"> 中文全名 *</label></td>
                            <td><input id="chi-name" name="chi-name" type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label for="eng-name"> 英文全名 *</label></td>
                            <td><input id="eng-name" name="eng-name" type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label for="nick-name"> 別名</label></td>
                            <td><input id="nick-name" name="nick-name" type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label for="whatsapp-tel"> WhatsApp 電話號碼 *</label></td>
                            <td><input id="whatsapp-tel" name="whatsapp-tel" type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label for="email"> 電郵地址 *</label></td>
                            <td><input id="email" name="email" type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td> <label for=""> 性別*</label></td>
                            <td>
                                <label><input type="radio" name="gender" value="男">男</label>
                                <label><input type="radio" name="gender" value="女">女</label>

                            </td>
                        </tr>
                        <tr>
                            <td> <label for="tutorial-course"> 補習課程</label></td>
                            <td>

                                <select id="tutorial-course" name="tutorial-course" class="form-select" aria-label="">
                                    <option value="" selected="">選擇</option>
                                    <option value="HKDSE 香港文憑試">HKDSE 香港文憑試</option>
                                    <option value="IB">IB</option>
                                    <option value="GCE AL">GCE AL</option>
                                    <option value="IGCSE ">IGCSE </option>
                                    <option value="SAT ">SAT </option>
                                    <option value="校內考試">校內考試</option>
                                    <option value="音樂">音樂</option>
                                    <option value="其他">其他</option>
                                </select>

                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <h3 class="mb-4 p-0">補習資料
                                </h3>
                            </td>
                        </tr>

                        <tr>
                            <td> <label for="tutorial-course"> 補習課程 *</label></td>
                            <td>
                                <!-- 選擇
                            HKDSE 香港文憑試
                            IB
                            GCE AL
                            IGCSE
                            SAT
                            校內考試
                            音樂
                            其他 -->
                                <select id="tutorial-course" name="tutorial-course" class="form-select" aria-label="">
                                    <option value="" selected="">選擇</option>
                                    <option value="HKDSE 香港文憑試">HKDSE 香港文憑試</option>
                                    <option value="IB">IB</option>
                                    <option value="GCE AL">GCE AL</option>
                                    <option value="IGCSE ">IGCSE </option>
                                    <option value="SAT ">SAT </option>
                                    <option value="校內考試">校內考試</option>
                                    <option value="音樂">音樂</option>
                                    <option value="其他">其他</option>
                                </select>

                            </td>
                        </tr>

                        <tr>
                            <td> <label for="student-level"> 就讀年級 *
                                </label></td>
                            <td>
                                <!-- 選擇
幼稚園
小學
中國
國際學校
自修生
大專
其他 -->


                                <select id="student-level" name="student-level" class="form-select" aria-label="">
                                    <option value="">選擇</option>
                                    <option value="幼稚園">幼稚園</option>
                                    <option value="小學">小學</option>
                                    <option value="中國">中國</option>
                                    <option value="國際學校">國際學校</option>
                                    <option value="自修生">自修生</option>
                                    <option value="大專">大專</option>
                                    <option value="其他">其他</option>
                                </select>

                            </td>
                        </tr>

                        <tr>
                            <td><label for="university"> 大專學校 <br> <span class="small"> (例如：HKU Space / <br> 香港中文大學
                                        )</span></label></td>
                            <td><input id="university" name="university" type="text" class="form-control"></td>
                        </tr>

                        <tr>
                            <td><label for="university"> 所屬年級 *
                                </label></td>
                            <!-- 選擇
K1
K2
K3
小一
小二
小三
小四
小五
小六
中一
中二
中三
中四
中五
中六
Year 1
Year 2
Year 3
Year 4
Year 5
Year 6 -->



                            <td>
                                <select id="student-level-2" name="student-level-2" class="form-select" aria-label="">
                                    <option value="選擇">選擇</option>
                                    <option value="K1">K1</option>
                                    <option value="K2">K2</option>
                                    <option value="K3">K3</option>
                                    <option value="小一">小一</option>
                                    <option value="小二">小二</option>
                                    <option value="小三">小三</option>
                                    <option value="小四">小四</option>
                                    <option value="小五">小五</option>
                                    <option value="小六">小六</option>
                                    <option value="中一">中一</option>
                                    <option value="中二">中二</option>
                                    <option value="中三">中三</option>
                                    <option value="中四">中四</option>
                                    <option value="中五">中五</option>
                                    <option value="中六">中六</option>
                                    <option value="Year 1">Year 1</option>
                                    <option value="Year 2">Year 2</option>
                                    <option value="Year 3">Year 3</option>
                                    <option value="Year 4">Year 4</option>
                                    <option value="Year 5">Year 5</option>
                                    <option value="Year 6">Year 6</option>
                                </select>


                            </td>
                        </tr>




                    </table>
                </div>
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