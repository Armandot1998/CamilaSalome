<?php
require_once 'socials.php';
require_once 'post_list.php';
if(class_exists('TBDonations')){
	require_once 'recent-donation.php';
}
if (class_exists('Woocommerce')) {
	require_once 'mini_cart.php';
}