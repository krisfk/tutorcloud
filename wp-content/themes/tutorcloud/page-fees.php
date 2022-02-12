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

    主頁 > 導師收費
</div>
<div class="container mt-5">

    <div class="text-center">
        <h2>導師收費
            <div class="bar"></div>
        </h2>
    </div>

    <div class="row align-items-top justify-content-center mt-5">

        <div class="col-3">
            <img class="w-100 pe-3" src="http://64.227.13.14/tutorcloud/wp-content/uploads/2021/11/money-back-icon.jpg"
                alt="">

        </div>
        <div class="col-6">
            <div class="pt-title mt-3 text-start">現金回贈</div>
            <div class="mt-4">
                當補習個案成功配對，即已完成首兩星期課堂，家長可獲半堂學費為現金回贈，上限為$100。 <br><br>
                例如： <br><br>

                一星期兩堂，每堂1.5小時，每小時$130，則可獲 $130 × 1.5 ÷ 2＝$97.5 現金回贈 或 <br>
                一星期兩堂，每堂1.5小時，每小時$160，$160 × 1.5 ÷ 2＝$120，則可獲$100 現金回贈 <br><br>

                家長可選擇通過銀行轉賬或轉數快 (FPS) 收取現金回贈。當個案確認成功配對，TutorCloud將於
                一星期內過數。</div>

            <a href="<?php echo get_site_url();?>/apply-case"
                class="apply-case-btn apply-case-btn mt-5 d-inline-block">申請補習個案</a>

        </div>

    </div>








</div>
<?php
get_footer();