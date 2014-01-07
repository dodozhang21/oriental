<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package oriental
 * @since oriental 1.3.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'oriental_credits' ); ?>
			<?php printf( __( 'Proudly powered by %1$s', 'oriental' ), '<a href="http://wordpress.org/" title="A Semantic Personal Publishing Platform" rel="generator">WordPress</a> | ' ); ?>
			<?php printf( __( 'Theme %1$s by %2$s', 'oriental' ), 'oriental', '<a href="http://regretless.com/" rel="designer">Ying Zhang</a>' ); ?>
			<br />
			<?php printf( __( '%1$s', 'oriental' ), '<a id="top" href="#top">Back to top</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- .site-footer .site-footer -->
	<div class="footer-bottom"></div>
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

        <script src='http://localhost:3002/socket.io/socket.io.js'></script>
        <script src='http://localhost:3003/browser-sync-client.min.js'></script>
</body>
</html>