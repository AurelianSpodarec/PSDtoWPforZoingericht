<?php get_header(); ?>


<main class="container">
<div class="section--main">

	<h2 class="header-triangle header"><span><?php echo single_cat_title() ?></span></h2> 
	
	<?php get_template_part( 'template-parts/modules/module', 'project-card' ); ?>
	
</div>
</main>

<?php get_footer(); ?>