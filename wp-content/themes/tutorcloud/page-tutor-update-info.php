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


    <form action="" method="post">
        <table class="mt-5 login-table mx-auto">
            <tbody>
                <tr>
                    <td class="pe-2 mb-3"><label for="email">登入電郵*</label></td>
                    <td class="mb-3"><input id="email" name="email" type="text" class="form-control"></td>
                </tr>

                <tr>
                    <td class="pe-2 mb-3"><label for="login_password">登入密碼*</label></td>
                    <td><input id="login_password" name="login_password" type="password" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="text-end pt-4">

                        <input type="submit" href="javascript:void(0);" class="submit-btn m-0" value="登入"></input>

                        <a href="#" class="forgot-pw-a">忘記密碼</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>





</div>
<?php
get_footer();