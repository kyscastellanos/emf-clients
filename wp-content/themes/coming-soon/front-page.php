<?php get_header(); ?>
<body>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <div id="logo" class="col-xs-12">
            <img src="<?= get_template_directory_uri() . '/img/logo.png' ?>">
        </div>

        <div id="soon" class="col-xs-12">
            <h2>LET US TAKE CARE OF YOUR EVENT!</h2>

            <br><br>
            <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">
                GET A FREE QUOTE NOW
            </button>
            <br>
            <br>
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

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Quote detail form</h4>
                    </div>
                    <div class="modal-body">
                     <?php   gravity_form( 1, false, false, false, '', true ); ?>
                    </div>
                </div>
            </div>
        </div>


        <!-- /.row -->
    </div>
    <!-- /.container -->
    <?php wp_footer(); ?>
</body>
</html>



