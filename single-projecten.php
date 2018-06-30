<?php get_header(); ?>



<main class="container">




	 
    <?php if( have_rows('gallery_main_image_wrap') ): 
        while( have_rows('gallery_main_image_wrap') ): the_row(); ?>
        <?php if (get_sub_field('gallery_main_image')) {  ?>

    	<div class="gallery__main">

    		<img src="<?php the_sub_field('gallery_main_image'); ?>">

    		<div class="gallery__main-btn-wrap">
    		<a class="btn btn--secondary gallery__main-btn" href="<?php the_sub_field('image_button_link'); ?>">NAAE DE SITE</a>
    		</div>
    	</div>

    	<?php } ?>
    <?php endwhile; endif;?>
 



<div class="section--main">


<?php if ( have_rows( 'gallery' ) ): ?>
	<?php while ( have_rows( 'gallery' ) ) : the_row(); ?>
		<?php if ( get_row_layout() == 'Block' ) : ?>
			<?php if ( have_rows( 'row' ) ): ?>
				<?php while ( have_rows( 'row' ) ) : the_row(); ?>

					<?php 


					if ( get_row_layout() == '1-1-1' ) :
						get_template_part( 'template-parts/gallery/1-1-1' );

					elseif ( get_row_layout() == '1-2' ) :
						get_template_part( 'template-parts/gallery/1-2' );

					elseif ( get_row_layout() == '100' ) :
						get_template_part( 'template-parts/gallery/100' );

					elseif ( get_row_layout() == '2-1' ) :
						get_template_part( 'template-parts/gallery/2-1' );

					elseif ( get_row_layout() == '50-50' ) :
						get_template_part( 'template-parts/gallery/50-50' );
					endif; 


					?>

				<?php endwhile; ?>
			<?php else: ?>
				<?php // no layouts found ?>
			<?php endif; ?>
		<?php endif; ?>
	<?php endwhile; ?>
<?php else: ?>
	<?php // no layouts found ?>
<?php endif; ?>

</div>
</main>

<?php get_footer(); ?>