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

    if($login_password){
     
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