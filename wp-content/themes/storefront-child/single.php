<?php
/**
 * The template for displaying all single posts.
 *
 * @package storefront
 */

get_header(); ?>

<div class="single-podcast-content">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="single-main-pod">	
					<div class="single-pod-left">
						<?php while ( have_posts() ) : the_post(); ?>
						<div class="podcast-meta-data">
							<nav>
								<?php if( get_field('date_recorded') ) : ?>
									<a href="#" class="date"><i class="fa fa-calendar"></i> <?php echo the_field('date_recorded'); ?></a>
								<?php endif; ?>
								<a href="#" class="category-name"><?php echo single_cat_title(); ?> Fitness</a>
							</nav>
						</div>
						<h2><?php echo the_title(); ?></h2>
						<?php echo the_content(); ?>
						
						<div class="leave-reply">
							<h2>Leave A Reply</h2>
							<form>
								<div class="form-field field-name">
									<input type="text" name="name" placeholder="Your Name">
								</div>	
								<div class="form-field field-email">
									<input type="email" name="name" placeholder="Email">
								</div>	
								<div class="form-field textarea">
									<textarea placeholder="Your Message"></textarea>
								</div>	
								<div class="form-field">
									<input type="submit" name="submit" value="Submit">
								</div>
							</form>
						</div>
						<?php endwhile; ?>
					</div>
					<div class="single-pod-right">
						<div class="sidebar">
							<div class="subscribe-podcast">
								<div class="subscribe-podcast-thumb">
									<img src="<?php echo get_template_directory_uri(); ?>/images/subs.png">
								</div>
								<div class="subs-content">
									<h4>Serena Lee</h4>
									<h6>Host</h6>
									<a href="#" class="btn-dark">Subscribe Podcast</a>
								</div>
							</div>
							<div class="section-title d-flex flex-wrap flex-row-reverse justify-content-between position-relative">
								<a href="#">Explore More</a>
								<h2>Episodes</h2>
							</div>
							<div class="sidebar-episode">
								<?php  
				                    $args = array( 'post_type' => 'podcast', 'posts_per_page' => 3, 'order' => 'ASC', );
				                    $loop = new WP_Query( $args );
				                    while ( $loop->have_posts() ) : $loop->the_post();
				                    $excerpt= get_the_excerpt();
				                    $content = get_the_content();
				                    $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
				                ?>
				                	<div class="episode-box">
										<div class="episode-thumb shadow-right">
											<a href="<?php echo the_permalink(); ?>"><img src="<?php echo $feat_image; ?>"></a>
										</div>
										<div class="episode-overlay">
											<h3><?php echo the_title(); ?></h3>
											<div class="episode-meta">
												<span>Fashion Podcast</span>
												<?php if( get_field('date_recorded') ): ?>
													<span><?php echo the_field('date_recorded'); ?></span>
												<?php endif; ?>
											</div>
											<div class="episode-btn">
												<a href="<?php echo the_permalink(); ?>">Listen Episode <i class="fa fa-caret-right"></i></a>
											</div>
										</div>
									</div>
				                <?php endwhile; ?>
				            </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>




<!-- 	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		//while ( have_posts() ) :
			//the_post();

			//do_action( 'storefront_single_post_before' );

			//get_template_part( 'content', 'single' );

			//do_action( 'storefront_single_post_after' );

		//endwhile; // End of the loop.
		?>

		</main>
	</div>-->

<?php
//do_action( 'storefront_sidebar' );
get_footer();
