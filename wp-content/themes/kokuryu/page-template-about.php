<?php
/*
Template Name: About Us
*/
get_header();?>

<div class="main-wrapper page-wrap about-wrap">
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
            </div>
        </div><!--end ROW-->
    </div><!-- end CONTAINER-->
</div>

<?php get_footer();?>
