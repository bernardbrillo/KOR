<?php
/*
Template Name: Our Products
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
                  <!--FACE-->
                  <div id="tab-1" class="tab-content current">
                    <?php $recent = new WP_Query("cat=4&showposts=100&order=DESC" . $paged); while($recent->have_posts()) : $recent->the_post();?>
                      <div class="col-md-4 col-sm-4 product-content-FACE">
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
                  </div><!--END FACE-->
                  <!--LIPS-->
                  <div id="tab-2" class="tab-content">
                    <?php $recent = new WP_Query("cat=5&showposts=100&order=DESC" . $paged); while($recent->have_posts()) : $recent->the_post();?>
                      <div class="col-md-4 col-sm-4 product-content-LIPS">
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
                  </div><!--END LIPS-->
                  <!-- EYES -->
                  <div id="tab-3" class="tab-content">
                    <?php $recent = new WP_Query("cat=6&showposts=100&order=DESC" . $paged); while($recent->have_posts()) : $recent->the_post();?>
                      <div class="col-md-4 col-sm-4 product-content">
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
                  </div><!--END EYES-->
                  <!--CHEEKS-->
                  <div id="tab-4" class="tab-content">
                    <?php $recent = new WP_Query("cat=7&showposts=100&order=DESC" . $paged); while($recent->have_posts()) : $recent->the_post();?>
                      <div class="col-md-4 col-sm-4 product-content">
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
                  </div><!--END CHEEKS-->
                  <!--SET-->
                  <div id="tab-4" class="tab-content">
                    <?php $recent = new WP_Query("cat=8&showposts=100&order=DESC" . $paged); while($recent->have_posts()) : $recent->the_post();?>
                      <div class="col-md-4 col-sm-4 product-content">
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
                  </div><!--END SET-->
                  <!--SKIN-->
                  <div id="tab-4" class="tab-content">
                    <?php $recent = new WP_Query("cat=9&showposts=100&order=DESC" . $paged); while($recent->have_posts()) : $recent->the_post();?>
                      <div class="col-md-4 col-sm-4 product-content">
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
                  </div><!--END SKIN-->
              <!--enf TAB-->
            </div>
        </div><!--end ROW-->
    </div><!-- end CONTAINER-->
</div>

<?php get_footer();?>
