<?php
$elements = array(
	'video',
	'video_fancybox_button',
	'countdown',
	'counter_up',
	'service_box',
	'info_box',
	'map_v3',
	'blog',
	'blog_carousel',
	'blog_special',
	'story_special',
	'story_grid',
	'story_recent',
	'team',
	'testimonial_slider',
	'demo_item',
	
);

foreach ($elements as $element) {
	include($element .'/'. $element.'.php');
}

if(class_exists('TBDonations')){
	$donations = array(
		'donation_box',
		'donaters_carousel',
		'donation_grid',
		'donation_upcoming',
		'donation_total_custom',
		'donation_slider',
	);
	
	foreach ($donations as $donation) {
		include($donation .'/'. $donation.'.php'); 
	}
}

if(class_exists('Tribe__Events__Main')){
	$events = array(
		'event_slider',
		'event_special',
	);
	
	foreach ($events as $event) {
		include($event .'/'. $event.'.php'); 
	}
}

if(class_exists('Woocommerce')){
	$wooshops = array(
		'product_grid',
	);
	
	foreach ($wooshops as $wooshop) {
		include($wooshop .'/'. $wooshop.'.php'); 
	}
}
