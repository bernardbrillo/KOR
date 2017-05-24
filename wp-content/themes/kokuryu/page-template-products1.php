<?php
/*
Template Name: Our Products1
*/
get_header();?>

<div class="main-wrapper page-wrap">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php while ( have_posts() ) : the_post(); ?>
          <h1 class="prod-title"><?php the_title();?></h1>
          <?php
          edit_post_link();
          the_content();
        endwhile;?>
        <div class="main-wrapper">
          <!--TAB-->
          <ul class="tabs">
            <li class="tab-link current" data-tab="tab-1">Face</li>
            <li class="tab-link" data-tab="tab-2">Lips</li>
            <li class="tab-link" data-tab="tab-3">Eyes</li>
            <li class="tab-link" data-tab="tab-4">Cheeks</li>
            <li class="tab-link" data-tab="tab-5">Set</li>
            <li class="tab-link" data-tab="tab-6">Skin</li>
          </ul>
          <!--FACE TAB CONTENT-->
          <div id="tab-1" class="tab-content current">
            <?php $recent = new WP_Query("cat=3&showposts=100&order=DESC" . $paged); while($recent->have_posts()) : $recent->the_post();?>
            <div class="col-md-4 product-content-face">
              <div class="product-box-page">
                <div class="product-thumb">
                  <?php the_post_thumbnail('large');?>
                </div>
                <div class="product-info-page">
                  <?php
                  $category = get_the_category( $custompost );
                  $category_link = get_category_link( $category );?>
                  <p><?php echo $category[0]->cat_name;?></p>
                  <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                </div><!--PRODUCT INFO-->
              </div><!--PRODUCT BOX-->
            </div>
            <?php endwhile; ?>
            <div class="showmore">
              <a href="#" id="loadMore" class="nomore">Read More</a>
            </div>
          </div><!-- END FACE TAB-->
          <!-- LIPS-- >
          <div id="tab-2" class="tab-content">
            <?php $recent = new WP_Query("cat=3&showposts=100&order=DESC" . $paged); while($recent->have_posts()) : $recent->the_post();?>
            <div class="col-md-4 product-conten-face">
              <div class="product-box-page">
                <div class="product-thumb">
                  <?php the_post_thumbnail('large');?>
                </div>
                <div class="product-info-page">
                  <?php
                  $category = get_the_category( $custompost );
                  $category_link = get_category_link( $category );?>
                  <p><?php echo $category[0]->cat_name;?></p>
                  <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                </div><!--PRODUCT INFO-->
              </div><!--PRODUCT BOX-->
            </div>
            <?php endwhile; ?>
            <div class="showmore">
              <a href="#" id="loadMore" class="nomore">Read More</a>
            </div>
          </div>
<!--       <!-- EYES -- >
          <div id="tab-3" class="tab-content">
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
          </div>
          <!-- CHEEKS-- >
          <div id="tab-4" class="tab-content">
            Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </div>
          <!-- SET -->
          <div id="tab-4" class="tab-content">
            Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </div>
          <!-- SKIN -->
          <div id="tab-4" class="tab-content">
            Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </div>
        </div>
      </div>
    </div><!--end ROW-->
  </div><!-- end CONTAINER-->
</div>

<?php get_footer();?>
