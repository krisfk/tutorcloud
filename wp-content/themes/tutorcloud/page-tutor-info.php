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

if($_SESSION['tutor_post_id'])
{
    // echo 1;
    // wp_redirect( get_site_url() );

// exit;
}


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





</div>
<?php
get_footer();