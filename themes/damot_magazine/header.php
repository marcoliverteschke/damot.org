<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="description" content="Marc-Oliver Teschkes Blog" />
<meta name="keywords" content="Marc Oliver Teschke Theater Fotografie Film Reviews Web Programmierung" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?> &laquo; <?php bloginfo('description'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://feeds.feedburner.com/damot" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<style type="text/css" media="screen">

<?php
// Checks to see whether it needs a sidebar or not
if (!empty($withcomments) && !is_single() ) {
?>
<?php } else { // No sidebar ?>
<?php } ?>

</style>

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?> 

<?php wp_head(); ?>

<?php
	$fonts = get_post_meta($post->ID, 'fonts', true);
	if (!empty($fonts))
	{
		echo $fonts;
	}
	$css = get_post_meta($post->ID, 'css', true);
	if (!empty($css))
	{
		echo '<style type="text/css">';
		echo $css;
		echo '</style>';
	}
?>
</head>
<body>
	<div id="header">
		<div class="container">
			<div class="span-9">
				<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
			</div>
			<div class="span-15 last">
				<div class="description"><?php bloginfo('description'); ?></div>
			</div>
		</div>
	</div>
	<div class="container">
