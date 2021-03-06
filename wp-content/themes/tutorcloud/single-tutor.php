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

$is_admin = current_user_can('manage_options');  // all user they have mange option will get 

if (!$is_admin) {
    wp_redirect(get_site_url());
        exit;
}


// if(!is_admin()){
// wp_redirect(get_site_url());
//     exit;
// }

?>

<style type="text/css">
#primary {
    display: none;
}
</style>
<div class="lightbox">

    <div class="lightbox-bg-btn ">

    </div>

    <div class="lightbox-content filter-content">

        <form action="<?php echo get_site_url(0);?>/apply-case" method="post" id="filter-form">
            <div class="step-content d-block">
                <a href="javascript:void(0);" class="close-btn">

                    <img src="<?php echo get_template_directory_uri();?>/assets/images/close-btn.png" alt="">
                </a>

                <input type="hidden" name="filter-form" value="1">
                <table>
                    <tr>
                        <td>
                            <label for=""> 性別*</label>
                        </td>
                        <td>
                            <label><input type="radio" name="filter-gender" value=""
                                    <?php echo !$_POST['filter-form']|| !$_POST['filter-gender']  ? 'checked':''; ?>>顯示全部</label>
                            <label><input type="radio" name="gender" value="男"
                                    <?php echo $_POST['filter-form']&&$_POST['filter-gender'] =='男' ? 'checked':''; ?>>男</label>
                            <label><input type="radio" name="gender" value="女"
                                    <?php echo $_POST['filter-form']&&$_POST['filter-gender'] =='女' ? 'checked':''; ?>>女</label>
                        </td>
                    </tr>

                    <tr>
                        <td> <label for="tutor-level">教育程度 *
                            </label></td>
                        <td>
                            <div class="filter-tutor-level-group">
                                <div>
                                    <input class="form-check-input" type="checkbox" id="all-tutor-level"
                                        name="all-tutor-level" value="1"
                                        <?php echo $_POST['all-tutor-level'] ? 'checked':'';?>>
                                    <label class="form-check-label" for="all-tutor-level">
                                        所有程度
                                    </label>
                                </div>
                                <?php 
                                $tutor_level_arr=array("大學生","學士畢業","碩士生","碩士畢業","博士生","博士畢業");
                                for($i=0;$i<count($tutor_level_arr);$i++)
                                {
                                    ?>
                                <div>
                                    <input class="form-check-input" type="checkbox"
                                        value="<?php echo $tutor_level_arr[$i];?>"
                                        id="tutor-level-value-<?php echo $i;?>" name="tutor-level[]"
                                        <?php echo $_POST['filter-form']&&in_array($tutor_level_arr[$i], $_POST['tutor-level']) ? 'checked':''; ?>>
                                    <label class="form-check-label" for="tutor-level-value-<?php echo $i;?>">
                                        <?php echo $tutor_level_arr[$i];?>
                                    </label>
                                </div>

                                <?php
                                }
                                ?>
                                <!-- <div>
                                    <input class="form-check-input" type="checkbox" value="大學生" id="tutor-level-value-1"
                                        name="tutor-level[]"
                                        <?php echo $_POST['filter-form']&&in_array("大學生", $_POST['tutor-level']) ? 'checked':''; ?>>
                                    <label class="form-check-label" for="tutor-level-value-1">
                                        大學生
                                    </label>
                                </div>
                                <div>
                                    <input class="form-check-input" type="checkbox" value="學士畢業"
                                        id="tutor-level-value-2" name="tutor-level[]"
                                        <?php echo $_POST['filter-form']&&in_array("學士畢業", $_POST['tutor-level']) ? 'checked':''; ?>>
                                    <label class="form-check-label" for="tutor-level-value-2">
                                        學士畢業
                                    </label>
                                </div>
                                <div>
                                    <input class="form-check-input" type="checkbox" value="碩士生" id="tutor-level-value-3"
                                        name="tutor-level[]"
                                        <?php echo $_POST['filter-form']&&in_array("碩士生", $_POST['tutor-level']) ? 'checked':''; ?>>
                                    <label class="form-check-label" for="tutor-level-value-3">
                                        碩士生
                                    </label>
                                </div>
                                <div>
                                    <input class="form-check-input" type="checkbox" value="碩士畢業"
                                        id="tutor-level-value-4" name="tutor-level[]"
                                        <?php echo $_POST['filter-form']&&in_array("碩士畢業", $_POST['tutor-level']) ? 'checked':''; ?>>
                                    <label class="form-check-label" for="tutor-level-value-4">
                                        碩士畢業
                                    </label>
                                </div>
                                <div>
                                    <input class="form-check-input" type="checkbox" value="博士生" id="tutor-level-value-5"
                                        name="tutor-level[]"
                                        <?php echo $_POST['filter-form']&&in_array("博士生", $_POST['tutor-level']) ? 'checked':''; ?>>
                                    <label class="form-check-label" for="tutor-level-value-5">
                                        博士生
                                    </label>
                                </div>
                                <div>
                                    <input class="form-check-input" type="checkbox" value="博士畢業"
                                        id="tutor-level-value-6" name="tutor-level[]"
                                        <?php echo $_POST['filter-form']&&in_array("博士畢業", $_POST['tutor-level']) ? 'checked':''; ?>>
                                    <label class="form-check-label" for="tutor-level-value-6">
                                        博士畢業
                                    </label>
                                </div> -->
                            </div>

                        </td>
                    </tr>


                    <tr>
                        <td> <label for="tutor-level">就讀大學
                            </label></td>
                        <td>
                            <div class="university-group">
                                <div>
                                    <input class="form-check-input" type="checkbox" value="1" id="all-university"
                                        name="all-university" <?php echo $_POST['all-university'] ? 'checked':'';?>>
                                    <label class="form-check-label" for="all-university">
                                        全部大學
                                    </label>
                                </div>
                                <?php
                                $university_arr=array("香港大學","香港中文大學","香港科技大學","香港城市大學","香港城市大學","香港浸會大學","香港都會大學","香港恒生大學","嶺南大學");

                                for($i=0;$i<count($university_arr);$i++)
                                {
                                    ?>
                                <div>
                                    <input class="form-check-input" type="checkbox"
                                        value="<?php echo $university_arr[$i];?>" id="university-value-<?php echo $i;?>"
                                        name="university[]"
                                        <?php echo $_POST['filter-form']&&in_array($university_arr[$i], $_POST['university']) ? 'checked':''; ?>>
                                    <label class="form-check-label" for="university-value-<?php echo $i;?>">
                                        <?php echo $university_arr[$i];?>
                                    </label>
                                </div>
                                <?php
                                }
?>






                            </div>


                        </td>
                    </tr>
                    <tr>
                        <td><label for="tutor-level">可教授地區
                            </label></td>
                        <td>
                            <div>
                                <!-- <div class="mb-3"><label for=""> 地區 *</label>
                                </div> -->
                                <div>
                                    <input class="form-check-input" type="checkbox" id="all-place-1" name="all-place-1"
                                        value="1" <?php echo $_POST['all-place-1'] ? 'checked':'';?>>
                                    <label class="form-check-label" for="all-place-1">
                                        所有地區
                                    </label>
                                </div>
                                <div class="mt-3">
                                    <input class="form-check-input hk-place" type="checkbox" id="hk-place-1"
                                        name="hk-place-1" value="1" <?php echo $_POST['hk-place-1'] ? 'checked':'';?>>
                                    <label class="form-check-label" for="hk-place-1">
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
                                        <input class="form-check-input" type="checkbox"
                                            value="<?php echo $hk_place_arr[$i];?>"
                                            id="hk-class-area-value-<?php echo $i;?>" name="class-area[]"
                                            <?php echo $_POST['filter-form']&&in_array($hk_place_arr[$i], $_POST['class-area']) ? 'checked':''; ?>>
                                        <label class="form-check-label" for="hk-class-area-value-<?php echo $i;?>">
                                            <?php echo $hk_place_arr[$i];?>
                                        </label>
                                    </div>
                                    <?php
                                }
                                ?>


                                </div>


                                <div class="mt-3">

                                    <input class="form-check-input kl-place" type="checkbox" id="kl-place-1"
                                        name="kl-place-1" value="1" <?php echo $_POST['kl-place-1'] ? 'checked':'';?>>
                                    <label class="form-check-label" for="kl-place-1">
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
                                        <input class="form-check-input" type="checkbox"
                                            value="<?php echo $kl_place_arr[$i];?>"
                                            id="kl-class-area-value-<?php echo $i;?>" name="class-area[]"
                                            <?php echo $_POST['filter-form']&&in_array($kl_place_arr[$i], $_POST['class-area']) ? 'checked':''; ?>>
                                        <label class="form-check-label" for="kl-class-area-value-<?php echo $i;?>">
                                            <?php echo $kl_place_arr[$i];?>
                                        </label>
                                    </div>
                                    <?php
                                }
                                ?>



                                </div>




                                <div class="mt-3">
                                    <input class="form-check-input nt-place" type="checkbox" id="nt-place-1"
                                        name="nt-place-1" value="1" <?php echo $_POST['nt-place-1'] ? 'checked':'';?>>
                                    <label class="form-check-label" for="nt-place-1">
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
                                        <input class="form-check-input" type="checkbox"
                                            value="<?php echo $nt_place_arr[$i];?>"
                                            id="nt-class-area-value-<?php echo $i;?>" name="class-area[]"
                                            <?php echo $_POST['filter-form']&&in_array($nt_place_arr[$i], $_POST['class-area']) ? 'checked':''; ?>>
                                        <label class="form-check-label" for="nt-class-area-value-<?php echo $i;?>">
                                            <?php echo $nt_place_arr[$i];?>
                                        </label>
                                    </div>
                                    <?php
                                }
                                ?>




                                </div>














                            </div>
                        </td>
                    </tr>
                </table>

                <div class="text-center">
                    <a href="javascript:void(0);" class="submit-btn filter-case mb-0 mt-2">查看結果</a>
                </div>

                <!-- </form> -->
            </div>


        </form>

    </div>

    <div class="lightbox-content lightbox-msg">
        <a href="javascript:void(0);" class="close-btn">

            <img src="<?php echo get_template_directory_uri();?>/assets/images/close-btn.png" alt="">
        </a>
        <span class="lightbox-msg-txt  d-block p-3"></span>

    </div>

    <div class="lightbox-content tutor-intro">

        <a href="javascript:void(0);" class="close-btn">

            <img src="<?php echo get_template_directory_uri();?>/assets/images/close-btn.png" alt="">
        </a>
        <div class="lightbox-content-inner">
            <div class=" deep-green " id="lbc-self-intro">
                <!-- 香港中文大學及聖公會曾肇添中學畢業。全職補習。5年以上數學補習經驗。公開試HKDSE化學科奪得5**最高成績，提供超過20年公開試題目特訓，公開試HKDSE數學科5*級成績，小一至中六數學科及化學科成績保證。 -->

            </div>

            <div class="row gx-0">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <table class="detail-content-table">

                        <tr>
                            <td>導師編號 </td>
                            <td><span id="lbc-tutor-id"></span>
                                <!-- 加入導師名單 -->
                            </td>
                        </tr>
                        <tr>
                            <td>性别</td>
                            <td id="lbc-gender"></td>
                        </tr>
                        <tr>
                            <td>出生年份</td>
                            <td id="lbc-born-year"></td>
                        </tr>
                        <tr>
                            <td>居住地區</td>
                            <td id="lbc-living-area"></td>
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
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">

                    <table class="detail-content-table">

                        <tr>
                            <td>公開試 </td>
                            <td id="lbc-past-exam"></td>
                        </tr>
                        <tr>
                            <td>可教授科目</td>
                            <td id="lbc-teach-subjects">
                                <!-- 數學 化學 經濟 -->

                            </td>
                        </tr>
                        <tr>
                            <td>成績</td>
                            <td id="lbc-result">
                                <!-- 數學（5*） 化學（5**） 經濟（5） -->
                            </td>
                        </tr>
                        <tr>
                            <td>可教授年級</td>
                            <td id="lbc-teach-level">
                                <!-- 小學 初中 高中 -->

                            </td>
                        </tr>
                        <tr>
                            <td>課堂語言</td>
                            <td id="lbc-lesson-lang"></td>
                        </tr>
                        <tr>
                            <td>可接受最低時薪</td>
                            <td>$<span id="lbc-lowest-salary"></span></td>
                        </tr>
                    </table>





                </div>

                <div class="mt-4 deep-green">可補習地區：</div>

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
                    <span class="place-span">柴灣</span>
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

            <!-- <div class="text-center">

                <a class="add-btn-a" href="javascript:void(0);" data-tutor-id="">

                    <img src="https://hktutorcloud.com/wp-content/themes/tutorcloud/assets/images/add-btn.png"
                        alt="">
                    <div class="mt-1">加入導師名單</div>

                </a>
            </div> -->
        </div>
    </div>

</div>

<div class="container mt-5">

    <div class="text-center">
        <h2>導師資料<?php echo get_field('tutor_id');?> Preview
            <div class="bar"></div>
        </h2>
    </div>


    <div class="text-center mt-3">
        <a href="<?php echo get_site_url();?>/wp-admin/post.php?post=<?php echo get_the_ID();?>&action=edit"
            class="filter-btn">修改</a>
    </div>


    <table class="w-50 mx-auto mt-5 preview-table">
        <tr>
            <td class="fw-bold">Email:</td>
            <td> <a href="mailto:<?php echo get_field('email');?>"><?php echo get_field('email');?></a>
            </td>
        </tr>
        <tr>
            <td class="fw-bold">Chinese Name:</td>
            <td><?php echo get_field('chi_name');?></td>
        </tr>
        <tr>
            <td class="fw-bold">English Name:</td>
            <td><?php echo get_field('eng_name');?></td>
        </tr>
        <tr>
            <td class="fw-bold">Nick Name:</td>
            <td><?php echo get_field('nick_name');?></td>
        </tr>
        <tr>
            <td class="fw-bold">Whatsapp</td>
            <td><a href="https://wa.me/852<?php echo get_field('whatsapp_tel');?>"
                    target="_blank"><?php echo get_field('whatsapp_tel');?></a></td>

        </tr>
        <tr>
            <td class="fw-bold">Enable</td>
            <td><?php echo get_field('enable');?></td>
        </tr>
    </table>
    <div class="row mt-5 gx-5">
        <?php
      
        ?>

        <div class="apply-data-col col-lg-12 col-md-12 col-sm-12 col-12 ">
            <form action="" method="post" id="apply-case-form">

                <ul class="tutor-list-ul">



                    <?php
                    
        $meta_query_arr = array(
            'relation' => 'AND');

            // echo 99;
            if($_POST && $_POST['filter-form'])
            {
                if($_POST['filter-gender'])
                {
                    array_push($meta_query_arr,array('key' => 'gender','value' =>$_POST['filter-gender'] ,'compare' => 'LIKE'));
                }
                if($_POST['tutor-level'])
                {
                    array_push($meta_query_arr,array('key'=>'tutor_level','value'=>$_POST['tutor-level'],'compare' => 'IN'));
                }
                if($_POST['university'])
                {
                    // print_r($_POST['university']);
                    array_push($meta_query_arr,array('key'=>'bac_degree','value'=>$_POST['university'],'compare' => 'IN'));
                }

                
            }
        //  array_push($meta_query_arr,array('key' => 'gender','value' => '男','compare' => 'LIKE'));

        //  array('key'=>'tutor_level','value'=>array('碩士生','大學生'),'compare' => 'IN');

            // array(
            //     'key' => 'gender',
            //     'value' => '男',
            //     'compare' => 'LIKE'
            // ),
            // array(
            //     'key'     => 'tutor_level',
            //     'value'   =>  array('碩士生','大學生'),
            //     'compare' => 'IN',
            // )
            
// echo get_the_ID();
//   $args = array(  
//     'post_type' => 'tutor',
//     // 'post_status' => 'publish',
//     'p'=>get_the_ID() 
// );

// $loop = new WP_Query( $args ); 
    
// while ( $loop->have_posts() ) { 
    // $loop->the_post(); 
    // echo 1;
    // implode(', ', $Array)
    // echo 333;

    
    ?>
                    <li class="tutor-content-li" data-class-area="<?php echo implode(',', get_field('class_area'));?>"
                        data-lowest-salary="<?php echo get_field('lowest_salary');?>"
                        data-bac-degree="<?php echo get_field('bac_degree');?>"
                        data-s-school="<?php echo get_field('s_school');?>"
                        data-gender="<?php echo get_field('gender');  ?>"
                        data-tutor-id="<?php echo get_field('tutor_id');?>"
                        data-self-intro="<?php echo get_field('self_intro');?>"
                        data-born-year="<?php echo get_field('born_year');?>"
                        data-living-area="<?php echo get_field('living_area');?>"
                        data-past-exam="<?php  echo implode(',', get_field('past_exam'));?>"
                        data-lesson-lang="<?php  echo implode(' ', get_field('lesson_lang'));?>" data-teach-subjects="<?php

                        if (in_array("全科", get_field('t_subjects_pri'))) {
                            $t_subjects_pri_arr=array('小學全科');
                        }
                        else
                        {
                            $t_subjects_pri_arr=get_field('t_subjects_pri');
                        }

                        if (in_array("全科", get_field('t_subjects_f13'))) {
                            $t_subjects_f13_arr=array('初中全科');
                        }
                        else
                        {
                            $t_subjects_f13_arr=get_field('t_subjects_f13');
                        }


                        $subjects_list_arr = array_unique(array_merge(get_field('t_subjects_kin'), $t_subjects_pri_arr, $t_subjects_f13_arr,get_field('t_subjects_f46') ));
                        
                        $subjects_list = implode (" ", $subjects_list_arr);
                        
                        echo $subjects_list;
                        
                        ?>" data-teach-level="<?php 
                       
                       $teach_level_str='';
                       if(count(get_field('t_subjects_kin'))>0 || get_field('t_subjects_kin_value_other'))
                       {
                           $teach_level_str.='幼稚園 ';
                       }
                       if(count(get_field('t_subjects_pri'))>0 || get_field('t_subjects_pri_value_other'))
                        {
                            $teach_level_str.='小學 ';
                        }
                        if(count(get_field('t_subjects_f13'))>0 || get_field('t_subjects_f13_value_other'))
                         {
                             $teach_level_str.='初中 ';
                         }

                         if(count(get_field('t_subjects_f46'))>0 || get_field('t_subjects_f46_value_other'))
                         {
                             $teach_level_str.='高中 ';
                         }

                         echo $teach_level_str;

                        
                        ?>" data-result="<?php  
                        
                        $str='';
                        for($i=1;$i<=22;$i++)
                        {
                            if(get_field('dse_sub_'.$i))
                            {
                                // echo 1;
                                // print_r(acf_get_field('dse_sub_'.$i));
                                // 數學（5*） 化學（5**） 經濟（5） 
                                // print_r(get_field_object('dse_sub_'.$i,get_the_ID()));
                                $label = acf_get_field('dse_sub_'.$i)['label'];
                                // get_field_object('dse_sub_'.$i)['label'];
                                $str.=$label.'('.get_field('dse_sub_'.$i).')'.' ';
                            }
                        }

                        for($i=1;$i<=10;$i++)
                        {
                            if(get_field('other_subject_'.$i))
                            {
                                $str.=get_field('other_subject_'.$i).'('.get_field('other_subject_'.$i.'_grade').')'.' ';

                            }
                        }

                        
                        echo $str;
                        // echo implode(' ', get_field('lesson_lang'));
                        ?>">
                        <div class="row gx-0 align-items-top data-row-div">
                            <div class='col-lg-2 col-md-2 col-sm-2 col-5 data-column'>
                                <?php echo get_field('tutor_id');?>
                                <br><?php echo get_field('gender');?> <img
                                    src="<?php echo get_template_directory_uri();?>/assets/images/<?php echo get_field('gender') == '男' ? 'm':'f';?>-icon.png"
                                    alt="">
                            </div>
                            <div class='col-lg-2 col-md-2 col-sm-2 col-4 data-column'>
                                <?php echo get_field('bac_degree');?> <br>
                                主修：<?php echo get_field('u_major');?>
                                <!--護理系-->
                            </div>
                            <div class='col-lg-2 col-md-2 col-sm-6 col-3 data-column'>

                                <?php echo get_field('tutor_level');?>
                                <!--大學生--> <br>
                            </div>
                            <div class='col-lg-2 col-md-2 col-sm-6 col-5 data-column'>
                                可接受最低時薪： <br>$<?php echo get_field('lowest_salary');?></div>
                            <div class='col-lg-2 col-md-2 col-sm-4 col-7 data-column'>
                                可教授科目： <br>
                                <?php echo $subjects_list;?>
                                <!-- XX XX XX -->
                                <!-- 數學 化學 經濟 -->
                            </div>
                            <!-- <div class='col-lg-2 col-md-2 col-sm-12 col-12  add-btn-column text-center'>


                                <table class="w-100 h-100">

                                    <tr>
                                        <td> <a class="add-btn-a" href="javascript:void(0);">

                                                <img src="<?php echo get_template_directory_uri();?>/assets/images/add-btn.png"
                                                    alt="">
                                                <div>加入導師名單</div>

                                            </a></td>
                                    </tr>
                                </table>

                            </div> -->

                        </div>
                    </li>
                    <?php
    // echo 1;
    // print the_title(); 
    // the_excerpt(); 
// }
                
                
                ?>
                    <?php 
            //     for($i=0;$i<10;$i++)
            // {
                ?>
                    <!-- <li class="">
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
                    </li> -->
                    <?php
            // }
                ?>
                </ul>

                <div class="pagination mt-5">

                    <?php 
               
        echo paginate_links( array(
            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
            'total'        => $loop->max_num_pages,
            'current'      => max( 1, get_query_var( 'paged' ) ),
            'format'       => '?paged=%#%',
            'show_all'     => false,
            'type'         => 'plain',
            'end_size'     => 2,
            'mid_size'     => 1,
            'prev_next'    => true,
            'prev_text'    => sprintf( '<i></i> %1$s', __( '&lt;', 'text-domain' ) ),
            'next_text'    => sprintf( '%1$s <i></i>', __( '&gt;', 'text-domain' ) ),
            'add_args'     => false,
            'add_fragment' => '',
        ) );
    ?>
                </div>



                <div class="student-form-div">
                    <h3 class="mt-1 mb-3 p-0">登記學生資料</h2>
                        <input type="hidden" id="tutor-list" value="" name="tutor-list">

                        <div class="student-apply-case-content">
                            <input name="apply-case-form" type="hidden" value="1">
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
                                    <td><label for="confirm-whatsapp-tel">確認 WhatsApp 電話號碼 *</label></td>
                                    <td><input id="confirm-whatsapp-tel" name="confirm-whatsapp-tel" type="text"
                                            class="form-control">
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
                                        <select id="tutorial-course" name="tutorial-course" class="form-select"
                                            aria-label="">


                                            <option value="" selected="">選擇</option>

                                            <optgroup label="高中">
                                                <option value="HKDSE">HKDSE</option>
                                                <option value="IB">IB</option>
                                                <option value="GCE AL">GCE AL</option>
                                                <option value="IGCSE">IGCSE </option>
                                                <option value="SAT">SAT </option>
                                            </optgroup>

                                            <optgroup label="幼稚園至初中">
                                                <option value="校內考試">校內考試</option>
                                            </optgroup>


                                            <optgroup label="其他">

                                                <option value="音樂">音樂</option>
                                            </optgroup>

                                        </select>

                                    </td>
                                </tr>


                                <tr>
                                    <td> <label for="other-tutorial-course"> 其他補習課程</label></td>
                                    <td>

                                        <input id="other-tutorial-course" name="other-tutorial-course" type="text"
                                            class="form-control">
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
                                            <option value="中學">中學</option>
                                            <option value="國際學校">國際學校</option>
                                            <option value="自修生">自修生</option>
                                            <option value="大專">大專</option>
                                            <option value="其他">其他</option>
                                        </select>

                                    </td>
                                </tr>

                                <tr>
                                    <td><label for="university"> 就讀學校 <br> <span class="small"> (例如：HKU Space / <br>
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
                                        <?php
                                $subject_arr=array("全科","功課輔導","中文","英文","數學","數學 (M1)","數學 (M2)","通識","物理","化學","生物","綜合科學","資訊及通訊科技","地理","中史","西史","中國文學","英國文學","倫理與宗教","經濟","企業、會計與財務概論","旅遊與款待","普通話","常識");
                                for($i=0;$i<count($subject_arr);$i++)
                                {
                                    ?>

                                        <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                                id="subject_value_<?php echo $i;?>" name="subjects[]"
                                                value="<?php echo $subject_arr[$i];?>" /><label
                                                for="subject_value_<?php echo $i;?>"><?php echo $subject_arr[$i];?></label>
                                        </div>
                                        <?php
                                }
                                ?>


                                        <!-- <div class="checkbox-div"><input type="checkbox" class="form-check-input"
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
                                        <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                                id="subject_value_25" name="subjects[]" value="普通話" /><label
                                                for="subject_value_25">普通話</label>
                                        </div>
                                        <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                                id="subject_value_26" name="subjects[]" value="常識" /><label
                                                for="subject_value_26">常識</label>
                                        </div> -->

                                    </td>
                                </tr>
                                <tr>
                                    <td class="">
                                        <label for="instrument">樂器</label>
                                    </td>
                                    <td><input type="text" class="form-control" id="instrument" name="instrument"></td>
                                </tr>
                                <tr>
                                    <td class="">

                                        <label for="other-subject">其他科目</label>


                                    </td>
                                    <td><input type="text" class="form-control" id="other-subject" name="other-subject">
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
                                            <!-- <div>
                                                <input class="form-check-input" type="checkbox" id="all-place-2"
                                                    name="">
                                                <label class="form-check-label" for="all-place-2">
                                                    所有地區
                                                </label>
                                            </div> -->
                                            <div class="mt-3">
                                                <input class="form-check-input hk-place" type="checkbox" id="hk-place-2"
                                                    name="">
                                                <label class="form-check-label" for="hk-place-2">
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
                                                    <input class="form-check-input" type="checkbox"
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

                                                <!-- <div>
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
                                                </div> -->
                                            </div>


                                            <div class="mt-3">

                                                <input class="form-check-input kl-place" id="kl-place-2" type="checkbox"
                                                    name="">
                                                <label class="form-check-label" for="kl-place-2">
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
                                                    <input class="form-check-input" type="checkbox"
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


                                                <!-- <div>
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
                                                </div> -->


                                            </div>




                                            <div class="mt-3">
                                                <input class="form-check-input nt-place" type="checkbox" id="nt-place-2"
                                                    name="">
                                                <label class="form-check-label" for="nt-place-2">
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
                                                    <input class="form-check-input" type="checkbox"
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




                                                <!-- <div>
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
                                                </div> -->
                                            </div>














                                        </div>

                                    </td>
                                </tr>

                            </table>
                            <table>
                                <tr>
                                    <td><label for="short-address"> 詳細地址 *
                                            <br> <span class="small">(不需要完整地址)<br />E.g:美孚新邨</span></label></td>
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
                                        <?php
                                        
                                        $day_arr=array("星期一","星期二","星期三","星期四","星期五","星期六","星期日");

                                        for($i=0;$i<count($day_arr);$i++)
                                        {
                                            ?>
                                        <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                                id="day_value_<?php echo $i;?>" name="days[]"
                                                value="<?php echo $day_arr[$i];?>" /><label
                                                for="day_value_<?php echo $i;?>"><?php echo $day_arr[$i];?></label>
                                        </div>
                                        <?php
                                        }
                                        ?>

                                        <!-- <div class="checkbox-div"><input type="checkbox" class="form-check-input"
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
                                        </div> -->





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

                                        <?php
                                    
                                    $objective_arr=array("拔尖","補底","清concept","教授答題技巧","應付校內考試","應付公開試");

                                    for($i=0;$i<count($objective_arr);$i++)
                                    {
                                        ?>
                                        <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                                id="objective_value_<?php echo $i;?>" name="objective[]"
                                                value="<?php echo $objective_arr[$i];?>" /><label
                                                for="objective_value_<?php echo $i;?>"><?php echo $objective_arr[$i];?></label>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                        <!-- <div class="checkbox-div"><input type="checkbox" class="form-check-input"
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
                                        </div> -->

                                        <div class="mt-2 w-100 float-start">
                                            <label for="objective-value-other" class="d-inline-block">其他：</label>
                                            <input class=" limit-input-w form-control mt-2 d-inline-block"
                                                id="objective-value-other" name="objective-value-other" type="text">
                                        </div>
                                    </td>
                                </tr>



                                <tr>
                                    <td class="align-top">
                                        <label for="tutorial-time-slot"> 對導師要求：
                                        </label>

                                    </td>
                                    <td>


                                        <?php
                                    
                                    $tutor_requirement_arr=array("提供筆記","提供練習","可以長補");

                                    for($i=0;$i<count($tutor_requirement_arr);$i++)
                                    {
                                        ?>
                                        <div class="checkbox-div"><input type="checkbox" class="form-check-input"
                                                id="tutor-requirement_value_<?php echo $i;?>" name="tutor-requirement[]"
                                                value="<?php echo $tutor_requirement_arr[$i];?>" /><label
                                                for="tutor-requirement_value_<?php echo $i;?>"><?php echo $tutor_requirement_arr[$i];?></label>
                                        </div>
                                        <?php
                                    }
                                    ?>

                                        <!-- <div class="checkbox-div"><input type="checkbox" class="form-check-input"
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
                                        </div> -->



                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="can-sep-tutor"> 可否分開導師？
                                        </label>
                                    </td>
                                    <td>
                                        <select id="can-sep-tutor" name="can-sep-tutor" class="form-select"
                                            aria-label="">
                                            <option value="" selected="">選擇</option>
                                            <option value="同一導師">同一導師</option>
                                            <option value="不同導師">不同導師</option>
                                        </select>
                                    </td>

                                </tr>

                                <tr>
                                    <td><label for="other-remark"> 其他要求/備註：</label></td>
                                    <td><input id="other-remark" name="other-remark" type="text" class="form-control">
                                    </td>
                                </tr>


                            </table>
                            <a href="javascript:void(0);" class="submit-btn apply-case">遞交表格</a>


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


    $(document).on('keydown', function(e) {
        if (e.keyCode === 27) { // ESC
            $('.lightbox').fadeOut(0);


        }
    });



    $('.prev-step-btn').fadeOut(0);


    function add_to_cart(select_tutor_id) {
        if (!tutor_list_arr.includes(select_tutor_id)) {
            tutor_list_arr.push(select_tutor_id);

            $('#tutor-list').val(tutor_list_arr.join());
            // var tutor_list = tutor_list_arr.join();


            console.log(tutor_list_arr);

            var added_to_cart_html =
                '<li><span>' + select_tutor_id +
                '</span><a href="javascript:void(0);" class="list-close-btn"></a></li>';

            $('.added-list ul').append(added_to_cart_html);

            $('.list-close-btn').click(function() {
                var select_tutor_id = $(this).prev('span').html();
                tutor_list_arr = tutor_list_arr.filter(tutor_id => tutor_id !=
                    select_tutor_id);


                $('#tutor-list').val(tutor_list_arr.join());


                $(this).closest('li').remove();
                console.log(tutor_list_arr);
            });



            // $('.lightbox').fadeIn(0);
            // $('.lightbox .lightbox-content').fadeOut(0);
            // $('.lightbox-msg-txt').html('成功加入導師' + select_tutor_id + '往心儀名單。');
            // $('.lightbox .lightbox-content.lightbox-msg').fadeIn(0);

            show_lightbox_msg('成功加入導師' + select_tutor_id + '往心儀名單。')

        } else {
            // alert('這導師已加入心儀導師名單');


            // $('.lightbox').fadeIn(0);
            // $('.lightbox .lightbox-content').fadeOut(0);
            // $('.lightbox-msg-txt').html('這導師已加入心儀導師名單');
            // $('.lightbox .lightbox-content.lightbox-msg').fadeIn(0);
            show_lightbox_msg('這導師已加入心儀導師名單')

        }
    }
    $('.lightbox .add-btn-a').click(function() {

        var select_tutor_id = $(this).attr('data-tutor-id');
        add_to_cart(select_tutor_id);



    })
    $('.tutor-content-li .add-btn-a').click(function() {

        var select_tutor_id = $(this).closest('li').attr('data-tutor-id');
        add_to_cart(select_tutor_id)



    });

    $('.data-column').click(function() {

        $('.lightbox').fadeIn(200);
        $('.lightbox .lightbox-content').fadeOut(0);
        $('.lightbox .lightbox-content.tutor-intro').fadeIn(0);



        $('#lbc-self-intro').html($(this).closest('.tutor-content-li').attr('data-self-intro'));
        $('#lbc-lesson-lang').html($(this).closest('.tutor-content-li').attr('data-lesson-lang'));

        $('#lbc-result').html($(this).closest('.tutor-content-li').attr('data-result'));


        $('#lbc-living-area').html($(this).closest('.tutor-content-li').attr('data-living-area'));

        $('#lbc-tutor-id').html($(this).closest('.tutor-content-li').attr(
            'data-tutor-id'));

        $('.lightbox .add-btn-a').attr('data-tutor-id', $(this).closest('.tutor-content-li').attr(
            'data-tutor-id'));
        $('#lbc-gender').html($(this).closest('.tutor-content-li').attr('data-gender'));
        $('#lbc-born-year').html($(this).closest('.tutor-content-li').attr('data-born-year'));

        $('#lbc-s-school').html($(this).closest('.tutor-content-li').attr('data-s-school'));
        $('#lbc-bac-degree').html($(this).closest('.tutor-content-li').attr('data-bac-degree'));
        $('#lbc-lowest-salary').html($(this).closest('.tutor-content-li').attr(
            'data-lowest-salary'));
        $('#lbc-past-exam').html($(this).closest('.tutor-content-li').attr('data-past-exam'));

        $('#lbc-teach-level').html($(this).closest('.tutor-content-li').attr('data-teach-level'));
        $('#lbc-teach-subjects').html($(this).closest('.tutor-content-li').attr(
            'data-teach-subjects'));





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



    $('#all-tutor-level').change(function() {
        if ($(this).is(':checked')) {
            for (i = 0; i <= <?php echo count($tutor_level_arr);?>; i++) {
                $('#tutor-level-value-' + i).prop('checked', true);
            }

        } else {
            for (i = 0; i <= <?php echo count($tutor_level_arr);?>; i++) {
                $('#tutor-level-value-' + i).prop('checked', false);
            }
        }
    })



    $('#all-place-1, #all-place-2 ').change(function() {
        if ($(this).is(':checked')) {

            $('#hk-place-1').prop('checked', true);
            $('#kl-place-1').prop('checked', true);
            $('#nt-place-1').prop('checked', true);
            $('input[name="class-area[]"]').prop('checked', true);



        } else {

            $('#hk-place-1').prop('checked', false);
            $('#kl-place-1').prop('checked', false);
            $('#nt-place-1').prop('checked', false);
            $('input[name="class-area[]"]').prop('checked', false);



        }
    })


    $('.hk-place').change(function() {
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



    $('#all-university').change(function() {
        if ($(this).is(':checked')) {

            for (i = 0; i <= <?php echo count($university_arr);?>; i++) {
                $('#university-value-' + i).prop('checked', true);
            }

        } else {
            for (i = 0; i <= <?php echo count($university_arr);?>; i++) {
                $('#university-value-' + i).prop('checked', false);
            }
        }
    })


    $('.kl-place').change(function() {
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


    $('.nt-place').change(function() {
        if ($(this).is(':checked')) {

            for (i = 0; i < <?php echo count($nt_place_arr);?>; i++) {
                $(this).parent('div').next('.place-group').find('#nt-class-area-value-' + i).prop(
                    'checked', true);
                $(this).parent('div').find('.place-group').find('#nt-class-area-value-' + i).prop(
                    'checked', true);
            }

        } else {
            for (i = 0; i < <?php echo count($nt_place_arr);?>; i++) {
                $(this).parent('div').next('.place-group').find('#nt-class-area-value-' + i).prop(
                    'checked', false);
                $(this).parent('div').find('.place-group').find('#nt-class-area-value-' + i).prop(
                    'checked', false);
            }
        }
    })



    $('.filter-case.submit-btn').click(function() {

        $('form#filter-form').submit();

    })

    $('.apply-case.submit-btn').click(function() {
        var chi_name = $('#chi-name').val();
        var eng_name = $('#eng-name').val();
        var whatsapp_tel = $('#whatsapp-tel').val();
        var confirm_whatsapp_tel = $('#confirm-whatsapp-tel').val();

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
                '請輸入中文全名</br>';
        }

        if (!eng_name) {
            error_txt +=
                '請輸入英文全名</br>';
        }

        if (!whatsapp_tel) {
            error_txt +=
                'WhatsApp 電話號碼</br>';
        }


        if (confirm_whatsapp_tel != whatsapp_tel) {
            error_txt +=
                '確認 WhatsApp 電話號碼輸入不相同</br>';
        }


        if (!(/^[0-9]{8}$/.test(whatsapp_tel))) {
            error_txt += 'WhatsApp 電話格式不正確</br>';
        }
        if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))) {
            error_txt +=
                '電郵格式不正確</br>';
        }



        if (!gender) {
            error_txt +=
                '請輸入性別</br>';
        }

        if (!tutorial_course) {
            error_txt +=
                '請輸入補習課程</br>';
        }
        if (!student_level) {
            error_txt +=
                '請輸入就讀年級</br>';
        }
        if (!student_level_2) {
            error_txt +=
                '請輸入所屬年級</br>';
        }

        if (!paper_lang) {
            error_txt +=
                '請輸入語言</br>';
        }
        if (!tutorial_style) {
            error_txt +=
                '請選擇補習方式</br>';
        }




        val = []
        $('input[name="class-area[]"]:checked').each(function(i) {
            val[i] = $(this).val();
        });
        if (val.length == 0) {
            error_txt += '請選擇補習地區</br>';
        }

        if (!short_address) {
            error_txt +=
                '請輸入詳細地址</br>';
        }

        if (!transport) {
            error_txt +=
                '請輸入交通方法</br>';

        }

        if (!cost_per_ppl) {
            error_txt +=
                '請輸入每小時收費</br>';
        }



        if (!lesson_per_week) {
            error_txt +=
                '請輸入每星期堂數</br>';
        }

        if (!hour_per_lesson) {
            error_txt +=
                '請輸入每堂時間(小時)</br>';
        }

        if (!tutor_gender) {
            error_txt +=
                '請輸入導師性別要求</br>';
        }



        if (!error_txt) {
            $('form#apply-case-form').submit();
        } else {

            show_lightbox_msg(error_txt);
        }



        var lowest_salary = $('#lowest-salary').val();





    })


    $('.next-step-btn').click(function() {


        if (tutor_list_arr.length == 0) {
            // alert('請加入心儀導師');
            show_lightbox_msg('請加入心儀導師');
        } else {
            $('.tutor-list-ul').fadeOut(0);
            $('.student-form-div').fadeIn(0);
            $('.prev-step-btn').fadeIn(0);
            $('.next-step-btn').fadeOut(0);
            $('.list-close-btn').fadeOut(0);

            $('.step-txt').removeClass('active');
            $('.step-txt').eq(1).addClass('active');
            $('.filter-btn,.pagination').fadeOut(0);

        }

    })

    $('.prev-step-btn').click(function() {

        $('.filter-btn,.pagination').fadeIn(0);


        $('.next-step-btn').fadeIn(0);
        $('.prev-step-btn').fadeOut(0);
        $('.tutor-list-ul').fadeIn(0);
        $('.student-form-div').fadeOut(0);
        $('.list-close-btn').fadeIn(0);

        $('.step-txt').removeClass('active');

        $('.step-txt').eq(0).addClass('active');

    })

    $('.tutor-list-ul.data-column').click(function() {

        // $('form#filter-form').submit();
    });
    // $('.add-btn-a').click(function() {
    //     // alert(87);
    // })
})
</script>
<?php
get_footer();