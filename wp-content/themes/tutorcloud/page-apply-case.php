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
                            <td><label for="student-level-2"> 所屬年級 *
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
                        <tr>
                            <td class="align-top">科目 *</td>
                            <td>
                                <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                        id="subject_value_1" name="subjects[]" value="1" /><label
                                        for="subject_value_1">全科</label></div>
                                <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                        id="subject_value_2" name="subjects[]" value="2" /><label
                                        for="subject_value_2">功課輔導</label></div>
                                <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                        id="subject_value_3" name="subjects[]" value="3" /><label
                                        for="subject_value_3">中文</label></div>
                                <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                        id="subject_value_4" name="subjects[]" value="4" /><label
                                        for="subject_value_4">英文</label></div>
                                <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                        id="subject_value_5" name="subjects[]" value="5" /><label
                                        for="subject_value_5">數學</label></div>
                                <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                        id="subject_value_6" name="subjects[]" value="6" /><label
                                        for="subject_value_6">數學 (M1)</label>
                                </div>
                                <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                        id="subject_value_7" name="subjects[]" value="7" /><label
                                        for="subject_value_7">數學 (M2)</label>
                                </div>
                                <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                        id="subject_value_8" name="subjects[]" value="8" /><label
                                        for="subject_value_8">通識</label></div>
                                <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                        id="subject_value_9" name="subjects[]" value="9" /><label
                                        for="subject_value_9">物理</label></div>
                                <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                        id="subject_value_10" name="subjects[]" value="10" /><label
                                        for="subject_value_10">化學</label></div>
                                <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                        id="subject_value_11" name="subjects[]" value="11" /><label
                                        for="subject_value_11">生物</label></div>
                                <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                        id="subject_value_12" name="subjects[]" value="12" /><label
                                        for="subject_value_12">組合科學：物理
                                        化學</label></div>
                                <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                        id="subject_value_13" name="subjects[]" value="13" /><label
                                        for="subject_value_13">組合科學：化學
                                        生物</label></div>
                                <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                        id="subject_value_14" name="subjects[]" value="14" /><label
                                        for="subject_value_14">綜合科學</label>
                                </div>
                                <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                        id="subject_value_15" name="subjects[]" value="15" /><label
                                        for="subject_value_15">資訊及通訊科技</label></div>
                                <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                        id="subject_value_16" name="subjects[]" value="16" /><label
                                        for="subject_value_16">地理</label></div>
                                <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                        id="subject_value_17" name="subjects[]" value="17" /><label
                                        for="subject_value_17">中史</label></div>
                                <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                        id="subject_value_18" name="subjects[]" value="18" /><label
                                        for="subject_value_18">西史</label></div>
                                <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                        id="subject_value_19" name="subjects[]" value="19" /><label
                                        for="subject_value_19">中國文學</label>
                                </div>
                                <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                        id="subject_value_20" name="subjects[]" value="20" /><label
                                        for="subject_value_20">英國文學</label>
                                </div>
                                <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                        id="subject_value_21" name="subjects[]" value="21" /><label
                                        for="subject_value_21">倫理與宗教</label>
                                </div>
                                <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                        id="subject_value_22" name="subjects[]" value="22" /><label
                                        for="subject_value_22">經濟</label></div>
                                <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                        id="subject_value_23" name="subjects[]" value="23" /><label
                                        for="subject_value_23">企業、會計與財務概論</label></div>
                                <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                        id="subject_value_24" name="subjects[]" value="24" /><label
                                        for="subject_value_24">旅遊與款待</label>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td> <label for=""> 語言 *</label></td>
                            <td>
                                <label><input type="radio" name="paper-lang" value="中文卷">中文卷
                                </label>
                                <label><input type="radio" name="paper-lang" value="英文卷">英文卷
                                </label>

                            </td>
                        </tr>

                        <tr>
                            <td> <label for=""> 補習方式 *</label></td>
                            <td>
                                <label><input type="radio" name="tutorial-style" value="上門">上門
                                </label>
                                <label><input type="radio" name="tutorial-style" value="不上門">不上門
                                </label>
                                <label><input type="radio" name="tutorial-style" value="視像補習">視像補習
                                </label>

                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">

                                <div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" id="all-place" name="">
                                        <label class="form-check-label" for="all-place">
                                            所有地區
                                        </label>
                                    </div>
                                    <div class="mt-3">
                                        <input class="form-check-input" type="checkbox" id="hk-place" name="">
                                        <label class="form-check-label" for="hk-place">
                                            香港島
                                        </label>
                                    </div>

                                    <div class="place-group">

                                        <div>
                                            <input class="form-check-input" type="checkbox" value="1"
                                                id="class-area-value-1" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-1">
                                                中半山
                                            </label>
                                        </div>


                                        <div>
                                            <input class="form-check-input" type="checkbox" value="2"
                                                id="class-area-value-2" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-2">
                                                薄扶林
                                            </label>
                                        </div>


                                        <div>
                                            <input class="form-check-input" type="checkbox" value="3"
                                                id="class-area-value-3" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-3">
                                                中上環
                                            </label>
                                        </div>

                                        <div>
                                            <input class="form-check-input" type="checkbox" value="4"
                                                id="class-area-value-4" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-4">
                                                西環
                                            </label>
                                        </div>


                                        <div>
                                            <input class="form-check-input" type="checkbox" value="5"
                                                id="class-area-value-5" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-5">
                                                灣仔
                                            </label>
                                        </div>



                                        <div>
                                            <input class="form-check-input" type="checkbox" value="6"
                                                id="class-area-value-6" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-6">
                                                銅鑼灣
                                            </label>
                                        </div>


                                        <div>
                                            <input class="form-check-input" type="checkbox" value="7"
                                                id="class-area-value-7" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-7">
                                                跑馬地
                                            </label>
                                        </div>



                                        <div>
                                            <input class="form-check-input" type="checkbox" value="8"
                                                id="class-area-value-8" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-8">
                                                北角
                                            </label>
                                        </div>


                                        <div>
                                            <input class="form-check-input" type="checkbox" value="9"
                                                id="class-area-value-9" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-9">
                                                鰂魚涌
                                            </label>
                                        </div>

                                        <div>
                                            <input class="form-check-input" type="checkbox" value="10"
                                                id="class-area-value-10" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-10">
                                                太古
                                            </label>
                                        </div>


                                        <div>
                                            <input class="form-check-input" type="checkbox" value="11"
                                                id="class-area-value-11" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-11">
                                                筲箕灣
                                            </label>
                                        </div>

                                        <div>
                                            <input class="form-check-input" type="checkbox" value="12"
                                                id="class-area-value-12" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-12">
                                                西灣河
                                            </label>
                                        </div>





                                        <div>
                                            <input class="form-check-input" type="checkbox" value="13"
                                                id="class-area-value-13" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-13">
                                                柴灣
                                            </label>
                                        </div>

                                        <div>
                                            <input class="form-check-input" type="checkbox" value="14"
                                                id="class-area-value-14" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-14">
                                                小西灣
                                            </label>
                                        </div>



                                        <div>
                                            <input class="form-check-input" type="checkbox" value="15"
                                                id="class-area-value-15" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-15">
                                                香港仔
                                            </label>
                                        </div>




                                        <div>
                                            <input class="form-check-input" type="checkbox" value="16"
                                                id="class-area-value-16" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-16">
                                                鴨利洲
                                            </label>
                                        </div>


                                        <div>
                                            <input class="form-check-input" type="checkbox" value="17"
                                                id="class-area-value-17" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-17">
                                                赤柱
                                            </label>
                                        </div>
                                    </div>


                                    <div class="mt-3">

                                        <input class="form-check-input" type="checkbox" id="kl-place" name="">
                                        <label class="form-check-label" for="kl-place">
                                            九龍區
                                        </label>
                                    </div>

                                    <div class="place-group">
                                        <div>
                                            <input class="form-check-input" type="checkbox" value="18"
                                                id="class-area-value-18" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-18">
                                                美孚
                                            </label>
                                        </div>
                                        <div>
                                            <input class="form-check-input" type="checkbox" value="19"
                                                id="class-area-value-19" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-19">
                                                荔枝角
                                            </label>
                                        </div>


                                        <div>
                                            <input class="form-check-input" type="checkbox" value="20"
                                                id="class-area-value-20" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-20">
                                                長沙灣
                                            </label>
                                        </div>
                                        <div>
                                            <input class="form-check-input" type="checkbox" value="21"
                                                id="class-area-value-21" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-21">
                                                深水涉
                                            </label>
                                        </div>

                                        <div>
                                            <input class="form-check-input" type="checkbox" value="22"
                                                id="class-area-value-22" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-22">
                                                大角咀
                                            </label>
                                        </div>
                                        <div>
                                            <input class="form-check-input" type="checkbox" value="23"
                                                id="class-area-value-23" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-23">
                                                旺角
                                            </label>
                                        </div>



                                        <div>
                                            <input class="form-check-input" type="checkbox" value="24"
                                                id="class-area-value-24" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-24">
                                                何文田
                                            </label>
                                        </div>


                                        <div>
                                            <input class="form-check-input" type="checkbox" value="25"
                                                id="class-area-value-25" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-25">
                                                油麻地
                                            </label>
                                        </div>



                                        <div>
                                            <input class="form-check-input" type="checkbox" value="26"
                                                id="class-area-value-26" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-26">
                                                佐敦
                                            </label>
                                        </div>


                                        <div>
                                            <input class="form-check-input" type="checkbox" value="27"
                                                id="class-area-value-27" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-27">
                                                尖沙咀
                                            </label>
                                        </div>

                                        <div>
                                            <input class="form-check-input" type="checkbox" value="28"
                                                id="class-area-value-28" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-28">
                                                土瓜灣
                                            </label>
                                        </div>

                                        <div>
                                            <input class="form-check-input" type="checkbox" value="29"
                                                id="class-area-value-29" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-29">
                                                紅磡
                                            </label>
                                        </div>



                                        <div>
                                            <input class="form-check-input" type="checkbox" value="30"
                                                id="class-area-value-30" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-30">
                                                石硤尾
                                            </label>
                                        </div>
                                        <div>
                                            <input class="form-check-input" type="checkbox" value="31"
                                                id="class-area-value-31" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-31">
                                                九龍塘
                                            </label>
                                        </div>
                                        <div>
                                            <input class="form-check-input" type="checkbox" value="32"
                                                id="class-area-value-32" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-32">
                                                樂富
                                            </label>
                                        </div>


                                        <div>
                                            <input class="form-check-input" type="checkbox" value="33"
                                                id="class-area-value-33" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-33">
                                                慈雲山
                                            </label>
                                        </div>


                                        <div>
                                            <input class="form-check-input" type="checkbox" value="34"
                                                id="class-area-value-34" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-34">
                                                黃大仙
                                            </label>
                                        </div>



                                        <div>
                                            <input class="form-check-input" type="checkbox" value="35"
                                                id="class-area-value-35" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-35">
                                                鑽石山
                                            </label>
                                        </div>


                                        <div>
                                            <input class="form-check-input" type="checkbox" value="36"
                                                id="class-area-value-36" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-36">
                                                新蒲崗
                                            </label>
                                        </div>
                                        <div>
                                            <input class="form-check-input" type="checkbox" value="37"
                                                id="class-area-value-37" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-37">
                                                彩虹
                                            </label>
                                        </div>
                                        <div>
                                            <input class="form-check-input" type="checkbox" value="38"
                                                id="class-area-value-38" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-38">
                                                牛池灣
                                            </label>
                                        </div>
                                        <div>
                                            <input class="form-check-input" type="checkbox" value="39"
                                                id="class-area-value-39" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-39">
                                                牛頭角
                                            </label>
                                        </div>
                                        <div>
                                            <input class="form-check-input" type="checkbox" value="40"
                                                id="class-area-value-40" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-40">
                                                九龍灣
                                            </label>
                                        </div>

                                        <div>
                                            <input class="form-check-input" type="checkbox" value="41"
                                                id="class-area-value-41" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-41">
                                                秀茂坪
                                            </label>
                                        </div>


                                        <div>
                                            <input class="form-check-input" type="checkbox" value="42"
                                                id="class-area-value-42" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-42">
                                                觀塘
                                            </label>
                                        </div>
                                        <div>
                                            <input class="form-check-input" type="checkbox" value="43"
                                                id="class-area-value-43" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-43">
                                                藍田
                                            </label>
                                        </div>





                                        <div>
                                            <input class="form-check-input" type="checkbox" value="44"
                                                id="class-area-value-44" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-44">
                                                油塘
                                            </label>
                                        </div>



                                        <div>
                                            <input class="form-check-input" type="checkbox" value="45"
                                                id="class-area-value-45" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-45">
                                                九龍城
                                            </label>
                                        </div>


                                    </div>




                                    <div class="mt-3">
                                        <input class="form-check-input" type="checkbox" id="nt-place" name="">
                                        <label class="form-check-label" for="nt-place">
                                            新界區
                                        </label>
                                    </div>

                                    <div class="place-group">
                                        <div>
                                            <input class="form-check-input" type="checkbox" value="46"
                                                id="class-area-value-46" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-46">
                                                將軍澳
                                            </label>
                                        </div>

                                        <div>
                                            <input class="form-check-input" type="checkbox" value="47"
                                                id="class-area-value-47" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-47">
                                                西貢
                                            </label>
                                        </div>

                                        <div>
                                            <input class="form-check-input" type="checkbox" value="48"
                                                id="class-area-value-48" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-48">
                                                荃灣
                                            </label>
                                        </div>


                                        <div>
                                            <input class="form-check-input" type="checkbox" value="49"
                                                id="class-area-value-49" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-49">
                                                深井
                                            </label>
                                        </div>

                                        <div>
                                            <input class="form-check-input" type="checkbox" value="50"
                                                id="class-area-value-50" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-50">
                                                馬灣
                                            </label>
                                        </div>



                                        <div>
                                            <input class="form-check-input" type="checkbox" value="51"
                                                id="class-area-value-51" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-51">
                                                葵涌
                                            </label>
                                        </div>



                                        <div>
                                            <input class="form-check-input" type="checkbox" value="52"
                                                id="class-area-value-52" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-52">
                                                荔景
                                            </label>
                                        </div>
                                        <div>
                                            <input class="form-check-input" type="checkbox" value="53"
                                                id="class-area-value-53" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-53">
                                                葵芳
                                            </label>
                                        </div>

                                        <div>
                                            <input class="form-check-input" type="checkbox" value="54"
                                                id="class-area-value-54" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-54">
                                                青衣
                                            </label>
                                        </div>


                                        <div>
                                            <input class="form-check-input" type="checkbox" value="55"
                                                id="class-area-value-55" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-55">
                                                大圍
                                            </label>
                                        </div>
                                        <div>
                                            <input class="form-check-input" type="checkbox" value="56"
                                                id="class-area-value-56" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-56">
                                                沙田
                                            </label>
                                        </div>
                                        <div>
                                            <input class="form-check-input" type="checkbox" value="57"
                                                id="class-area-value-57" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-57">
                                                沙田市中心
                                            </label>
                                        </div>

                                        <div>
                                            <input class="form-check-input" type="checkbox" value="58"
                                                id="class-area-value-58" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-58">
                                                小瀝源
                                            </label>
                                        </div>

                                        <div>
                                            <input class="form-check-input" type="checkbox" value="59"
                                                id="class-area-value-59" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-59">
                                                火炭
                                            </label>
                                        </div>


                                        <div>
                                            <input class="form-check-input" type="checkbox" value="60"
                                                id="class-area-value-60" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-60">
                                                馬鞍山
                                            </label>
                                        </div>


                                        <div>
                                            <input class="form-check-input" type="checkbox" value="61"
                                                id="class-area-value-61" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-61">
                                                大埔
                                            </label>
                                        </div>



                                        <div>
                                            <input class="form-check-input" type="checkbox" value="62"
                                                id="class-area-value-62" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-62">
                                                粉嶺
                                            </label>
                                        </div>


                                        <div>
                                            <input class="form-check-input" type="checkbox" value="63"
                                                id="class-area-value-63" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-63">
                                                上水
                                            </label>
                                        </div>

                                        <div>
                                            <input class="form-check-input" type="checkbox" value="64"
                                                id="class-area-value-64" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-64">
                                                元朗
                                            </label>
                                        </div>


                                        <div>
                                            <input class="form-check-input" type="checkbox" value="65"
                                                id="class-area-value-65" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-65">
                                                天水圍
                                            </label>
                                        </div>





                                        <div>
                                            <input class="form-check-input" type="checkbox" value="66"
                                                id="class-area-value-66" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-66">
                                                屯門
                                            </label>
                                        </div>




                                        <div>
                                            <input class="form-check-input" type="checkbox" value="67"
                                                id="class-area-value-67" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-67">
                                                青龍頭
                                            </label>
                                        </div>


                                        <div>
                                            <input class="form-check-input" type="checkbox" value="68"
                                                id="class-area-value-68" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-68">
                                                東涌
                                            </label>
                                        </div>


                                        <div>
                                            <input class="form-check-input" type="checkbox" value="69"
                                                id="class-area-value-69" name="class-area[]">
                                            <label class="form-check-label" for="class-area-value-69">
                                                離島
                                            </label>
                                        </div>
                                    </div>


                                    <h5 class="mt-4">可供補習方式 *</h5>

                                    <div>
                                        <input class="form-check-input" type="checkbox" value="1" id="t-style-value-1"
                                            name="t-style[]">
                                        <label class="form-check-label" for="t-style-value-1">
                                            上門
                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="2" id="t-style-value-2"
                                            name="t-style[]">
                                        <label class="form-check-label" for="t-style-value-2">
                                            不上門

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="3" id="t-style-value-3"
                                            name="t-style[]">
                                        <label class="form-check-label" for="t-style-value-3">
                                            視像補習


                                        </label>
                                    </div>


                                    <table class="mt-4">
                                        <tbody>
                                            <tr>
                                                <td> <label for="lowest-salary">可接受最低時薪 *</label> </td>
                                                <td><input id="lowest-salary" name="lowest-salary" type="number"
                                                        class="form-control"></td>
                                            </tr>
                                        </tbody>
                                    </table>












                                </div>

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