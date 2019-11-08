<?php

// global
global $field_group;
		
		
// active
acf_render_field_wrap(array(
	'label'			=> __('Active','fields'),
	'instructions'	=> '',
	'type'			=> 'true_false',
	'name'			=> 'active',
	'prefix'		=> 'acf_field_group',
	'value'			=> $field_group['active'],
	'ui'			=> 1,
	//'ui_on_text'	=> __('Active', 'fields'),
	//'ui_off_text'	=> __('Inactive', 'fields'),
));


// style
acf_render_field_wrap(array(
	'label'			=> __('Style','fields'),
	'instructions'	=> '',
	'type'			=> 'select',
	'name'			=> 'style',
	'prefix'		=> 'acf_field_group',
	'value'			=> $field_group['style'],
	'choices' 		=> array(
		'default'			=>	__("Standard (WP metabox)",'fields'),
		'seamless'			=>	__("Seamless (no metabox)",'fields'),
	)
));


// position
acf_render_field_wrap(array(
	'label'			=> __('Position','fields'),
	'instructions'	=> '',
	'type'			=> 'select',
	'name'			=> 'position',
	'prefix'		=> 'acf_field_group',
	'value'			=> $field_group['position'],
	'choices' 		=> array(
		'acf_after_title'	=> __("High (after title)",'fields'),
		'normal'			=> __("Normal (after content)",'fields'),
		'side' 				=> __("Side",'fields'),
	),
	'default_value'	=> 'normal'
));


// label_placement
acf_render_field_wrap(array(
	'label'			=> __('Label placement','fields'),
	'instructions'	=> '',
	'type'			=> 'select',
	'name'			=> 'label_placement',
	'prefix'		=> 'acf_field_group',
	'value'			=> $field_group['label_placement'],
	'choices' 		=> array(
		'top'			=>	__("Top aligned",'fields'),
		'left'			=>	__("Left aligned",'fields'),
	)
));


// instruction_placement
acf_render_field_wrap(array(
	'label'			=> __('Instruction placement','fields'),
	'instructions'	=> '',
	'type'			=> 'select',
	'name'			=> 'instruction_placement',
	'prefix'		=> 'acf_field_group',
	'value'			=> $field_group['instruction_placement'],
	'choices' 		=> array(
		'label'		=>	__("Below labels",'fields'),
		'field'		=>	__("Below fields",'fields'),
	)
));


// menu_order
acf_render_field_wrap(array(
	'label'			=> __('Order No.','fields'),
	'instructions'	=> __('Field groups with a lower order will appear first','fields'),
	'type'			=> 'number',
	'name'			=> 'menu_order',
	'prefix'		=> 'acf_field_group',
	'value'			=> $field_group['menu_order'],
));


// description
acf_render_field_wrap(array(
	'label'			=> __('Description','fields'),
	'instructions'	=> __('Shown in field group list','fields'),
	'type'			=> 'text',
	'name'			=> 'description',
	'prefix'		=> 'acf_field_group',
	'value'			=> $field_group['description'],
));


// hide on screen
$choices = array(
	'permalink'			=>	__("Permalink", 'fields'),
	'the_content'		=>	__("Content Editor",'fields'),
	'excerpt'			=>	__("Excerpt", 'fields'),
	'custom_fields'		=>	__("Custom Fields", 'fields'),
	'discussion'		=>	__("Discussion", 'fields'),
	'comments'			=>	__("Comments", 'fields'),
	'revisions'			=>	__("Revisions", 'fields'),
	'slug'				=>	__("Slug", 'fields'),
	'author'			=>	__("Author", 'fields'),
	'format'			=>	__("Format", 'fields'),
	'page_attributes'	=>	__("Page Attributes", 'fields'),
	'featured_image'	=>	__("Featured Image", 'fields'),
	'categories'		=>	__("Categories", 'fields'),
	'tags'				=>	__("Tags", 'fields'),
	'send-trackbacks'	=>	__("Send Trackbacks", 'fields'),
);
if( acf_get_setting('remove_wp_meta_box') ) {
	unset( $choices['custom_fields'] );	
}

acf_render_field_wrap(array(
	'label'			=> __('Hide on screen','fields'),
	'instructions'	=> __('<b>Select</b> items to <b>hide</b> them from the edit screen.','fields') . '<br /><br />' . __("If multiple field groups appear on an edit screen, the first field group's options will be used (the one with the lowest order number)",'fields'),
	'type'			=> 'checkbox',
	'name'			=> 'hide_on_screen',
	'prefix'		=> 'acf_field_group',
	'value'			=> $field_group['hide_on_screen'],
	'toggle'		=> true,
	'choices' 		=> $choices
));


// 3rd party settings
do_action('acf/render_field_group_settings', $field_group);
		
?>
<div class="acf-hidden">
	<input type="hidden" name="acf_field_group[key]" value="<?php echo $field_group['key']; ?>" />
</div>
<script type="text/javascript">
if( typeof acf !== 'undefined' ) {
		
	acf.newPostbox({
		'id': 'acf-field-group-options',
		'label': 'left'
	});	

}
</script>