<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <!-- Always force latest IE rendering engine -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- TITLE -->
    <title><?php echo wp_get_document_title(); ?></title>

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>


<!-- ====== Preloader ======  -->
<div class="loading">
    <div class="load-circle">
    </div>
</div>
<!-- ======End Preloader ======  -->

<!-- ====== HEADER START ======  -->
<?php

$style = '';
$headerBg = get_field('header_bg');
if (!empty($headerBg)) {
    $iamgeBg = $headerBg[rand(0, count($headerBg) - 1)];
    $style = 'background-image: url(\'' . $iamgeBg['img']['url'] . '\');';
}

?>
<section class="s-header" id="home" style="<?php echo $style ?>" data-scroll-index="0">
    <div class="header-overlay">


        <!-- ====== NAVGITION ======  -->
        <nav class="navbar land-nav">
            <div class="container">
                <div class="row">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#collapse" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- logo -->
                        <?php if (get_field('logo')) : ?>
                            <a class="logo navbar-brand" href="<?php get_home_url(); ?>" data-scroll-nav="0">

                                <!-- WHITE LOGO -->
                                <img class="white-logo" src="<?php echo get_field('logo')['sizes']['logo']; ?>"
                                     alt="logo"/>

                            </a>
                        <?php endif; ?>

                    </div>

                    <?php wp_nav_menu([
                        'theme_location' => '',
                        'menu' => '',
                        'container' => 'div',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id' => 'collapse',
                        'menu_class' => 'nav navbar-nav navbar-right',
                        'menu_id' => 'navbar',
                        'echo' => true,
                        'fallback_cb' => 'wp_page_menu',
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth' => 0
                    ]);
                    ?>

                </div>
            </div><!-- /.container -->
        </nav>
        <!-- ====== END NAVGITION ======  -->


        <!-- ====== START HEADER CONTENT ======  -->
        <div class="middle-c text-center">
            <div class="container">
                <div class="row">
                    <div class="capt col-md-8 col-sm-11">

                        <h1><?php the_field('heading'); ?></h1>

                        <a href="<?php the_field('link_button'); ?>#about" data-scroll-nav="2" class="cta-btn">
                            <?php the_field('text_button'); ?>
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <!-- ====== END HEADER CONTENT ======  -->


        <div class="header-shap">
            <img src="<?php echo get_template_directory_uri(); ?>/img/shap1.png" alt="Shape">
        </div>


    </div>
</section>
<!-- ====== END HEADER ======  -->
