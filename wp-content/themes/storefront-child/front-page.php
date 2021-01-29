<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package storefront
 */

get_header(); ?>

<div class="current-episode">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="section-title d-flex flex-wrap flex-row-reverse justify-content-between position-relative">
						<a href="https://motalkmoswag.com/podcategory/current/">Explore More</a>
						<h2>Current Episodes</h2>
					</div>
				</div>
				<?php  
                    $args = array( 'post_type' => 'podcast', 'posts_per_page' => -1, 'order' => 'ASC',

                        'tax_query' => array(
                            array(
                                'taxonomy' => 'podcategory',
                                'field'    => 'current',
                                'terms'    => array( '46' ),
                                'operator' => 'IN'
                            ),
                        ),

                     );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
                    $excerpt= get_the_excerpt();
                    $content = get_the_content();
                    $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                ?>
                	<div class="col-sm-4">
						<div class="episode-box">
							<div class="episode-thumb shadow-pink">
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
					</div>
                <?php endwhile; ?>
			</div>
		</div>
	</div>

	<div class="current-episode episodes">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="section-title d-flex flex-wrap flex-row-reverse justify-content-between position-relative">
						<a href="https://motalkmoswag.com/podcast/">Explore More</a>
						<h2>Episodes</h2>
					</div>
				</div>

				<?php  
                    $args = array( 'post_type' => 'podcast', 'posts_per_page' => 5, 'order' => 'ASC', );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
                    $excerpt= get_the_excerpt();
                    $content = get_the_content();
                    $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                ?>
                	<div class="col-sm-4">
						<div class="episode-box">
							<div class="episode-thumb shadow-right">
								<a href="<?php echo the_permalink(); ?>"><img src="<?php echo $feat_image; ?>"></a>
							</div>
							<div class="episode-overlay">
								<h3><?php echo the_title(); ?></h3>
								<div class="episode-meta">
									<span>Social Podcast</span>
									<?php if( get_field('date_recorded') ): ?>
										<span><?php echo the_field('date_recorded'); ?></span>
									<?php endif; ?>
								</div>
								<div class="episode-btn">
									<a href="<?php echo the_permalink(); ?>">Listen Episode <i class="fa fa-caret-right"></i></a>
								</div>
							</div>
						</div>
					</div>
                <?php endwhile; ?>
				<!-- <div class="col-sm-4">
					<div class="episode-box">
						<div class="episode-thumb shadow-right">
							<a href="https://motalkmoswag.com/single-podcast/"><img src="<?php echo get_template_directory_uri(); ?>/images/epi4.png" /></a>
						</div>
						<div class="episode-overlay">
							<h3>Being Social active what thats mean for us</h3>
							<div class="episode-meta">
								<span>Social Podcast</span>
								<span>1 August 2020</span>
							</div>
							<div class="episode-btn">
								<a href="https://motalkmoswag.com/single-podcast/">Listen Episode <i class="fa fa-caret-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="episode-box">
						<div class="episode-thumb shadow-right">
							<a href="https://motalkmoswag.com/single-podcast/"><img src="<?php echo get_template_directory_uri(); ?>/images/epi5.png" /></a>
						</div>
						<div class="episode-overlay">
							<h3>Being creative and having art in mind</h3>
							<div class="episode-meta">
								<span>Education Podcast</span>
								<span>1 August 2020</span>
							</div>
							<div class="episode-btn">
								<a href="https://motalkmoswag.com/single-podcast/">Listen Episode <i class="fa fa-caret-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="episode-box">
						<div class="episode-thumb shadow-right">
							<a href="https://motalkmoswag.com/single-podcast/"><img src="<?php echo get_template_directory_uri(); ?>/images/epi6.png" /></a>
						</div>
						<div class="episode-overlay">
							<h3>How to increase your fashion sense and style.</h3>
							<div class="episode-meta">
								<span>Health Podcast</span>
								<span>1 August 2020</span>
							</div>
							<div class="episode-btn">
								<a href="https://motalkmoswag.com/single-podcast/">Listen Episode <i class="fa fa-caret-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="episode-box">
						<div class="episode-thumb shadow-right">
							<a href="https://motalkmoswag.com/single-podcast/"><img src="<?php echo get_template_directory_uri(); ?>/images/epi7.png" /></a>
						</div>
						<div class="episode-overlay">
							<h3>How to be happy everytime for yourself</h3>
							<div class="episode-meta">
								<span>Social Podcast</span>
								<span>1 August 2020</span>
							</div>
							<div class="episode-btn">
								<a href="https://motalkmoswag.com/single-podcast/">Listen Episode <i class="fa fa-caret-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="episode-box">
						<div class="episode-thumb shadow-right">
							<a href="https://motalkmoswag.com/single-podcast/"><img src="<?php echo get_template_directory_uri(); ?>/images/epi8.png" /></a>
						</div>
						<div class="episode-overlay">
							<h3>How to be more stronger in relationship</h3>
							<div class="episode-meta">
								<span>Relation Podcast</span>
								<span>1 August 2020</span>
							</div>
							<div class="episode-btn">
								<a href="https://motalkmoswag.com/single-podcast/">Listen Episode <i class="fa fa-caret-right"></i></a>
							</div>
						</div>
					</div>
				</div> -->
			</div>
		</div>
	</div>

	<div class="selling-stuff">
		<img src="<?php echo get_template_directory_uri(); ?>/images/sec-bg.jpg" />
		<div class="stuff-overlay">
			<div class="stuff-overlay-inner">
				<h2><span>We selling stuffs at very </span>good prices</h2>
				<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut voluptatem sequi nesciunt.</p>
				<div class="btn-group">
					<a href="https://motalkmoswag.com/shop/" class="btn-white">Shop now</a>
					<!--<a href="#" class="btn-outline">Explore More</a>-->
				</div>
			</div>
		</div>
	</div>


<?php
//do_action( 'storefront_sidebar' );
get_footer();
