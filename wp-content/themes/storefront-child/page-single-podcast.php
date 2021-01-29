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

<div class="single-podcast-banner">
	<img src="<?php echo get_template_directory_uri(); ?>/images/podcast10.jpg" style="height: 362px;" />
	<div class="episode-overlay">
		<div class="episode-meta">
			<span>21 Oct 2020</span>
			<span>Fitness</span>
		</div>
		<h3>Adhuc debet vis cu, at ius utroque cotidieque</h3>
	</div>
</div>

<div class="single-podcast-content">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="single-main-pod">	
					<div class="single-pod-left">
						<div class="podcast-meta-data">
							<nav>
								<a href="#" class="date"><i class="fa fa-calendar"></i> 21 Oct 2020</a>
								<a href="#" class="category-name">Fitness</a>
							</nav>
						</div>
						<h2>Adhuc debet vis cu, at ius utroque cotidieque.</h2>
						<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
						<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
						<div class="gallery col2">
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/pod5.jpg"></a>
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/pod4.jpg"></a>
						</div>
						<blockquote>Bross the lupsamer brocked righ at cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </blockquote>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
						<p> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequa aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
						<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
						<div class="podcast-category">
							<nav>
								<a href="#">#Podcast</a>
								<a href="#">#Fitness</a>
								<a href="#">#Health</a>
							</nav>
						</div>
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
							<div class="episode-box">
								<div class="episode-thumb shadow-right">
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/pod3.jpg" /></a>
								</div>
								<div class="episode-overlay">
									<h3>How to increase your fashion sense and style.</h3>
									<div class="episode-meta">
										<span>Fashion Podcast</span>
										<span>1 August 2020</span>
									</div>
									<div class="episode-btn">
										<a href="#">Listen Episode <i class="fa fa-caret-right"></i></a>
									</div>
								</div>
							</div>
							<div class="episode-box">
								<div class="episode-thumb shadow-right">
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/pod2.jpg" /></a>
								</div>
								<div class="episode-overlay">
									<h3>Which county is best for travelling in Covid-19</h3>
									<div class="episode-meta">
										<span>Infra Podcast</span>
										<span>1 August 2020</span>
									</div>
									<div class="episode-btn">
										<a href="#">Listen Episode <i class="fa fa-caret-right"></i></a>
									</div>
								</div>
							</div>
							<div class="episode-box">
								<div class="episode-thumb shadow-right">
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/pod1.jpg" /></a>
								</div>
								<div class="episode-overlay">
									<h3>See the adventures of your lifetime ever</h3>
									<div class="episode-meta">
										<span>Fashion Podcast</span>
										<span>1 August 2020</span>
									</div>
									<div class="episode-btn">
										<a href="#">Listen Episode <i class="fa fa-caret-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php
//do_action( 'storefront_sidebar' );
get_footer();
