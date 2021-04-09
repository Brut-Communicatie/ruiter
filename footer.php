<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ruiter
 */

?>

	<footer id="colophon" class="footer">
		<div class="footer__container">
			<div class="footer__item">
				<a href="https://www.ruiterdakkapellen.nl" target="_blank" rel="noopener norefferer">
					<img src="<?php echo get_template_directory_uri();?>/content/img/ruiter_logo.png" alt="Ruiter logo"/>
				</a>
			</div>
			<div class="footer__item">
				<div class="footer__navigation">
					<a href="https://www.ruiterdakkapellen.nl/sitemap" target="_blank" rel="noopener noreferrer">Sitemap</a>
					<a href="https://www.ruiterdakkapellen.nl/dakkapel-showroom-contact" target="_blank" rel="noopener noreferrer">Contact</a>
					<a href="https://www.ruiterdakkapellen.nl/disclaimer" target="_blank" rel="noopener noreferrer">Disclaimer</a>
					<a href="https://www.ruiterdakkapellen.nl/privacy-statement" target="_blank" rel="noopener noreferrer">Privacy statement</a>
					<a href="https://www.ruiterdakkapellen.nl/cookiebeleid" target="_blank" rel="noopener noreferrer">Cookiebeleid</a>
				</div>
			</div>
			<div class="footer__item">
				<div class="footer__social--wrapper">
					<a href="https://www.facebook.com/pages/Ruiter-Dakkapellen/173152349369415" target="_blank" rel="noreferrer noopener" class="footer__social">
						<img src="<?php echo get_template_directory_uri();?>/content/img/facebook-f-brands.svg" alt="Facebook logo" width="15px"/>
					</a>
					<a href="https://twitter.com/RuiterDakkapel" target="_blank" rel="noreferrer noopener" class="footer__social">
						<img src="<?php echo get_template_directory_uri();?>/content/img/twitter-brands.svg" alt="Twitter logo" width="20px"/>
					</a>
					<a href="https://www.youtube.com/channel/UCs49woqAjfsQolyrz-Pc2Ng" target="_blank" rel="noreferrer noopener" class="footer__social">
						<img src="<?php echo get_template_directory_uri();?>/content/img/youtube-brands.svg" alt="YouTube logo" width="20px"/>
					</a>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
