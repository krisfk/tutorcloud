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
    add_post_meta($post_id, 'chi_name', $chi_name);
    add_post_meta($post_id, 'eng_name', $eng_name);
    add_post_meta($post_id, 'nick_name', $nick_name);
    add_post_meta($post_id, 'whatsapp_tel', $whatsapp_tel);
    add_post_meta($post_id, 'born_year', $born_year);
    add_post_meta($post_id, 'gender', $gender);
    add_post_meta($post_id, 'occupation', $occupation);
    add_post_meta($post_id, 'living_area', $living_area);

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

    echo '導師資料更新成功，三秒後回到主頁。';


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