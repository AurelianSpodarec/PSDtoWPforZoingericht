<footer class="site-footer">
<div class="site-footer__outer">
<div class="site-footer__inner">


    <div class="site-footer__row">
    <div class="site-footer__col">
        <a class="site-footer__logo" href="<?php echo get_home_url(); ?>" rel="home">
        <img class="site-footer__logo--img" src="<?php echo get_footer_image(); ?>" title="<?php bloginfo( 'name' ); ?>"/>
        </a>
        <p>Als het om wonen en werken gaat heeft u een eigen smaak en voorkeuren die betrekking hebben op uw omgeving. En wanneer u in een zakelijke omgeving werkt heeft u te maken met businesspartners en klanten, ook allemaal met een eigen smaak en voorkeuren. Daar draait het natuurlijk allemaal om: een interieur moet een uitgebalanceerde mix zijn van praktische zaken, eigen signatuur en een uitnodigende sfeer om anderen in te verwelkomen.</p>
    </div><!-- /col -->

    <div class="site-footer__col">
        <h2 class="header header-triangle"><span>Uitgelicht design</span></h2>
        <ul class="site-footer__project-list">
            <?php 
                $args = array( 
                    'post_type' => 'projecten',
                    'meta_query' => array(
                        array(
                            'key' => 'show_in_the_footer',
                            'value' => '1',
                        )
                    )
                );
                $loop = new WP_Query( $args );
            ?>

            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </ul>
    </div><!-- /col -->

    <div class="site-footer__col site-footer__contact">
        <h2 class="header header-triangle"><span>Contact Info</span></h2>

        <div class="site-footer__contact--info">
            <span>Industieweg 144 9746 CH Groningen</span>
            <span>info@zoingericht.nl 0031 050 526 16 27</span>
            <span>KVK: 299299 299 2999 22</span>
        </div>

        <p class="site-footer__contact--text">Hier kan eventueel nog wat extra informatie komen te staan. Malesuada fames ac turpis egestas. Dit en dit en dat. Blablabla. g wat extra informatie komen te staan bla blaaa.</p>
    </div><!-- /col -->
    </div><!-- /row -->


</div>
</div>
</footer>

</div>

<?php wp_footer(); ?>

</body>
</html>	