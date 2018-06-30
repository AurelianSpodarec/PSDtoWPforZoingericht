<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Meta, Title, Styles, Scripts
    ================================================== -->
    <meta name="charset" content="UTF-8">
    <meta name="HandheldFriendly" content="True" />
    <meta name="viewport" content="width=device-width" />
    <title><?php  wp_title( '-', true, 'right' ) . bloginfo( 'name' ); ?></title>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
    
    <!-- FONT AWESOME | REPLACE WITH NPM IF YOU WANT-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php wp_head(); ?> 

</head>
<body <?php body_class(); ?>>


    <div class="site-nav--mobile">
    <?php
        $args = [
            'theme_location' => 'main-menu',
            'container'      => 'ul',
            'menu_class'     => 'site-nav__list',
            'container_class' => 'custom-menu-class' ,
            'walker'        => new Primary_Walker_Nav_Menu()
        ];
        wp_nav_menu( $args ); 
    ?>  
    </div>



<div class="site-canvas-animation">


<header class="site-header">
<div class="site-header__nexus">
<div class="site-header__outer">
<div class="site-header__inner">


    <div class="site-header__head">
    <?php 
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    ?>
    <a class="site-header__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
        <span>
        <img class="site-header__logo--img" src="<?php echo $image[0]; ?>" title="<?php bloginfo( 'name' ); ?>"/>
        </span>
    </a>

    <button class="site-header__hamburger">
    <div class="site-header__hamburger-bars">
        <span class="site-header__hamburger--bar"></span>
        <span class="site-header__hamburger--bar"></span>
        <span class="site-header__hamburger--bar"></span>
    </div>
    </button>
    </div>


    <div class="site-nav">
    <?php
        $args = [
            'theme_location' => 'main-menu',
            'container'      => 'ul',
            'menu_class'     => 'site-nav__list',
            'container_class' => 'custom-menu-class' ,
            'walker'        => new Primary_Walker_Nav_Menu()
        ];
        wp_nav_menu( $args ); 
    ?>  

    <ul class="site-social-icons">
        <li class="site-social-icons__item">
        <a href="#" class="site-social-icons__link">
            <i class="fa fa-facebook-square" aria-hidden="true"></i>
        </a>
        </li>
        <li class="site-social-icons__item">
        <a href="#" class="site-social-icons__link">
            <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
        </li>
        <li class="site-social-icons__item">
        <a href="#" class="site-social-icons__link">
            <i class="fa fa-twitter" aria-hidden="true"></i>
        </a>
        </li>
    </ul>
    </div>


</div>
</div>
</div>
</header>