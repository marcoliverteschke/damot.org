</div>
<div id="footer">
	<div class="container">
		<div class="span-8">
			<?php printf(__('%1$s is proudly powered by %2$s', 'kubrick'), get_bloginfo('name'),
			'<a href="http://wordpress.org/">WordPress</a>'); ?>
			<br /><?php printf(__('%1$s and %2$s.', 'kubrick'), '<a href="' . get_bloginfo('rss2_url') . '">' . __('Entries (RSS)', 'kubrick') . '</a>', '<a href="' . get_bloginfo('comments_rss2_url') . '">' . __('Comments (RSS)', 'kubrick') . '</a>'); ?>
			<!-- <?php printf(__('%d queries. %s seconds.', 'kubrick'), get_num_queries(), timer_stop(0, 3)); ?> -->
		</div>
		<div class="span-8">
			<h3>seiten</h3>
			<?php wp_list_pages('title_li=' ); ?>
		</div>
		<div class="span-8 last">
			<h3>orte</h3>
			<ul>
				<li><a href="http://marcoliverteschke.de/" target="_blank">home</a></li>
				<li><a href="http://twitter.com/marcoliver" target="_blank">twitter</a></li>
				<li><a href="http://www.flickr.com/photos/damot/" target="_blank">Flickr</a></li>
				<li><a href="http://www.lastfm.de/user/DaMOT" target="_blank">Last.fm</a></li>
				<li><a href="http://www.facebook.com/marcoliverteschke" target="_blank">Facebook</a></li>
				<li><a href="http://playground.marcoliverteschke.de/" target="_blank">spielwiese</a></li>
			</ul>
		</div>
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
