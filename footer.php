<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 * @package themeframework
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'themeframework' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'themeframework' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'themeframework' ), 'themeframework', '<a href="http://www.kausaralam.com" rel="designer">Kausar</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
