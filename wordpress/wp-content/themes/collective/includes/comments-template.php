<?php
add_filter('get_avatar','stonedthemes_change_avatar_css');		
function stonedthemes_change_avatar_css($class) {
	$class = str_replace("class='avatar", "class='pull-left", $class) ;
	return $class;
}
		
if ( ! function_exists( 'stonedthemes_comment' ) ) :
/**
 * Template for comments and pingbacks.
 * Used as a callback by wp_list_comments() for displaying the comments.	
 */
	function stonedthemes_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment;
		switch ( $comment->comment_type ) :
			case 'pingback' :
			case 'trackback' :
			// Display trackbacks differently than normal comments.
		?>
		<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
			<p><?php esc_html_e( 'Pingback:', 'collective' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( esc_html__( '(Edit)', 'collective' ), '<span class="edit-link">', '</span>' ); ?></p>
		<?php
				break;
			default :
			// Proceed with normal comments.
			global $post;
		?>			
			<li>				
				<?php
					$avatar_size = 60;
					if ( '0' != $comment->comment_parent )
						$avatar_size = 39;
					echo get_avatar( $comment, $avatar_size );
					?>	
				<h1 class="comment-user"><?php echo get_comment_author_link();?></h1>
				<h2 class="comment-user">
					<?php echo  get_comment_date().' , '.get_comment_time(); ?>
					<?php comment_reply_link( array_merge( $args, array( 'reply_text' => esc_html__( '/ reply','collective'), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) );?>
				</h2>	
				<div class="comment-text">
					<?php $coment_con  = get_comment_text(); ?>
					<?php echo esc_html($coment_con);?>
				</div>				
			</li>
		<?php
			break;
		endswitch; // end comment_type check
	}
endif;
/* Comments */