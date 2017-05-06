<?php

get_header();
?>

    <div class="section section-home active" data-anchor="home" style="background: transparent;">
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'underscore' ); ?></a>

        <div class="navbar navbar-fixed-top main-navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <a class="navbar-brand" href="#"><img class="inline-block" src="<?php bloginfo('stylesheet_directory'); ?>/images/logo2.png"></a>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#about-us">About Us</a></li>
                        <li><a href="#our-process">Our Work</a></li>
                        <li><a href="#contact-us">Contact Us</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#development">Development</a></li>
                        <li><a href="#digital-marketing">Digital Marketing</a></li>
                        <li><a href="#branding">Branding</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
        <div class="page-header-content-wrapper" style="position: absolute; left: 50%; top: 50%;">
            <div class="page-header-content" style="position: relative; left: -50%; top: -50%;">
                <h1 class="page-header-title">We Are Vitality</h1>
                <div class="page-header-subtitle">A Suite of Best Practices</div>
            </div>
        </div>
        <div class="Vidage">
            <div class="Vidage__image"></div>

            <video id="VidageVideo" class="Vidage__video" preload="metadata" loop autoplay muted>
                <source src="<?php bloginfo('stylesheet_directory'); ?>/videos/video-bg2.webm" type="video/webm">
                <source src="<?php bloginfo('stylesheet_directory'); ?>/videos/video-bg2.mp4" type="video/mp4">
            </video>

            <div class="Vidage__backdrop"></div>
        </div>

    </div>

    <div class="section our-work" data-anchor="about-us">
        <div class="clearfix"></div>
        <h1 class="text-center">Creations</h1>
        <div class="clearfix"></div>
        <div class="col-xs-4">
            <div class="work-item">
                <h2 class="yellow">App</h2>
                <div class="clearfix"></div>
                <img class="img-responsive" src="<?php bloginfo('stylesheet_directory') ?>/images/work1.jpg">
                <div class="clearfix"></div>
                <div class="caption">
                    <span>Money Suites CRM</span>
                    <div class="clearfix"></div>
                    Go as far as you can see
                    when you get there you will see farther
                </div>
            </div>
        </div>
        <div class="col-xs-4">
            <div class="work-item">
                <h2 class="cyan">Website</h2>
                <div class="clearfix"></div>
                <img class="img-responsive" src="<?php bloginfo('stylesheet_directory') ?>/images/work1.jpg">
                <div class="clearfix"></div>
                <div class="caption">
                    <span>Money Suites CRM</span>
                    <div class="clearfix"></div>
                    Go as far as you can see
                    when you get there you will see farther
                </div>
            </div>
        </div>
        <div class="col-xs-4">
            <div class="work-item">
                <h2 class="magenta">Brand</h2>
                <div class="clearfix"></div>
                <img class="img-responsive" src="<?php bloginfo('stylesheet_directory') ?>/images/work1.jpg">
                <div class="clearfix"></div>
                <div class="caption">
                    <span>Money Suites CRM</span>
                    <div class="clearfix"></div>
                    Go as far as you can see
                    when you get there you will see farther
                </div>
            </div>
        </div>

    </div>
    <div class="clearfix"></div>
    <div class="section" data-anchor="our-process">
        test
    </div>
<?php
get_footer();