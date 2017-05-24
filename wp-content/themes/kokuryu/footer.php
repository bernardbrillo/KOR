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
  /* LOAD MORE - PRODUCT FACE */
    var $loadmore = jQuery.noConflict();
    $loadmore(function () {
        $loadmore(".product-content-FACE").slice(0, 3).show();
        $loadmore("#loadMore").on('click', function (e) {
            e.preventDefault();
            $loadmore(".product-content-FACE:hidden").slice(0, 3).slideDown();
            if ($loadmore(".product-content-FACE:hidden").length == 0) {
                $loadmore("#load").fadeOut('slow');
                $loadmore(".nomore").hide();
            }
            $loadmore('html,body').animate({
                scrollTop: $(this).offset().top
            }, 1500);
        });
    });
</script>
<script>
  /* LOAD MORE -PRODUCT LIPS */
    var $loadmore = jQuery.noConflict();
    $loadmore(function () {
        $loadmore(".product-content-LIPS").slice(0, 3).show();
        $loadmore("#loadMore").on('click', function (e) {
            e.preventDefault();
            $loadmore(".product-content-LIPS:hidden").slice(0, 3).slideDown();
            if ($loadmore(".product-content-LIPS:hidden").length == 0) {
                $loadmore("#load").fadeOut('slow');
                $loadmore(".nomore").hide();
            }
            $loadmore('html,body').animate({
                scrollTop: $(this).offset().top
            }, 1500);
        });
    });
</script>
<script>
  /* LOAD MORE -PRODUCT EYES */
    var $loadmore = jQuery.noConflict();
    $loadmore(function () {
        $loadmore(".product-content-EYES").slice(0, 3).show();
        $loadmore("#loadMore").on('click', function (e) {
            e.preventDefault();
            $loadmore(".product-content-EYES:hidden").slice(0, 3).slideDown();
            if ($loadmore(".product-content-EYES:hidden").length == 0) {
                $loadmore("#load").fadeOut('slow');
                $loadmore(".nomore").hide();
            }
            $loadmore('html,body').animate({
                scrollTop: $(this).offset().top
            }, 1500);
        });
    });
</script>
<script>
  /* LOAD MORE -PRODUCT CHEEKS */
    var $loadmore = jQuery.noConflict();
    $loadmore(function () {
        $loadmore(".product-content-CHEEKS").slice(0, 3).show();
        $loadmore("#loadMore").on('click', function (e) {
            e.preventDefault();
            $loadmore(".product-content-CHEEKS:hidden").slice(0, 3).slideDown();
            if ($loadmore(".product-content-CHEEKS:hidden").length == 0) {
                $loadmore("#load").fadeOut('slow');
                $loadmore(".nomore").hide();
            }
            $loadmore('html,body').animate({
                scrollTop: $(this).offset().top
            }, 1500);
        });
    });
</script>
<script>
  /* LOAD MORE -PRODUCT SET */
    var $loadmore = jQuery.noConflict();
    $loadmore(function () {
        $loadmore(".product-content-SET").slice(0, 3).show();
        $loadmore("#loadMore").on('click', function (e) {
            e.preventDefault();
            $loadmore(".product-content-SET:hidden").slice(0, 3).slideDown();
            if ($loadmore(".product-content-SET:hidden").length == 0) {
                $loadmore("#load").fadeOut('slow');
                $loadmore(".nomore").hide();
            }
            $loadmore('html,body').animate({
                scrollTop: $(this).offset().top
            }, 1500);
        });
    });
</script>
<script>
  /* LOAD MORE -PRODUCT LIPS */
    var $loadmore = jQuery.noConflict();
    $loadmore(function () {
        $loadmore(".product-content-SKIN").slice(0, 3).show();
        $loadmore("#loadMore").on('click', function (e) {
            e.preventDefault();
            $loadmore(".product-content-SKIN:hidden").slice(0, 3).slideDown();
            if ($loadmore(".product-content-SKIN:hidden").length == 0) {
                $loadmore("#load").fadeOut('slow');
                $loadmore(".nomore").hide();
            }
            $loadmore('html,body').animate({
                scrollTop: $(this).offset().top
            }, 1500);
        });
    });
</script>
<?php wp_footer(); ?>
</body>
</html>
