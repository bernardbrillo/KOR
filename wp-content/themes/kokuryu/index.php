<?php get_header();?>
<div class="main-wrapper">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="<?php bloginfo('template_url');?>/images/slide1.jpg">
        <div class="carousel-caption-custom">
          <h2 class="black">Lorem ipsum dolor sit amet,</h2>
          <h3 class="black">consectetur adipiscing elit. Nulla aliquet luctus risus finibus dapibus</h3>
        </div>
      </div>
      <div class="item">
        <img src="<?php bloginfo('template_url');?>/images/slide2.jpg">
        <div class="carousel-caption-custom">
          <h2 class="white">Lorem ipsum dolor sit amet,</h2>
          <h3 class="white">consectetur adipiscing elit. Nulla aliquet luctus risus finibus dapibus</h3>
        </div>
      </div>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div><!--SLIDER-->
<!--PRODUCTS -->
<div class="main-wrapper wrap-content">
  <div class="container">
    <div class="row">
      <div class="main-wrapper home-products">
        <h1 class="title-focus"><span>Our Products</span></h1>
      </div>
      <div class="main-wrapper">
      <?php $recent = new WP_Query("cat=3&showposts=6&order=DESC" . $paged); while($recent->have_posts()) : $recent->the_post();?>
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
    </div>
  </div><!--end ROW-->
</div><!-- end CONTAINER-->
</div>
<!--NEWSLETTER-->
<div class="main-wrapper newsletter">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
          <div class="newsletter-wrap">
            <div class="nlabel">Subscribe to Newsletter</div>
            <div class=ninput>
              <script type="text/javascript" src="https://form.jotform.me/jsform/71368843224459"></script>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
<!--CONTACT FORM -->
<div class="main-wrapper wrap-contact wrap-content">
  <div class="container">
    <div class="row">
      <div class="main-wrapper home-products">
        <h1 class="title-focus"><span>Contact Us</span></h1>
      </div>
      <p class="contactsay">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
      <div class="icon-wrap">
          <div class="icon-box"><a href="#"><i class="fa fa-lg fa-twitter" aria-hidden="true"></i></i></a></div>
          <div class="icon-box"><a href="#"><i class="fa fa-lg fa-facebook" aria-hidden="true"></i></a></div>
          <div class="icon-box"><a href="#"><i class="fa fa-lg fa-instagram" aria-hidden="true"></i></a></div>
          <div class="icon-box"><a href="#"><i class="fa fa-lg fa-youtube-play" aria-hidden="true"></i></a></div>
      </div>
      <div class="main-wrapper">
        <div class="col-md-8">
            <script type="text/javascript" src="https://form.jotform.me/jsform/71371431424448"></script>
        </div>
      </div>
    </div><!--end ROW-->
  </div><!-- end CONTAINER-->
</div>
<?php get_footer();?>
