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
                                    <!-- <option value="Year 1">Year 1</option>
                                    <option value="Year 2">Year 2</option>
                                    <option value="Year 3">Year 3</option>
                                    <option value="Year 4">Year 4</option>
                                    <option value="Year 5">Year 5</option>
                                    <option value="Year 6">Year 6</option>
                                    <option value="已畢業">已畢業</option> -->

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

                        <!-- <tr>
                            <td><label for="">中文</label></td>
                            <td class="grade-col"><label><input type="radio" value="5**" name="dse-sub-1">5**</label>
                            </td>
                            <td class="grade-col"><label><input type="radio" value="5*" name="dse-sub-1">5*</label></td>
                            <td class="grade-col"><label><input type="radio" value="5" name="dse-sub-1">5</label></td>
                            <td class="grade-col"><label><input type="radio" value="4" name="dse-sub-1">4</label></td>
                            <td class="grade-col"><a href="javascript:void(0);" class="radio-cancel-btn">取消</a></td>

                        </tr>
                        <tr>
                            <td><label for="">英文</label></td>

                            <td class="grade-col"><label><input type="radio" value="5**" name="dse-sub-2">5**</label>
                            </td>
                            <td class="grade-col"><label><input type="radio" value="5*" name="dse-sub-2">5*</label></td>
                            <td class="grade-col"><label><input type="radio" value="5" name="dse-sub-2">5</label></td>
                            <td class="grade-col"><label><input type="radio" value="4" name="dse-sub-2">4</label></td>
                            <td class="grade-col"><a href="javascript:void(0);" class="radio-cancel-btn">取消</a></td>

                        </tr>
                        <tr>
                            <td><label for="">數學</label></td>
                            <td class="grade-col"><label><input type="radio" value="5**" name="dse-sub-3">5**</label>
                            </td>
                            <td class="grade-col"><label><input type="radio" value="5*" name="dse-sub-3">5*</label></td>
                            <td class="grade-col"><label><input type="radio" value="5" name="dse-sub-3">5</label></td>
                            <td class="grade-col"><label><input type="radio" value="4" name="dse-sub-3">4</label></td>
                            <td class="grade-col"><a href="javascript:void(0);" class="radio-cancel-btn">取消</a></td>

                        </tr>
                        <tr>
                            <td><label for="">數學(M1)</label></td>
                            <td class="grade-col"><label><input type="radio" value="5**" name="dse-sub-4">5**</label>
                            </td>
                            <td class="grade-col"><label><input type="radio" value="5*" name="dse-sub-4">5*</label></td>
                            <td class="grade-col"><label><input type="radio" value="5" name="dse-sub-4">5</label></td>
                            <td class="grade-col"><label><input type="radio" value="4" name="dse-sub-4">4</label></td>
                            <td class="grade-col"><a href="javascript:void(0);" class="radio-cancel-btn">取消</a></td>

                        </tr>
                        <tr>
                            <td><label for="">數學(M2)</label></td>
                            <td class="grade-col"><label><input type="radio" value="5**" name="dse-sub-5">5**</label>
                            </td>
                            <td class="grade-col"><label><input type="radio" value="5*" name="dse-sub-5">5*</label></td>
                            <td class="grade-col"><label><input type="radio" value="5" name="dse-sub-5">5</label></td>
                            <td class="grade-col"><label><input type="radio" value="4" name="dse-sub-5">4</label></td>
                            <td class="grade-col"><a href="javascript:void(0);" class="radio-cancel-btn">取消</a></td>

                        </tr>
                        <tr>
                            <td><label for="">通識</label></td>
                            <td class="grade-col"><label><input type="radio" value="5**" name="dse-sub-6">5**</label>
                            </td>
                            <td class="grade-col"><label><input type="radio" value="5*" name="dse-sub-6">5*</label></td>
                            <td class="grade-col"><label><input type="radio" value="5" name="dse-sub-6">5</label></td>
                            <td class="grade-col"><label><input type="radio" value="4" name="dse-sub-6">4</label></td>
                            <td class="grade-col"><a href="javascript:void(0);" class="radio-cancel-btn">取消</a></td>
                        </tr>
                        <tr>
                            <td><label for="">物理</label></td>
                            <td class="grade-col"><label><input type="radio" value="5**" name="dse-sub-7">5**</label>
                            </td>
                            <td class="grade-col"><label><input type="radio" value="5*" name="dse-sub-7">5*</label></td>
                            <td class="grade-col"><label><input type="radio" value="5" name="dse-sub-7">5</label></td>
                            <td class="grade-col"><label><input type="radio" value="4" name="dse-sub-7">4</label></td>
                            <td class="grade-col"><a href="javascript:void(0);" class="radio-cancel-btn">取消</a></td>
                        </tr>
                        <tr>
                            <td><label for="">化學</label></td>
                            <td class="grade-col"><label><input type="radio" value="5**" name="dse-sub-8">5**</label>
                            </td>
                            <td class="grade-col"><label><input type="radio" value="5*" name="dse-sub-8">5*</label></td>
                            <td class="grade-col"><label><input type="radio" value="5" name="dse-sub-8">5</label></td>
                            <td class="grade-col"><label><input type="radio" value="4" name="dse-sub-8">4</label></td>
                            <td class="grade-col"><a href="javascript:void(0);" class="radio-cancel-btn">取消</a></td>
                        </tr>
                        <tr>
                            <td><label for="">生物</label></td>
                            <td class="grade-col"><label><input type="radio" value="5**" name="dse-sub-9">5**</label>
                            </td>
                            <td class="grade-col"><label><input type="radio" value="5*" name="dse-sub-9">5*</label></td>
                            <td class="grade-col"><label><input type="radio" value="5" name="dse-sub-9">5</label></td>
                            <td class="grade-col"><label><input type="radio" value="4" name="dse-sub-9">4</label></td>
                            <td class="grade-col"><a href="javascript:void(0);" class="radio-cancel-btn">取消</a></td>
                        </tr>
                        <tr>
                            <td><label for="">組合科學：物理 化學
                                </label></td>
                            <td class="grade-col"><label><input type="radio" value="5**" name="dse-sub-10">5**</label>
                            </td>
                            <td class="grade-col"><label><input type="radio" value="5*" name="dse-sub-10">5*</label>
                            </td>
                            <td class="grade-col"><label><input type="radio" value="5" name="dse-sub-10">5</label></td>
                            <td class="grade-col"><label><input type="radio" value="4" name="dse-sub-10">4</label></td>
                            <td class="grade-col"><a href="javascript:void(0);" class="radio-cancel-btn">取消</a></td>
                        </tr>
                        <tr>
                            <td><label for="">組合科學：化學 生物
                                </label></td>
                            <td class="grade-col"><label><input type="radio" value="5**" name="dse-sub-11">5**</label>
                            </td>
                            <td class="grade-col"><label><input type="radio" value="5*" name="dse-sub-11">5*</label>
                            </td>
                            <td class="grade-col"><label><input type="radio" value="5" name="dse-sub-11">5</label></td>
                            <td class="grade-col"><label><input type="radio" value="4" name="dse-sub-11">4</label></td>
                            <td class="grade-col"><a href="javascript:void(0);" class="radio-cancel-btn">取消</a></td>
                        </tr>
                        <tr>
                            <td><label for="">綜合科學
                                </label></td>
                            <td class="grade-col"><label><input type="radio" value="5**" name="dse-sub-12">5**</label>
                            </td>
                            <td class="grade-col"><label><input type="radio" value="5*" name="dse-sub-12">5*</label>
                            </td>
                            <td class="grade-col"><label><input type="radio" value="5" name="dse-sub-12">5</label></td>
                            <td class="grade-col"><label><input type="radio" value="4" name="dse-sub-12">4</label></td>
                            <td class="grade-col"><a href="javascript:void(0);" class="radio-cancel-btn">取消</a></td>
                        </tr>
                        <tr>
                            <td><label for="">資訊及通訊科技
                                </label></td>
                            <td class="grade-col"><label><input type="radio" value="5**" name="dse-sub-13">5**</label>
                            </td>
                            <td class="grade-col"><label><input type="radio" value="5*" name="dse-sub-13">5*</label>
                            </td>
                            <td class="grade-col"><label><input type="radio" value="5" name="dse-sub-13">5</label></td>
                            <td class="grade-col"><label><input type="radio" value="4" name="dse-sub-13">4</label></td>
                            <td class="grade-col"><a href="javascript:void(0);" class="radio-cancel-btn">取消</a></td>
                        </tr>
                        <tr>
                            <td><label for="">地理</label></td>
                            <td class="grade-col"><label><input type="radio" value="5**" name="dse-sub-14">5**</label>
                            </td>
                            <td class="grade-col"><label><input type="radio" value="5*" name="dse-sub-14">5*</label>
                            </td>
                            <td class="grade-col"><label><input type="radio" value="5" name="dse-sub-14">5</label></td>
                            <td class="grade-col"><label><input type="radio" value="4" name="dse-sub-14">4</label></td>
                            <td class="grade-col"><a href="javascript:void(0);" class="radio-cancel-btn">取消</a></td>
                        </tr>
                        <tr>
                            <td><label for="">中史
                                </label></td>
                            <td class="grade-col"><label><input type="radio" value="5**" name="dse-sub-15">5**</label>
                            </td>
                            <td class="grade-col"><label><input type="radio" value="5*" name="dse-sub-15">5*</label>
                            </td>
                            <td class="grade-col"><label><input type="radio" value="5" name="dse-sub-15">5</label></td>
                            <td class="grade-col"><label><input type="radio" value="4" name="dse-sub-15">4</label></td>
                            <td class="grade-col"><a href="javascript:void(0);" class="radio-cancel-btn">取消</a></td>
                        </tr>
                        <tr>
                            <td><label for="">西史
                                </label></td>
                            <td class="grade-col"><label><input type="radio" value="5**" name="dse-sub-16">5**</label>
                            </td>
                            <td class="grade-col"><label><input type="radio" value="5*" name="dse-sub-16">5*</label>
                            </td>
                            <td class="grade-col"><label><input type="radio" value="5" name="dse-sub-16">5</label></td>
                            <td class="grade-col"><label><input type="radio" value="4" name="dse-sub-16">4</label></td>
                            <td class="grade-col"><a href="javascript:void(0);" class="radio-cancel-btn">取消</a></td>
                        </tr>
                        <tr>
                            <td><label for="">中國文學
                                </label></td>
                            <td class="grade-col"><label><input type="radio" value="5**" name="dse-sub-17">5**</label>
                            </td>
                            <td class="grade-col"><label><input type="radio" value="5*" name="dse-sub-17">5*</label>
                            </td>
                            <td class="grade-col"><label><input type="radio" value="5" name="dse-sub-17">5</label></td>
                            <td class="grade-col"><label><input type="radio" value="4" name="dse-sub-17">4</label></td>
                            <td class="grade-col"><a href="javascript:void(0);" class="radio-cancel-btn">取消</a></td>
                        </tr>
                        <tr>
                            <td><label for="">英國文學
                                </label></td>
                            <td class="grade-col"><label><input type="radio" value="5**" name="dse-sub-18">5**</label>
                            </td>
                            <td class="grade-col"><label><input type="radio" value="5*" name="dse-sub-18">5*</label>
                            </td>
                            <td class="grade-col"><label><input type="radio" value="5" name="dse-sub-18">5</label></td>
                            <td class="grade-col"><label><input type="radio" value="4" name="dse-sub-18">4</label></td>
                            <td class="grade-col"><a href="javascript:void(0);" class="radio-cancel-btn">取消</a></td>
                        </tr>
                        <tr>
                            <td><label for="">倫理與宗教
                                </label></td>
                            <td class="grade-col"><label><input type="radio" value="5**" name="dse-sub-19">5**</label>
                            </td>
                            <td class="grade-col"><label><input type="radio" value="5*" name="dse-sub-19">5*</label>
                            </td>
                            <td class="grade-col"><label><input type="radio" value="5" name="dse-sub-19">5</label></td>
                            <td class="grade-col"><label><input type="radio" value="4" name="dse-sub-19">4</label></td>
                            <td class="grade-col"><a href="javascript:void(0);" class="radio-cancel-btn">取消</a></td>
                        </tr>
                        <tr>
                            <td><label for="">經濟
                                </label></td>
                            <td class="grade-col"><label><input type="radio" value="5**" name="dse-sub-20">5**</label>
                            </td>
                            <td class="grade-col"><label><input type="radio" value="5*" name="dse-sub-20">5*</label>
                            </td>
                            <td class="grade-col"><label><input type="radio" value="5" name="dse-sub-20">5</label></td>
                            <td class="grade-col"><label><input type="radio" value="4" name="dse-sub-20">4</label></td>
                            <td class="grade-col"><a href="javascript:void(0);" class="radio-cancel-btn">取消</a></td>
                        </tr>
                        <tr>
                            <td><label for="">企業、會計與財務概論
                                </label></td>
                            <td class="grade-col"><label><input type="radio" value="5**" name="dse-sub-21">5**</label>
                            </td>
                            <td class="grade-col"><label><input type="radio" value="5*" name="dse-sub-21">5*</label>
                            </td>
                            <td class="grade-col"><label><input type="radio" value="5" name="dse-sub-21">5</label></td>
                            <td class="grade-col"><label><input type="radio" value="4" name="dse-sub-21">4</label></td>
                            <td class="grade-col"><a href="javascript:void(0);" class="radio-cancel-btn">取消</a></td>
                        </tr>
                        <tr>
                            <td><label for="">旅遊與款待</label></td>
                            <td class="grade-col"><label><input type="radio" value="5**" name="dse-sub-22">5**</label>
                            </td>
                            <td class="grade-col"><label><input type="radio" value="5*" name="dse-sub-22">5*</label>
                            </td>
                            <td class="grade-col"><label><input type="radio" value="5" name="dse-sub-22">5</label></td>
                            <td class="grade-col"><label><input type="radio" value="4" name="dse-sub-22">4</label></td>
                            <td class="grade-col"><a href="javascript:void(0);" class="radio-cancel-btn">取消</a></td>
                        </tr>

                        <tr>
                            <td class="pe-3"><label for="other-subject-1" class="mb-2">其他科目
                                    1</label><input id="other-subject-1" type="text"
                                    class="form-control other-subject-input" name="other-subject-1">
                            </td>
                            <td colspan="5"><label for="other-subject-1-grade" class="mb-2">成績</label><input
                                    id="other-subject-1-grade" type="text" class="form-control other-subject-input"
                                    name="other-subject-1-grade">
                            </td>
                        </tr>
                        <tr>
                            <td class="pe-3"><label for="other-subject-2" class="mb-2">其他科目
                                    2</label><input id="other-subject-2" type="text"
                                    class="form-control other-subject-input" name="other-subject-2">
                            </td>
                            <td colspan="5"><label for="other-subject-2-grade" class="mb-2">成績</label><input
                                    id="other-subject-2-grade" type="text" class="form-control other-subject-input"
                                    name="other-subject-2-grade">
                            </td>
                        </tr>
                        <tr>
                            <td class="pe-3"><label for="other-subject-3" class="mb-2">其他科目
                                    3</label><input id="other-subject-3" type="text"
                                    class="form-control other-subject-input" name="other-subject-3">
                            </td>
                            <td colspan="5"><label for="other-subject-3-grade" class="mb-2">成績</label><input
                                    id="other-subject-3-grade" type="text" class="form-control other-subject-input"
                                    name="other-subject-3-grade">
                            </td>
                        </tr>
                        <tr>
                            <td class="pe-3"><label for="other-subject-4" class="mb-2">其他科目
                                    4</label><input id="other-subject-4" type="text"
                                    class="form-control other-subject-input" name="other-subject-4">
                            </td>
                            <td colspan="5"><label for="other-subject-4-grade" class="mb-2">成績</label><input
                                    id="other-subject-4-grade" type="text" class="form-control other-subject-input"
                                    name="other-subject-4-grade">
                            </td>
                        </tr>
                        <tr>
                            <td class="pe-3"><label for="other-subject-5" class="mb-2">其他科目
                                    5</label><input id="other-subject-5" type="text"
                                    class="form-control other-subject-input" name="other-subject-5">
                            </td>
                            <td colspan="5"><label for="other-subject-5-grade" class="mb-2">成績</label><input
                                    id="other-subject-5-grade" type="text" class="form-control other-subject-input"
                                    name="other-subject-5-grade">
                            </td>
                        </tr>
                        <tr>
                            <td class="pe-3"><label for="other-subject-6" class="mb-2">其他科目
                                    6</label><input id="other-subject-6" type="text"
                                    class="form-control other-subject-input" name="other-subject-6">
                            </td>
                            <td colspan="5"><label for="other-subject-6-grade" class="mb-2">成績</label><input
                                    id="other-subject-6-grade" type="text" class="form-control other-subject-input"
                                    name="other-subject-6-grade">
                            </td>
                        </tr>
                        <tr>
                            <td class="pe-3"><label for="other-subject-7" class="mb-2">其他科目
                                    7</label><input id="other-subject-7" type="text"
                                    class="form-control other-subject-input" name="other-subject-7">
                            </td>
                            <td colspan="5"><label for="other-subject-7-grade" class="mb-2">成績</label><input
                                    id="other-subject-7-grade" type="text" class="form-control other-subject-input"
                                    name="other-subject-7-grade">
                            </td>
                        </tr>
                        <tr>
                            <td class="pe-3"><label for="other-subject-8" class="mb-2">其他科目
                                    8</label><input id="other-subject-8" type="text"
                                    class="form-control other-subject-input" name="other-subject-8">
                            </td>
                            <td colspan="5"><label for="other-subject-8-grade" class="mb-2">成績</label><input
                                    id="other-subject-8-grade" type="text" class="form-control other-subject-input"
                                    name="other-subject-8-grade">
                            </td>
                        </tr>
                        <tr>
                            <td class="pe-3"><label for="other-subject-9" class="mb-2">其他科目
                                    9</label><input id="other-subject-9" type="text"
                                    class="form-control other-subject-input" name="other-subject-9">
                            </td>
                            <td colspan="5"><label for="other-subject-9-grade" class="mb-2">成績</label><input
                                    id="other-subject-9-grade" type="text" class="form-control other-subject-input"
                                    name="other-subject-9-grade">
                            </td>
                        </tr>
                        <tr>
                            <td class="pe-3"><label for="other-subject-10" class="mb-2">其他科目
                                    10</label><input id="other-subject-10" type="text"
                                    class="form-control other-subject-input" name="other-subject-10">
                            </td>
                            <td colspan="5"><label for="other-subject-10-grade" class="mb-2">成績</label><input
                                    id="other-subject-10-grade" type="text" class="form-control other-subject-input"
                                    name="other-subject-10-grade">
                            </td>
                        </tr>
 -->


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

                                    <!-- <div>
                                        <input class="form-check-input" type="checkbox" value="中文"
                                            id="t-subjects-f46-value-3" name="t-subjects-f46[]">
                                        <label class="form-check-label" for="t-subjects-f46-value-3">

                                            中文

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="英文"
                                            id="t-subjects-f46-value-4" name="t-subjects-f46[]">
                                        <label class="form-check-label" for="t-subjects-f46-value-4">

                                            英文

                                        </label>
                                    </div>

                                    <div>
                                        <input class="form-check-input" type="checkbox" value="數學"
                                            id="t-subjects-f46-value-5" name="t-subjects-f46[]">
                                        <label class="form-check-label" for="t-subjects-f46-value-5">

                                            數學

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="數學(M1)"
                                            id="t-subjects-f46-value-6" name="t-subjects-f46[]">
                                        <label class="form-check-label" for="t-subjects-f46-value-6">

                                            數學(M1)

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="數學(M2)"
                                            id="t-subjects-f46-value-7" name="t-subjects-f46[]">
                                        <label class="form-check-label" for="t-subjects-f46-value-7">

                                            數學(M2)

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="通識"
                                            id="t-subjects-f46-value-8" name="t-subjects-f46[]">
                                        <label class="form-check-label" for="t-subjects-f46-value-8">

                                            通識

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="物理"
                                            id="t-subjects-f46-value-9" name="t-subjects-f46[]">
                                        <label class="form-check-label" for="t-subjects-f46-value-9">

                                            物理

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="化學"
                                            id="t-subjects-f46-value-10" name="t-subjects-f46[]">
                                        <label class="form-check-label" for="t-subjects-f46-value-10">

                                            化學

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="生物"
                                            id="t-subjects-f46-value-11" name="t-subjects-f46[]">
                                        <label class="form-check-label" for="t-subjects-f46-value-11">

                                            生物

                                        </label>
                                    </div>
                                  
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="綜合科學"
                                            id="t-subjects-f46-value-14" name="t-subjects-f46[]">
                                        <label class="form-check-label" for="t-subjects-f46-value-14">

                                            綜合科學

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="資訊及通訊科技"
                                            id="t-subjects-f46-value-15" name="t-subjects-f46[]">
                                        <label class="form-check-label" for="t-subjects-f46-value-15">

                                            資訊及通訊科技

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="地理"
                                            id="t-subjects-f46-value-16" name="t-subjects-f46[]">
                                        <label class="form-check-label" for="t-subjects-f46-value-16">

                                            地理

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="中史"
                                            id="t-subjects-f46-value-17" name="t-subjects-f46[]">
                                        <label class="form-check-label" for="t-subjects-f46-value-17">

                                            中史

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="西史"
                                            id="t-subjects-f46-value-18" name="t-subjects-f46[]">
                                        <label class="form-check-label" for="t-subjects-f46-value-18">

                                            西史

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="中國文學"
                                            id="t-subjects-f46-value-19" name="t-subjects-f46[]">
                                        <label class="form-check-label" for="t-subjects-f46-value-19">

                                            中國文學

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="英國文學"
                                            id="t-subjects-f46-value-20" name="t-subjects-f46[]">
                                        <label class="form-check-label" for="t-subjects-f46-value-20">

                                            英國文學

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="經濟"
                                            id="t-subjects-f46-value-21" name="t-subjects-f46[]">
                                        <label class="form-check-label" for="t-subjects-f46-value-21">

                                            經濟

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="企業、會計與財務概論"
                                            id="t-subjects-f46-value-22" name="t-subjects-f46[]">
                                        <label class="form-check-label" for="t-subjects-f46-value-22">

                                            企業、會計與財務概論

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="旅遊與款待"
                                            id="t-subjects-f46-value-23" name="t-subjects-f46[]">
                                        <label class="form-check-label" for="t-subjects-f46-value-23">

                                            旅遊與款待

                                        </label>
                                    </div>

                                    <div>
                                        <input class="form-check-input" type="checkbox" value="倫理與宗教"
                                            id="t-subjects-f46-value-24" name="t-subjects-f46[]">
                                        <label class="form-check-label" for="t-subjects-f46-value-24">

                                            倫理與宗教

                                        </label>
                                    </div> -->



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

                <!-- <div class="subject-list subject-list-ib">
                    <table>
                        <tbody>
                            <tr>
                                <td colspan="2">


                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Chinese (A) HL"
                                            id="t-subjects-ib-value-1" name="t-subjects-ib[]">
                                        <label class="form-check-label" for="t-subjects-ib-value-1">
                                            Chinese (A) HL

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Chinese (A) SL"
                                            id="t-subjects-ib-value-2" name="t-subjects-ib[]">
                                        <label class="form-check-label" for="t-subjects-ib-value-2">
                                            Chinese (A) SL
                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Chinese (B)"
                                            id="t-subjects-ib-value-3" name="t-subjects-ib[]">
                                        <label class="form-check-label" for="t-subjects-ib-value-3">
                                            Chinese (B)
                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="English (A) HL"
                                            id="t-subjects-ib-value-4" name="t-subjects-ib[]">
                                        <label class="form-check-label" for="t-subjects-ib-value-4">
                                            English (A) HL
                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="English (A) SL"
                                            id="t-subjects-ib-value-5" name="t-subjects-ib[]">
                                        <label class="form-check-label" for="t-subjects-ib-value-5">
                                            English (A) SL
                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="English (B)"
                                            id="t-subjects-ib-value-6" name="t-subjects-ib[]">
                                        <label class="form-check-label" for="t-subjects-ib-value-6">
                                            English (B)
                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Mathematics HL"
                                            id="t-subjects-ib-value-7" name="t-subjects-ib[]">
                                        <label class="form-check-label" for="t-subjects-ib-value-7">
                                            Mathematics HL



                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Mathematics SL"
                                            id="t-subjects-ib-value-8" name="t-subjects-ib[]">
                                        <label class="form-check-label" for="t-subjects-ib-value-8">
                                            Mathematics SL


                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Mathematics Study HL"
                                            id="t-subjects-ib-value-9" name="t-subjects-ib[]">
                                        <label class="form-check-label" for="t-subjects-ib-value-9">
                                            Mathematics Study HL
                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Physics HL"
                                            id="t-subjects-ib-value-10" name="t-subjects-ib[]">
                                        <label class="form-check-label" for="t-subjects-ib-value-10">
                                            Physics HL
                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Physics SL"
                                            id="t-subjects-ib-value-11" name="t-subjects-ib[]">
                                        <label class="form-check-label" for="t-subjects-ib-value-11">
                                            Physics SL
                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Chemistry HL"
                                            id="t-subjects-ib-value-12" name="t-subjects-ib[]">
                                        <label class="form-check-label" for="t-subjects-ib-value-12">
                                            Chemistry HL
                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Chemistry SL"
                                            id="t-subjects-ib-value-13" name="t-subjects-ib[]">
                                        <label class="form-check-label" for="t-subjects-ib-value-13">
                                            Chemistry SL
                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Biology HL"
                                            id="t-subjects-ib-value-14" name="t-subjects-ib[]">
                                        <label class="form-check-label" for="t-subjects-ib-value-14">
                                            Biology HL
                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Biology SL"
                                            id="t-subjects-ib-value-15" name="t-subjects-ib[]">
                                        <label class="form-check-label" for="t-subjects-ib-value-15">
                                            Biology SL
                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Economics HL"
                                            id="t-subjects-ib-value-16" name="t-subjects-ib[]">
                                        <label class="form-check-label" for="t-subjects-ib-value-16">
                                            Economics HL

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Economics SL"
                                            id="t-subjects-ib-value-17" name="t-subjects-ib[]">
                                        <label class="form-check-label" for="t-subjects-ib-value-17">
                                            Economics SL
                                        </label>
                                    </div>

                                    <div class="mt-2 w-100">
                                        <label for="t-subjects-ib-value-other">Other:</label>
                                        <input class="limit-input-w form-control mt-2 d-inline-block"
                                            id="t-subjects-ib-value-other" name="t-subjects-ib-value-other" type="text">
                                    </div>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h5 class="subject-list-top d-none">
                    <a href="javascript:void(0);">

                        GCE AL科目列
                    </a>
                </h5>

                <div class="subject-list subject-list-gceal">
                    <table>
                        <tbody>
                            <tr>
                                <td colspan="2">


                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Chinese Language"
                                            id="t-subjects-gceal-value-1" name="t-subjects-gceal[]">
                                        <label class="form-check-label" for="t-subjects-gceal-value-1">
                                            Chinese Language
                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="English Language"
                                            id="t-subjects-gceal-value-2" name="t-subjects-gceal[]">
                                        <label class="form-check-label" for="t-subjects-gceal-value-2">
                                            English Language

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="English Literature"
                                            id="t-subjects-gceal-value-3" name="t-subjects-gceal[]">
                                        <label class="form-check-label" for="t-subjects-gceal-value-3">
                                            English Literature
                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Mathematics"
                                            id="t-subjects-gceal-value-4" name="t-subjects-gceal[]">
                                        <label class="form-check-label" for="t-subjects-gceal-value-4">
                                            Mathematics
                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Further Mathematics"
                                            id="t-subjects-gceal-value-5" name="t-subjects-gceal[]">
                                        <label class="form-check-label" for="t-subjects-gceal-value-5">
                                            Further Mathematics

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Pure Mathematics"
                                            id="t-subjects-gceal-value-6" name="t-subjects-gceal[]">
                                        <label class="form-check-label" for="t-subjects-gceal-value-6">
                                            Pure Mathematics

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Physics"
                                            id="t-subjects-gceal-value-7" name="t-subjects-gceal[]">
                                        <label class="form-check-label" for="t-subjects-gceal-value-7">
                                            Physics

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Chemistry"
                                            id="t-subjects-gceal-value-8" name="t-subjects-gceal[]">
                                        <label class="form-check-label" for="t-subjects-gceal-value-8">
                                            Chemistry

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Biology"
                                            id="t-subjects-gceal-value-9" name="t-subjects-gceal[]">
                                        <label class="form-check-label" for="t-subjects-gceal-value-9">
                                            Biology

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Statistics"
                                            id="t-subjects-gceal-value-10" name="t-subjects-gceal[]">
                                        <label class="form-check-label" for="t-subjects-gceal-value-10">
                                            Statistics

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Geography"
                                            id="t-subjects-gceal-value-11" name="t-subjects-gceal[]">
                                        <label class="form-check-label" for="t-subjects-gceal-value-11">
                                            Geography

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Psychology"
                                            id="t-subjects-gceal-value-12" name="t-subjects-gceal[]">
                                        <label class="form-check-label" for="t-subjects-gceal-value-12">
                                            Psychology

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Law"
                                            id="t-subjects-gceal-value-13" name="t-subjects-gceal[]">
                                        <label class="form-check-label" for="t-subjects-gceal-value-13">
                                            Law

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="French"
                                            id="t-subjects-gceal-value-14" name="t-subjects-gceal[]">
                                        <label class="form-check-label" for="t-subjects-gceal-value-14">
                                            French

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Spanish"
                                            id="t-subjects-gceal-value-15" name="t-subjects-gceal[]">
                                        <label class="form-check-label" for="t-subjects-gceal-value-15">
                                            Spanish

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="History"
                                            id="t-subjects-gceal-value-16" name="t-subjects-gceal[]">
                                        <label class="form-check-label" for="t-subjects-gceal-value-16">
                                            History

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Politics"
                                            id="t-subjects-gceal-value-17" name="t-subjects-gceal[]">
                                        <label class="form-check-label" for="t-subjects-gceal-value-17">
                                            Politics

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Economics"
                                            id="t-subjects-gceal-value-18" name="t-subjects-gceal[]">
                                        <label class="form-check-label" for="t-subjects-gceal-value-18">
                                            Economics

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Accounting"
                                            id="t-subjects-gceal-value-19" name="t-subjects-gceal[]">
                                        <label class="form-check-label" for="t-subjects-gceal-value-19">
                                            Accounting

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Business Studies"
                                            id="t-subjects-gceal-value-20" name="t-subjects-gceal[]">
                                        <label class="form-check-label" for="t-subjects-gceal-value-20">
                                            Business Studies

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="General Studies"
                                            id="t-subjects-gceal-value-21" name="t-subjects-gceal[]">
                                        <label class="form-check-label" for="t-subjects-gceal-value-21">
                                            General Studies

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Art"
                                            id="t-subjects-gceal-value-22" name="t-subjects-gceal[]">
                                        <label class="form-check-label" for="t-subjects-gceal-value-22">
                                            Art
                                        </label>
                                    </div>



                                    <div class="mt-2 w-100">
                                        <label for="t-subjects-gceal-value-other">Other:</label>
                                        <input class="limit-input-w form-control mt-2 d-inline-block"
                                            id="t-subjects-gceal-value-other" name="t-subjects-gceal-value-other"
                                            type="text">
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>


                <h5 class="subject-list-top d-none">
                    <a href="javascript:void(0);">
                        IGCSE科目列
                    </a>
                </h5>

                <div class="subject-list subject-list-igcse">
                    <table>
                        <tbody>
                            <tr>
                                <td colspan="2">


                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Chinese Language"
                                            id="t-subjects-igcse-value-1" name="t-subjects-igcse[]">
                                        <label class="form-check-label" for="t-subjects-igcse-value-1">
                                            Chinese Language
                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="English Language"
                                            id="t-subjects-igcse-value-2" name="t-subjects-igcse[]">
                                        <label class="form-check-label" for="t-subjects-igcse-value-2">
                                            English Language

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="English Literature"
                                            id="t-subjects-igcse-value-3" name="t-subjects-igcse[]">
                                        <label class="form-check-label" for="t-subjects-igcse-value-3">
                                            English Literature
                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Mathematics"
                                            id="t-subjects-igcse-value-4" name="t-subjects-igcse[]">
                                        <label class="form-check-label" for="t-subjects-igcse-value-4">
                                            Mathematics
                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Further Mathematics"
                                            id="t-subjects-igcse-value-5" name="t-subjects-igcse[]">
                                        <label class="form-check-label" for="t-subjects-igcse-value-5">
                                            Further Mathematics

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Pure Mathematics"
                                            id="t-subjects-igcse-value-6" name="t-subjects-igcse[]">
                                        <label class="form-check-label" for="t-subjects-igcse-value-6">
                                            Pure Mathematics

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Physics"
                                            id="t-subjects-igcse-value-7" name="t-subjects-igcse[]">
                                        <label class="form-check-label" for="t-subjects-igcse-value-7">
                                            Physics

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Chemistry"
                                            id="t-subjects-igcse-value-8" name="t-subjects-igcse[]">
                                        <label class="form-check-label" for="t-subjects-igcse-value-8">
                                            Chemistry

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Biology"
                                            id="t-subjects-igcse-value-9" name="t-subjects-igcse[]">
                                        <label class="form-check-label" for="t-subjects-igcse-value-9">
                                            Biology

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Statistics"
                                            id="t-subjects-igcse-value-10" name="t-subjects-igcse[]">
                                        <label class="form-check-label" for="t-subjects-igcse-value-10">
                                            Statistics

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Geography"
                                            id="t-subjects-igcse-value-11" name="t-subjects-igcse[]">
                                        <label class="form-check-label" for="t-subjects-igcse-value-11">
                                            Geography

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Psychology"
                                            id="t-subjects-igcse-value-12" name="t-subjects-igcse[]">
                                        <label class="form-check-label" for="t-subjects-igcse-value-12">
                                            Psychology

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Law"
                                            id="t-subjects-igcse-value-13" name="t-subjects-igcse[]">
                                        <label class="form-check-label" for="t-subjects-igcse-value-13">
                                            Law

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="French"
                                            id="t-subjects-igcse-value-14" name="t-subjects-igcse[]">
                                        <label class="form-check-label" for="t-subjects-igcse-value-14">
                                            French

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Spanish"
                                            id="t-subjects-igcse-value-15" name="t-subjects-igcse[]">
                                        <label class="form-check-label" for="t-subjects-igcse-value-15">
                                            Spanish

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="History"
                                            id="t-subjects-igcse-value-16" name="t-subjects-igcse[]">
                                        <label class="form-check-label" for="t-subjects-igcse-value-16">
                                            History

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Politics"
                                            id="t-subjects-igcse-value-17" name="t-subjects-igcse[]">
                                        <label class="form-check-label" for="t-subjects-igcse-value-17">
                                            Politics

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Economics"
                                            id="t-subjects-igcse-value-18" name="t-subjects-igcse[]">
                                        <label class="form-check-label" for="t-subjects-igcse-value-18">
                                            Economics

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Accounting"
                                            id="t-subjects-igcse-value-19" name="t-subjects-igcse[]">
                                        <label class="form-check-label" for="t-subjects-igcse-value-19">
                                            Accounting

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Business Studies"
                                            id="t-subjects-igcse-value-20" name="t-subjects-igcse[]">
                                        <label class="form-check-label" for="t-subjects-igcse-value-20">
                                            Business Studies

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="General Studies"
                                            id="t-subjects-igcse-value-21" name="t-subjects-igcse[]">
                                        <label class="form-check-label" for="t-subjects-igcse-value-21">
                                            General Studies

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Art"
                                            id="t-subjects-igcse-value-22" name="t-subjects-igcse[]">
                                        <label class="form-check-label" for="t-subjects-igcse-value-22">
                                            Art
                                        </label>
                                    </div>



                                    <div class="mt-2 w-100">
                                        <label for="t-subjects-igcse-value-other">Other:</label>
                                        <input class="limit-input-w form-control mt-2 d-inline-block"
                                            id="t-subjects-igcse-value-other" name="t-subjects-igcse-value-other"
                                            type="text">
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>



                <h5 class="subject-list-top d-none">
                    <a href="javascript:void(0);">
                        SAT科目列</a>
                </h5>

                <div class="subject-list subject-list-sat">
                    <table>
                        <tbody>
                            <tr>
                                <td colspan="2">


                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Biology E"
                                            id="t-subjects-sat-value-1" name="t-subjects-sat[]">
                                        <label class="form-check-label" for="t-subjects-sat-value-1">
                                            Biology E
                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Biology M"
                                            id="t-subjects-sat-value-2" name="t-subjects-sat[]">
                                        <label class="form-check-label" for="t-subjects-sat-value-2">

                                            Biology M

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Chemistry"
                                            id="t-subjects-sat-value-3" name="t-subjects-sat[]">
                                        <label class="form-check-label" for="t-subjects-sat-value-3">
                                            Chemistry

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Physics"
                                            id="t-subjects-sat-value-4" name="t-subjects-sat[]">
                                        <label class="form-check-label" for="t-subjects-sat-value-4">
                                            Physics

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="U.S. History"
                                            id="t-subjects-sat-value-5" name="t-subjects-sat[]">
                                        <label class="form-check-label" for="t-subjects-sat-value-5">
                                            U.S. History

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="World History"
                                            id="t-subjects-sat-value-6" name="t-subjects-sat[]">
                                        <label class="form-check-label" for="t-subjects-sat-value-6">
                                            World History

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Literature"
                                            id="t-subjects-sat-value-7" name="t-subjects-sat[]">
                                        <label class="form-check-label" for="t-subjects-sat-value-7">
                                            Literature

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Maths Level 1"
                                            id="t-subjects-sat-value-8" name="t-subjects-sat[]">
                                        <label class="form-check-label" for="t-subjects-sat-value-8">
                                            Maths Level 1

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="Maths Level 2"
                                            id="t-subjects-sat-value-9" name="t-subjects-sat[]">
                                        <label class="form-check-label" for="t-subjects-sat-value-9">
                                            Maths Level 2

                                        </label>
                                    </div>
                                    <div class="mt-2 w-100">
                                        <label for="t-subjects-sat-value-flang">Foreign Languages:</label>
                                        <input class="limit-input-w form-control mt-2 d-inline-block"
                                            id="t-subjects-sat-value-flang" type="text">
                                    </div>

                                    <div class="mt-2 w-100">
                                        <label for="t-subjects-sat-value-other">Other:</label>
                                        <input class="limit-input-w form-control mt-2 d-inline-block"
                                            id="t-subjects-sat-value-other" name="t-subjects-sat-value-other"
                                            type="text">
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>



                <h5 class="subject-list-top d-none">
                    <a href="javascript:void(0);">
                        音樂科目列</a>
                </h5>

                <div class="subject-list subject-list-music">
                    <table>
                        <tbody>
                            <tr>
                                <td colspan="2">


                                    <div>
                                        <input class="form-check-input" type="checkbox" value="鋼琴"
                                            id="t-subjects-music-value-1" name="t-subjects-music[]">
                                        <label class="form-check-label" for="t-subjects-music-value-1">
                                            鋼琴

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="小提琴"
                                            id="t-subjects-music-value-2" name="t-subjects-music[]">
                                        <label class="form-check-label" for="t-subjects-music-value-2">
                                            小提琴


                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="中提琴"
                                            id="t-subjects-music-value-3" name="t-subjects-music[]">
                                        <label class="form-check-label" for="t-subjects-music-value-3">
                                            中提琴

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="大提琴"
                                            id="t-subjects-music-value-4" name="t-subjects-music[]">
                                        <label class="form-check-label" for="t-subjects-music-value-4">
                                            大提琴



                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="小號"
                                            id="t-subjects-music-value-5" name="t-subjects-music[]">
                                        <label class="form-check-label" for="t-subjects-music-value-5">
                                            小號


                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="長號"
                                            id="t-subjects-music-value-6" name="t-subjects-music[]">
                                        <label class="form-check-label" for="t-subjects-music-value-6">
                                            長號


                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="法國號"
                                            id="t-subjects-music-value-7" name="t-subjects-music[]">
                                        <label class="form-check-label" for="t-subjects-music-value-7">
                                            法國號


                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="色士風"
                                            id="t-subjects-music-value-8" name="t-subjects-music[]">
                                        <label class="form-check-label" for="t-subjects-music-value-8">
                                            色士風


                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="單簧管"
                                            id="t-subjects-music-value-9" name="t-subjects-music[]">
                                        <label class="form-check-label" for="t-subjects-music-value-9">
                                            單簧管


                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="雙簧管"
                                            id="t-subjects-music-value-10" name="t-subjects-music[]">
                                        <label class="form-check-label" for="t-subjects-music-value-10">
                                            雙簧管


                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="長笛"
                                            id="t-subjects-music-value-11" name="t-subjects-music[]">
                                        <label class="form-check-label" for="t-subjects-music-value-11">
                                            長笛


                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="木笛"
                                            id="t-subjects-music-value-12" name="t-subjects-music[]">
                                        <label class="form-check-label" for="t-subjects-music-value-12">
                                            木笛


                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="口琴"
                                            id="t-subjects-music-value-13" name="t-subjects-music[]">
                                        <label class="form-check-label" for="t-subjects-music-value-13">
                                            口琴

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="牧童笛"
                                            id="t-subjects-music-value-14" name="t-subjects-music[]">
                                        <label class="form-check-label" for="t-subjects-music-value-14">
                                            牧童笛



                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="結他"
                                            id="t-subjects-music-value-15" name="t-subjects-music[]">
                                        <label class="form-check-label" for="t-subjects-music-value-15">
                                            結他

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="低音結他"
                                            id="t-subjects-music-value-16" name="t-subjects-music[]">
                                        <label class="form-check-label" for="t-subjects-music-value-16">
                                            低音結他


                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="聲樂"
                                            id="t-subjects-music-value-17" name="t-subjects-music[]">
                                        <label class="form-check-label" for="t-subjects-music-value-17">
                                            聲樂


                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="樂理"
                                            id="t-subjects-music-value-18" name="t-subjects-music[]">
                                        <label class="form-check-label" for="t-subjects-music-value-18">
                                            樂理


                                        </label>
                                    </div>


                                    <div class="mt-2 w-100">
                                        <label for="t-subjects-music-value-other">其他：</label>
                                        <input class="limit-input-w form-control mt-2 d-inline-block"
                                            id="t-subjects-music-value-other" name="t-subjects-music-value-other"
                                            type="text">
                                    </div>






                                </td>
                            </tr>

                        </tbody>
                    </table>

                </div> -->

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


                                    <h5 class="mt-4">可供補習方式 *</h5>

                                    <div>
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