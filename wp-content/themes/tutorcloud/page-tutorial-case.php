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
                            <label for=""> 學生性別*</label>
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
                        <td> <label for="student-level">學生級別 *
                            </label></td>
                        <td>
                            <div class="filter-student-level-group">
                                <div>
                                    <input class="form-check-input" type="checkbox" value="" id="all-student-level"
                                        name="">
                                    <label class="form-check-label" for="all-student-level">
                                        所有程度
                                    </label>
                                </div>

                                <?php 
                                $student_level_arr=array("K1","K2","K3","小一","小二","小三","小四","小五","小六","中一","中二","中三","中四","中五","中六","Year 1","Year 2","Year 3","Year 4","Year 5","Year 6");
                                ?>
                                <?php
                                
                                for($i=1;$i<=count($student_level_arr);$i++)
                                {
                                    ?>
                                <div>
                                    <input class="form-check-input" type="checkbox"
                                        value="<?php echo $student_level_arr[$i];?>"
                                        id="student-level-value-<?php echo $i;?>" name="student-level[]"
                                        <?php echo $_POST['filter-form']&&in_array($student_level_arr[$i], $_POST['student-level']) ? 'checked':''; ?>>
                                    <label class="form-check-label" for="student-level-value-<?php echo $i;?>">
                                        <?php echo $student_level_arr[$i];?>
                                    </label>
                                </div>
                                <?php
                                }
                                ?>



                            </div>

                        </td>
                    </tr>




                    <tr>
                        <td><label for="student-place">學生地區
                            </label></td>
                        <td>
                            <div>

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


                                    <?php
                                $hk_place_arr=array("中半山","薄扶林","中上環","西環","灣仔","銅鑼灣","跑馬地","北角","鰂魚涌","太古","筲箕灣","西灣河","柴灣","小西灣","香港仔","鴨利洲","赤柱");
                                for($i=1;$i<=count($hk_place_arr);$i++)
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

                                    <input class="form-check-input kl-place" type="checkbox" id="kl-place-1" name="">
                                    <label class="form-check-label" for="kl-place-1">
                                        九龍區
                                    </label>
                                </div>

                                <div class="place-group">
                                    <?php
                                $kl_place_arr=array("美孚","荔枝角","長沙灣","深水涉","大角咀","旺角","何文田","油麻地","佐敦","尖沙咀","土瓜灣","紅磡","石硤尾","九龍塘","樂富","慈雲山","黃大仙","鑽石山","新蒲崗","彩虹","牛池灣","牛頭角","九龍灣","秀茂坪","觀塘","藍田","油塘","九龍城");
                                for($i=1;$i<=count($kl_place_arr);$i++)
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
                                    <?php
                                // 
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
            <h3 class="col-12 text-center" id="lbc-short-address">
                <!-- 馬鞍山新港城 -->

            </h3>
            <div class="col-6">
                <table class="detail-content-table">
                    <tr>
                        <td>補習編號 </td>
                        <td><span id="lbc-student-id"></span> </td>
                    </tr>
                    <tr>
                        <td>學生性別</td>
                        <td id="lbc-student-gender"></td>
                    </tr>
                    <tr>
                        <td>時薪</td>
                        <td>$<span id="lbc-salary"></span></td>
                    </tr>
                    <tr>
                        <td>補習方式</td>
                        <td id="lbc-tutorial-style"></td>
                    </tr>

                </table>

            </div>
            <div class="col-6">

                <table class="detail-content-table">

                    <tr>
                        <td>學生級別 </td>
                        <td id="lbc-student-level"></td>
                    </tr>
                    <tr>
                        <td>補習科目</td>
                        <td id="lbc-subjects">
                            <!-- 數學 化學 經濟 -->

                        </td>
                    </tr>
                    <tr>
                        <td>每週堂數 / 時數</td>
                        <td id="lbc-lesson-hour">
                            <!-- 數學（5*） 化學（5**） 經濟（5） -->
                        </td>
                    </tr>
                    <tr>
                        <td>可補習時間(可議)</td>
                        <td id="lbc-time">
                            <!-- 小學 初中 高中 -->

                        </td>
                    </tr>

                </table>





            </div>

            <div class="col-12 mt-4 mb-4">
                <iframe id="map" width="100%" height="200" frameborder="0" style="border:0" src=""
                    allowfullscreen=""></iframe>
            </div>


            <div class="col-3 mb-4">導師性別：<br><span id="lbc-tutor-gender"></span></div>
            <div class="col-3 mb-4">補習期望：<br><span id="lbc-tutorial-target">補底 清concept</div>
            <div class="col-3 mb-4">對導師要求：<br><span id="lbc-tutor-requirement"></span></div>
            <div class="col-3 mb-4">其他要求/備註：<br><span id="lbc-other-requirement"></span>test</div>


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
                if($_POST['student-level'])
                {
                    array_push($meta_query_arr,array('key'=>'student_level_2','value'=>$_POST['student-level'],'compare' => 'IN'));
                }

                if($_POST['class-area'])
                {
                    array_push($meta_query_arr,array('key'=>'class_area','value'=>$_POST['class-area'],'compare' => 'IN'));
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
                <li class="student-content-li" data-student-id="<?php echo get_field('student_id');?>"
                    data-student-gender="<?php echo get_field('gender');?>"
                    data-salary="<?php echo get_field('cost_per_ppl');?>"
                    data-tutorial-style="<?php echo get_field('tutorial_style');?>"
                    data-student-level="<?php echo get_field('student_level_2');?>"
                    data-subjects="<?php echo implode(' ', get_field('subjects'));?>"
                    data-lesson-hour="<?php echo get_field('lesson_per_week');?>"
                    data-time="<?php echo get_field('hour_per_lesson');?>"
                    data-start-tutorial-time="<?php echo get_field('start_tutorial_time');?>"
                    data-short-address="<?php echo get_field('short_address');?>"
                    data-tutor-gender="<?php  echo get_field('tutor_gender');?>"
                    data-tutorial-target="<?php echo implode(' ', get_field('objective')).' '.get_field('objective_value_other');?>"
                    data-tutor-requirement="<?php echo implode(' ', get_field('tutor_requirement')).' '.get_field('tutor_requirement_value_other'); ?>"
                    data-other-requirement="<?php echo get_field('other_remark');?>">

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
                            <?php echo implode(' ', get_field('subjects'));?>
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

        var select_student_id = $(this).closest('li').attr('data-student-id');

        if (!tutor_list_arr.includes(select_student_id)) {
            tutor_list_arr.push(select_student_id);
            console.log(tutor_list_arr);

            var added_to_cart_html =
                '<li><span>' + select_student_id +
                '</span><a href="javascript:void(0);" class="list-close-btn"></a></li>';

            $('.added-list ul').append(added_to_cart_html);

            $('.list-close-btn').click(function() {
                var select_student_id = $(this).prev('span').html();
                tutor_list_arr = tutor_list_arr.filter(student_id => student_id !=
                    select_student_id);
                $(this).closest('li').remove();
                console.log(tutor_list_arr);
            });


        } else {
            alert('這導師已加入心儀導師名單');
        }

        // alert(select_student_id);
    });

    $('.data-column').click(function() {

        $('.lightbox').fadeIn(0);
        $('.lightbox .lightbox-content').fadeOut(0);
        $('.lightbox .lightbox-content.tutor-intro').fadeIn(0);

        $('#lbc-short-address').html($(this).closest('.student-content-li').attr('data-short-address'));

        $('#map').attr('src',
            'https://www.google.com/maps/embed/v1/place?q=' + $(this).closest('.student-content-li')
            .attr('data-short-address') + '&key=AIzaSyBN611NFShALGyApUBivJPfvqlEIvbPRNU'
        );


        $('#lbc-student-id').html($(this).closest('.student-content-li').attr('data-student-id'));
        $('#lbc-student-gender').html($(this).closest('.student-content-li').attr(
            'data-student-gender'));
        $('#lbc-salary').html($(this).closest('.student-content-li').attr('data-salary'));
        $('#lbc-tutorial-style').html($(this).closest('.student-content-li').attr(
            'data-tutorial-style'));
        $('#lbc-student-level').html($(this).closest('.student-content-li').attr('data-student-level'));
        $('#lbc-subjects').html($(this).closest('.student-content-li').attr('data-subjects'));



        var lesson_hour_str = '一星期' + $(this).closest('.student-content-li').attr('data-lesson-hour') +
            '堂 ; 一堂' + $(this).closest('.student-content-li').attr('data-time') + '小時';
        $('#lbc-lesson-hour').html(lesson_hour_str);

        $('#lbc-time').html($(this).closest('.student-content-li').attr('data-start-tutorial-time'));
        $('#lbc-tutor-gender').html($(this).closest('.student-content-li').attr('data-tutor-gender'));
        // $('#lbc-tutor-gender').html(999);

        $('#lbc-tutorial-target').html($(this).closest('.student-content-li').attr(
            'data-tutorial-target'));

        $('#lbc-tutor-requirement').html($(this).closest('.student-content-li').attr(
            'data-tutor-requirement'));
        $('#lbc-other-requirement').html($(this).closest('.student-content-li').attr(
            'data-other-requirement'));





        // $('#lbc-self-intro').html($(this).closest('.student-content-li').attr('data-self-intro'));


        // alert($(this).closest('.student-content-li').attr('data-self-intro'));

        // $('#lbc-self-intro').html($(this).closest('.student-content-li').attr('data-self-intro'));
        // $('#lbc-lesson-lang').html($(this).closest('.student-content-li').attr('data-lesson-lang'));

        // $('#lbc-result').html($(this).closest('.student-content-li').attr('data-result'));


        // $('#lbc-living-area').html($(this).closest('.student-content-li').attr('data-living-area'));

        // $('#lbc-student-id').html($(this).closest('.student-content-li').attr('data-student-id'));
        // $('#lbc-gender').html($(this).closest('.student-content-li').attr('data-gender'));
        // $('#lbc-born-year').html($(this).closest('.student-content-li').attr('data-born-year'));

        // $('#lbc-s-school').html($(this).closest('.student-content-li').attr('data-s-school'));
        // $('#lbc-bac-degree').html($(this).closest('.student-content-li').attr('data-bac-degree'));
        // $('#lbc-lowest-salary').html($(this).closest('.student-content-li').attr('data-lowest-salary'));
        // $('#lbc-past-exam').html($(this).closest('.student-content-li').attr('data-past-exam'));

        // $('#lbc-teach-level').html($(this).closest('.student-content-li').attr('data-teach-level'));
        // $('#lbc-teach-subjects').html($(this).closest('.student-content-li').attr('data-teach-subjects'));





        var class_area = $(this).closest('.student-content-li').attr('data-class-area');
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
        $('#map').attr('src', '');
    })



    $('#all-student-level').change(function() {
        if ($(this).is(':checked')) {
            for (i = 1; i <= 21; i++) {
                $('#student-level-value-' + i).prop('checked', true);
            }

        } else {
            for (i = 1; i <= 21; i++) {
                $('#student-level-value-' + i).prop('checked', false);
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

            for (i = 1; i <= <?php echo count($hk_place_arr);?>; i++) {
                $(this).parent('div').next('.place-group').find('#hk-class-area-value-' + i).prop(
                    'checked', true);
                $(this).parent('div').find('.place-group').find('#hk-class-area-value-' + i).prop(
                    'checked', true);
            }

        } else {
            for (i = 1; i <= <?php echo count($hk_place_arr);?>; i++) {
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

            for (i = 1; i <= <?php echo count($kl_place_arr);?>; i++) {
                $(this).parent('div').next('.place-group').find('#kl-class-area-value-' + i).prop(
                    'checked', true);
                $(this).parent('div').find('.place-group').find('#kl-class-area-value-' + i).prop(
                    'checked', true);
            }

        } else {
            for (i = 1; i <= <?php echo count($kl_place_arr);?>; i++) {
                $(this).parent('div').next('.place-group').find('#kl-class-area-value-' + i).prop(
                    'checked', false);
                $(this).parent('div').find('.place-group').find('#kl-class-area-value-' + i).prop(
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