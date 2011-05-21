<?php get_header(); ?>

	<div id="content" class="span-24">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
			<?php
				if(!is_single())
				{
					$css = get_post_meta(get_the_ID(), 'css', true);
					if (!empty($css))
					{
						echo '<style type="text/css">';
						echo $css;
						echo '</style>';
					}
				}
			?>
			<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<div class="navigation">
					<span class="alignright article_nav"><?php previous_posts_link('&raquo;') ?></span>
					<span class="alignleft article_nav"><?php next_posts_link('&laquo;') ?></span>
					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'kubrick'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a><span class="comments"></span></h2>
				</div>
				<div class="entry">
					<?php the_content(__('Read the rest of this entry &raquo;', 'kubrick')); ?>
					<div class="info"><small><?php the_time(__('F jS, Y', 'kubrick')) ?> <!-- by <?php the_author() ?> --></small> | <small><?php comments_popup_link(__('No Comments &#187;', 'kubrick'), __('1 Comment &#187;', 'kubrick'), __('% Comments &#187;', 'kubrick'), '', __('Comments Closed', 'kubrick') ); ?></small></div>
				</div>
				<?php previous_post_link(); ?>
			</div>

		<?php endwhile; ?>

<!--		<div class="navigation">
			<div class="alignleft"><?php next_posts_link(__('&laquo; Older Entries', 'kubrick')) ?></div>
			<div class="alignright"><?php previous_posts_link(__('Newer Entries &raquo;', 'kubrick')) ?></div>
		</div>-->

	<?php else : ?>

		<h2 class="center"><?php _e('Not Found', 'kubrick'); ?></h2>
		<p class="center"><?php _e('Sorry, but you are looking for something that isn&#8217;t here.', 'kubrick'); ?></p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>

	</div>

<?php /*get_sidebar();*/ ?>

<?php get_footer(); ?>
