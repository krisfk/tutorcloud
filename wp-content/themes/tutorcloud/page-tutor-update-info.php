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


if($_POST['form-type']=='tutor-info-form-1')
{
    // $email=$_POST['email'];
    // $login_password=$_POST['login_password'];  
    $chi_name = $_POST['chi-name'];
    $eng_name = $_POST['eng-name'];
    $nick_name = $_POST['nick-name'];
    $whatsapp_tel=$_POST['whatsapp-tel'];
    $born_year=$_POST['born_year'];
    $gender=$_POST['gender'];
    $occupation=$_POST['occupation'];
    $living_area=$_POST['living_area'];
    $post_id = $_SESSION['tutor_post_id'];
    $login_password = $_POST['login_password'];
    $new_password = $_POST['new_password'];
    $password_wrong=false;
    // echo $login_password;
    // echo $post_id;

    if($login_password || $new_password){
     
        $query_args = array(
            'post_type' => 'tutor',
            'p'=>$_SESSION['tutor_post_id']
        );
        
        // The Query
        $the_query = new WP_Query( $query_args );
        $the_query->have_posts();
        $the_query->the_post();

        if($login_password==get_field('login_password'))
        {
            update_post_meta($post_id, 'login_password', $new_password);
            update_post_meta($post_id, 'chi_name', $chi_name);
            update_post_meta($post_id, 'eng_name', $eng_name);
            update_post_meta($post_id, 'nick_name', $nick_name);
            update_post_meta($post_id, 'whatsapp_tel', $whatsapp_tel);
            update_post_meta($post_id, 'born_year', $born_year);
            update_post_meta($post_id, 'gender', $gender);
            update_post_meta($post_id, 'occupation', $occupation);
            update_post_meta($post_id, 'living_area', $living_area);
        }
        else
        {
            $password_wrong=true;
        }

        
    }
    else
    {
        update_post_meta($post_id, 'chi_name', $chi_name);
        update_post_meta($post_id, 'eng_name', $eng_name);
        update_post_meta($post_id, 'nick_name', $nick_name);
        update_post_meta($post_id, 'whatsapp_tel', $whatsapp_tel);
        update_post_meta($post_id, 'born_year', $born_year);
        update_post_meta($post_id, 'gender', $gender);
        update_post_meta($post_id, 'occupation', $occupation);
        update_post_meta($post_id, 'living_area', $living_area);   
    }

}


if($_POST['form-type']=='tutor-info-form-2')
{
    // echo 999;
    $bac_degree = $_POST['bac-degree'];
    
    $tutor_level = $_POST['tutor-level'];
    $diploma = $_POST['diploma'];
    $tutor_year = $_POST['tutor-year'];
    $u_major = $_POST['u-major'];
    $u_minor = $_POST['u-minor'];
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

    $exam_lang = $_POST['exam-lang'];
    $other_cert = $_POST['other-cert'];
    //proof1
    //proof2
    $self_intro = $_POST['self-intro'];
    $t_subjects_kin = $_POST['t-subjects-kin']; //array
    $t_subjects_kin_value_other = $_POST['t-subjects-kin-value-other'];
    $t_subjects_pri = $_POST['t-subjects-pri']; //array
    $t_subjects_pri_value_other = $_POST['t-subjects-pri-value-other'];
    $t_subjects_f13 = $_POST['t-subjects-f13']; //array  
    $t_subjects_f13_value_other = $_POST['t-subjects-f13-value-other'];
    $t_subjects_f46 = $_POST['t-subjects-f46']; //array  
    $t_subjects_f46_value_other = $_POST['t-subjects-f46-value-other'];
    $t_subjects_ib = $_POST['t-subjects-ib']; //array  
    $t_subjects_ib_value_other = $_POST['t-subjects-ib-value-other'];

    $t_subjects_gceal = $_POST['t-subjects-gceal']; //array  
    $t_subjects_gceal_value_other = $_POST['t-subjects-gceal-value-other'];

    $t_subjects_igcse = $_POST['t-subjects-igcse']; //array  
    $t_subjects_igcse_value_other = $_POST['t-subjects-igcse-value-other'];

    $t_subjects_sat = $_POST['t-subjects-sat']; //array  
    $t_subjects_sat_value_other = $_POST['t-subjects-sat-value-other'];

    $t_subjects_sat = $_POST['t-subjects-sat']; //array  
    $t_subjects_sat_value_other = $_POST['t-subjects-sat-value-other'];

    $t_subjects_music = $_POST['t-subjects-music']; //array  
    $t_subjects_music_value_other = $_POST['t-subjects-music-value-other'];

    $lesson_lang = $_POST['lesson-lang'];

    $class_area = $_POST['class-area'];
    $t_style = $_POST['t-style'];
    $lowest_salary = $_POST['lowest-salary'];

    $post_id = $_SESSION['tutor_post_id'];

    update_post_meta($post_id, 'bac_degree', $bac_degree);
    update_post_meta($post_id, 'tutor_level', $tutor_level);
    update_post_meta($post_id, 'diploma', $diploma);
    update_post_meta($post_id, 'tutor_year', $tutor_year);
    update_post_meta($post_id, 'u_major', $u_major);
    update_post_meta($post_id, 'u_minor', $u_minor);
    update_post_meta($post_id, 's_school', $s_school);
    update_post_meta($post_id, 'past_exam', $past_exam);
    update_post_meta($post_id, 'dse_sub_1', $dse_sub_1);
    update_post_meta($post_id, 'dse_sub_2', $dse_sub_2);
    update_post_meta($post_id, 'dse_sub_3', $dse_sub_3);
    update_post_meta($post_id, 'dse_sub_4', $dse_sub_4);
    update_post_meta($post_id, 'dse_sub_5', $dse_sub_5);
    update_post_meta($post_id, 'dse_sub_6', $dse_sub_6);
    update_post_meta($post_id, 'dse_sub_7', $dse_sub_7);
    update_post_meta($post_id, 'dse_sub_8', $dse_sub_8);
    update_post_meta($post_id, 'dse_sub_9', $dse_sub_9);
    update_post_meta($post_id, 'dse_sub_10', $dse_sub_10);
    update_post_meta($post_id, 'dse_sub_11', $dse_sub_11);
    update_post_meta($post_id, 'dse_sub_12', $dse_sub_12);
    update_post_meta($post_id, 'dse_sub_13', $dse_sub_13);
    update_post_meta($post_id, 'dse_sub_14', $dse_sub_14);
    update_post_meta($post_id, 'dse_sub_15', $dse_sub_15);
    update_post_meta($post_id, 'dse_sub_16', $dse_sub_16);
    update_post_meta($post_id, 'dse_sub_17', $dse_sub_17);
    update_post_meta($post_id, 'dse_sub_18', $dse_sub_18);
    update_post_meta($post_id, 'dse_sub_19', $dse_sub_19);
    update_post_meta($post_id, 'dse_sub_20', $dse_sub_20);
    update_post_meta($post_id, 'dse_sub_21', $dse_sub_21);
    update_post_meta($post_id, 'dse_sub_22', $dse_sub_22);

    update_post_meta($post_id, 'other_subject_1', $other_subject_1);
    update_post_meta($post_id, 'other_subject_2', $other_subject_2);
    update_post_meta($post_id, 'other_subject_3', $other_subject_3);
    update_post_meta($post_id, 'other_subject_4', $other_subject_4);
    update_post_meta($post_id, 'other_subject_5', $other_subject_5);
    update_post_meta($post_id, 'other_subject_6', $other_subject_6);
    update_post_meta($post_id, 'other_subject_7', $other_subject_7);
    update_post_meta($post_id, 'other_subject_8', $other_subject_8);
    update_post_meta($post_id, 'other_subject_9', $other_subject_9);
    update_post_meta($post_id, 'other_subject_10', $other_subject_10);

    update_post_meta($post_id, 'other_subject_1_grade', $other_subject_1_grade);
    update_post_meta($post_id, 'other_subject_2_grade', $other_subject_2_grade);
    update_post_meta($post_id, 'other_subject_3_grade', $other_subject_3_grade);
    update_post_meta($post_id, 'other_subject_4_grade', $other_subject_4_grade);
    update_post_meta($post_id, 'other_subject_5_grade', $other_subject_5_grade);
    update_post_meta($post_id, 'other_subject_6_grade', $other_subject_6_grade);
    update_post_meta($post_id, 'other_subject_7_grade', $other_subject_7_grade);
    update_post_meta($post_id, 'other_subject_8_grade', $other_subject_8_grade);
    update_post_meta($post_id, 'other_subject_9_grade', $other_subject_9_grade);
    update_post_meta($post_id, 'other_subject_10_grade', $other_subject_10_grade);



    update_post_meta($post_id, 'exam_lang', $exam_lang);
    update_post_meta($post_id, 'other_cert', $other_cert);

    //proof1
    //proof2
    update_post_meta($post_id, 'self_intro', $self_intro);
    update_post_meta($post_id, 't_subjects_kin', $t_subjects_kin);
    update_post_meta($post_id, 't_subjects_kin_value_other', $t_subjects_kin_value_other);
    update_post_meta($post_id, 't_subjects_pri', $t_subjects_pri);
    update_post_meta($post_id, 't_subjects_pri_value_other', $t_subjects_pri_value_other);
    update_post_meta($post_id, 't_subjects_f13', $t_subjects_f13);
    update_post_meta($post_id, 't_subjects_f13_value_other', $t_subjects_f13_value_other);
    update_post_meta($post_id, 't_subjects_f46', $t_subjects_f46);
    update_post_meta($post_id, 't_subjects_f46_value_other', $t_subjects_f46_value_other);
    update_post_meta($post_id, 't_subjects_ib', $t_subjects_ib);
    update_post_meta($post_id, 't_subjects_ib_value_other', $t_subjects_ib_value_other);
    update_post_meta($post_id, 't_subjects_gceal', $t_subjects_gceal);
    update_post_meta($post_id, 't_subjects_gceal_value_other', $t_subjects_gceal_value_other);
    update_post_meta($post_id, 't_subjects_igcse', $t_subjects_igcse);
    update_post_meta($post_id, 't_subjects_igcse_value_other', $t_subjects_igcse_value_other);
    update_post_meta($post_id, 't_subjects_sat', $t_subjects_sat);
    update_post_meta($post_id, 't_subjects_sat_value_other', $t_subjects_sat_value_other);
    update_post_meta($post_id, 't_subjects_music', $t_subjects_music);
    update_post_meta($post_id, 't_subjects_music_value_other', $t_subjects_music_value_other);
    update_post_meta($post_id, 'lesson_lang', $lesson_lang);

    update_post_meta($post_id, 'class_area', $class_area);
    update_post_meta($post_id, 't_style', $t_style);
    update_post_meta($post_id, 'lowest_salary', $lowest_salary);
}
?>

<div class="breadcrumb mt-4">

    主頁 > 導師資料更新
</div>
<div class="container mt-5">

    <div class="text-center">
        <h2>導師資料更新
            <div class="bar"></div>
        </h2>
    </div>


    <h5 class="text-center d-block mt-5">
        <?php 

if($_POST)
{

    if($password_wrong)
    {
        echo '原有問題輸入不正確，三秒後回到主頁。';
    }
    else
    {
        echo '導師資料更新成功，三秒後回到主頁。';

    }


    ?>
        <script type="text/javascript">
        window.setTimeout(function() {
            window.location.href = '<?php echo get_site_url();?>';
        }, 3000);
        </script>
        <?php

}
?>
    </h5>







</div>
<?php
get_footer();