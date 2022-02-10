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
// $arr1 = array('1','2','3','4','5');
// $arr2 = array('2','3','1','8');
// print_r(array_unique(array_merge($arr1,$arr2)));
?>

<div class="lightbox">

    <div class="lightbox-bg-btn ">

    </div>

    <div class="lightbox-content filter-content">

        <form action="" method="post" id="filter-form">
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
                            <label><input type="radio" name="gender" value=""
                                    <?php echo !$_POST['filter-form']|| !$_POST['gender']  ? 'checked':''; ?>>顯示全部</label>
                            <label><input type="radio" name="gender" value="男"
                                    <?php echo $_POST['filter-form']&&$_POST['gender'] =='男' ? 'checked':''; ?>>男</label>
                            <label><input type="radio" name="gender" value="女"
                                    <?php echo $_POST['filter-form']&&$_POST['gender'] =='女' ? 'checked':''; ?>>女</label>
                        </td>
                    </tr>

                    <tr>
                        <td> <label for="tutor-level">教育程度 *
                            </label></td>
                        <td>
                            <div class="filter-tutor-level-group">
                                <div>
                                    <input class="form-check-input" type="checkbox" value="" id="all-tutor-level"
                                        name="class-area[]">
                                    <label class="form-check-label" for="all-tutor-level">
                                        所有程度
                                    </label>
                                </div>
                                <div>
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
                                </div>
                            </div>

                        </td>
                    </tr>


                    <tr>
                        <td> <label for="tutor-level">就讀大學
                            </label></td>
                        <td>
                            <div class="university-group">
                                <div>
                                    <input class="form-check-input" type="checkbox" value="" id="all-university"
                                        name="">
                                    <label class="form-check-label" for="all-university">
                                        全部大學
                                    </label>
                                </div>

                                <div>
                                    <input class="form-check-input" type="checkbox" value="香港大學" id="university-value-1"
                                        name="university[]">
                                    <label class="form-check-label" for="university-value-1">
                                        香港大學
                                    </label>
                                </div>
                                <div>
                                    <input class="form-check-input" type="checkbox" value="香港中文大學"
                                        id="university-value-2" name="university[]">
                                    <label class="form-check-label" for="university-value-2">
                                        香港中文大學
                                    </label>
                                </div>
                                <div>
                                    <input class="form-check-input" type="checkbox" value="香港科技大學"
                                        id="university-value-3" name="university[]">
                                    <label class="form-check-label" for="university-value-3">
                                        香港科技大學
                                    </label>
                                </div>
                                <div>
                                    <input class="form-check-input" type="checkbox" value="香港城市大學"
                                        id="university-value-4" name="university[]">
                                    <label class="form-check-label" for="university-value-4">
                                        香港城市大學
                                    </label>
                                </div>
                                <div>
                                    <input class="form-check-input" type="checkbox" value="香港城市大學"
                                        id="university-value-5" name="university[]">
                                    <label class="form-check-label" for="university-value-5">
                                        香港城市大學
                                    </label>
                                </div>

                                <div>
                                    <input class="form-check-input" type="checkbox" value="香港浸會大學"
                                        id="university-value-6" name="university[]">
                                    <label class="form-check-label" for="university-value-6">
                                        香港浸會大學
                                    </label>
                                </div>
                                <div>
                                    <input class="form-check-input" type="checkbox" value="香港都會大學"
                                        id="university-value-7" name="university[]">
                                    <label class="form-check-label" for="university-value-7">
                                        香港都會大學
                                    </label>
                                </div>
                                <div>
                                    <input class="form-check-input" type="checkbox" value="香港恒生大學"
                                        id="university-value-8" name="university[]">
                                    <label class="form-check-label" for="university-value-8">
                                        香港恒生大學
                                    </label>
                                </div>

                                <div>
                                    <input class="form-check-input" type="checkbox" value="嶺南大學" id="university-value-9"
                                        name="university[]">
                                    <label class="form-check-label" for="university-value-9">
                                        嶺南大學
                                    </label>
                                </div>


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
                                    <input class="form-check-input" type="checkbox" id="all-place-1" name="">
                                    <label class="form-check-label" for="all-place-1">
                                        所有地區
                                    </label>
                                </div>
                                <div class="mt-3">
                                    <input class="form-check-input hk-place" type="checkbox" id="hk-place-1" name="">
                                    <label class="form-check-label" for="hk-place-1">
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

                                    <input class="form-check-input kl-place" type="checkbox" id="kl-place-1" name="">
                                    <label class="form-check-label" for="kl-place-1">
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
                                    <input class="form-check-input nt-place" type="checkbox" id="nt-place-1" name="">
                                    <label class="form-check-label" for="nt-place-1">
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

                <a href="javascript:void(0);" class="submit-btn filter-case">查看結果</a>


                <!-- </form> -->
            </div>


        </form>

    </div>

    <div class="lightbox-content tutor-intro">

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
            <div class="col-6">

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

    主頁 > 補習個案</div>
<div class="container mt-5">

    <div class="text-center">
        <h2>補習個案
            <div class="bar"></div>
        </h2>
    </div>

    <div class="text-center mt-3">
        <a href="#" class="filter-btn">個案選項</a>
    </div>
    <div class="row mt-5 gx-5">



        <div class="col-12">

            <ul class="tutor-list-ul">



                <?php
                    
        $meta_query_arr = array(
            'relation' => 'AND');

            // echo 99;
            if($_POST && $_POST['filter-form'])
            {
                if($_POST['gender'])
                {
                    array_push($meta_query_arr,array('key' => 'gender','value' =>$_POST['gender'] ,'compare' => 'LIKE'));
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
       
            

  $args = array(  
    'post_type' => 'student',
    'post_status' => 'publish',
    'posts_per_page' => 8, 
    'orderby' => 'date', 
    'order' => 'DESC', 
    'meta_query' => $meta_query_arr
    
);

$loop = new WP_Query( $args ); 
    
while ( $loop->have_posts() ) { 
    $loop->the_post(); 
    // echo 1;
    // implode(', ', $Array)
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
                                // 數學（5*） 化學（5**） 經濟（5） 

                                $label = get_field_object('dse_sub_'.$i)['label'];
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
                    <div class="row gx-0 align-items-top">
                        <div class='col-2 data-column'><?php echo get_field('student_id');?>
                            <br><?php echo get_field('tutorial_style');?>
                        </div>
                        <div class='col-2 data-column'>
                            <?php echo get_field('student_level_2');?>
                            <br /> <?php echo get_field('gender');?>

                        </div>
                        <div class='col-2 data-column'>
                            補習科目: <br>
                            <!-- 數學(中文卷) -->
                            <?php echo implode(' , ', get_field('subjects'));?>
                            <!--大學生--> <br>
                        </div>
                        <div class='col-2 data-column'>
                            時薪： <br>$<?php echo get_field('cost_per_ppl');?>
                            <?php //echo get_field('lowest_salary');?></div>

                        <div class='col-4 data-column'>
                            每週堂數 / 時數: <br>
                            一星期<?php echo get_field('lesson_per_week');?>堂 ;
                            一堂<?php echo get_field('hour_per_lesson');?>小時


                        </div>

                    </div>
                </li>
                <?php
}
                
                
                ?>

            </ul>



        </div>


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


    $('.filter-btn').click(function() {

        $('.lightbox').fadeIn(0);
        $('.lightbox .lightbox-content').fadeOut(0);
        $('.lightbox .lightbox-content.filter-content').fadeIn(0);

    });


    $('.prev-step-btn').fadeOut(0);

    $('.add-btn-a').click(function() {

        var select_tutor_id = $(this).closest('li').attr('data-tutor-id');

        if (!tutor_list_arr.includes(select_tutor_id)) {
            tutor_list_arr.push(select_tutor_id);
            console.log(tutor_list_arr);

            var added_to_cart_html =
                '<li><span>' + select_tutor_id +
                '</span><a href="javascript:void(0);" class="list-close-btn"></a></li>';

            $('.added-list ul').append(added_to_cart_html);

            $('.list-close-btn').click(function() {
                var select_tutor_id = $(this).prev('span').html();
                tutor_list_arr = tutor_list_arr.filter(tutor_id => tutor_id != select_tutor_id);
                $(this).closest('li').remove();
                console.log(tutor_list_arr);
            });


        } else {
            alert('這導師已加入心儀導師名單');
        }

        // alert(select_tutor_id);
    });

    $('.data-column').click(function() {

        $('.lightbox').fadeIn(0);
        $('.lightbox .lightbox-content').fadeOut(0);
        $('.lightbox .lightbox-content.tutor-intro').fadeIn(0);


        // alert($(this).closest('.tutor-content-li').attr('data-self-intro'));

        $('#lbc-self-intro').html($(this).closest('.tutor-content-li').attr('data-self-intro'));
        $('#lbc-lesson-lang').html($(this).closest('.tutor-content-li').attr('data-lesson-lang'));

        $('#lbc-result').html($(this).closest('.tutor-content-li').attr('data-result'));


        $('#lbc-living-area').html($(this).closest('.tutor-content-li').attr('data-living-area'));

        $('#lbc-tutor-id').html($(this).closest('.tutor-content-li').attr('data-tutor-id'));
        $('#lbc-gender').html($(this).closest('.tutor-content-li').attr('data-gender'));
        $('#lbc-born-year').html($(this).closest('.tutor-content-li').attr('data-born-year'));

        $('#lbc-s-school').html($(this).closest('.tutor-content-li').attr('data-s-school'));
        $('#lbc-bac-degree').html($(this).closest('.tutor-content-li').attr('data-bac-degree'));
        $('#lbc-lowest-salary').html($(this).closest('.tutor-content-li').attr('data-lowest-salary'));
        $('#lbc-past-exam').html($(this).closest('.tutor-content-li').attr('data-past-exam'));

        $('#lbc-teach-level').html($(this).closest('.tutor-content-li').attr('data-teach-level'));
        $('#lbc-teach-subjects').html($(this).closest('.tutor-content-li').attr('data-teach-subjects'));





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
            for (i = 1; i <= 6; i++) {
                $('#tutor-level-value-' + i).prop('checked', true);
            }

        } else {
            for (i = 1; i <= 6; i++) {
                $('#tutor-level-value-' + i).prop('checked', false);
            }
        }
    })


    $('#all-place-1, #all-place-2 ').change(function() {
        if ($(this).is(':checked')) {

            $(this).parent('div').parent('div').find('.hk-place').prop('checked', true);
            $(this).parent('div').parent('div').find('.kl-place').prop('checked', true);
            $(this).parent('div').parent('div').find('.nt-place').prop('checked', true);

            $(this).parent('div').find('.hk-place').prop('checked', true);
            $(this).parent('div').find('.kl-place').prop('checked', true);
            $(this).parent('div').find('.nt-place').prop('checked', true);

            for (i = 1; i <= 69; i++) {


                if ($(this).attr('id') == 'all-place-1') {
                    $('form#filter-form #class-area-value-' + i).prop('checked', true);
                }
                if ($(this).attr('id') == 'all-place-2') {
                    $('form#apply-case-form #class-area-value-' + i).prop('checked', true);
                }

                // $('form#  #class-area-value-' + i).prop('checked', true);
            }

        } else {
            $(this).parent('div').parent('div').find('.hk-place').prop('checked', false);
            $(this).parent('div').parent('div').find('.kl-place').prop('checked', false);
            $(this).parent('div').parent('div').find('.nt-place').prop('checked', false);


            for (i = 1; i <= 69; i++) {
                if ($(this).attr('id') == 'all-place-1') {
                    $('form#filter-form #class-area-value-' + i).prop('checked', false);
                }
                if ($(this).attr('id') == 'all-place-2') {
                    $('form#apply-case-form #class-area-value-' + i).prop('checked', false);
                }
                // $(this).parent('div').next('.place-group').find('#class-area-value-' + i).prop(
                //     'checked', false);
                // $('#class-area-value-' + i).prop('checked', false);
            }
        }
    })


    $('.hk-place').change(function() {
        if ($(this).is(':checked')) {

            for (i = 1; i <= 17; i++) {
                $(this).parent('div').next('.place-group').find('#class-area-value-' + i).prop(
                    'checked', true);
                $(this).parent('div').find('.place-group').find('#class-area-value-' + i).prop(
                    'checked', true);
            }

        } else {
            for (i = 1; i <= 17; i++) {
                $(this).parent('div').next('.place-group').find('#class-area-value-' + i).prop(
                    'checked', false);
                $(this).parent('div').find('.place-group').find('#class-area-value-' + i).prop(
                    'checked', false);
                // $('#class-area-value-' + i).prop('checked', false);
            }
        }
    })



    $('#all-university').change(function() {
        if ($(this).is(':checked')) {

            for (i = 1; i <= 9; i++) {
                $('#university-value-' + i).prop('checked', true);
            }

        } else {
            for (i = 1; i <= 9; i++) {
                $('#university-value-' + i).prop('checked', false);
            }
        }
    })


    $('.kl-place').change(function() {
        if ($(this).is(':checked')) {

            for (i = 18; i <= 45; i++) {
                $(this).parent('div').next('.place-group').find('#class-area-value-' + i).prop(
                    'checked', true);
                $(this).parent('div').find('.place-group').find('#class-area-value-' + i).prop(
                    'checked', true);
            }

        } else {
            for (i = 18; i <= 45; i++) {
                $(this).parent('div').next('.place-group').find('#class-area-value-' + i).prop(
                    'checked', false);
                $(this).parent('div').find('.place-group').find('#class-area-value-' + i).prop(
                    'checked', false);
            }
        }
    })


    $('.nt-place').change(function() {
        if ($(this).is(':checked')) {

            for (i = 46; i <= 69; i++) {
                $(this).parent('div').next('.place-group').find('#class-area-value-' + i).prop(
                    'checked', true);
                $(this).parent('div').find('.place-group').find('#class-area-value-' + i).prop(
                    'checked', true);
            }

        } else {
            for (i = 46; i <= 69; i++) {
                $(this).parent('div').next('.place-group').find('#class-area-value-' + i).prop(
                    'checked', false);
                $(this).parent('div').find('.place-group').find('#class-area-value-' + i).prop(
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


        if (confirm_whatsapp_tel != whatsapp_tel) {
            error_txt +=
                '確認 WhatsApp 電話號碼輸入不相同\n';
        }


        if (!(/^[0-9]{8}$/.test(whatsapp_tel))) {
            error_txt += 'WhatsApp 電話格式不正確\n';
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
            $('form#apply-case-form').submit();
        } else {
            alert(error_txt);
        }



        var lowest_salary = $('#lowest-salary').val();





    })


    $('.next-step-btn').click(function() {

        if (tutor_list_arr.length == 0) {
            alert('請加入心儀導師');
        } else {
            $('.tutor-list-ul').fadeOut(0);
            $('.student-form-div').fadeIn(0);
            $('.prev-step-btn').fadeIn(0);
            $('.next-step-btn').fadeOut(0);
            $('.list-close-btn').fadeOut(0);

            $('.step-txt').removeClass('active');
            $('.step-txt').eq(1).addClass('active');

        }

    })

    $('.prev-step-btn').click(function() {
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