<?php mh_before_footer(); ?>
<?php if (is_active_sidebar('footer-1') || is_active_sidebar('footer-2') || is_active_sidebar('footer-3') || is_active_sidebar('footer-4')) { ?>
<footer class="mh-footer">
	<div class="mh-container mh-container-inner mh-footer-widgets mh-row clearfix">
		<?php if (is_active_sidebar('footer-1')) { ?>
			<div class="mh-col-1-4 mh-widget-col-1 mh-footer-area mh-footer-1">
				<?php dynamic_sidebar('footer-1'); ?>
			</div>
		<?php } ?>
		<?php if (is_active_sidebar('footer-2')) { ?>
			<div class="mh-col-1-4 mh-widget-col-1 mh-footer-area mh-footer-2">
				<?php dynamic_sidebar('footer-2'); ?>
			</div>
		<?php } ?>
		<?php if (is_active_sidebar('footer-3')) { ?>
			<div class="mh-col-1-4 mh-widget-col-1 mh-footer-area mh-footer-3">
				<?php dynamic_sidebar('footer-3'); ?>
			</div>
		<?php } ?>
		<?php if (is_active_sidebar('footer-4')) { ?>
			<div class="mh-col-1-4 mh-widget-col-1 mh-footer-area mh-footer-4">
				<?php dynamic_sidebar('footer-4'); ?>
			</div>
		<?php } ?>
	</div>
</footer>
<?php } ?><div class="mh-copyright-wrap">
	<div class="mh-container mh-container-inner clearfix">
		<p class="mh-copyright">Santafixie Group SL · CIF/VAT ESB65589863 · <a href="https://www.santafixie.com" target="_blank">www.santafixie.com</a> · <a href="https://www.volavelo.com" target="_blank">www.volavelo.com</a> · <a href="https://www.newbornriders.com" target="_blank">www.newbornriders.com</a></p>
	</div>
</div>
<?php mh_after_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>