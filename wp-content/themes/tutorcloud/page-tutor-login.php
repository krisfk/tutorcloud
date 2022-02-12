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



    <table class="mt-3">
        <tbody>
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





        </tbody>
    </table>





</div>
<?php
get_footer();