<?php get_header(); ?>

<main class="container">
<div class="section--main">

	<h2 class="header-triangle header"><span><?php the_title(); ?></span></h2> 
	
	<div>
	<div class="service-card__img" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>             
	    <?php the_content(); ?>
	<?php endwhile; else:?>
	    <h3>Whoops! Contact form not working!</h3>
	<?php endif; ?>
	</div>

</div>
</main>

<?php get_footer(); ?>