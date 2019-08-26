<?php
class Bearstheme_Post_List_Widget extends Bearstheme_Widget {
	function __construct() {
		parent::__construct(
			'bt_post_list', // Base ID
			__('Post List', 'bearsthemes'), // Name
			array('description' => __('Display a list of your posts on your site.', 'bearsthemes'),) // Args
        );
		
		$this->settings           = array(
			'title'  => array(
				'type'  => 'text',
				'std'   => __( 'Post List', 'bearsthemes' ),
				'label' => __( 'Title', 'bearsthemes' )
			),
			'category' => array(
				'type'   => 'bt_taxonomy',
				'std'    => '',
				'label'  => __( 'Categories', 'bearsthemes' ),
			),
			'posts_per_page' => array(
				'type'  => 'number',
				'step'  => 1,
				'min'   => 1,
				'max'   => '',
				'std'   => 3,
				'label' => __( 'Number of posts to show', 'bearsthemes' )
			),
			'orderby' => array(
				'type'  => 'select',
				'std'   => 'none',
				'label' => __( 'Order by', 'bearsthemes' ),
				'options' => array(
					'none'   => __( 'None', 'bearsthemes' ),
					'comment_count'  => __( 'Comment Count', 'bearsthemes' ),
					'title'  => __( 'Title', 'bearsthemes' ),
					'date'   => __( 'Date', 'bearsthemes' ),
					'ID'  => __( 'ID', 'bearsthemes' ),
				)
			),
			'order' => array(
				'type'  => 'select',
				'std'   => 'none',
				'label' => __( 'Order', 'bearsthemes' ),
				'options' => array(
					'none'  => __( 'None', 'bearsthemes' ),
					'asc'  => __( 'ASC', 'bearsthemes' ),
					'desc' => __( 'DESC', 'bearsthemes' ),
				)
			),
			'el_class'  => array(
				'type'  => 'text',
				'std'   => '',
				'label' => __( 'Extra Class', 'bearsthemes' )
			)
		);
		add_action('admin_enqueue_scripts', array($this, 'widget_scripts'));
	}
        
	function widget_scripts() {
		wp_enqueue_script('widget_scripts', URI_PATH . '/framework/widgets/widgets.js');
	}

	function widget( $args, $instance ) {

		ob_start();
		global $post;
		extract( $args );
                
		$title                  = apply_filters( 'widget_title', $instance['title'], $instance, $this->id_base );
		$category               = isset($instance['category'])? $instance['category'] : '';
		$posts_per_page         = absint( $instance['posts_per_page'] );
		$orderby                = sanitize_title( $instance['orderby'] );
		$order                  = sanitize_title( $instance['order'] );
		$el_class               = sanitize_title( $instance['el_class'] );
                
		echo ''.$before_widget;

		if ( $title )
				echo ''.$before_title . $title . $after_title;
		
		$query_args = array(
			'posts_per_page' => $posts_per_page,
			'orderby' => $orderby,
			'order' => $order,
			'post_type' => 'post',
			'post_status' => 'publish');
		if (isset($category) && $category != '') {
			$cats = explode(',', $category);
			$category = array();
			foreach ((array) $cats as $cat) :
			$category[] = trim($cat);
			endforeach;
			$query_args['tax_query'] = array(
									array(
										'taxonomy' => 'category',
										'field' => 'id',
										'terms' => $category
									)
							);
		}
		
		$wp_query = new WP_Query($query_args);                
		
		if ($wp_query->have_posts()){
			?>
			<ul class="bt-post-list">
				<?php while ($wp_query->have_posts()){ $wp_query->the_post(); ?>
					<li>
						<h6 class="bt-title bt-text-ellipsis"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
						<div class="bt-meta">
							<span><?php echo get_the_date('M d, Y'); ?></span>
							<span><?php _e('By ', 'bearsthemes'); echo get_the_author(); ?></span>
						</div>
					</li>
				<?php } ?>
			</ul>
		<?php 
		}
		
		wp_reset_postdata();

		echo ''.$after_widget;
                
		$content = ob_get_clean();

		echo ''.$content;
		
	}
}
/* Class Bearstheme_Post_List_Widget */
function bearstheme_post_list_widget() {
    register_widget('Bearstheme_Post_List_Widget');
}

add_action('widgets_init', 'bearstheme_post_list_widget');
