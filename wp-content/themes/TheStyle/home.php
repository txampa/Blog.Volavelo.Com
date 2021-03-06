<?php get_header(); ?>
<?php $show_sidebar = (get_option('thestyle_sidebar_home') == 'on') ? true : false; ?>

<div id="content" class="clearfix<?php if ($show_sidebar && get_option('thestyle_blog_style') == 'false') echo(' sidebar-fixedwidth'); ?>">
	<div id="boxes" class="<?php if (!$show_sidebar) echo('fullwidth'); if (get_option('thestyle_blog_style') == 'on') echo(' blogstyle-entries'); ?>">
	<?php get_template_part('includes/entry','home'); ?>
	<div id="content-bottom-bg"></div>

<?php get_footer(); ?>