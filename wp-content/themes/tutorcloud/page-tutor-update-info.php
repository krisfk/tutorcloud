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
    // echo 11;
    
// $email = $_POST['email'];
// $password = $_POST['login_password'];

// $query_args = array(
	// 'post_type' => 'tutor',
// );
      echo '導師資料更新成功，三秒後回到主頁。';

    // $the_query = new WP_Query( $query_args );
   

}
?>
    </h5>







</div>
<?php
get_footer();