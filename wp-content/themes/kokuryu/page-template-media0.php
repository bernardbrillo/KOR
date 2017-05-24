<?php
/*
Template Name: 0Media
*/
get_header();?>

<div class="main-wrapper page-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="main-wrapper">
                  <h1 class="title-focus-page"><span>Videos</span></h1>
                </div>
                <div class="post-video-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/EQ3uQea7DGE?showinfo=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <?php while ( have_posts() ) : the_post(); ?>
                  <div class="post-content">
                    <?php
                    edit_post_link();
                    the_content();?>
                  </div>
                <?php endwhile;?>
            </div>
            <div class="col-md-5">
              <div class="main-wrapper">
                <div class="main-wrapper">
                  <h1 class="title-focus-page"><span>Articles</span></h1>
                </div>
                <?php $recent = new WP_Query("cat=10&showposts=6&order=DESC" . $paged); while($recent->have_posts()) : $recent->the_post();?>
                <div class="col-md-6 Lpad-remove">
                  <div class="article-wrap">
                    <div class="article-thumb">
                      <?php the_post_thumbnail('large');?>
                    </div>
                    <div class="article-info">
                      <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                      <p><?php the_time('F j, Y'); ?></p>
                    </div>
                  </div>
                </div>
                <?php endwhile; ?>
              </div>
            </div>
        </div><!--end ROW-->
    </div><!-- end CONTAINER-->
</div>

<?php get_footer();?>
