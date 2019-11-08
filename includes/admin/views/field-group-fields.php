<div class="acf-field-list-wrap">
	
	<ul class="acf-hl acf-thead">
		<li class="li-field-order"><?php _e('Order','fields'); ?></li>
		<li class="li-field-label"><?php _e('Label','fields'); ?></li>
		<li class="li-field-name"><?php _e('Name','fields'); ?></li>
		<li class="li-field-key"><?php _e('Key','fields'); ?></li>
		<li class="li-field-type"><?php _e('Type','fields'); ?></li>
	</ul>
	
	<div class="acf-field-list<?php if( !$fields ){ echo ' -empty'; } ?>">
		
		<div class="no-fields-message">
			<?php _e("No fields. Click the <strong>+ Add Field</strong> button to create your first field.",'fields'); ?>
		</div>
		
		<?php if( $fields ):
			
			foreach( $fields as $i => $field ):
				
				acf_get_view('field-group-field', array( 'field' => $field, 'i' => $i ));
				
			endforeach;
		
		endif; ?>
		
	</div>
	
	<ul class="acf-hl acf-tfoot">
		<li class="acf-fr">
			<a href="#" class="button button-primary button-large add-field"><?php _e('+ Add Field','fields'); ?></a>
		</li>
	</ul>
	
<?php if( !$parent ):
	
	// get clone
	$clone = acf_get_valid_field(array(
		'ID'		=> 'acfcloneindex',
		'key'		=> 'acfcloneindex',
		'label'		=> __('New Field','fields'),
		'name'		=> 'new_field',
		'type'		=> 'text'
	));
	
	?>
	<script type="text/html" id="tmpl-acf-field">
	<?php acf_get_view('field-group-field', array( 'field' => $clone, 'i' => 0 )); ?>
	</script>
<?php endif;?>
	
</div>