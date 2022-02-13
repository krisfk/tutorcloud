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
// echo $_SESSION['test'];
// session_start();
// $_SESSION['test']=111;


$query_args = array(
	'post_type' => 'tutor',
    'p'=>$_SESSION['tutor_post_id']
);

// The Query
$the_query = new WP_Query( $query_args );
$the_query->have_posts();
$the_query->the_post();

// echo get_field('tutor_id');
// echo 111;
// wp_reset_postdata();





?>

<div class="breadcrumb mt-4">

    主頁 > 導師資料
</div>
<div class="container mt-5">

    <div class="text-center">
        <h2>導師資料
            <div class="bar"></div>
        </h2>
    </div>

    <div class="text-center mt-3">
        <a href="#" class="info-btn info-btn-1 active">個人資料</a>
        <a href="#" class="info-btn info-btn-2">學歷資料</a>

    </div>

    <div class="tutor-info-form-div">

        <form class="tutor-info-form tutor-info-form-1" action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="form-type" value="tutor-info-form-1">
            <div class="step-content step-content-2 mt-5">
                <h3 class="mb-4">個人資料</h3>
                <h5>登入資料</h5>
                <table class="mt-3">
                    <tbody>
                        <tr>
                            <td><label for="email">登入電郵*</label></td>
                            <td><input readonly id="email" name="email" type="text" class="form-control"
                                    value="<?php echo get_field('email'); ?>">
                            </td>
                        </tr>
                        <tr>
                            <td><label for="login_password">登入密碼*</label></td>
                            <td><input id="login_password" name="login_password" type="password" class="form-control">
                            </td>
                        </tr>

                        <tr>
                            <td><label for="confirm_login_password">新密碼*</label></td>
                            <td><input id="confirm_login_password" name="confirm_login_password" type="password"
                                    class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label for="confirm_login_password">確認新密碼*</label></td>
                            <td><input id="confirm_login_password" name="confirm_login_password" type="password"
                                    class="form-control"></td>
                        </tr>

                        <tr>
                            <td colspan="2">
                                <h5 class="mt-4">個人資料</h5>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="chi-name"> 中文全名 *</label></td>
                            <td><input id="chi-name" name="chi-name" type="text" class="form-control"
                                    value="<?php echo get_field('chi_name');?>"></td>
                        </tr>
                        <tr>
                            <td><label for="eng-name">英文全名 *</label></td>
                            <td><input id="eng-name" name="eng-name" type="text" class="form-control"
                                    value="<?php echo get_field('eng_name');?>"></td>
                        </tr>
                        <tr>
                            <td><label for="nick-name">別名</label></td>
                            <td><input id="nick-name" name="nick-name" type="text" class="form-control"
                                    value="<?php echo get_field('nick_name');?>"></td>
                        </tr>
                        <tr>
                            <td><label for="whatsapp-tel"> WhatsApp 電話號碼 *</label></td>
                            <td><input id="whatsapp-tel" name="whatsapp-tel" type="number" class="form-control"
                                    value="<?php echo get_field('whatsapp_tel');?>"></td>
                        </tr>
                        <tr>
                            <td><label for="born_year"> 出生年份*</label></td>
                            <td><input id="born_year" name="born_year" type="number" class="form-control"
                                    value="<?php echo get_field('born_year');?>"></td>
                        </tr>
                        <tr>
                            <td> <label for=""> 性別*</label></td>
                            <td>
                                <label><input type="radio" name="gender" value="男"
                                        <?php echo get_field('gender') =='男' ? 'checked':''; ?>>男</label>
                                <label><input type="radio" name="gender" value="女"
                                        <?php echo get_field('gender') =='女' ? 'checked':''; ?>>女</label>

                            </td>
                        </tr>
                        <tr>
                            <td> <label for="occupation"> 職業</label></td>
                            <td>
                                <select id="occupation" name="occupation" class="form-select" aria-label="">
                                    <?php 
                                $occupation_arr=array("全職教師","全職教學助理","全職補習老師","退休教師","其他在職人仕");
                                ?>
                                    <option value="" selected="">選擇</option>
                                    <?php 
                                    for($i=0;$i<count($occupation_arr);$i++)
                                    {
                                    ?>
                                    <option value="<?php echo $occupation_arr[$i];?>"
                                        <?php echo get_field('occupation') == $occupation_arr[$i] ? 'selected':''; ?>>
                                        <?php echo $occupation_arr[$i];?>
                                    </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td><label for="living-area">居住地區 *</label></td>
                            <td> <select id="living-area" name="living_area" class="form-select" aria-label="">
                                    <option value="">選擇</option>

                                    <optgroup label="香港島">
                                        <?php                                 
                                        
                                        $hk_place_arr=array("中半山","薄扶林","中上環","西環","灣仔","銅鑼灣","跑馬地","北角","鰂魚涌","太古","筲箕灣","西灣河","柴灣","小西灣","香港仔","鴨利洲","赤柱");
                                        
                                        for($i=0;$i<count($hk_place_arr);$i++)
                                        {
                                        ?>
                                        <option
                                            <?php echo get_field('living_area') == $hk_place_arr[$i] ? 'selected':''; ?>
                                            value="<?php echo $hk_place_arr[$i];?>"><?php echo $hk_place_arr[$i];?>
                                        </option>
                                        <?php
                                        }
                                        ?>

                                    </optgroup>
                                    <optgroup label="九龍區">
                                        <?php
                                            $kl_place_arr=array("美孚","荔枝角","長沙灣","深水涉","大角咀","旺角","何文田","油麻地","佐敦","尖沙咀","土瓜灣","紅磡","石硤尾","九龍塘","樂富","慈雲山","黃大仙","鑽石山","新蒲崗","彩虹","牛池灣","牛頭角","九龍灣","秀茂坪","觀塘","藍田","油塘","九龍城");
                                            for($i=0;$i<count($kl_place_arr);$i++)
                                            {
                                                ?>

                                        <option
                                            <?php echo get_field('living_area') == $kl_place_arr[$i] ? 'selected':''; ?>
                                            value="<?php echo $kl_place_arr[$i];?>"><?php echo $kl_place_arr[$i];?>
                                        </option>
                                        <?php
                                            }
                                        ?>

                                    </optgroup>
                                    <optgroup label="新界區">

                                        <?php
                                $nt_place_arr=array("將軍澳","西貢","荃灣","深井","馬灣","葵涌","荔景","葵芳","青衣","大圍","沙田","沙田市中心","小瀝源","火炭","馬鞍山","大埔","粉嶺","上水","元朗","天水圍","屯門","青龍頭","東涌","離島");
                                for($i=0;$i<count($nt_place_arr);$i++)
                                {
                                    ?>

                                        <option
                                            <?php echo get_field('living_area') == $nt_place_arr[$i] ? 'selected':''; ?>
                                            value="<?php echo $nt_place_arr[$i];?>"><?php echo $nt_place_arr[$i];?>
                                        </option>
                                        <?php
                                }
                                    ?>

                                    </optgroup>


                                </select></td>
                        </tr>



                    </tbody>
                </table>

                <input type="submit" class="submit-btn" value="更新資料"></input>


            </div>

        </form>

        <form class="tutor-info-form tutor-info-form-2" action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="form-type" value="tutor-info-form-2">

            <div class="step-content step-content-3 mt-5">

                <h3 class="mb-4">學歷資料</h3>
                <table>
                    <tbody>
                        <tr>
                            <td><label for="bac-degree">就讀大學 (學士學位課程) *
                                </label></td>
                            <td> <select id="bac-degree" name="bac-degree" class="form-select" aria-label="">

                                    <option value="" selected="">選擇</option>

                                    <?php 
                                    
                                    $university_arr=array("香港中文大學","香港科技大學","香港理工大學","香港城市大學","香港浸會大學","香港都會大學","香港恒生大學","嶺南大學");
                                    
                                    for($i=0;$i<count($university_arr[$i]);$i++)
                                    {
                                        ?>
                                    <option
                                        <?php echo get_field('bac_degree') == $university_arr[$i] ? 'selected':''; ?>
                                        value="<?php echo $university_arr[$i];?>"><?php echo $university_arr[$i];?>
                                    </option>

                                    <?php
                                    }
                                    
                                    ?>


                                </select></td>
                        </tr>
                        <tr>
                            <td> <label for="tutor-level">教育程度 *
                                </label></td>
                            <td><select id="tutor-level" name="tutor-level" class="form-select" aria-label="">
                                    <option value="" selected="">選擇</option>

                                    <?php
                                    
                                    $tutor_level_arr = array('大學生','學士畢業','碩士生','碩士畢業','博士生','博士畢業');
                                    
                                    for($i=0;$i<count($tutor_level_arr);$i++)
                                    {
                                        ?>
                                    <option
                                        <?php echo get_field('tutor_level') == $tutor_level_arr[$i] ? 'selected':''; ?>
                                        value="<?php echo $tutor_level_arr[$i];?>"><?php echo $tutor_level_arr[$i];?>
                                    </option>
                                    <?php
                                    }

                                    ?>


                                </select></td>
                        </tr>
                        <tr>
                            <td><label for="">是否擁有教育文憑 *
                                </label></td>
                            <td> <label><input type="radio" name="diploma" value="是"
                                        <?php echo get_field('diploma') == '是' ? 'checked':''; ?>>是</label>
                                <label><input type="radio" name="diploma" value="否"
                                        <?php echo get_field('diploma') == '否' ? 'checked':''; ?>>否</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="tutor-year">年級 (2021-2022年度) *
                                </label>
                            </td>
                            <td>
                                <select id="tutor-year" name="tutor-year" class="form-select" aria-label="">
                                    <option value="" selected="">選擇</option>

                                    <?php
                                    $tutor_year_arr=array('Year 1','Year 2','Year 3','Year 4','Year 5','Year 6','已畢業');
                                    for($i=0;$i<count($tutor_level_arr);$i++)
                                    {
                                        ?>
                                    <option
                                        <?php echo get_field('tutor_year') == $tutor_year_arr[$i] ? 'selected':''; ?>
                                        value="<?php echo $tutor_year_arr[$i];?>"><?php echo $tutor_year_arr[$i];?>
                                    </option>
                                    <?php

                                    }
                                    ?>


                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>

                                <label for="u-major">大學主修科目 *</label>
                            </td>
                            <td><input type="text" id="u-major" name="u-major" class="form-control"
                                    value="<?php echo get_field('u_major');?>"></td>
                        </tr>

                        <tr>
                            <td> <label for="u-minor">大學副修科目
                                </label>
                            </td>
                            <td><input type="text" id="u-minor" name="u-minor" class="form-control"
                                    value="<?php echo get_field('u_minor');?>"></td>
                        </tr>
                        <tr>
                            <td> <label for="s-school">曾就讀中學 *
                                </label>
                            </td>
                            <td><input type="text" id="s-school" name="s-school" class="form-control"
                                    value="<?php echo get_field('s_school');?>"></td>
                        </tr>
                        <tr>
                            <td> <label for="past-exam">曾參加公開試 *
                                </label>
                            </td>
                            <td>
                                <div class="past-exam-group">
                                    <?php// print_r(get_field('past_exam'));?>
                                    <?php //echo $_POST['filter-form']&&in_array($nt_place_arr[$i], $_POST['class-area']) ? 'checked':''; ?>
                                    <?php
                                    
                                    $past_exam_arr= array("HKDSE","HKCEE","HKALE","IB","GCE AL","IGCSE","SAT");
                                    
                                    // print_r(get_field['past_exam']);
                                    for($i=0;$i<count($past_exam_arr);$i++)
                                    {
                                        ?>
                                    <div>
                                        <input
                                            <?php echo in_array($past_exam_arr[$i], get_field('past_exam')) ? 'checked':''; ?>
                                            class="form-check-input" type="checkbox"
                                            value="<?php echo $past_exam_arr[$i];?>"
                                            id="past-exam-value-<?php echo $i;?>" name="past-exam[]">
                                        <label class="form-check-label" for="past-exam-value-<?php echo $i;?>">
                                            <?php echo $past_exam_arr[$i];?>
                                        </label>
                                    </div>

                                    <?php
                                    }
                                    ?>

                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>

                <table class="mt-4 dse-big-radio-table">
                    <tbody>
                        <tr>
                            <td colspan="5">
                                DSE 成績 / 相關公開試成續
                            </td>
                            <!-- <tr>
                            <td></td>
                            <td class="grade-col">5**</td>
                            <td class="grade-col">5*</td>
                            <td class="grade-col">5</td>
                            <td class="grade-col">4</td>
                        </tr> -->
                        </tr>

                        <?php 
                        $subjects_arr=array("中文","英文","數學","數學(M1)","數學(M2)","通識","物理","化學","生物","組合科學：物理 化學","組合科學：化學 生物","綜合科學","資訊及通訊科技","地理","中史","西史","中國文學","英國文學","倫理與宗教","經濟","企業、會計與財務概論","旅遊與款待");
                        
                        for($i=0;$i<count($subjects_arr);$i++)
                        {
                            ?>
                        <tr>
                            <td><label for=""><?php echo $subjects_arr[$i];?></label></td>
                            <td class="grade-col"><label><input type="radio" value="5**"
                                        name="dse-sub-<?php echo $i+1?>"
                                        <?php echo get_field('dse_sub_'.($i+1)) == '5**' ? 'checked' :'';?>>5**</label>
                            </td>
                            <td class="grade-col"><label><input type="radio" value="5*" name="dse-sub-<?php echo $i+1?>"
                                        <?php echo get_field('dse_sub_'.($i+1)) == '5*' ? 'checked' :'';?>>5*</label>
                            </td>
                            <td class="grade-col"><label><input type="radio" value="5" name="dse-sub-<?php echo $i+1?>"
                                        <?php echo get_field('dse_sub_'.($i+1)) == '5' ? 'checked' :'';?>>5</label>
                            </td>
                            <td class="grade-col"><label><input type="radio" value="4" name="dse-sub-<?php echo $i+1?>"
                                        <?php echo get_field('dse_sub_'.($i+1)) == '4' ? 'checked' :'';?>>4</label>
                            </td>
                            <td class="grade-col"><a href="javascript:void(0);" class="radio-cancel-btn">取消</a></td>

                        </tr>
                        <?php
                        }
                        ?>




                    </tbody>
                </table>


                <table class="mt-4">

                    <tbody>
                        <tr>
                            <td> <label for="exam-lang"> 應考主要語言 *
                                </label></td>
                            <td>
                                <select id="exam-lang" name="exam-lang" class="form-select" aria-label="">

                                    <option value="" selected="">選擇</option>
                                    <option value="中文" <?php echo get_field('exam_lang') =='中文' ? 'selected':''; ?>>中文
                                    </option>
                                    <option value="英文" <?php echo get_field('exam_lang') =='英文' ? 'selected':''; ?>>英文
                                    </option>


                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="other-cert"> 其他資格 (可填寫ielts/樂器級數等)
                                </label></td>
                            <td>
                                <input id="other-cert" name="other-cert" type="text" class="form-control"
                                    value="<?php echo get_field('other_cert');?>">
                            </td>
                        </tr>
                        <tr>
                            <td><label for="proof1">公開試成績證明</label>
                            </td>
                            <td>
                                <input id="proof1" name="proof1" type="file" class="form-control" accept=".jpg,pdf,png">
                            </td>
                        </tr>
                        <tr>
                            <td><label for="proof2">學生證/畢業證書</label>
                            </td>
                            <td>
                                <input id="proof2" name="proof2" type="file" class="form-control" accept=".jpg,pdf,png">
                            </td>
                        </tr>
                    </tbody>
                </table>




            </div>
            <div class="step-content step-content-4 mt-5">

                <h3 class="mb-4">補習資料</h3>
                <table>
                    <tbody>
                        <tr>
                            <td class="align-top"><label for="self-intro">自我介紹 (50字或以上) *
                                </label></td>
                            <td><textarea id="self-intro" name="self-intro" class="form-control" rows="4"
                                    cols="50"><?php echo get_field('self_intro');?></textarea></td>
                        </tr>

                    </tbody>
                </table>

                <h5> 可教授科目</h5>

                <h5 class="subject-list-top d-none">
                    <a href="javascript:void(0);">
                        HKDSE科目列</a>
                </h5>

                <div class="subject-list subject-list-hkdse d-block mt-4">
                    <table>
                        <tbody>
                            <tr>
                                <td colspan="2">

                                    <label for="t-subjects-kin">
                                        <h5> 幼稚園</h5>
                                    </label>

                                    <?php
                                    $kin_subjects=array('英文','普通話');
                                   for($i=0;$i<count($kin_subjects);$i++)
                                   {
                                       ?>
                                    <div>
                                        <input
                                            <?php echo in_array($kin_subjects[$i], get_field('t_subjects_kin')) ? 'checked':''; ?>
                                            class="form-check-input" type="checkbox"
                                            value="<?php echo $kin_subjects[$i];?>"
                                            id="t-subjects-kin-value-<?php echo $i+1?>" name="t-subjects-kin[]">
                                        <label class="form-check-label" for="t-subjects-kin-value-<?php echo $i+1?>">
                                            <?php echo $kin_subjects[$i];?>
                                        </label>
                                    </div>
                                    <?php
                                   }
                                   ?>


                                    <div class="mt-2 w-100">
                                        <label for="t-subjects-kin-value-other d-inline-block">其他：</label>
                                        <input class="limit-input-w form-control mt-2 d-inline-block"
                                            id="t-subjects-kin-value-other" name="t-subjects-kin-value-other"
                                            type="text" value="<?php echo get_field('t_subjects_kin_value_other');?>">
                                    </div>

                                </td>
                            </tr>


                            <tr>
                                <td colspan="2"><label for="t-subjects-pri">
                                        <h5>小學</h5>
                                    </label>

                                    <?php
                                    
                                
                                    $pri_subjects=array("全科","功課輔導","中文","英文","數學","常識","普通話");
                                  
                                    for($i=0;$i<count($pri_subjects);$i++)
                                    {
                                        ?>

                                    <div>
                                        <input
                                            <?php echo in_array($pri_subjects[$i], get_field('t_subjects_pri')) ? 'checked':''; ?>
                                            class="form-check-input" type="checkbox"
                                            value="<?php echo $pri_subjects[$i];?>"
                                            id="t-subjects-pri-value-<?php echo $i+1;?>" name="t-subjects-pri[]">
                                        <label class="form-check-label" for="t-subjects-pri-value-<?php echo $i+1;?>">
                                            <?php echo $pri_subjects[$i];?>

                                        </label>
                                    </div>
                                    <?php
                                    }
                                  
                                  ?>



                                    <div class="mt-2 w-100">
                                        <label for="t-subjects-pri-value-other d-inline-block">其他：</label>
                                        <input class="limit-input-w form-control mt-2 d-inline-block"
                                            id="t-subjects-pri-value-other" name="t-subjects-pri-value-other"
                                            type="text" value="<?php echo get_field('t_subjects_pri_value_other');?>">
                                    </div>

                                </td>
                            </tr>




                            <tr>
                                <td colspan="2"><label for="t-subjects-f13">
                                        <h5>中學(中一至中三)</h5>
                                    </label>

                                    <?php
                                
                                $f13_subjects=array("全科","功課輔導","中文","英文","數學","通識","物理","化學","生物","綜合科學","資訊及通訊科技","地理","中史","西史","英國文學","經濟","企業、會計與財務概論","普通話");

                                    ?>

                                    <?php

                                    for($i=0;$i<count($f13_subjects);$i++)
                                    {
                                        ?>

                                    <div>
                                        <input
                                            <?php echo in_array($f13_subjects[$i], get_field('t_subjects_f13')) ? 'checked':''; ?>
                                            class="form-check-input" type="checkbox"
                                            value="<?php echo $f13_subjects[$i];?>"
                                            id="t-subjects-f13-value-<?php echo $i+1;?>" name="t-subjects-f13[]">
                                        <label class="form-check-label" for="t-subjects-f13-value-<?php echo $i+1;?>">
                                            <?php echo $f13_subjects[$i];?>

                                        </label>
                                    </div>
                                    <?php
                                    }

                                    ?>



                                    <div class="mt-2 w-100">
                                        <label for="t-subjects-f13-value-other">其他：</label>
                                        <input class="limit-input-w form-control mt-2 d-inline-block"
                                            id="t-subjects-f13-value-other" name="t-subjects-f13-value-other"
                                            type="text" value="<?php echo get_field('t_subjects_f13_value_other');?>">
                                    </div>

                                </td>
                            </tr>



                            <tr>
                                <td colspan="2"><label for="t-subjects-f46">
                                        <h5>中學(中四至中六)</h5>
                                    </label>
                                    <?php
                                $f46_subjects=array("中文","英文","數學","數學(M1)","數學(M2)","通識","物理","化學","生物","綜合科學","資訊及通訊科技","地理","中史","西史","中國文學","英國文學","經濟","企業、會計與財務概論","旅遊與款待","倫理與宗教");                                 
                                  ?>
                                    <?php

                            for($i=0;$i<count($f46_subjects);$i++)
                            {
                                ?>

                                    <div>
                                        <input
                                            <?php echo in_array($f46_subjects[$i], get_field('t_subjects_f46')) ? 'checked':''; ?>
                                            class="form-check-input" type="checkbox"
                                            value="<?php echo $f46_subjects[$i];?>"
                                            id="t-subjects-f46-value-<?php echo $i+1;?>" name="t-subjects-f46[]">
                                        <label class="form-check-label" for="t-subjects-f13-value-<?php echo $i+1;?>">
                                            <?php echo $f46_subjects[$i];?>

                                        </label>
                                    </div>
                                    <?php
                            }

                            ?>






                                    <div class="mt-2 w-100">
                                        <label for="t-subjects-f46-value-other">其他：</label>
                                        <input class="limit-input-w form-control mt-2 d-inline-block"
                                            id="t-subjects-f46-value-other" name="t-subjects-f46-value-other"
                                            type="text" value="<?php echo get_field('t_subjects_f46_value_other');?>">
                                    </div>

                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>

                <h5 class="subject-list-top d-none">
                    <a href="javascript:void(0);">
                        IB科目列</a>
                </h5>



                <table class="mt-5">
                    <tbody>
                        <tr>
                            <td> <label class="form-check-label" for="">
                                    課堂語言 *
                                </label></td>
                            <td>
                                <div class="lesson-lang-group">
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="中文"
                                            id="lesson-lang-value-1" name="lesson-lang[]"
                                            <?php echo in_array('中文', get_field('lesson_lang')) ? 'checked':''; ?>>
                                        <label class="form-check-label" for="lesson-lang-value-1">
                                            中文
                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="英文"
                                            id="lesson-lang-value-2" name="lesson-lang[]"
                                            <?php echo in_array('英文', get_field('lesson_lang')) ? 'checked':''; ?>>
                                        <label class="form-check-label" for="lesson-lang-value-2">
                                            英文
                                        </label>
                                    </div>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>


                <h5 class="mt-4">可補習地區 *</h5>
                <table>

                    <tbody>
                        <tr>

                            <td>
                                <div>
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


                                            <?php
                                $hk_place_arr=array("中半山","薄扶林","中上環","西環","灣仔","銅鑼灣","跑馬地","北角","鰂魚涌","太古","筲箕灣","西灣河","柴灣","小西灣","香港仔","鴨利洲","赤柱");
                                for($i=0;$i<count($hk_place_arr);$i++)
                                {
                                    ?>
                                            <div>
                                                <input
                                                    <?php echo in_array($hk_place_arr[$i], get_field('class_area')) ? 'checked':''; ?>
                                                    class="form-check-input" type="checkbox"
                                                    value="<?php echo $hk_place_arr[$i];?>"
                                                    id="hk-class-area-value-<?php echo $i;?>" name="class-area[]"
                                                    <?php echo $_POST['filter-form']&&in_array($hk_place_arr[$i], $_POST['class-area']) ? 'checked':''; ?>>
                                                <label class="form-check-label"
                                                    for="hk-class-area-value-<?php echo $i;?>">
                                                    <?php echo $hk_place_arr[$i];?>
                                                </label>
                                            </div>
                                            <?php
                                }
                                ?>



                                        </div>


                                        <div class="mt-3">

                                            <input class="form-check-input" type="checkbox" id="kl-place" name="">
                                            <label class="form-check-label" for="kl-place">
                                                九龍區
                                            </label>
                                        </div>

                                        <div class="place-group">

                                            <?php
                                $kl_place_arr=array("美孚","荔枝角","長沙灣","深水涉","大角咀","旺角","何文田","油麻地","佐敦","尖沙咀","土瓜灣","紅磡","石硤尾","九龍塘","樂富","慈雲山","黃大仙","鑽石山","新蒲崗","彩虹","牛池灣","牛頭角","九龍灣","秀茂坪","觀塘","藍田","油塘","九龍城");
                                for($i=0;$i<count($kl_place_arr);$i++)
                                {
                                    ?>
                                            <div>
                                                <input
                                                    <?php echo in_array($kl_place_arr[$i], get_field('class_area')) ? 'checked':''; ?>
                                                    class="form-check-input" type="checkbox"
                                                    value="<?php echo $kl_place_arr[$i];?>"
                                                    id="kl-class-area-value-<?php echo $i;?>" name="class-area[]"
                                                    <?php echo $_POST['filter-form']&&in_array($kl_place_arr[$i], $_POST['class-area']) ? 'checked':''; ?>>
                                                <label class="form-check-label"
                                                    for="kl-class-area-value-<?php echo $i;?>">
                                                    <?php echo $kl_place_arr[$i];?>
                                                </label>
                                            </div>
                                            <?php
                                }
                                ?>





                                        </div>




                                        <div class="mt-3">
                                            <input class="form-check-input" type="checkbox" id="nt-place" name="">
                                            <label class="form-check-label" for="nt-place">
                                                新界區
                                            </label>
                                        </div>

                                        <div class="place-group">

                                            <?php
                                $nt_place_arr=array("將軍澳","西貢","荃灣","深井","馬灣","葵涌","荔景","葵芳","青衣","大圍","沙田","沙田市中心","小瀝源","火炭","馬鞍山","大埔","粉嶺","上水","元朗","天水圍","屯門","青龍頭","東涌","離島");
                                for($i=0;$i<count($nt_place_arr);$i++)
                                {
                                    ?>
                                            <div>
                                                <input
                                                    <?php echo in_array($nt_place_arr[$i], get_field('class_area')) ? 'checked':''; ?>
                                                    class="form-check-input" type="checkbox"
                                                    value="<?php echo $nt_place_arr[$i];?>"
                                                    id="nt-class-area-value-<?php echo $i;?>" name="class-area[]"
                                                    <?php echo $_POST['filter-form']&&in_array($nt_place_arr[$i], $_POST['class-area']) ? 'checked':''; ?>>
                                                <label class="form-check-label"
                                                    for="nt-class-area-value-<?php echo $i;?>">
                                                    <?php echo $nt_place_arr[$i];?>
                                                </label>
                                            </div>
                                            <?php
                                }
                                ?>





                                        </div>














                                    </div>


                                    <h5 class="mt-4">可供補習方式 *</h5>
                                    <?php
                                    
                                    $tutorial_style_arr=array('上門','不上門','視像補習');

                                    for($i=0;$i<count($tutorial_style_arr);$i++)
                                    {
                                        ?>
                                    <div>
                                        <input
                                            <?php echo in_array($tutorial_style_arr[$i], get_field('t_style')) ? 'checked':''; ?>
                                            class="form-check-input" type="checkbox"
                                            value="<?php echo $tutorial_style_arr[$i];?>"
                                            id="t-style-value-<?php echo $i+1;?>" name="t-style[]">
                                        <label class="form-check-label" for="t-style-value-<?php echo $i+1;?>">
                                            <?php echo $tutorial_style_arr[$i];?>
                                        </label>
                                    </div>
                                    <?php
                                    }
                                    ?>

                                    <!-- <div>
                                        <input class="form-check-input" type="checkbox" value="上門" id="t-style-value-1"
                                            name="t-style[]">
                                        <label class="form-check-label" for="t-style-value-1">
                                            上門
                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="不上門" id="t-style-value-2"
                                            name="t-style[]">
                                        <label class="form-check-label" for="t-style-value-2">
                                            不上門

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="視像補習"
                                            id="t-style-value-3" name="t-style[]">
                                        <label class="form-check-label" for="t-style-value-3">
                                            視像補習


                                        </label>
                                    </div> -->


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
                    </tbody>
                </table>



                <input type="submit" class="submit-btn" value="更新資料"></input>

            </div>







        </form>

    </div>



</div>
<script type="text/javascript">
$(function() {



    $('#all-place').change(function() {
        if ($(this).is(':checked')) {

            $('#hk-place').prop('checked', true);
            $('#kl-place').prop('checked', true);
            $('#nt-place').prop('checked', true);
            $('input[name="class-area[]"]').prop('checked', true);



        } else {

            $('#hk-place').prop('checked', false);
            $('#kl-place').prop('checked', false);
            $('#nt-place').prop('checked', false);
            $('input[name="class-area[]"]').prop('checked', false);



        }
    })


    $('#hk-place').change(function() {
        if ($(this).is(':checked')) {

            for (i = 0; i < <?php echo count($hk_place_arr);?>; i++) {
                $(this).parent('div').next('.place-group').find('#hk-class-area-value-' + i).prop(
                    'checked', true);
                $(this).parent('div').find('.place-group').find('#hk-class-area-value-' + i).prop(
                    'checked', true);
            }

        } else {
            for (i = 0; i < <?php echo count($hk_place_arr);?>; i++) {
                $(this).parent('div').next('.place-group').find('#hk-class-area-value-' + i).prop(
                    'checked', false);
                $(this).parent('div').find('.place-group').find('#hk-class-area-value-' + i).prop(
                    'checked', false);
                // $('#class-area-value-' + i).prop('checked', false);
            }
        }
    })





    $('#kl-place').change(function() {
        if ($(this).is(':checked')) {

            for (i = 0; i < <?php echo count($kl_place_arr);?>; i++) {
                $(this).parent('div').next('.place-group').find('#kl-class-area-value-' + i).prop(
                    'checked', true);
                $(this).parent('div').find('.place-group').find('#kl-class-area-value-' + i).prop(
                    'checked', true);
            }

        } else {
            for (i = 0; i < <?php echo count($kl_place_arr);?>; i++) {
                $(this).parent('div').next('.place-group').find('#kl-class-area-value-' + i).prop(
                    'checked', false);
                $(this).parent('div').find('.place-group').find('#kl-class-area-value-' + i).prop(
                    'checked', false);
            }
        }
    })


    $('#nt-place').change(function() {
        if ($(this).is(':checked')) {
            alert(56);
            for (i = 0; i < <?php echo count($nt_place_arr);?>; i++) {
                $('#nt-class-area-value-' + i).prop(
                    'checked', true);
                $('#nt-class-area-value-' + i).prop(
                    'checked', true);
            }

        } else {
            for (i = 0; i < <?php echo count($nt_place_arr);?>; i++) {
                $('#nt-class-area-value-' + i).prop(
                    'checked', false);
                $('#nt-class-area-value-' + i).prop(
                    'checked', false);
            }
        }
    })
    $('.info-btn').click(function() {
        $('.info-btn').removeClass('active');
        $(this).addClass('active');
        var idx = $(this).index() + 1;
        $('.tutor-info-form').fadeOut(0);
        $('.tutor-info-form-' + idx).fadeIn(0);
    })
})
</script>
<?php
get_footer();