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
<html <?php language_attributes(); ?> prefix="og: https://ogp.me/ns#">
<head>
<meta name="title" property="og:title" content="Werken bij Ruiter Dakkapellen" />
	<meta name="description" property="og:description" content="Als grootste dakkapelspecialist in Nederland staan wij voor kwaliteit en betrouwbaarheid." />
	<meta name="image" property="og:image" content="<?php echo get_template_directory_uri(  );?>/content/img/ruiter-link.jpg" />
	<meta property="og:url" content="https://www.werkenbijruiterdakkapellen.nl" />
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<?php wp_head(); ?>
	
	

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-B46ZRKQR0X"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'G-B46ZRKQR0X');
	</script>
	<!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window, document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '533897357780431');
	fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	src="https://www.facebook.com/tr?id=533897357780431&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Facebook Pixel Code -->

	<meta name="facebook-domain-verification" content="5406wfpvnoou4d94tivwsze6rnbvhe" />
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
