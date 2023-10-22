<?php /* Template Name: Home */ get_header(); ?>

<!-- Full Page Intro -->


<div class="section-video">
    <div class="video-container">
        <div class="fade-in"></div>

        <video playsinline autoplay muted loop id="myVideoLg"
            poster="<?php echo get_template_directory_uri(); ?>/assets/video/DSC_1805_3.png">
            <source src="<?php echo get_template_directory_uri(); ?>/assets/video/DSC_1805_3.mp4" type="video/mp4">
            <source src="<?php echo get_template_directory_uri(); ?>/assets/video/DSC_1805_3.webm" type="video/webm">
            <source src="<?php echo get_template_directory_uri(); ?>/assets/video/DSC_1805_3.ogg" type="video/ogg">
        </video>
        <div class="main-caption">
            <h1 class="">
                cocktails
                <br>&amp; pizza
            </h1>
        </div>
    </div>
</div>




<div class="section-parent">
    <section class="section-menus container section-2">
        <div class="menu-title">
            <h2>menus</h2>
        </div>
        <div class="appear2 menu-img draw-border">

            <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/CD1_1309.jpg" alt="cocktails">
            <div class="menu-img-txt">
                <span>cocktails</span>
            </div>

        </div>
        <div class="appear2 menu-img draw-border">
            <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/AdobeStock_551261440_Preview.jpeg"
                alt="pizza">
            <div class="menu-img-txt">
                <span>food</span>
            </div>
        </div>
        <div class="appear2 menu-img draw-border">
            <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/AdobeStock_478478073_Preview.jpeg"
                alt="wine">
            <div class="menu-img-txt">
                <span>wine</span>
            </div>
        </div>

        <div class="appear2 menu-img draw-border">
            <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/AdobeStock_467539888_Preview.jpeg"
                alt="beer">
            <div class="menu-img-txt">
                <span>beer</span>
            </div>
        </div>

    </section>
</div>
<div class="section-parent">
    <div id="ctaBg1"></div>
    <img id="ctaSection1" class="appear2"
        src="<?php echo get_template_directory_uri(); ?>/assets/logos/logo-section-2.svg">

    <section id="cta1" class="cta container">
        <div class="cta-img draw-border appear2">
            <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/CD1_6381-HDR.png">

        </div>
        <div class="cta-text">
            <h2 id="ctaText1" class="thick">hire your own private bar in central London</h2>
        </div>




    </section>
</div>


<?php get_footer(); ?>