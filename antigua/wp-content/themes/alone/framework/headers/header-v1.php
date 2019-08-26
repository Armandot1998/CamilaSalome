<!-- Start Header -->
<header>
	<div id="bt_header" class="bt-header-v1 bt-header-stick"><!-- bt-header-stick/bt-header-fixed -->
		<!-- Start Header Top -->
		<div class="bt-header-top">
			<div class="row">
				<div class="container">
					<!-- Start Header Sidebar Top Left -->
					<?php if (is_active_sidebar("bearstheme-header-top-widget")) { ?>
						<div class="col-md-5">
							<?php dynamic_sidebar("bearstheme-header-top-widget"); ?>
						</div>
					<?php } ?>
					<!-- End Header Sidebar Top Left -->
					<!-- Start Header Sidebar Top Right -->
					<?php if (is_active_sidebar("bearstheme-header-top-widget-2")) { ?>
						<div class="col-md-7">
							<?php 
								dynamic_sidebar("bearstheme-header-top-widget-2"); 
								if(class_exists('TBDonations')) echo do_shortcode('[tbdonations_form]');
							?>
						</div>
					<?php } ?>
					<!-- End Header Sidebar Top Right -->
				</div>
			</div>
		</div>
		<!-- End Header Top -->
		<!-- Start Header Menu -->
		<div class="bt-header-menu">
			<div class="row">
				<div class="container">
					<div class="col-md-2">
						<div class="bt-logo">
							<a href="<?php echo esc_url(home_url()); ?>">
								<?php bearstheme_logo('v1'); ?>
							</a>
						</div>
						<div id="bt-hamburger" class="bt-hamburger visible-xs visible-sm"><span></span></div>
					</div>
					<div class="col-md-10">
						<?php
						$attr = array(
							'menu_id' => 'nav',
							'menu' => '',
							'container_class' => 'bt-menu-list hidden-xs hidden-sm ',
							'menu_class'      => 'text-center',
							'echo'            => true,
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'depth'           => 0,
						);
						$menu_locations = get_nav_menu_locations();
						if (!empty($menu_locations['main_navigation'])) {
		                    $attr['theme_location'] = 'main_navigation';
							wp_nav_menu( $attr );
		                } else { ?>
							<div class="menu-list-default">
								<?php wp_page_menu();?>
							</div>    
						<?php } ?>
						<?php if (is_active_sidebar("bearstheme-menu-right-sidebar")){ ?>
							<?php dynamic_sidebar("bearstheme-menu-right-sidebar"); ?>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<!-- End Header Menu -->
	</div>
</header>
<div class="bt-menu-canvas-overlay"></div>
<div class="bt-menu-canvas">
	<?php dynamic_sidebar("bearstheme-menu-canvas-sidebar"); ?>
</div>
<!-- End Header -->
