<div class="gallery__row">
<?php if ( have_rows( 'column' ) ): ?>
<?php while ( have_rows( 'column' ) ) : the_row(); ?>



	<?php if ( get_row_layout() == 'insert_image' ) : ?>
		<?php if ( get_sub_field( 'image') ) { ?>
			<div class="gallery__col--1-2">
				<?php if ( get_sub_field( 'image') ) { ?>
					<div class="gallery__img" style="background-image: url(<?php the_sub_field( 'image' ); ?>);"></div>
				<?php } ?>
			</div>
		<?php } ?>
	<?php elseif ( get_row_layout() == 'insert_text' ) : ?>
		<div class="gallery__col--1-2">
			<?php the_sub_field( 'text' ); ?>
		</div>
	<?php endif; ?>



<?php endwhile; ?>
<?php else: ?>
<?php // no layouts found ?>
<?php endif; ?>
</div>