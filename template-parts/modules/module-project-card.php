<div class="project-card--wrap">
<?php if(is_front_page()) { ?>

	<?php 
		$args = array( 
		    'post_type' => 'projecten',
		    'meta_query' => array(
		        array(
		            'key' => 'show_on_the_home_page',
		            'value' => '1',
		        )
		    )
		);
		$loop = new WP_Query( $args );
	?>

	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<article class="project-card">

			

			<a href="<?php the_permalink(); ?>">
			<div style="position: relative;">
			<span class="work-all__overlay">
				<span class="work-all__btn-case-study">Bekijk Project</span>
			</span>
			<?php $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "size" );   ?>
			<div class="project-card__img" style="background-image: url(<?php echo $thumbnail[0]; ?>);"></div>
			</div>
			<header class="project-card__header">
				<span class="project-card__title"><?php the_title(); ?></span>
			</header>
			</a>

			<section class="project-card__section">
				<?php the_content(); ?>
			</section>

			<footer class="project-card__footer">
			<a href="<?php the_permalink(); ?>" class="btn btn--contact">Merr Info</a>
			</footer>
		</article>



	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>


<?php } else { ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<article class="project-card">



			<a href="<?php the_permalink(); ?>">
			<div style="position: relative;">
			<span class="work-all__overlay">
				<span class="work-all__btn-case-study">Bekijk Project</span>
			</span>
			<?php $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "size" );   ?>
			<div class="project-card__img" style="background-image: url(<?php echo $thumbnail[0]; ?>);"></div>
			</div>

			<header class="project-card__header">
				<span class="project-card__title"><?php the_title(); ?></span>
			</header>
			</a>

			<section class="project-card__section">
				<?php the_content(); ?>
			</section>
		
		</article>

	<?php endwhile; else : ?>

		</p>No Projects to see<p>

	<?php endif; ?>

<?php } ?>
</div>