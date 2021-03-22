<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ruiter
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'ruiterdakkapellen' ); ?></a>

	<header id="masthead" class="header" style="background-image:url('<?php echo get_template_directory_uri(  );?>/content/img/achtergrond.png');">
		<div class="header__top">
			<div class="header__top--container">
				<div class="header__top--logo">
					<img src="<?php echo get_template_directory_uri();?>/content/img/ruiter_logo.png" width="50px" alt="Ruiter Logo"/>
				</div>
				<p>Ruiter Dakkapellen, ruimte om te groeien</p>
			</div>
		</div>
		<div class="header__nav">
			<div class="header__nav--container">
				<div class="header__nav--items">
					<a class="borderFade" href="https://www.ruiterdakkapellen.nl/vacatures" target="_blank" rel="norefferer noopener">Alle vacatures</a>
					<a class="borderFade" href="https://www.ruiterdakkapellen.nl/over-ons" target="_blank" rel="norefferer noopener">Over ons</a>
				</div>
			</div>
		</div>
		<div class="header__container">
			<h1>
				Werk voor </br>
				grote jongens!
			</h1>
			<p>Laat jouw jongensdroom hier uitkomen</p>
			<a>Dakkapel Monteur</a>
		</div>
	</header><!-- #masthead -->
