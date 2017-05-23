<div class="main-wrapper footer-wrap">
  <div class="container">
    <div class="row">
        <div class="col-md-12">
            &copy; 2017 <?php bloginfo('name'); ?>. All Rights Reserved
        </div>
    </div><!--end ROW-->
  </div><!-- end CONTAINER-->
</div>
<!-- SCRIPTS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.js"></script>

<script>
/* Load the Product category tabs*/
var $tabit = jQuery.noConflict();
$tabit(function(){
	$tabit('ul.tabs li').click(function(){
		var tab_id = $tabit(this).attr('data-tab');

		$tabit('ul.tabs li').removeClass('current');
		$tabit('.tab-content').removeClass('current');

		$tabit(this).addClass('current');
		$tabit("#"+tab_id).addClass('current');
	})
})
</script>
<script>
  /* Load more content with jQuery */
    var $loadmore = jQuery.noConflict();
    $loadmore(function () {
        $loadmore(".product-content").slice(0, 6).show();
        $loadmore("#loadMore").on('click', function (e) {
            e.preventDefault();
            $loadmore(".product-content:hidden").slice(0, 4).slideDown();
            if ($loadmore(".product-content:hidden").length == 0) {
                $loadmore("#load").fadeOut('slow');
                $loadmore(".nomore").hide();
            }
            $loadmore('html,body').animate({
                scrollTop: $(this).offset().top
            }, 1500);
        });
    });
</script>
<!--  for google maps-->
<?php wp_footer(); ?>
</body>
</html>
