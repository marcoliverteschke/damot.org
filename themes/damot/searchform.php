<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
<label class="hidden" for="s"><?php _e('Search for:', 'kubrick'); ?></label>
<div><input type="text" value="<?php the_search_query(); ?>" name="s" id="s" size="16" />
<input type="submit" id="searchsubmit" value="<?php _e('Search', 'kubrick'); ?>" />
</div>
</form>
