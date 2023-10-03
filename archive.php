<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rhythm
 */

get_header();
?>

<main id="primary" class="site-main">

<section class="section section--blog mt-100">
		<div class="wrap">
			<div class="blog__title text-center">
				<?php
				the_archive_title('<h2 class="mb-0">', '</h2>');
				?>
			</div>
			<div class="row mt-100">

		<?php if (have_posts()): ?>

			<header class="page-header">
				
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while (have_posts()):
				the_post(); ?>

				<div class="col-4">
					<?php get_template_part('template-parts/content', 'blog'); ?>
				</div>

			<?php 
			endwhile;

			the_posts_navigation();

		else:

			get_template_part('template-parts/content', 'none');

		endif;
		?>
		</div>
		</div>
	</section>
</main><!-- #main -->

<?php
get_footer();
