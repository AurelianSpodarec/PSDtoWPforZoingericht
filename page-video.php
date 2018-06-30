<?php get_header(); ?>

<main class="container">
<div class="section--main">

	<h2 class="header-triangle header"><span><?php the_title(); ?></span></h2> 
	<!-- <div class="header-underline"></div> -->
		
	<?php if ( have_rows( 'video_section' ) ) : ?>
		<?php while ( have_rows( 'video_section' ) ) : the_row(); ?>
			
			<div class="video__row">
			<div class="video__row--inner">

				<div class="video__embed-wrap video__embed-wrap--desktop">
					<iframe class="video__embed" src="https://www.youtube.com/embed/<?php the_sub_field( 'video_embed' ); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				</div>
				<div class="video__content">
					<h2 class="video__title"><?php the_sub_field( 'video_title' ); ?></h2>
					<div class="video__embed-wrap video__embed-wrap--mobile">
						<iframe class="video__embed" src="https://www.youtube.com/embed/<?php the_sub_field( 'video_embed' ); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					</div>
					<p class="video__desc"><?php the_sub_field( 'video_description' ); ?></p>
				</div>

			</div>
			</div>
			
		<?php endwhile; ?>
	<?php else : ?>
		<?php // no rows found ?>
	<?php endif; ?>



	

</div>
</main>

<?php get_footer(); ?>