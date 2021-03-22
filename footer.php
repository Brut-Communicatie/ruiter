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
				<img src="<?php echo get_template_directory_uri();?>/content/img/ruiter_logo.png" alt="Ruiter logo"/>
			</div>
			<div class="footer__item">
				<div class="footer__navigation">
					<a href="#">Sitemap</a>
					<a href="#">Contact</a>
					<a href="#">Disclaimer</a>
					<a href="#">Privacy statement</a>
					<a href="#">Cookiebeleid</a>
				</div>

			</div>
			<div class="footer__item">
				<div class="footer__social--wrapper">
					<a href="#" target="_blank" rel="noreferrer noopener" class="footer__social">
					<img src="<?php echo get_template_directory_uri();?>/content/img/facebook-f-brands.svg" alt="Facebook logo" width="20px"/>
					</a>
					<a href="#" target="_blank" rel="noreferrer noopener" class="footer__social">
					<img src="<?php echo get_template_directory_uri();?>/content/img/twitter-brands.svg" alt="Twitter logo" width="20px"/>
					</a>
					<a href="#" target="_blank" rel="noreferrer noopener" class="footer__social">
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
