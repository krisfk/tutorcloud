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

    <div class="lightbox-bg-btn ">

    </div>

    <div class="lightbox-content lightbox-msg">
        <a href="javascript:void(0);" class="close-btn">

            <img src="<?php echo get_template_directory_uri();?>/assets/images/close-btn.png" alt="">
        </a>
        <span class="lightbox-msg-txt  d-block p-3"></span>

    </div>
    <div class="lightbox-content filter-content">
    </div>
</div>

<div class="breadcrumb mt-4">

    主頁 > 新導師登記</div>
<div class="container mt-5">

    <div class="text-center">
        <h2>導師登記資格
            <div class="bar"></div>
        </h2>
    </div>

    <!-- <div class="text-center mt-3">
        <a href="#" class="filter-btn">導師選項</a>
    </div> -->
    <div class="row mt-5 justify-content-center align-items-center">
        <div class="col-lg-2 col-md-12 col-sm-12 col-12  text-end">
            <img class="tutor-reg-icon"
                src="<?php echo get_template_directory_uri();?>/assets/images/tutor-reg-icon.png" alt="">
        </div>
        <div class="col-lg-5 col-md-12 col-sm-12 col-12 ">

            <div class="description-div">
                <?php echo get_the_content();?>
                <!-- 年滿十七歲或以上，正就讀大學及具大學學士學位或以上程度學歷之自然人且擁有簽訂合約的心智和法律能
                力之人士，以及獲其憲章、附例及公司組織章程大綱批准其與TutorCloud 師魂簽訂此合約的公司，方可申請成
                為導師。TutorCloud 師魂保留拒絕任何人士申請成為導師或終止任何人士之導師資格而不作任何解釋之權利。
                不符合上述資格者不得使用服務。 -->
            </div>
        </div>

    </div>
    <div class="row mt-5 main-content-div">

        <div class="col-lg-2 col-md-12 col-sm-12 col-12 ">
            <ul class="m-0 p-0 step-li">
                <li class="step-txt active">1. 條款及細則</li>
                <li class="step-txt">2. 個人資料</li>
                <li class="step-txt">3. 學歷資料</li>
                <li class="step-txt">4. 補習資料</li>

                <!-- <li class="step-txt">4. 上載履歷</li>
                <li class="step-txt">5. 授課資料</li>
                <li class="step-txt">6. 自我簡介</li> -->
                <li class="step-txt">5. 完成</li>
            </ul>


            <!-- <div class="text-end mt-4">
                <a href="#" class="next-step-btn">下一步</a>
            </div> -->
        </div>
        <div class="col-lg-10 col-md-12 col-sm-12 col-12">


            <?php
        if($_POST)
        {

            $reg_email=$_POST['email'];

            $query_args = array(
                'post_type' => 'tutor',
                'meta_query' => array(
                    array(
                        'key' => 'email',
                        'value' => $reg_email,
                        'compare' => '=',
                    )
                ),
            );
            
            $the_query = new WP_Query( $query_args );
            
            if ( $the_query->have_posts() ) {
                wp_redirect(get_site_url().'/tutor-register?e=1');
                exit;
                // echo json_encode(array("status"=>"-1", "msg"=>"this email was existed"));
            } else {
                // echo json_encode(array("status"=>"1", "msg"=>"valid email"));
            }



            
        ?>
            <script type="text/javascript">
            $(function() {
                $('.step-txt').removeClass('active');
                $('.step-txt').eq(4).addClass('active');
                $('.step-content').remove();

            })
            </script>
            <div class="result-div mt-5">


                <div class="text-center">
                    <h2>登記完成！請稍後⋯審批完成後會盡快聯絡你！謝謝！</h2>
                </div>


            </div>
            <?php
            
        }?>

            <div class="step-content step-content-1">
                <?php //echo get_field('terms');?>
                <ul class="terms-list-ul">
                    <li>

                        <a href="javascript:void(0);" class="terms-a">
                            <h3>TutorCloud 師魂 的職責</h3>
                        </a>
                        <div class="mt-3 terms-content">TutorCloud 師魂作為一個網上教育配對平台，其責任僅為導師及家長或學生進行相互配對，以使導師可以向家
                            長或學生提供補習或教育服務。 導師與家長其間只為獨立合作聘約，並不存在僱傭關係。 <br>
                            導師與TutorCloud 師魂亦只存在服務提供者與服務使用者之關係，雙方沒有任何僱傭關係，因此TutorCloud
                            師魂有權依本公司與導師所訂定之「導師收費」收取行政費用，成功登記即代表導師同意條款全部內容。而「條
                            款及細則」所訂之內容等同TutorCloud 師魂與導師之間所定之合約，而TutorCloud 師魂網站內所列出的任何
                            規則或指示都屬於導師合約的一部份，本網站導師亦須格守。</div>
                    </li>
                    <li>

                        <a href="javascript:void(0);" class="terms-a">
                            <h3>TutorCloud 師魂 的權利</h3>
                        </a>
                        <div class="mt-3 terms-content">
                            <ol>
                                <li>暫停或終止用戶資格的權利

                                    <div>倘發現用戶出現以下行為，則TutorCloud 師魂 有權暫停或終止用戶資格而毋須支付賠償：</div>
                                    <div>(a) 違反本合約所列出之條件及條款，或 <br>(b) 透過定罪、和解、保險或託管調查或其他方式而從事與此網站有關之欺騙行為。
                                    </div>
                                </li>
                                <li>處理由用戶提供的資料的權利
                                    <div>TutorCloud 師魂擁有絕對及不受約束之權力，拒絕或刪除用戶所提供之任何資料，而毋須向任
                                        何一方發出通知或作出賠償。在無損此項權利下，倘導師所提供之任何資料一旦刊登或繼續刊
                                        登，會導致TutorCloud 師魂須為第三者負上任何法律責任，或令TutorCloud 師魂觸犯任何有效
                                        司法管轄區的任何法律或規則或第三者的權益，則TutorCloud 師魂擁有權拒絕或修改任何所提
                                        供之資料。</div>
                                </li>
                                <li>撤回提供中介服務之權利
                                    <div>TutorCloud 師魂擁有絕對及不受約束的權利，撤回任何服務條件而不向導師發出任何通知或作
                                        出任何賠償。在無減損此權利下，倘發生下列情況，TutorCloud 師魂 有權撤回服務：</div>
                                    <div>(a) 該導師提供有個人資料有極大可能不全正確；<br>
                                        (b) 導師被發現違反本合約列出的條件及條款，或其戶口被TutorCloud 師魂根據此合約的條款
                                        勒令暫停；<br>
                                        (c) TutorCloud 師魂 因任何原因無法核實或證實導師或家長或學生提供的任何資料。

                                    </div>
                                </li>
                                <li>拒絕提供服務之權利<div>TutorCloud 師魂有權停止提供服務給任何導師並保留拒絕任何人士申請成為導師或終止任何人
                                        士之導師資格而不作任何解釋之權利。</div>
                                </li>
                                <li>更改有關收費的權利<div>使用服務中收費列於「導師收費」中，而該收費說明乃已納入本合約中，視為構成合約的一部份。
                                        TutorCloud 師魂 保留隨時更改有關收費的權利。所有用戶必須於每次使用服務前查核收費表。</div>
                                </li>
                                <li>增刪本合約的權利<div>TutorCloud 師魂保留隨時增刪本合約的一切權利，而不會事先通知導師；導師必須隨時翻看本
                                        合約資料，以確保清楚最新的導師約束條款。</div>
                                </li>
                            </ol>
                        </div>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="terms-a">
                            <h3>有關補習中介服務之條款</h3>
                        </a>
                        <div class="mt-3 terms-content">
                            <ol>
                                <li>導師之基本責任<div>倘閣下，作為導師，確認接納TutorCloud 師魂之個案後，必須盡力依照TutorCloud 師魂所發出
                                        的指示，上課務必準時到達及依時完成，不可在沒有家長或學生同意的情況下刪減時間。你同意
                                        授權本站利用你的「登記資料」作為本站的宣傳之用，而不受任何法例所限制。你亦同意本站在
                                        必要時候局部或全部顯示「登記資料」，而不受任何版權法例及個人資料（私隱）條例所限制。你
                                        同意不會使用任何工具、軟件或程序干擾本站伺服器的正常運作，更不會故意、有計劃地令本站
                                        的系統負荷過重。你不可以傳播任何電腦病毒或有破壞性的程式給本站和本站的所有導師。你
                                        同意不會追究因本站系統失靈而造成的任何損失。本站會盡力維持系統的可靠性，並保持良好
                                        的效率。你不可利用任何本站的服務作出非法或不道德的行為。</div>
                                </li>
                                <li>導師提供正確資料之責任<div>導師如沒有提供正確資料，或因沒有提供正確資料而導師個案服務被終止，TutorCloud 師魂可
                                        以拒絕為其提供服務，亦有可以收取所衍生之行政費用。</div>
                                </li>
                                <li>導師撤回個案所衍生之責任<div>在個案已確認後，如導師決定取消向相關家長或學生提供補習，導師絕不能把其家長或學生之
                                        資料轉交予任何人仕。</div>
                                </li>
                                <li>導師進行欺騙行為之責任<div>導師如被證實，或TutorCloud 師魂認為或發現導師極有可能與家長或學生串聯進行任何欺騙行
                                        為，包括在導師仍然為家長或學生提供有關服務之時，其任何一方向TutorCloud 師魂謊報服務
                                        經已終止，TutorCloud 師魂會立即終止有關導師的資格，並要求有關人士於七天內清繳有關全
                                        部費用；即使其後家長或學生決定終止有關人士之服務，導師仍須繳付全數服務費用。
                                        TutorCloud 師魂 會保留一切刑事及民事追究之權利，並不會容忍任何欺騙行為出現。</div>
                                </li>


                            </ol>
                        </div>

                    </li>
                    <li>
                        <a href="javascript:void(0);" class="terms-a">
                            <h3>收費</h3>
                        </a>
                        <div class="mt-3 terms-content">
                            <ol>
                                <li>收費<div>使用服務中收費（「收費」）列於「導師收費」中，而該收費說明乃巳納入本合約中，並視為構成合
                                        約的一部份。TutorCloud 師魂保留隨時更改有關收費的權利，而新收費將於指定日期生效（生效
                                        日期將為網頁刊登經修訂收費表後的七天內）。所有用戶必須於每次使用服務前查核收費表。</div>
                                </li>
                                <li>過期付費<div>倘若任何不準時繳費，過期付費少於5天需要付上原行政費用及每日曆日$10附加費用；過期付
                                        費5天或以上需要付上原行政費用及每日曆日$50附加費用，並會視乎情況將個案轉至「小額錢
                                        債」追討。所有附加費用會從繳費到期日起計算，直至付款為止。</div>
                                </li>
                                <li>收費模式<div>家長須透過銀行轉賬/ 轉數快(FPS)/ 或本站提供之其他形式代繳交行政費用, 請務必保留收條並
                                        將之拍下或掃瞄留底, 並致電聯絡TutorCloud 師魂 職員以為個案編號進行核實 。</div>
                                </li>
                                <li>特別情況<div>假如在首兩周任何原因而沒有完成應有補習日數，亦會根據原定補習日數為準則收取費用。註：
                                        原定補習日數是首兩周內應有之所有堂數，學生或導師因任何理由缺課導致首月上課日數減少
                                        ，例如公眾假期，病假等，本公司將會順延繳費日期而不會減收費用。相反，學生與導師增加堂
                                        數的話，也不會增加費用。導師與本公司職員電話確認接受補習個案後，因任何事故決定取消補
                                        習，手續費為$200，亦必須於補習首堂開始48小時之前致電我們確認取消個案，否則本公司將收
                                        取原定之行政費。若家長於首兩星期內*因私人理由*而取消補習，我們會向導師收取已上課堂
                                        一半學費。如有任何由家長提出之堂數更改或個案取消，必須於*家長/學生提出後* 24小時內
                                        以電話聯絡我們，若未經本公司確認，導師即使已經離職，但仍雖繳付有關之行政費。</div>
                                </li>
                                <li>取消補習後安排<div>任何一方取消補習後，除非經TutorCloud 師魂再次介紹，否則導師必須承諾在六個月之內不能
                                        向該學生提供相同或相似的補習服務。導師亦不能轉介該學生之資料予第三者及轉介其他導師
                                        之資料予該學生，若發現導師未有繳付行政費用而為該學生提供補習服務及上述轉介資料之情
                                        況，本公司必從正常之法律途徑追討其行政費及附加費$2000，另外亦保留收取文件送遞、賬
                                        單、蒐集證據之所有費用。無論於TutorCloud 師魂提供介紹前或後而經其他任何途徑獲得該學
                                        生之介紹或與學生直接接洽情況下，導師亦不能為該學生提供補習服務。而於任何情況下，若導
                                        師為該學生提供相同或相似的補習服務而沒有經書面通知本公司，即時需要繳付上述之所有費
                                        用。 註:
                                        該學生是指該學生及其家庭之任何學生或該學生相同地址之任何學生。<br>當你表示同意及遵守這份合約，這代表你能夠理解這份合約的內容及有正常的判斷力去作出決
                                        定。若果你不同意本公司之守則，請不要登記使用該項服務。本站有權停止提供服務給任何導
                                        師。</div>
                                </li>
                                <li>相同學生分科補習的處理方法<div>如學生在找TutorCloud 師魂時已表明需要分科補習時，行政費將以兩星期總課堂數量去收取。
                                        即如果學生需要兩科補習，每星期共上兩課，將收取兩星期，共四課學費為行政費。</div>
                                    <div></div>
                                </li>
                            </ol>
                        </div>

                    </li>

                </ul>

                <a href="javascript:void(0);" class="agree-terms-btn">同意以上條款</a>


            </div>


            <?php

if($_POST)
{
    $email=$_POST['email'];
    $login_password=$_POST['login_password'];  
    $chi_name = $_POST['chi-name'];
    $eng_name = $_POST['eng-name'];
    $nick_name = $_POST['nick-name'];
    $whatsapp_tel=$_POST['whatsapp-tel'];
    $born_year=$_POST['born_year'];
    $gender=$_POST['gender'];
    $occupation=$_POST['occupation'];
    $living_area=$_POST['living_area'];
   
   
    $bac_degree=$_POST['bac-degree'];
    $other_university=$_POST['other-university'];


    $tutor_level=$_POST['tutor-level'];
    $diploma = $_POST['diploma'];
    $tutor_year=$_POST['tutor-year'];
    $u_major =$_POST['u-major'];
    $u_minor =$_POST['u-minor'];
    $s_school = $_POST['s-school'];
    $past_exam = $_POST['past-exam'];
    $dse_sub_1 = $_POST['dse-sub-1'];
    $dse_sub_2 = $_POST['dse-sub-2'];
    $dse_sub_3 = $_POST['dse-sub-3'];
    $dse_sub_4 = $_POST['dse-sub-4'];
    $dse_sub_5 = $_POST['dse-sub-5'];
    $dse_sub_6 = $_POST['dse-sub-6'];
    $dse_sub_7 = $_POST['dse-sub-7'];
    $dse_sub_8 = $_POST['dse-sub-8'];
    $dse_sub_9 = $_POST['dse-sub-9'];
    $dse_sub_10 = $_POST['dse-sub-10'];
    $dse_sub_11 = $_POST['dse-sub-11'];
    $dse_sub_12 = $_POST['dse-sub-12'];
    $dse_sub_13 = $_POST['dse-sub-13'];
    $dse_sub_14 = $_POST['dse-sub-14'];
    $dse_sub_15 = $_POST['dse-sub-15'];
    $dse_sub_16 = $_POST['dse-sub-16'];
    $dse_sub_17 = $_POST['dse-sub-17'];
    $dse_sub_18 = $_POST['dse-sub-18'];
    $dse_sub_19 = $_POST['dse-sub-19'];
    $dse_sub_20 = $_POST['dse-sub-20'];
    $dse_sub_21 = $_POST['dse-sub-21'];
    $dse_sub_22 = $_POST['dse-sub-22'];
    $other_subject_1 = $_POST['other-subject-1'];
    $other_subject_2 = $_POST['other-subject-2'];
    $other_subject_3 = $_POST['other-subject-3'];
    $other_subject_4 = $_POST['other-subject-4'];
    $other_subject_5 = $_POST['other-subject-5'];
    $other_subject_6 = $_POST['other-subject-6'];
    $other_subject_7 = $_POST['other-subject-7'];
    $other_subject_8 = $_POST['other-subject-8'];
    $other_subject_9 = $_POST['other-subject-9'];
    $other_subject_10 = $_POST['other-subject-10'];

    $other_subject_1_grade = $_POST['other-subject-1-grade'];
    $other_subject_2_grade = $_POST['other-subject-2-grade'];
    $other_subject_3_grade = $_POST['other-subject-3-grade'];
    $other_subject_4_grade = $_POST['other-subject-4-grade'];
    $other_subject_5_grade = $_POST['other-subject-5-grade'];
    $other_subject_6_grade = $_POST['other-subject-6-grade'];
    $other_subject_7_grade = $_POST['other-subject-7-grade'];
    $other_subject_8_grade = $_POST['other-subject-8-grade'];
    $other_subject_9_grade = $_POST['other-subject-9-grade'];
    $other_subject_10_grade = $_POST['other-subject-10-grade'];

    $exam_lang=$_POST['exam-lang'];
    $other_cert= $_POST['other-cert'];
    //proof1
    //proof2
    $self_intro=$_POST['self-intro'];
    $t_subjects_kin=$_POST['t-subjects-kin']; //array
    $t_subjects_kin_value_other=$_POST['t-subjects-kin-value-other'];
    $t_subjects_pri=$_POST['t-subjects-pri'];//array
    $t_subjects_pri_value_other=$_POST['t-subjects-pri-value-other'];
    $t_subjects_f13=$_POST['t-subjects-f13'];//array  
    $t_subjects_f13_value_other=$_POST['t-subjects-f13-value-other'];  
    $t_subjects_f46=$_POST['t-subjects-f46'];//array  
    $t_subjects_f46_value_other=$_POST['t-subjects-f46-value-other']; 
  
    // $t_subjects_ib=$_POST['t-subjects-ib'];//array  
    // $t_subjects_ib_value_other=$_POST['t-subjects-ib-value-other'];

    // $t_subjects_gceal=$_POST['t-subjects-gceal'];//array  
    // $t_subjects_gceal_value_other=$_POST['t-subjects-gceal-value-other'];
   
    // $t_subjects_igcse=$_POST['t-subjects-igcse'];//array  
    // $t_subjects_igcse_value_other=$_POST['t-subjects-igcse-value-other'];

    // $t_subjects_sat=$_POST['t-subjects-sat'];//array  
    // $t_subjects_sat_value_other=$_POST['t-subjects-sat-value-other'];
 
    // $t_subjects_sat=$_POST['t-subjects-sat'];//array  
    // $t_subjects_sat_value_other=$_POST['t-subjects-sat-value-other'];
 
    // $t_subjects_music=$_POST['t-subjects-music'];//array  
    // $t_subjects_music_value_other=$_POST['t-subjects-music-value-other'];
 
    $lesson_lang=$_POST['lesson-lang'];

    $class_area = $_POST['class-area'];
    $t_style = $_POST['t-style'];
    $lowest_salary = $_POST['lowest-salary'];
    
    
    // echo $t_subjects_music_value_other;
 

    $post_title = $nick_name ?  $chi_name.' ('.$nick_name.' '.$eng_name.')' : $chi_name.' ('.$eng_name.')';
    $post_id = wp_insert_post(array (
        'post_type' => 'tutor',
        'post_title' => $post_title,
        'post_status' => 'publish',
        'comment_status' => 'closed',   // if you prefer
        'ping_status' => 'closed',      // if you prefer
    ));
    
    if ($post_id) {

        $tutor_id = 'T'.substr(date('Y'),2,2).str_pad($post_id, 5, '0', STR_PAD_LEFT);
        add_post_meta($post_id, 'tutor_id', $tutor_id);
        add_post_meta($post_id, 'email', $email);
        add_post_meta($post_id, 'enable', 'no');
        add_post_meta($post_id, 'login_password', $login_password);
        add_post_meta($post_id, 'chi_name', $chi_name);
        add_post_meta($post_id, 'eng_name', $eng_name);
        add_post_meta($post_id, 'nick_name', $nick_name);
        add_post_meta($post_id, 'whatsapp_tel', $whatsapp_tel);
        add_post_meta($post_id, 'born_year', $born_year);
        add_post_meta($post_id, 'gender', $gender);
        add_post_meta($post_id, 'occupation', $occupation);
        add_post_meta($post_id, 'living_area', $living_area);
        add_post_meta($post_id, 'bac_degree', $bac_degree);
        add_post_meta($post_id, 'other_university', $other_university);
        add_post_meta($post_id, 'tutor_level', $tutor_level);
        add_post_meta($post_id, 'diploma', $diploma);
        add_post_meta($post_id, 'tutor_year', $tutor_year);
        add_post_meta($post_id, 'u_major', $u_major);
        add_post_meta($post_id, 'u_minor', $u_minor);
        add_post_meta($post_id, 's_school', $s_school);
        add_post_meta($post_id, 'past_exam', $past_exam);
        add_post_meta($post_id, 'dse_sub_1', $dse_sub_1);
        add_post_meta($post_id, 'dse_sub_2', $dse_sub_2);
        add_post_meta($post_id, 'dse_sub_3', $dse_sub_3);
        add_post_meta($post_id, 'dse_sub_4', $dse_sub_4);
        add_post_meta($post_id, 'dse_sub_5', $dse_sub_5);
        add_post_meta($post_id, 'dse_sub_6', $dse_sub_6);
        add_post_meta($post_id, 'dse_sub_7', $dse_sub_7);
        add_post_meta($post_id, 'dse_sub_8', $dse_sub_8);
        add_post_meta($post_id, 'dse_sub_9', $dse_sub_9);
        add_post_meta($post_id, 'dse_sub_10', $dse_sub_10);
        add_post_meta($post_id, 'dse_sub_11', $dse_sub_11);
        add_post_meta($post_id, 'dse_sub_12', $dse_sub_12);
        add_post_meta($post_id, 'dse_sub_13', $dse_sub_13);
        add_post_meta($post_id, 'dse_sub_14', $dse_sub_14);
        add_post_meta($post_id, 'dse_sub_15', $dse_sub_15);
        add_post_meta($post_id, 'dse_sub_16', $dse_sub_16);
        add_post_meta($post_id, 'dse_sub_17', $dse_sub_17);
        add_post_meta($post_id, 'dse_sub_18', $dse_sub_18);
        add_post_meta($post_id, 'dse_sub_19', $dse_sub_19);
        add_post_meta($post_id, 'dse_sub_20', $dse_sub_20);
        add_post_meta($post_id, 'dse_sub_21', $dse_sub_21);
        add_post_meta($post_id, 'dse_sub_22', $dse_sub_22);
        add_post_meta($post_id, 'other_subject_1', $other_subject_1);
        add_post_meta($post_id, 'other_subject_2', $other_subject_2);
        add_post_meta($post_id, 'other_subject_3', $other_subject_3);
        add_post_meta($post_id, 'other_subject_4', $other_subject_4);
        add_post_meta($post_id, 'other_subject_5', $other_subject_5);
        add_post_meta($post_id, 'other_subject_6', $other_subject_6);
        add_post_meta($post_id, 'other_subject_7', $other_subject_7);
        add_post_meta($post_id, 'other_subject_8', $other_subject_8);
        add_post_meta($post_id, 'other_subject_9', $other_subject_9);
        add_post_meta($post_id, 'other_subject_10', $other_subject_10);
        add_post_meta($post_id, 'other_subject_1_grade', $other_subject_1_grade);
        add_post_meta($post_id, 'other_subject_2_grade', $other_subject_2_grade);
        add_post_meta($post_id, 'other_subject_3_grade', $other_subject_3_grade);
        add_post_meta($post_id, 'other_subject_4_grade', $other_subject_4_grade);
        add_post_meta($post_id, 'other_subject_5_grade', $other_subject_5_grade);
        add_post_meta($post_id, 'other_subject_6_grade', $other_subject_6_grade);
        add_post_meta($post_id, 'other_subject_7_grade', $other_subject_7_grade);
        add_post_meta($post_id, 'other_subject_8_grade', $other_subject_8_grade);
        add_post_meta($post_id, 'other_subject_9_grade', $other_subject_9_grade);
        add_post_meta($post_id, 'other_subject_10_grade', $other_subject_10_grade);
        add_post_meta($post_id, 'exam_lang', $exam_lang);
        add_post_meta($post_id, 'other_cert', $other_cert);
        //proof1
        //proof2
        add_post_meta($post_id, 'self_intro', $self_intro);
        add_post_meta($post_id, 't_subjects_kin', $t_subjects_kin);
        add_post_meta($post_id, 't_subjects_kin_value_other', $t_subjects_kin_value_other);
        add_post_meta($post_id, 't_subjects_pri', $t_subjects_pri);
        add_post_meta($post_id, 't_subjects_pri_value_other', $t_subjects_pri_value_other);
        add_post_meta($post_id, 't_subjects_f13', $t_subjects_f13);
        add_post_meta($post_id, 't_subjects_f13_value_other', $t_subjects_f13_value_other);
        add_post_meta($post_id, 't_subjects_f46', $t_subjects_f46);
        add_post_meta($post_id, 't_subjects_f46_value_other', $t_subjects_f46_value_other);
        add_post_meta($post_id, 't_subjects_ib', $t_subjects_ib);
        add_post_meta($post_id, 't_subjects_ib_value_other', $t_subjects_ib_value_other);
        add_post_meta($post_id, 't_subjects_gceal', $t_subjects_gceal);
        add_post_meta($post_id, 't_subjects_gceal_value_other', $t_subjects_gceal_value_other);
        add_post_meta($post_id, 't_subjects_igcse', $t_subjects_igcse);
        add_post_meta($post_id, 't_subjects_igcse_value_other', $t_subjects_igcse_value_other);
        add_post_meta($post_id, 't_subjects_sat', $t_subjects_sat);
        add_post_meta($post_id, 't_subjects_sat_value_other', $t_subjects_sat_value_other);
        add_post_meta($post_id, 't_subjects_music', $t_subjects_music);
        add_post_meta($post_id, 't_subjects_music_value_other', $t_subjects_music_value_other);
        add_post_meta($post_id, 'lesson_lang', $lesson_lang);
        add_post_meta($post_id, 'class_area', $class_area);
        add_post_meta($post_id, 't_style', $t_style);
        add_post_meta($post_id, 'lowest_salary', $lowest_salary);





        add_post_meta($post_id, '_tutor_id', 'field_61bceeeedd962');
        add_post_meta($post_id, '_email', 'field_61ab211fa95fc');
        add_post_meta($post_id, '_enable', 'field_620d662e93061');
        add_post_meta($post_id, '_login_password', 'field_61ab2126a95fd');
        add_post_meta($post_id, '_chi_name', 'field_61ab214da95fe');
        add_post_meta($post_id, '_eng_name', 'field_61ab215ba95ff');
        add_post_meta($post_id, '_nick_name', 'field_61ab2160a9600');
        add_post_meta($post_id, '_whatsapp_tel', 'field_61ab2167a9601');
        add_post_meta($post_id, '_born_year', 'field_61ab216fa9602');
        add_post_meta($post_id, '_gender', 'field_61ab2176a9603');
        add_post_meta($post_id, '_occupation', 'field_61ab21f8a9604');
        add_post_meta($post_id, '_living_area', 'field_61d5f93e77d7b');
        add_post_meta($post_id, '_bac_degree', 'field_61ab222ca9605');
        add_post_meta($post_id, '_other_university', 'field_6214080cc7324');
        
        add_post_meta($post_id, '_tutor_level', 'field_61ab2285d19fd');
        add_post_meta($post_id, '_diploma', 'field_61ab22d56bfb2');
        add_post_meta($post_id, '_tutor_year', 'field_61ab233b6bfb3');
        add_post_meta($post_id, '_u_major', 'field_61ab237a6bfb4');
        add_post_meta($post_id, '_u_minor', 'field_61ab23a66bfb5');
        add_post_meta($post_id, '_s_school', 'field_61ab23b16bfb6');
        add_post_meta($post_id, '_past_exam', 'field_61d6a274dc2b0');
        add_post_meta($post_id, '_dse_sub_1', 'field_61ab24416bfb7');
        add_post_meta($post_id, '_dse_sub_2', 'field_61ab2ac27ea90');
        add_post_meta($post_id, '_dse_sub_3', 'field_61ab2ac37ea91');
        add_post_meta($post_id, '_dse_sub_4', 'field_61ab2ac57ea92');
        add_post_meta($post_id, '_dse_sub_5', 'field_61ab2ac67ea93');
        add_post_meta($post_id, '_dse_sub_6', 'field_61ab2ac77ea94');
        add_post_meta($post_id, '_dse_sub_7', 'field_61ab2ac87ea95');
        add_post_meta($post_id, '_dse_sub_8', 'field_61ab2ac97ea96');
        add_post_meta($post_id, '_dse_sub_9', 'field_61ab2aca7ea97');
        add_post_meta($post_id, '_dse_sub_10', 'field_61ab2acc7ea98');
        add_post_meta($post_id, '_dse_sub_11', 'field_61ab2acd7ea99');
        add_post_meta($post_id, '_dse_sub_12', 'field_61ab2ace7ea9a');
        add_post_meta($post_id, '_dse_sub_13', 'field_61ab2acf7ea9b');
        add_post_meta($post_id, '_dse_sub_14', 'field_61ab2ad07ea9c');
        add_post_meta($post_id, '_dse_sub_15', 'field_61ab2ad17ea9d');
        add_post_meta($post_id, '_dse_sub_16', 'field_61ab2ad27ea9e');
        add_post_meta($post_id, '_dse_sub_17', 'field_61ab2ad57ea9f');
        add_post_meta($post_id, '_dse_sub_18', 'field_61ab2ad77eaa0');
        add_post_meta($post_id, '_dse_sub_19', 'field_61ab2ad87eaa1');
        add_post_meta($post_id, '_dse_sub_20', 'field_61ab2ad97eaa2');
        add_post_meta($post_id, '_dse_sub_21', 'field_61ab2ada7eaa3');
        add_post_meta($post_id, '_dse_sub_22', 'field_61ab2adb7eaa4');
        add_post_meta($post_id, '_other_subject_1', 'field_61e6bccd1fbac');
        add_post_meta($post_id, '_other_subject_2', 'field_61e6bcee1fbad');
        add_post_meta($post_id, '_other_subject_3', 'field_61e6bcef1fbae');
        add_post_meta($post_id, '_other_subject_4', 'field_61e6bcf21fbaf');
        add_post_meta($post_id, '_other_subject_5', 'field_61e6bcf31fbb0');
        add_post_meta($post_id, '_other_subject_6', 'field_61e6bcf51fbb1');
        add_post_meta($post_id, '_other_subject_7', 'field_61e6bcf61fbb2');
        add_post_meta($post_id, '_other_subject_8', 'field_61e6bcf81fbb3');
        add_post_meta($post_id, '_other_subject_9', 'field_61e6bcfa1fbb4');
        add_post_meta($post_id, '_other_subject_10', 'field_61e6bcfb1fbb5');
        add_post_meta($post_id, '_other_subject_1_grade', 'field_61e6bd031fbb6');
        add_post_meta($post_id, '_other_subject_2_grade', 'field_61e6bd111fbb7');
        add_post_meta($post_id, '_other_subject_3_grade', 'field_61e6bd191fbb8');
        add_post_meta($post_id, '_other_subject_4_grade', 'field_61e6bd381fbba');
        add_post_meta($post_id, '_other_subject_5_grade', 'field_61e6bd261fbb9');
        add_post_meta($post_id, '_other_subject_6_grade', 'field_61e6bd601fbbb');
        add_post_meta($post_id, '_other_subject_7_grade', 'field_61e6bd691fbbc');
        add_post_meta($post_id, '_other_subject_8_grade', 'field_61e6bd751fbbd');
        add_post_meta($post_id, '_other_subject_9_grade', 'field_61e6bd7f1fbbe');
        add_post_meta($post_id, '_other_subject_10_grade', 'field_61e6bd8a1fbbf');
        add_post_meta($post_id, '_exam_lang', 'field_61ab24f06bfe2');
        add_post_meta($post_id, '_other_cert', 'field_61ab25216bfe3');
        add_post_meta($post_id, '_proof1', 'field_61ab25406bfe4');
        add_post_meta($post_id, '_proof2', 'field_61ab25466bfe5');
        add_post_meta($post_id, '_self_intro', 'field_61ab256a0508d');
        add_post_meta($post_id, '_t_subjects_kin', 'field_61ab257d0508e');
        add_post_meta($post_id, '_t_subjects_kin_value_other', 'field_61ab26fc05091');
        add_post_meta($post_id, '_t_subjects_pri', 'field_61ab26da05090');
        add_post_meta($post_id, '_t_subjects_pri_value_other', 'field_61ab270505092');
        add_post_meta($post_id, '_t_subjects_f13', 'field_61ab271205093');
        add_post_meta($post_id, '_t_subjects_f13_value_other', 'field_61ab274ea9e64');
        add_post_meta($post_id, '_t_subjects_f46', 'field_61ab2758a9e65');
        add_post_meta($post_id, '_t_subjects_f46_value_other', 'field_61ab277da9e67');
        // add_post_meta($post_id, '_t_subjects_ib', '');
        // add_post_meta($post_id, '_t_subjects_ib_value_other', '');
        // add_post_meta($post_id, '_t_subjects_gceal', '');
        // add_post_meta($post_id, '_t_subjects_gceal_value_other', '');
        // add_post_meta($post_id, '_t_subjects_igcse', '');
        // add_post_meta($post_id, '_t_subjects_igcse_value_other', '');
        // add_post_meta($post_id, '_t_subjects_sat', '');
        // add_post_meta($post_id, '_t_subjects_sat_value_other', '');
        // add_post_meta($post_id, '_t_subjects_music', '');
        // add_post_meta($post_id, '_t_subjects_music_value_other', '');
        add_post_meta($post_id, '_lesson_lang', 'field_61d6a81b04597');
        add_post_meta($post_id, '_class_area', 'field_61abdf68ad377');
        add_post_meta($post_id, '_t_style', 'field_61abe0cf22470');
        add_post_meta($post_id, '_lowest_salary', 'field_61abe28bb2739');



        $to='hktutorcloud@gmail.com';
        // $to='krisfk@gmail.com';

        $subject='新導師'.$tutor_id.'檔案已建立。';
        $message='新導師<a target="_blank" href="'.get_permalink($post_id).'">'.$tutor_id.'</a>檔案已建立。<br>請按上面連結檢查導師資料，再enable該導師的使用權限。';
    

        wp_mail( $to, $subject, $message );

        // $tutor_id = 'T'.
        // $post_id = str_pad($number, 2, '0', STR_PAD_LEFT);


        
    }
    
//  print_r($_FILES);

            if(!empty($_FILES))
            {
                
                if($_FILES["proof1"]['size'])
                {

                $wordpress_upload_dir = wp_upload_dir();

                $new_file_path = $wordpress_upload_dir['path'] . '/' . $_FILES["proof1"]["name"];

                    $i=0;
                while( file_exists( $new_file_path ) ) {
                    $i++;
                    $new_file_path = $wordpress_upload_dir['path'] . '/' . $i . '_' . $_FILES["proof1"]["name"];
                }
                
                if (move_uploaded_file($_FILES["proof1"]["tmp_name"], $new_file_path)) {

                    $upload_id = wp_insert_attachment( array(
                    'guid'           => $new_file_path, 
                    'post_mime_type' => 'image/*',
                    //$_FILES["file_upload"]["tmp_name"],
                    'post_title'     => preg_replace( '/\.[^.]+$/', '', $_FILES["proof1"]["name"] ),
                    'post_content'   => '',
                    'post_status'    => 'inherit'
                ), $new_file_path );
                require_once( ABSPATH . 'wp-admin/includes/image.php' );

                wp_update_attachment_metadata( $upload_id, wp_generate_attachment_metadata( $upload_id, $new_file_path ) );

                // echo $post_id;

                update_field( 'proof1', $upload_id, $post_id );
            
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }


                
            }
            

                
            if($_FILES["proof2"]['size'])
            {

            $wordpress_upload_dir = wp_upload_dir();

            $new_file_path = $wordpress_upload_dir['path'] . '/' . $_FILES["proof2"]["name"];

                $i=0;
            while( file_exists( $new_file_path ) ) {
                $i++;
                $new_file_path = $wordpress_upload_dir['path'] . '/' . $i . '_' . $_FILES["proof2"]["name"];
            }
            
            if (move_uploaded_file($_FILES["proof2"]["tmp_name"], $new_file_path)) {

                $upload_id = wp_insert_attachment( array(
                'guid'           => $new_file_path, 
                'post_mime_type' => 'image/*',
                //$_FILES["file_upload"]["tmp_name"],
                'post_title'     => preg_replace( '/\.[^.]+$/', '', $_FILES["proof2"]["name"] ),
                'post_content'   => '',
                'post_status'    => 'inherit'
            ), $new_file_path );
            require_once( ABSPATH . 'wp-admin/includes/image.php' );

            wp_update_attachment_metadata( $upload_id, wp_generate_attachment_metadata( $upload_id, $new_file_path ) );

            // echo $post_id;

            update_field( 'proof2', $upload_id, $post_id );
        
            } else {
                echo "Sorry, there was an error uploading your file.";
            }


            
        }



}

}
?>




            <form action="" method="post" enctype="multipart/form-data">
                <div class="step-content step-content-2">
                    <h3 class="mb-4">個人資料</h3>
                    <h5>登入資料</h5>
                    <table class="mt-3">
                        <tr>
                            <td><label for="email">登入電郵*</label></td>
                            <td><input id="email" name="email" type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label for="confirm_email">確認登入電郵*</label></td>
                            <td><input id="confirm_email" name="confirm_email" type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label for="login_password">登入密碼*</label></td>
                            <td><input id="login_password" name="login_password" type="password" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td><label for="confirm_login_password">確認登入密碼*</label></td>
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
                            <td><input id="chi-name" name="chi-name" type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label for="eng-name">英文全名 *</label></td>
                            <td><input id="eng-name" name="eng-name" type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label for="nick-name">別名</label></td>
                            <td><input id="nick-name" name="nick-name" type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label for="whatsapp-tel"> WhatsApp 電話號碼 *</label></td>
                            <td><input id="whatsapp-tel" name="whatsapp-tel" type="number" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label for="confirm-whatsapp-tel"> 確認 WhatsApp 電話號碼 * </label></td>
                            <td><input id="confirm-whatsapp-tel" name="confirm-whatsapp-tel" type="number"
                                    class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label for="born_year"> 出生年份*</label></td>
                            <td><input id="born_year" name="born_year" type="number" class="form-control"></td>
                        </tr>
                        <tr>
                            <td> <label for=""> 性別*</label></td>
                            <td>
                                <label><input type="radio" name="gender" value="男">男</label>
                                <label><input type="radio" name="gender" value="女">女</label>

                            </td>
                        </tr>
                        <tr>
                            <td> <label for="occupation"> 職業</label></td>
                            <td>
                                <select id="occupation" name="occupation" class="form-select" aria-label="">

                                    <option value="" selected>選擇</option>
                                    <option value="大學生">大學生</option>
                                    <option value="全職教師">全職教師</option>
                                    <option value="全職教學助理">全職教學助理</option>
                                    <option value="全職補習老師">全職補習老師</option>
                                    <option value="退休教師">退休教師</option>
                                    <option value="其他在職人仕">其他在職人仕</option>

                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td><label for="living-area">居住地區 *</label></td>
                            <td> <select id="living-area" name="living_area" class="form-select" aria-label="">
                                    <option value="">選擇</option>

                                    <optgroup label="香港島">
                                        <option value="中半山">中半山</option>
                                        <option value="薄扶林">薄扶林</option>
                                        <option value="中上環">中上環</option>
                                        <option value="西環">西環</option>
                                        <option value="灣仔">灣仔</option>
                                        <option value="銅鑼灣">銅鑼灣</option>
                                        <option value="跑馬地">跑馬地</option>
                                        <option value="北角">北角</option>
                                        <option value="鰂魚涌">鰂魚涌</option>
                                        <option value="太古">太古</option>
                                        <option value="筲箕灣">筲箕灣</option>
                                        <option value="西灣河">西灣河</option>
                                        <option value="柴灣">柴灣</option>
                                        <option value="小西灣">小西灣</option>
                                        <option value="香港仔">香港仔</option>
                                        <option value="鴨利洲">鴨利洲</option>
                                        <option value="赤柱">赤柱</option>
                                    </optgroup>
                                    <optgroup label="九龍區">
                                        <option value="美孚">美孚</option>
                                        <option value="荔枝角">荔枝角</option>
                                        <option value="長沙灣">長沙灣</option>
                                        <option value="深水涉">深水涉</option>
                                        <option value="大角咀">大角咀</option>
                                        <option value="旺角">旺角</option>
                                        <option value="何文田">何文田</option>
                                        <option value="油麻地">油麻地</option>
                                        <option value="佐敦">佐敦</option>
                                        <option value="尖沙咀">尖沙咀</option>
                                        <option value="土瓜灣">土瓜灣</option>
                                        <option value="紅磡">紅磡</option>
                                        <option value="石硤尾">石硤尾</option>
                                        <option value="九龍塘">九龍塘</option>
                                        <option value="樂富">樂富</option>
                                        <option value="慈雲山">慈雲山</option>
                                        <option value="黃大仙">黃大仙</option>
                                        <option value="鑽石山">鑽石山</option>
                                        <option value="新蒲崗">新蒲崗</option>
                                        <option value="彩虹">彩虹</option>
                                        <option value="牛池灣">牛池灣</option>
                                        <option value="牛頭角">牛頭角</option>
                                        <option value="九龍灣">九龍灣</option>
                                        <option value="秀茂坪">秀茂坪</option>
                                        <option value="觀塘">觀塘</option>
                                        <option value="藍田">藍田</option>
                                        <option value="油塘">油塘</option>
                                        <option value="九龍城">九龍城</option>
                                    </optgroup>
                                    <optgroup label="新界區">
                                        <option value="將軍澳">將軍澳</option>
                                        <option value="西貢">西貢</option>
                                        <option value="荃灣">荃灣</option>
                                        <option value="深井">深井</option>
                                        <option value="馬灣">馬灣</option>
                                        <option value="葵涌">葵涌</option>
                                        <option value="荔景">荔景</option>
                                        <option value="葵芳">葵芳</option>
                                        <option value="青衣">青衣</option>
                                        <option value="大圍">大圍</option>
                                        <option value="沙田">沙田</option>
                                        <option value="沙田市中心">沙田市中心</option>
                                        <option value="小瀝源">小瀝源</option>
                                        <option value="火炭">火炭</option>
                                        <option value="馬鞍山">馬鞍山</option>
                                        <option value="大埔">大埔</option>
                                        <option value="粉嶺">粉嶺</option>
                                        <option value="上水">上水</option>
                                        <option value="元朗">元朗</option>
                                        <option value="天水圍">天水圍</option>
                                        <option value="屯門">屯門</option>
                                        <option value="青龍頭">青龍頭</option>
                                        <option value="東涌">東涌</option>
                                        <option value="離島">離島</option>
                                    </optgroup>


                                </select></td>
                        </tr>



                    </table>

                    <div class="next-prev-btn-div">
                        <a href="javascript:void(0);" class="prev-step-btn me-3">上一步</a>


                        <a href="javascript:void(0);" class="next-step-btn">下一步</a>
                    </div>
                </div>


                <div class="step-content step-content-3">

                    <h3 class="mb-4">學歷資料</h3>
                    <table>
                        <tr>
                            <td><label for="bac-degree">就讀大學 (學士學位課程) *
                                </label></td>
                            <td> <select id="bac-degree" name="bac-degree" class="form-select" aria-label="">

                                    <option value="" selected>選擇</option>
                                    <option value="香港大學">香港大學</option>
                                    <option value="香港中文大學">香港中文大學</option>
                                    <option value="香港科技大學">香港科技大學</option>
                                    <option value="香港理工大學">香港理工大學</option>
                                    <option value="香港城市大學">香港城市大學</option>
                                    <option value="香港浸會大學">香港浸會大學</option>
                                    <option value="香港都會大學">香港都會大學</option>
                                    <option value="香港恒生大學">香港恒生大學</option>
                                    <option value="嶺南大學">嶺南大學</option>
                                    <option value="其他大學">其他大學</option>

                                </select></td>
                        </tr>
                        <tr>
                            <td><label for="other-university">其他大學
                                </label></td>
                            <td>
                                <input type="text" id="other-university" name="other-university" class="form-control">
                            </td>
                        </tr>

                        <tr>
                            <td> <label for="tutor-level">教育程度 *
                                </label></td>
                            <td><select id="tutor-level" name="tutor-level" class="form-select" aria-label="">
                                    <option value="" selected>選擇</option>
                                    <option value="大學生">大學生</option>
                                    <option value="學士畢業">學士畢業</option>
                                    <option value="碩士生">碩士生</option>
                                    <option value="碩士畢業">碩士畢業</option>
                                    <option value="博士生">博士生</option>
                                    <option value="博士畢業">博士畢業</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td><label for="">是否擁有教育文憑 *
                                </label></td>
                            <td> <label><input type="radio" name="diploma" value="是">是</label>
                                <label><input type="radio" name="diploma" value="否">否</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="tutor-year">年級 (2021-2022年度) *
                                </label>
                            </td>
                            <td>
                                <select id="tutor-year" name="tutor-year" class="form-select" aria-label="">
                                    <option value="" selected>選擇</option>
                                    <option value="Year 1">Year 1</option>
                                    <option value="Year 2">Year 2</option>
                                    <option value="Year 3">Year 3</option>
                                    <option value="Year 4">Year 4</option>
                                    <option value="Year 5">Year 5</option>
                                    <option value="Year 6">Year 6</option>
                                    <option value="已畢業">已畢業</option>

                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>

                                <label for="u-major">大學主修科目(中文) *</label>
                            </td>
                            <td><input type="text" id="u-major" name="u-major" class="form-control"></td>
                        </tr>

                        <tr>
                            <td> <label for="u-minor">大學副修科目(中文)
                                </label>
                            </td>
                            <td><input type="text" id="u-minor" name="u-minor" class="form-control"></td>
                        </tr>
                        <tr>
                            <td> <label for="s-school">曾就讀中學(中文) *
                                </label>
                            </td>
                            <td><input type="text" id="s-school" name="s-school" class="form-control"></td>
                        </tr>
                        <tr>
                            <td> <label for="past-exam">曾參加公開試 *
                                </label>
                            </td>
                            <td>
                                <div class="past-exam-group">
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="HKDSE"
                                            id="past-exam-value-1" name="past-exam[]">
                                        <label class="form-check-label" for="past-exam-value-1">
                                            HKDSE
                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="HKCEE"
                                            id="past-exam-value-2" name="past-exam[]">
                                        <label class="form-check-label" for="past-exam-value-2">
                                            HKCEE
                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="HKALE"
                                            id="past-exam-value-3" name="past-exam[]">
                                        <label class="form-check-label" for="past-exam-value-3">
                                            HKALE
                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="IB"
                                            id="past-exam-value-4" name="past-exam[]">
                                        <label class="form-check-label" for="past-exam-value-4">
                                            IB
                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="GCE AL"
                                            id="past-exam-value-5" name="past-exam[]">
                                        <label class="form-check-label" for="past-exam-value-5">
                                            GCE AL

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="IGCSE"
                                            id="past-exam-value-6" name="past-exam[]">
                                        <label class="form-check-label" for="past-exam-value-6">
                                            IGCSE
                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="SAT"
                                            id="past-exam-value-7" name="past-exam[]">
                                        <label class="form-check-label" for="past-exam-value-7">
                                            SAT
                                        </label>
                                    </div>
                                </div>
                            </td>
                        </tr>

                    </table>

                    <table class="mt-4 dse-big-radio-table">
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
                        <tr>
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

                        <?php
                        
                        for($i=1;$i<=10;$i++)
                        {
                            ?>
                        <tr>
                            <td class="pe-3"><label for="other-subject-<?php echo $i?>" class="mb-2">其他科目
                                    <?php echo $i?></label><input id="other-subject-<?php echo $i?>" type="text"
                                    class="form-control other-subject-input" name="other-subject-<?php echo $i?>">
                            </td>
                            <td colspan="5"><label for="other-subject-<?php echo $i?>-grade"
                                    class="mb-2">成績</label><input id="other-subject-<?php echo $i?>-grade" type="text"
                                    class="form-control other-subject-input" name="other-subject-<?php echo $i?>-grade">
                            </td>
                        </tr>
                        <?php
                        }
                        ?>



                    </table>


                    <table class="mt-4">

                        <tr>
                            <td> <label for="exam-lang"> 應考主要語言 *
                                </label></td>
                            <td>
                                <select id="exam-lang" name="exam-lang" class="form-select" aria-label="">

                                    <option value="" selected>選擇</option>
                                    <option value="中文">中文</option>
                                    <option value="英文">英文</option>


                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="other-cert"> 其他資格 (可填寫ielts/樂器級數等)
                                </label></td>
                            <td>
                                <input id="other-cert" name="other-cert" type="text" class="form-control">
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
                    </table>
                    <div class="next-prev-btn-div">

                        <a href="javascript:void(0);" class="prev-step-btn me-3">上一步</a>


                        <a href="javascript:void(0);" class="next-step-btn">下一步</a>
                    </div>

                </div>
                <div class="step-content step-content-4">

                    <h3 class="mb-4">補習資料</h3>
                    <table>
                        <tr>
                            <td class="align-top"><label for="self-intro">自我介紹 (50字或以上) *
                                </label></td>
                            <td><textarea id="self-intro" name="self-intro" class="form-control" rows="4"
                                    cols="50"></textarea></td>
                        </tr>

                    </table>

                    <h5> 可教授科目</h5>

                    <h5 class="subject-list-top d-none">
                        <a href="javascript:void(0);">
                            HKDSE科目列</a>
                    </h5>

                    <div class="subject-list subject-list-hkdse d-block mt-4">
                        <table>
                            <tr>
                                <td colspan="2">

                                    <label for="t-subjects-kin">
                                        <h5> 幼稚園</h5>
                                    </label>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="英語"
                                            id="t-subjects-kin-value-1" name="t-subjects-kin[]">
                                        <label class="form-check-label" for="t-subjects-kin-value-1">
                                            英文
                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="普通話"
                                            id="t-subjects-kin-value-2" name="t-subjects-kin[]">
                                        <label class="form-check-label" for="t-subjects-kin-value-2">
                                            普通話
                                        </label>
                                    </div>

                                    <div class="mt-2 w-100">
                                        <label for="t-subjects-kin-value-other d-inline-block">其他：</label>
                                        <input class="limit-input-w form-control mt-2 d-inline-block"
                                            id="t-subjects-kin-value-other" name="t-subjects-kin-value-other"
                                            type="text">
                                    </div>

                                </td>
                            </tr>


                            <tr>
                                <td colspan="2"><label for="t-subjects-pri">
                                        <h5>小學</h5>
                                    </label>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="全科"
                                            id="t-subjects-pri-value-1" name="t-subjects-pri[]">
                                        <label class="form-check-label" for="t-subjects-pri-value-1">
                                            全科

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="功課輔導"
                                            id="t-subjects-pri-value-2" name="t-subjects-pri[]">
                                        <label class="form-check-label" for="t-subjects-pri-value-2">

                                            功課輔導

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="中文"
                                            id="t-subjects-pri-value-3" name="t-subjects-pri[]">
                                        <label class="form-check-label" for="t-subjects-pri-value-3">

                                            中文

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="英文"
                                            id="t-subjects-pri-value-4" name="t-subjects-pri[]">
                                        <label class="form-check-label" for="t-subjects-pri-value-4">

                                            英文

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="數學"
                                            id="t-subjects-pri-value-5" name="t-subjects-pri[]">
                                        <label class="form-check-label" for="t-subjects-pri-value-5">

                                            數學

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="常識"
                                            id="t-subjects-pri-value-6" name="t-subjects-pri[]">
                                        <label class="form-check-label" for="t-subjects-pri-value-6">

                                            常識

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="普通話"
                                            id="t-subjects-pri-value-7" name="t-subjects-pri[]">
                                        <label class="form-check-label" for="t-subjects-pri-value-7">

                                            普通話

                                        </label>
                                    </div>
                                    <div class="mt-2 w-100">
                                        <label for="t-subjects-pri-value-other d-inline-block">其他：</label>
                                        <input class="limit-input-w form-control mt-2 d-inline-block"
                                            id="t-subjects-pri-value-other" name="t-subjects-pri-value-other"
                                            type="text">
                                    </div>

                                </td>
                            </tr>




                            <tr>
                                <td colspan="2"><label for="t-subjects-f13">
                                        <h5>中學(中一至中三)</h5>
                                    </label>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="全科"
                                            id="t-subjects-f13-value-1" name="t-subjects-f13[]">
                                        <label class="form-check-label" for="t-subjects-f13-value-1">
                                            全科

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="功課輔導"
                                            id="t-subjects-f13-value-2" name="t-subjects-f13[]">
                                        <label class="form-check-label" for="t-subjects-f13-value-2">

                                            功課輔導

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="中文"
                                            id="t-subjects-f13-value-3" name="t-subjects-f13[]">
                                        <label class="form-check-label" for="t-subjects-f13-value-3">

                                            中文

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="英文"
                                            id="t-subjects-f13-value-4" name="t-subjects-f13[]">
                                        <label class="form-check-label" for="t-subjects-f13-value-4">

                                            英文

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="數學"
                                            id="t-subjects-f13-value-5" name="t-subjects-f13[]">
                                        <label class="form-check-label" for="t-subjects-f13-value-5">

                                            數學

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="通識"
                                            id="t-subjects-f13-value-6" name="t-subjects-f13[]">
                                        <label class="form-check-label" for="t-subjects-f13-value-6">

                                            通識

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="物理"
                                            id="t-subjects-f13-value-7" name="t-subjects-f13[]">
                                        <label class="form-check-label" for="t-subjects-f13-value-7">

                                            物理

                                        </label>
                                    </div>



                                    <div>
                                        <input class="form-check-input" type="checkbox" value="化學"
                                            id="t-subjects-f13-value-8" name="t-subjects-f13[]">
                                        <label class="form-check-label" for="t-subjects-f13-value-8">

                                            化學

                                        </label>
                                    </div>

                                    <div>
                                        <input class="form-check-input" type="checkbox" value="生物"
                                            id="t-subjects-f13-value-9" name="t-subjects-f13[]">
                                        <label class="form-check-label" for="t-subjects-f13-value-9">

                                            生物



                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="綜合科學"
                                            id="t-subjects-f13-value-10" name="t-subjects-f13[]">
                                        <label class="form-check-label" for="t-subjects-f13-value-10">

                                            綜合科學


                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="資訊及通訊科技"
                                            id="t-subjects-f13-value-11" name="t-subjects-f13[]">
                                        <label class="form-check-label" for="t-subjects-f13-value-11">

                                            資訊及通訊科技



                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="地理"
                                            id="t-subjects-f13-value-12" name="t-subjects-f13[]">
                                        <label class="form-check-label" for="t-subjects-f13-value-12">


                                            地理



                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="中史"
                                            id="t-subjects-f13-value-13" name="t-subjects-f13[]">
                                        <label class="form-check-label" for="t-subjects-f13-value-13">

                                            中史



                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="西史"
                                            id="t-subjects-f13-value-14" name="t-subjects-f13[]">
                                        <label class="form-check-label" for="t-subjects-f13-value-14">


                                            西史



                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="英國文學"
                                            id="t-subjects-f13-value-15" name="t-subjects-f13[]">
                                        <label class="form-check-label" for="t-subjects-f13-value-15">


                                            英國文學



                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="經濟"
                                            id="t-subjects-f13-value-16" name="t-subjects-f13[]">
                                        <label class="form-check-label" for="t-subjects-f13-value-16">


                                            經濟



                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="企業、會計與財務概論"
                                            id="t-subjects-f13-value-17" name="t-subjects-f13[]">
                                        <label class="form-check-label" for="t-subjects-f13-value-17">


                                            企業、會計與財務概論



                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="普通話"
                                            id="t-subjects-f13-value-18" name="t-subjects-f13[]">
                                        <label class="form-check-label" for="t-subjects-f13-value-18">


                                            普通話



                                        </label>
                                    </div>


                                    <div class="mt-2 w-100">
                                        <label for="t-subjects-f13-value-other">其他：</label>
                                        <input class="limit-input-w form-control mt-2 d-inline-block"
                                            id="t-subjects-f13-value-other" name="t-subjects-f13-value-other"
                                            type="text">
                                    </div>

                                </td>
                            </tr>



                            <tr>
                                <td colspan="2"><label for="t-subjects-f46">
                                        <h5>中學(中四至中六)</h5>
                                    </label>


                                    <div>
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
                                    <!-- <div>
                                        <input class="form-check-input" type="checkbox" value="組合科學：物理 化學"
                                            id="t-subjects-f46-value-12" name="t-subjects-f46[]">
                                        <label class="form-check-label" for="t-subjects-f46-value-12">

                                            組合科學：物理 化學

                                        </label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="組合科學：化學 生物"
                                            id="t-subjects-f46-value-13" name="t-subjects-f46[]">
                                        <label class="form-check-label" for="t-subjects-f46-value-13">

                                            組合科學：化學 生物

                                        </label>
                                    </div> -->
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
                                    </div>



                                    <div class="mt-2 w-100">
                                        <label for="t-subjects-f46-value-other">其他：</label>
                                        <input class="limit-input-w form-control mt-2 d-inline-block"
                                            id="t-subjects-f46-value-other" name="t-subjects-f46-value-other"
                                            type="text">
                                    </div>

                                </td>
                            </tr>


                        </table>
                    </div>

                    <h5 class="subject-list-top d-none">
                        <a href="javascript:void(0);">
                            IB科目列</a>
                    </h5>

                    <div class="subject-list subject-list-ib">
                        <table>
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
                        </table>
                    </div>

                    <h5 class="subject-list-top d-none">
                        <a href="javascript:void(0);">

                            GCE AL科目列
                        </a>
                    </h5>

                    <div class="subject-list subject-list-gceal">
                        <table>
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
                        </table>

                    </div>


                    <h5 class="subject-list-top d-none">
                        <a href="javascript:void(0);">
                            IGCSE科目列
                        </a>
                    </h5>

                    <div class="subject-list subject-list-igcse">
                        <table>
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
                        </table>

                    </div>



                    <h5 class="subject-list-top d-none">
                        <a href="javascript:void(0);">
                            SAT科目列</a>
                    </h5>

                    <div class="subject-list subject-list-sat">
                        <table>
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
                        </table>

                    </div>



                    <h5 class="subject-list-top d-none">
                        <a href="javascript:void(0);">
                            音樂科目列</a>
                    </h5>

                    <div class="subject-list subject-list-music">
                        <table>
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

                    </div>




                    </td>
                    </tr>

                    </table>

                </div>

                <table class="mt-5">
                    <tr>
                        <td> <label class="form-check-label" for="">
                                課堂語言 *
                            </label></td>
                        <td>
                            <div class="lesson-lang-group">
                                <div>
                                    <input class="form-check-input" type="checkbox" value="中文" id="lesson-lang-value-1"
                                        name="lesson-lang[]">
                                    <label class="form-check-label" for="lesson-lang-value-1">
                                        中文
                                    </label>
                                </div>
                                <div>
                                    <input class="form-check-input" type="checkbox" value="英文" id="lesson-lang-value-2"
                                        name="lesson-lang[]">
                                    <label class="form-check-label" for="lesson-lang-value-2">
                                        英文
                                    </label>
                                </div>
                            </div>
                        </td>
                    </tr>

                </table>


                <h5 class="mt-4">可補習地區 *</h5>
                <table>

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
                                    <input class="form-check-input" type="checkbox" value="視像補習" id="t-style-value-3"
                                        name="t-style[]">
                                    <label class="form-check-label" for="t-style-value-3">
                                        視像補習


                                    </label>
                                </div>


                                <table class="mt-4">
                                    <tr>
                                        <td> <label for="lowest-salary">可接受最低時薪 *</label> </td>
                                        <td><input id="lowest-salary" name="lowest-salary" type="number"
                                                class="form-control"></td>
                                    </tr>
                                </table>












                            </div>

                        </td>
                    </tr>
                </table>

                <div class="next-prev-btn-div">

                    <a href="javascript:void(0);" class="prev-step-btn me-3">上一步</a>


                    <a href="javascript:void(0);" type="submit" class="submit-btn">遞交表格</a>
                </div>
        </div>







        </form>
    </div>
    <!-- <div class="col-2"></div> -->

</div>








</div>

<script type="text/javascript">
// var $ = jQuery;
$(function() {


    <?php 
if($_GET['e']=='1')
{
    ?>
    show_lightbox_msg('這電郵地址已被使用作登記。');

    <?php
}

?>
    $(document).on('keydown', function(e) {
        if (e.keyCode === 27) { // ESC
            $('.lightbox').fadeOut(0);


        }
    });


    $('.close-btn,.lightbox-bg-btn').click(function() {
        $('.lightbox').fadeOut(0);
    })



    $('.radio-cancel-btn').click(function() {

        $(this).closest('tr').find('.grade-col input[type="radio"]').prop('checked', false);

    })

    $('.subject-list-top a').click(function() {
        $(this).toggleClass('active');
        if ($(this).hasClass('active')) {
            $(this).closest('.subject-list-top').next('.subject-list').slideDown(200);
        } else {
            $(this).closest('.subject-list-top').next('.subject-list').slideUp(200);
        }
    })
    $('.step-content-4 .prev-step-btn').click(function() {
        $('.step-content').fadeOut(0);

        $('.step-content.step-content-3').fadeIn(0);
        $('html,body').animate({
            'scrollTop': $('.main-content-div').offset().top - 100
        }, 200);

        $('.step-txt').removeClass('active');
        $('.step-txt').eq(2).addClass('active');
    })
    $('.step-content-3 .next-step-btn').click(function() {

        var error_txt = '';

        var bac_degree = $('#bac-degree').val();
        var tutor_level = $('#tutor-level').val();
        var diploma = $('input[name="diploma"]:checked').val();
        var tutor_year = $('#tutor-year').val();
        var u_major = $('#u-major').val();
        var s_school = $('#s-school').val();
        var past_exam = $('input[name="past-exam"]:checked').val();

        var exam_lang = $('#exam-lang').val();

        if (!bac_degree) {
            error_txt +=
                '請輸入就讀大學 (學士學位課程)</br>';
        }

        if (!tutor_level) {
            error_txt +=
                '請輸入教育程度</br>';
        }

        if (!diploma) {
            error_txt +=
                '請輸入是否擁有教育文憑</br>';
        }

        if (!tutor_year) {
            error_txt +=
                '請輸入年級 (2021-2022年度)</br>';
        }
        if (!u_major) {
            error_txt +=
                '請輸入大學主修科目</br>';
        }
        if (!s_school) {
            error_txt +=
                '請輸入曾就讀中學</br>';
        }


        if (!s_school) {
            error_txt +=
                '請輸入曾就讀中學</br>';
        }

        var val = [];


        $('input[name="past-exam[]"]:checked').each(function(i) {
            val[i] = $(this).val();

        });

        if (val.length == 0) {
            error_txt += '請輸入曾參加的公開試</br>';
        }


        // past-exam

        if (!exam_lang) {
            error_txt +=
                '請輸入應考主要語言</br>';
        }


        if (error_txt) {

            show_lightbox_msg(error_txt);
        } else {
            $('.step-content').fadeOut(0);

            $('.step-content.step-content-4').fadeIn(0);

            $('html,body').animate({
                'scrollTop': $('.main-content-div').offset().top - 100
            }, 200);

            $('.step-txt').removeClass('active');
            $('.step-txt').eq(3).addClass('active');

        }




    })


    $('.step-content-2 .next-step-btn').click(function() {

        var email = $('#email').val();
        var confirm_email = $('#confirm_email').val();

        var login_password = $('#login_password').val();
        var confirm_login_password = $('#confirm_login_password').val();
        var chi_name = $('#chi-name').val();
        var eng_name = $('#eng-name').val();
        var whatsapp_tel = $('#whatsapp-tel').val();
        var confirm_whatsapp_tel = $('#confirm-whatsapp-tel').val();

        var born_year = $('#born_year').val();
        var gender = $('input[name="gender"]:checked').val();
        var living_area = $('#living-area').val();
        var error_txt = '';






        if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))) {
            error_txt +=
                '電郵格式不正確</br>';
        }


        if (email != confirm_email) {
            error_txt +=
                '確認登入電郵輸入不相同</br>';
        }

        if (!login_password) {
            error_txt +=
                '請輸入登入密碼</br>';
        }

        if (login_password != confirm_login_password) {
            error_txt +=
                '確認登入密碼輸入不相同</br>';
        }


        if (!chi_name) {
            error_txt +=
                '請輸入中文全名</br>';
        }
        if (!eng_name) {
            error_txt +=
                '請輸入英文全名</br>';
        }


        if (confirm_whatsapp_tel != whatsapp_tel) {
            error_txt +=
                '確認 WhatsApp 電話號碼輸入不相同</br>';
        }


        if (!(/^[0-9]{8}$/.test(whatsapp_tel))) {
            error_txt += 'whatsapp電話格式不正確</br>';
        }
        if (!born_year) {
            error_txt +=
                '請輸入出生年份</br>';
        }

        if (!gender) {
            error_txt +=
                '請輸入性別</br>';
        }
        if (!living_area) {
            error_txt +=
                '請輸入居住地區</br>';
        }


        if (error_txt) {
            show_lightbox_msg(error_txt);
        } else {
            $('.step-content').fadeOut(0);

            $('.step-content.step-content-3').fadeIn(0);
            $('html,body').animate({
                'scrollTop': $('.main-content-div').offset().top - 100
            }, 200);

            $('.step-txt').removeClass('active');
            $('.step-txt').eq(2).addClass('active');


        }






    })

    $('.step-content-3 .prev-step-btn').click(function() {
        $('.step-content').fadeOut(0);

        $('.step-content.step-content-2').fadeIn(0);
        $('html,body').animate({
            'scrollTop': $('.main-content-div').offset().top - 100
        }, 200);

        $('.step-txt').removeClass('active');
        $('.step-txt').eq(1).addClass('active');


    })

    $('.step-content-2 .prev-step-btn').click(function() {
        $('.step-content').fadeOut(0);

        $('.step-content.step-content-1').fadeIn(0);
        $('html,body').animate({
            'scrollTop': $('.main-content-div').offset().top - 100
        }, 200);
        $('.step-txt').removeClass('active');
        $('.step-txt').eq(0).addClass('active');

    })


    $('.agree-terms-btn').click(function() {

        $('.step-content').fadeOut(0);

        $('.step-content.step-content-2').fadeIn(0);
        $('html,body').animate({
            'scrollTop': $('.main-content-div').offset().top - 100
        }, 200);
        $('.step-txt').removeClass('active');
        $('.step-txt').eq(1).addClass('active');

    })

    $('#proof1').on('change', function() {
        var size = this.files[0].size / 1024 / 1024;
        if (size > 5) {

            show_lightbox_msg('報告檔案大小上限為 5MB')
            $(this).val('');
        }
    });
    $('#proof2').on('change', function() {
        var size = this.files[0].size / 1024 / 1024;
        if (size > 5) {

            show_lightbox_msg('報告檔案大小上限為 5MB');
            $(this).val('');
        }
    });




    $('#all-place').change(function() {

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
        var self_intro = $('#self-intro').val();
        var error_txt = '';
        var val = [];


        if (!self_intro) {
            error_txt += '請輸入自我介紹</br>';
        } else
        if (self_intro.length < 50) {
            error_txt += '請輸入自我介紹(50字或以上)</br>';

        }

        var val3 = [];
        $('input[name="lesson-lang[]"]:checked').each(function(i) {
            val3[i] = $(this).val();
        });
        if (val3.length == 0) {
            error_txt += '請選擇課堂語言</br>';
        }


        $('input[name="class-area[]"]:checked').each(function(i) {
            val[i] = $(this).val();

        });
        if (val.length == 0) {
            error_txt += '請選擇可補習地區</br>';
        }
        var val2 = [];
        $('input[name="t-style[]"]:checked').each(function(i) {
            val2[i] = $(this).val();

        });
        if (val2.length == 0) {
            error_txt += '請選擇可供補習方式</br>';
        }

        var lowest_salary = $('#lowest-salary').val();
        if (!lowest_salary) {
            error_txt += '請輸入可接受最低時薪</br>';

        }

        if (error_txt) {

            show_lightbox_msg(error_txt);
        } else {


            $.ajax({
                type: "POST",
                url: '<?php echo get_site_url();?>/wp-json/api/check_reg_email',
                data: {
                    reg_email: $('#email').val()
                },
                dataType: "json",
            }).done(function(response) {

                if (response.status == -1) {
                    show_lightbox_msg('這電郵地址已被使用作登記。');
                } else {
                    $('form').submit();
                }


            }).fail(function(Response) {});

            // $('form').submit();

        }

        // return false;

    })

    $('.submit-btn').click(function() {




    })

    $('.terms-a').click(function() {


        $(this).toggleClass('active');
        if ($(this).hasClass('active')) {
            $(this).next('.terms-content').slideDown(200);
        } else {
            $(this).next('.terms-content').slideUp(200);

        }
    })

    $('.agree-terms-btn').click(function() {})
})
</script>
<?php
get_footer();