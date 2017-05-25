<?php
/*
Template Name: Contact Us
*/
get_header();?>

<div class="main-wrapper page-wrap contact-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php while ( have_posts() ) : the_post(); ?>
                  <div class="post-content">
                    <?php
                    edit_post_link();
                    the_content();?>
                  </div>
                <?php endwhile;?>

                <h1 class="get-in-touch">GET IN
                    <br>
                    TOUCH <br>
                    WITH US
                </h1>
            </div>
            <div class="col-md-6">
            </div>
        </div><!--end ROW-->
        <div class="row">
              <div class="col-md-10"></div>
              <div class="col-md-2">
                <div class="envelope"><a href="#"  data-toggle="modal" data-target="#myModal"><i class="fa fa-envelope" aria-hidden="true"></i></a></div>
                <!-- modal for contact form starts here -->
                        <div id="myModal" class="modal fade " role="dialog">
              <div class="modal-dialog modal-lg modal-md modal-xs modal-sm">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>

                  </div>
                  <div class="modal-body">
                    <script type="text/javascript" src="https://form.jotform.me/jsform/71371431424448"></script>
                  </div>
                  <div class="modal-footer">
                  </div>
                </div>

              </div>
            </div>
                <!-- modal for contact form ends here -->
              </div>
        </div><!--end ROW-->
    </div><!-- end CONTAINER-->
</div>

<?php get_footer();?>
