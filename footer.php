<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pretty_funxional
 */

?>

<footer id="colophon" class="site-footer">
	<div class="footer-style-container">

		<div class="kit ">
			<div class="container">
				<h3>Keep in touch-ish?</h3>
				<p>I pinky promise not to spam you🫰🏽</p>
				<div class="email-con">
					<input type="email" placeholder="enter your email" />
					<i class="bi bi-arrow-right"></i>
				</div>

				<div class="social-media-links">
					<ul>

						<a href="https://www.instagram.com/prettyfunxional/">
							<li><i class="fa wp-icon fa-instagram fa-lg"></i></li>
						</a>
						<a href="https://www.youtube.com/channel/UC0uP5IbFeeQv6SpjW9EZhvA">
							<li><i class="fa wp-icon fa-youtube fa-lg"></i></li>
						</a>
						<a href="https://pin.it/2z2wMsO">
							<li><i class="fa wp-icon fa-pinterest fa-lg"></i></li>
						</a>
						<a href="contact/">
							<li><i class="fa wp-icon fa-envelope fa-lg"></i></li>
						</a>
					</ul>
				</div>
			</div>


		</div>
		<div class="site-info">
			<!-- <a href="<?php echo esc_url(__('https://wordpress.org/', 'pretty-funxional')); ?>">
			<?php
			/* translators: %s: CMS name, i.e. WordPress. */
			printf(esc_html__('Proudly powered by %s', 'pretty-funxional'), 'WordPress');
			?>
		</a> -->
			<span class="sep"> | </span>
			<?php
			/* translators: 1: Theme name, 2: Theme author. */
			printf(esc_html__('Theme: %1$s by %2$s.', 'pretty-funxional'), 'pretty-funxional', '<a href="https://github.com/RuMadz">SirRu</a>');
			?>
		</div><!-- .site-info -->
	</div>

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>