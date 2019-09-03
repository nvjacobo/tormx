<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <?php wp_head(); ?>
</head>

<body data-spy="scroll" data-target=".navbarNav">


        <?php do_action( 'wp_body_open' ); ?>



        <div class="site" id="page">


        <!-- ******************* The Navbar Area ******************* -->


        <div id="wrapper-navbar" class="sticky-top" itemscope itemtype="http://schema.org/WebSite" data-spy="scroll" data-target="navbar-juntxs" data-offset="0">

                <nav id="navbar-juntxs" class="navbar navbar-expand-lg navbar-light px-lg-5 px-4 py-4 sombra">
                        <?php if ( 'container' == $container ) : ?>
                                <div class="container">
                        <?php endif; ?>
                        <!-- Your site title as branding in the menu -->
                                                                <?php if ( ! has_custom_logo() ) { ?>
                                                                <?php if ( is_front_page() && is_home() ) : ?>
                                                                <h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>
                                                                <?php else : ?>
                                                                <a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>
                                                                <?php endif; ?>
                                                                <?php } else {
                                                                        the_custom_logo();
                                                                } ?><!-- end custom logo -->

                                                                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                                        <span class="navbar-toggler-icon"></span>
                                        </button>

                                        <!-- The WordPress Menu goes here -->
                                        <?php wp_nav_menu(
                                                array(
                                                        'theme_location'  => 'primary',
                                                        'container_class' => 'collapse navbar-collapse pt-4 justify-content-end',
                                                        'container_id'    => 'navbarNav',
                                                        'menu_class'      => 'nav nav-pills pt-lg-0 pt-5',
                                                        'fallback_cb'     => '',
                                                        'menu_id'         => 'main-menu',
                                                        'depth'           => 2,
                                                        'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
                                                )
                                        ); ?>
                                <?php if ( 'container' == $container ) : ?>
                                </div><!-- .container -->
                                <?php endif; ?>

                </nav><!-- .site-navigation -->

<?php if ( is_active_sidebar( 'inicio_servicios' ) ) : ?>
        <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
                <?php dynamic_sidebar( 'inicios_servicios' ); ?>
        </div><!-- #primary-sidebar -->
<?php endif; ?>
</div><!-- #wrapper-navbar end -->
