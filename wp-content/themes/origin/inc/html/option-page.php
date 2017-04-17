<div class="wrap">
	<h2>Origin Setting Page</h2>
	<form action="options.php" id="origin_setting" method="post">
		<?php settings_fields('origin-group'); ?>
		<table class="origin_page">
			<tr valign="middle">
				<th scope="row">Limit Number Slide</th>
				<td><input type="text" value="<?php echo get_option( 'origin-num-slide', '' );  ?>" name="origin-num-slide" /></td>
			</tr>
		</table>
		<?php submit_button(); ?>
	</form>
</div>