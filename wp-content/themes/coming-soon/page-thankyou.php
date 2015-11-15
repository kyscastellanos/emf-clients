<?php get_header(); ?>
<body>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <div id="logo" class="col-xs-12">
            <a href="<?php echo home_url(); ?>">
                <img src="<?= get_template_directory_uri() . '/img/logo.png' ?>">
            </a>
        </div>

        <div id="soon" class="col-xs-12">
            <h1>THANK YOU</h1>
            <p><strong>One of our team members will contact you shortly</strong></p>
            <p><strong>If you would like to see us in action visit us:</strong></p>
            <br>
            <br>
            <br>
           

        </div>


        <div class="col-xs-12 col-md-3 contact">
            <a href="tel:+610410125994">
                <i class="fa fa-phone fa-4x"></i>
                <p><strong>0410 125 994</strong></p>
            </a>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
        <div class="col-xs-12 col-md-3 contact">
            <a href="https://instagram.com/excusemyfrenchservices">
                <i class="fa fa-instagram fa-4x"></i>
                <p><strong>@excusemyfrenchservices</strong></p>
            </a>
        </div>

        <div class="col-xs-12 col-md-3 contact">
            <a href="https://www.facebook.com/excusemyfrenchservices/?fref=ts">
                <i class="fa fa-facebook fa-4x"></i>
                <p><strong>Excuse My French Services</strong></p>
            </a>
        </div>

        <div class="col-xs-12 col-md-3 contact">
            <a href="mailto:contact@excusemyfrenchservices.com">
                <i class="fa fa-envelope-square fa-4x"></i>
                <p><strong>contact@excusemyfrenchservices.com</strong></p>
            </a>
        </div>




        <!-- /.row -->
    </div>
    <!-- /.container -->
    <?php wp_footer(); ?>
</body>
</html>

