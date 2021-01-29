<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

<div class="subscriber-main">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="newsletter-box">
					<h2><span>Subscribe us </span>for newsletter</h2>
					<p>Stay updated with our services</p>
					<form>
						<input type="email" name="email" placeholder="Enter your email address">
						<input type="submit" name="submit" value="Subscribe">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>	

<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="footer-logo">
					<img src="<?php echo ot_get_option('logo'); ?>" title="<?php bloginfo('name'); ?>">
				</a>
				<nav class="social-list">
					<?php
						if ( function_exists( 'ot_get_option' ) ) {
						  $slides = ot_get_option( 'social_list', array() );
						  if ( ! empty( $slides ) ) {
							foreach( $slides as $slide ) {
							  echo '
							  <a href="'.$slide['link'].'"><i class="'.$slide['description'].'" aria-hidden="true"></i></a>
							  ';
							}
						  }
						
						 }
					?>
				</nav>
				<div class="footer-nav">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'footer-menu', 'menu_id' => 'primary-menu' ) ); ?>
				</div>
			</div>
		</div>
	</div>
</div>

</div><!-- #page -->


<script type="text/javascript">
	jQuery(window).scroll(function () {
		var scroll = jQuery(window).scrollTop();
		if (scroll >= 1) {
			jQuery("header, .mobile-btn").addClass("fixed");
		}
		else {
			jQuery("header, .mobile-btn").removeClass("fixed");
		}
	});
	jQuery(document).ready(function() {
		jQuery("#content-slider").lightSlider({
			item:3,
			loop:true,
			keyPress:true,
			auto:true,
			pause: 5000,
            speed: 800, //ms'
            pager:true,
            controls:false,
            adaptiveHeight: true,
            responsive : [
                {
                    breakpoint:1120,
                    settings: {
                        item:2,
                      }
                },
                {
                    breakpoint:700,
                    settings: {
                        item:1,
                      }
                }
            ]
        });
        jQuery("#content-slider2").lightSlider({
			item:1,
			loop:true,
			keyPress:true,
			auto:true,
			pause: 5000,
            speed: 800, //ms'
            pager:true,
            controls:false,
            adaptiveHeight: true,
        });
	});
</script>


<?php wp_footer(); ?>
<script>
if(jQuery.active==0){
jQuery('.wcpscwc-product-slider-1').slick('unslick').slick('reinit')
}

</script>
</body>
</html>
