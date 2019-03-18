<?php
	if ( ! file_exists( get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php' ) ) {
		// file does not exist... return an error.
		return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
	} else {
		// file exists... require it.
		require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
	}
	
	function kk_theme_setup() {
		register_nav_menus( array(
			'primary' => __('Primary Menu', 'THEMENAME' )
		));
	}

	add_action('after_setup_theme', 'kk_theme_setup');

/*
	function prefix_modify_nav_menu_args( $args ) {
		return array_merge( $args, array(
			'walker' => WP_Bootstrap_Navwalker(),
		) );
	}
	add_filter( 'wp_nav_menu_args', 'prefix_modify_nav_menu_args' );