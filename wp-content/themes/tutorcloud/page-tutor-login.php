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

<div class="breadcrumb mt-4">

    主頁 > 導師登入
</div>
<div class="container mt-5">

    <div class="text-center">
        <h2>導師登入
            <div class="bar"></div>
        </h2>
    </div>



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
                <td colspan="2">

                    <a href="javascript:void(0);" class="submit-btn">登入</a>

                    <a href="#">忘記密碼</a>
                </td>
            </tr>






        </tbody>
    </table>





</div>
<?php
get_footer();