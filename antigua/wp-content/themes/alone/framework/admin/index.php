<?php
require_once(ABS_PATH_ADMIN .'/tgm-plugin-activation/plugin-options.php');

/**
 * alone_wbc_importer_description
 *
 */
if( ! function_exists( 'alone_wbc_importer_description' ) ) {
	function alone_wbc_importer_description()
	{
		$validate_phpinfo_import = array(
			'memory_limit' 			=> array( 'val' => 128, 'type' => 'M' ),
			'post_max_size' 		=> array( 'val' => 64, 'type' => 'M' ),
			'upload_max_filesize' 	=> array( 'val' => 64, 'type' => 'M' ),
			'max_execution_time' 	=> array( 'val' => 180, 'type' => '' ),
			'max_input_time' 		=> array( 'val' => 180, 'type' => '' ),
		);
		
		$output = "
		<div class='validate-import-item item-header'>
			<label></label>
			<span class='val'>Requirements</span>
			<span class='val'>Your server</span>
		</div>";
		foreach( $validate_phpinfo_import as $k => $data ) :
			$val_default = ini_get( $k );
			$class = ( $val_default >= $data['val'] ) ? 'color-green' : 'color-red';
			$icon = ( $val_default >= $data['val'] ) ? '&#x2714;' : '&#x2716;';
			
			$output .= "
			<div class='validate-import-item {$class}'>
				<label>{$k}</label> 
				<span class='val requirements'>{$data['val']}{$data['type']}</span>
				<span class='val'>{$val_default}</span>
				<i class='html5-icon'>{$icon}</i>
			</div>";
		endforeach;
		
		return sprintf( '<div class="bt-verify-import-sample-data">%s <div class="table-validate-import">%s</div></div>', __( '<h4 class="title">Verify import Sample Data</h4>', 'bearscore' ), $output ) ;
	}
	add_filter('wbc_importer_description', 'alone_wbc_importer_description' );
}
