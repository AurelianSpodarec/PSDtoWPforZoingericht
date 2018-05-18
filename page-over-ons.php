<?php get_header(); ?>

<main class="container">
<div class="section--main">

<h1><?php the_title(); ?></h1>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>             
    <?php the_content(); ?>
<?php endwhile; else:?>
    <h3>Whoops! Contact form not working!</h3>
<?php endif; ?>

<div class="service-card__img" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>

</div>
</main>

<?php get_footer(); ?>