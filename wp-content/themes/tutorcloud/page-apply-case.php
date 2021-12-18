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

<div class="lightbox">

    <div class="lightbox-bg-btn">

    </div>

    <div class="lightbox-content">

        <a href="javascript:void(0);" class="close-btn">

            <img src="<?php echo get_template_directory_uri();?>/assets/images/close-btn.png" alt="">
        </a>
        <div class=" deep-green " id="lbc-self-intro">
            <!-- 香港中文大學及聖公會曾肇添中學畢業。全職補習。5年以上數學補習經驗。公開試HKDSE化學科奪得5**最高成績，提供超過20年公開試題目特訓，公開試HKDSE數學科5*級成績，小一至中六數學科及化學科成績保證。 -->

        </div>

        <div class="row gx-0">
            <div class="col-6">
                <table class="detail-content-table">

                    <tr>
                        <td>導師編號 </td>
                        <td><span id="lbc-tutor-id"></span> 加入導師名單</td>
                    </tr>
                    <tr>
                        <td>性别</td>
                        <td id="lbc-gender"></td>
                    </tr>
                    <tr>
                        <td>出生年份</td>
                        <td>xxxx</td>
                    </tr>
                    <tr>
                        <td>居住地區</td>
                        <td>xx</td>
                    </tr>
                    <tr>
                        <td>就讀中學</td>
                        <td id="lbc-s-school">

                            <!-- 聖公會曾肇添中學 -->
                        </td>
                    </tr>
                    <tr>
                        <td>就讀大學</td>
                        <td id="lbc-bac-degree">
                            <!-- 香港中文大學 -->

                        </td>
                    </tr>
                </table>

            </div>
            <div class="col-6">

                <table class="detail-content-table">

                    <tr>
                        <td>公開試 </td>
                        <td>DSE</td>
                    </tr>
                    <tr>
                        <td>可教授科目</td>
                        <td>數學 化學 經濟</td>
                    </tr>
                    <tr>
                        <td>成績</td>
                        <td>數學（5*） 化學（5**） 經濟（5）</td>
                    </tr>
                    <tr>
                        <td>可教授年級</td>
                        <td>小學 初中 高中</td>
                    </tr>
                    <tr>
                        <td>課堂語言</td>
                        <td>中文 英文</td>
                    </tr>
                    <tr>
                        <td>可接受最低時薪</td>
                        <td>$<span id="lbc-lowest-salary"></span></td>
                    </tr>
                </table>





            </div>

            <div class="mt-3 deep-green">可補習地區：</div>

            <div class="mt-3 deep-green">香港區：</div>
            <div>
                <span class="place-span">中半山</span>
                <span class="place-span">薄扶林</span>
                <span class="place-span">中上環</span>
                <span class="place-span">西環</span>
                <span class="place-span">灣仔</span>
                <span class="place-span">銅鑼灣</span>
                <span class="place-span">跑馬地</span>
                <span class="place-span">北角</span>
                <span class="place-span">鰂魚涌</span>
                <span class="place-span">太古</span>
                <span class="place-span">筲箕灣</span>
                <span class="place-span">西灣河</span>
                <span class="place-span"> 柴灣</span>
                <span class="place-span">小西灣</span>
                <span class="place-span">香港仔</span>
                <span class="place-span">鴨利洲</span>
                <span class="place-span">赤柱</span>

            </div>

            <div class="mt-3 deep-green">九龍區：</div>
            <div>
                <span class="place-span">美孚</span>
                <span class="place-span">荔枝角</span>
                <span class="place-span">長沙灣</span>
                <span class="place-span">深水涉</span>
                <span class="place-span">大角咀</span>
                <span class="place-span">旺角</span>
                <span class="place-span">何文田</span>
                <span class="place-span">油麻地</span>
                <span class="place-span">佐敦</span>
                <span class="place-span">尖沙咀</span>
                <span class="place-span">土瓜灣</span>
                <span class="place-span">紅磡</span>
                <span class="place-span">石硤尾</span>
                <span class="place-span">九龍塘</span>
                <span class="place-span">樂富</span>
                <span class="place-span">慈雲山</span>
                <span class="place-span">黃大仙</span>
                <span class="place-span">鑽石山</span>
                <span class="place-span">新蒲崗</span>
                <span class="place-span">彩虹</span>
                <span class="place-span">牛池灣</span>
                <span class="place-span">牛頭角</span>
                <span class="place-span">九龍灣</span>
                <span class="place-span">秀茂坪</span>
                <span class="place-span">觀塘</span>
                <span class="place-span">藍田</span>
                <span class="place-span">油塘</span>
                <span class="place-span">九龍城</span>
            </div>

            <div class="mt-3 deep-green">新界區：</div>
            <div>
                <span class="place-span">將軍澳</span>
                <span class="place-span">西貢</span>
                <span class="place-span">荃灣</span>
                <span class="place-span">深井</span>
                <span class="place-span">馬灣</span>
                <span class="place-span">葵涌</span>
                <span class="place-span">荔景</span>
                <span class="place-span">葵芳</span>
                <span class="place-span">青衣</span>
                <span class="place-span">大圍</span>
                <span class="place-span">沙田</span>
                <span class="place-span">沙田市中心</span>
                <span class="place-span">小瀝源</span>
                <span class="place-span">火炭</span>
                <span class="place-span">馬鞍山</span>
                <span class="place-span">大埔</span>
                <span class="place-span">粉嶺</span>
                <span class="place-span">上水</span>
                <span class="place-span">元朗</span>
                <span class="place-span">天水圍</span>
                <span class="place-span">屯門</span>
                <span class="place-span">青龍頭</span>
                <span class="place-span">東涌</span>
                <span class="place-span">離島</span>
            </div>
        </div>
    </div>

</div>

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
    <div class="row mt-5 gx-5">

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
                    <!-- <li>T210001 <a href="javascript:void(0);" class="list-close-btn"></a></li>
                    <li>T210001 <a href="javascript:void(0);" class="list-close-btn"></a></li>
                    <li>T210001 <a href="javascript:void(0);" class="list-close-btn"></a></li>
                    <li>T210001 <a href="javascript:void(0);" class="list-close-btn"></a></li>
                    <li>T210001 <a href="javascript:void(0);" class="list-close-btn"></a></li> -->
                </ul>

            </div>

            <div class="text-end mt-4">
                <a href="#" class="next-step-btn">下一步</a>
            </div>
        </div>

        <?php
        
        if($_POST)
        {
            $chi_name = $_POST['chi-name'];
            $eng_name = $_POST['eng-name'];
            $nick_name = $_POST['nick-name'];
            $whatsapp_tel=$_POST['whatsapp-tel'];
            $email = $_POST['email'];
            $gender=$_POST['gender'];
            $tutorial_course=$_POST['tutorial-course'];
            $student_level=$_POST['student-level'];
            $university=$_POST['university'];

            $subjects=$_POST['subjects'];
            $student_level_2=$_POST['student-level-2'];
            $paper_lang=$_POST['paper-lang'];
            $tutorial_style=$_POST['tutorial-style'];
            $class_area=$_POST['class-area'];
            $short_address=$_POST['short-address'];
            
            $transport = $_POST['transport'];
            $cost_per_ppl = $_POST['cost-per-ppl'];
            $lesson_per_week = $_POST['lesson-per-week'];
            $hour_per_lesson = $_POST['hour-per-lesson'];
            $days = $_POST['days'];
            $start_tutorial_time = $_POST['start-tutorial-time'];
            $tutor_gender = $_POST['tutor-gender'];
            $objective = $_POST['objective'];
            $objective_value_other=$_POST['objective-value-other'];
            $tutor_requirement = $_POST['tutor-requirement'];
            $tutor_requirement_value_other = $_POST['tutor-requirement-value-other'];
            $other_remark = $_POST['other-remark'];
            

            $post_title = $nick_name ?  $chi_name.' ('.$nick_name.')' : $chi_name;
            $post_id = wp_insert_post(array (
                'post_type' => 'student',
                'post_title' => $post_title,
                'post_status' => 'publish',
                'comment_status' => 'closed',   // if you prefer
                'ping_status' => 'closed',      // if you prefer
            ));
        
        if ($post_id) {
            add_post_meta($post_id, 'chi_name', $chi_name);
            add_post_meta($post_id, 'eng_name', $eng_name);
            add_post_meta($post_id, 'nick_name', $nick_name);
            add_post_meta($post_id, 'whatsapp_tel', $whatsapp_tel);
            add_post_meta($post_id, 'email', $email);
            add_post_meta($post_id, 'gender', $gender);
            add_post_meta($post_id, 'tutorial_course', $tutorial_course);
            add_post_meta($post_id, 'student_level', $student_level);
            add_post_meta($post_id, 'university', $university);
            add_post_meta($post_id, 'student_level_2', $student_level_2);
            add_post_meta($post_id, 'subjects', $subjects);
            add_post_meta($post_id, 'paper_lang', $paper_lang);
            add_post_meta($post_id, 'tutorial_style', $tutorial_style);
            add_post_meta($post_id, 'class_area', $class_area);
            add_post_meta($post_id, 'short_address', $short_address);
            add_post_meta($post_id, 'transport', $transport);
            add_post_meta($post_id, 'cost_per_ppl', $cost_per_ppl);
            add_post_meta($post_id, 'lesson_per_week', $lesson_per_week);
            add_post_meta($post_id, 'hour_per_lesson', $hour_per_lesson);
            add_post_meta($post_id, 'days', $days);
            add_post_meta($post_id, 'start_tutorial_time', $start_tutorial_time);
            add_post_meta($post_id, 'tutor_gender', $tutor_gender);
            add_post_meta($post_id, 'objective', $objective);
            add_post_meta($post_id, 'objective_value_other', $objective_value_other);
            add_post_meta($post_id, 'tutor_requirement', $tutor_requirement);
            add_post_meta($post_id, 'tutor_requirement_value_other', $tutor_requirement_value_other);
            add_post_meta($post_id, 'other_remark', $other_remark);
        }
    }
        ?>

        <div class="col-10">
            <form action="" method="post">

                <ul class="tutor-list-ul">



                    <?php
  $args = array(  
    'post_type' => 'tutor',
    'post_status' => 'publish',
    'posts_per_page' => 8, 
    'orderby' => 'title', 
    'order' => 'ASC', 
);

$loop = new WP_Query( $args ); 
    
while ( $loop->have_posts() ) { 
    $loop->the_post(); 
    // implode(', ', $Array)
    ?>
                    <li class="tutor-content-li" data-class-area="<?php echo implode(',', get_field('class_area'));?>"
                        data-lowest-salary="<?php echo get_field('lowest_salary');?>"
                        data-bac-degree="<?php echo get_field('bac_degree');?>"
                        data-s-school="<?php echo get_field('s_school');?>"
                        data-gender="<?php echo get_field('gender');  ?>"
                        data-tutor-id="<?php echo get_field('tutor_id');?>"
                        data-self-intro="<?php echo get_field('self_intro');?>">
                        <div class="row gx-0 align-items-top">
                            <div class='col-2 data-column'><?php echo get_field('tutor_id');?>
                                <br><?php echo get_field('gender');?> <img
                                    src="<?php echo get_template_directory_uri();?>/assets/images/<?php echo get_field('gender') == '男' ? 'm':'f';?>-icon.png"
                                    alt="">
                            </div>
                            <div class='col-2 data-column'><?php echo get_field('bac_degree');?> <br>
                                主修：<?php echo get_field('u_major');?>
                                <!--護理系-->
                            </div>
                            <div class='col-2 data-column'><?php echo get_field('tutor_level');?>
                                <!--大學生--> <br>
                            </div>
                            <div class='col-2 data-column'>可接受最低時薪： <br>$<?php echo get_field('lowest_salary');?></div>
                            <div class='col-2 data-column'>
                                可教授科目： <br>XX XX XX
                                <!-- 數學 化學 經濟 -->
                            </div>
                            <div class='col-2 add-btn-column text-center'>

                                <a class="add-btn-a" href="javascript:void(0);">

                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/add-btn.png"
                                        alt="">
                                    <div>加入導師名單</div>

                                </a>
                            </div>

                        </div>
                    </li>
                    <?php
    // echo 1;
    // print the_title(); 
    // the_excerpt(); 
}
                
                
                ?>
                    <?php 
            //     for($i=0;$i<10;$i++)
            // {
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

                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/add-btn.png"
                                        alt="">
                                    <div>加入導師名單</div>

                                </a>
                            </div>

                        </div>
                    </li>
                    <?php
            // }
                ?>
                </ul>


                <div class="student-form-div">
                    <h3 class="mt-1 mb-3 p-0">登記學生資料</h2>


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
                                    <td><input id="whatsapp-tel" name="whatsapp-tel" type="text" class="form-control">
                                    </td>
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
                                    <td colspan="2">
                                        <h3 class="mt-5 mb-3 p-0">補習資料
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
                                        <select id="tutorial-course" name="tutorial-course" class="form-select"
                                            aria-label="">
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


                                        <select id="student-level" name="student-level" class="form-select"
                                            aria-label="">
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
                                    <td><label for="university"> 大專學校 <br> <span class="small"> (例如：HKU Space / <br>
                                                香港中文大學
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
                                        <select id="student-level-2" name="student-level-2" class="form-select"
                                            aria-label="">
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
                                                id="subject_value_1" name="subjects[]" value="全科" /><label
                                                for="subject_value_1">全科</label></div>
                                        <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                                id="subject_value_2" name="subjects[]" value="功課輔導" /><label
                                                for="subject_value_2">功課輔導</label></div>
                                        <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                                id="subject_value_3" name="subjects[]" value="中文" /><label
                                                for="subject_value_3">中文</label></div>
                                        <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                                id="subject_value_4" name="subjects[]" value="英文" /><label
                                                for="subject_value_4">英文</label></div>
                                        <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                                id="subject_value_5" name="subjects[]" value="數學" /><label
                                                for="subject_value_5">數學</label></div>
                                        <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                                id="subject_value_6" name="subjects[]" value="數學 (M1)" /><label
                                                for="subject_value_6">數學 (M1)</label>
                                        </div>
                                        <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                                id="subject_value_7" name="subjects[]" value="數學 (M2)" /><label
                                                for="subject_value_7">數學 (M2)</label>
                                        </div>
                                        <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                                id="subject_value_8" name="subjects[]" value="通識" /><label
                                                for="subject_value_8">通識</label></div>
                                        <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                                id="subject_value_9" name="subjects[]" value="物理" /><label
                                                for="subject_value_9">物理</label></div>
                                        <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                                id="subject_value_10" name="subjects[]" value="化學" /><label
                                                for="subject_value_10">化學</label></div>
                                        <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                                id="subject_value_11" name="subjects[]" value="生物" /><label
                                                for="subject_value_11">生物</label></div>
                                        <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                                id="subject_value_12" name="subjects[]" value="組合科學：物理 化學" /><label
                                                for="subject_value_12">組合科學：物理 化學</label></div>
                                        <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                                id="subject_value_13" name="subjects[]" value="組合科學：化學 生物" /><label
                                                for="subject_value_13">組合科學：化學 生物</label></div>
                                        <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                                id="subject_value_14" name="subjects[]" value="綜合科學" /><label
                                                for="subject_value_14">綜合科學</label>
                                        </div>
                                        <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                                id="subject_value_15" name="subjects[]" value="資訊及通訊科技" /><label
                                                for="subject_value_15">資訊及通訊科技</label></div>
                                        <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                                id="subject_value_16" name="subjects[]" value="地理" /><label
                                                for="subject_value_16">地理</label></div>
                                        <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                                id="subject_value_17" name="subjects[]" value="中史" /><label
                                                for="subject_value_17">中史</label></div>
                                        <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                                id="subject_value_18" name="subjects[]" value="西史" /><label
                                                for="subject_value_18">西史</label></div>
                                        <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                                id="subject_value_19" name="subjects[]" value="中國文學" /><label
                                                for="subject_value_19">中國文學</label>
                                        </div>
                                        <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                                id="subject_value_20" name="subjects[]" value="英國文學" /><label
                                                for="subject_value_20">英國文學</label>
                                        </div>
                                        <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                                id="subject_value_21" name="subjects[]" value="倫理與宗教" /><label
                                                for="subject_value_21">倫理與宗教</label>
                                        </div>
                                        <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                                id="subject_value_22" name="subjects[]" value="經濟" /><label
                                                for="subject_value_22">經濟</label></div>
                                        <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                                id="subject_value_23" name="subjects[]" value="企業、會計與財務概論" /><label
                                                for="subject_value_23">企業、會計與財務概論</label></div>
                                        <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                                id="subject_value_24" name="subjects[]" value="旅遊與款待" /><label
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
                                    <td colspan="2">
                                        <h3 class="p-0 mt-5">補習地區</h3>

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
                                            <div class="mb-3"><label for=""> 地區 *</label>
                                            </div>
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
                                                    <input class="form-check-input" type="checkbox" value="中半山"
                                                        id="class-area-value-1" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-1">
                                                        中半山
                                                    </label>
                                                </div>


                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="薄扶林"
                                                        id="class-area-value-2" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-2">
                                                        薄扶林
                                                    </label>
                                                </div>


                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="中上環"
                                                        id="class-area-value-3" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-3">
                                                        中上環
                                                    </label>
                                                </div>

                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="西環"
                                                        id="class-area-value-4" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-4">
                                                        西環
                                                    </label>
                                                </div>


                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="灣仔"
                                                        id="class-area-value-5" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-5">
                                                        灣仔
                                                    </label>
                                                </div>



                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="銅鑼灣"
                                                        id="class-area-value-6" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-6">
                                                        銅鑼灣
                                                    </label>
                                                </div>


                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="跑馬地"
                                                        id="class-area-value-7" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-7">
                                                        跑馬地
                                                    </label>
                                                </div>



                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="北角"
                                                        id="class-area-value-8" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-8">
                                                        北角
                                                    </label>
                                                </div>


                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="鰂魚涌"
                                                        id="class-area-value-9" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-9">
                                                        鰂魚涌
                                                    </label>
                                                </div>

                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="太古"
                                                        id="class-area-value-10" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-10">
                                                        太古
                                                    </label>
                                                </div>


                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="筲箕灣"
                                                        id="class-area-value-11" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-11">
                                                        筲箕灣
                                                    </label>
                                                </div>

                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="西灣河"
                                                        id="class-area-value-12" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-12">
                                                        西灣河
                                                    </label>
                                                </div>





                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="柴灣"
                                                        id="class-area-value-13" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-13">
                                                        柴灣
                                                    </label>
                                                </div>

                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="小西灣"
                                                        id="class-area-value-14" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-14">
                                                        小西灣
                                                    </label>
                                                </div>



                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="香港仔"
                                                        id="class-area-value-15" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-15">
                                                        香港仔
                                                    </label>
                                                </div>




                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="鴨利洲"
                                                        id="class-area-value-16" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-16">
                                                        鴨利洲
                                                    </label>
                                                </div>


                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="赤柱"
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
                                                    <input class="form-check-input" type="checkbox" value="美孚"
                                                        id="class-area-value-18" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-18">
                                                        美孚
                                                    </label>
                                                </div>
                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="荔枝角"
                                                        id="class-area-value-19" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-19">
                                                        荔枝角
                                                    </label>
                                                </div>


                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="長沙灣"
                                                        id="class-area-value-20" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-20">
                                                        長沙灣
                                                    </label>
                                                </div>
                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="深水涉"
                                                        id="class-area-value-21" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-21">
                                                        深水涉
                                                    </label>
                                                </div>

                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="大角咀"
                                                        id="class-area-value-22" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-22">
                                                        大角咀
                                                    </label>
                                                </div>
                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="旺角"
                                                        id="class-area-value-23" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-23">
                                                        旺角
                                                    </label>
                                                </div>



                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="何文田"
                                                        id="class-area-value-24" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-24">
                                                        何文田
                                                    </label>
                                                </div>


                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="油麻地"
                                                        id="class-area-value-25" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-25">
                                                        油麻地
                                                    </label>
                                                </div>



                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="佐敦"
                                                        id="class-area-value-26" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-26">
                                                        佐敦
                                                    </label>
                                                </div>


                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="尖沙咀"
                                                        id="class-area-value-27" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-27">
                                                        尖沙咀
                                                    </label>
                                                </div>

                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="土瓜灣"
                                                        id="class-area-value-28" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-28">
                                                        土瓜灣
                                                    </label>
                                                </div>

                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="紅磡"
                                                        id="class-area-value-29" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-29">
                                                        紅磡
                                                    </label>
                                                </div>



                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="石硤尾"
                                                        id="class-area-value-30" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-30">
                                                        石硤尾
                                                    </label>
                                                </div>
                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="九龍塘"
                                                        id="class-area-value-31" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-31">
                                                        九龍塘
                                                    </label>
                                                </div>
                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="樂富"
                                                        id="class-area-value-32" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-32">
                                                        樂富
                                                    </label>
                                                </div>


                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="慈雲山"
                                                        id="class-area-value-33" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-33">
                                                        慈雲山
                                                    </label>
                                                </div>


                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="黃大仙"
                                                        id="class-area-value-34" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-34">
                                                        黃大仙
                                                    </label>
                                                </div>



                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="鑽石山"
                                                        id="class-area-value-35" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-35">
                                                        鑽石山
                                                    </label>
                                                </div>


                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="新蒲崗"
                                                        id="class-area-value-36" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-36">
                                                        新蒲崗
                                                    </label>
                                                </div>
                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="彩虹"
                                                        id="class-area-value-37" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-37">
                                                        彩虹
                                                    </label>
                                                </div>
                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="牛池灣"
                                                        id="class-area-value-38" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-38">
                                                        牛池灣
                                                    </label>
                                                </div>
                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="牛頭角"
                                                        id="class-area-value-39" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-39">
                                                        牛頭角
                                                    </label>
                                                </div>
                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="九龍灣"
                                                        id="class-area-value-40" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-40">
                                                        九龍灣
                                                    </label>
                                                </div>

                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="秀茂坪"
                                                        id="class-area-value-41" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-41">
                                                        秀茂坪
                                                    </label>
                                                </div>


                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="觀塘"
                                                        id="class-area-value-42" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-42">
                                                        觀塘
                                                    </label>
                                                </div>
                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="藍田"
                                                        id="class-area-value-43" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-43">
                                                        藍田
                                                    </label>
                                                </div>





                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="油塘"
                                                        id="class-area-value-44" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-44">
                                                        油塘
                                                    </label>
                                                </div>



                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="九龍城"
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
                                                    <input class="form-check-input" type="checkbox" value="將軍澳"
                                                        id="class-area-value-46" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-46">
                                                        將軍澳
                                                    </label>
                                                </div>

                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="西貢"
                                                        id="class-area-value-47" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-47">
                                                        西貢
                                                    </label>
                                                </div>

                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="荃灣"
                                                        id="class-area-value-48" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-48">
                                                        荃灣
                                                    </label>
                                                </div>


                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="深井"
                                                        id="class-area-value-49" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-49">
                                                        深井
                                                    </label>
                                                </div>

                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="馬灣"
                                                        id="class-area-value-50" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-50">
                                                        馬灣
                                                    </label>
                                                </div>



                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="葵涌"
                                                        id="class-area-value-51" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-51">
                                                        葵涌
                                                    </label>
                                                </div>



                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="荔景"
                                                        id="class-area-value-52" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-52">
                                                        荔景
                                                    </label>
                                                </div>
                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="葵芳"
                                                        id="class-area-value-53" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-53">
                                                        葵芳
                                                    </label>
                                                </div>

                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="青衣"
                                                        id="class-area-value-54" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-54">
                                                        青衣
                                                    </label>
                                                </div>


                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="大圍"
                                                        id="class-area-value-55" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-55">
                                                        大圍
                                                    </label>
                                                </div>
                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="沙田"
                                                        id="class-area-value-56" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-56">
                                                        沙田
                                                    </label>
                                                </div>
                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="沙田市中心"
                                                        id="class-area-value-57" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-57">
                                                        沙田市中心
                                                    </label>
                                                </div>

                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="小瀝源"
                                                        id="class-area-value-58" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-58">
                                                        小瀝源
                                                    </label>
                                                </div>

                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="火炭"
                                                        id="class-area-value-59" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-59">
                                                        火炭
                                                    </label>
                                                </div>


                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="馬鞍山"
                                                        id="class-area-value-60" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-60">
                                                        馬鞍山
                                                    </label>
                                                </div>


                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="大埔"
                                                        id="class-area-value-61" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-61">
                                                        大埔
                                                    </label>
                                                </div>



                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="粉嶺"
                                                        id="class-area-value-62" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-62">
                                                        粉嶺
                                                    </label>
                                                </div>


                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="上水"
                                                        id="class-area-value-63" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-63">
                                                        上水
                                                    </label>
                                                </div>

                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="元朗"
                                                        id="class-area-value-64" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-64">
                                                        元朗
                                                    </label>
                                                </div>


                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="天水圍"
                                                        id="class-area-value-65" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-65">
                                                        天水圍
                                                    </label>
                                                </div>





                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="屯門"
                                                        id="class-area-value-66" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-66">
                                                        屯門
                                                    </label>
                                                </div>




                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="青龍頭"
                                                        id="class-area-value-67" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-67">
                                                        青龍頭
                                                    </label>
                                                </div>


                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="東涌"
                                                        id="class-area-value-68" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-68">
                                                        東涌
                                                    </label>
                                                </div>


                                                <div>
                                                    <input class="form-check-input" type="checkbox" value="離島"
                                                        id="class-area-value-69" name="class-area[]">
                                                    <label class="form-check-label" for="class-area-value-69">
                                                        離島
                                                    </label>
                                                </div>
                                            </div>














                                        </div>

                                    </td>
                                </tr>

                            </table>
                            <table>
                                <tr>
                                    <td><label for="short-address"> 詳細地址 *
                                            <br> <span class="small">(不需要完整地址)</span></label></td>
                                    <td><input id="short-address" name="short-address" type="text" class="form-control">
                                    </td>
                                </tr>

                                <tr>
                                    <td> <label for="transport"> 交通方法 *
                                        </label></td>
                                    <td>

                                        <select id="transport" name="transport" class="form-select" aria-label="">
                                            <option value="" selected="">選擇</option>
                                            <option value="地鐵站步行到達">地鐵站步行到達</option>
                                            <option value="地鐵站轉乘其他交通工具">地鐵站轉乘其他交通工具</option>
                                            <option value="其他">其他</option>

                                        </select>

                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="2">
                                        <h3 class="mt-5 mb-3 p-0">課堂資料</h3>
                                    </td>
                                </tr>

                                <tr>
                                    <td><label for="cost-per-ppl"> 每小時收費（每人） *
                                            <br> <span class="small"> 請輸入一個補習預算，收費可再議</span></label></td>
                                    <td><input id="cost-per-ppl" name="cost-per-ppl" type="text" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td> <label for="lesson-per-week"> 每星期堂數 *

                                        </label></td>
                                    <td>

                                        <select id="lesson-per-week" name="lesson-per-week" class="form-select"
                                            aria-label="">
                                            <option value="" selected="">選擇</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5或以上">5或以上</option>

                                        </select>

                                    </td>
                                </tr>

                                <tr>
                                    <td> <label for="hour-per-lesson"> 每堂時間（小時） *


                                        </label></td>
                                    <td>

                                        <select id="hour-per-lesson" name="hour-per-lesson" class="form-select"
                                            aria-label="">
                                            <option value="" selected="">選擇</option>
                                            <option value="1">1</option>
                                            <option value="1.5">1.5</option>
                                            <option value="2">2</option>
                                            <option value="2.5">2.5</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>

                                        </select>

                                    </td>
                                </tr>


                                <tr>
                                    <td> <label for="tutorial-time-slot"> 可補習時間



                                        </label></td>
                                    <td>

                                        <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                                id="day_value_1" name="days[]" value="星期一" /><label
                                                for="day_value_1">星期一</label>
                                        </div>
                                        <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                                id="day_value_2" name="days[]" value="星期二" /><label
                                                for="day_value_2">星期二</label>
                                        </div>
                                        <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                                id="day_value_3" name="days[]" value="星期三" /><label
                                                for="day_value_3">星期三</label>
                                        </div>
                                        <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                                id="day_value_4" name="days[]" value="星期四" /><label
                                                for="day_value_4">星期四</label>
                                        </div>
                                        <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                                id="day_value_5" name="days[]" value="星期五" /><label
                                                for="day_value_5">星期五</label>
                                        </div>
                                        <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                                id="day_value_6" name="days[]" value="星期六" /><label
                                                for="day_value_6">星期六</label>
                                        </div>
                                        <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                                id="day_value_7" name="days[]" value="星期日" /><label
                                                for="day_value_7">星期日</label>
                                        </div>





                                    </td>
                                </tr>

                                <tr>
                                    <td><label for="start-tutorial-time"> 補習開始時間
                                            <br> <span class="small"> 例如：18:00 或者 16:30-17:30
                                            </span></label></td>
                                    <td><input id="start-tutorial-time" name="start-tutorial-time" type="text"
                                            class="form-control"></td>
                                </tr>

                                <tr>
                                    <td colspan="2">
                                        <h3 class="mt-5 mb-3 p-0">額外資料
                                        </h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td> <label for=""> 導師性別要求 *
                                        </label></td>
                                    <td>
                                        <label><input type="radio" name="tutor-gender" value="男">男</label>
                                        <label><input type="radio" name="tutor-gender" value="女">女</label>
                                        <label><input type="radio" name="tutor-gender" value="都可">都可</label>

                                    </td>
                                </tr>



                                <tr>
                                    <td class="align-top"> <label for="tutorial-time-slot"> 補習期望 ：
                                        </label></td>
                                    <td>

                                        <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                                id="objective_value_1" name="objective[]" value="拔尖" /><label
                                                for="objective_value_1">拔尖</label>
                                        </div>
                                        <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                                id="objective_value_2" name="objective[]" value="補底" /><label
                                                for="objective_value_2">補底</label>
                                        </div>
                                        <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                                id="objective_value_3" name="objective[]" value="清concept" /><label
                                                for="objective_value_3">清concept</label>
                                        </div>
                                        <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                                id="objective_value_4" name="objective[]" value="教授答題技巧" /><label
                                                for="objective_value_4">教授答題技巧</label>
                                        </div>
                                        <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                                id="objective_value_5" name="objective[]" value="應付校內考試" /><label
                                                for="objective_value_5">應付校內考試</label>
                                        </div>
                                        <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                                id="objective_value_6" name="objective[]" value="應付公開試" /><label
                                                for="objective_value_6">應付公開試</label>
                                        </div>

                                        <div class="mt-2 w-100 float-start">
                                            <label for="objective-value-other" class="d-inline-block">其他：</label>
                                            <input class=" limit-input-w form-control mt-2 d-inline-block"
                                                id="objective-value-other" name="objective-value-other" type="text">
                                        </div>
                                    </td>
                                </tr>



                                <tr>
                                    <td class="align-top"> <label for="tutorial-time-slot"> 對導師要求：
                                        </label></td>
                                    <td>

                                        <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                                id="tutor-requirement_value_1" name="tutor-requirement[]"
                                                value="提供筆記" /><label for="tutor-requirement_value_1">提供筆記</label>
                                        </div>
                                        <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                                id="tutor-requirement_value_2" name="tutor-requirement[]"
                                                value="提供練習" /><label for="tutor-requirement_value_2">提供練習</label>
                                        </div>
                                        <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                                id="tutor-requirement_value_3" name="tutor-requirement[]"
                                                value="可以長補" /><label for="tutor-requirement_value_3">可以長補</label>
                                        </div>


                                        <div class="mt-2 w-100  float-start">
                                            <label for="tutor-requirement-value-other"
                                                class="d-inline-block">其他：</label>
                                            <input class=" limit-input-w form-control mt-2 d-inline-block"
                                                id="tutor-requirement-value-other" name="tutor-requirement-value-other"
                                                type="text">
                                        </div>



                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="other-remark"> 其他要求/備註：</label></td>
                                    <td><input id="other-remark" name="other-remark" type="text" class="form-control">
                                    </td>
                                </tr>


                            </table>
                            <a href="javascript:void(0);" class="submit-btn">遞交表格</a>


                        </div>
                </div>
            </form>
        </div>

        <!-- <div class="col-2"></div> -->

    </div>








</div>






<script type="text/javascript">
var tutor_list_arr = [];
$(function() {



    $('.list-close-btn').click(function() {
        var select_tutor_id = $(this).prev('span').html();
        alert(select_tutor_id);
    });
    $('.add-btn-a').click(function() {

        var select_tutor_id = $(this).closest('li').attr('data-tutor-id');

        if (!tutor_list_arr.includes(select_tutor_id)) {
            tutor_list_arr.push(select_tutor_id);
            var added_to_cart_html =
                '<li><span>' + select_tutor_id +
                '</span><a href="javascript:void(0);" class="list-close-btn"></a></li>';

            $('.added-list ul').append(added_to_cart_html);



        } else {
            alert('這導師已加入心儀導師名單');
        }

        // alert(select_tutor_id);
    });

    $('.data-column').click(function() {

        $('.lightbox').fadeIn(0);
        // alert($(this).closest('.tutor-content-li').attr('data-self-intro'));
        $('#lbc-self-intro').html($(this).closest('.tutor-content-li').attr('data-self-intro'));
        $('#lbc-tutor-id').html($(this).closest('.tutor-content-li').attr('data-tutor-id'));
        $('#lbc-gender').html($(this).closest('.tutor-content-li').attr('data-gender'));
        $('#lbc-s-school').html($(this).closest('.tutor-content-li').attr('data-s-school'));
        $('#lbc-bac-degree').html($(this).closest('.tutor-content-li').attr('data-bac-degree'));
        $('#lbc-lowest-salary').html($(this).closest('.tutor-content-li').attr('data-lowest-salary'));

        var class_area = $(this).closest('.tutor-content-li').attr('data-class-area');
        var class_area_arr = class_area.split(',');

        $('.place-span').removeClass('deep-green');
        for (i = 0; i < $('.place-span').length; i++) {

            if (class_area_arr.includes($('.place-span').eq(i).html())) {
                $('.place-span').eq(i).addClass('deep-green');
            }
        }

        // id="lbc-self-intro


        // $('#lbc-self-intro').html();
    })

    $('.close-btn,.lightbox-bg-btn').click(function() {
        $('.lightbox').fadeOut(0);
    })






    $('#all-place').change(function() {
        // alert(5);
        if ($(this).is(':checked')) {

            for (i = 1; i <= 69; i++) {
                $('#hk-place ,#kl-place ,#nt-place ,#class-area-value-' + i).prop('checked', true);
            }

        } else {
            for (i = 1; i <= 69; i++) {
                $('#hk-place ,#kl-place ,#nt-place ,#class-area-value-' + i).prop('checked', false);
            }
        }
    })


    $('#hk-place').change(function() {
        if ($(this).is(':checked')) {

            for (i = 1; i <= 17; i++) {
                $('#class-area-value-' + i).prop('checked', true);
            }

        } else {
            for (i = 1; i <= 17; i++) {
                $('#class-area-value-' + i).prop('checked', false);
            }
        }
    })



    $('#kl-place').change(function() {
        if ($(this).is(':checked')) {

            for (i = 18; i <= 45; i++) {
                $('#class-area-value-' + i).prop('checked', true);
            }

        } else {
            for (i = 18; i <= 45; i++) {
                $('#class-area-value-' + i).prop('checked', false);
            }
        }
    })


    $('#nt-place').change(function() {
        if ($(this).is(':checked')) {

            for (i = 46; i <= 69; i++) {
                $('#class-area-value-' + i).prop('checked', true);
            }

        } else {
            for (i = 46; i <= 69; i++) {
                $('#class-area-value-' + i).prop('checked', false);
            }
        }
    })




    $('.submit-btn').click(function() {
        var chi_name = $('#chi-name').val();
        var eng_name = $('#eng-name').val();
        var whatsapp_tel = $('#whatsapp-tel').val();
        var email = $('#email').val();
        var gender = $('input[name="gender"]:checked').val();
        var tutorial_course = $('#tutorial-course').val();
        var student_level = $('#student-level').val();
        var student_level_2 = $('#student-level-2').val();
        var paper_lang = $('input[name="paper-lang"]:checked').val();
        // var subjects = $('')
        var tutorial_style = $('input[name="tutorial-style"]:checked').val();
        // alert()
        var short_address = $('#short-address').val();
        var transport = $('#transport').val();
        var cost_per_ppl = $('#cost-per-ppl').val();
        var lesson_per_week = $('#lesson-per-week').val();
        var hour_per_lesson = $('#hour-per-lesson').val();
        var tutor_gender = $('input[name="tutor-gender"]:checked').val();
        var error_txt = '';


        if (!chi_name) {
            error_txt +=
                '請輸入中文全名\n';
        }

        if (!eng_name) {
            error_txt +=
                '請輸入英文全名\n';
        }

        if (!whatsapp_tel) {
            error_txt +=
                'WhatsApp 電話號碼\n';
        }
        if (!(/^[0-9]{8}$/.test(whatsapp_tel))) {
            error_txt += 'whatsapp電話格式不正確\n';
        }
        if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))) {
            error_txt +=
                '電郵格式不正確\n';
        }

        if (!gender) {
            error_txt +=
                '請輸入性別\n';
        }

        if (!tutorial_course) {
            error_txt +=
                '請輸入補習課程\n';
        }
        if (!student_level) {
            error_txt +=
                '請輸入就讀年級\n';
        }
        if (!student_level_2) {
            error_txt +=
                '請輸入所屬年級\n';
        }

        if (!paper_lang) {
            error_txt +=
                '請輸入語言\n';
        }
        if (!tutorial_style) {
            error_txt +=
                '請選擇補習方式\n';
        }




        val = []
        $('input[name="class-area[]"]:checked').each(function(i) {
            val[i] = $(this).val();
        });
        if (val.length == 0) {
            error_txt += '請選擇補習地區\n';
        }

        if (!short_address) {
            error_txt +=
                '請輸入詳細地址\n';
        }

        if (!transport) {
            error_txt +=
                '請輸入交通方法\n';

        }

        if (!cost_per_ppl) {
            error_txt +=
                '請輸入每小時收費\n';
        }



        if (!lesson_per_week) {
            error_txt +=
                '請輸入每星期堂數\n';
        }

        if (!hour_per_lesson) {
            error_txt +=
                '每堂時間(小時)\n';
        }

        if (!tutor_gender) {
            error_txt +=
                '導師性別要求\n';
        }



        if (!error_txt) {
            $('form').submit();
        } else {
            alert(error_txt);
        }



        var lowest_salary = $('#lowest-salary').val();





    })


    $('.next-step-btn').click(function() {
        $('.tutor-list-ul').fadeOut(0);
        $('.student-form-div').fadeIn(0);
    })

    $('.tutor-list-ul.data-column').click(function() {

    });
    // $('.add-btn-a').click(function() {
    //     // alert(87);
    // })
})
</script>
<?php
get_footer();