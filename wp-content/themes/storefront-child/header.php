<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!--Bootstrap CSS-->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animations.css" type="text/css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/include.css">


<?php wp_head(); ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/lightslider.js"></script>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site <?php if ( is_front_page() && !is_home() ) { } else { echo "inner-page"; } ?>">
	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo">
						<img src="<?php echo ot_get_option('logo'); ?>" title="<?php bloginfo('name'); ?>">
					</a>
				</div>
				<div class="col-sm-9">
					<div class="menu-right">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'main-menu', 'menu_id' => 'primary-menu' ) ); ?>
						<a href="javascript:;" class="mobile-btn" id="mobile-btn"></a>
					</div>
				</div>
			</div>
		</div>
	</header>

	<?php if ( is_front_page() && !is_home() ) { ?>
	<div class="slider">
		<?php if( have_rows('home_slider') ):
            while ( have_rows('home_slider') ) : the_row(); ?>
            	<?php if( get_sub_field('banner_image') ) : ?>
            	<img src="<?php echo the_sub_field('banner_image'); ?>" />
				<div class="banner-overlay">
					<div class="overlay-left">
						<!-- <img src="<?php //echo get_template_directory_uri(); ?>/images/banner-sun.png" />
						<img src="<?php //echo get_template_directory_uri(); ?>/images/banner-girl.png" /> -->
					</div>
					<div class="overlay-right">
						<?php if( get_sub_field('episode_no') ) : ?>
							<div class="episode-no"><span><?php echo the_sub_field('episode_no'); ?></span></div>
						<?php endif; ?>
						<?php if( get_sub_field('slider_title') ) : ?>
							<div class="episode-title"><?php echo the_sub_field('slider_title'); ?></div>
						<?php endif; ?>
						<?php if( get_sub_field('slider_button_text') ) : ?>
							<div class="btn-podcast"><a href="<?php echo the_sub_field('slider_button_link'); ?>"><?php echo the_sub_field('slider_button_text'); ?> <i class="fa fa-caret-right"></i></a></div>
						<?php endif; ?>
					</div>
				</div>
				<?php endif; ?>
        <?php endwhile;
        else :
        endif;
        ?>
		<!-- <img src="<?php echo get_template_directory_uri(); ?>/images/banner-bg.png" />
		<div class="banner-overlay">
			<div class="overlay-left">
			</div>
			<div class="overlay-right">
				<div class="episode-no"><span>Episode 1</span></div>
				<div class="episode-title"><span>Brand New </span>podcast episode</div>
				<div class="btn-podcast"><a href="https://motalkmoswag.com/podcast/how-to-increase-your-fashion-sense-and-style/">Listen Podcast <i class="fa fa-caret-right"></i></a></div>
			</div>
		</div> -->
	</div>
	<?php } elseif( is_shop() ) { ?>
		<div class="shop-banner">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="shop-banner-box">
							<div class="item">
						    	<ul id="content-slider2" class="content-slider">
						    		<?php  
										$args = array( 'post_type' => 'product', 'posts_per_page' => -1, 'order' => 'DESC',
											'tax_query' => array(
												array(
													'taxonomy' => 'product_cat',
													'field'    => 'term_id',
													'terms'    => array(25),
												),
											),
										);
										ini_set("display_errors",1);
										$loop = new WP_Query( $args );
										while ( $loop->have_posts() ) : $loop->the_post();
											$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
											
											$taxnomy=  get_the_terms($post->ID ,"product_cat");
										                	//print_r($taxnomy);  //die;
									?>
										<li>
											<div class="slider-product-box">
												<div class="slider-product-thumb">
													<a href="<?php echo the_permalink(); ?>"><img src="<?php echo $feat_image ; ?>"></a>
												</div>
												<div class="slider-product-des">
													<div class="slider-product-cate">
														<span><?php echo $taxnomy[0]->name;?></span>
													</div>
													<div class="slider-product-title">
														<a href="<?php echo get_term_link($taxnomy[0]->term_id); ?>" class="name-product"><?php echo the_title(); ?></a>
													</div>
													<div class="slider-product-price">
														<?php $price = get_post_meta( get_the_ID(), '_price', true ); ?>
														<div class="price-product-slider">Starting @ 
															<span><?php echo wc_price( $price ); ?></span>
														</div>
														<div class="wpb_cart_button grid-price"><a rel="nofollow" href="/demo/shop/?add-to-cart=<?php echo get_the_ID();?>" data-quantity="1" data-product_id="<?php echo get_the_ID();?>" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Shop Now</a></div>
													</div>
												</div>
												
											</div>
										</li>
									<?php endwhile; ?>
						    	</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		    
		    
			<!-- <div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="shop-banner-box"><?php //echo do_shortcode('[products_slider cats="25" slide_to_show="1" slide_to_scroll="1" autoplay="true" dots="true" arrows="false" autoplay_speed="8000"]'); ?></div>
					</div>
				</div>
			</div> -->
		</div>
	<?php } elseif (is_singular('podcast')) { ?>
		<div class="single-podcast-banner">
			<img src="<?php echo get_template_directory_uri(); ?>/images/podcast10.jpg" />
			<div class="episode-overlay">
				<div class="episode-meta">
					<span><?php echo the_field('date_recorded'); ?></span>
					<span>Fitness</span>
				</div>
				<h3><?php echo the_title(); ?></h3>
				<div class="overlay-music">
					<?php echo the_excerpt(); ?>
				</div>
			</div>
		</div>
		
	<?php } else { ?>
		<?php if ( has_post_thumbnail() && ! post_password_required() && ! is_attachment() ) : ?>
		<div class="inner-banner">
			<img src="<?php echo the_post_thumbnail_url(); ?>" />
			<div class="page-overlay"><h1><?php echo the_title(); ?></h1></div>
		</div>
		<?php endif; ?>
	<?php } ?>

	