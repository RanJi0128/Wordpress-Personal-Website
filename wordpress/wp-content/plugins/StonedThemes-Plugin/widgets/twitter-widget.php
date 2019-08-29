<?php
class sth_twitter_widget extends WP_Widget {

	function __construct() {
		parent::__construct(
			'sth_twitter_widget',
			__( 'StonedThemes Twitter', 'sth_lang' ),
			array(
				'classname' => 'sth_twitter_widget',
				'description' => esc_html__( 'Displays your latest twitts', 'sth_lang' ),
				'customize_selective_refresh' => true
			)
		);
	}
	
	function widget( $args, $instance ) {

		$title = empty( $instance['title'] ) ? '' : apply_filters( 'widget_title', $instance['title'] );
		$username = empty( $instance['username'] ) ? '' : $instance['username'];
		$limit = empty( $instance['number'] ) ? 9 : $instance['number'];

		$CONSUMER_KEY = $instance['CONSUMER_KEY'] ;
		$CONSUMER_SECRET = $instance['CONSUMER_SECRET'] ;
		$access_token = $instance['access_token'] ;
		$access_token_secret = $instance['access_token_secret'] ;
		
		require_once("twitteroauth/twitteroauth/twitteroauth.php");
		$connection = new TwitterOAuth($CONSUMER_KEY, $CONSUMER_SECRET, $access_token, $access_token_secret);

		//$tweets = $connection->get("statuses/user_timeline", ["screen_name"=>$username,"count" => $limit, "exclude_replies" => true]);
		$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$username."&count=".$limit."&exclude_replies=true");
		$twiits = json_encode($tweets);
		$twiits1 = json_decode($twiits,true);

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
		<div class="widget widget-twitter <?php echo esc_attr($widget_footer_class);?>">
				<h3 class="widget-title collective-title"><?php echo $title;?></h3>
				<ul class="list-unstyled" data-twitter-widget data-twitter-widget-options='{"delay": 4000, "random": true}'>
					<?php foreach ($twiits1 as $tweet){
					$status_text = $tweet["text"];
						if($status_text){
							// linkify URLs
							  $status_text = preg_replace(
							    '/(https?:\/\/\S+)/',
							    '<a href="\1">\1</a>',
							    $status_text
							  );

							  // linkify twitter users
							  $status_text = preg_replace(
							    '/(^|\s)@(\w+)/',
							    '<a href="http://twitter.com/\2"><span class="user">\1@\2</span></a>',
							    $status_text
							  );

							  // linkify tags
							  $status_text = preg_replace(
							    '/(^|\s)#(\w+)/',
							    '<a href="http://search.twitter.com/search?q=%23\2"><span class="user">\1#\2</span></a>',
							    $status_text
							  );

						 	echo '<li>'.$status_text.'</li>'	;
						} 
					} ?>	
				</ul>
			</div>
		<?php	
	}

	

	function form( $instance ) {
		$title = $instance['title'];
		$username = $instance['username'];
		$number = absint( $instance['number'] );

		$CONSUMER_KEY = $instance['CONSUMER_KEY'] ;
		$CONSUMER_SECRET = $instance['CONSUMER_SECRET'] ;
		$access_token = $instance['access_token'] ;
		$access_token_secret = $instance['access_token_secret'] ;

		?>
		<p><label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title', 'wp-instagram-widget' ); ?>: <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" /></label></p>
		<p><label for="<?php echo esc_attr( $this->get_field_id( 'username' ) ); ?>"><?php esc_html_e( 'Username', 'wp-instagram-widget' ); ?>: <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'username' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'username' ) ); ?>" type="text" value="<?php echo esc_attr( $username ); ?>" /></label></p>
		<p><label for="<?php echo esc_attr( $this->get_field_id( 'number' ) ); ?>"><?php esc_html_e( 'Number of twitts', 'wp-instagram-widget' ); ?>: <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'number' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'number' ) ); ?>" type="text" value="<?php echo esc_attr( $number ); ?>" /></label></p>
		<p>Twitter Configuration API (1.1) You need to have a twitter App for your usage of the new Twitter API 1.1, login & create at <a href="https://dev.twitter.com/apps">here</a></p>
		<p><label for="<?php echo esc_attr( $this->get_field_id( 'CONSUMER_KEY' ) ); ?>"><?php esc_html_e( 'CONSUMER_KEY', 'sth_lang' ); ?>: <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'CONSUMER_KEY' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'CONSUMER_KEY' ) ); ?>" type="text" value="<?php echo esc_attr( $CONSUMER_KEY ); ?>" /></label></p>
		<p><label for="<?php echo esc_attr( $this->get_field_id( 'CONSUMER_SECRET' ) ); ?>"><?php esc_html_e( 'CONSUMER_SECRET', 'sth_lang' ); ?>: <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'CONSUMER_SECRET' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'CONSUMER_SECRET' ) ); ?>" type="text" value="<?php echo esc_attr( $CONSUMER_SECRET ); ?>" /></label></p>
		<p><label for="<?php echo esc_attr( $this->get_field_id( 'access_token' ) ); ?>"><?php esc_html_e( 'ACCESS TOKEN', 'sth_lang' ); ?>: <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'access_token' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'access_token' ) ); ?>" type="text" value="<?php echo esc_attr( $access_token ); ?>" /></label></p>
		<p><label for="<?php echo esc_attr( $this->get_field_id( 'access_token_secret' ) ); ?>"><?php esc_html_e( 'ACCESS TOKEN SECRET', 'sth_lang' ); ?>: <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'access_token_secret' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'access_token_secret' ) ); ?>" type="text" value="<?php echo esc_attr( $access_token_secret ); ?>" /></label></p>
		<?php

	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['username'] = trim( strip_tags( $new_instance['username'] ) );
		$instance['number'] = ! absint( $new_instance['number'] ) ? 9 : $new_instance['number'];

		$instance['CONSUMER_KEY'] = $new_instance['CONSUMER_KEY'] ;
		$instance['CONSUMER_SECRET'] = $new_instance['CONSUMER_SECRET'] ;
		$instance['access_token'] = $new_instance['access_token'] ;
		$instance['access_token_secret'] = $new_instance['access_token_secret'] ;
		
		return $instance;
	}
}

function sth_twitter() {
	register_widget( 'sth_twitter_widget' );
}
add_action( 'widgets_init', 'sth_twitter' );
