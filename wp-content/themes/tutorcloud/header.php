<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script type="text/javascript">
    function show_lightbox_msg(msg) {
        $('.lightbox').fadeIn(200);
        $('.lightbox .lightbox-content').fadeOut(0);
        $('.lightbox-msg-txt').html(msg);
        $('.lightbox .lightbox-content.lightbox-msg').fadeIn(0);
    }
    </script>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content">
            <?php esc_html_e( 'Skip to content', 'tutorcloud' ); ?></a>

        <?php //get_template_part( 'template-parts/header/site-header' ); ?>

        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">


                    <div class="top-div">

                        <button class="mobile-menu-btn"
                            onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))"
                            aria-label="Main Menu" aria-expanded="false">
                            <svg width="50" height="50" viewBox="0 0 100 100">
                                <path class="line line1"
                                    d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058">
                                </path>
                                <path class="line line2" d="M 20,50 H 80"></path>
                                <path class="line line3"
                                    d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942">
                                </path>
                            </svg>
                        </button>


                        <div class="container h-100">

                            <div class="row h-100 align-items-center">
                                <div class="col-2">
                                    <a href="<?php echo get_site_url();?>" class="logo-a">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/logo.png"
                                            alt="">
                                    </a>
                                </div>
                                <div class="col-7">
                                    <ul class="top-menu-ul">

                                        <?php
$main_menu = wp_get_menu_array('main menu');
foreach ($main_menu as $menu_item) {

$url = $menu_item['url'];
$title = $menu_item['title'];
$class = $menu_item['class'];

$temp_arr=explode(get_site_url(),$url);
$slug=str_replace('/en/','',$temp_arr[1]);
$slug=str_replace('/cn/','',$slug);
$slug=str_replace('/','',$slug);


if(count($menu_item['children']))
{

echo '<li><a class="level-1 parent '.$class.'" href="'.$url.'">'.$title;
?>
                                        <img class="arrow"
                                            src="<?php echo get_template_directory_uri();?>/assets/images/white-arrow-enter.png"
                                            alt="">

                                        <?php
echo'</a>';


echo '<ul class="mobile-menu-submenu">';
?>

                                        <?php

foreach ($menu_item['children'] as $sub_menu_item) 
{
$sub_url = $sub_menu_item['url'];
$sub_title = $sub_menu_item['title'];

$sub_temp_arr=explode(get_site_url(),$sub_url);
$sub_slug=str_replace('/en/','',$sub_temp_arr[1]);
$sub_slug=str_replace('/cn/','',$sub_slug);
$sub_slug=str_replace('/','',$sub_slug);
echo'<li><a class="'.$sub_slug.'" href="'.$sub_url.'">'.$sub_title.'</a></li>';
}
echo '</ul>';

}
else
{
echo '<li class="'.$slug.'-li"><a class="level-1 '.$slug.' '.$class.'" href="'.$url.'">'.$title.'</a>';

}
echo'</li>';


}





?>


                                        <li class="mobile-tutor-div">

                                            <div class="sns-li"> <a href="<?php echo get_site_url();?>" class="sns-a">
                                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/fb-icon.png"
                                                        alt="">
                                                </a></div>
                                            <div class="sns-li"> <a href="<?php echo get_site_url();?>" class="sns-a">
                                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/ig-icon.png"
                                                        alt="">
                                                </a></div>



                                            <?php
// echo $_SESSION['tutor_post_id'];
if(!$_SESSION['tutor_post_id'])
{
    ?>
                                            <a href="<?php echo get_site_url();?>/tutor-login"
                                                class="tutor-login-btn">導師登入</a>

                                            <?php
}
?>

                                            <?php
                                    
                                    if($_SESSION['tutor_post_id'])
                                    {
                                        ?>
                                            <a href="<?php echo get_site_url();?>/tutor-info"
                                                class="tutor-info-btn">導師資料</a>
                                            <a href="<?php echo get_site_url();?>/tutor-logout"
                                                class="tutor-logout-btn">登出</a>

                                            <?php
                                    }
                                    ?>
                                        </li>

                                    </ul>
                                </div>


                                <div class="col-3 text-end right-btn-div">
                                    <div class="sns-li"> <a href="<?php echo get_site_url();?>" class="sns-a">
                                            <img src="<?php echo get_template_directory_uri();?>/assets/images/fb-icon.png"
                                                alt="">
                                        </a></div>
                                    <div class="sns-li"> <a href="<?php echo get_site_url();?>" class="sns-a">
                                            <img src="<?php echo get_template_directory_uri();?>/assets/images/ig-icon.png"
                                                alt="">
                                        </a></div>
                                    <?php
// echo $_SESSION['tutor_post_id'];
if(!$_SESSION['tutor_post_id'])
{
    ?>
                                    <a href="<?php echo get_site_url();?>/tutor-login" class="tutor-login-btn">導師登入</a>

                                    <?php
}
?>

                                    <?php
                                    
                                    if($_SESSION['tutor_post_id'])
                                    {
                                        ?>
                                    <a href="<?php echo get_site_url();?>/tutor-info" class="tutor-info-btn">導師資料</a>
                                    <a href="<?php echo get_site_url();?>/tutor-logout" class="tutor-logout-btn">登出</a>

                                    <?php
                                    }
                                    ?>


                                </div>
                            </div>
                        </div>



                    </div>
                    <div class="top-div-blank"></div>
                    <?php
                    if($_SESSION['tutor_post_id'])
                    {
                        ?>

                    <style type="text/css">
                    .tutor-register-li {
                        display: none !important;
                    }

                    .apply-case-li {
                        display: none !important;
                    }

                    .tutorial-case-li {
                        display: inline-block !important;
                    }

                    /* .top-menu-ul .tutor-register {
                        display: none;
                    } */
                    </style>
                    <?php
                        $query_args = array(
                            'post_type' => 'tutor',
                            'p'=>$_SESSION['tutor_post_id']
                        );
                        
                        $the_query = new WP_Query( $query_args );
                        
                        $the_query->have_posts();
                        $the_query->the_post();

                        if(!get_field('proof1') || !get_field('proof2'))
                        {
?>
                    <div class="msg-div">
                        <a href="<?php echo get_site_url();?>/tutor-info">請往「導師資料」上載您的「公開試成績證明」及「學生證/畢業證書」</a>
                    </div>
                    <script type="text/javascript">
                    $(function() {

                        $('.top-div-blank').addClass('hv-msg');
                    })
                    </script>
                    <?php
                        }
                    }
                    ?>


                    <div class="container">



                    </div>


                    <a id="nav-icon3" href="#" class="mobile-menu-btn float-end">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>





                    </ul>
            </div>
            <script type="text/javascript">
            $(function() {

                $(window).resize(function() {
                    if ($(window).width() > 991) {
                        $('.top-menu-ul').fadeIn(0);
                    } else {

                    }
                })
                $('.mobile-menu-btn').click(function() {

                    if ($(this).hasClass('opened')) {

                        $('.top-menu-ul').slideDown(200);
                        // $(this).addClass('opened');


                    } else {
                        // alert(70);
                        $('.top-menu-ul').fadeOut(0);
                        // $(this).removeClass('opened');

                    }


                })

            })
            </script>
            <?php
            wp_reset_postdata(); 
            wp_reset_query();
            ?>