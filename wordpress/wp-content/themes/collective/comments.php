<?php if (comments_open() ):?>
	<div class="comment-form">
	   <h4 class="collective-title"><?php esc_html_e('Leave a comment','collective');?></h4>
		<div class="comment-form-controls">
			<?php
			$commenter = wp_get_current_commenter();
			$req = get_option( 'require_name_email' );
			$aria_req = ( $req ? " aria-required='true'" : '' );

			$comment_args = array(
				'id_form' => 'commentform',
				'id_submit' => 'submit',
				'title_reply' => '',
				'title_reply_to' => esc_html__( 'Leave a comment to %s', 'collective' ),
				'cancel_reply_link' => esc_html__( 'Cancel Reply', 'collective' ),
				'label_submit' => esc_html__( 'LEAVE THE COMMENT','collective' ),
				'comment_field' => '<div class="control"><textarea id="comment" name="comment" aria-required="true" placeholder="leave a comment here ... "></textarea></div>',
				'must_log_in' => '<p class="must-log-in">' .
									 sprintf(
										 wp_kses( __( 'You must be <a href="%s">logged in</a> to post a comment.', 'collective' ), array( 'a' => array( 'href' => array() ) ) ),
										 wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
									 ) . '</p>',
				'logged_in_as' => '<p class="logged-in-as">' .
									  sprintf(
										  wp_kses( __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>', 'collective' ), array( 'a' => array( 'href' => array() ) ) ),
										  admin_url( 'profile.php' ),
										  $user_identity,
										  wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
									  ) . '</p>',
				'comment_notes_before' => '',
				'comment_notes_after' => '',
				'fields' => apply_filters( 'comment_form_default_fields', array(
						'author' =>  '<div class="control"><label class="text-uppercase">name</label><input id="author" name="author" type="text" value="" ' . $aria_req . ' /></div>',
						'email' =>   '<div class="control"><label class="text-uppercase">e-mail*</label><input id="email" name="email" type="text" value=""' . $aria_req . ' /></div>',
						'website' => '<div class="control"><label class="text-uppercase">web</label><input id="website" name="website" type="text" value=""' . $aria_req . ' /></div>'
					)
				)
			);

			?>
			<?php comment_form( $comment_args); ?>	
			
		</div><!--comment-form-controls-->
	</div>	
<?php  endif; ?>
<div class="comments">

	<!-- here was the comment form -->
  
    <?php if ( post_password_required() ) : ?>
    <p class="nopassword"><?php esc_html_e( 'This post is password protected. Enter the password to view any comments.', 'collective' ); ?></p>
		
		<?php
		/* Stop the rest of comments.php from being processed,
		 * but don't kill the script entirely -- we still have
		 * to fully load the template.
		 */
		return;
		endif;		
		?>
	
		<?php if ( have_comments() ) : ?>
			<h4 class="collective-title"><?php esc_html_e( 'COMMENTS' , 'collective' ); ?> (<?php echo get_comments_number();?>)</h4>
		    <div class="current-comments">
				<ul>
					<?php           
						wp_list_comments( array( 'callback' => 'stonedthemes_comment' ) );
					?>
				</ul>
			</div><!-- #current-comments -->
			<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
				<nav id="comment-nav-below">
					<div class="nav-previous"><?php previous_comments_link('&larr; Previous'); ?></div>
					<div class="nav-next"><?php next_comments_link('Next &rarr;'); ?></div>
				</nav>
			<?php endif; // check for comment navigation ?>

			<?php
			/* If there are no comments and comments are closed, let's leave a little note, shall we?
			 * But we only want the note on posts and pages that had comments in the first place.
			 */
			if ( ! comments_open() && get_comments_number() ) : ?>
				<p class="nocomments"><?php esc_html_e( 'Comments are closed.' , 'collective' ); ?></p>
			<?php endif; ?>

		<?php endif; // have_comments() ?>
</div><!-- #comments -->
