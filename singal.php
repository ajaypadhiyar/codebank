<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package rhythm
 */

get_header();
?>

<main id="primary" class="site-main">
	<section class="section section--singal">
		<div class="wrap">
			<div class="row">
				<div class="col-8">
					<div class="singal__title">
						<h1 class="text-white">The Most Popular Web Design Trends in 2021 Year.</h1>
						<ul>
							<li>
								<a href="#"> 5 December</a>
							</li>
							<li>
								<a href="#"> John Doe</a>
							</li>
							<li>
								<a href="#">Design</a>
							</li>
							<li>
								<a href="#"> 5 Comments</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-4">
					<ul>
						<li>
							<a href="http://localhost/rhythm/">Home</a>
						</li>
						<li>
							<a href="http://localhost/rhythm/blog/">Blog</a>
						</li>
						<li>
							<a href="#">Singal</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section class="section section--blog--info">
		<div class="wrap">
			<div class="row">
				<div class="col-9">
					<?php
					while (have_posts()):
						the_post();

						get_template_part('template-parts/content', get_post_type());

						the_post_navigation(
							array(
								'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'rhythm') . '</span> <span class="nav-title">%title</span>',
								'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'rhythm') . '</span> <span class="nav-title">%title</span>',
							)
						);

						// If comments are open or we have at least one comment, load up the comment template.
						if (comments_open() || get_comments_number()):
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>
				</div>
				<div class="col-3">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</section>
</main><!-- #main -->

<?php

get_footer();
