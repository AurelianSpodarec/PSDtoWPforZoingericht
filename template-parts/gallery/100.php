<div class="gallery__row">
<?php if ( have_rows( 'column' ) ): ?>
<?php while ( have_rows( 'column' ) ) : the_row(); ?>



	<?php if ( get_row_layout() == 'insert_image' ) : ?>
		<?php if ( get_sub_field( 'image') ) { ?>
			<div class="gallery__col--100">
				<?php if ( get_sub_field( 'image') ) { ?>
					<!-- <div class="gallery__img" style="background-image: url(<?php the_sub_field( 'image' ); ?>);"></div> -->
					<img class="gallery__img" src="<?php the_sub_field( 'image' ); ?>;">
				<?php } ?>
			</div>
		<?php } ?>
	<?php elseif ( get_row_layout() == 'insert_text' ) : ?>
		<div class="gallery__col--100">
			<?php the_sub_field( 'text' ); ?>
		</div>
	<?php elseif ( get_row_layout() == 'insert_button' ) : ?>
	<div class="gallery__btn-wrap">
		<a class="btn btn--secondary gallery__btn" href="<?php the_sub_field( 'button_link' ); ?>"><?php the_sub_field( 'button_name' ); ?></a>
	</div>
	<?php elseif ( get_row_layout() == 'insert_text_title' ) : ?>
		<div class="gallery__col--100">
			<h2 class="header-triangle header"><span><?php the_sub_field( 'title' ); ?></span></h2> 
			<?php the_sub_field( 'text' ); ?>
		</div>
	<?php endif; ?>

	<!-- Add -->



<?php endwhile; ?>
<?php else: ?>
<?php // no layouts found ?>
<?php endif; ?>
</div>