<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="profile" href="https://gmpg.org/xfn/11"/>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentynineteen' ); ?></a>
    <header id="masthead" class="site-header"
            style="background-image: url(<?php echo get_header_image() ? esc_url( get_header_image() ) : "" ?>)">
        <div class="stripe"></div>
        <div class="site-branding-container">
            <?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
        </div><!-- .layout-wrap -->
    </header><!-- #masthead -->

    <div id="content" class="site-content">
