<?php get_header(); ?>

<main class="container">
<div class="section--main">

   <?php
        $args = array( 
          'post_type' => 'services'
        );

        $loop = new WP_Query( $args );

        $counter = 0;
    ?>


    <?php while ( $loop->have_posts() ) : $loop->the_post(); $count++; ?>

    	<?php if ( $counter % 2 === 0) : ?>
    	<article class="service-card">
       		<h2 class="service-card__title"><?php the_title(); ?></h2> 

       		<div class="row">
       			<div class="service-card__text">
       			<?php the_content(); ?>
       			</div>
       		<div class="service-card__img" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>
       		</div>

       	</article>
   		<?php else : ?>

    		<p class="alternate"><?php the_title(); ?></p>

    	<?php 
	    	$counter++;  
	    	endif; 
	    	endwhile;
    	?>

    <?php wp_reset_postdata(); ?>



</div>
</main>




<?php get_footer(); ?>