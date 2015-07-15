</section>
</div><!--ends large-12 from header-->
<footer class="row">
<div class="CustomPanel">
<div class="small-12 columns">
	<?php do_action( 'foundationpress_before_footer' ); ?>
	<?php dynamic_sidebar( 'footer-widgets' ); ?>
	<?php do_action( 'foundationpress_after_footer' ); ?>
		<p class="rights">BeatsVancouver&copy;<br>
		2015 All Rights Reserved</p>
	</div>
</div>
</footer>
<a class="exit-off-canvas"></a>

	<?php do_action( 'foundationpress_layout_end' ); ?>
	</div>
</div>
<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
