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

    主頁 > 導師登出
</div>
<div class="container mt-5">

    <div class="text-center">
        <h2>導師登出
            <div class="bar"></div>
        </h2>
    </div>


    <h5 class="text-center d-block mt-5">
        <?php 

// if($_POST)
// {

    echo '已登出，三秒後回到主頁。';
    $_SESSION['tutor_post_id']='';

    ?>
        <script type="text/javascript">
        window.setTimeout(function() {
            window.location.href = '<?php echo get_site_url();?>';
        }, 3000);
        </script>
        <?php

// }
?>
    </h5>







</div>
<?php
get_footer();