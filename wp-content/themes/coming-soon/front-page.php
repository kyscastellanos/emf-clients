<?php

    // Grab ACFs

    $parallax1 = get_field('image_1');

    $message1 = get_field('message_1');
    $quote1 = get_field('quote_1');

    $message2 = get_field('message_2');
    $quote2 = get_field('quote_2');

    $contact_number = get_field('contact_number');

    $testimonial_content1 = get_field('testimonial_content_1');
    $testimonial_author1 = get_field('testimonial_author_1');

    $testimonial_content2 = get_field('testimonial_content_2');
    $testimonial_author2 = get_field('testimonial_author_2');

    $services_title = get_field('services_title');
    $services_description = get_field('services_description');

    $service_title1 = get_field('service_heading_1');
    $service_content1 = get_field('service_content_1');

    $service_title2 = get_field('service_heading_2');
    $service_content2 = get_field('service_content_2');

    $service_title3 = get_field('service_heading_3');
    $service_content3 = get_field('service_content_3');

    $service_title4 = get_field('service_heading_4');
    $service_content4 = get_field('service_content_4');

    get_header();

?>

<body>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><?= $quote1; ?></h4>
            </div>
            <div class="modal-body">
                <?php gravity_form( 1, false, false, false, '', true ); ?>
            </div>
        </div>
    </div>
</div>

<div class="parallax-container" data-parallax="scroll" data-position="top" data-bleed="10"
     data-image-src="<?= '/wp-content/themes/coming-soon/img/parallax1.jpg' ?>" >

    <div class="row">
        <div id="logo" class="col-xs-12">
            <img src="<?= '/wp-content/themes/coming-soon/img/logo.png' ?>">
        </div>

        <div id="soon" class="col-xs-12">
            <h2 style="margin-bottom: 30px;"><?= $message1; ?></h2>
            <button id="quote1" type="button" class="btn btn-success btn-lg">
                <?= $quote1; ?>
            </button>
        </div>

        <div class="col-xs-12 col-md-4 col-md-offset-4 contact">
            <a href="tel:+61<?= $contact_number; ?>">
                <p><i class="fa fa-phone fa-2x"></i> <strong><?= $contact_number; ?></strong></p>
            </a>
        </div>

        <div class="col-xs-12 col-md-10 col-md-offset-1 testimonials">
            <i class="fa fa-quote-left fa-2x"></i>
            <span><?= $testimonial_content1; ?></span>
            <i class="fa fa-quote-right"></i>
            <br>
            <p class="testimonials_sign"><?= $testimonial_author1; ?></p>
        </div>
    </div>
</div>

<div class="container" style="padding-top: 60px; padding-bottom: 80px;">
    <div class="row">

        <div class="col-xs-12 col-sm-8 col-sm-offset-2">
            <h2 style="text-align: center"><?= $services_title; ?></h2>
            <p class="about_us"><?= $services_description; ?></p>
        </div>

        <div class="col-xs-12 col-md-3">
            <h3 class="services"><?= $service_title1; ?></h3>
            <br>
            <p class="services_desc"><?= $service_content1; ?></p>
        </div>

        <div class="col-xs-12 col-md-3">
            <h3 class="services"><?= $service_title2; ?></h3>
            <br>
            <p class="services_desc"><?= $service_content2; ?></p>
        </div>

        <div class="col-xs-12 col-md-3">
            <h3 class="services"><?= $service_title3; ?></h3>
            <br>
            <p class="services_desc"><?= $service_content3; ?></p>
        </div>

        <div class="col-xs-12 col-md-3">
            <h3 class="services"><?= $service_title4; ?></h3>
            <br>
            <p class="services_desc"><?= $service_content4; ?></p>
        </div>
    </div>
</div>

<div class="parallax-container" data-parallax="scroll" data-position="top" data-bleed="10"
     data-image-src="<?= '/wp-content/themes/coming-soon/img/parallax2.jpg' ?>">

    <div class="row">
        <div id="soon" class="col-xs-12">
            <h2 style="margin-bottom: 30px;"><?= $message2; ?></h2>
            <button id="quote2" type="button" class="btn btn-success btn-lg">
                <?= $quote2; ?>
            </button>
        </div>

        <div class="col-xs-12 col-md-10 col-md-offset-1 testimonials">
            <i class="fa fa-quote-left fa-2x"></i>
            <span><?= $testimonial_content2; ?></span>
            <i class="fa fa-quote-right"></i>
            <br>
            <p class="testimonials_sign"><?= $testimonial_author2; ?></p>
        </div>

    </div>
</div>

<?php get_footer(); ?>



