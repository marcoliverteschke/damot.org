	<div class="span-24 last" id="footer">
		<p>
			<?php printf(__('%1$s is proudly powered by %2$s', 'kubrick'), get_bloginfo('name'),
			'<a href="http://wordpress.org/">WordPress</a>'); ?>
			<br /><?php printf(__('%1$s and %2$s.', 'kubrick'), '<a href="' . get_bloginfo('rss2_url') . '">' . __('Entries (RSS)', 'kubrick') . '</a>', '<a href="' . get_bloginfo('comments_rss2_url') . '">' . __('Comments (RSS)', 'kubrick') . '</a>'); ?>
			<!-- <?php printf(__('%d queries. %s seconds.', 'kubrick'), get_num_queries(), timer_stop(0, 3)); ?> -->
		</p>
	</div>
</div>
	<?php wp_footer(); ?>
	<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
	</script>
	<script type="text/javascript">
	_uacct = "UA-377570-1";
	urchinTracker();
	</script>
	</body>
</html>
