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

    <div id="site-nav-mobile" class="site-nav-mobile">
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



<!--     <div class="site-nav-mobile">
    <ul class="site-nav-mobile__list">
        <li class="site-nav-mobile__item"><a href="" class="site-nav-mobile__link">home</a></li>
        <li class="site-nav-mobile__item"><a href="" class="site-nav-mobile__link">diensten</a></li>
        <li class="site-nav-mobile__item"><a href="" class="site-nav-mobile__link">over ons</a></li>
        <li class="site-nav-mobile__item">
            <a href="" class="site-nav-mobile__link">projecten</a>
            <ul class="site-nav-mobile__dropdown-list">
                <li><a href="#">wonem</a></li>
                <li><a href="#">werken</a></li>
                <li><a href="#">skyboxen</a></li>
                <li><a href="#">horeca</a></li>
                <li><a href="#">3d impressies</a></li>
                <li><a href="#">Adeo Design</a></li>
            </ul>
        </li>
        <li class="site-nav-mobile__item"><a href="" class="site-nav-mobile__link">contact</a></li>
    </ul>

    <ul class="site-social">
        <li class="site-social__item">
        <a href="#" class="site-social__link">
            <i class="fa fa-facebook-square" aria-hidden="true"></i>
        </a>
        </li>
        <li class="site-social__item">
        <a href="#" class="site-social__link">
            <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
        </li>
        <li class="site-social__item">
        <a href="#" class="site-social__link">
            <i class="fa fa-twitter" aria-hidden="true"></i>
        </a>
        </li>
    </ul>
    </div> -->


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
        <img class="site-header__logo--img" src="<?php echo $image[0]; ?>" title="<?php bloginfo( 'name' ); ?>"/>
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


    <!-- <ul class="site-nav-desktop__list">
        <li class="site-nav-desktop__item"><a href="" class="site-nav-desktop__link"><span>home</span></a></li>
        <li class="site-nav-desktop__item"><a href="" class="site-nav-desktop__link"><span>diensten</span></a></li>
        <li class="site-nav-desktop__item"><a href="" class="site-nav-desktop__link"><span>over ons</span></a></li>
        <li class="site-nav-desktop__item site-nav-desktop__item--dropdown">
            <a href="" class="site-nav-desktop__link"><span>projecten</span></a>
            <ul class="site-nav-desktop__dropdown-list">
                <li><a href="#">wonem</a></li>
                <li><a href="#">werken</a></li>
                <li><a href="#">skyboxen</a></li>
                <li><a href="#">horeca</a></li>
                <li><a href="#">3d impressies</a></li>
                <li><a href="#">Adeo Design</a></li>
            </ul>
        </li>
        <li class="site-nav-desktop__item"><a href="#contact" class="site-nav-desktop__link"><span>contact</span></a></li>
    </ul> -->

    <ul class="site-social">
        <li class="site-social__item">
        <a href="#" class="site-social__link">
            <i class="fa fa-facebook-square" aria-hidden="true"></i>
        </a>
        </li>
        <li class="site-social__item">
        <a href="#" class="site-social__link">
            <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
        </li>
        <li class="site-social__item">
        <a href="#" class="site-social__link">
            <i class="fa fa-twitter" aria-hidden="true"></i>
        </a>
        </li>
    </ul>
    </div>


</div>
</div>
</div>
</header>