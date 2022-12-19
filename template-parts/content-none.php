<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>><!-- gives every article a unique ID -->
	
	<header class="entry-header">
		<h1><?php esc_html_e('Error 404', 'wphierarchy'); ?></h1>
	</header>

	<div class="entry-content">
		<p><?php esc_html_e('No content found, sorry', 'wphierarchy'); ?></p>
	</div>

</article> 