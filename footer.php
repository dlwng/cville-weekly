<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cville-weekly
 */

?>

	</div><!-- #content -->
	

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="contact-text">
			<div class = "grid__col--1-of-3 grid__col">
				<p>C-VILLE Weekly</p>
			</div><div class = "grid__col--1-of-3 grid__col">
				<p>308 East Main Street</p>
			</div><div class = "grid__col--1-of-3 grid__col">
				<p>Charlottesville, VA 22902</p>
			</div>

			<div class = "grid__col--1-of-5 grid__col">
				<p>CONTACT US:</p>
			</div><div class = "grid__col--1-of-5 grid__col">
				<p>news@c-ville.com</p>
			</div><div class = "grid__col--1-of-5 grid__col">
				<p>arts@c-ville.com</p>
			</div><div class = "grid__col--1-of-5 grid__col">
				<p>editor@c-ville.com</p>
			</div><div class = "grid__col--1-of-5 grid__col">
				<p>eatdrink@c-ville.com</p>
			</div>
		</div>

		<div class="mobile-contact-text">
			<div class = "grid__col--1-of-2 grid__col mobile-column">
				<img src="<?php echo home_url(); ?>/wp-content/themes/cville-weekly/images/transp-logo.png" id="footer-logo">
				<p id="business-address">308 East Main St, <br> Charlottesville,  22902</p>
			</div><div class = "grid__col--1-of-2 grid__col mobile_column right-mobile-column">
				<p id="contact-us">CONTACT US</p>
				<p>news@c-ville.com <br> arts@c-ville.com <br> editor@c-ville.com <br> eatdrink@c-ville.com</p>
			</div>
		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

