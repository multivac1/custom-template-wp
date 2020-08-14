<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
    <!-- SEO -->
    <meta name="description" content="EL ALADIN DE LA LIMPIEZA | Servicios de limpieza de alta calidad, con la atención profesional que mereces">
    <meta name="keywords" content="servicios de limpieza, empresa de limpieza, limpieza y desinfección, limpieza de tapizados, lavado de colchones y sommier, limpieza de alfombras, limpieza tapizado de vehículos">
    <meta name="author" content="Nicolas Foster">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js?ver=3.7.0"></script>
	<![endif]-->
	<?php wp_head(); ?>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Custom JS -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js" defer></script>
</head>

<body <?php body_class(); ?>>