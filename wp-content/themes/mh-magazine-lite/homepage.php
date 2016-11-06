<?php /* Template Name: Homepage */ ?>
<?php get_header(); ?>
<div class="mh-wrapper mh-home clearfix">
	<?php dynamic_sidebar('home-1'); ?>
	<?php if (is_active_sidebar('home-2') || is_active_sidebar('home-3') || is_active_sidebar('home-4') || is_active_sidebar('home-5')) : ?>
		<div id="main-content" class="mh-content mh-home-content">
			<?php dynamic_sidebar('home-2'); ?>
			<?php if (is_active_sidebar('home-3') || is_active_sidebar('home-4')) : ?>
				<div class="mh-home-columns clearfix">
					<?php if (is_active_sidebar('home-3')) { ?>
		    			<div class="mh-widget-col-1 mh-sidebar mh-home-sidebar mh-home-area-3">
			    			<?php dynamic_sidebar('home-3'); ?>
						</div>
					<?php } ?>
					<?php if (is_active_sidebar('home-4')) { ?>
		    			<div class="mh-widget-col-1 mh-sidebar mh-home-sidebar mh-margin-left mh-home-area-4">
			    			<?php dynamic_sidebar('home-4'); ?>
						</div>
					<?php } ?>
				</div>
			<?php endif; ?>
			<?php dynamic_sidebar('home-5'); ?>
		</div>
	<?php endif; ?>
	<?php if (is_active_sidebar('home-6')) { ?>
		<div class="mh-widget-col-1 mh-sidebar mh-home-sidebar mh-home-area-6">
        	<?php dynamic_sidebar('home-6'); ?>
		</div>
	<?php } ?>
</div>
<?php get_footer(); ?>