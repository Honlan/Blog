<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		<h3 class="comments-title">
			<?php
				echo "<span id='numofcomments'>".get_comments_number()."</span>条评论"
			?>
		</h3>
		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ul',
					'avatar_size' => 40,

				) );
			?>
		</ol>
		<?php paginate_comments_links(); ?>
	<?php endif; // have_comments() ?>
	<?php 
		$defaults = array(
        	'fields'               => apply_filters( 'comment_form_default_fields', $fields ),
        	'comment_field'        => '<p class="comment-form-comment"><label for="comment">' . _x( '', 'noun' ) . '</label><textarea id="comment" name="comment" cols="50" rows="5" aria-required="true"></textarea></p>',
        	'must_log_in'          => '<p class="must-log-in">' .  sprintf( __( '发表评论前请<a href="%s">登陆</a>' ), wp_login_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '</p>',
        	'logged_in_as'         => '',
        	'comment_notes_before' => '<p class="comment-notes">' . __( '您的邮箱地址不会被公开' ) . ( $req ? $required_text : '' ) . '</p>',
        	'comment_notes_after'  => '',
        	'id_form'              => 'commentform',
        	'id_submit'            => 'submit',
        	'title_reply'          => __( '发表评论' ),
        	'title_reply_to'       => __( '回复 %s' ),
        	'cancel_reply_link'    => __( '取消评论' ),
        	'label_submit'         => __( '点评一下' ),
    	);
		comment_form($defaults); 
	?>
</div>