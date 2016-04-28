<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>	
	<div class="footer-border">&nbsp;</div>

	<footer>
		<div class="address">
			<strong>TwoScore</strong><br>
			4000 Leap Road #473 <br>
			Hilliard, OH 43026<br>
			<a href="tel:6145259761">614-525-9761</a><br>
			<a href="mailto:amanda@twoscore.biz">amanda@twoscore.biz</a>
			<div class="credit">Site design by <a href="http://giraphcu.com/">Giraph Creative</a></div>
		</div>
		<div class="text-center">
			<div class="logo">
				<img src="<?php bloginfo( 'template_url' ) ?>/img/footer-logo.png">
			</div>
			<div class="social">
				<a href="https://twitter.com/CUTwoScore"><img src="<?php bloginfo( 'template_url' ) ?>/img/social-twitter.png"></a>
				<a href="https://www.linkedin.com/company/twoscore"><img src="<?php bloginfo( 'template_url' ) ?>/img/social-linkedin.png"></a>
			</div>
		</div>
	</footer>

</body>

<?php wp_footer(); ?>
</body>
</html>