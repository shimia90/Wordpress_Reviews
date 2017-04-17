<div class="wrap">
	<h2>My Settings</h2>
	<?php
	   echo settings_errors($this->_menuSlug, false, false);
	?>
	<p>This is my settings page</p>
	<form method="post" action="options.php" id="zendvn-mp-form-setting" enctype="multipart/form-data">
		<?php echo settings_fields('zendvn_mp_options'); ?>
		<?php echo do_settings_sections($this->_menuSlug); ?>
		<p class="submit">
			<input class="button button-primary" type="submit" name="submit" value="Save Change" />
		</p>
	</form>
</div>