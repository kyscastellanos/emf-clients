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


        <div class="col-xs-12 col-md-4 col-md-offset-4 contact">
            <a href="tel:+610410125994">
                <i class="fa fa-phone fa-4x"></i>
                <p><strong>0410 125 994</strong></p>
            </a>
            <br>
            <br>
        </div>

        <div class="col-xs-12 col-md-10 col-md-offset-1 testimonials">
            <i class="fa fa-quote-left fa-3x"></i>
           <span>It is so rare in life today that people forget to compliment not only good service, but also recognise the importance of the service provided. I feel the need to express how impressed I am with the quality of the service that has been provided by JB. He is reliable, always on time, exceptionally well presented and is willing to take the initiative and lead from the front, together with the fact that he is always personally contactable. I would not hesitate to recommend JB and any of his staff to anyone.
</span>
            <i class="fa fa-quote-right fa-2x"></i>
            <br>
            <p class="testimonials_sign">Steve Edelmuth</p>
            <br>
            <br>
            <br>
            <br>

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
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="col-xs-8 col-xs-offset-2">
            <h2 style="text-align: center">Who are we?</h2>

            <br><br>
            <p class="about_us">Excuse My French Services is a new Sydney based staffing agency led by Jean-Baptiste Malandain aiming to bring the prestige of French hospitality to the heart and soul of Sydney, Australia. We specialise in providing the following services for our clients:</p>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>


        <div class="col-xs-12 col-md-3">
            <h3 class="services">Bar staff</h3>
            <br>
            <p class="services_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam id hendrerit augue. Vestibulum faucibus, nunc a fermentum sollicitudin, neque orci dignissim sapien, et vestibulum quam turpis sit amet orci. Fusce leo augue, iaculis eu semper vitae, feugiat ut velit. Sed dictum lacus quis sollicitudin ullamcorper. </p>
        </div>
        <div class="col-xs-12 col-md-3">
            <h3 class="services">Wait Staff</h3>
            <br>
            <p class="services_desc"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam id hendrerit augue. Vestibulum faucibus, nunc a fermentum sollicitudin, neque orci dignissim sapien, et vestibulum quam turpis sit amet orci. Fusce leo augue, iaculis eu semper vitae, feugiat ut velit. Sed dictum lacus quis sollicitudin ullamcorper. </p>
        </div>
        <div class="col-xs-12 col-md-3">
            <h3 class="services">Cocktail Waiters</h3>
            <br>
            <p class="services_desc"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam id hendrerit augue. Vestibulum faucibus, nunc a fermentum sollicitudin, neque orci dignissim sapien, et vestibulum quam turpis sit amet orci. Fusce leo augue, iaculis eu semper vitae, feugiat ut velit. Sed dictum lacus quis sollicitudin ullamcorper. </p>
        </div>
        <div class="col-xs-12 col-md-3">
            <h3 class="services ">Hire Equipment</h3>
            <br>
            <p class="services_desc"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam id hendrerit augue. Vestibulum faucibus, nunc a fermentum sollicitudin, neque orci dignissim sapien, et vestibulum quam turpis sit amet orci. Fusce leo augue, iaculis eu semper vitae, feugiat ut velit. Sed dictum lacus quis sollicitudin ullamcorper. </p>
            <br>
            <br>
            <br>
            <br>
            <br>

        </div>



        <div id="soon" class="col-xs-12">
            <h2>LET US TAKE CARE OF YOUR EVENT!</h2>
            <br>
            <br>
            <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">
                GET A FREE QUOTE NOW
            </button>
            <br>
            <br>
            <br>
            <br>
        </div>


        <div class="col-xs-12 col-md-10 col-md-offset-1 testimonials">
            <i class="fa fa-quote-left fa-3x"></i>
           <span> Excuse My French Services have assisted us with a variety of high-end functions and events including luxury yacht charters, corporate events, boardroom lunches and private degustation dinners and parties. JB and his team have always been professional, efficient and personal. Great service and highly organised!
</span>
            <i class="fa fa-quote-right fa-2x"></i>
            <br>
            <p class="testimonials_sign">Elite Chefs Sydney</p>
            <br>
            <br>
            <br>
            <br>
        </div>




        <!-- /.row -->
    </div>
    <!-- /.container -->
    <?php wp_footer(); ?>
</body>
</html>



