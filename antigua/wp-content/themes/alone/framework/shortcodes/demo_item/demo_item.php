<?php
function bearsthemes_demo_item($params, $content = null) {
    extract(shortcode_atts(array(
		'type' => 'demo',
        'demo_image' => '',
        'title' => '',
        'btn_label' => 'View Demo',
        'btn_link' => '#',
        'el_class' => ''
    ), $params));
	$class = array();
    $class[] = 'bt-demo-item';
    $class[] = $el_class;
    ob_start();
    ?>
	<div class="<?php echo esc_attr(implode(' ', $class)); ?>">
		<?php
			$attachment_image = wp_get_attachment_image_src($demo_image, 'full', false); 
			$style = 'background: #282828 url("'.esc_url($attachment_image[0]).'") no-repeat scroll center 0 / 100% auto';
		?>
		
		<div class="bt-content" style="<?php echo esc_attr($style); ?>">
			<div class="bt-overlay<?php echo esc_attr(' '.$type); ?>">
				<div class="bt-inner">
					<?php if($type == 'comming') { ?>
						<h3 class="bt-title"><?php echo $title; ?></h3>
					<?php } ?>
					<?php if($type == 'demo') { ?>
						<a class="bt-view-demo" href="<?php echo esc_url($btn_link); ?>" target="_blank"><?php echo $btn_label; ?></a>
					<?php } ?>
				</div>
			</div>
		</div>
		<?php if($type == 'demo') { ?>
			<h3 class="bt-title"><?php echo $title; ?></h3>
		<?php } ?>
	</div>
    <?php
    return ob_get_clean();
}

if(function_exists('bcore_shortcode')) { bcore_shortcode('demo_item', 'bearsthemes_demo_item'); }