<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 */

function optionsframework_option_name() {
	
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );
	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'zw'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {


	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	$options_taxonomy = array();
 	$terms = get_terms(array(
  		'taxonomy' => 'product_cat',
  		'parent' => 0
  		));

 	if ( $terms && !is_wp_error( $terms ) ){
 	 $options_taxonomy[''] ='Vui lòng chọn danh mục sản phẩm';
        foreach ( $terms as $term ) {
            $options_taxonomy[$term->term_id] = $term->name;
        }
 	}
	
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}
	
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	$options = array();
	$imagepath =  get_template_directory_uri() . '/images/';
		
	$wp_editor_settings = array(
	  'wpautop' => true,
	  'textarea_rows' => 5,
	  'tinymce' => true,
	 );
	
	
	$options[] = array(
		'name' => __('Overview', 'zw'),
		'type' => 'heading');
		$options[] = array(
		'desc' => __('
					<strong>Web Info</strong>
					<ul>
						<li><i>Current Theme:</i> '.wp_get_theme()->get('Name').'</li>
						<li><i>Description:</i> '.wp_get_theme()->get('Description').'</li>
						<li><i>Design By:</i> '.wp_get_theme()->get('Author').'</li>
						<li><i>Version:</i> '.wp_get_theme()->get('Version').'</li>
						<li><i>Development platform:</i> Wordpress '.get_bloginfo('version').'</li>
					</ul>

					', 'zw'),
		'type' => 'info');
	$options[] = array(
		'name' => __('Thông tin công ty', 'zw'),
		'type' => 'heading');	

		$options[] = array(
		'name' => __('Logo', 'zw'),
		'desc' => __('Upload ảnh logo lên', 'zw'),
		'id' => 'logo',
		'class' => '',
		'std'	=> '',
		'type' => 'upload');

		$options[] = array(
		'desc' => __('Tên công ty', 'zw'),
		'id' => 'cong-ty',
		'std' => 'Công Ty Cổ phần ZoomWorld Invest',
		'type' => 'text');	
		
		$options[] = array(
		'desc' => __('Địa chỉ', 'zw'),
		'id' => 'dia-chi',
		'std' => ' 68 Nguyễn Huệ',
		'type' => 'text');
				
		$options[] = array(
		'desc' => __('Số điện thoại', 'zw'),
		'id' => 'dien-thoai',
		'std' => '0908 103 092',
		'type' => 'text');

		$options[] = array(
		'desc' => __('Hotline', 'zw'),
		'id' => 'hotline',
		'std' => '0908 103 092',
		'type' => 'text');

		
		$options[] = array(
		'desc' => __('Email', 'zw'),
		'id' => 'e-mail',
		'std' => sanitize_email( 'contact@zoomworld.vn' ),
		'type' => 'text',
		'subtype' => 'email');

		$options[] = array(
		'desc' => __('Website', 'zw'),
		'id' => 'website',
		'std' => 'www.zoomworld.vn',
		'type' => 'text',);	

		
	$options[] = array(
		'name' => __('Cài đặt trang chủ', 'zw'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Banner sub 1', 'zw'),
		'desc' => __('Banner dưới slider', 'zw'),
		'id' => 'banner1',
		'class' => '',
		'std'	=> '',
		'type' => 'upload');

	$options[] = array(
		'name' => __('Banner sub 2', 'zw'),
		'desc' => __('Banner dưới slider', 'zw'),
		'id' => 'banner2',
		'class' => '',
		'std'	=> '',
		'type' => 'upload');

	// $options[] = array(
	// 		'name' =>__('Lựa chọn chuyên mục News', 'zw'),
	// 		'id' => 'select_categories_news',
	// 		'type' => 'select',
	// 		'options' => $options_categories);

	// $options[] = array(
	// 		'name' =>__('Lựa chọn chuyên mục Faqs', 'zw'),
	// 		'id' => 'select_categories_faq',
	// 		'type' => 'select',
	// 		'options' => $options_categories);

	$options[] = array(
			'desc' => __('Mô tả trang chủ', 'zw'),
			'id' => 'home-des',
			'std' => '',
			'type' => 'editor',
			// 'settings' => '$wp_editor_settings',
			);
		
	$options[] = array(
		'name' => __('Cài đặt Social', 'zw'),
		'type' => 'heading');
	
	$options[] = array(
		'desc' => __('Cài đặt mạng xã hội', 'zw'),
		'type' => 'info');

	$options[] = array(
		'name' => __('Facebook', 'zw'),
		'desc' => __('Địa chỉ Facebook', 'zw'),
		'id' => 'facebook',
		'std' => '',
		'class' => 'mini',
		'type' => 'text',
		'subtype' => 'url');

	$options[] = array(
		'name' => __('Google+', 'zw'),
		'desc' => __('Địa chỉ Google+', 'zw'),
		'id' => 'googleplus',
		'std' => '',
		'class' => 'mini',
		'type' => 'text',
		'subtype' => 'url');
	
	$options[] = array(
		'name' => __('Instagram', 'zw'),
		'desc' => __('Địa chỉ Instagram', 'zw'),
		'id' => 'instagram',
		'std' => '',
		'class' => 'mini',
		'type' => 'text',
		'subtype' => 'url');
	
	$options[] = array(
		'name' => __('zalo', 'zw'),
		'desc' => __('Link Zalo', 'zw'),
		'id' => 'zalo',
		'std' => '',
		'class' => 'mini',
		'type' => 'text',
		'subtype' => 'url');
		
	$options[] = array(
		'name' => __('Youtube', 'zw'),
		'desc' => __('Địa chỉ Youtube', 'zw'),
		'id' => 'youtube',
		'std' => '',
		'class' => 'mini',
		'type' => 'text',
		'subtype' => 'url');			

	return $options;
}