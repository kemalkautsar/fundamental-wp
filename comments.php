<div class="comment-post">

	<?php if (get_comments_number() > 0) { ?>
		<h3 class="comment-post-title">Comments</h3>
	<?php } else { ?>
		<h3 class="comment-post-title">There are no comments yet. Start the conversation here!</h3>
	<?php } ?>
	
	<div class="comment-post-conversation">
	<?php 
		$args = array(
			'walker'            => null,
			'max_depth'         => '3',
			'style'             => 'ul',
			'callback'          => null,
			'end-callback'      => null,
			'type'              => 'all',
			'reply_text'        => 'Reply',
			'page'              => '',
			'per_page'          => '',
			'avatar_size'       => 38,
			'reverse_top_level' => null,
			'reverse_children'  => '',
			'format'            => 'html5', // or 'xhtml' if no 'HTML5' theme support
			'short_ping'        => false,   // @since 3.6
			'echo'              => true     // boolean, default is true
		);

		wp_list_comments($args, $comments);
		?>
		</div>

		<?php
		$comments_args = array(
			// change the title of send button 
			'label_submit'			=>'Post Comment',
			// remove "Text or HTML to be displayed after the set of comment fields"
			'comment_notes_after' 	=> '',
			// redefine your own textarea (the comment body)
			'comment_field' 		=> '<p class="comment-form-comment"><textarea id="comment" name="comment" aria-required="true" placeholder="Comment"></textarea></p>',
			'title_reply'			=> 'Leave a comment',
			'title_reply_before'	=> '<h4 id="reply-title" class="comment-reply-title">',
			'title_reply_after'		=> '</h4>'
		);
		
		comment_form($comments_args);
	?>
</div>