<div class="wrap">
	<h1><?php _e('WP Admin Category Search Settings', 'admin-category-search'); ?></h1>
	<div>
		<h3><?php _e('Manage the places where you want to have search', 'admin-category-search'); ?></h3>
		<hr/>
		<form method="post" action="options.php">
			<?php settings_fields( $this->_optionsGroup ); ?>
			<?php foreach( $this->_options as $key => $option ): ?>
			<p>
				<input 
					type="checkbox" 
					name="<?php echo $this->_optionsPrefix.$key;?>" 
					value="1" 
					<?php checked('1', $option['value']); ?>
					id="<?php echo $this->_optionsPrefix.$key;?>"
				/>
				<strong><?php _e($option['name'], 'admin-category-search'); ?></strong>
				&nbsp;-&nbsp;
				<?php _e($option['description'], 'admin-category-search'); ?>
			</p> 
			<?php endforeach; ?>
			<?php submit_button(); ?>
		</form>
	</div>
</div>