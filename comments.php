<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 */
 
/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
    return;
?>
 
<div id="comments" class="comments-area comment-section wow fadeInUp">
 
    <?php if ( have_comments() ) : ?>
        <h4 class="comments-title">
            <?php
                printf( _nx( 'One thought on "%2$s"', '%1$s thoughts on "%2$s"', get_comments_number(), 'comments title', 'zw' ),
                    number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
            ?>
        </h4>
 
        <ol class="comment-list single-comment">
            <?php
                wp_list_comments( array(
                    'style'       => 'ol',
                    'short_ping'  => true,
                    'avatar_size' => 120,
                    'callback'          => 'zw_comment',
                ) );
            ?>
        </ol><!-- .comment-list -->

        <?php endif; // have_comments() ?>
        
        <?php
            // Are there comments to navigate through?
            if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
        ?>
        <nav class="navigation comment-navigation" role="navigation">
            <h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'zw' ); ?></h1>
            <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'zw' ) ); ?></div>
            <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'zw' ) ); ?></div>
        </nav><!-- .comment-navigation -->
        <?php endif; // Check for comment navigation ?>
 
        <?php if ( ! comments_open() && get_comments_number() ) : ?>
        <p class="no-comments"><?php _e( 'Comments are closed.' , 'zw' ); ?></p>
        <?php endif; ?>
 
   
 
    <?php global $aria_req;
        $comment_args = array( 
        'title_reply'=>'GIVE YOUR COMMENT HERE',
        'fields' => apply_filters( 'comment_form_default_fields', array(
            'author' => '<div class="row"> <p class="comment-form-author col-md-4">' . '<input id="author" name="author" type="text" placeholder="Name" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',   

            'email'  => '<p class="comment-form-email col-md-4">' .
                        '<input id="email" name="email" type="text" placeholder="Email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />'
                        .'</p>',

            'url' =>
                    '<p class="comment-form-url col-md-4">'.
                    '<input id="url" name="url" type="text" placeholder="Website" value="' . esc_attr( $commenter['comment_author_url'] ) .
                    '" size="30" /></p> </div>',
         ) ),

            'comment_field' => '<p>'.'<textarea id="comment" name="comment" cols="45" rows="8" placeholder="Comment" aria-required="true"></textarea>' .'</p>',

            'comment_notes_after' => '',
    );
    comment_form($comment_args); ?>
 
</div><!-- #comments -->