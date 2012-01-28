
<div id="footer">
	<br clear="all" />
	<div id="bottomnav">
	<?php wp_nav_menu(); ?>
	</div>



	<p id="copyright">
		Copyright &copy; <?php echo date("Y") ?> <?php bloginfo('name'); ?>.  All Rights Reserved.<br />
		No computers were harmed in the <?php timer_stop(1); ?> seconds it took to produce this page.<br /><br />
		
		Designed/Developed by <a href="http://itscalledwebdesign.com/">Lloyd Armbrust</a> &amp; hot, fresh, coffee.<br /><br />
		
		Powered by <a href="http://wordpress.org/" title="<?php bloginfo('name'); ?> is powered by Wordpress">Wordpress</a>.
	</p>
	
	<p id="wordpress">
		<a href="#" title="<?php bloginfo('name'); ?> is powered by Wordpress">&nbsp;</a>
	</p>

	<p id="lloydmedia">
		<!-- Look HTML/CSS-editor friend! I made this nice and easy for you to delete and supplant credit! -->
		<a href="#" title="Designed/Developed by LloydMedia.com">&nbsp;</a>
	</p>
	
	
	<br clear="all" />
</div>

</div>

<style type="text/css">
<!--
body {	background: transparent url('<?php bloginfo('template_directory'); ?>/images/bottom.jpg') bottom center no-repeat;	}
-->
</style>

</div>


	
	
		<?php wp_footer(); ?>
</body>
</html>
