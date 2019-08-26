<?php 
/************************************************************************
* Change the path to the directory that contains demo data folders.
*************************************************************************/
if ( ! function_exists( 'bcore_shortcode' ) ) {
	/*
	 * @return [string]
	 */
	function bcore_shortcode( $arg1, $arg2 ) 
	{		
		return add_shortcode( $arg1, $arg2 );
	}
}

/************************************************************************
* Change the path to the directory that contains demo data folders.
*************************************************************************/
if ( ! function_exists( 'bcore_wbc_change_demo_directory_path' ) ) {
	/**
	 * Change the path to the directory that contains demo data folders.
	 *
	 * @param [string] $demo_directory_path
	 *
	 * @return [string]
	 */
	function bcore_wbc_change_demo_directory_path( $demo_directory_path ) 
	{
		if ( file_exists( get_template_directory().'/demo-data/' ) )
			$demo_directory_path = get_template_directory().'/demo-data/';

		return $demo_directory_path;
	}
	// Uncomment the below
	add_filter('wbc_importer_dir_path', 'bcore_wbc_change_demo_directory_path' );
}

/************************************************************************
* Extended:
* Way to set menu, import revolution slider, and set home page.
*************************************************************************/
if ( ! function_exists( 'bcore_wbc_extended_extra' ) ) {
	function bcore_wbc_extended_extra( $demo_active_import , $demo_directory_path ) 
	{
		WP_Filesystem();
		global $wp_filesystem;
		
		/************************************************************************
		* Import slider(s) for the current demo being imported
		*************************************************************************/
		if ( class_exists( 'RevSlider' ) ) {			
			$revslider_dir = $demo_directory_path . '/revslider/';			
			if ( is_dir( $revslider_dir ) && $files = scandir( $revslider_dir ) ) {				
				$files = array_diff( $files, array( '.', '..' ) );				
				
				if( count( $files ) > 0 ) {
					foreach( $files as $file ) {
						$slider = new RevSlider();

						if( file_exists( $revslider_dir.$file ) )
							$slider->importSliderFromPost( true, true, $revslider_dir.$file );
					}
				}
			}
		}
		
		/************************************************************************
		* Import Custom Post Type UI for the current demo being imported
		*************************************************************************/
		if ( function_exists( 'cptui_create_custom_post_types' ) ) {
			$cptui_dir = $demo_directory_path . '/custom-post-type-ui/';
			if ( is_dir( $cptui_dir ) && $files = scandir( $cptui_dir ) ) {	
				$files = array_diff( $files, array( '.', '..' ) );

				if( count( $files ) > 0 ) {

					foreach( $files as $file ) {
						$ctpt_data = $wp_filesystem->get_contents( $cptui_dir.$file );
						list( $type, $ext ) = explode( '.' , $file );
						switch ( $type ) {
							case 'posttypes': update_option( 'cptui_post_types', json_decode( $ctpt_data, true ) ); break;
							case 'taxonomies': update_option( 'cptui_taxonomies', json_decode( $ctpt_data , true ) ); break;
						}
					}
					flush_rewrite_rules();
				}
			}
		}

		/************************************************************************
		* Setting menu & homepage
		*************************************************************************/
		if ( file_exists( $demo_directory_path . 'settings.json' ) ) {
			$ctpt_data = $wp_filesystem->get_contents( $demo_directory_path . 'settings.json' );
			$settings  = json_decode( $ctpt_data, true );

			/* Set menu */
			if( isset( $settings['menu'] ) ) {
				$menu_arr = array();
				foreach( $settings['menu'] as $key => $val ) {
					$menuitem = get_term_by( 'name', $val, 'nav_menu' );
					if ( isset( $menuitem->term_id ) ) $menu_arr[$key] = $menuitem->term_id;
				}

				if( count( $menu_arr ) > 0 ) set_theme_mod( 'nav_menu_locations', $menu_arr );
			}

			/* Set homepage */
			if( isset( $settings['homepage'] ) ) {
				$page = get_page_by_title( $settings['homepage'] );	
				if ( isset( $page->ID ) ) {
					update_option( 'page_on_front', $page->ID );
					update_option( 'show_on_front', 'page' );
				}
			}
		}
	}
	// Uncomment the below
	add_action( 'wbc_importer_after_content_import', 'bcore_wbc_extended_extra', 10, 2 );
}