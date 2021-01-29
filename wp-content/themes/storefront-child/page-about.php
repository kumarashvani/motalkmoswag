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

<?php while ( have_posts() ) : the_post(); ?>

<div class="our-progress">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="our-progress-box">
					<?php echo the_content(); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="our-mission">
	<div class="container">
		<div class="row">
			<?php if( get_field('mission_heading') ) : ?>
			<div class="col-sm-12">
				<h2 class="section-title2 text-right"><?php echo the_field('mission_heading'); ?></h2>
			</div>
			<?php endif; ?>
			<div class="col-sm-12">
				<div class="mission-box">
					<div class="mission-left">
						<?php echo the_field('mission_content'); ?>
						<?php if( get_field('founder_name') ) : ?>
							<h5><?php echo the_field('founder_name'); ?></h5>
						<?php endif; ?>
						<?php if( get_field('mission_designation') ) : ?>
							<h6><?php echo the_field('mission_designation'); ?></h6>
						<?php endif; ?>	
					</div>
					<?php if( get_field('mission_image') ) : ?>
					<div class="mission-right">
						<div class="video-box">
							<a href="<?php if( get_field('mission_video_url') ) : echo the_field('mission_video_url'); else : echo the_field('mission_image');  endif;  ?>" rel="example_group" class="fancybox image">
								<img src="<?php echo the_field('mission_image'); ?>" />
							</a>
							<?php if( get_field('mission_video_url') ) : ?><a href="<?php echo the_field('mission_video_url'); ?>" class="fancybox image play-btn" rel="example_group"><img src="<?php echo get_template_directory_uri(); ?>/images/play.png" /></a>
						<?php endif; ?>
						</div>
					</div>
					<?php endif; ?>	
				</div>
			</div>
		</div>
	</div>
</div>
<?php endwhile; ?>

<div class="our-team">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="title-center">Our team</h2>
			</div>
			<div class="col-sm-12">
				<div class="team-section">
					<div class="item">
					    <ul id="content-slider" class="content-slider">
					    	<?php  
					            $args = array( 'post_type' => 'team', 'posts_per_page' => -1, 'order' => 'ASC', );
								$loop = new WP_Query( $args );
					            while ( $loop->have_posts() ) : $loop->the_post();
					            $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
					        ?>
					            <li>
					            	<div class="team-main-box">
						            	<div class="team-thumb">
											<img src="<?php echo $feat_image; ?>" />
										</div>
						            	<div class="team-box">
											<div class="team-name"><?php echo the_title(); ?></div>
											<h5><?php echo the_field('designation'); ?></h5>
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
</div>




<?php
//do_action( 'storefront_sidebar' );
get_footer();
