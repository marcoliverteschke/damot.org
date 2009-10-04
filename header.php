<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

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
</head>
<body>
	<?php
		if(preg_match("/MSIE 6.0/", $_SERVER["HTTP_USER_AGENT"]))
		{
			echo '<div id="ie6_fu">';
			echo '<p>Du bist wirklich noch mit Internet Explorer 6 unterwegs? Hörst du Musik noch auf Wachszylindern? Hat dein Telefon schon eine Wählscheibe?</p>';
			echo '<p>Um Himmels Willen, besorg dir <a href="http://www.apple.com/de/safari/" target="_blank">Safari</a> oder <a href="http://www.mozilla-europe.org/de/firefox/" target="_blank">Firefox</a>! Oder von mir aus <a href="http://www.microsoft.com/germany/windows/internet-explorer/default.aspx" target="_blank">Internet Explorer 8</a>. Ich warte so lange.</p>';
			echo '</div>';
		}
	?>
	<div class="container">
		<div id="header" class="span-24 last">
			<div class="span-9">
				<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
			</div>
			<div class="span-15 last">
				<div class="description"><?php bloginfo('description'); ?></div>
			</div>
		</div>
