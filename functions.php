<?php
	function dave_files(){
		//jQuery
		wp_register_script('jQuery','https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js');
		wp_enqueue_script('jQuery');
		//js
		wp_register_script('js', get_template_directory_uri() . '/js/dave-scripts.js', array('jquery'), NULL, false);
		wp_enqueue_script('js');
		//bootstrap css
		wp_register_style('bs','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
		wp_enqueue_style('bs');
		//theme.css
		wp_enqueue_style('my-css', get_template_directory_uri() . '/css/theme.css', array(), rand(111,9999), 'all');
		//style.css
		wp_register_style('main-styles', get_stylesheet_uri(), NULL, microtime());
	}
	add_action('wp_enqueue_scripts', 'dave_files');

	function noSubsAdminBar(){
		$ourCurrentUser = wp_get_current_user();
		if(count($ourCurrentUser->roles) == 1 AND $ourCurrentUser->roles[0] == 'subscriber'){
		show_admin_bar(false);
		}
	}

	//hides admin bar from non-editorial/administrative roles
	add_action('admin_init', 'noSubsAdminBar');

	
?>