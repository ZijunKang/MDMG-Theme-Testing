<?php
/**
 * Header template for WordPress theme.
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
    <div class="container">
        <!-- Logo -->
        <div class="logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/logo.png'); ?>" alt="Site Logo">
            </a>
        </div>

        <!-- Navigation -->
        <nav class="main-nav">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class'     => 'nav-links',
                'container'      => false,
            ));
            ?>
        </nav>

        <!-- Hamburger Menu Button -->
        <button class="hamburger-menu" aria-label="Toggle Navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <!-- Mobile Menu -->
        <div class="mobile-menu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class'     => 'mobile-nav-links',
                'container'      => false,
            ));
            ?>
        </div>
    </div>
</header>
<div class="nav-spacer"></div>
