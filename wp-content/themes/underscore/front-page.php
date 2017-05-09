<?php

get_header();
?>

    <div class="section section-home active" data-anchor="home" style="background: transparent;">
        <div class="page-header-content-wrapper" style="position: absolute; left: 50%; top: 50%;">
            <div class="page-header-content" style="position: relative; left: -50%; top: -50%;">
                <h1 class="page-header-title">We Are Vitality</h1>
                <div class="page-header-subtitle">A Suite of Best Practices</div>
            </div>
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

<?php
get_footer();