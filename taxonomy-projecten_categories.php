<?php get_header(); ?>


<main class="container">
<div class="section--main">

	<h1><?php echo single_cat_title() ?></h1>

	<div class="row">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<article class="project-card">

			<a href="<?php the_permalink(); ?>">
			<?php $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "size" );   ?>
			<div class="project-card__img" style="background-image: url(<?php echo $thumbnail[0]; ?>);"></div>

			<header class="project-card__header">
				<p class="project-card__title"><?php the_title(); ?></p>
			</header>
			</a>

			<section class="project-card__section">
				<?php the_content(); ?>
			</section>
		
		</article>

	<?php endwhile; else : ?>

		No the loop in taxonomy doesn't work

	<?php endif; ?>
	</div>
</div>
</main>

<?php get_footer(); ?>