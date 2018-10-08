<?php 

// Register and Initialize Widget
	function specia_feature_widget() {
		
	    register_widget( 'specia_feature' );
	}
	add_action( 'widgets_init', 'specia_feature_widget');

// Creating the widget
	class specia_feature extends WP_Widget {
	 
	function __construct() {
		parent::__construct(
			'specia_feature_widget', // Base ID
			__('Features Widget','specia'), // Widget Name
			array(
				'classname' => 'specia_feature',
				'description' => __('Features Widget Area','specia'),
			)
		);
		
	 }
	 public function widget($args,$instance) {
	 $args['before_widget']; ?>
		<?php if(!empty($instance['features_widget_icon'])) : ?>
			<div class="col-md-4 col-sm-6 wow fadeInDown">
				<div class="feature-item">
					<div class="feature-box-icon"> 
						<?php if(!empty($instance['features_widget_icon'])) { ?>
							<i class="fa <?php echo esc_html($instance['features_widget_icon']);?>"></i> 
						<?php } ?>					
					</div>
					
				<div class="feature-box-info">
					<?php if(!empty($instance['features_widget_title'])) { ?>
						<h4><?php echo esc_html($instance['features_widget_title']);?></h4>
					<?php }  ?>
					
					<?php if(!empty($instance['features_widget_description'])) { ?>
						<p><?php echo esc_html($instance['features_widget_description']);?></p>
					<?php } ?>
				</div>
				</div>
			</div>
		<?php endif; ?>
	<?php
	echo $args['after_widget'];
	}
	// Widget Backend
	public function form( $instance ) {
	if ( isset( $instance[ 'features_widget_title' ])){
	$features_widget_title = $instance[ 'features_widget_title' ];
	}
	else {
	$features_widget_title = '';
	}
	if ( isset( $instance[ 'features_widget_icon' ])){
	$features_widget_icon = $instance[ 'features_widget_icon' ];
	}
	else {
	$features_widget_icon = '';
	}
	
	if ( isset( $instance[ 'features_widget_description' ])){
	$features_widget_description = $instance[ 'features_widget_description' ];
	}
	else {
	$features_widget_description = '';
	}
	?>
	
		<p>
			<label for="<?php echo $this->get_field_id( 'features_widget_title' ); ?>"><?php _e( 'Title','specia' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'features_widget_title' ); ?>" name="<?php echo $this->get_field_name( 'features_widget_title' ); ?>" type="text" value="<?php if($features_widget_title) echo esc_html( $features_widget_title ); ?>" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'features_widget_icon' ); ?>"><?php _e( 'Icons','specia' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'features_widget_icon' ); ?>" name="<?php echo $this->get_field_name( 'features_widget_icon' ); ?>" type="text" value="<?php if($features_widget_icon) echo esc_html( $features_widget_icon ); ?>" />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'features_widget_description' ); ?>"><?php _e( 'Description','specia' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'features_widget_description' ); ?>" name="<?php echo $this->get_field_name( 'features_widget_description' ); ?>" type="text" value="<?php if($features_widget_description) echo esc_html( $features_widget_description ); ?>" />
		</p>
	
	<?php
    }
	     
	// Updating widget replacing old instances with new
	public function update( $new_instance, $old_instance ) {
	
	$instance = array();
		$instance['features_widget_title'] = ( ! empty( $new_instance['features_widget_title'] ) ) ? sanitize_text_field( $new_instance['features_widget_title'] ) : '';
		
		$instance['features_widget_icon'] = ( ! empty( $new_instance['features_widget_icon'] ) ) ? sanitize_text_field( $new_instance['features_widget_icon'] ) : '';
		
		$instance['features_widget_description'] = ( ! empty( $new_instance['features_widget_description'] ) ) ? sanitize_text_field( $new_instance['features_widget_description'] ) : '';
		
		return $instance;
	}
	}
?>