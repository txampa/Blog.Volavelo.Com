<?php /* The template for displaying a "No posts found" message. */ ?>
<div class="entry-content mh-widget">
	<?php if (is_search()) { ?>
		<div class="mh-box">
			<p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with different keywords.', 'mh-magazine-lite'); ?></p>
		</div>
	<?php } else { ?>
		<div class="mh-box">
			<p><?php esc_html_e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'mh-magazine-lite'); ?></p>
		</div>
	<?php } ?>
	<h4 class="mh-widget-title">
		<?php esc_html_e('Search', 'mh-magazine-lite'); ?>
	</h4>
	<?php get_search_form(); ?>
</div>
<div class="404-recent-articles mh-widget-col-2"><?php
	$instance = array('title' => esc_html__('Recent Articles', 'mh-magazine-lite'), 'postcount' => '6', 'sticky' => 1);
	$args = array('before_widget' => '<div class="mh-widget">', 'after_widget' => '</div>', 'before_title' => '<h4 class="mh-widget-title">', 'after_title' => '</h4>');
	the_widget('mh_custom_posts_widget', $instance , $args); ?>
</div>