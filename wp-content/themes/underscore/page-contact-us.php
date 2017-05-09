<?php

get_header();

?>
<div class="section section-contact-us active" data-anchor="contact-us" style="background: transparent;">
    <div class="vertical-center-wrapper">
        <div class="vertical-center">
            <h1 style="margin: 0px;">Let's talk</h1>
            <div class="line-violet"></div>
        </div>
    </div>

    <div class="Vidage">
        <div class="Vidage__image"></div>

        <video id="VidageVideo" class="Vidage__video" preload="metadata" loop autoplay muted>
            <source src="<?php bloginfo('stylesheet_directory'); ?>/videos/video-2.mp4" type="video/mp4">
        </video>

        <div class="Vidage__backdrop"></div>
    </div>
</div>
<div class="contact-message">
    Don't stand there lonely, you can reach out via e-mail or come to our studio. We may have a lot to discuss, who knows.
</div>
<div class="contact-form">
    <div class="clearfix"></div>
    <h1 style="margin-bottom: 0px;">Start your Project</h1>
    <div class="text-center"><div class="line-violet"></div></div>
    <p>We thrive when coming up with innovative ideas but also understand that a smart concept should <br>be supported with measurable results</p>
    <div class="container">
        <form class="" style="max-width: 960px; margin: auto;">
            <div class="col-sm-12">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Your full name">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Your Email">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Phone">
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <textarea class="form-control" placeholder="Describe your project"></textarea>
                </div>
            </div>
            <div class="text-center"><button type="submit" class="btn btn-accent btn-circle" style="margin-top: 20px;">SEND REQUEST</button></div>
        </form>
    </div>
    <div class="clearfix"></div>
</div>
<?php

get_footer();