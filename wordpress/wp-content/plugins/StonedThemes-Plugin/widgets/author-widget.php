<?php
class sth_author_widget extends WP_Widget {

	public function __construct() {
		// widget actual processes
		parent::__construct(
			'sth_author_widget', // Base ID
			__('StonedThemes Author Widget', 'sth_lang'), // Name
			array( 'description' => __( 'A widget for author info.', 'sth_lang' ), ) // Args
		);
	}
	public function widget( $args, $instance ) {
		 
		$title = $instance['title'];
		$author_name = $instance['author_name'];
		$author_postiion = $instance['author_postiion'];
		$author_img_url = $instance['author_img_url'];
		$link  = $instance['link'];

		$widget_footer_class = '';

		if($args['id'] == 'sidebar-2'  ) :
			$widget_footer_class = get_field('footer_sidebar1_columns','options');
		elseif($args['id'] == 'sidebar-3'  ) :	
			$widget_footer_class = get_field('footer_sidebar2_columns','options');
		elseif($args['id'] ==  'sidebar-4'  ) :	
			$widget_footer_class = get_field('footer_sidebar3_columns','options');
		elseif($args['id'] ==  'sidebar-5'  ) :		
			$widget_footer_class = get_field('footer_sidebar4_columns','options');
		endif;

		?>
			<div class="widget widget-about-me <?php echo esc_attr($widget_footer_class);?>">
				<h3 class="widget-title collective-title"><?php echo $title;?></h3>
				<div class="about-me-container">
					<div class="about-me-img">
						<img src="<?php echo $author_img_url;?>">
					</div>
					<div class="about-me-meta">
						<h2 class="about-me-name"><a href="<?php echo esc_url($link);?>"><?php echo $author_name;?></a></h2>
						<h2 class="about-me-position"><?php echo $author_postiion;?></h2>
					</div>
				</div>
			</div>
		<?php
	}
	
 	public function form( $instance ) {
		// outputs the options form on admin
		$title    			 = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
		$author_name     	 = isset( $instance['author_name'] ) ? esc_attr( $instance['author_name'] ) : '';
		$author_postiion     = isset( $instance['author_postiion'] ) ? esc_attr( $instance['author_postiion'] ) : '';
		$author_img_url		 = isset( $instance['author_img_url'] ) ? esc_attr( $instance['author_img_url'] ) : '';
		$link 				 = isset( $instance['link'] ) ? esc_attr( $instance['link'] ) : '';
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Widget Title:','sth_lang' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<p>
		<label for="<?php echo $this->get_field_id( 'author_name' ); ?>"><?php _e( 'Author Name:','sth_lang' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'author_name' ); ?>" name="<?php echo $this->get_field_name( 'author_name' ); ?>" type="text" value="<?php echo esc_attr( $author_name ); ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'author_postiion' ); ?>"><?php _e( 'Author Position:','sth_lang' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'author_postiion' ); ?>" name="<?php echo $this->get_field_name( 'author_postiion' ); ?>" type="text" value="<?php echo esc_attr( $author_postiion ); ?>" />
		</p>
		<p>
	      <label for="<?php echo $this->get_field_id( 'author_img_url' ); ?>"><?php _e( 'Author Image Url:','sth_lang' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'author_img_url' ); ?>" name="<?php echo $this->get_field_name( 'author_img_url' ); ?>" type="text" value="<?php echo esc_attr( $author_img_url ); ?>" />
	    </p>
	    <p>
	      <label for="<?php echo $this->get_field_id( 'link' ); ?>"><?php _e( 'Link:','sth_lang' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'link' ); ?>" name="<?php echo $this->get_field_name( 'link' ); ?>" type="text" value="<?php echo esc_attr( $link ); ?>" />
	    </p>
		<?php 
	}

	public function update( $new_instance, $old_instance ) {
		
		$instance = array();
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['author_name'] = $new_instance['author_name'];
		$instance['author_postiion'] = $new_instance['author_postiion'];
		$instance['author_img_url'] = $new_instance['author_img_url'];
		$instance['link'] = $new_instance['link'];

		return $instance;
		
	}
}

function sth_widget_author_init(){
	 register_widget( 'sth_author_widget' );
	}

add_action('widgets_init', 'sth_widget_author_init');	
?>