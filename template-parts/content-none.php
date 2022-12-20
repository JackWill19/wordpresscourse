<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>><!-- gives every article a unique ID -->
	
	<header class="entry-header">
		<h1><?php esc_html_e('Error 404 - Page Not Found!', 'wphierarchy'); ?></h1>
	</header>

	<div class="entry-content">
		<p><?php esc_html_e('Sorry! We do not seem to have the content you are looking for.', 'wphierarchy'); ?></p>
		<p><?php echo get_search_form(); ?></p>
	</div>

</article> 