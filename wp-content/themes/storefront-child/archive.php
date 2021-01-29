<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package storefront
 */

get_header(); ?>

<div class="current-episode">
	<div class="container">
		<div class="row justify-content-center">
			<?php if ( have_posts() ) : ?>
			<div class="col-sm-12 justify-content-center">
				<div class="section-title d-flex flex-wrap position-relative justify-content-center">
					<h2><?php
							the_archive_title( );
						?>
					</h2>
				</div>
			</div>
			<?php while ( have_posts() ) :
				the_post(); ?>
        	<div class="col-sm-4">
				<div class="episode-box">
					<div class="episode-thumb shadow-right">
						<a href="<?php echo the_permalink(); ?>"><img src="<?php echo the_post_thumbnail_url(); ?>"></a>
					</div>
					<div class="episode-overlay">
						<h3><?php echo the_title(); ?></h3>
						<div class="episode-meta">
							<span class="cat-name">
								<?php
								the_archive_title( );
								?> <span>&nbsp; Podcast</span>
							</span>
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
            <?php else :
				get_template_part( 'content', 'none' );
			endif;
			?>
		</div>
	</div>
</div>





	
	<!-- <div class="content-area">
		<main class="container">
			<div class="row">
				<div class="col-sm-12">

					<?php //if ( have_posts() ) : ?>

						<header class="page-header">
							<?php
								//the_archive_title( '<h1 class="page-title2">', '</h1>' );
								//the_archive_description( '<div class="taxonomy-description">', '</div>' );
							?>
						</header>

						<?php
						//get_template_part( 'loop' );

					//else :

						//get_template_part( 'content', 'none' );

					//endif;
					?>
				</div>
			</div>

		</main>
	</div> -->

<?php
//do_action( 'storefront_sidebar' );
get_footer();
