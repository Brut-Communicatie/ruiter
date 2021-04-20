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
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!--
Start of Floodlight Tag: Please do not remove
Activity name of this tag: Pageview Ruiter Dakkapellen
URL of the webpage where the tag is expected to be placed: https://www.ruiterdakkapellen.nl/
This tag must be placed between the <body> and </body> tags, as close as possible to the opening tag.
Creation Date: 04/19/2021
-->
<script type="text/javascript">
var axel = Math.random() + "";
var a = axel * 10000000000000;
document.write('<iframe src="https://10752378.fls.doubleclick.net/activityi;src=10752378;type=pagev0;cat=pagev0;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;npa=;gdpr=${GDPR};gdpr_consent=${GDPR_CONSENT_755};ord=' + a + '?" width="1" height="1" frameborder="0" style="display:none"></iframe>');
</script>
<noscript>
<iframe src="https://10752378.fls.doubleclick.net/activityi;src=10752378;type=pagev0;cat=pagev0;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;npa=;gdpr=${GDPR};gdpr_consent=${GDPR_CONSENT_755};ord=1?" width="1" height="1" frameborder="0" style="display:none"></iframe>
</noscript>
<!-- End of Floodlight Tag: Please do not remove -->

<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'ruiterdakkapellen' ); ?></a>

	<header id="masthead" class="header" style="background-image:url('<?php echo get_template_directory_uri(  );?>/content/img/achtergrond.png');">
		<div class="header__top">
			<div class="header__top--container">
				<div class="header__top--logo">
				<a href="https://www.ruiterdakkapellen.nl" target="_blank" rel="noopener norefferer">
					<img src="<?php echo get_template_directory_uri();?>/content/img/ruiter_logo.png" width="50px" alt="Ruiter Logo"/>
				</a>
				</div>
				<p>Ruiter Dakkapellen, ruimte om te groeien</p>
				<div class="header__nav">
	
				<div class="header__nav--items">
					<a class="borderFade" href="https://www.ruiterdakkapellen.nl/vacatures" target="_blank" rel="norefferer noopener">Alle vacatures</a>
					<a class="borderFade" href="https://www.ruiterdakkapellen.nl/over-ons" target="_blank" rel="norefferer noopener">Over ons</a>
		
			</div>
		</div>
			</div>
		</div>
	
		<img class="header__image" src="<?php echo get_template_directory_uri(  );?>/content/img/achtergrond.png" width="100%" alt="Ruiter header afbeelding" />
		<div class="header__container">
			<h1>
				Werk voor </br>
				grote jongens!
			</h1>
			<p>Laat jouw jongensdroom hier uitkomen</p>
			<a>Dakkapel Monteurs</a>
		</div>
	</header><!-- #masthead -->
